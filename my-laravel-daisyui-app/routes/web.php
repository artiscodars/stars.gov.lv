<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Function to load both menus
function loadMenus()
{
    $leftMenu = json_decode(Storage::get('menu-left.json'), true);
    $topMenu = json_decode(Storage::get('menu-top.json'), true);
    return [
        'leftMenu' => $leftMenu,
        'topMenu' => $topMenu
    ];
}

// Home route that loads the home
Route::get('/', function () {
    $menus = loadMenus();

    // Always return the home view with both menus
    return view('pages.home', [
        'leftMenu' => $menus['leftMenu'],
        'topMenu' => $menus['topMenu']
    ]);
})->name('home');

// Dynamic route for both section and subsection
Route::get('/{section}/{subsection?}', function ($section, $subsection = null) {
    $menus = loadMenus();

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
            'leftMenu' => $menus['leftMenu'],
            'topMenu' => $menus['topMenu']
        ]);
    }

    // If the view doesn't exist, return a 404 error with the menus
    return response()->view('errors.404', [
        'leftMenu' => $menus['leftMenu'],
        'topMenu' => $menus['topMenu']
    ], 404);
})->name('dynamic.page');