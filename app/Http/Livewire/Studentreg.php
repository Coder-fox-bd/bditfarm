<?php

namespace App\Http\Livewire;

use App\Models\Trainings;
use App\Models\Students;
use Livewire\Component;

class Studentreg extends Component
{
    public $datas;
    public $full_name;
    public $email;
    public $contact;
    public $reg_id;

    protected $rules = [
        'reg_id' => 'required|integer|max:255',
        'full_name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255,',
        'contact' => 'required|string|min:11|max:15,',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function onSubmit()
    {
        if (!$this->reg_id) {
            session()->flash('alart-danger', "Somethiing went wrong! Please Try again latter.");
        }
        $this->validate();

        Students::create([
            'training_id' => $this->reg_id,
            'name' => $this->full_name,
            'email' => $this->email,
            'contact' => $this->contact,
        ]);
        session()->flash('alart-success', "Registered successfully!");
        $this->reg_id="";
        $this->full_name="";
        $this->email="";
        $this->contact="";
    }

    public function render()
    {
        $this->datas = Trainings::all();
        return view('livewire.studentreg')
        ->layout('layouts.guest');
    }
}
