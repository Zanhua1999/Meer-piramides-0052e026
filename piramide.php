<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title></title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>

<body>

<h3>Piramide</h3>

<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">

    <?php

    for($row=1;$row<=10;$row++)

    {
     echo "<tr>";
     for ($col=1; $col<$row ; $col++) { 
        echo "<td height=30px width=30px bgcolor=#000000></td>";

     }
    }

    ?>

</table>

</body>

</html>