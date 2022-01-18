<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        table tr td {
            border: 1px solid #000000;
            font-size: 8px;
            margin: 0;
            /* text-align: center; */
            color: black;
        }
    </style>
</head>
<body>
    <table width="100%">
        <tr>
            <td>Keum</td>
            <td colspan="10">{{ $no_keum }}</td>
        </tr>
        <tr>
            <td rowspan="3" colspan="3" style="font-size: 8px;width:30px;text-align: center">LEMBAR DISPOSISI <br> SEKRETARIS DITJEN PENEGAKAN HUKUM <br> LINGKUNGAN HIDUP DAN KEHUTANAN</td>
            <td rowspan="3" colspan="3" style="font-size: 8px;width:30px;text-align: center">KEMENTRIAN LINGJUNGAN HIDUP <br> DAN KEHUTANAN</td>
            <td style="text-align: center">No. Reg</td>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td style="width: 10%;text-align: center">No. Agenda</td>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td style="text-align: center">Tanggal</td>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td colspan="3">Sifat</td>
            <td colspan="3">Derajat</td>
            <td colspan="2">Batas waktu penyelesaian</td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td>Biasa</td>
            <td>Penting</td>
            <td>Rahasia</td>
            <td>Biasa</td>
            <td>Segera</td>
            <td>Kilat</td>
            <td colspan="5"></td>
        </tr>
        <tr>
            <td style="padding-bottom: 10px;">Kelompok Asal Surat</td>
            <td colspan="5"></td>
            <td style="padding-bottom: 10px;">Kode</td>
            <td colspan="4"></td>
        </tr>
        <tr>
            <td style="padding-bottom: 10px;">No. Surat</td>
            <td colspan="5"></td>
            <td style="padding-bottom: 10px;">Tanggal Surat</td>
            <td colspan="4">{{ $tanggal_surat }}</td>
        </tr>
        <tr>
            <td style="padding-bottom: 10px;">Hal</td>
            <td colspan="10">{{ $perihal }}</td>
        </tr>
        <tr>
            <td style="padding-bottom: 10px;">Lampiran</td>
            <td colspan="10"></td>
        </tr>
        <tr>
            <td style="padding-bottom: 10px;">Asal Surat</td>
            <td colspan="10">{{ $asal_surat }}</td>
        </tr>
        <tr>
            <td style="padding-bottom: 10px;" colspan="6">DITUNJUKAN KEPADA YTH.</td>
            <td style="padding-bottom: 10px;" colspan="5">ISI DISPOSISI</td>
        </tr>
        <tr>
            <td colspan="3" style="padding-bottom: 50px;">1. KASUBBAG PROGRAM DAN ANGGARAN</td>
            <td colspan="3"></td>
            <td colspan="2" style="padding-bottom: 50px;">1. UNTUK DISELESAIKAN</td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="3" style="padding-bottom: 50px;">2. KASUBBAG EVALUASI, PELAPORAN, DATA, DAN INFORMASI</td>
            <td colspan="3"></td>
            <td colspan="2" style="padding-bottom: 50px;">2. SARAN/PERTIMBANGAN</td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="3" style="padding-bottom: 50px;">3. KASUBBAG KEPEGAWAIAN</td>
            <td colspan="3"></td>
            <td colspan="2" style="padding-bottom: 50px;">3. UNTUK DIKETAHUI</td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="3" style="padding-bottom: 50px;">4. KASUBBAG ORGANISASI DAN TATA LAKSANA</td>
            <td colspan="3"></td>
            <td colspan="2" style="padding-bottom: 50px;">4. ..............</td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="3" style="padding-bottom: 50px;">5. KASUBBAG TATA USAHA</td>
            <td colspan="3"></td>
            <td colspan="2"></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="3" style="padding-bottom: 50px;">6. KASUBBAG PERLENGKAPAN</td>
            <td colspan="3"></td>
            <td colspan="2"></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="3" style="padding-bottom: 50px;">7. KASUBBAG ADMINISTRASI KEUANGAN</td>
            <td colspan="3"></td>
            <td colspan="2"></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="3" style="padding-bottom: 50px;">8. KASUBBAG KERJASAMA TEKNIK</td>
            <td colspan="3"></td>
            <td colspan="2"></td>
            <td colspan="3"></td>
        </tr>
        <tr>
            <td colspan="3" style="padding-bottom: 50px;">9. KASUBBAG HUKUM</td>
            <td colspan="3"></td>
            <td colspan="2"></td>
            <td colspan="3"></td>
        </tr>
    </table>
</body>
</html>