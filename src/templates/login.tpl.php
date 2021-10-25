<?php

include 'header.tpl.php';
$email = filter_input(INPUT_COOKIE, 'remember');

?>

<main>
    <h2>Login</h2>
    <form action="?url=login_action" method="post">
        <input name="email" type="email" placeholder="Email"><br>
        <input name="passwd" type="password" placeholder="Password"><br>
        <input name="remember" type="checkbox">Recuérdame<br>
        <button type="submit">Login</button>
    </form>
</main>

</body>

</html>