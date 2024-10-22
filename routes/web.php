<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Function to load both menus
if (!function_exists('loadMenu')) {
    function loadMenu()
    {
        // Load the structure.json file
        $filePath = 'structure.json';

        if (Storage::exists($filePath)) {
            $menu = json_decode(Storage::get($filePath), true);

            // If the file could not be loaded or the JSON is invalid
            if ($menu === null) {
                abort(500, "Failed to load menu from structure.json");
            }

            return $menu;
        } else {
            abort(500, "Menu file not found.");
        }
    }
}

// Function to recursively search the menu structure for submenu: true
if (!function_exists('findSubmenu')) {
    function findSubmenu($menu, $currentPath)
    {
        foreach ($menu as $item) {
            // Check if the current path matches the route or if the current path is within the route
            if (request()->is($item['route']) || request()->is($item['route'] . '/*')) {
                // If the item has a submenu, return the children as the submenu
                if (isset($item['submenu']) && $item['submenu'] === true) {
                    return $item['children']; // Return the submenu (children)
                }
            }

            // If there are children, check recursively
            if (!empty($item['children'])) {
                $submenu = findSubmenu($item['children'], $currentPath);
                if ($submenu) {
                    return $submenu; // Return the found submenu
                }
            }
        }
        return false;
    }
}

// Function to load the submenu related to the current path
if (!function_exists('submenu')) {
    function submenu()
    {
        // Load the structure.json file
        $menu = loadMenu();

        // Get the current route path
        $currentPath = request()->path();

        // Call the recursive function to find the submenu related to the current path
        return findSubmenu($menu, $currentPath);
    }
}

// Home route that loads the home
Route::get('/', function () {
    $menu = loadMenu();

    // Always return the home view with both menus
    return view('pages.home', [
        'menu' => $menu,
    ]);
})->name('home');

// Dynamic route for both section and subsection
Route::get('/{section}/{subsection?}', function ($section, $subsection = null) {
    $menu = loadMenu();

    // Determine the view name based on the section and subsection
    $viewName = 'pages.' . $section;
    if ($subsection) {
        // If there is a subsection, append it to the view name with an underscore
        $viewName .= '_' . $subsection;
    }



    // Check if the view exists in the "pages" directory
    if (view()->exists($viewName)) {
        // Return the view with both menus
        return view($viewName, [
            'menu' => $menu,
        ]);
    }

    // If the view doesn't exist, return a 404 error with the menus
    return response()->view('errors.404', [
        'menu' => $menu,
    ], 404);
})->name('dynamic.page');