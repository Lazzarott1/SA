function login() {
    let usuario = document.getElementById("usuario").value;
    let senha = document.getElementById("senha").value;
    let erro = document.getElementById("erro");

    let userCorreto = "admin";
    let senhaCorreta = "1234";

    if (usuario === "" || senha === "") {
        erro.innerText = "Preencha todos os campos!";
        return;
    }

    if (usuario !== userCorreto || senha !== senhaCorreta) {
        erro.innerText = "Usuário ou senha incorretos!";
        return;
    }
    
}