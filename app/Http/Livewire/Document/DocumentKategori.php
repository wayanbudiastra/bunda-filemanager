<?php

namespace App\Http\Livewire\Document;

use App\Models\Dokument_jenis;
use Livewire\Component;

class DocumentKategori extends Component
{
    public $search = '';
    public $Id;
    public $nama_dokument_jenis;
    public $aktif;
    public $editMode = false;
    public $stateId;

    

    public function edit($id)
    {
        $this->reset();
        $data = Dokument_jenis::find($id);
        $this->Id = $data->id;
        $this->nama_dokument_jenis = $data->nama_dokument_jenis;
        $this->aktif = $data->aktif;
        $this->editMode = true;
        
    }

    public function update()
    {
        $this->validate([
            'nama_dokument_jenis' => 'required'
        ]);
        $data = Dokument_jenis::find($this->Id);
        $data->nama_dokument_jenis = $this->nama_dokument_jenis;
        $data->aktif = $this->aktif;
        $data->update();
        $this->editMode = true;
        $this->reset();
        session()->flash('success', 'Dokument jenis  Berhasil di update..');
    }
    public function closeModal()
    {
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId' => '#groupModal', 'actionModal' => 'hide']);
    }

    public function store()
    {

        $this->validate([
            'nama_dokument_jenis' => 'required'
        ]);
        Dokument_jenis::create([
            'nama_dokument_jenis' => $this->nama_dokument_jenis,
        ]);
        $this->reset();
        session()->flash('success', 'Dokument jenis  Berhasil di simpan..');
    }

    public function render(){
    $data = Dokument_jenis::paginate(10);
    if (strlen($this->search) > 2) {
        $data = Dokument_jenis::where('nama_dokument_jenis', 'like', "%{$this->search}%")->paginate(10);
    }
    
        return view('livewire.document.document-kategori',[
            "data"=> $data,
            "no"=>1,
        ])->layout('layouts.main');
    }
}