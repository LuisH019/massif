<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MassifAlfa</title>
</head>

<body>

    <nav class="header">

        <img src="assets/images/massif_new.png" alt="" class="massif-logo">
        <ul class="lista_navevacao">

            <li class="nav">
                <a href="{{ route('logout.perform') }}" onclick="return confirm('{{ ('Fazer logout?') }}')">
                    
                    <span class="nome_links">
                        <i class='bx bxs-user bx-sm'></i>
                        Logout
                    </span>
                </a>
            </li>
            <li class="nav">
                <a href="{{ route('ficha.index') }}">
                    
                    <span class="nome_links" >
                        <i class='bx bx-user-plus bx-sm'></i>
                        Adicionar paciente
                    </span>
                </a>
            </li>

            
            

            
    </nav>

</body>


</html>
