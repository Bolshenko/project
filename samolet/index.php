<?php
include "Db.php";
$result = mysqli_query($link, "SELECT * FROM tarif");
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Samolet</title>
    <link rel="stylesheet" href="css/styles.css">
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
                        <li> <a href="#why">Почему мы</a></li>
                        <li> <a href="#about">О нас</a></li>
                        <li> <a href="#tarif">Тарифы</a></li>
                        <li> <a href="contacts.php">Контакты</a></li>
                        <li> <a href="Registration.php">Регистрация</a>/<a href="logins.php">Вход</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="Banner">
        <div class="container">
            <div class="Banner_content">
                <div class="Banner_text">
                    <h2>Сайт авиакомпании</h2>
                    <dl>
                        <dd>
                            — Доставляем груз точно в указанный срок
                        </dd>
                        <dd>— Перевозим любой вид груза</dd>
                        <dd>— Имеется собственный автопарк</dd>
                        <dd>—​​​​​​​ Охраняемая территория с пропускной системой</dd>
                    </dl>
                </div>
                <div class="Banner_rec">
                    <h6>
                        Оставьте заявку на сайте
                        чтобы мы с вами связались
                    </h6>
                    <p>Введите имя</p>
                    <input type="text" name="name" placeholder="Имя" />
                    <p>Введите номер телефона</p>
                    <p class="string">Наш менеджер позвонит вам</p>
                    <input type="tel" name="phone" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" placeholder="Номер телефона" />
                    <button class="sss">
                        Оставить заявку
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="dignities">
        <div class="container">
            <div class="name">
                <h2 id="why">Почему выбирают именно нас</h2>
                <P>Причины, по которым к нам обращаются многочисленные клиенты</P>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="dignities_item">
                        <img src="img/free-png 1.png" alt="Часы" />
                        <h6>Более 5 лет опыта работы</h6>
                        <p>Наша компания занимается подобной деятельностью уже на протяжении 5 лет</p>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="dignities_item">
                        <img src="img/free-png 2.png" alt="Часы" />
                        <h6>Работаем 24/7</h6>
                        <p>Предоставляем услуги грузоперевозки на протяжении всего дня</p>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="dignities_item">
                        <img src="img/icons8-облако-диалога-с-точками-96 1.png" alt="Часы" />
                        <h6>Довольные клиенты</h6>
                        <p>Нашими услугами грузоперевозки воспользовались более 4000 клиентов</p>
                    </div>

                </div>
            </div>
            </div>
        </div>
    <div class="text">
        <div class="text_first">
            <h3 id="about">Безупречное выполнение работ</h3>
            <p>Водители в нашей компании – это квалифицированные специалисты, которые проживают на территории России. Они прошли высококачественное обучение работы на автоманипуляторе.</p>
        </div>
        <div class="text_first">

            <p>Наши водители превосходно знают все автодороги на территории Москвы и Московской области</p>
        </div>
        <div class="text_first">

            <p>Мы следим за тем, чтобы наши водители осуществляли прогрузку максимально аккуратно. С любым грузом наши специалисты обращаются очень акуратно, как будто это стекло.</p>
        </div>
    </div>
    <div class="Rate">
        <div class="container">
            <div class="name">
                <h2 id="tarif">Получите скидку 10% на вторую авиаперевозку</h2>
                <P>Наша компания предоставляет услуги грузоперевозки на протяжении всего дня</P>
            </div>
            <div class="row">
            <?php
                            while($ma = mysqli_fetch_assoc($result))
                            {?>
                                 <div class="col-md-4">
                    <div class="Rate_item">
                        <img src="img/icons8-кровать-96 1.png" alt="Кровать" />
                        <h6><?php echo $ma["name"]?></h6>
                        <p><?php echo $ma["description"]?></p>
                        <p><b>от <?php echo $ma["price"]?>  руб./час</b></p>
                        <button class="Rate_button">
                            Заказать
                        </button>
                    </div>
                </div><?php
                            }
                        ?>
               
            </div>
            <div class="name"><button>
                            <a href="formadd.php">добавить</a>
                        </button></div>
        </div>
            </div>
    <div class="Forma">
        <div class="forma">
            <h3>Оставьте заявку на сайте, чтобы заказать авиаперевозки</h3>
            <div class="content_forma">
                <input type="text" name="name" placeholder="Введите имя" />
                <input type="email" name="email" placeholder="mail" />
                <input type="tel" name="phone" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" placeholder="Номер" />
                <button class="Forma_button">
                    Заказать
                </button>
            </div>
            <p>Нажимая на кнопку, Вы принимаете <a href="#">Положение</a> и <a href="#">Согласие</a> на обработку персональных данных</p>
        </div>
    </div>        
    <footer>
        <div id="con" class="container">
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