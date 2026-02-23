<?php

namespace App\Http\Livewire\Backend\Setting;

use Livewire\Component;

class DokumentIndex extends Component
{
    public function render()
    {
        return view('livewire.backend.setting.dokument-index')->layout('layouts.main');
    }
}