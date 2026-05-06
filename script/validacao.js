document.getElementById("form-login").onsubmit = (e) => {
    e.preventDefault();

    let usuario = document.getElementById("usuario").value.trim();
    let senha = document.getElementById("senha").value.trim();
    let mensagem = document.getElementById("mensagem");
    mensagem.innerHTML = "";



   let salva = localStorage.getItem(usuario);


    console.log("usuário digitado:", usuario);
    console.log("senha digitada:", senha);
    console.log("senha salva:", salva);

    
    if (salva === senha) {
        mensagem.innerHTML = "<div class='alert alert-success'>Login realizado com sucesso!</div>";
        window.location.href = "public/tela-geral-home.html";
    } else {
        mensagem.innerHTML = "<div class='alert alert-danger'>Usuário ou senha incorretos!</div>";
    }

    document.getElementById("form-login").reset();
};

