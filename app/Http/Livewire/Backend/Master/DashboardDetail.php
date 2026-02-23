<?php

namespace App\Http\Livewire\Backend\Master;

use App\Models\Dokument;
use Livewire\Component;

class DashboardDetail extends Component
{
    public $param, $search;

    public function mount($param = null)
    {
        $this->param = $param;
    }

    public function kembali()
    {
        return redirect()->to('/dashboard');
    }

    public function view($id)
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

        $data = Dokument::where('dokument_jenis_id', $this->param)->where('aktif', 'Y')->orderby('id', 'desc')->limit(300)->get();
        // dd($data);
        if (auth()->user()->dokumen_manager == 'Y') {
            $data = Dokument::where('dokument_jenis_id', $this->param)->orderby('id', 'desc')->limit(300)->get();
        }
        if (strlen($this->search) > 2) {
            if (auth()->user()->dokumen_manager == 'Y') {
                $data = Dokument::where('dokument_jenis_id', $this->param)->where('nama_dokument', 'like', "%{$this->search}%")->orwhere('nomor_dokument', 'like', "%{$this->search}%")->limit(300)->get();
            } else {
                $data = Dokument::where('dokument_jenis_id', $this->param)->where('nama_dokument', 'like', "%{$this->search}%")->orwhere('nomor_dokument', 'like', "%{$this->search}%")->where('aktif', 'Y')->limit(300)->get();
            }
        }

        return view('livewire.backend.master.dashboard-detail', [
            "data" => $data,
            "no" => 1,
        ])->layout('layouts.main');
    }
}