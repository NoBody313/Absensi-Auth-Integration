<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;

class AbsensiController extends Controller
{
    public function index()
    {
        return view('absensi');
    }

    public function logicAbsensi(Request $request)
    {
        $nama = $request->nama;
        $nik = $request->nik;
        $bulan = $request->bulan;
        $noRek = $request->noRek;

        $tanggalMasuk1 = $request->tanggalMasuk1;
        $tanggalMasuk2 = $request->tanggalMasuk2;
        $tanggalMasuk3 = $request->tanggalMasuk3;
        $tanggalMasuk4 = $request->tanggalMasuk4;
        $tanggalMasuk5 = $request->tanggalMasuk5;

        $jamMasuk1 = $request->jamMasuk1;
        $jamMasuk2 = $request->jamMasuk2;
        $jamMasuk3 = $request->jamMasuk3;
        $jamMasuk4 = $request->jamMasuk4;
        $jamMasuk5 = $request->jamMasuk5;

        $jamKeluar1 = $request->jamKeluar1;
        $jamKeluar2 = $request->jamKeluar2;
        $jamKeluar3 = $request->jamKeluar3;
        $jamKeluar4 = $request->jamKeluar4;
        $jamKeluar5 = $request->jamKeluar5;

        $keterangan1 = $request->keterangan1;
        $keterangan2 = $request->keterangan2;
        $keterangan3 = $request->keterangan3;
        $keterangan4 = $request->keterangan4;
        $keterangan5 = $request->keterangan5;

        // Load the template
        $templatePath = public_path('/templateAbsensi.docx');
        $phpWord = new TemplateProcessor($templatePath);

        $phpWord->setValues([
            'nama' => $nama,
            'nik' => $nik,
            'bulan' => $bulan,
            'noRek' => $noRek,
            'tanggalMasuk1' => $tanggalMasuk1,
            'tanggalMasuk2' => $tanggalMasuk2,
            'tanggalMasuk3' => $tanggalMasuk3,
            'tanggalMasuk4' => $tanggalMasuk4,
            'tanggalMasuk5' => $tanggalMasuk5,
            'jamMasuk1' => $jamMasuk1,
            'jamMasuk2' => $jamMasuk2,
            'jamMasuk3' => $jamMasuk3,
            'jamMasuk4' => $jamMasuk4,
            'jamMasuk5' => $jamMasuk5,
            'jamKeluar1' => $jamKeluar1,
            'jamKeluar2' => $jamKeluar2,
            'jamKeluar3' => $jamKeluar3,
            'jamKeluar4' => $jamKeluar4,
            'jamKeluar5' => $jamKeluar5,
            'keterangan1' => $keterangan1,
            'keterangan2' => $keterangan2,
            'keterangan3' => $keterangan3,
            'keterangan4' => $keterangan4,
            'keterangan5' => $keterangan5,
        ]);

        $tempFilePath = tempnam(sys_get_temp_dir(), 'absensi_');
        $phpWord->saveAs($tempFilePath);

        $fileName = 'Absensi_' . $nama . '_' . $bulan . '.docx';

        $headers = [
            'Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'Content-Disposition: attachment;filename="' . $fileName . '"',
        ];

        return response()->download($tempFilePath, $fileName, $headers)
            ->deleteFileAfterSend();
    }
}
