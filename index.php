<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Jogo do impar ou par</title>
        <link rel="stylesheet" href="estilo.css">
    </head>
    <body>
        <?php
            $impar = 0;
            $par = 0;
            $resultado = "- -";

            if(isset($_POST["geranum"])){
                $impar = rand(0, 10);
                $par = rand(0, 10);
                $soma = $impar+$par;

                if($soma % 2 == 0){
                    $resultado = "par";
                }else{
                    $resultado = "impar";
                }
            }
        ?>
        <div class="global">
            <h1>IMPAR OU PAR</h1>
            <form method="POST">
                <input type="submit" name="geranum" value="Gerar números">
            </form>
            <div class="dupla">
                <div class="twice">
                    <header>
                        <h1>IMPAR</h1>
                    </header>
                    <p><?php echo $impar;?></p>
                </div>
                <h1>OU</h1>
                <div class="twice">
                    <header>
                        <h1>PAR</h1>
                    </header>
                    <p><?php echo $par;?></p>
                </div>
            </div>
            <div class="resultado">
                <p>Resultado: <?php echo $resultado;?></p>
            </div>
        </div>
    </body>
</html>