<?php
namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ProfileController
{
    /**
     * Show the file on screen
     *
     * @return Application|Factory|View
     */
    public function show() : Application|Factory|View
    {
        return view('profile');
    }
}
