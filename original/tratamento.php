<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        $_SESSION["erro"] = "Você não tem permição para entrar nessa pagina";
        header('Location: index.php');
        
    }

    $valor1 = isset($_POST["text_valor_1"])? $_POST["text_valor_1"] : "";
    $valor2 = isset($_POST["text_valor_2"])? $_POST["text_valor_2"] : "";

    if($valor1 < 0 || $valor2 < 0 ){
        $_SESSION["erro"] = "algum dos valores não é um valor numérico positivo";
        header('Location: index.php');
    }

    if (is_numeric($valor1) && is_numeric($valor1)) {
        echo"A soma é : ".$valor1 + $valor2;
    }else{
        $_SESSION["erro"] = "algum dos valores não é um valor numéro";
        header('Location: index.php');
    }
?>
<br>
<button type="button" style="margin-top: 100px;"><a href="index.php">voltar</a></button>