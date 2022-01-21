/* Função de validação dos campos do formulario */
function validar() {

    // busca os valores dos dados que estao no formulario.
    let nome = document.getElementById("nome");
    let sobrenome = document.getElementById("sobrenome");
    let email = document.getElementById("email");
    let celular = document.getElementById("celular");
    let dataNascimento = document.getElementById("datNasc");
    let cep = document.getElementById("cep");
    let altura = document.getElementById("altura");
    let peso = document.getElementById("peso");
    let genero = document.getElementById("genero");
    let etnia = document.getElementById("etnia");
    let dataAgendamento = document.getElementById("agendamento");
    let horaAtendimento = document.getElementById("horaAt");

    // validacoes
    if (nome.value == "") {
        alert("Preencha campo nome");
        nome.focus();
        return false;
    }

    if (sobrenome.value == "") {
        alert("Preencha campo sobrenome");
        sobrenome.focus();
        return false;
    }

    if (email.value == "") {
        alert("Preencha campo e-mail");
        email.focus();
        return false;
    }

    if (celular.value == "") {
        alert("Preencha campo celular");
        celular.focus();
        return false;
    }

    if (dataNascimento.value == "") {
        alert("Preencha campo data de nascimento");
        dataNascimento.focus();
        return false;
    }

    if (cep.value == "") {
        alert("Preencha campo CEP");
        cep.focus();
        return false;
    }

    if (altura.value == "") {
        alert("Preencha campo altura");
        altura.focus();
        return false;
    }

    if (peso.value == "") {
        alert("Preencha campo peso");
        peso.focus();
        return false;
    }

    if (genero.value == "") {
        alert("Selecione seu gênero");
        genero.focus();
        return false;
    }

    if (etnia.value == "") {
        alert("Selecione sua etnia");
        etnia.focus();
        return false;
    }

    if (dataAgendamento.value == "") {
        alert("Preencha a data do seu agendamento");
        dataAgendamento.focus();
        return false;
    }

    if (horaAtendimento.value == "") {
        alert("Preencha o horário do seu atendimento");
        horaAtendimento.focus();
        return false;

    } else {
        alert("Formulário enviado");
        return true;
    }
}