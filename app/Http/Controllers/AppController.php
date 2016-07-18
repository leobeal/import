<?php

namespace App\Http\Controllers;

use App\Classes\FlubDataImporter;
use App\Classes\GlorfDataImporter;
use Illuminate\Http\Request;

use App\Http\Requests;

class AppController extends Controller
{
    public function flub(){

        $flub = new FlubDataImporter();
        $result = $flub->import();
    }
    public function glorf(){

        $glorf = new GlorfDataImporter();
        $result = $glorf->import();
    }
}
