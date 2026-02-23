<?php

namespace App\Http\Livewire\Document;

use App\Models\Dokument;
use App\Models\Dokument_group;
use App\Models\Dokument_jenis;
use Exception;
use Livewire\Component;
use Livewire\WithFileUploads;

class DocumentForm extends Component
{
    public $search = '';
    public $Id;
    public $nama_dokument, $nomor_dokument, $dokument_jenis_id, $dokument_group_id, $keterangan;
    public $aktif;
    public $editMode = false;
    public $stateId;
    public $file;

    use WithFileUploads;

    public function updatedFile()
    {
        $this->validate([
            "file" => 'required|mimes:pdf|max:50000'
        ]);
    }

    public function store()
    {
        $this->validate([
            'nama_dokument' => 'required',
            'nomor_dokument' => 'required',
            'dokument_jenis_id' => 'required',
            'dokument_group_id' => 'required',
        ]);
        try {
            $path = $this->file->store('dokument', 'public');
            Dokument::create([
                "nomor_dokument" => $this->nomor_dokument,
                "nama_dokument" => $this->nama_dokument,
                "keterangan" => $this->keterangan,
                "data_file" => $path,
                "dokument_jenis_id" => $this->dokument_jenis_id,
                "dokument_group_id" => $this->dokument_group_id,
                "keterangan" => $this->keterangan,
                "users_id" => auth()->user()->id
            ]);
            $this->reset();
            session()->flash('success', 'Dokument  Berhasil di simpan..');
        } catch (Exception $e) {
            session()->flash('error', 'Terjadi Kesalahan...' . $e);
        }
    }
    public function render()
    {
        $dokument_jenis = Dokument_jenis::where('aktif', 'Y')->get();
        $dokument_group = Dokument_group::where('aktif', 'Y')->get();

        return view('livewire.document.document-form', [
            'jenis' => $dokument_jenis,
            'group' => $dokument_group,
        ])->layout('layouts.main');
    }
}