<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Games Shelter - Fale Conosco</title>
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

        <h2 style="margin-left: 130px;">Fale Conosco</h2>

            <hr>

        <div id="contato">

            <div>
                <img src="images/mail.png" width="23%" style="padding-left: 50px;">
                <p>games.shelter@hotmail.com</p>
            </div>

            <div>
                <img src="images/whats.jpg" width="25%" style="padding-left: 25px;">
                <p>(11) 94444-4444</p>
            </div>
        </div>

        <br><br>

        <div id="formulario">

            <form>
                <label><b>Nome:</b></label><br><br>

                <input type="text" style="width: 320px; height: 25px;" placeholder="Digite seu nome"><br><br><br>

                <label><b>Mensagem:</b></label><br><br>

                <textarea placeholder = "Escreva sua mensagem" cols="30" rows="5" style="width: 320px;"></textarea><br><br>

                <input type="submit" value="Enviar" class="botao">
            </form>
        </div><br>

        <footer>
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