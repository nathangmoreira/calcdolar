<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Converter para dólar</title>
        <meta charset="utf-8">
    </head>
    <body dir="ltr">
        <?php
            // Atribui o conteúdo do arquivo para variável $arquivo
            $arquivo = file_get_contents('https://economia.awesomeapi.com.br/json/all/USD');

            // Decodifica o formato JSON e retorna um Objeto
            $json = json_decode($arquivo);
          
            // Loop para percorrer o Objeto
            foreach($json as $registro):
                $valor_atual =  $registro->ask;
            endforeach;
        ?>
        <form method="post">
            <input type="text" name="real" id="fieldValor">
            <button type="submit">Enviar</button>

            <?php
                @$valor = $_POST['real'];
                $multiplicacao = $valor * $valor_atual;
                echo '<div>Dólar agora: U$ '.$valor_atual.'</div>';
                echo '<div>Resultado: R$ '.$multiplicacao.'</div>';
            ?>
        </form>        
    </body>
</html>