<?php

namespace App\Http\Livewire\Backend\Master;

use App\Models\Dokument;
use App\Models\Dokument_group;
use App\Models\Dokument_jenis;
use Livewire\Component;

class DashboardIndex extends Component
{
    public $dokument_jenis_1 = "";
    public $dokument_jenis_2 = "";
    public $dokument_jenis_3 = "";
    public $dokument_jenis_4 = "";
    public $dokument_jenis_5 = "";
    public $dokument_jenis_1_counter = 0;
    public $dokument_jenis_2_counter = 0;
    public $dokument_jenis_3_counter = 0;
    public $dokument_jenis_4_counter = 0;
    public $dokument_jenis_5_counter = 0;

    public function render()
    {
        $data1 = Dokument_jenis::find(1);
        if ($data1) {
            $this->dokument_jenis_1 = $data1->nama_dokument_jenis;
        }
        $data2 = Dokument_jenis::find(2);
        if ($data2) {
            $this->dokument_jenis_2 = $data2->nama_dokument_jenis;
        }
        $data3 = Dokument_jenis::find(3);
        if ($data3) {
            $this->dokument_jenis_3 = $data3->nama_dokument_jenis;
        }
        $data4 = Dokument_jenis::find(4);
        if ($data4) {
            $this->dokument_jenis_4 = $data4->nama_dokument_jenis;
        }

        $data5 = Dokument_jenis::find(5);
        if ($data5) {
            $this->dokument_jenis_5 = $data5->nama_dokument_jenis;
        }

        $count_1 = Dokument::where('dokument_jenis_id', '1')->where('aktif', 'Y')->count();
        $count_2 = Dokument::where('dokument_jenis_id', '2')->where('aktif', 'Y')->count();
        $count_3 = Dokument::where('dokument_jenis_id', '3')->where('aktif', 'Y')->count();
        $count_4 = Dokument::where('dokument_jenis_id', '4')->where('aktif', 'Y')->count();
        $count_5 = Dokument::where('dokument_jenis_id', '5')->where('aktif', 'Y')->count();
        $this->dokument_jenis_1_counter = $count_1;
        $this->dokument_jenis_2_counter = $count_2;
        $this->dokument_jenis_3_counter = $count_3;
        $this->dokument_jenis_4_counter = $count_4;
        $this->dokument_jenis_5_counter = $count_5;

        $group = Dokument_group::where('aktif', 'Y')->get();

        return view('livewire.backend.master.dashboard-index', [
            "no" => 1,
            "data" => $group
        ])->layout('layouts.main');
    }
}