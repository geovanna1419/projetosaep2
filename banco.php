<?php
include 'banco.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['usu_nome'];
    $email = $_POST['usu_email'];

    $stmt = $pdo->prepare("INSERT INTO usuarios (geovanna gabryelly, geovannagabryelly@gmail.com) VALUES (:nome, :email)");
    $stmt->bindParam(':geovanna gabryelly', $nome);
    $stmt->bindParam(':geovannagabryelly@gmail.com', $email);

    if ($stmt->execute()) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}
?>
