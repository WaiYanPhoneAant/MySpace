<?php

namespace App\Livewire;

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
        return view('livewire.project-cards');
    }
}
