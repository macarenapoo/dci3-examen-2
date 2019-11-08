<?php
  include "../conexion.php";
  $sql = "select * from testimoniales";
  $rs = ejecutar($sql);
?>

<script>
  var testimoniales = new Array();
</script>

<?php
  // agrega aqui tu código
  while ($datos = mysqli_fetch_array($rs)) {
    echo "<script language='javascript'>";
    echo "testimoniales.push({ testimonio: '".$datos["testimonio"]."', persona: '".$datos["persona"]."', puesto: '".$datos["puesto"]."', id: '".$datos["idtestimoniales"]."'  });";
    echo "</script>";
  }
?>
