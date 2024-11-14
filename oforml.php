<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OforZakaz</title>
    <link rel="stylesheet" href="css/oform.css">
</head>

<body>
    <div>
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
                        <li><a href="/registrationOrLogin.php"><img class="profile" src="icons/Profile.png"></a></li>
                </ul>
            </nav>
        
        </header>
    </div>
    <p class = "text_oform">Оформление заказа</p>
    <p class = "dannie"> Данные</p>
        <div >
        <form action="">
            <ul class = "menu_dannie">
                <li>Имя --></li>
                <input type="text">
                <li>Фамилия --></li>
                <input type="text">
                <li>Почта --></li>
                <input type="email">
                <li>Телефон --></li>
                <input type="tel">
                
            </ul>
        </form>
            
        </div>

    <div class = "container_dost">
        <p class= "text_dost">Способ доставки</p>
        
    <form action="">
        
       <li> <input class="rad1"type="radio" name="self" > Курьер</li><br>
       <li> <input class="rad1" type="radio" name="self" > Самовывоз</li><br>
       <li> <input class="rad1"type="radio" name="self" > Доставка по почте</li><br>
    </form>
    </div>
   
    <p class = "text_opl"> Способ оплаты</p>
    <div class = "container_opl">
    
    <form action="">
        
        <li> <input class="rad2" type="radio" name="self" > Ерип</li><br>
        <li> <input class="rad2" type="radio" name="self" > Карта</li><br>
        <li> <input class="rad2"  type="radio" name="self" > Наличные</li><br>
     </form>
     <form class ="container_zakaz" action="">
        <div >
            <p class ="otmena_zakaz">Отменить заказ</p>
            <p>Процессор 1шт</p>
            <p class ="sum_dost">Сумма доставки 7 BYN</p>
            <p class = "itogo">Итого к оплате</p>
            <button class = "button2">Оформить заказ</button>

        </div>
     </form>



    </div>
    </body>
    