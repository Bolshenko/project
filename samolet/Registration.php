<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Samolet</title>
    <link rel="stylesheet" href="css/Reg.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Concert+One&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:wght@400;600;700;800&family=Yellowtail&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <div class="header_content">
                <div class="logo">

                    <a href="index.php"><img src="img/Group 1.png" alt="Логотип"></a>
                </div>
                <nav class="navigation">
                    <ul>
                        <li> <a href="index.php#why">Почему мы</a></li>
                        <li> <a href="index.php#about">О нас</a></li>
                        <li> <a href="index.php#tarif">Тарифы</a></li>
                        <li> <a href="index.php#con">Контакты</a></li>
                        <li> <a href="Registration.php">Регистрация</a>/<a href="logins.php">Вход</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    
   <div class="Reg">
        <form action="/" method="post">
            <h3>Регистрация</h3>
            <div class="form_flex">
                <div>
                    
                    <div class="inputs"><input type="text" name="name" placeholder="Имя" /></div>
                    <div class="inputs"> <input type="tel" name="telephone" placeholder="Номер телефона" /></div>
                </div>
                <div>
                    <div class="inputs"><input type="email" name="email" placeholder="mail" /></div>
                    <div class="inputs"><input type="text" name="phone" placeholder="Логин" /></div>
                    <div class="inputs"> <input type="password" name="pass" placeholder="Пароль" /></div>
                    <div class="inputs"> <input type="password" name="rpass" placeholder="Павторите Пароль" /></div>
                </div>
            </div>
            <button class="Reg_button">
                Регистрация
            </button>
            <div class="help">
                <a href="login.php">Уже есть аккаунт?</a>

            </div>
        </form>

    </div>    
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-2 offset-md-1">
                    <div class="foooter_item">
                        <a href="#"><img class="im" src="img/Group 1.png" alt="Логотип"></a>
                    </div>
                </div>

                <div class="col-md-5 ">
                    <div class="foooter_item">
                        <p>ООО «СтройТрейд», 123456, г.Москва, ул. Центральная 1, офис 1ИНН 1234567890 ОГРН 123456789012</p>
                        <a href="#">Политика конфиденциальности</a>
                    </div>
                </div>
                <div class="col-md-3 offset-md-1">
                    <div class="foooter_item">
                        <img src="img/icons8-телефон-96 1.png" alt="Телефон"><span>+7 988 889 88 88</span>
                        <p>Звонок по России бесплатный</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>