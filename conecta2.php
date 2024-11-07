<?php
include("conecta.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $usu_nome = $_POST['usu_nome'];
    $usu_email = $_POST['usu_email'];


    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$usu_nome', '$usu_email')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
