document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // previne o envio do formulário para validar primeiro

    if (validateForm()) {
        this.submit(); // envia o formulário se for válido
    }
});


function validateForm() {
    // Pega os valores dos campos do formulário
    var name = document.getElementById("name").value;
    var cpf = document.getElementById("cpf").value;
    var email = document.getElementById("email").value;
    var curso = document.getElementById("curso").value;
    var perfil = document.getElementById("perfil").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;

    // Verifica se o campo nome está preenchido
    if (name == "") {
        alert("Por favor, preencha o campo Nome.");
        return false;
    }

    // Verifica se o CPF é válido
    if (!validateCPF(cpf)) {
        alert("Por favor, digite um CPF válido.");
        return false;
    }

    // Verifica se o e-mail é válido
    if (!validateEmail(email)) {
        alert("Por favor, digite um e-mail válido.");
        return false;
    }

    // Verifica se o campo perfil foi selecionado
    if (perfil == "") {
        alert("Por favor, selecione um perfil.");
        return false;
    }

    // Verifica se a senha foi preenchida
    if (password == "") {
        alert("Por favor, preencha o campo Senha.");
        return false;
    }

    // Verifica se a confirmação de senha foi preenchida
    if (confirmPassword == "") {
        alert("Por favor, preencha o campo Confirme a senha.");
        return false;
    }

    // Verifica se a senha e a confirmação são iguais
    if (password != confirmPassword) {
        alert("As senhas não são iguais. Por favor, digite novamente.");
        return false;
    }

    // Se tudo estiver correto, o formulário é enviado
    return true;
}

function validateCPF(cpf) {
    // Remove os caracteres não numéricos do CPF
    cpf = cpf.replace(/[^\d]+/g, '');

    // Verifica se o CPF tem 11 dígitos
    if (cpf.length != 11) {
        return false;
    }

    // Verifica se todos os dígitos são iguais
    if (/^(\d)\1+$/.test(cpf)) {
        return false;
    }

    // Verifica se os dois dígitos verificadores estão corretos
    var soma = 0;
    var resto;

    for (var i = 1; i <= 9; i++) {
        soma += parseInt(cpf.substring(i - 1, i)) * (11 - i);
    }

    resto = (soma * 10) % 11;

    if ((resto == 10) || (resto == 11)) {
        resto = 0;
    }

    if (resto != parseInt(cpf.substring(9, 10))) {
        return false;
    }

    soma = 0;

    for (var i = 1; i <= 10; i++) {
        soma += parseInt(cpf.substring(i - 1, i)) * (12 - i);
    }

    resto = (soma * 10) % 11;

    if ((resto == 10) || (resto == 11)) {
        resto = 0;
    }

    if (resto != parseInt(cpf.substring(10, 11))) {
        return false;
    }

    // Se chegou até aqui, o CPF é válido
    return true;
}
function validateEmail(email) {
    // Implementação da validação do e-mail


    // Exemplo de validação simples:
    if (email.indexOf('@') == -1 || email.indexOf('.') == -1) {
        return false;
    }

    return true;
}
