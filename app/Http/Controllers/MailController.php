<?php

namespace App\Http\Controllers;

use App\Mail\MarkdownRefus;
use Illuminate\Http\Request;
use App\Mail\MarkdownContact;
use App\Mail\MarkdownReservation;
use App\Mail\MarkdownConfirmation;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function Sendcontact(){
        Mail::to('Contact@Bayla.com')->send(new MarkdownContact);
        return redirect('contact')
            ->with('success', 'Votre message a bien été envoyé, nous reviendrons vers vous dans les meilleurs délais');
    }

    public function Sendreservation(){
        Mail::to('Contact@Bayla.com')->send(new MarkdownReservation);
        return redirect('reservation')
            ->with('success', 'Votre demande de réservation a bien été prise en compte, notre équipe reviendra vers vous par Mail pour vous confirmer cette dernière');
    }

    public function Getconfirmation(){
        
        // return view('getconfirmation');

    }

    public function Sendconfirmation(){
        if(isset($_POST['valider'])){
            Mail::to($_POST['email'])->send(new MarkdownConfirmation);
            return redirect('reservation')
            ->with('success', 'Email bien envoyé au client');
        }
        else{
            Mail::to($_POST['email'])->send(new MarkdownRefus);
            return redirect('reservation')
            ->with('success', 'Email bien envoyé au client');
        }
    }
}
