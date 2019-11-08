<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Testimoniales | Agregar</title>
</head>

<body>
  <?php
    // Agrega el código aqui
        include "../conexion.php";
        if (isset($_POST["testimonio"])) {
            $testimonio = $_POST["testimonio"];
            $autor = $_POST["autor"];
            $puesto = $_POST["puesto"];

            $sql ="INSERT INTO marcos_testimoniales (testimonio,autor,puesto) VALUES ('$testimonio','$autor','$puesto')";

            ejecutar($sql);

            echo "<script language='javascript'>window.location.assign('admin.php')</script>";
        }
  ?>
    
  </body>
</html> 
