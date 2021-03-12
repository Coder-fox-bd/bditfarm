<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Trainings;

class TrainingList extends Component
{
    public $alltraining;
    use WithFileUploads;
    public $trainingName, $details, $fileName, $amount, $discount, $selected_id;
    public $updateMode = false;

    public function render()
    {
        $this->alltraining = Trainings::all();
        return view('livewire.training-list');
    }

    private function resetInput()
    {
        $this->fileName = null;
        $this->amount = null;
        $this->discount = null;
        $this->trainingName = null;
        $this->details = null;
    }

    public function store()
    {   
        $validate = $this->validate([
            'fileName' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048', // 2MB Max
            'amount' => 'required|string|max:55',
            'discount' => 'max:55',
            'trainingName' => 'required|string|max:1000',
            'details' => 'required|string|max:5000',
        ]);

        $validate['fileName'] = $this->fileName->store('trainings', 'public');
        Trainings::create($validate);
        session()->flash('alart-success', "Contacts saved successfully!");
        $this->resetInput();
    }
    public function edit($id)
    {
        $record = Trainings::findOrFail($id);
        $this->selected_id = $id;
        $this->fileName = $record->fileName;
        $this->trainingName = $record->trainingName;
        $this->amount = $record->amount;
        $this->discount = $record->discount;
        $this->details = $record->details;
        $this->updateMode = true;
    }
    public function update()
    {
        $validate = $this->validate([
            'selected_id' => 'required|numeric',
            'amount' => 'required|string|max:55',
            'discount' => 'max:55',
            'trainingName' => 'required|string|max:1000',
            'details' => 'required|string|max:5000'
        ]);

        if(!$this->fileName){
            $validate['fileName'] = ['required|image|mimes:jpg,jpeg,png,svg,gif|max:2048']; // 2MB Max
            $validate['fileName'] = $this->fileName->store('trainings', 'public');
        }
        
        if ($this->selected_id) {
            $record = Trainings::find($this->selected_id);
            $record->update($validate);
            $this->resetInput();
            session()->flash('alart-success', "Updated successfully!");
            $this->updateMode = false;
        }
    }
    public function destroy($id)
    {
        if ($id) {
            $record = Contact::where('id', $id);
            $record->delete();
        }
    }
}
