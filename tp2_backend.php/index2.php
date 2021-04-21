<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hola  Mundo</title>
  </head>
  <body>
    <h4>Ejercicio 1</h4>
    <?php
    $a=1;
    if ($a>0) {
        echo "$a es positivo";
      // code...
    }
        echo "<h4>Ejericio 2</h4>";
    if ($a>1 and $a<10) {
        echo "$a es mayor a 1 y menor a 10";
    } else {
        echo "$a no es mayor a 1 y no es menor a 10 ";
    }
    echo "<h4>Ejericio 3</h4>";
    $a=3;
    if ($a>10) {
          echo "$a es mayor a 10";

    } elseif ($a<2) {
          echo "<br> $a es menor a 2";

    }else {
          echo "$a no es menor a 2 y no es mayor a 10";
    }


          echo "<h4>Ejericio 4</h4>";
    $numero1=10;
    $numero2=20;
    if ($numero1>$numero2) {
      echo ($numero1+$numero2);
      echo " <br> ";
      echo ($numero1-$numero2);
      echo " <br> ";
    }elseif ($numero1<$numero2) {
      echo $numero1*$numero2;
      echo " <br> ";
      echo $numero1/$numero2;
      echo " <br> ";
      echo "resto= 0";
      echo " <br> ";
    }elseif ($numero1==$numero2) {
      echo "los numeros ingresados son iguales";
      // code...
    }

    ?>


  </body>
</html>
