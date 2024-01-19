<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\CalonSiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PdfController extends Controller
{
    public function pdfView($id)
    {
        $data = CalonSiswa::findOrfail($id)->first();
        return view('pdf.index', compact('data'));
    }

    public function pdf($id)
    {
        $data = CalonSiswa::where('nisn', $id)->first();
        $dompdf = new Dompdf();
        $dompdf->loadHtml(view('pdf.index', compact('data')));
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render("Pendaftaran PPDB " . $data->nama_lengkap . ".pdf");
        $CalonSiswa = CalonSiswa::where('nisn', $id);
        $CalonSiswa->update([
            'pdf_file' => "Pendaftaran-PPDB-" . str_replace(' ', '-', $data->nama_lengkap) . ".pdf"
        ]);
        file_put_contents("pdf/Pendaftaran-PPDB-" . str_replace(' ', '-', $data->nama_lengkap) . '.pdf', $dompdf->output(array('compress'=>0)));
        Storage::put('pdf/Pendaftaran-PPDB-' . str_replace(' ', '-', $data->nama_lengkap) . '.pdf', $dompdf->output(array('compress'=>0)));
        return redirect()->route('login')->with('print', $data->nisn);
    }

    public function myd($filename)
    {
        $file = "storage/pdf/" . $filename;
        header('Content-Description: File Transfer');
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="' . basename($filename) . '"');
        header('Expires: 1');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        readfile($file, true);
    }

    public function myx($filename)
    {
        $pdf = new PdfController;
        $pdf->myd($filename);
    }

    public function download($id)
    {
        $data = CalonSiswa::where('nisn', $id)->get()->first();
        PdfController::myd($data->pdf_file);
    }
}
