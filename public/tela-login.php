<?php
 
session_start();
 
include '../infra/conexao.php';
 
$erro = "";
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario'] ?? '');
    $senha = trim($_POST['senha'] ?? '');
 
    $sql = "SELECT idusuario, usuario, senha FROM usuarios WHERE usuario = ?";
    $stmt = mysqli_prepare($conexao, $sql);
 
    if ($stmt === false) {
        die('Erro ao preparar a consulta: ' . mysqli_error($conexao));
    }
 
    mysqli_stmt_bind_param($stmt, 's', $usuario);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);
    $dados = mysqli_fetch_assoc($resultado);
 
    mysqli_stmt_close($stmt);
 
    if ($dados && password_verify($senha, $dados['senha'])) {
        $_SESSION['idusuario'] = $dados['idusuario'];
        $_SESSION['usuario'] = $dados['usuario'];
 
        header("Location: ../index.php");
        exit();
    } else {
        $erro = "Usuário ou senha incorretos.";
    }
}
 
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body style="background-color: #e8f0fe;">


    <header>
        <nav>

        </nav>
    </header>
    <main class="d-flex justify-content-center align-items-center vh-100">

        <div class="card shadow-lg p-4" style="width: 450px; border: 2px solid #003580">

            <h2 class="fw-bold text-center mb-3 fs-2" id="titulo" style="color: #003580;">Login do Sistema</h2>

            <hr>

            <form id="form-login">

                <div class="mb-3 conjunto">
                    <label for="usuario" class="form-label">Nome de Usuário: </label>
                    <input type="text" id="usuario" class="form-control" placeholder="Digite seu Usuário" required>
                </div>
                <div class="mb-3" class="conjunto">
                    <label for="senha">Senha: </label>
                    <input type="password" id="senha" class="form-control" placeholder="Digite sua Senha" required>
                </div>

                <button class="text-white btn btn-warning w-100 py-2 fs-3" type="submit">Entrar</button>

            </form>

            <div id="mensagem" class="mt-3"></div>

        
        </div>
    </main>
    <footer>
    </footer>
    <script src="..//script/validacao.js"></script>
</body>

</html>