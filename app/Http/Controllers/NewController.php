<?php

namespace App\Http\Controllers;

use App\User;

class NewController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show()
    {
        return view( 'example' );
    }
}
