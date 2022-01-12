function valid_campos(){

	// buscando os valores do dados que estao no formulario.
	var campo_nome = formCadastVacina.nome.value;
	var campo_sobrenome = formCadastVacina.sobrenome.value;
	var campo_email = formCadastVacina.email.value;
	var campo_celular = formCadastVacina.celular.value;
	var campo_data_nascimento = formCadastVacina.data_nascimento.value;
	var campo_cep = formCadastVacina.cep.value;
	var campo_genero = formCadastVacina.genero.value;
	var campo_sua_etnia = formCadastVacina.sua_etnia.value;
	var campo_altura = formCadastVacina.altura.value;
	var campo_peso = formCadastVacina.peso.value;
	var campo_data_agendamento = formCadastVacina.data_agendamento.value;
	var campo_hora_atendimento = formCadastVacina.hora_atendimento.value;

	// validacoes
	if(campo_nome == ""){
		alert("Preencha Campo Nome!!");
		return false;
	}

	if(campo_sobrenome == ""){
		alert("Preencha Campo Sobrenome!!");
		return false;
	}

	if(campo_email == ""){
		alert("Preencha Campo Email!!");
		return false;
	}

	if(campo_celular == ""){
		alert("Preencha Campo Celular!!");
		return false;
	}

	if(campo_data_nascimento == ""){
		alert("Preencha Campo Data de nascimento!!");
		return false;
	}

	if(campo_cep == ""){
		alert("Preencha Campo CEP!!");
		return false;
	}

	if(campo_genero == ""){
		alert("Preencha Campo Gênero!!");
		return false;
	}

	if(campo_sua_etnia == ""){
		alert("Preencha Campo Sua Etnia!!");
		return false;
	}

	if(campo_altura == ""){
		alert("Preencha Campo Altura (cm)!!");
		return false;
	}

	if(campo_peso == ""){
		alert("Preencha Campo Peso (Kg)!!");
		return false;
	}

	if(campo_data_agendamento == ""){
		alert("Preencha A data do seu agendamento!!");
		return false;
	}

	if(campo_hora_atendimento == ""){
		alert("Preencha O horário do seu atendimento!!");
		return false;
	}

	else{
		alert("Seu agendamento foi efetuado com sucesso!!");
		return true;
	}
		
}