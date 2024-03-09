<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::user()->role_as == '1')
        {
            return view('home.admin.index',[

                'pacientes' => Paciente::latest()->filter(request(['search']))/*->whereDate('created_at', Carbon::today())*/->paginate(50)
    
            ]);
        }

        else{
            return view('home.index',[

                'pacientes' => Paciente::latest()->filter(request(['search']))/*->whereDate('created_at', Carbon::today())*/->paginate(16)
    
            ]);
        }

        
    }

    public function create()
    {
    
    }

    public function show($id)
    {

        
        $paciente = Paciente::findOrFail($id);
        return view('home.show', ['paciente' => $paciente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'nome'=>'required|max:255',
            'idade'=>'required|min:0',
            'sexo'=>'required|max:255',    
            'telefone'=>'required|numeric|min:11',
            'email'=>['required','email'],
            'doencasRegressas'=>'required',
            'doencaAtual'=>'required',
            'queixasPrincipais'=>'required',
            'processosCirurgicosMedicamentos'=>'required',
            'atvFisica'=>'required',
            'motivoProcura'=>'required',
            'profissao'=>'required|max:255',
            'setorAreaTrabalho'=>'required|max:255',
            'funcao'=>'required|max:255',
            'tempoExerce'=>'required|max:255',
            'postura'=>'required|max:255',
            'nomeAluno'=>'max:255',
            'anotacaoAluno'=>'max:255'


        ]);

        Paciente::create($formFields);

        if(Auth::user()->role_as == '1')
        {
              return redirect('admin/home'); 
        }

        else{
            return redirect('/home');
        }

    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        return view('home.edit', ['paciente' => $paciente]);
    }

    public function mostrarTabela()
    {
        return view('home.pacientes');
    }

    public function update(Request $request, $id)
    {
        $formFields = $request->validate([
            'nome'=>'required|max:255',
            'idade'=>'required|min:0',
            'sexo'=>'required|max:255|not_in:0',    
            'telefone'=>'required|numeric|min:11',
            'email'=>['required','email'],
            'doencasRegressas'=>'required',
            'doencaAtual'=>'required',
            'queixasPrincipais'=>'required',
            'processosCirurgicosMedicamentos'=>'required',
            'atvFisica'=>'required',
            'motivoProcura'=>'required',
            'profissao'=>'required|max:255',
            'setorAreaTrabalho'=>'required|max:255',
            'funcao'=>'required|max:255',
            'tempoExerce'=>'required|max:255',
            'postura'=>'required|max:255',
            'nomeAluno'=>'max:255',
            'anotacaoAluno'=>'max:255'

        ]);

        Paciente::whereId($id)->update($formFields);
       
        if(Auth::user()->role_as == '1')
        {
              return redirect('admin/home'); 
        }

        else{
            return redirect('/home');
        }
        

    }

    public function destroy($id)
    {

        
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();

        if(Auth::user()->role_as == '1')
        {
              return redirect('admin/home'); 
        }

        else{
            return redirect('/home');
        }
        
    }

    public function createPDF(Request $request)
    {
       $opcaoPDF = $_GET['opcaoPDF'];

        if($opcaoPDF == 'nomeAluno'){

            $pdf = PDF::loadView('home.pdf.tabela', [

            'paciente' => Paciente::latest()->where('nomeAluno', 'like', '%' . request('search') . '%')->paginate()

        ]);
        return $pdf->download('tabela.pdf');


        }else if ($opcaoPDF == 'email'){

            $pdf = PDF::loadView('home.pdf.tabela', [

                'paciente' => Paciente::latest()->where('email', 'like', '%' . request('search') . '%')->paginate()
    
            ]);
            return $pdf->download('tabela.pdf');

        }else if ($opcaoPDF == 'paciente'){

            $pdf = PDF::loadView('home.pdf.tabela', [

                'paciente' => Paciente::latest()->where('nome', 'like', '%' . request('search') . '%')->paginate()
    
            ]);
            return $pdf->download('tabela.pdf');

        }else if($opcaoPDF == 'telefone'){

            $pdf = PDF::loadView('home.pdf.tabela', [

                'paciente' => Paciente::latest()->where('telefone', 'like', '%' . request('search') . '%')->paginate()
    
            ]);
            return $pdf->download('tabela.pdf');

        }else if($opcaoPDF == 'sexo'){

            $pdf = PDF::loadView('home.pdf.tabela', [

                'paciente' => Paciente::latest()->where('sexo', 'like', '%' . request('search') . '%')->paginate()
    
            ]);
            return $pdf->download('tabela.pdf');

        }

    
    }




}
