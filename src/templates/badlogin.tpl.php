<?php

include 'header.tpl.php';

?>

<main>
    <h2>Contraseña incorrecta, prueba de nuevo.</h2>
    <form action="?url=login_action" method="post">
        <input name="uname" type="text" placeholder="Username"><br>
        <input name="passwd" type="password" placeholder="Password"><br>
        <select name="role">
            <option>Alumno</option>
            <option>Profesor</option>
            <option selected="yes">Admin</option>
        </select>
        <button type="submit">Login</button>
    </form>
</main>

</body>

</html>