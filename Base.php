<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
	    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/AboutUS.css">  
        <link rel="stylesheet" href="libs/bootstrap-reboot.min.css">
        <link rel="stylesheet" href="libs/bootstrap-grid.min.css">
    </head>
    <body>
        <nav class="navbar">
            <div class="container">
            <a href="index.php" class="navbar-brand"><span class="logotype"><img src="img/logotype_50x50.png" alt=""></span>Cardiogram <span class="navbar-brandC">database</span></a>
                <div class="navbar-wrap">
                    <ul class="navbar-menu">
                        <li><a href="Base.php">База хворих</a></li>
                        <li><a href="AboutUS.html">База кардіограм</a></li>
                        <li><a href="Information.html">Конструктор</a></li>
                    </ul>
                </div>
        </nav>
        <?php

define('DB_HOST', 'localhost'); //Привязка
define('DB_USER', 'root'); //Привязка
define('DB_PASSWORD', 'root'); //Привязка
define('DB_NAME', 'base'); //Привязка

$connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); //Привязка
?>
<div class="navi">
    <table>
        <tr>
            <th>ID</th>
            <th>Пацієнт</th>
            <th>Хворий</th>
            <th>Адреса проживання</th>
            <th>Хвороба</th>
            <th>Номер Кардіограми</th>
        </tr>   
        <?php

        $medical_base = mysqli_query($connect, "SELECT * FROM `medical_base`");

        $medical_base = mysqli_fetch_all($medical_base); // Вивід значень SQL з PHPmyAdmin

        foreach ($medical_base as $medical_base) {
        ?>
            <tr>
                <td><?= $medical_base[0] ?></td>
                <td><?= $medical_base[1] ?></td>
                <td><?= $medical_base[2] ?></td>
                <td><?= $medical_base[3] ?></td>
                <td><?= $medical_base[4] ?></td>
                <td><?= $medical_base[5] ?></td> 
            </tr>
        <?php
        }
        ?>
    </table>

        <style>
        th,
        td {
            padding: 50px;
        }

        th {
            background: #606060;
            color: #fff;
        }

        td {
            background: #fff;
        }

        </style>
</div>
        <script src="js/main.js"></script>
    </body>
</html>