<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Testimoniales | Eliminar</title>
</head>

<body>
  <?php
    // agrega tu código aqui
    include "../conexion.php";
    if (isset($_REQUEST['id'])) {
        $id = $_REQUEST['id'];
        $sql = "DELETE FROM marcos_testimoniales WHERE idTestimonio=".$id;
        
        ejecutar($sql);

        echo "<script language='javascript'>window.location.assign('admin.php');</script>";
    } 
  ?>
    
  </body>
</html> 

