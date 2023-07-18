<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <!-- Metadados -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

        <!-- JavaScript -->
        <script src="./assets/js/validate.js"></script>

        <!-- Icone da página -->
        <link rel = "shortcut icon" type = "imagem/x-icon" href = "./assets/img/favicon.ico"/>

        <!-- Título da página -->
        <title>Vacinação COVID-19</title>
    </head>

    <body>
        <!-- PHP (Formulário) -->
        <form class="container formataForm" name="formCadastVacina" action="./assets/php/salvar-agendamento.php" method="post">

            <div>
                <h1 id="titulo">Agendamento de Vacinação COVID-19</h1>
                <h4 class="subtitulo">Complete suas informações</h4>
            </div>

            <!-- Div com o botão para abrir a lista de agendamentos -->
            <div>
                <a href="./assets/php/listar-agendamento.php" target="_self">
                <img class="botao3" width="100" height="100" src="./assets/img/busca-lista.ico" alt="Lista"></a>
            </div>

            <!-- Campos dados do usuario -->
            <fieldset class="grupo">
                <div class="row g-3 margemImput">
                    <div class="col">
                        <label for="nome"><strong>Nome</strong></label>
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Insira seu nome">
                    </div>

                    <div class="col">
                        <label for="sobrenome"><strong>Sobrenome</strong></label>
                        <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Insira seu sobrenome">
                    </div>
                </div>

                <div class="row g-3 margemImput">
                    <div class="col">
                        <label for="email"><strong>E-Mail</strong></label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="exemplo@exemplo">
                    </div>

                    <div class="col">
                        <label for="celular"><strong>Celular</strong></label>
                        <input type="text" class="form-control" name="celular" id="celular" placeholder="(00) 00000-0000">
                    </div>
                </div>

                <div class="row g-3 margemImput">
                    <div class="col">
                        <label for="datNasc"><strong>Data de Nascimento</strong></label>
                        <input type="text" class="form-control" name="data_nascimento" id="datNasc" placeholder="dd/mm/aaaa">
                    </div>

                    <div class="col">
                        <label for="cep"><strong>CEP</strong></label>
                        <input type="text" class="form-control" name="cep" id="cep" placeholder="00000-000">
                    </div>
                </div>

                <div class="row g-3 margemImput">
                    <div class="col">
                        <label for="altura"><strong>Altura</strong></label>
                        <input type="text" class="form-control" name="altura" id="altura" placeholder="Insira sua altura (cm)">
                    </div>

                    <div class="col">
                        <label for="peso"><strong>Peso</strong></label>
                        <input type="text" class="form-control" name="peso" id="peso" placeholder="Insira seu peso (kg)">
                    </div>
                </div>

                <div class="row g-3 margemImput">
                    <div class="col">
                        <label for="genero"><strong>Gênero</strong></label>
                        <select class="form-select" id="genero" name="genero">
                            <option selected disabled value="">Selecione</option>
                            <option>Feminino</option>
                            <option>Masculino</option>
                        </select>
                    </div>

                    <div class="col">
                        <label for="etnia"><strong>Etnia</strong></label>
                        <select class="form-select" id="etnia" name="sua_etnia">
                            <option selected disabled value="">Selecione</option>
                            <option>Indígena</option>
                            <option>Pardo</option>
                            <option>Negro</option>
                            <option>Branco</option>
                        </select>
                    </div>
                </div>
            </fieldset>

            <div>
                <h4 class="subtitulo">Questionário</h4>
            </div>

            <!-- Campos do questionário -->
            <fieldset>
                <div class="campo">
                    <label><strong>Está atualmente empregado?</strong></label>
                    <label>
                        <input type="radio" name="pergunta1" value="Empregado" checked> Sim, estou empregado
                    </label>
                    <label>
                        <input type="radio" name="pergunta1" value="Desempregado"> Atualmente estou desempregado
                    </label>
                </div>

                <div class="campo">
                    <label><strong>Quantas pessoas vivem na sua residência?</strong></label>
                    <label>
                        <input type="radio" name="pergunta2" value="Moro sozinho" checked> Eu moro sozinho
                    </label>
                    <label>
                        <input type="radio" name="pergunta2" value="2 Pessoas"> 2 Pessoas
                    </label>
                    <label>
                        <input type="radio" name="pergunta2" value="2-5 Pessoas"> 2-5 Pessoas
                    </label>
                    <label>
                        <input type="radio" name="pergunta2" value="Mais de 5 Pessoas"> Mais de 5 Pessoas
                    </label>
                </div>

                <div class="campo">
                    <label><strong>Alguém na sua residência tem mais de 64 anos?</strong></label>
                    <label>
                        <input type="radio" name="pergunta3" value="Sim" checked> Sim
                    </label>
                    <label>
                        <input type="radio" name="pergunta3" value="Não"> Não há ninguém com mais de 64 anos
                    </label>
                </div>

                <div class="campo">
                    <label><strong>Alguém na sua residência frequenta escola ou creche?</strong></label>
                    <label>
                        <input type="radio" name="pergunta4" value="Sim" checked> Sim
                    </label>
                    <label>
                        <input type="radio" name="pergunta4" value="Não"> Não
                    </label>
                </div>
            </fieldset>

            <div>
                <h4 class="subtitulo">Agendamento de Vacinação</h4>
            </div>

            <!-- Campos do agendamento -->
            <fieldset class="grupo">
                <div class="row g-3 margemImput">
                    <div class="col-6">
                        <label for="agendamento"><strong>Data do agendamento</strong></label>
                        <input class="form-control" type="date" name="data_agendamento" id="agendamento">
                    </div>

                    <div class="col-6">
                        <label for="horaAt"><strong>Horário de atendimento</strong></label>
                        <input class="form-control" type="time" name="hora_atendimento" id="horaAt">
                    </div>
                </div>
            </fieldset>

            <!-- Botão para enviar ou apagar o formulário -->
            <div class="col-12">
                <button class="botao1" type="submit" onclick="return validar()">Enviar</button>
                <button class="botao2" type="reset">Apagar</button>
            </div>
        </form>
    </body>
</html>