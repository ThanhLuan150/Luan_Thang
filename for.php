<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vòng lặp for</title>
</head>
<body>
<?php 
    for ($i=0; $i < 10; $i++) {
        for ($i=0; $i < 10 ; $i++) { 
             if($i!=0){
                echo "<div class='do'>do</div>";
             }
             else{
                echo "<div class='xanh'> xanh</div>";
             }
        }
        }
    ?>
</body>
</html>
