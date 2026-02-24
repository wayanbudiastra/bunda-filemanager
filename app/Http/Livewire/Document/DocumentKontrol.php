<?php

namespace App\Http\Livewire\Document;

use App\Models\Dokument;
use Carbon\Carbon;
use Livewire\Component;

class DocumentKontrol extends Component
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

       public function update_data($id)
    {
        return redirect()->to('/document-update/' . $id);
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
       $data = Dokument::whereBetween('masa_berlaku', [
            Carbon::now(),
            Carbon::now()->addDays(90)
        ])->where('aktif', 'Y')->get();

        //dd($data);

         if (strlen($this->search) > 2) {
            if (auth()->user()->dokumen_manager == 'Y') {
                $data = Dokument::where('nama_dokument', 'like', "%{$this->search}%")->orwhere('nomor_dokument', 'like', "%{$this->search}%")->whereBetween('masa_berlaku', [
                    Carbon::now(),
                    Carbon::now()->addDays(90)
                 ])->get();
            } else {
                $data = Dokument::where('nama_dokument', 'like', "%{$this->search}%")->orwhere('nomor_dokument', 'like', "%{$this->search}%")->where('aktif', 'Y')->whereBetween('masa_berlaku', [
                        Carbon::now(),
                        Carbon::now()->addDays(90)
                 ])->get();
            }
         }

        return view('livewire.document.document-kontrol', [
            "data" => $data,
            "no" => 1,
        ])->layout('layouts.main');
    }
}
