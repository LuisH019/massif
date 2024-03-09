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
                <a href="{{ route('logout.perform') }}" onclick="return confirm('{{ 'Fazer logout?' }}')">

                    <span class="nome_links">
                        <i class='bx bxs-user bx-sm'></i>
                        Logout
                    </span>
                </a>
            </li>

            <li class="nav">
                <a href="{{ route('admin.index') }}">

                    <span class="nome_links">
                        <i class='bx bx-user bx-sm'></i>
                        Pacientes
                    </span>
                </a>
            </li>


    </nav>


</head>



<body>


    <div class="bg-light p-4 rounded">
        <h1>Usuários</h1>
      
        <form action="/admin/users" method = "GET">

            <div class="input-group">
                <input type="search"  placeholder="Pesquisar Paciente" aria-label="Search" name="search"
                    aria-describedby="search-addon" />
                <button type="submit" class="btn btn-outline-primary">pesquisar</button>
            </div>
    
            </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" width="20%">Nome</th>
                    <th scope="col" width="20%">Email</th>
                    <th scope="col" width="20%">Data de Criação</th>
                    <th scope="col" width="20%">Função</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->nome }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>

                        @if ($user->role_as == '1')
                            <td>Administrador</td>
                        @else
                            <td>Usuário Comum</td>
                        @endif

                        @if ($user->role_as == '1')
                        @else
                            <td><a href="{{ route('user.destroy', $user->id) }}"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('{{ 'Deseja Excluir?' }}')">Excluir</a>
                        @endif
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex">
            {!! $users->links() !!}
        </div>

    </div>

</body>


</html>
