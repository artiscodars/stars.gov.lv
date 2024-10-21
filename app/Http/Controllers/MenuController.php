<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function showMenu()
    {
        // Load the menu from the JSON file
        $menu = json_decode(Storage::get('structure.json'), true);

        // Pass the menu to the dashboard view (or any view you use for the home)
        return view('pages.home', ['menu' => $menu]);
    }
}