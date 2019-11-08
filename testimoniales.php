<script>
  var testimoniales = new Array();
</script>

<?php
    include "../conexion.php";
    $sql = "SELECT * FROM ricardo_testimoniales";
    $rs = ejecutar($sql);

    while ($datos = mysqli_fetch_array($rs)) {
      echo "<script language='javascript'>";
      echo "testimoniales.push({testimonio:'".$datos["testimonio"]."', autor:'".$datos["autor"]."', puesto:'".$datos["puesto"]."', id:'".$datos["id"]."'});";
      echo "</script>";
    }
  ?>
  <script src="./admin.js"></script>

