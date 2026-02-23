<?php

namespace App\Http\Livewire\Document;

use App\Models\Dokument;
use App\Models\Dokument_user_log;
use Livewire\Component;

class DocumentView extends Component
{

    public $param;

    public function mount($param = null)
    {
        $this->param = $param;
    }

    public function kembali()
    {
        return redirect()->to('/document-list');
    }
    public function render()
    {
        $data = Dokument::find($this->param);
        $dokument_log = Dokument_user_log::create(["dokument_id" => $data->id, "users_id" => auth()->user()->id]);
        return view('livewire.document.document-view', ["data" => $data])->layout('layouts.main');
    }
}