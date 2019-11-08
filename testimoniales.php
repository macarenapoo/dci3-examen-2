<?php
  include "../conexion.php";
  $sql = "select * from testimoniales";
  $rs = ejecutar($sql);
?>

<script>
  var testimoniales = new Array();
</script>

<?php

while ($datos = mysql_fetch_array($rs)){

  echo "<script language='javascript'>";
  echo "<testimoniales.php({ testimonio: '".$datos["testimonio"]."', autor: '".$datos["autor"]."', puesto: '".$datos["puesto"]."' })";
  echo "</script>";
}
?>
