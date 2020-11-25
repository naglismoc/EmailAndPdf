<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function index (){
        return view('index');
    }

    public function businessCard (){
       $pdf = PDF::loadView('index');
       return $pdf->download('Naglio visitkė.pdf');
    }
}
