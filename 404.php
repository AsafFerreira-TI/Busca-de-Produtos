<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca de Produtos</title>
    <link rel="stylesheet" href="buscaproduto.css">
</head>
<body>
    
    <center>
        <form method="post">
            <h1 align="center">Busca de Produtos</h1>
            <ul align="left" id="lista">
                <li><b>Produtos:</b></li>
                <li>Arroz Camil</li>
                <li>Feijão Kicaldo</li>
                <li>Farinha Dona Benta</li>
                <li>Farinha de Mandioca Yoki</li>
                <li>Macarrão Renata</li>
                <li>Sal Lebre</li>
                <li>Óleo Soya</li>
                <li>Café Pilão</li>
                <li>Açúcar União</li>
                <li>Molho de Tomate Fugini</li>
            </ul><br><br><br>

            <input id="txt_produto" type="text" name="produto" placeholder="Digite aqui o nome do produto">
            <input id="btn_consultar" type="submit" value="Consultar"><br><br>
        </form>

        <?php
            if($_POST){
                $produtos = [
                    ["nome"=> "Arroz Camil","preço"=> "25,90","quantidade"=> 100],
                    ["nome"=> "Feijão Kicaldo","preço"=> "8,50","quantidade"=> 50],
                    ["nome"=> "Farinha Dona Benta","preço"=> "6,00","quantidade"=> 30],
                    ["nome"=> "Farinha de Mandioca Yoki","preço"=> "15,00","quantidade"=> 10],
                    ["nome"=> "Macarrão Renata","preço"=> "4,00","quantidade"=> 35],
                    ["nome"=> "Sal Lebre","preço"=> "4,50","quantidade"=> 70],
                    ["nome"=> "Óleo Soya","preço"=> "8,00","quantidade"=> 100],
                    ["nome"=> "Café Pilão","preço"=> "29,90","quantidade"=> 50],
                    ["nome"=> "Açúcar União","preço"=> "30,00","quantidade"=> 30],
                    ["nome"=> "Molho de Tomate Fugini","preço"=> "3,50","quantidade"=> 35]
                ];
                
                $unidade = $_POST["produto"];

                for ($i = 0; $i <= count($produtos); $i++){
                    if ($i <10 && $unidade == $produtos[$i]["nome"]){
                        echo "<p align='left' class='resultado'> Produto: ".$produtos[$i]["nome"]."<br>Preço: R$ ".$produtos[$i]["preço"]."<br>Quantidade em estoque: ".$produtos[$i]["quantidade"]." unidades.</p><br>";
                    } 
                } 

                if ($unidade != $produtos[0]['nome'] && 
                    $unidade != $produtos[1]['nome'] && 
                    $unidade != $produtos[2]['nome'] && 
                    $unidade != $produtos[3]['nome'] && 
                    $unidade != $produtos[4]['nome'] && 
                    $unidade != $produtos[5]['nome'] && 
                    $unidade != $produtos[6]['nome'] && 
                    $unidade != $produtos[7]['nome'] && 
                    $unidade != $produtos[8]['nome'] &&                     
                    $unidade != $produtos[9]['nome'])
                {
                    echo "<p align='left' class='resultado'>Digite um valor válido.<p>";
                }
            }

            # Soli Deo Gloria! 
        ?>
    </center>
</body>
</html>
