function validar(formulario) {

    var nome = formulario.nome;
    var email = formulario.email;
    var senha = formulario.senha;
    var senhac = formulario.senhac;
    var prof = formulario.profissao;
    var tel = formulario.tel;


    if (nome.value == "") {
        alert('Preencha todos os campos corretamente');
        nome.focus();
        return (false);

    }
    if (email.value == "") {
        alert('Preencha todos os campos corretamente');
        email.focus();
        return (false);
    }
    if (senha.value == "" || senha.value != senhac.value) {
        alert('Preencha a senha corretamente');
        senha.focus();
        return (false);
    }
    if (prof.value == "") {
        alert('Preencha todos os campos corretamente');
        prof.focus();
        return (false);
    }
    if (tel.value == "") {
        alert('Preencha todos os campos corretamente');
        tel.focus();
        return (false);
    }
    else {


        alert("Dados enviados ao sistema");
        return (true);
    }
}
