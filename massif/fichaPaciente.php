<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ficha.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="fichaPaciente">
        <div class="box">
            <span class="form-titulo">
                Ficha do paciente
            </span>
            <br><br>
            <form action="" method="POST">

                <br>

                <input id="nome-paciente-id" type="text" placeholder="Nome" name="nome-paciente">



                <input id="idade-paciente-id" type="number" placeholder="Idade" name="idade-paciente" min=0 style="float:right;">

                <br><br>

                <div class="custom-select" style="width:250px;float:left">
                    <select>
                        <option value="0">Sexo:</option>
                        <option value="1">Masculino</option>
                        <option value="2">Feminino</option>
                        <option value="3">Outro</option>

                    </select>
                </div>


    
                <input id="dataNascimento-paciente-id" type="date" name="dataNascimento-paciente" style="float:right;">

                <br><br><br>


                <div class="custom-select" style="width:250px;float:left;">
                    <select>
                        <option value="0">Estado civil:</option>
                        <option value="1">Solteiro</option>
                        <option value="2">Casado</option>
                    </select>
                </div>


                <input id="profissão-paciente-id" type="text" placeholder="Profissão" name="profissão-paciente " style="float:right;">




                <br><br><br>

                <input id="numeroDeFilhos-paciente-id" type="number" placeholder="Número de Filhos" name="numeroDeFilhos-paciente" min=0 >



                <input id="telefone-paciente-id" type="text" placeholder="Telefone" name="telefone-paciente" style="float:right;margin-left:20px">

                <br><br>

                <input id="email-paciente-id" type="text" placeholder="Email" name="email-paciente">



                <input id="cidade-paciente-id" type="text" placeholder="Cidade" name="cidade-paciente "style="float:right;">

                <br><br>

                <input id="cep-paciente-id" type="text" placeholder="CEP" name="cep-paciente">



                <input id="endereco-paciente-id" type="text" placeholder="Endereço" name="Endereco-paciente" style="float:right;">

                <br><br>
                
                <br><br><br>

                <div class="registrar">
                    <button class="registrar-btn">
                        Registrar paciente
                    </button>
                </div>


            </form>
        </div>
    </div>
    <script src="select.js"></script>
</body>

</html>