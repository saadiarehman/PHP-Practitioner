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
         li{
            list-style-type:none;
        }
    
    </style>
</head>
<body>
                        <h1>My Task Today</h1>
        <ul>
                <li>
                   <strong><?="Task : " ?></strong> <?= $tasks['title']; ?>
                </li>
                <li>
                   <strong><?="Due Date : " ?></strong> <?= $tasks['due']; ?>
                </li>
                <li>
                   <strong><?="Assigned By : " ?></strong> <?= $tasks['assign_to']; ?>
                </li>
                <li>
                   <strong><?="Status : " ?></strong> 
                     <?php if ($tasks['completed']):?>
                        <?= "finished"; ?>
                     <?php else: ?>
                        <?= "Incomplete"; ?>
                     <?php endif; ?> 
                </li>            
        </ul>
</body>
</html>