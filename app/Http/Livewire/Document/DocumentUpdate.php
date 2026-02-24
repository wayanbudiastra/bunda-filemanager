<?php

namespace App\Http\Livewire\Document;

use App\Models\Dokument;
use App\Models\Dokument_group;
use App\Models\Dokument_jenis;
use Exception;
use Livewire\Component;

class DocumentUpdate extends Component
{

    public $param;
    public $nama_dokument ='', $nomor_dokument, $aktif,  $masa_berlaku, $dokument_jenis_id, $dokument_group_id, $keterangan;

    public function mount($param = null)
    {
        $this->param = $param;
    }

    public function kembali()
    {
        return redirect()->to('/document-list');
    }
    public function update()
    {
        $this->validate([
            'nama_dokument' => 'required',
            'nomor_dokument' => 'required',
            'dokument_jenis_id' => 'required',
            'dokument_group_id' => 'required',
        ]);
        try {

            $data = Dokument::find($this->param);
            $data->update([
                "nomor_dokument" => $this->nomor_dokument,
                "nama_dokument" => $this->nama_dokument,
                "keterangan" => $this->keterangan,
                "dokument_jenis_id" => $this->dokument_jenis_id,
                "dokument_group_id" => $this->dokument_group_id,
                "masa_berlaku" => $this->masa_berlaku,
                "keterangan" => $this->keterangan,
                "users_id" => auth()->user()->id
            ]);
            return redirect()->to('/document-list');
            session()->flash('success', 'Dokument  Berhasil di simpan..');
        } catch (Exception $e) {
            session()->flash('error', 'Terjadi Kesalahan...' . $e);
        }
    }
    public function render()
    {
       
        $data = Dokument::find($this->param);
        $this->nomor_dokument = $data->nomor_dokument;
        $this->nama_dokument = $data->nama_dokument;
        $this->keterangan = $data->keterangan;
        $this->dokument_jenis_id = $data->dokument_jenis_id;
        $this->dokument_group_id = $data->dokument_group_id;
        $this->masa_berlaku = $data->masa_berlaku;
        $this->aktif = $data->aktif;
        $this->keterangan = $data->keterangan;
         
        $dokument_jenis = Dokument_jenis::where('aktif', 'Y')->get();
        $dokument_group = Dokument_group::where('aktif', 'Y')->get();

        return view('livewire.document.document-update', [
             'jenis' => $dokument_jenis,
            'group' => $dokument_group,
           
        ])->layout('layouts.main');
    }
}
