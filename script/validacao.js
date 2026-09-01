console.log("Console carregou");
 
document.getElementById("form-login").onsubmit = (e) => {
    e.preventDefault();
 
    let usuario = document.getElementById("usuario").value.trim();
    let senha = document.getElementById("senha").value.trim();
    let mensagem = document.getElementById("mensagem");
    mensagem.innerHTML = "";
 
    if (usuario === "" || senha === "") {
        mensagem.innerHTML = "<div class='alert alert-danger'>Preencha usuário e senha.</div>";
        return;
    }
 
    fetch("login.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "usuario=" + encodeURIComponent(usuario) + "&senha=" + encodeURIComponent(senha) + "&ajax=1"
    })
    .then(response => response.json())
    .then(data => {
        console.log("resposta do servidor:", data);
 
        if (data.sucesso) {
            mensagem.innerHTML = "<div class='alert alert-success'>" + data.mensagem + "</div>";
            window.location.href = "../index.php";
        } else {
            mensagem.innerHTML = "<div class='alert alert-danger'>" + data.mensagem + "</div>";
        }
 
        document.getElementById("form-login").reset();
    })
    .catch(error => {
        mensagem.innerHTML = "<div class='alert alert-danger'>Erro ao conectar com o servidor.</div>";
        console.error("Erro na requisição:", error);
    });
};