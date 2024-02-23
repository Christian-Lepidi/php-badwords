<?php
 $user_paragraph = $_GET["paragraph"];
 $user_paragraph_length = strlen($user_paragraph);
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
</body>
</html>