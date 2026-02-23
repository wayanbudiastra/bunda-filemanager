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