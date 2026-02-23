<?php

namespace App\Http\Livewire\Document;

use App\Models\Dokument;
use App\Models\Dokument_group;
use Livewire\Component;

class DocumentUnit extends Component
{
    public $search, $param;



    public function mount($param = null)
    {
        $this->param = $param;
    }
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
        $unit = Dokument_group::find($this->param);
        $data = Dokument::where('aktif', 'Y')->where('dokument_group_id', $this->param)->orderby('id', 'desc')->limit(200)->get();
        if (auth()->user()->dokumen_manager == 'Y') {
            $data = Dokument::where('dokument_group_id', $this->param)->orderby('id', 'desc')->limit(200)->get();
        }
        if (strlen($this->search) > 2) {
            if (auth()->user()->dokumen_manager == 'Y') {
                $data = Dokument::where('dokument_group_id', $this->param)->where('nama_dokument', 'like', "%{$this->search}%")->orwhere('nomor_dokument', 'like', "%{$this->search}%")->limit(200)->get();
            } else {
                $data = Dokument::where('dokument_group_id', $this->param)->where('nama_dokument', 'like', "%{$this->search}%")->orwhere('nomor_dokument', 'like', "%{$this->search}%")->where('aktif', 'Y')->limit(200)->get();
            }
        }
        return view('livewire.document.document-unit', [
            "data" => $data,
            "unit" => $unit,
            "no" => 1,
        ])->layout('layouts.main');
    }
}