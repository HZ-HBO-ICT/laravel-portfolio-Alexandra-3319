<?php
namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class DashboardController
{
    /**
     * Show the file on screen
     *
     * @return Application|Factory|View
     */
    public function show()
    {
        return view ('dashboard');
    }
}
