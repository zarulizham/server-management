<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class WebhookController extends Controller
{
    public function fetch(Request $request)
    {
        Storage::disk('local')->put('abu.txt', json_encode($request->all()));


        $commitMessage = $request->commits[0]['message'];


        // $commitMessage = '[This] is a [test] string, [eat] my [shorts].';
        preg_match_all("/[[^]]*]/", $commitMessage, $matches);





        $out = shell_exec('cd .. && /usr/bin/git stash && /usr/bin/git pull');

        // var_dump($matches[0]);


        echo "K k kk";
    }
}
