<?php
  include "../conexion.php";
  $sql = "SELECT * FROM giselle_testimoniales";
  $rs = ejecutar($sql);
?>

<script>
  var testimoniales = new Array();
</script>

<?php
  // agrega aqui tu código
  while ($datos = mysqli_fetch_array($rs)) {
    echo "<script language='javascript'>";
      echo "testimoniales.push({ testimonio: '".$datos["testimonio"]."', autor: '".$datos["autor"]."', puesto: '".$datos["puesto"]."', id: '".$datos["id_testimoniales"]."'  });";
      echo "</script>";
  }
?>
