<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeployController extends Controller
{
    public function deploy(Request $request)
    {
        app('log')->debug('Github deploy post request');
        return 'Github deploy method fired';
    }
}
