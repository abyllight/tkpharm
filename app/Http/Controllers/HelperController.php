<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class HelperController extends Controller
{
    public function storage()
    {
        Artisan::call('storage:link');
    }
}
