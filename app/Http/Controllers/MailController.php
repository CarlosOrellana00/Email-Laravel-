<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;//Busca las credenciales apra envio de correo
use App\Mail\TestMailSend;


use Illuminate\Http\Request;

class MailController extends Controller
{
    //
    public function envioCorreo(){
    	$nombre = "beto";
    	$asunto = "recuperacion de contraseña";
       	try {
            // $email = new TestMail($nombre);
            $email = new TestMailSend($nombre);
            //return $email;
            Mail::to("carlosorellana.oa@gmail.com")->queue($email);
            // return $email;
            // return true;
            //return "realizado";
            return $email;     
        } catch (\Throwable $th) {
            // return false;
            return $th;
        }
    }
}
