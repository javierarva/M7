<?php

include 'header.tpl.php';

?>

<main>
    <h2>Register</h2>
    <form action="?url=register_action" method="post">
        <input name="email" type="email" placeholder="Email"><br>
        <input name="uname" type="text" placeholder="Username"><br>
        <input name="passwd" type="password" placeholder="Password"><br>
        <select name="role">
            <option>Alumno</option>
            <option>Profesor</option>
        </select>
        <button type="submit">Register</button>
    </form>
</main>

</body>

</html>