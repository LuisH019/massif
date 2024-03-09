<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use PDF;

class PDFController extends Controller
{
    public function generatePDF()
    {
        
        $data = Paciente::latest()->filter(request(['search']));
          
       

        $pdf = PDF::loadView('home.pdf.tabela', compact('data'));
    
        return $pdf->download('tabela.pdf');
    }
}