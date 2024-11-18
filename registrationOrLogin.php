<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/registrationOrLogin.css">
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
<form action="register.php" method="POST">
    <label for="login">Логин:</label>
    <input type="text" name="login" id="login" required><br>

    <label for="password">Пароль:</label>
    <input type="password" name="password" id="password" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br>
            <button type = "submit" class="neon-button"><a href ="profile.php">Регистрация </a></button>
        
           
           

        </form><br>
    </div>
</body>
</html>
