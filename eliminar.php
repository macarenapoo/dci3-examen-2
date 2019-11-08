<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Testimoniales | Eliminar</title>
</head>

<body>
<?php
        include "../conexion.php";
        if (isset($_REQUEST['id'])) {
            $id = $_REQUEST['id'];
            $sql = "DELETE FROM ricardo_testimoniales WHERE id=".$id;
            
            ejecutar($sql);

            echo "<script language='javascript'>window.location.assign('admin.php');</script>";
        }
    ?>
    
  </body>
</html> 

