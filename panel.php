<?php
session_start();
if(isset($_SESSION["email"])){
    echo "<button>Destroy</button>";
}
else{
    echo "zona VIP";
    echo "<button action = 'index.php'>Volver</button>";
}

?>