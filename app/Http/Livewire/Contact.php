<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contacts;

class Contact extends Component
{
    public $full_name;
    public $email;
    public $contact;

    protected $rules = [
        'full_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:contacts,email,',
        'contact' => 'required|string|min:6|max:15|unique:contacts,contact,',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function onSubmit()
    {
        $this->validate();

        Contacts::create([
            'name' => $this->full_name,
            'email' => $this->email,
            'contact' => $this->contact,
        ]);
        session()->flash('alart-success', "Contacts saved successfully!");
        $this->full_name="";
        $this->email="";
        $this->contact="";
    }
}
