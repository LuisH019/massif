<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/show.css">
    <title>Document</title>

</head>

<body>

    <div class="dados-paciente">

        <div class="box">
            
            <div style="text-align:center;">
                <span style="font-size:xxx-large">
                    Ficha do paciente
                </span>
            </div>
                
            <br><br>
            <span class="subtitulo">
                    1. Identificação pessoal
            </span>
            <br><br>

            <span>
                Nome: {{ $paciente->nome }}
            </span>
            <br><br>

            <span>
                Idade: {{ $paciente->idade }}
            </span>
            <br><br>


            <span>
                Sexo: {{ $paciente->sexo }}
            </span>
            <br><br>

            <span>
                Telefone: {{ $paciente->telefone }}
            </span>
            <br><br>

            <span>
                Email: {{ $paciente->email }}
            </span>
            <br><br><br>

            <span class="subtitulo">
                    2. Identificação profissional
            </span>
            <br><br>

            <span>
                Profissão: {{ $paciente->profissao }}
            </span>
            <br><br>

            <span>
                Setor/Área de Trabalho: {{ $paciente->setorAreaTrabalho }}
            </span>
            <br><br>

            <span>
                Função: {{ $paciente->funcao }}
            </span>
            <br><br>
           
            <span>
                Tempo que exerce: {{ $paciente->tempoExerce }}
            </span>
            <br><br><br>
            <span class="subtitulo">
                    3. Histórico de saúde
            </span>
            <br><br>
            <span>
                Doenças Regressas: {{ $paciente->doencasRegressas }}
            </span>
            <br><br>

            <span>
                Doença Atual: {{ $paciente->doencaAtual }}
            </span>
            <br><br>

            <span>
                Queixas Principais: {{ $paciente->queixasPrincipais }}
            </span>
            <br><br>

            <span>
                Processos Cirurgicos/Medicamentos: {{ $paciente->processosCirurgicosMedicamentos }}
            </span>
            <br><br>

            <span>
                Atividade Física: {{ $paciente->atvFisica }}
            </span>
            <br><br>

            <span>
                Motivo da Procura: {{ $paciente->motivoProcura }}
            </span>
            <br><br>

            

            <span>
                Postura: {{ $paciente->postura }}
            </span>

            <br><br>

            <br><br>

            <span class="subtitulo">
                4. Área do Aluno
            </span>

            <br><br>

            <span>
                Nome do Aluno: {{ $paciente->nomeAluno }}
            </span>

            <br><br>

            <span>
                Anotação do Aluno após a Massagem: {{ $paciente->anotacaoAluno }}
            </span>

            <br><br><br><br>


            <div class="mt-4">
                <form action="{{ route('paciente.edit', $paciente->id) }}" style="display:inline-block;">
                    <button style="margin-right: 20px" type="submit">
                        Editar
                    </button>
                </form>

                
                <form action="{{ route('home.index') }}" style="display:inline-block;">
                    <button style="margin-right: 20px" type="submit">
                        Voltar
                    </button>
                </form>
                
            </div>
        </div>

    </div>




</body>

</html>
