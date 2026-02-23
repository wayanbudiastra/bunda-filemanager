<?php

namespace App\Http\Livewire\Document;

use App\Models\Dokument;
use League\CommonMark\Node\Block\Document;
use Livewire\Component;

class DocumentList extends Component
{
    public $search;

    public function edit($id)
    {
        return redirect()->to('/document-view/' . $id);
    }

    public function update($id)
    {
        return redirect()->to('/document-view/' . $id);
    }

    public function aktifkan($id)
    {
        $data = Dokument::find($id);
        $data->update(['aktif' => 'Y']);
    }
    public function nonaktifkan($id)
    {
        $data = Dokument::find($id);
        $data->update(['aktif' => 'N']);
    }

    public function render()
    {
        $data = Dokument::where('aktif', 'Y')->orderby('id', 'desc')->limit(50)->get();
        if (auth()->user()->dokumen_manager == 'Y') {
            $data = Dokument::orderby('id', 'desc')->limit(50)->get();
        }
        if (strlen($this->search) > 2) {
            if (auth()->user()->dokumen_manager == 'Y') {
                $data = Dokument::where('nama_dokument', 'like', "%{$this->search}%")->orwhere('nomor_dokument', 'like', "%{$this->search}%")->limit(50)->get();
            } else {
                $data = Dokument::where('nama_dokument', 'like', "%{$this->search}%")->orwhere('nomor_dokument', 'like', "%{$this->search}%")->where('aktif', 'Y')->limit(50)->get();
            }
        }
        return view('livewire.document.document-list', [
            "data" => $data,
            "no" => 1,
        ])->layout('layouts.main');
    }
}