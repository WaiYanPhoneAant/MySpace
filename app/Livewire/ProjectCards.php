<?php

namespace App\Livewire;

use App\Models\project;
use Livewire\Component;
use Livewire\Attributes\On;

class ProjectCards extends Component
{
    public $keyword='';
    #[On('search')]
    public function updatekeyword($keyword){
        $this->keyword = $keyword;
    }
    public function render()
    {
        $projects=project::when($this->keyword,function($q){
                $q->where("name",'LIKE',"%{$this->keyword}%");
            })->get();
        return view('livewire.project-cards',compact('projects'));
    }
}
