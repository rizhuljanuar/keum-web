<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index()
    {
        return view('surat-masuk.index');
    }

    public function getList()
    {
        $datatable = [];

        for ($i=0; $i < 2; $i++) { 
            $x['no_keum'] = 'S.775/SETJEN/ROKEU/KEU.4/8/2019';
            $x['no_surat'] = '';
            $x['kode'] = '';
            $x['tanggal_dispo'] = '';
            $x['tanggal_surat'] = '08/09/2019';
            $x['asal_surat'] = 'Sekjen KLHK';
            $x['lampiran'] = '';
            $x['perihal'] = 'Evaluasi LK KLHK Semester I Tahun 2019';
            $datatable[] = $x;
        }

        echo json_encode(['data' => $datatable]);
        die();
    }

    public function pdf(Request $request)
    {
        $data = $request['rowData'];
        
        $pdf = \PDF::loadView('surat-masuk.pdf.surat-masuk', $data);
        return $pdf->download();
    }
}
