<?php

setcookie("id", $idus, time()-23760, "/");
header("Location: ../login/index.php");

?>