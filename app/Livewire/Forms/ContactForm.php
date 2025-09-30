<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    #[Validate('required|min:5|max:60')]
    public $name = "";

    #[Validate('digits:9')]
    public $phone = "";
    
    #[Validate('required|email|max:60|min:9')]
    public $email = "";
    
    #[Validate('required|min:10|max:100')]
    public $content = "";
}
