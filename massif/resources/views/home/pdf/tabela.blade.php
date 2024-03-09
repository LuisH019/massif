<head>

    <style>
        table, th, td {
          border: 1px solid black;
          color : rgb(0, 0, 0);
        }
        
        </style>

</head>


        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-danger">
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">telefone</th>
                    <th scope="col">Aluno que Atendeu</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Data Atendimento</th>
                </tr>
            </thead>
            <tbody>
                @foreach($paciente ?? '' as $data)
                <tr>
                   
                    <td>{{ $data->nome }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->telefone }}</td>
                    <td>{{ $data->nomeAluno }}</td>
                    <td>{{ $data->sexo}}</td>
                    <td>{{ $data->created_at }}</td>
                
                </tr>
                @endforeach
            </tbody>


        </table>