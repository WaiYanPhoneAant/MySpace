<?php

namespace App\Livewire;

use Livewire\Component;

class Projectsearch extends Component
{
    public  $keyword;
    public function render()
    {
        return view('livewire.projectsearch');
    }
    public function search(){
        $this->dispatch('search',$this->keyword);
    }
}

