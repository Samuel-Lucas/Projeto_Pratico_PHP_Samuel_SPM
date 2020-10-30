<?php
    require_once "php/conexao_bd/conexao.php";

    include_once "php/includes/header.php";
?>

    <h2 style="margin-left: 120px;">Enviar pedido</h2>

    <hr>

    <div id="container_pedido">
        <form action="enviar_pedido.php" method="post">
            <label>Nome: </label><br>
            <input type="text" name="nome" placeholder="Digite seu nome"><br><br>

            <label>Endereço: </label><br>
            <input type="text" name="endereco" placeholder="Digite seu Endereço"><br><br>

            <label>Telefone: </label><br>
            <input type="number" name="telefone" placeholder="Digite seu telefone"><br><br>

            <label>Produto: </label><br>

            <select name="nomeproduto" onblur="ver()">
                <option value=""></option>

                <?php 
                    $sql = "select idproduto, descricao from produtos";
                    $result = $conn->query($sql);
                
                    while($rows = $result->fetch_assoc()) {
                ?>
                        <option value="<?php echo $rows['descricao']; ?>"><?php echo $rows['descricao']; ?></option>

              <?php } ?>
                
            </select><br><br>

            <?php
                          
     

                $selectValue = "
                    <script>
                        function ver() {

                            let desc = document.querySelector('select').value
                            document.write(desc)
                        }
                    </script>";
    
                    



            ?>

            <label>Valor unitário: </label><br>
            <input type="number" name="valorunitario"><br><br>

            <label>Quantidade: </label><br>
            <input type="number" name="quantidade"><br><br>
            
            <label>Valor total: </label><br>
            <input type="number" name="valortotal"><br><br>

            <button class="btn_envio" type="submit">Enviar</button>
        </form>

    </div>

<?php include_once "php/includes/footer.php"; ?>