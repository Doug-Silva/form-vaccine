<?php
include_once "conexao.php";

    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $cel = $_POST["celular"];
    $dataNasci = $_POST["data_nascimento"];             
    $cep = $_POST["cep"];
    $genero = $_POST["genero"];
    $etnia = $_POST["sua_etnia"];
    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $p1 = $_POST["pergunta1"];
    $p2 = $_POST["pergunta2"];
    $p3 = $_POST["pergunta3"];
    $p4 = $_POST["pergunta4"];
    $agenda = $_POST["data_agendamento"];                
    $hora = $_POST["hora_atendimento"];                 

    #salva os registros da query na tabela desejada
    $sql = "INSERT INTO tb_cadastro (
        id, 
        nome, 
        sobrenome, 
        email, 
        celular,
        data_nascimento,
        cep,
        genero,
        sua_etnia,
        altura,
        peso,
        pergunta1,
        pergunta2,
        pergunta3,
        pergunta4,
        data_agendamento,
        hora_atendimento
        ) 
    values (
        null, 
        '$nome', 
        '$sobrenome', 
        '$email', 
        '$cel',
        '$dataNasci',
        '$cep',
        '$genero',
        '$etnia',
        '$altura',
        '$peso',
        '$p1',
        '$p2',
        '$p3',
        '$p4',
        '$agenda',
        '$hora'
        )";

    mysqli_query($conn,$sql);
    mysqli_close($conn);
    header('Location: http://localhost/vaccination-form');

?>