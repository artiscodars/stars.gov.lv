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


// Function to find the title for the current path
if (!function_exists('getTitleFromMenu')) {
    function getTitleFromMenu($menu, $currentPath)
    {
        foreach ($menu as $item) {
            // If the current item matches the path
            if (request()->is($item['route']) || request()->is($item['route'] . '/*')) {
                // If it's an exact match, return its name
                if ($item['route'] === $currentPath) {
                    return $item['name'];
                }

                // Recursively search in children
                if (!empty($item['children'])) {
                    $title = getTitleFromMenu($item['children'], $currentPath);
                    if ($title) {
                        return $title;
                    }
                }
            }
        }
        return null;
    }
}

// Dynamic route for both section and subsection
Route::get('/{path}', function ($path) {
    $menu = loadMenu();

    // Break the path into segments
    $segments = explode('/', $path);

    // Construct the view name from the segments
    $viewName = 'pages.' . implode('_', $segments);

    // Get the current route path
    $currentPath = request()->path();

    // Get the title based on the current path
    $pageTitle = getTitleFromMenu($menu, $currentPath);

    // Check if the view exists in the "pages" directory
    if (view()->exists($viewName)) {
        // Return the view with both menus and the page title
        return view($viewName, [
            'menu' => $menu,
            'pageTitle' => $pageTitle,
        ]);
    }

    // If the view doesn't exist, return a 404 error with the menus
    return response()->view('errors.404', [
        'menu' => $menu,
    ], 404);
})->where('path', '.*')->name('dynamic.page');