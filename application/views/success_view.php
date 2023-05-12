<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style_2.css" type="text/css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo "<h1>" . $_COOKIE["name"] . ", это твой личный кабинет</h1>";
    
    ?>
    <br><h2> ежедневник </h2>
    <form method="post" action="http://mvc/avtoriz/createCases">
    <input type = "text" name = "name"  placeholder = "name">
    <input type = "text" name = "date"  placeholder = "date">
    <input type = "text" name = "your_case"  placeholder = "cretae a case">
    <button type = "submit" name = "complete" value = "complete"> COMPLETE </button> 
    </form>

    <br><h3> список дел </h3>
    <?php
    // должен выводить список дел в личном кабинете
  foreach ($data as $row) 
  { 
    echo "<br>" . $row["name"],  " " . $row["date"], " " . $row["your_case"];
  }


?>
</body>
</html>

