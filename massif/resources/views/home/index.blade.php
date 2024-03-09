<html>

<head>

    <link rel="stylesheet" href="/assets/css/app.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter+Tight:ital,wght@0,100;0,200;0,300;0,400;0,500;1,100;1,200;1,300;1,400;1,500&display=swap');
    </style>

    <x-header>
    </x-header>



</head>



<body>
    <div class="search-container">
        <form action="/home" method = "GET" style="margin-bottom: 10px;">
            @csrf    
            <label for="search" style="margin-right: 3px;">Filtrar por data:</label>
        
            <input type="date" name="search" style="margin-right: 20px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
            <button type="submit" title="Pesquisar paciente "style="margin-right: 20px;" ><i class="fa fa-search" style="margin-left: 5px;"></i></button>
        </form>
        <form action="/home" method = "GET">
            <label for="search" style="margin-right: 3px;">Filtrar por nome/telefone/email:</label>
            <input type="text" name="search" style="margin-right: 20px;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
            <button type="submit" title="Pesquisar paciente"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <br><br>

    <div class="main">

        @unless(count($pacientes) == 0)
            @foreach ($pacientes as $paciente)
                <x-card-paciente :paciente="$paciente" />
            @endforeach
        @else
            <p style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ; font-weight:bold; margin-left: 25px">Não há registros</p>

        @endunless


    </div>


    <div>
        {{ $pacientes->links('pagination::tailwind') }}


    </div>

</body>


</html>
