<?php
    include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Games Shelter - Produtos</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>
            <div>
                <a href="pagina_inicial.php" class="logo">
                    <h3>Games<br><i>Shelter</i></h3>
                </a>
            </div>

            <div class="menu_item" onmouseover="mudaEstilo()"><a href="produtos.php"><h3>Produtos</h3></a></div>
            <div class="menu_item" onmouseover="mudaEstilo()"><a href="lojas.php"><h3>Lojas</h3></a></div>
            <div class="menu_item" onmouseover="mudaEstilo()"><a href="fale_conosco.php"><h3>Fale Conosco</h3></a></div>
        </header>

        <section id="produtos">

            <div class="lista">

                <h3>Categorias</h3>

                <ul>
                    <li onmouseover="mudaEstilo2()" onclick="exibirCategoria('todos')">Todos</li>
                    <li onmouseover="mudaEstilo2()" onclick="exibirCategoria('computadores')">Computadores</li>
                    <li onmouseover="mudaEstilo2()" onclick="exibirCategoria('notebooks')">Notebooks</li>
                    <li onmouseover="mudaEstilo2()" onclick="exibirCategoria('videogames')">Videogames</li>
                    <li onmouseover="mudaEstilo2()" onclick="exibirCategoria('acessorios')">Acessórios</li>
                </ul>

            </div>

            <div id="container" class="todos">

            <?php 

            $sql = "select * from produtos";
            $result = $conn->query($sql);
            $categoriaProduto = [];
            
            if($result->num_rows > 0) {
                while($rows = $result->fetch_assoc()) {
                // Selecionando produtos da tabela e armazenando em $categoriaProduto
                    array_push($categoriaProduto, $rows); 
            ?>

            <div class="item_prod">
                <img src="<?php echo $rows['imagem']; ?>" onclick="abreImg()" width="40%"><br><br>
                <p><?php echo $rows['descricao']; ?>"</p>
                <p style="border: 0.5px solid gray; width: 300px;"></p>
                <p><del><?php echo $rows['preco']; ?></del></p>
                <p class="preco_descontado"><?php echo $rows['preco_venda']; ?></p>
            </div>

            <?php
                }
            } else {
                echo "Não há produtos cadastrados";
            }
            
            ?>

            </div>

            <?php

        // Selecionando apenas categorias da tabela e armazenando em $categoriasTabela
            $sql = "select distinct categoria from produtos";
            $result = $conn->query($sql);
            $categoriasTabela = [];

            while($rows = $result->fetch_assoc()) {
                array_push($categoriasTabela, $rows['categoria']);
            }
        
           $i = 0;
           $j = 0;
           $ind = 0;

           while($i < count($categoriasTabela)) {
                while($j < count($categoriaProduto)) {
                    if($categoriaProduto[$j]['categoria'] == $categoriasTabela[$i]) {
                        if($ind < 1) {
            ?>
                <div id="container" class="<?php echo $categoriaProduto[$j]['categoria'];?>" style="display: none;">
                <?php $ind++;
                        }    ?>         
            
                <div class="item_prod">
                    <img src="<?php echo $categoriaProduto[$j]['imagem']; ?>" onclick="abreImg()" width="40%">
                    <p><?php echo $categoriaProduto[$j]['descricao']; ?></p>
                    <p style="border: 0.5px solid gray; width: 300px;"></p>
                    <p><del><?php echo $categoriaProduto[$j]['preco']; ?></del></p>
                    <p class="preco_descontado"><?php echo $categoriaProduto[$j]['preco_venda']; ?></p>
                </div>
            
            <?php } $j++;
                } $i++; $j = 0; $ind = 0; ?>  </div>
        <?php   }; ?>  
       
        </section>

        <footer style="margin-top: 30px;">
            <div>
                <h4 style="font-size: 20px;">Atendimento</h4>
                <p>De segunda à Sexta-feira<br>9h às 18h (Exceto feriados)</p>

                <p>(11) 94444-4444<br>games.shelter@hotmail.com</p>
            </div>

            <div>
                <p style="text-align: center; margin-top: 75px; font-size: 20px; text-shadow: 2px 2px black;">
                    &copy; Games Shelter
                </p>  
            </div>

            <div>
                <h4>Pague com:</h4>

                <ul>
                    <li>
                        <img src="images/banco_inter.png" width="40px" style="padding-bottom: 5px;">
                    </li>
    
                    <li>
                        <img src="images/american_express.png" width="35px">
                    </li>
    
                    <li>
                        <img src="images/visa.jpg" width="40px" style="padding-bottom: 4px;">
                    </li>
    
                    <li>
                        <img src="images/mastercard.png" width="45px" style="padding-bottom: 6px;">
                    </li>
    
                    <li>
                        <img src="images/pagseguro.png" width="40px">
                    </li>
    
                    <li>
                        <img src="images/elo.png" width="40px">
                    </li>
    
                    <li>
                        <img src="images/boleto.png" width="40px">
                    </li>
                </ul>

                <ul>
                    <li><img src="images/ebit.jpg" width="50px"></li>
                    <li><img src="images/compra_segura.jpg" width="55px" style="padding-bottom: 8px;"></li>
                    <li><img src="images/safe.jpg" width="55px" style="padding-bottom: 8px;"></li>
                </ul>
            </div>
        </footer> 

        <script src="script.js"></script>
    </body>
</html>