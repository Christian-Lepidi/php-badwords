<?php
 $user_paragraph = $_GET["paragraph"];
 $user_paragraph_length = strlen($user_paragraph);
 $user_censure = $_GET["censure"];
 $user_censure_word = str_replace("esercizio","***", $user_paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>
    <?php echo $user_paragraph ?>
   </h1> 
   <span>
    <?php echo $user_paragraph_length ?>
   </span>
   <h2>
   <?php echo $user_censure_word ?>
   </h2>
</body>
</html>