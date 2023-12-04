<?php

namespace App\Livewire;

use App\Models\project;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Lazy;

#[Lazy]
class ProjectCards extends Component
{
    public $keyword = '';
    public $loading = false;

    #[On('search')]
    public function updatekeyword($keyword)
    {
        $this->loading = true;
        $this->keyword = $keyword;
    }
    public function placeholder()
    {
        return view('components.lazyLoading.card');
    }
    public function render()
    {
        $projects = project::when($this->keyword !='' && $this->keyword!= 'clearSearch', function ($q) {
            $q->where("name", 'LIKE', "%{$this->keyword}%");
        })->get();
        return view('livewire.project-cards', compact('projects'));
    }
}
