<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            background-color:grey;
            padding:20px;
            text-align:center;
        }
    
    </style>
</head>
<body>
         Simple Html way
        <h1>Hello World</h1>
        

         same work with using PHP 
            <?= "<h1>Hello World</h1> " ?>

         same work by creating variable
        <br>
        <?php
            $document = 'Hello World';
            echo "<h1>{$document}</h1>"; 
        ?>
            fetch data from url http://localhost:8888/?name=john -----name is key, john is value
        <?php
                $name= $_GET['name'];
                echo    "<h1>Hello {$name}</h1>" ;
        ?>

        any tag can apply in url like this
                            localhost:8888/?name=<a href="https://www.google.com">JOHN</a>
        

        we can get value of url using following function
        <br>

        <br>

        <?php
                $name = Htmlspecialchars($_GET['name']);
                echo "<h1>Hello , {$name}</h1>";
        ?>
</body>
</html>