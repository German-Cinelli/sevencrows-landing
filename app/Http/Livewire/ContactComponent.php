<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Contact;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMailable;

class ContactComponent extends Component
{

    public $name;
    public $phone;
    public $email;
    public $message;


    public function render()
    {
        return view('livewire.contact-component');
    }

    /**
     * Boton enviar mensaje - Formulario de contacto
     */
    public function send(){

        //dd($_POST);

        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $mail = new ContactMailable([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'message' => $this->message
        ]);

        //dd($request->all());

        // Envío de correo al destinatario
        Mail::to($this->email)->send($mail);



        /**
         * Creamos un array para enviar una copia
         * del correo a nuestras direcciones
         */
        $array = array(
            'ger.cs28@gmail.com'
        );

        foreach($array as $arr){
            Mail::to($arr)->send($mail);
        }

    
       //return redirect()->route('contact.index');

       dd('envia2');

    }
}
