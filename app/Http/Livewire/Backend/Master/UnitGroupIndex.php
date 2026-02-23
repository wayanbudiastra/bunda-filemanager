<?php

namespace App\Http\Livewire\Backend\Master;

use App\Models\Dokument_group;
use Livewire\Component;

class UnitGroupIndex extends Component
{
    public $search = '';
    public $Id;
    public $nama_dokument_group;
    public $aktif;
    public $editMode = false;
    public $stateId;

    

    public function edit($id)
    {
        $this->reset();
        $data = Dokument_group::find($id);
        $this->Id = $data->id;
        $this->nama_dokument_group = $data->nama_dokument_group;
        $this->aktif = $data->aktif;
        $this->editMode = true;
        
    }

    public function update()
    {
        $this->validate([
            'nama_dokument_group' => 'required'
        ]);
        $data = Dokument_group::find($this->Id);
        $data->nama_dokument_group = $this->nama_dokument_group;
        $data->aktif = $this->aktif;
        $data->update();
        $this->editMode = true;
        $this->reset();
        session()->flash('success', 'Dokument Group  Berhasil di update..');
    }
    public function closeModal()
    {
        $this->reset();
        $this->dispatchBrowserEvent('modal', ['modalId' => '#groupModal', 'actionModal' => 'hide']);
    }

    public function store()
    {

        $this->validate([
            'nama_dokument_group' => 'required'
        ]);
        Dokument_group::create([
            'nama_dokument_group' => $this->nama_dokument_group,
        ]);
        $this->reset();
        session()->flash('success', 'Dokument Group  Berhasil di simpan..');
    }



    public function render()
    {
        $data = Dokument_group::paginate(10);
        if (strlen($this->search) > 2) {
            $data = Dokument_group::where('nama_dokument_group', 'like', "%{$this->search}%")->paginate(10);
        }


        return view('livewire.backend.master.unit-group-index', [
            'data' => $data,
            'no' => 1,
        ])->layout('layouts.main');
    }
}