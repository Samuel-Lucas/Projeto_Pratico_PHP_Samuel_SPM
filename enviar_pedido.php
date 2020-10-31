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

            <select name="nomeproduto" onblur="valorSelect()">
                <option value=""></option>

                <?php 
                    $sql = "select descricao, preco_venda from produtos";
                    $result = $conn->query($sql);
                
                    while($rows = $result->fetch_assoc()) {
                ?>
                        <option value="<?php echo $rows['preco_venda']; ?>">
                            <?php echo $rows['descricao']; ?>
                        </option>

              <?php } ?>
                
            </select><br><br>

            <script>

                function valorSelect() {
                    let valor = event.target;
                    valor = parseFloat(valor.value)

                    let exibir = document.getElementById('preco')
                    exibir.value = "<?php $phpvar='"+valor+"';
                    echo $phpvar;?>";
                } 
            </script>

            <label>Valor unitário: </label><br>
            <input id="preco" type="number" name="valorunitario" value=""><br><br>

            <label>Quantidade: </label><br>
            <input type="number" name="quantidade" onblur="valorTotal()"><br><br>

            <script>

                function valorTotal() {
                    let quant = event.target;
                    quant = parseInt(quant.value)

                    let preco = document.getElementById('preco').value

                    if (quant > 0) {
                        let mult = quant * preco

                        let exibir = document.getElementById('valor_final')
                        exibir.value = "<?php $phpvar='"+mult+"';
                        echo $phpvar;?>";    
                    }              
                } 
            </script>
            
            <label>Valor total: </label><br>
            <input id="valor_final" type="number" name="valortotal" value=""><br><br>

            <button class="btn_envio" type="submit">Enviar</button>
        </form>
    </div>

<?php include_once "php/includes/footer.php"; ?>