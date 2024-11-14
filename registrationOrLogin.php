<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/profile.css">
</head>

<body>
    <div >
        <header class='container'>
        <nav>
                <ul class="menu">
                    <li><a href="/index.php"><img class="logo" src="image/ЛОГО 2.png" ></a></li>
                    <li><a href="/katalog.php" class="kat">Каталог</a></li>
                    <li><a href="/support.php" class="support">Поддержка</a></li>
                    <li><a href="/navigation.php" class="where">Где мы находимся</a></li>
                    <li><div class="search-container">
                        <input type="text" placeholder="Поиск...">
                        <button>Найти</button></div></li>
                        <li><a href="/korzina.php"><img class="korzina" src="icons/korzina.png"></a></li>
                        <li><a href="/profile.php"><img class="profile" src="icons/Profile.png"></a></li>
                </ul>
            </nav>
            
        </header>

    </div>
    
    <div>
        <img class="profile1" src="image/bigprofile.png">
        <br>
        <form action="">
            <label class ="label_mail"for="mail">Введите телефон</label><br>
            <input type="tel" name="mail" class ="pochta">
            <br>
            <br>    
            <label class = "label_sms" for="sms">Введите пароль</label> <br>
            <input type="password" name="sms" class="sms"><br>

            <button class="neon-button">Отправить</button>

        </form><br>
    </div>
</body>
</html>
