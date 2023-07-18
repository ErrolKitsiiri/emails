<?php

namespace App\Http\Livewire\Emails;

use App\Mail\ExampleMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class EmailComponent extends Component
{
    public function render()
    {
        return view('livewire.emails.email-component');
    }
}
