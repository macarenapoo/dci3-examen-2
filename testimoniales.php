<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Testimoniales | Eliminar</title>
</head>

<body>
  <?php
    include "conexion.php";
    $sql = "select * from pablo_testimoniales";
    $rs = ejecutar($sql);
  ?>

    <script>
        var testimoniales = new Array();
    </script>

  <?php
    while ($datos = mysqli_fetch_array($rs)){
      echo "<script language='javascript'>";
      echo "testimoniales.push({ testimonio: '".$datos["testimonio"]."', autor: '".$datos["autor"]."', empresa: '".$datos["empresa"]."', id: '".$datos["idTestimonios"]."'});";
      echo "</script>";
  }
  ?>

</body>

</html>