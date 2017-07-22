<?php

namespace VSF\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
Use Mail;
Use Session;


class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Request $request)
    {      
        $emailAddress = $request->input('email');

     //   Newsletter::subscribe($emailAddress);

      if($request->ajax()) {                  
            Newsletter::subscribe($emailAddress);

            if(Newsletter::lastActionSucceeded())
            {
                Mail::send('emails.suscribir', $request->all(),function($msj) use ($emailAddress) {
                    $msj->subject('Voluntarios Sin Fronteras');
                    $msj->to($emailAddress);
                });

                return response()->json(['mensaje' => 'Gracias por suscribirte.']);
            }

            return response()->json(['mensaje' => 'Se produjo un error, intente mas tarde.']);              

         // return response()->json(['mensaje' => 'Ya estas suscripto a nuestro newsletter.']);          
      }    
    }
}
