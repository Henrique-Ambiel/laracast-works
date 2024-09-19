<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
        <?php 
        //Variáveis 
        $name = "Dark Matter";
        $greeting = "Hello";
        $read = true;

        //Condicionais e booleanos
        if($read){
            $message = " You have read $name!";
        } else {
            $message = " You not have read $name!";
        }
        ?>
    <h1> 
        <?php 
        //Exibem o texto na página
        echo "Hello, Word!";
        print " Hello, Word!";
        echo " $greeting Word!";

        //Concatenação
        echo " ". $greeting . " Word!";

        echo $message;
        ?>
</h1>
</body>
</html>