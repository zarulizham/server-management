<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;

class HomeController extends Controller
{
    public function index()
    {

        $process = new Process(['whoami']);
        $process->run();

        dd($process->getOutput());
    }
}
