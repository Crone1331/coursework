<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="../templates/style/main.css">
    <link rel="stylesheet" href="../templates/style/font-awesome-4.7.0/css/font-awesome.min.css">
    <title>Личный блог</title>
</head>
<body>

        <?php
            include("header.html");
        ?>

    <main class="main">

        <?php
            include("profile.php");
            include("content.php");
        ?>

    </main>

        <?php
            include("footer.html");
        ?>

</body>
</html>