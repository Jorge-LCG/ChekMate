<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactForm;
use App\Mail\ContactMail as MailContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactMail extends Component
{
    public ContactForm $form;

    public function save()
    {
        $this->validate();

        Mail::to($this->form->email)->send(new MailContactMail($this->form->name, $this->form->phone, $this->form->email, $this->form->content));

        return redirect('/')->with('success', 'Mensaje enviado correctamente');
    }

    public function render()
    {
        return view('livewire.contact-mail');
    }
}
