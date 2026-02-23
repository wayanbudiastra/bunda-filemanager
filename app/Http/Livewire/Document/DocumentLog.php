<?php

namespace App\Http\Livewire\Document;

use App\Models\Dokument_user_log;
use Livewire\Component;

class DocumentLog extends Component
{
    public function render()
    {
       

        try {
            $data = Dokument_user_log::orderby('id', 'desc')->limit(50)->paginate(10);
           // session()->flash('success', 'Dokument  Berhasil di simpan..');
        } catch (Exception $e) {
            session()->flash('error', 'Terjadi Kesalahan...' . $e);
        }

        return view('livewire.document.document-log', [
            "data" => $data,
            "no" => 1
        ])->layout('layouts.main');
    }
}