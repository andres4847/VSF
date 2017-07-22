<?php

namespace VSF\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;

class MailController extends Controller
{
    public function send(Request $request)
    {
		$emailAddressFrom = $request->input('email');
		$nombreApellidoFrom = $request->input('nombre').' '.$request->input('apellido');

    	Mail::send('emails.contacto',$request->all(), function($msj) use ($emailAddressFrom,$nombreApellidoFrom) {
    		$msj->subject('Contacto Formulario Web');	
			$msj->from($emailAddressFrom,$nombreApellidoFrom);		
    		$msj->to('info@voluntariossf.org.ar');
			$msj->replyTo($emailAddressFrom);
    	});		

		//if($isOkMail)
		//	$res = 'Tu mensaje fue enviado, gracias por contactarte!';
		//else
			//$res= 'Se produjo un error. Imntente mas tarde.';

		if(Mail::failures())
		   return response()->json(['mensaje' => 'Se produjo un error. Imntente mas tarde.']);

	    return response()->json(['mensaje' => 'Tu mensaje fue enviado, gracias por contactarte!']);

    	//Session::flash('message','Mensaje enviando correctamente');
    	//return Redirect::to('/contacto');

    }
}
