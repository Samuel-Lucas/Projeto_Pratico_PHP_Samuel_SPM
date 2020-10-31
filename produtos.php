<?php
    require_once "php/conexao_bd/conexao.php";

    include_once "php/includes/header.php";
?>
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

                <a class="button" href="enviar_pedido.php">Enviar pedido</a>

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
                <p><?php echo $rows['descricao']; ?></p>
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

<?php include_once "php/includes/footer.php"; ?>