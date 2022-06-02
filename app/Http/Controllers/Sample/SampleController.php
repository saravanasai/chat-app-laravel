<?php

namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SampleController extends Controller
{


     public function add($a,$b):int
     {

        return $a+$b;
     }

}
