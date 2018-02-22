<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

class Controller extends BaseController
{
    //
    public function __construct()
    {
        $this->example = '20';
    }

    public function example() {
        return view( 'example' );
    }
}
