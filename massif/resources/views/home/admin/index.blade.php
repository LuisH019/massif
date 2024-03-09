<html>

<head>

    <link rel="stylesheet" href="/assets/css/app.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap');
    </style>

    <nav class="header">

        <img src="../assets/images/massif_new.png" alt="" class="massif-logo">
        <ul class="lista_navevacao">

            <li class="nav">
                <a href="{{ route('ficha.index') }}">

                    <span class="nome_links">
                        <i class='bx bx-user-plus bx-sm'></i>
                        Adicionar paciente
                    </span>
                </a>
            </li>

            <li class="nav">
                <a href="{{ route('logout.perform') }}" onclick="return confirm('{{ 'Fazer logout?' }}')">

                    <span class="nome_links">
                        <i class='bx bxs-user bx-sm'></i>
                        Logout
                    </span>
                </a>
            </li>
            <li class="nav">
                <a href="{{ route('user.index') }}">

                    <span class="nome_links">
                        <i class='bx bx-user bx-sm'></i>
                        Usuários
                    </span>
                </a>
            </li>





    </nav>


</head>



<body>

    <div class="bg-light p-4 rounded">
        <h1>Pacientes</h1>

        <form action="/home" method = "GET">

        <div class="input-group">
            <input type="search"  placeholder="Pesquisar Paciente" aria-label="Search" name="search"
                aria-describedby="search-addon" />
            <button type="submit" class="btn btn-outline-primary">pesquisar</button>

        
        </div>

        </form>

        <form action="{{ route('exportpdf') }}" method = "GET">

            <div class="input-group">
                <input type="search"  placeholder="Pesquisar Paciente" aria-label="Search" name="search"
                    aria-describedby="search-addon" />
            
    
                <select id="opcaoPDF-id" name="opcaoPDF" >

                    <option value="nomeAluno">Nome Aluno</option>
                    <option value="paciente">Paciente</option>
                    <option value="email">Email</option>
                    <option value="telefone">Telefone</option>
                    <option value="sexo">Sexo</option>
    
                </select>
                
                <button type="submit" class="btn btn-outline-primary">Exportar PDF</button>

            </div>
    
        </form>
        

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" width="15%">Nome</th>
                    <th scope="col" width="15%">Telefone</th>
                    <th scope="col" width="15%">Email</th>
                    <th scope="col" width="15%">Aluno que Atendeu</th>
                    <th scope="col" width="15%">Sexo</th>
                    <th scope="col" width="15%">Data Atendimento</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                    <tr>
                        <td>{{ $paciente->nome }}</td>
                        <td>{{ $paciente->telefone }}</td>
                        <td>{{ $paciente->email }}</td>
                        <td>{{ $paciente->nomeAluno }}</td>
                        <td>{{ $paciente->sexo }}</td>
                        <td>{{ $paciente->created_at }}</td>
                        <td><a href="{{ route('paciente.show', $paciente->id) }}" class="btn btn-warning btn-sm">Ver</a>
                        </td>
                        <td><a href="{{ route('paciente.edit', $paciente->id) }}" class="btn btn-info btn-sm">Editar</a>
                        </td>
                        <td><a href="{{ route('paciente.destroy', $paciente->id) }}" class="btn btn-danger btn-sm"
                                onclick="return confirm('{{ __('Deseja excluir esse registro?') }}')">Excluir</a></td>


                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex">
            {!! $pacientes->links() !!}
        </div>

    </div>

</body>


</html>
