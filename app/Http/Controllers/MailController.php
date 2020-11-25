<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
   public function sendEmail(){
    $details = [
      'n1' => 'Aleksandras Buteikis',  
      'n2'  => 'Evelina Oželienė',
      't1' => '2020-10-01-2020-10-31',  
      't2'  =>'2020-10-01-2020-10-31',  
      'p1' => '6.84',  
      'p2'  => '34.6',

    ];

    Mail::to("bitpaskaitos@gmail.com")->send(new TestMail($details));
    // Mail::to("aliux02@gmail.com")->send(new TestMail($details));
    
    return 'mail sent';
   }
}
