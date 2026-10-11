<?php

namespace App\Controllers;

class Cicilan extends BaseController
{
    
   public function index()
    {
        return view('simulasi_form');
    }

    public function hitung()
    {
        $plafon = $this->request->getPost('plafon'); // Jumlah pinjaman
        $bunga_tahun = $this->request->getPost('bunga'); // Bunga per tahun (misal: 12 untuk 12%)
        $tenor = $this->request->getPost('tenor'); // Tenor dalam bulan

        // Perhitungan Bunga Flat
        $pokok_per_bulan = $plafon / $tenor;
        $bunga_per_bulan = ($plafon * ($bunga_tahun / 100)) / 12;
        $total_angsuran = $pokok_per_bulan + $bunga_per_bulan;

        $tabel_angsuran = [];
        $sisa_hutang = $plafon;

        for ($i = 1; $i <= $tenor; $i++) {
            $sisa_hutang -= $pokok_per_bulan;
            $tabel_angsuran[] = [
                'bulan' => $i,
                'angsuran_pokok' => $pokok_per_bulan,
                'bunga' => $bunga_per_bulan,
                'total_angsuran' => $total_angsuran,
                'sisa_hutang' => max(0, $sisa_hutang)
            ];
        }

        $data = [
            'plafon' => $plafon,
            'bunga_tahun' => $bunga_tahun,
            'tenor' => $tenor,
            'total_angsuran' => $total_angsuran,
            'tabel_angsuran' => $tabel_angsuran
        ];

        return view('simulasi_view', $data);
    }
}
