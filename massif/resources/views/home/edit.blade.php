
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/ficha.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="fichaPaciente">
        <div class="box">
            <span class="form-titulo">
                Editar ficha do paciente
            </span>
            <br>
            <form form method="POST" action="{{ route('paciente.update', $paciente->id) }}">
                @csrf
                <br>
                <span class="subtitulo">
                    1. Identificação pessoal
                </span>
                <br><br>
                <div class="left" id="nome-div-id">
                    <label for="nome">Nome:</label>

                    <input id="nome-paciente-id" type="text" name="nome" value="{{ $paciente->nome }}">
                    <div style="text-align: left; margin-top: 7px; margin-bottom:10px">
                        <label class="error">
                            @error('nome')
                                {{ 'Este campo é obrigatório' }}
                            @enderror
                        </label>
                    </div>


                </div>

                <div class="right" id="idade-div-id" style="margin-left:200px">
                    <label for="idade">Idade:</label>

                    <input id="idade-paciente-id" type="number" name="idade" min=0 style="width:150px;"
                        value="{{ $paciente->idade }}">
                    <br>
                    <div style="text-align: right; margin-top: 7px; margin-bottom:10px">
                        <label class="error">
                            @error('idade')
                                {{ 'Este campo é obrigatório' }}
                            @enderror
                        </label>
                    </div>

                </div>


                <br><br><br>

                <div class="left">

                    <label for="sexo">Sexo: </label>

                    <div class="custom-select">

                        <select id="Sexo-paciente-id" name="sexo" value="{{ $paciente->sexo }}">
                            <option value="">Selecionar o sexo: </option>

                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                            <option value="Outro">Outro</option>

                        </select>
                    </div>
                </div>

                <div class="right">

                    <label for="telefone">Telefone:</label>

                    <input id="telefone-paciente-id" type="text" name="telefone" minlength="11" maxlength="11"
                        style="width:200px" value="{{ $paciente->telefone }}">

                    <div style="text-align: right; margin-top: 7px; margin-bottom:10px">
                        <label class="error">
                            @error('telefone')
                                {{ 'Este campo é obrigatório' }}
                            @enderror
                        </label>
                    </div>

                </div>

                <br><br><br>
                <div class="left">

                    <label for="email">Email:</label>

                    <input id="email-paciente-id" type="text" name="email" value="{{ $paciente->email }}">

                    <div class="right" style="margin-top:9px; margin-left:7px ">
                        <label class="error">
                            @error('email')
                                {{ 'Este campo é obrigatório' }}
                            @enderror
                        </label>
                    </div>
                </div>
                
                <br><br><br><br><br><br>


                <span class="subtitulo">
                    2. Identificação Profissional
                </span>
                <br><br>
                <div class="left">

                    <label for="profissao">Profissão:</label>

                    <input id="profissao-paciente-id" type="text" name="profissao"
                        value="{{ $paciente->profissao }}">

                    <div class="right" style="margin-top:9px; margin-left:7px ">
                        <label class="error">
                            @error('profissao')
                                {{ 'Este campo é obrigatório' }}
                            @enderror
                        </label>
                    </div>
                </div>
                <br><br><br>

                <div class="left">

                    <label for="setorAreaTrabalho">Setor/Área de trabalho:</label>

                    <input id="setorAreaTrabalho-paciente-id" type="text" name="setorAreaTrabalho"
                        value="{{ $paciente->setorAreaTrabalho }}">

                    <div class="right" style="margin-top:9px; margin-left:7px ">
                        <label class="error">
                            @error('setorAreaTrabalho')
                                {{ 'Este campo é obrigatório' }}
                            @enderror
                        </label>
                    </div>
                </div>

                <br><br><br>
                <div class="left">

                    <label for="funcao">Função:</label>

                    <input id="funcao-paciente-id" type="text" name="funcao" value="{{ $paciente->funcao }}">

                    <div class="right" style="margin-top:9px; margin-left:7px ">
                        <label class="error">
                            @error('funcao')
                                {{ 'Este campo é obrigatório' }}
                            @enderror
                        </label>
                    </div>
                </div>
                <br><br><br>
                <div class="left">
                    <label for="tempoExerce">Há quanto tempo exerce?</label>

                    <input id="tempoExerce-paciente-id" type="text" name="tempoExerce"
                        value="{{ $paciente->tempoExerce }}">

                    <div class="right" style="margin-top:9px; margin-left:7px ">
                        <label class="error">
                            @error('tempoExerce')
                                {{ 'Este campo é obrigatório' }}
                            @enderror
                        </label>
                    </div>
                </div>


                <br><br><br><br><br><br>


                <span class="subtitulo">
                    3. Histórico de saúde
                </span>
                <br><br>

                <div class="left">
                    <label for="postura">Postura corporal adotada no trabalho:</label>
                    <div class="custom-select">

                        <select id="postura-paciente-id" name="postura" value="{{ $paciente->postura }}">
                            <option value="">Selecionar a postura: </option>

                            <option name="postura" value="Sentada">Sentada</option>
                            <option name="postura" value="Em pé">Em pé</option>
                            <option name="postura" value="Mista">Mista</option>

                        </select>
                    </div>
                </div>




                <br><br><br>



                <label for="doencasRegressas">Doenças Pregressas:</label>
                <br><br>
                <input id="doencasRegressas-paciente-id" type="text" name="doencasRegressas"
                    style="width: 850px;" value="{{ $paciente->doencasRegressas }}">

                <div style="text-align: center; margin-top: 7px; margin-bottom:4px">
                    <label class="error">
                        @error('doencasRegressas')
                            {{ 'Este campo é obrigatório' }}
                        @enderror
                    </label>
                </div>

                <br><br><br>

                <label for="doencaAtual">Doença Atual:</label>
                <br><br>
                <input id="doencaAtual-paciente-id" type="text" name="doencaAtual" style="width: 850px;"
                    value="{{ $paciente->doencaAtual }}">

                <div style="text-align: center; margin-top: 7px; margin-bottom:4px">
                    <label class="error">
                        @error('doencaAtual')
                            {{ 'Este campo é obrigatório' }}
                        @enderror
                    </label>
                </div>

                <br><br><br>

                <label for="queixasPrincipais">Queixas Principais:</label>
                <br><br>
                <input id="queixasPrincipais-paciente-id" type="text" name="queixasPrincipais"
                    style="width: 850px;" value="{{ $paciente->queixasPrincipais }}">

                <div style="text-align: center; margin-top: 7px; margin-bottom:4px">
                    <label class="error">
                        @error('queixasPrincipais')
                            {{ 'Este campo é obrigatório' }}
                        @enderror
                    </label>
                </div>

                <br><br><br>

                <label for="processosCirurgicosMedicamentos">Processos Cirúrgicos/Medicamentos:</label>
                <br><br>
                <input id="processosCirurgicosMedicamentos-paciente-id" type="text"
                    name="processosCirurgicosMedicamentos" style="width: 850px;"
                    value="{{ $paciente->processosCirurgicosMedicamentos }}">

                <div style="text-align: center; margin-top: 7px; margin-bottom:4px">
                    <label class="error">
                        @error('processosCirurgicosMedicamentos')
                            {{ 'Este campo é obrigatório' }}
                        @enderror
                    </label>
                </div>

                <br><br>

                <label for="atvFisica">Atividade Física:</label>
                <br><br>

                <input id="atvFisica-paciente-id" type="text" name="atvFisica" style="width: 850px;"
                    value="{{ $paciente->atvFisica }}">

                <div style="text-align: center; margin-top: 7px; margin-bottom:4px">
                    <label class="error">
                        @error('atvFisica')
                            {{ 'Este campo é obrigatório' }}
                        @enderror
                    </label>
                </div>

                <br><br>

                <label for="motivoProcura">Motivo da procura:</label>

                <input id="motivoProcura-paciente-id" type="text" name="motivoProcura"style="width: 850px;"
                    value="{{ $paciente->motivoProcura }}">
                <br><br>

                <div style="text-align: center; ">
                    <label class="error">
                        @error('motivoProcura')
                            {{ 'Este campo é obrigatório' }}
                        @enderror
                    </label>
                </div>

                <br><br><br><br><br><br>
                <span class="subtitulo">
                    4. Área do Aluno
                </span>
                <br><br>

                <label for="nomeAluno">Nome do Aluno que realizou o atendimento:</label>

                <input id="nomeAluno-paciente-id" type="text" name="nomeAluno"style="width: 850px;"
                    value="{{ $paciente->nomeAluno }}">
                <br><br>

                <div style="text-align: center; ">
                    <label class="error">
                        @error('nomeAluno')
                            {{ 'Este campo é obrigatório' }}
                        @enderror
                    </label>
                </div>

                <br><br>

                <label for="anotacaoAluno">Anotação do Aluno após a Massagem:</label>

                <input id="anotacaoAluno-paciente-id" type="text" name="anotacaoAluno"style="width: 850px;"
                    value="{{ $paciente->anotacaoAluno }}">
                <br><br>

                <div style="text-align: center; ">
                    <label class="error">
                        @error('anotacaoAluno')
                            {{ 'Este campo é obrigatório' }}
                        @enderror
                    </label>
                </div>

                <br><br><br>



                <div class="registrar">
                    <button class="registrar-btn" type="submit">
                        Atualizar registro
                    </button>
                </div>


            </form>
        </div>
    </div>
    <script src="/assets/js/select.js"></script>
</body>

</html>
