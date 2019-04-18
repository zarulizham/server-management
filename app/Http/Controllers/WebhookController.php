<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class WebhookController extends Controller
{
    public function fetch(Request $request)
    {
        Storage::disk('local')->put('abu.txt', json_encode($request->all()));

        echo "K k";
    }
}
