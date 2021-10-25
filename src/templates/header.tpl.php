<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400&display=swap" rel="stylesheet">
    <title>home</title>
</head>
<body>
    <div class="nav">
        <h1>SCHOOL</h1>

        <nav>
            <ul>
                <?php if (isset($_SESSION['logged'])): ?>
                <li>
                    <a href="?url=logout">Logout</a>
                </li>
                <?php else: ?>
                <li>
                    <a href="?url=login">Login</a>
                </li>
                <?php endif;?>
                <li>
                    <a href="?url=register">Register</a>
                </li>
                <li>
                    <a href="?url=home">Home</a>
                </li>
            </ul>
        </nav>
    </div>
