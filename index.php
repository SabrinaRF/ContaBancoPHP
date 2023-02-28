<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'ContaBanco.php';
            $c1= new ContaBanco();
            $c1->AbrirConta(5, "SABRINA", "CP");
            
            $c2= new ContaBanco();
            $c2->AbrirConta(6, "FILIPI", "CC");
            
            $c1->depositar(500);
            $c2->depositar(300);
            
            $c1->sacar(100);
            
            print_r($c1);
            print_r($c2);
            
        ?>
        </pre>
    </body>
</html>
