<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Home route that loads the dashboard
Route::get('/', function () {
    // Load the menu from the JSON file
    $menu = json_decode(Storage::get('menu.json'), true);

    return view('pages.dashboard', ['menu' => $menu]);
})->name('home');

// Dynamic route for both section and subsection
Route::get('/{section}/{subsection?}', function ($section, $subsection = null) {
    // Load the menu from the JSON file
    $menu = json_decode(Storage::get('menu.json'), true);

    // Determine the view name based on the section and subsection
    $viewName = 'pages.' . $section;
    if ($subsection) {
        // If there is a subsection, append it to the view name with an underscore
        $viewName .= '_' . $subsection;
    }

    // Check if the view exists in the "pages" directory
    if (view()->exists($viewName)) {
        return view($viewName, ['menu' => $menu]);
    }

    // If the view doesn't exist, return a 404 error
    abort(404);
})->name('dynamic.page');