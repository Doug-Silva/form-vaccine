// noinspection EqualityComparisonWithCoercionJS

/* Função Validar */
function valid_campos() {

    // buscando os valores do dados que estao no formulario.
    let campo_nome = document.getElementById("nome");
    let campo_sobrenome = document.getElementById("sobrenome");
    let campo_email = document.getElementById("email");
    let campo_celular = document.getElementById("celular");
    let campo_data_nascimento = document.getElementById("datNasc");
    let campo_cep = document.getElementById("cep");
    let campo_genero = document.getElementById("genero");
    let campo_sua_etnia = document.getElementById("etnia");
    let campo_altura = document.getElementById("altura");
    let campo_peso = document.getElementById("peso");
    let campo_data_agendamento = document.getElementById("agendamento");
    let campo_hora_atendimento = document.getElementById("horaAt");

    // validacoes
    if (campo_nome.value == "") {
        alert("Preencha Campo Nome!!");
        campo_nome.focus();
        return false;
    }

    if (campo_sobrenome.value == "") {
        alert("Preencha Campo Sobrenome!!");
        campo_sobrenome.focus();
        return false;
    }

    if (campo_email.value == "") {
        alert("Preencha Campo Email!!");
        campo_email.focus();
        return false;
    }

    if (campo_celular.value == "") {
        alert("Preencha Campo Celular!!");
        campo_celular.focus();
        return false;
    }

    if (campo_data_nascimento.value == "") {
        alert("Preencha Campo Data de nascimento!!");
        campo_data_nascimento.focus();
        return false;
    }

    if (campo_cep.value == "") {
        alert("Preencha Campo CEP!!");
        campo_cep.focus();
        return false;
    }

    if (campo_genero.value == "") {
        alert("Preencha Campo Gênero!!");
        campo_genero.focus();
        return false;
    }

    if (campo_sua_etnia.value == "") {
        alert("Preencha Campo Sua Etnia!!");
        campo_sua_etnia.focus();
        return false;
    }

    if (campo_altura.value == "") {
        alert("Preencha Campo Altura (cm)!!");
        campo_altura.focus();
        return false;
    }

    if (campo_peso.value == "") {
        alert("Preencha Campo Peso (Kg)!!");
        campo_peso.focus();
        return false;
    }

    if (campo_data_agendamento.value == "") {
        alert("Preencha A data do seu agendamento!!");
        campo_data_agendamento.focus();
        return false;
    }

    if (campo_hora_atendimento.value == "") {
        alert("Preencha O horário do seu atendimento!!");
        campo_hora_atendimento.focus();
        return false;

    } else {
        alert("Formulário enviado!");
        return true;
    }
}