<?php
define('__ROOT__', dirname(__FILE__)); 
require_once(__ROOT__.'/twitter.php'); 
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Час Страсти</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=1280, initial-scale=.6, maximum-scale=1, minimal-ui">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/fotorama.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="main-wrapper">
            <header class="main-header">
                <div class="main-header-cont">
                    <h1 class="logo">
                        Час страсти
                    </h1>
                </div>
            </header>
            <main data-bg="1">
                <div class="wrapper" data-arrow="1">
                    <div class="top clearfix">
                        <section class="app app-left">
                            <div id="app" class="app-head fotorama" data-auto="false">
                                
                            </div>                    
                            <footer class="app-footer">
                            <?php
                                $link = 'http://www.mamba.ru/promo/extreme.phtml';
                                if ($_GET['r'] === 'mail') {
                                    $link = 'http://love.mail.ru/promo/extreme.phtml';
                                } elseif ($_GET['r'] === 'rambler') {
                                    $link = 'http://love.rambler.ru/promo/extreme.phtml';
                                }
                            ?>
                                <a id="photo__popup" target="_blank" href="<?= $link ?>">Приложение</a>
                            </footer>
                        </section>
                        <div class="ice-cream-slider">
                            <h2 class="ice-logo">Extreme</h2>
                            <div class="slide slide-1">
                                <div class="left-splash"></div>
                                <div class="ice-cream"></div>
                                <div class="right-splash"></div>
                            </div>
                            <div class="slide slide-2">
                                <div class="left-splash"></div>
                                <div class="ice-cream"></div>
                                <div class="right-splash"></div>
                            </div>
                            <div class="slide slide-3">
                                <div class="left-splash"></div>
                                <div class="ice-cream"></div>
                                <div class="right-splash"></div>
                            </div>
                            <div class="slide slide-4">
                                <div class="left-splash"></div>
                                <div class="ice-cream"></div>
                                <div class="right-splash"></div>
                            </div>
                            <div class="slide slide-5">
                                <div class="left-splash"></div>
                                <div class="ice-cream"></div>
                                <div class="right-splash"></div>
                            </div>
                            <div class="slide slide-6">
                                <div class="left-splash"></div>
                                <div class="ice-cream"></div>
                                <div class="right-splash"></div>
                            </div>
                            <div class="arrow arrow-left disabled">
                                <span class="icon icon-left-dir"></span>
                            </div>
                            <div class="arrow arrow-right">
                                <span class="icon icon-right-dir"></span>
                            </div>
                            <div class="ice-cream-desc">
                                <div class="desc-slide" data-slide="slide-1">
                                    <div class="ice-cream-head">Клубника</div>
                                    <div class="ice-cream-body">
                                        – клубничные страсти для ярких и темпераментных
                                    </div>
                                </div>
                                <div class="desc-slide" data-slide="slide-2">
                                    <div class="ice-cream-head">Фисташка</div>
                                    <div class="ice-cream-body">
                                        – дразнящая страсть для любителей запретных желаний
                                    </div>
                                </div>
                                <div class="desc-slide" data-slide="slide-3">
                                    <div class="ice-cream-head">Тропик</div>
                                    <div class="ice-cream-body">
                                        – тропические фантизии для тех, кто просыпается вместе
                                    </div>
                                </div>
                                <div class="desc-slide" data-slide="slide-4">
                                    <div class="ice-cream-head">Ямбери</div>
                                    <div class="ice-cream-body">
                                        – страстная экзотика для искателей новых ощущений
                                    </div>
                                </div>
                                <div class="desc-slide" data-slide="slide-5">
                                    <div class="ice-cream-head">Два Шоколада</div>
                                    <div class="ice-cream-body">
                                        – нежная страсть для ценителей традиций
                                    </div>
                                </div>
                                <div class="desc-slide" data-slide="slide-6">
                                    <div class="ice-cream-head">Пломбирно-Ягодный</div>
                                    <div class="ice-cream-body">
                                        – утончённые идеи для элегантных и страстных
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <section class="app app-right">
                            <div id="app2" class="app-head">
                                <img class="app-bg" src="img/apps/02.jpg" alt="">
                                <header>Анна<br>Межиковская</header>
                                <div class="app-tag">на нашем сайте</div>
                            </div>                    
                            <footer class="app-footer">
                                <a href="app.php" target="_blank">Приложение</a>
                            </footer>
                        </section>
                    </div>
                    <ul class="bot-links">
                        <li id="advices" class="bot-link bot-link_b advices">
                            <section>
                                <header>Доведите градус своей<br/>страсти до максимума...</header>
                                <a href="#"></a>
                                <footer>extreme советы</footer>
                            </section>
                        <li id="events" class="bot-link bot-link_m events">
                            <section>
                                <header>Ваши твиты с хэштегом<br>#часстрасти</header>
                                <a href="#"></a>
                                <footer class="hidden">события</footer>
                            </section>
                        <li id="bloggers" class="bot-link bot-link_b bloggers">
                            <section>
                                <header>Сергей Судариков</header>
                                <a href="#"></a>
                                <footer>extreme блоггеры</footer>
                            </section>
                    </ul>
                    <a class="dropzone select-image" href="javascript:void(0);"><span class="drop-text">Загрузите вашу фотографию</span></a>
                    <footer class="main-footer">
                        <div class="hot-line">
                            <span>горячая линия</span>
                            <a href="tel:+78003470200">8-800-347 02 00</a>
                        </div>
                        <?php if ($_GET['r'] !== 'mail' && $_GET['r'] !== 'rambler') : ?>
                        <div class="extreme-vk">
                            <a href="http://vk.com/extremenestle" target="_blank"><span class="icon icon-vkontakte-rect"></span> vk.com/extremenestle</a>
                        </div>
                        <?php endif; ?>
                        <div class="feedback">
                            <a href="mailto:hourofpassion@gmail.com">обратная связь</a>
                        </div>
                    </footer>
                </div>
            </main>
        </div>
        <div id="load-overlay" class="overlay hidden">
            <div class="popup advice-popup hidden" data-popup="1">
                <div class="popup-head">
                    <div class="mini-logo"></div>
                    <div class="mini-slider" data-auto="false">
                        <div class="slide slide-1" data-taste="0" style="background:url(../img/popups/mini01.png) no-repeat center center / auto 100%;">
                            <div class="mini-desc">Клубника</div>
                        </div>
                        <div class="slide slide-2" data-taste="1" style="background:url(../img/popups/mini01.png) no-repeat center center / auto 100%;">
                            <div class="mini-desc">Фисташка</div>
                        </div>
                        <div class="slide slide-3" data-taste="2" style="background:url(../img/popups/mini01.png) no-repeat center center / auto 100%;">
                            <div class="mini-desc">Тропик</div>
                        </div>
                        <div class="slide slide-4" data-taste="3" style="background:url(../img/popups/mini01.png) no-repeat center center / auto 100%;">
                            <div class="mini-desc">Ямбери</div>
                        </div>
                        <div class="slide slide-5" data-taste="4" style="background:url(../img/popups/mini01.png) no-repeat center center / auto 100%;">
                            <div class="mini-desc">Два шоколада</div>
                        </div>
                        <div class="slide slide-6" data-taste="5" style="background:url(../img/popups/mini01.png) no-repeat center center / auto 100%;">
                            <div class="mini-desc">Ягодный</div>
                        </div>
                    </div>
                    <div class="popup-close"></div>
                </div>
                <div class="popup-body" id="popupCont" data-taste="0">
                    <header class="popup-header">
                        <h2>Extreme советы</h2>
                        <div class="popup-headdesc">
                            Наши советы о том, как
                            можно провести «Час Страсти»
                        </div>
                    </header>
                    <div class="popup-content">
                        <div class="popup-fotorama">
                            <div class="advice-fotorama" data-taste="0">
                                <div class="slide slide-1" data-taste="0">
                                    Доведите градус своей
                                    страсти до максимума,
                                    охладите пыл
                                    мороженым eXtreme
                                    Клубника и покажите друг
                                    другу настоящий
                                    «Час страсти»!
                                </div>
                            </div>
                            <div class="advice-fotorama" data-taste="1">
                                <div class="slide slide-2" data-taste="1">
                                    Съешьте любимый Extreme
                                    Фисташка на его глазах,
                                    дразните его. Не оставьте
                                    ни кусочка. Угостите любимого
                                    мороженным уже после
                                    «Часа Страсти».
                                </div>
                            </div>
                            <div class="advice-fotorama" data-taste="5">
                                <div class="slide slide-6" data-taste="5">
                                Спросите его про себя! С каждым правильным ответом двигайтесь туда, куда велит вам страсть, и угощайте его Тропическим Extreme.
                                </div>
                                <div class="slide slide-7" data-taste="5">
                                    Сделайте ей согревающий утренний массаж, после – аккуратно проведите мороженным Extreme Тропик по её спине, настроив на Час утренней Страсти.
                                </div>
                            </div>
                            <div class="advice-fotorama" data-taste="3">
                                <div class="slide slide-4" data-taste="3">
                                    Напишите ему страстное послание прямо на своём теле, используя лишь рожок Extreme Ямберия. Будьте кратки, но красноречивы. Позвольте ему справиться с прочитанным.
                                </div>
                                <div class="slide slide-8" data-taste="3">
                                    Скажите, что он должен исполнить три любых ваших желания за рожок Extreme Ямбери. Пусть желания зажгут ваш «Час Страсти».
                                </div>
                            </div>
                            <div class="advice-fotorama" data-taste="4">
                                <div class="slide slide-5" data-taste="4">
                                    Попробуйте классический вкус Extreme Два Шоколада и сразу же порадуйте любимого особым холодным, но страстным поцелуем.
                                </div>
                            </div>
                            <div class="advice-fotorama" data-taste="2">
                                <div class="slide slide-3" data-taste="2">
                                    Возьмите кончик рожка в зубы и покормите любимого Ягодным Extreme без помощи рук.
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <footer class="popup-footer">
                        <script type="text/javascript" src="http://yandex.st/share/share.js"
                        charset="utf-8"></script>
                        <div class="yashare-auto-init" data-yashareL10n="ru"
                         data-yashareQuickServices="vkontakte,facebook,odnoklassniki" data-yashareTheme="counter"

                        ></div> 
                    </footer>
                </div>
            </div>
        <div class="popup advice-popup pad-popup hidden" data-popup="2">
            <div class="popup-head">
                <div class="mini-logo"></div>
                <!--<div class="mini-slider">
                    <div class="slide slide-1" style="background:url(../img/popups/mini01.png) no-repeat center center / auto 100%;">
                        <div class="mini-desc">Клубника</div>
                    </div>
                    <div class="arr arr__left"><span class="icon icon-left-dir"></span></div>
                    <div class="arr arr__right"><span class="icon icon-right-dir"></span></div>
                </div>-->
                <div class="popup-close"></div>
            </div>
            <div class="popup-body clearfix">
                <div class="column-content">
                    <div class="content-image">
                        <img src="https://pp.vk.me/c620216/v620216612/f202/XDaHcKCpHbY.jpg" alt="Час Страсти" />
                        <div class="content-title">
                            Марина Дударева
                        </div>
                        <div class="content-info taste-strawberry">
                            <span class="content-author">
                                Марина Дударева
                            </span>
                            <span class="content-date">
                                15.06.2014
                            </span>
                        </div>
                    </div>
                    <div class="content-text">
                        <p>
                            На днях мне на глаза попался видеоролик Hot Psychologies, в котором затрагивалась очень важная тема – отношения в сети. Ведь правда, из-за современных технологий мы стали общаться гораздо чаще, но видеться - гораздо реже. Порой я тоже замечаю за собой подобное поведение, но, не смотря на это, для меня нет ничего важнее прикосновений, взглядов и живых эмоций.
                            Посмотрите и вы - http://www.youtube.com/watch?v=44tgVMy-DNc&list=PLF487B5.. 
                            <br> #extremepassion #passionhour #часстрасти #час_страсти
                        </p>
                    </div>
                    <div class="content-social">
                        <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
                        <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="vkontakte,facebook,odnoklassniki" data-yashareTheme="counter"> </div>
                    </div>
                </div>
                <div class="column-content hidden">
                    <div class="content-image">
                        <img src="https://pp.vk.me/c618222/v618222432/cd1a/9ex-yLkTHho.jpg" alt="Час Страсти" />
                        <div class="content-title">
                            Татьяна Аверина
                        </div>
                        <div class="content-info taste-strawberry">
                            <span class="content-author">
                                Татьяна Аверина
                            </span>
                            <span class="content-date">
                                19 июня 2014
                            </span>
                        </div>
                    </div>
                    <div class="content-text">
                        <p>
                            Я узнала о проекте "Час Страсти" и хочу сказать, что это замечательная идея! Ничто так не портит свидание как звонки телефона и проверка соц. сетей. Давайте проводить больше времени с любимыми, уделять им все свое внимание в те моменты, когда они рядом! Я буду участвовать в проекте!) Всем любви!)
                            <br>#extremepassion #passionhour #часстрасти #час_страсти
                        </p>
                    </div>
                    <div class="content-social">
                        <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
                        <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="vkontakte,facebook,odnoklassniki" data-yashareTheme="counter"> </div>
                    </div>
                </div>
                <div class="column-content hidden">
                    <div class="content-image">
                        <img src="https://scontent-b-fra.xx.fbcdn.net/hphotos-frc3/t1.0-9/p480x480/10418980_764211840298479_8986235493383376274_n.jpg" alt="Час Страсти" />
                        <div class="content-title">
                            Екатерина Брицова
                        </div>
                        <div class="content-info taste-strawberry">
                            <span class="content-author">
                                Екатерина Брицова
                            </span>
                            <span class="content-date">
                                19.06.2014
                            </span>
                        </div>
                    </div>
                    <div class="content-text">
                        <p>
                            И новая хорошая социальная идея: отключиться на часок от Интернета. Отложить телефоны, ноуты, планшетники и посвятить время друг другу. Спасибо, что иногда напоминаете нам о существовании такой возможности!
                            Новый проект "Час Страсти" и я подписываюсь под этим: http://www.youtube.com/watch? v=44tgVMy-DNc&list=PLF487B58B01FA36BA
                            <br>#extremepassion #passionhour #часстрасти #час_страсти
                        </p>
                    </div>
                    <div class="content-social">
                        <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
                        <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="vkontakte,facebook,odnoklassniki" data-yashareTheme="counter"> </div>
                    </div>
                </div>
                <div class="column-content hidden">
                    <div class="content-image">
                        <img src="https://scontent-b-fra.xx.fbcdn.net/hphotos-xpa1/t1.0-9/10440646_673652639367795_4423626214834128031_n.jpg" alt="Час Страсти" />
                        <div class="content-title">
                            Аня Лунева
                        </div>
                        <div class="content-info taste-tropic">
                            <span class="content-author">
                                Аня Лунева
                            </span>
                            <span class="content-date">
                                18.06.2014
                            </span>
                        </div>
                    </div>
                    <div class="content-text">
                        <p>
                            А что если отключиться от сети, забыть про телефон, компьютеры, социальные сети и провести это время с пользой для души и тела? Крутая инициатива – «Час Страсти». Пройдет 16 июля. Кто поддерживает, ставьте лайк и распространяйте http://www.youtube.com/watch? v=44tgVMy-DNc&featur..
                            <br>#extremepassion #passionhour #часстрасти #час_страсти
                        </p>
                    </div>
                    <div class="content-social">
                        <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
                        <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="vkontakte,facebook,odnoklassniki" data-yashareTheme="counter"> </div>
                    </div>
                </div>
                <div class="column-content hidden">
                    <div class="content-image">
                        <img src="https://fbcdn-sphotos-a-a.akamaihd.net/hphotos-ak-xpf1/t31.0-8/p960x960/10379794_790666957670635_3202384629220389909_o.jpg" alt="Час Страсти" />
                        <div class="content-title">
                            Сергеи Судариков
                        </div>
                        <div class="content-info taste-strawberry">
                            <span class="content-author">
                                Сергеи Судариков
                            </span>
                            <span class="content-date">
                                18.06.2014
                            </span>
                        </div>
                    </div>
                    <div class="content-text">
                        <p>
                            Когда последний раз вы играли со своей половинкой в "Кто первый возьмет телефон, тот платит за счет в кафе?". Ответы в комментарии. Специально для нас - поколения медиа - людей, в скором времени пройдет специальное событие "Час Страсти". Давайте на 1 час поддержим тренд "Digital Detox" - и опробуем все вкусы страсти в ночь с 15 на 16 июля. Будет интересно! http://www.youtube.com/watch?v=44tgVMy-DNc&list=PLF487B58B01FA36BA
                            <br>#extremepassion #passionhour #часстрасти #час_страсти
                        </p>
                    </div>
                    <div class="content-social">
                        <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
                        <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="vkontakte,facebook,odnoklassniki" data-yashareTheme="counter"> </div>
                    </div>
                </div>
                <div class="column-content hidden">
                    <div class="content-image">
                        <img src="http://photos-h.ak.instagram.com/hphotos-ak-xfa1/914369_1518654535029951_1101664033_n.jpg" alt="Час Страсти" />
                        <div class="content-title">
                            Irina Shevchik
                        </div>
                        <div class="content-info taste-strawberry">
                            <span class="content-author">
                                Irina Shevchik
                            </span>
                            <span class="content-date">
                                17.06.2014
                            </span>
                        </div>
                    </div>
                    <div class="content-text">
                        <p>
                            Открыла для себя проект «Час страсти». Подумала, что важно провести с любимым вечер без телефона и соцсетей. Вспомнить самые счастливые моменты вместе - бесценно :) вот вам один из них!
                            <br>#extremepassion #passionhour
                        </p>
                    </div>
                    <div class="content-social">
                        <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
                        <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="vkontakte,facebook,odnoklassniki" data-yashareTheme="counter"> </div>
                    </div>
                </div>
                <div class="column-content hidden">
                    <div class="content-image">
                        <img src="http://photos-g.ak.instagram.com/hphotos-ak-xpf1/891407_871997296147198_24578230_n.jpg" alt="Час Страсти" />
                        <div class="content-title">
                            Stas Vitus
                        </div>
                        <div class="content-info taste-strawberry">
                            <span class="content-author">
                                Stas Vitus
                            </span>
                            <span class="content-date">
                                17.06.2014
                            </span>
                        </div>
                    </div>
                    <div class="content-text">
                        <p>
                            После просмотра видео от Hot Psychologies. много думал и понял, что после работы я сразу домой к ней! Телефон off, интернет off и свет тоже ;)
                            <br>#extremepassion #passionhour
                        </p>
                    </div>
                    <div class="content-social">
                        <script type="text/javascript" src="//yandex.st/share/share.js" charset="utf-8"></script>
                        <div class="yashare-auto-init" data-yashareL10n="ru" data-yashareQuickServices="vkontakte,facebook,odnoklassniki" data-yashareTheme="counter"> </div>
                    </div>
                </div>
                <div class="column-list">
                    <div class="list-title">Другие статьи</div>
                    <ul>
                        <li style="display: none;">
                            <h3>Марина Дударева</h3>
                            <div class="list-item-info clearfix taste-strawberry">
                                <span class="list-author">
                                    Марина Дударева
                                </span>
                                <span class="list-date">
                                    19 июня 2014
                                </span>
                            </div>
                        </li>
                        <li>
                            <h3>Татьяна Аверина</h3>
                            <div class="list-item-info clearfix taste-strawberry">
                                <span class="list-author">
                                    Татьяна Аверина
                                </span>
                                <span class="list-date">
                                    19 июня 2014
                                </span>
                            </div>
                        </li>
                        <li>
                            <h3>Екатерина Брицова</h3>
                            <div class="list-item-info clearfix taste-strawberry">
                                <span class="list-author">
                                    Екатерина Брицова
                                </span>
                                <span class="list-date">
                                    19 июня 2014
                                </span>
                            </div>
                        </li>
                        <li>
                            <h3>Аня Лунева</h3>
                            <div class="list-item-info clearfix taste-tropic">
                                <span class="list-author">
                                    Аня Лунева
                                </span>
                                <span class="list-date">
                                    18.06.2014
                                </span>
                            </div>
                        </li>
                        <li>
                            <h3>Сергеи Судариков</h3>
                            <div class="list-item-info clearfix taste-strawberry">
                                <span class="list-author">
                                    Сергеи Судариков
                                </span>
                                <span class="list-date">
                                    18.06.2014
                                </span>
                            </div>
                        </li>
                        <li>
                            <h3>Irina Shevchik</h3>
                            <div class="list-item-info clearfix taste-strawberry">
                                <span class="list-author">
                                    Irina Shevchik
                                </span>
                                <span class="list-date">
                                    17.06.2014
                                </span>
                            </div>
                        </li>
                        <li>
                            <h3>Stas Vitus</h3>
                            <div class="list-item-info clearfix taste-strawberry">
                                <span class="list-author">
                                    Stas Vitus
                                </span>
                                <span class="list-date">
                                    17.06.2014
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="popup photo-popup hidden" data-popup="3">
            <div class="popup-head">
                <div class="mini-logo"></div>
                <div class="mini-slider">
                    <div class="slide slide-1" style="background:url(../img/popups/mini01.png) no-repeat center center / auto 100%;">
                        <div class="mini-desc">Клубника</div>
                    </div>
                    <div class="arr arr__left"><span class="icon icon-left-dir"></span></div>
                    <div class="arr arr__right"><span class="icon icon-right-dir"></span></div>
                </div>
                <div class="popup-close"></div>
            </div>
            <div class="popup-body">
                <header class="popup-header">
                    <h2>#Часстрасти</h2>
                    <div class="popup-headdesc">
                        Ваши фотографии из инстаграм<br>
                        с хэштегом #часстрасти
                    </div>
                </header>
                <div class="popup-content">
                    <div class="instaphoto-slider jcarousel">
                        <ul id="instaSlider">
                        </ul>
                    </div>
                    <a href="#" class="jcarousel-control jcarousel-control-prev"></a>
                    <a href="#" class="jcarousel-control jcarousel-control-next"></a>                        
                </div>
            </div>                
            <div class="instaphoto-slider-vertical jcarousel-vert">
                <ul id="instaNavSlider">
                </ul> 
            </div>                
            <a href="#" class="jcarousel-vert-control jcarousel-vert-control-prev">
                <span class="icon icon-up-dir"></span>
            </a>
            <a href="#" class="jcarousel-vert-control jcarousel-vert-control-next">
                <span class="icon icon-down-dir"></span>
            </a>
        </div>
        <div id="load-photo" class="popup app__popup advice-popup pad-popup hidden" data-popup="4">
            <div class="popup-head">
                <div class="mini-logo"></div>
                <div class="popup-close"></div>
            </div>
            <div class="popup-body clearfix">
                <div class="msg-box">Спасибо за участие. Ваше фото было отправлено.</div>
                <div class="photo-border">
                	<div id="HolderPhoto"></div>
                    <div class="photo-frame"> </div>
                </div>
                <form id="form-photo-save" method="POST" action="upload.php">
					<input type="file" style="width: 1em;" name="file" class="input-photo invisible" id="selectPhoto">
					<button value="send" type="submit" class="photo-save">Отправить</button>
				</form>
                <a href="javascript:void(0);" class="photo-upload-link select-image">Загрузить другую фотографию</a>
            </div>
        </div>
        <div class="popup advice-popup hidden" data-popup="5">
                <div class="popup-head">
                    <div class="mini-logo"></div>
                    <div class="popup-close"></div>
                </div>
                <div class="popup-body" id="popupCont">
                    <header class="popup-header">
                        <h2>#ЧАССТРАСТИ</h2>
                        <div class="popup-headdesc">
                            Ваши твиты с хэштегом #часстрасти
                        </div>
                    </header>
                    <div class="popup-content">
                        <div class="popup-fotorama">
                        <?php
                            $tweets = getTweets(5);
                            for ($i=0; $i < count($tweets->statuses); $i++) {
                                echo '<div class="slide slide-'.$i.'" data-taste="0">'.$tweets->statuses[$i]->text.'</div>';
                                //echo $tweet->text."\n";
                                //echo "@".$tweet->user->screen_name."\n";
                            }
                        ?>
                        </div>                        
                    </div>
                    <footer class="popup-footer">
                        <script type="text/javascript" src="http://yandex.st/share/share.js"
                        charset="utf-8"></script>
                        <div class="yashare-auto-init" data-yashareL10n="ru"
                         data-yashareQuickServices="vkontakte,facebook,odnoklassniki" data-yashareTheme="counter"

                        ></div> 
                    </footer>
                </div>
        </div>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/vendor/instafeed.min.js"></script>
    <script type="text/javascript">
        var tag = 'часстрасти';
        var feed = new Instafeed({
            target: 'app',
            get: 'tagged',
            tagName: tag,
            clientId: 'a541556dc1cc4a6ab63d72498e28801f',
            resolution: 'low_resolution',
            template:
               '<div>' +
               '<a href="{{link}}"><img src="{{image}}" /></a>' + 
               '<img class="app-bg" src="{{image}}" alt="">' +
               '<header><span>{{model.user.full_name}}</span></header>' +
               '<div class="app-tag"><span>#' + tag + '</span></div>' +
               '</div>',
            useHttp: true,
            sortBy: 'most-liked',
            limit: 60,
            after: function(){
                fotoramaInit();
            }
        });
        feed.run();

        var bigSlider = new Instafeed({
            target: 'instaSlider',
            get: 'tagged',
            tagName: tag,
            clientId: 'a541556dc1cc4a6ab63d72498e28801f',
            resolution: 'low_resolution',
            template:

            '<li class="insta-slide slide-1" style="background:' +
                'url({{image}}) no-repeat center center / cover;">'+
                '<div class="slide-desc">'+
                    '<div class="slide-user">{{model.user.full_name}}</div>'+
                    '<div class="slide-description"></div>'+
                    '<div class="slide-tags">#часстрасти</div>' +
                '</div>' +
            '</li>',

            useHttp: true,
            sortBy: 'none',
            limit: 60,
            after: function(){
                navInit();
            }
        });
        bigSlider.run();

        function navInit() {
            var elems = $('#instaSlider .insta-slide').clone().empty();
            var parent = $('#instaNavSlider');
            parent.append(elems);
            jCarouselInit();
        };       
    </script>
    <script src="js/vendor/fotorama.js"></script>
    <script>
        function fotoramaInit() {
            var parent = $('.fotorama').fotorama({
                arrows: false,
                nav: false,
                autoplay: false,
                height: '280',
                autoplay: '15000',
                transition: 'crossfade'
            });
        }
    </script>
    <script src="js/vendor/jcarousel.js"></script>
    <script>
        //Bounded slider for instagram photos
        function jCarouselInit() {
            var connector = function(itemNavigation, carouselStage) {
                return carouselStage.jcarousel('items').eq(itemNavigation.index());
            };
            var mainCarousel = $('.jcarousel').jcarousel({

            });
            var navCarousel = $('.jcarousel-vert').jcarousel({
                vertical: true
            });
            navCarousel.jcarousel('items').each(function() {
                var item = $(this);

                // This is where we actually connect to items.
                var target = connector(item, mainCarousel);

                item
                    .on('jcarouselcontrol:active', function() {
                        navCarousel.jcarousel('scrollIntoView', this);
                        item.addClass('active');
                    })
                    .on('jcarouselcontrol:inactive', function() {
                        item.removeClass('active');
                    })
                    .jcarouselControl({
                        target: target,
                        carousel: mainCarousel
                    });
            });
            $('.jcarousel-control-prev')
                .on('jcarouselcontrol:active', function() {
                    $(this).removeClass('inactive');
                })
                .on('jcarouselcontrol:inactive', function() {
                    $(this).addClass('inactive');
                })
                .jcarouselControl({
                    target: '-=1'
                });
            /* Main Carousel Controls */
            $('.jcarousel-control-next')
                .on('jcarouselcontrol:active', function() {
                    $(this).removeClass('inactive');
                })
                .on('jcarouselcontrol:inactive', function() {
                    $(this).addClass('inactive');
                })
                .jcarouselControl({
                    target: '+=1'
                });

            $('.jcarousel-vert-control-prev')
                .on('jcarouselcontrol:inactive', function() {
                    $(this).addClass('inactive');
                })
                .on('jcarouselcontrol:active', function() {
                    $(this).removeClass('inactive');
                })
                .jcarouselControl({
                    target: '-=1'
                });
            /* Nav Carousel Controls */
            $('.jcarousel-vert-control-next')
                .on('jcarouselcontrol:inactive', function() {
                    $(this).addClass('inactive');
                })
                .on('jcarouselcontrol:active', function() {
                    $(this).removeClass('inactive');
                })
                .jcarouselControl({
                    target: '+=1'
                });
        };
        var $popupFotorama = $('.advice-fotorama').fotorama({
            nav: false,
            width: '848',
            height: '320',
            arrows: 'always'
        });
        var $popupFotoramaApi = $popupFotorama.data('fotorama');
        
        $popupFotorama.on(
          'fotorama: show fotorama:showend',
          function (e, fotorama, extra) {
            var index = $('.popup-fotorama .fotorama__active .slide').data('taste');
          }
        );
        
        var $miniFotorama = $('.mini-slider').fotorama({
            nav: false,
            autoplay: false
        });

        $miniFotorama.on(
          'fotorama: show fotorama:showend',
          function (e, fotorama, extra) {
            var index = $('.mini-slider .fotorama__active .slide').data('taste');
            $('.mini-slider').attr('data-taste', index);
            $('#popupCont').attr('data-taste', index);
          }
        ).on(
          'fotorama: ready',
          function(e, fotorama, extra) {
            var index = $('.mini-slider .fotorama__active .slide').data('taste');
            fotorama.show(index);
          }
        );        
    </script>
	<script src="js/libs/jquery-form.min.js"></script>
	<script src="js/libs/upload.js"></script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-52189500-1', 'mamba.ru');
        ga('send', 'pageview');
    </script>
</body>
</html>
