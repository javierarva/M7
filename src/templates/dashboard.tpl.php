<?php

include 'header.tpl.php';

?>

<main>
    <h2>Dashboard</h2>
     <div>
         <h2>Has iniciado sesión correctamente</h2>
        <p>Bienvenido, <?= $_SESSION['uname']??'User';?></p>
    </div>
</main>

</body>

</html>