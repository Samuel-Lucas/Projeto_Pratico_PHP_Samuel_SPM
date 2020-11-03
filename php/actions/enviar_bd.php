<?php
    session_start();

    require_once "../conexao_bd/conexao.php";

    if(empty($_POST['nome']) || empty($_POST['endereco']) || empty($_POST['telefone']) || empty($_POST['nomeproduto'])
    || empty($_POST['valorunitario']) || empty($_POST['quantidade']) || empty($_POST['valortotal'])) {

        $_SESSION['erro_envio'] = true;
        header("Location: ../../enviar_pedido.php");
    } else {

        if(isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['telefone'])
        && isset($_POST['nomeproduto']) && isset($_POST['valorunitario']) && isset($_POST['quantidade'])
        && isset($_POST['valortotal'])) {

            $nomecliente = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $nomeproduto = $_POST['nomeproduto'];
            $valor_unit = $_POST['valorunitario'];
            $quantidade = $_POST['quantidade'];
            $valor_total = $_POST['valortotal'];

            $sql = "insert into pedidos (idpedido, nomecliente, endereco, telefone, nomeproduto,
                    valor_unit, quantidade, valor_total)
                    values (null, '$nomecliente', '$endereco', '$telefone', '$nomeproduto',
                    '$valor_unit', '$quantidade', '$valor_total')";

                    
            if ($conn->query($sql) === TRUE) {

                $_SESSION['sucesso'] = true;
                header("Location: ../../enviar_pedido.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    } 
?>