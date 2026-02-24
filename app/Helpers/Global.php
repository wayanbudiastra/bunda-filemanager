<?php

use App\Models\Dokument;

function jumlah_dokument_unit($id)
{
    $counter = 0;
    $data = Dokument::where('dokument_group_id', $id)->where('aktif', 'Y')->count();
    if ($data) {
        $counter = $data;
    }
    return $counter;
}

function masa_aktif($date)
{

    $sisa = 0;
    if($date){
 $hari_ini = date('Y-m-d');
    $masa_aktif = date('Y-m-d', strtotime($date));
    $sisa = date_diff(date_create($hari_ini), date_create($masa_aktif))->format('%a');
    }
   

    return $sisa;
}
