<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="about__us.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О нас</title>
</head>
<body>
    <?php include_once($_SERVER['DOCUMENT_ROOT'] . "/blocks/header.php"); ?>
    <section class="container">
        <h1>О SNTP</h1>
        <div class="container__button">
        <div class="content__button">
            <a href="#" class="button button__active" name="SNTP">
                о платформе
            </a>
        </div>
        <div class="content__button button__click">
            <a href="#teach" class="button">
                чему мы учим
            </a>
        </div>
        <div class="content__button button__click">
            <a href="#perspective" class="button">
                перспиктивы
            </a>
        </div>
    </div>
    </section>
    <section class="container">
        <div class="container__platform__first">
        <p><a href="#" name="SNTP">SNTP</a> это новая платформа, созданная теми разработчиками, которые учились у лучших и работали, не покладая рук для развития. </p>
        <p><br>Наши образовательные программы созданы практиками и основаны на реальных ситуациях и жизненных бизнес-кейсах как большинства специалистов, так и лично нас.
            <br><br>Пройдя обучение в SNTP, вы будете обладать системными теоретическими знаниями в профессии и станете специалистом с актуальными практическими навыками, позволяющими найти работу или просто заниматься любимым делом, которое требует этих знаний.</p>
        <p>Мы собираемся удивить вас стоимостью курса и практичностью, которую вы получите в ходе его прохождения.</p>   
    </div>
    </section>
    <section class="container">
        <div class="container__platform__two">
        <a href="#" name="teach">Мы вас научим</a> <p>Frontend. Вы научитесь верстать сайты и создавать интерфейсы, соберёте проекты в портфолио и получите современную профессию.</p>
        <br><p>Backand. Вы сможете активно участвовать во всех этапах разработки сайтов и веб-интерфейсов — от работы с дизайн-макетами до программирования и настройки серверов. Получите комплексные знания в веб-разработке и станете зарабатывать больше.</p>
        <br><p>JavaScript. Вы с нуля научитесь разрабатывать полноценные сайты и веб-приложения на JS и изучите один из фреймворков — Vue, React или Angular. Станете ценным сотрудником для любой IT-компании, поймёте, как получить повышение..</p>
        <br><p>React.js. Расширите свои профессиональные знания и навыки разработчика, научившись использовать в работе фреймворк React.js</p>
        <br><p>SQL и MySQL. Вы освоите популярный язык для создания сценариев веб-приложений, научитесь писать сайты и программы, работать с базами данных и фреймворком Laravel и получите востребованную работу.</p>
    </div>
    </section>
    <section class="container">
        <div class="container__platform__three">
            <a href="#" name="perspective">В будущем мы:</a> <p>Расширим список курсов, преподаваемыми нами, потому что каждый день мы работаем над самообразованием и хотим развиваться вместе с вами.</p>
            <p>Мы существенно собираемся улучшить качество оказания образовательных услуг и функциональность нашей образовательной платформы.</p>
            <p>Мы не понаслышке знаем, как важно саморазвитие и знания разных soft-skills навыков, которые помогут дальнейшему развитию в IT-сфере, поэтому в ближайшем времени мы запустим ещё один проект, которые поможет вам оставаться всегда на плаву и не выгорать.</p>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="footer__items">
                <div class="footer__content">
                    <h1>SNTP</h1>
                    <p> Образовательная <b>онлайн</b> платформа</p>
                </div>
        <div class="footer__content">
            <a href="#">Информация</a>
            <a href="#">Сиртифекаты</a>
            <a href="#">Реклама</a>
        </div>
        <div class="footer__content">
            <a href="#">О нас</a>
            <a href="#">Соглашения</a>
        </div>
        <div class="footer__content">
            <a href="#">Войти</a>
            <a href="#">Регистрация</a>
            <a href="#">Обратная связь</a>
        </div>
        <div class="footer__content">
            <p>Подпишитесь на рассылку и получите все уведомления от нашей платформы!</p>
        <foorm>
            <input type="email" id="email__footer" class="footer__subscribe" placeholder="E-mail">
             <div class="foorm__button">
                <a href="#">Подписаться</a>
            </div>
        </foorm>
            <a href="#" class="mail__footer">Пишите сюда: <b>sntp.ru@gmail.com</b></a>
        </div>
        </div>
        </div>
    </footer>
</body>
</html>