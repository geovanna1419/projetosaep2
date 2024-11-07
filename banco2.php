<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $setor = $_POST['tar_setor'];
    $prioridade = $_POST['tar_prioridade'];
    $descricao = $_POST['tar_descricao'];
    $status = $_POST['tar_status'];
    $usuario_id = $_POST['usu_codigo'];

    $stmt = $pdo->prepare("INSERT INTO tarefas (setor, prioridade, descricao, status, usuario_id) VALUES (:setor, :prioridade, :descricao, :status, :usuario_id)");
    $stmt->bindParam(':setor', $setor);
    $stmt->bindParam(':prioridade', $prioridade);
    $stmt->bindParam(':descricao', $descricao);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':usuario_id', $usuario_id);

    if ($stmt->execute()) {
        echo "Tarefa cadastrada com sucesso!";
    } else {
        echo "Erro ao cadastrar tarefa.";
    }
}
?>
