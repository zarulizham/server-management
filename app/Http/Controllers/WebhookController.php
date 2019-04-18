<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class WebhookController extends Controller
{
    public function fetch(Request $request)
    {
        Storage::disk('local')->put('abu.txt', json_encode($request->all()));


        // $text = '[This] is a [test] string, [eat] my [shorts].';
        // preg_match_all("/[[^]]*]/", $text, $matches);


        exec('/usr/bin/git stash');
        exec('/usr/bin/git pull');

        // var_dump($matches[0]);


        echo "K k";
    }
}
