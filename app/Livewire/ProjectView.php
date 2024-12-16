<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectView extends Component
{
    public $id;
    public function placeholder()
    {
        return view('components.lazyLoading.projectView');
    }
    public function render()
    {
        try {
            $project = Project::where('id', $this->id)->firstOrFail();
            return view('livewire.project-view', compact('project'));
        } catch (\Throwable $th) {
            return back();
        }
    }
}
