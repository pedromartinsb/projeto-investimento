<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function homepage()
    {
        $variavel = "Homepage do sistema de gestão para grupos de investimentos";

        return view('welcome', [
            'title' => $variavel
        ]);
    }

    /**
     * method to user login VIEW
     * ========================================================================
     */
    public function fazerLogin() 
    {
        return view('user.login');
    }

}
