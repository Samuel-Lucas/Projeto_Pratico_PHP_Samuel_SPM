# Projeto_Pratico_PHP_Samuel_SPM

JSON - Exemplo:

require_once "php/conexao_bd/conexao.php";

    $sql = "select * from produtos";
    $result = $conn->query($sql);

    // JSON

    $json = json_encode($result->fetch_all(MYSQLI_ASSOC));
 
    $dados = json_decode($json, true);

  //  print_r($dados)

    foreach($dados as $key => $rows) {
        
        echo $rows['categoria']."<br>";
        echo $rows['descricao']."<br>";
        echo $rows['imagem']."<br>";
        echo $rows['preco_venda']."<br>";
        echo "<hr>";
    }
