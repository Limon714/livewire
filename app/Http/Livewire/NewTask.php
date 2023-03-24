<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class NewTask extends Component
{   public $newTask;
    public function render()
    {
        return view('livewire.new-task',[
        'tasks'=>Task::all(),
        'newTask'=>$this->newTask

        ]);
    }
   public function addTask(){
     $this->validate([
    'newTask'=>'required|max:10'
    ]);
       
    $task = new Task;
    $task->task=$this->newTask;
    $task->save();
    $this->resetInput();
     }
     public function resetInput(){
     $this->newTask='';
     }

     public function removeTask($id){
        Task::destroy($id);
        }

}
