<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreviewDataController extends Controller
{
    /**
     * Preview data in json or raw format
     *
     * @return \Illuminate\Http\Response
     */
    public function load($data)
    {
        return response($data);
    }
}
