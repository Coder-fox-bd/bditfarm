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

    public function render()
    {
        $this->alltraining = Trainings::orderByDesc(column:'id')->get();
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

    public function submit()
    {   
        if(!$this->selected_id){
            $validate = $this->validate([
                'fileName' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048', // 2MB Max
                'amount' => 'required|string|max:55',
                'discount' => 'max:55',
                'trainingName' => 'required|string|max:1000',
                'details' => 'required|string|max:5000',
            ]);
            $validate['fileName'] = $this->fileName->store('trainings', 'public');
            Trainings::create($validate);
        }else{
            $validate = $this->validate([
                'selected_id' => 'required|numeric',
                'fileName' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:2048', // 2MB Max
                'amount' => 'required|string|max:55',
                'discount' => 'max:55',
                'trainingName' => 'required|string|max:1000',
                'details' => 'required|string|max:5000'
            ]);
            $validate['fileName'] = $this->fileName->store('trainings', 'public');
            $record = Trainings::find($this->selected_id);
            $record->update($validate);
        };
        session()->flash('alart-success', "Request saved successfully!");
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
    }
    public function destroy($id)
    {
        if ($id) {
            $record = Contact::where('id', $id);
            $record->delete();
        }
    }
}
