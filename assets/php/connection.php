<?php
  $conn = mysqli_connect($_ENV["HOST"], $_ENV["USERNAME"], $_ENV["PASSWORD"], $_ENV["DATABASE"]);

  $sql = "CREATE TABLE tb_cadastro (
    id int(6) AUTO_INCREMENT PRIMARY KEY,
    nome varchar(255) NOT NULL,
    sobrenome varchar(255) NOT NULL,
    email varchar(50) NOT NULL,
    celular varchar(50) NOT NULL,
    data_nascimento varchar(25) NOT NULL,
    cep varchar(50) NOT NULL,
    genero varchar(25) NOT NULL,
    sua_etnia varchar(25) NOT NULL,
    altura varchar(25) NOT NULL,
    peso varchar(25) NOT NULL,
    pergunta1 text NOT NULL,
    pergunta2 text NOT NULL,
    pergunta3 text NOT NULL,
    pergunta4 text NOT NULL,
    data_agendamento date NOT NULL,
    hora_atendimento time NOT NULL
  )";
?>
