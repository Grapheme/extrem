<?php
define('__ROOT__', dirname(__FILE__)); 
require_once(__ROOT__.'/twitter.php'); 
require_once(__ROOT__.'/instagram.php'); 
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
                                <?php
                                    $hashtags = array(
                                        'passionhour',
                                        'ЧасСтрасти',
                                        'hourofpassion',
                                        'ЯркаяСтрасть',
                                        'УтренняяСтрасть',
                                        'ДразнящаяСтрасть',
                                        'ЭкзотикаСтрасти',
                                        'ИзысканнаяСтрасть',
                                        'ВечнаяСтрасть',
                                    );
                                    foreach($hashtags as $hashtag) {
                                        $data = getInstaFeed($hashtag, 10);
                                        
                                        foreach ($data['data'] as $img) {
                                            echo   '<div>' .
                                                   '<a href="'.$img['link'].'"><img src="'.$img['images']['standard_resolution']['url'].'" /></a>' .
                                                   '<img class="app-bg" src="'.$img['images']['standard_resolution']['url'].'" alt="">' .
                                                   '<header><span>'.$img['user']['full_name'].'</span></header>' .
                                                   '<div class="app-tag"><span>#'.$hashtag.'</span></div>' .
                                                   '</div>';
                                        }                                        
                                    }                                    
                                ?>
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
                            <div class="slide slide-1" data-taste="0">
                                <div class="left-splash"></div>
                                <div class="ice-cream"></div>
                                <div class="right-splash"></div>
                            </div>
                            <div class="slide slide-2" data-taste="1">
                                <div class="left-splash"></div>
                                <div class="ice-cream"></div>
                                <div class="right-splash"></div>
                            </div>
                            <div class="slide slide-3" data-taste="2">
                                <div class="left-splash"></div>
                                <div class="ice-cream"></div>
                                <div class="right-splash"></div>
                            </div>
                            <div class="slide slide-4" data-taste="3">
                                <div class="left-splash"></div>
                                <div class="ice-cream"></div>
                                <div class="right-splash"></div>
                            </div>
                            <div class="slide slide-5" data-taste="4">
                                <div class="left-splash"></div>
                                <div class="ice-cream"></div>
                                <div class="right-splash"></div>
                            </div>
                            <div class="slide slide-6" data-taste="5">
                                <div class="left-splash"></div>
                                <div class="ice-cream"></div>
                                <div class="right-splash"></div>
                            </div>
                            <div class="arrow arrow-left">
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
                                        – тропические фантазии для тех, кто просыпается вместе
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
                            <div id="app2" class="app-head" style="opacity:0.4;">
                                <img class="app-bg" src="img/apps/02.jpg" alt="">
                                <header>Анна<br>Межиковская</header>
                                <div class="app-tag">на нашем сайте</div>
                            </div>                    
                            <footer class="app-footer">
                                <a href="app.php" target="_blank" onclick="_gaq.push(['_trackEvent', 'app_index_click']);">Приложение</a>
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
                    <a class="dropzone select-image" href="javascript:void(0);"><span class="drop-text" onclick="_gaq.push(['_trackEvent', 'upload_index_click']);">Загрузите вашу фотографию</span></a>
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
                    <div class="mini-slider" id="miniSlider" data-auto="false">
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
                    <ul class="cats">
                        <li class="cat-li cat-adv active" data-filter="1">
                            Советы
                        </li>
                        <!--
                        <li class="cat-li cat-dan" data-filter="2">
                            Танцы
                        </li>
                        -->
                        <li class="cat-li cat-fil" data-filter="3">
                            Фильмы
                        </li>
                    </ul>
                    <header class="popup-header">
                        <div data-filter="1">
                            <h2>Extreme советы</h2>
                            <div class="popup-headdesc">
                                Наши советы о том, как можно провести «Час Страсти»
                            </div>
                        </div>
                        <div class="hidden" data-filter="2">
                            <h2>Танцы</h2>
                            <div class="popup-headdesc">                                
                                Нет лучшего воплощения страсти, чем танец. Выбирай свой!
                            </div>
                        </div>
                        <div class="hidden" data-filter="3">
                            <h2>Фильмы</h2>
                            <div class="popup-headdesc">
                                Выбор Extreme – Самые страстные фильмы всех времен.
                            </div>
                        </div>
                    </header>
                    <div class="popup-content">
                        <div class="popup-fotorama">
                            <div class="advice-fotorama" data-taste="0">
                                <div class="slide slide-1" data-taste="0" data-filter="1">
                                    Если у вас и у вашей половинки непреодолимая тяга к покорению вершин, отправляйтесь на <a target="_blank" href="https://ru.foursquare.com/explore?mode=url&ne=55.889176%2C37.95433&q=%D0%A1%D0%BA%D0%B0%D0%BB%D0%BE%D0%B4%D1%80%D0%BE%D0%BC&sw=55.507638%2C37.152328">скалодром</a>. Заранее приготовьте  Extreme Клубника как награду за стойкость и выносливость, а дальше останется только покорить друг друга. #часстрасти #ЯркаяСтрасть
                                </div>
                                <div class="slide slide-2" data-taste="0" data-filter="1">
                                    Если вас не пугает высокая скорость и вы обожаете запах кожи и бензина, отправляйтесь с любимым на <a target="_blank" href="https://ru.foursquare.com/explore?mode=url&near=%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0&q=%D0%9A%D0%B0%D1%80%D1%82%D0%B8%D0%BD%D0%B3">картинг</a>. Почувствуйте себя настоящим гонщиком - прилив адреналина вам гарантирован, а поддержать волну страсти поможет Extreme Клубника. #часстрасти #ЯркаяСтрасть
                                </div>
                                <div class="slide slide-3" data-taste="0" data-filter="1">
                                    Посмотрите фламенко в одном из испанских баров или сходите на спектакль в <a target="_blank" href="http://www.teatr-romen.ru/">цыганский театр «Ромэн»</a>. Чувственная гитара, хриплые голоса солистов и страстные танцоры заставят ваши сердца трепетать! Пусть у этих чувств будет вкус Extreme Клубника. #часстрасти #ЯркаяСтрасть
                                </div>
                                <div class="slide slide-4" data-taste="0" data-filter="1">
                                    Увезите свою половинку среди ночи на <a target="_blank" href="https://ru.foursquare.com/explore?mode=url&near=%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%20%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D1%8F&nearGeoId=72057594038452837&q=%D0%BF%D0%BB%D1%8F%D0%B6">пляж</a> любоваться звездами. Предложите съесть Extreme Клубника одно на двоих, на последнем кусочке ваши губы сольются в страстном поцелуе. А дальше выбирайте: купание голышом или сразу секс на пляже. #часстрасти #ЯркаяСтрасть
                                </div>
                                <div class="slide slide-5 movie" data-taste="0" data-filter="3">
                                    <p><a target="_blank" href="http://www.kinopoisk.ru/film/17663/">СОБЛАЗН</a> (2001, США, Франция)</p>
                                    <p>Режиссер: Майкл Кристофер. В ролях: Анджелина Джоли и Антонио Бандерас. </p>
                                    <p>Богатый кубинский торговец Луис Антонио Варгас собирается жениться на американке, но в его судьбу вторглась роковая женщина. Фильм о том, что когда увлечение оборачивается страстью, а женщина становится наваждением, любовь может сыграть злые шутки. </p>
                                    <p>#часстрасти #ЯркаяСтрасть</p>
                                </div>
                                <div class="slide slide-6 movie" data-taste="0" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/61324/">БЛИЗОСТЬ</a> (2004, США, Великобритания)</p>
                                    <p>Режиссер: Майк Николс. В ролях: Натали Портман, Джулия Робертс, Джуд Лоу, Клив Оуэн.</p>
                                    <p>Четыре угла  в отношениях и пучина страсти. Если вы верите в любовь с первого взгляда, вы никогда не перестанете её искать.</p>
                                    <p>#часстрасти #ЯркаяСтрасть</p>
                                </div>
                                <div class="slide slide-6 movie" data-taste="0" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/402567/">РАЗОМКНУТЫЕ ОБЪЯТИЯ</a> (2009, Испания)</p>
                                    <p>Режиссер:  Педро Альмодовар. В ролях: Пенелопа Крус, Льюис Омар, Бланка Портильо, Хосе Луис Гомес</p>
                                    <p>Интересная, эмоциональная, яркая, испанская драма со всеми ее прелестями. История о бизнесмене, потерявшем в страшной аварии зрение и любимую женщину. А привел к этой аварии страстный любовный квадрат...</p>
                                    <p>#часстрасти #ЯркаяСтрасть</p>
                                </div>
                            </div>
                            <div class="advice-fotorama" data-taste="1">
                                <div class="slide slide-1" data-taste="1" data-filter="1">
                                    Начните страстный вечер со своей половинкой с легкого лакомства, желательно афродизиака - отлично подойдет Extreme Фисташка-миндаль. Пусть любимый ест, а вы шепните на ушко какую-нибудь непристойность. #часстрасти #ДразнящаяСтрасть
                                </div>
                                <div class="slide slide-2" data-taste="1" data-filter="1">
                                    Собираясь на свидание, наденьте плащ на обнаженное тело, попросите возлюбленного отвезти вас туда, где никого нет, займитесь любовью в машине. После, чтобы остыть немного и прийти в себя, съешьте Extreme Фисташка-миндаль. #часстрасти #ДразнящаяСтрасть
                                </div>
                                <div class="slide slide-3" data-taste="1" data-filter="1">
                                    Помните, как в «9 ½ недель» Микки Рурк дразнил Ким Бейсингер кусочками льда? Сделайте тоже самое, только лед замените мороженным Extreme Фисташка-миндаль. Фисташковый вкус еще больше раззадорит желание. #часстрасти #ДразнящаяСтрасть
                                </div>
                                <div class="slide slide-4" data-taste="1" data-filter="1">
                                    Посмотрите вместе фильм, например, «Основной инстинкт». Такие фильмы всегда пробуждают фантазию. Если не будет хватать поп-корна, можете заменить его Extreme Фисташка-миндаль. Фисташка, как известно, отличный афродизиак!  #часстрасти #ДразнящаяСтрасть
                                </div>
                                <div class="slide slide-5 movie" data-taste="1" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/652520/">28 СПАЛЕН</a> (2012, США)</p>
                                    <p>Режиссер: Мэтт Росс. В ролях: Марин Айрлэнд, Крис Мессина.</p>
                                    <p>28 моментов искренности, кусочек реальной жизни двух людей, застрявших в границах гостиничных номеров, история без конца. Но это стоит просмотра! </p>
                                    <p>#часстрасти #ДразнящаяСтрасть</p>
                                </div>
                                <div class="slide slide-6 movie" data-taste="1" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/2947/">УЩЕРБ</a> (1992, Великобритания, Франция)</p>
                                    <p>Режиссер: Луи Маль. В ролях: Жюльет Бинош, Джереми Айронс.</p>
                                    <p>Что делать, если ты влюблен в невесту своего сына?</p>
                                    <p>#часстрасти #ДразнящаяСтрасть</p>
                                </div>
                                <div class="slide slide-7 movie" data-taste="1" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/869/">НЕВЕРНАЯ</a> (2002, США, Германия, Франция)</p>
                                    <p>Режиссер: Эдриан Лайн. В ролях: Ричард Гир, Диана Лейн, Оливье Мартинес.</p>
                                    <p>В центре событий трое, разбитая «американская мечта», драма обстоятельств и неудержимое влечение.</p>
                                    <p>#часстрасти #ДразнящаяСтрасть</p>
                                </div>
                            </div>
                            <div class="advice-fotorama" data-taste="4">
                                <div class="slide slide-1" data-taste="4" data-filter="1">
                                    Как самый романтичный экскурсовод, проведите свою половинку по значимым местам для влюбленных. Загляните в <a target="_blank" href="http://www.mosgorsad.ru/">Сад «Эрмитаж»</a>, поцелуйтесь внутри Памятника Всем Влюбленным и будете вместе вечно. Не забудьте подсластить поцелуй с помощью Extreme Два шоколада. #часстрасти #ВечнаяСтрасть
                                </div>
                                <div class="slide slide-2" data-taste="4" data-filter="1">
                                    Пригласите возлюбленного на речную прогулку по Москве-реке. Приятный ветерок и брызги волн обязательно настроят вас на романтику. Закажите бутылочку шампанского, а к нему Extreme Два шоколада. #часстрасти #ВечнаяСтрасть
                                </div>
                                <div class="slide slide-3" data-taste="4" data-filter="1">
                                    В солнечный день отправляйтесь с любимым на пикник. Пожарьте шашлыки или перекусите бутербродами, а на десерт запаситесь мороженным, например, Extreme Два шоколада. Что может быть лучше свежего воздуха и вкусной еды? Конечно же, страстные поцелуи. #часстрасти #ВечнаяСтрасть
                                </div>
                                <div class="slide slide-4" data-taste="4" data-filter="1">
                                    Сходите в кино. Выбирайте необычный кинотеатр, где вы сможете посмотреть ретро-фильмы или авторские работы. Подойдет <a target="_blank" href="http://www.gosfilmofond.ru/about/illuzion">Иллюзион</a>, главное выбрать фильм по вкусу и взять с собой Extreme Два шоколада. #часстрасти #ВечнаяСтрасть
                                </div>
                                <div class="slide slide-5" data-taste="4" data-filter="1">
                                    Час прогулки <a target="_blank" href="https://ru.foursquare.com/v/%D0%BA%D0%BE%D0%BD%D1%8E%D1%88%D0%BD%D1%8F-%D0%B2-%D0%BD%D0%B5%D1%81%D0%BA%D1%83%D1%87%D0%BD%D0%BE%D0%BC-%D1%81%D0%B0%D0%B4%D1%83/4ead68339adf5c72de49d4fe">на лошадях</a> и настоящий мачо на коне сможет заключить героиню своего романа в объятия! Страстный поцелуй будет ещё слаще с Extreme Два шоколада. #часстрасти #ВечнаяСтрасть
                                </div>
                                <div class="slide slide-6 movie" data-taste="4" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/81733/">ГОРДОСТЬ И ПРЕДУБЕЖДЕНИЕ</a> (2005, США, Великобритания, Франция)</p>
                                    <p>Режиссер: Джо Райт. В ролях: Кира Найтли, Мэттью Макфейден</p>
                                    <p>Англия, конец XVIII века. Родители пятерых сестер Беннет озабочены тем, чтобы удачно выдать дочерей замуж. И потому размеренная жизнь солидного семейства переворачивается вверх дном, когда по соседству появляется молодой джентльмен — мистер Бингли...</p>
                                    <p>#часстрасти #ВечнаяСтрасть</p>
                                </div>
                                <div class="slide slide-7 movie" data-taste="4" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/1996/">ГРЯЗНЫЕ ТАНЦЫ</a> (1987, США)</p>
                                    <p>Режиссер: Эмиль Ардолино. В ролях: Патрик Суэйзи, Дженнифер Грей</p>
                                    <p>Невинная 17-летняя  Фрэнсис и профессиональный танцор Джонни увлеклись стилем  ритм-энд-блюз, а потом и друг другом. Но не все так просто! </p>
                                    <p>#часстрасти #ВечнаяСтрасть</p>
                                </div>
                                <div class="slide slide-8 movie" data-taste="4" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/456/">УНЕСЕННЫЕ ВЕТРОМ</a> (1939, США)</p>
                                    <p>Режиссер: Виктор Флеминг. В ролях: Вивьен Ли, Кларк Гейбл</p>
                                    <p>Классическая история, и  чуть ли не лучшая пара в кинематографе – аватюрист Ретт Батлер и дерзкая Скарлетт О’Хара. Главный принцип их страстных отношений: «Если нет риска проиграть, нет и надежды на выигрыш». Рискните и вы, если еще не смотрели.</p>
                                    <p>#часстрасти #ВечнаяСтрасть</p>
                                </div>
                            </div>
                            <div class="advice-fotorama" data-taste="5">
                                <div class="slide slide-1" data-taste="5" data-filter="1">
                                    Пригласите любимого на балет в <a target="_blank" href="https://ru.foursquare.com/explore?mode=url&near=%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0&q=%D0%B1%D0%B0%D0%BB%D0%B5%D1%82">Театр</a>. Постановка должна быть непременно про любовь. Высокое искусство и Пломбирно-ягодный Extreme, который вы можете съесть в антракте, вдохновят вас на страстные подвиги ночью. #часстрасти #ИзысканнаяСтрасть
                                </div>
                                <div class="slide slide-2" data-taste="5" data-filter="1">
                                    Арендуйте кабриолет и отправляйтесь кататься по ночной Москве. Не забудьте кинуть в бардачок Пломбирно-ягодный Extreme, на случай, если проголодаетесь. #часстрасти #ИзысканнаяСтрасть
                                </div>
                                <div class="slide slide-3" data-taste="5" data-filter="1">
                                    Что может быть романтичнее встречи рассвета с любимым после ночного свидания? Выберите смотровую площадку и не забудьте Пломбирно-ягодный Extreme для самого сладкого поцелуя. #часстрасти #ИзысканнаяСтрасть
                                </div>
                                <div class="slide slide-4" data-taste="5" data-filter="1">
                                    Каждая девушка мечтает найти капитана своего сердца. Устройте свидание на <a target="_blank" href=" https://ru.foursquare.com/explore?mode=url&near=%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0&q=%D1%8F%D1%85%D1%82%20%D0%BA%D0%BB%D1%83%D0%B1
">яхте</a> с шампанским и Пломбирно-ягодным Extreme. Секс на яхте? О, да, это про вас! #часстрасти #ИзысканнаяСтрасть
                                </div>
                                <div class="slide slide-5" data-taste="5" data-filter="1">
                                    Подыщите для Вас изысканный номер в <a target="_blank" href=" https://ru.foursquare.com/explore?mode=url&ne=55.797614%2C37.761211&q=%D0%B3%D0%BE%D1%81%D1%82%D0%B8%D0%BD%D0%B8%D1%86%D0%B0&sw=55.68223%2C37.556591
">гостинице</a>. Приготовьте обстановку заранее и не раскрывайте сюрприз своей второй половинке. Не забудьте сказать, чтобы на ужин в номер подали Пломбирно-ягодный Extreme. #часстрасти #ИзысканнаяСтрасть
                                </div>
                                <div class="slide slide-6 movie" data-taste="5" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/19334/">МУЖЧИНА И ЖЕНЩИНА</a> (1966, Франция)</p>
                                    <p>Режиссер: Клод Лелуш. В ролях: Жан-Луи Трентиньян, Анук Эме. </p>
                                    <p>Чувственный фильм об одиночестве,  любви и страсти - одна из самых знаменитых работ Лелуша. В копилке наград - Оскар, Золотой Глобус и Золотая пальмовая ветвь.</p>
                                    <p>#часстрасти #ИзысканнаяСтрасть</p>
                                </div>
                                <div class="slide slide-7 movie" data-taste="5" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/447651/">ФОНОГРАММА СТРАСТИ</a> (2009,Россия)</p>
                                    <p>Режиссер: Николай Лебедев В ролях: Елена Николаева, Фабио Фулько, Сергей Гармаш, Нина Усатова</p>
                                    <p>Неожиданно хороший отечественный фильм. Пронзительная история любви в атмосфере смертельной опасности. Девушка, работающая в службе прослушивания, влюбляется в порученного ей «клиента». Любовь может быть тайной. Страсть никогда.</p>
                                    <p>#часстрасти #ИзысканнаяСтрасть</p>
                                </div>
                                <div class="slide slide-8 movie" data-taste="5" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/12276/">9 1/2 НЕДЕЛЬ</a>  (1985, США)</p>
                                    <p>Режиссер: Эдриан Лайн. В ролях: Микки Рурк, Ким Бейсингер</p>
                                    <p>Их свидания — это утоление голода, это мед, стекающий по ее груди, это клубника, которую он губами вынимает у нее изо рта. Каково это — потерять контроль?</p>
                                    <p>#часстрасти #ИзысканнаяСтрасть</p>
                                </div>
                            </div>
                            <div class="advice-fotorama" data-taste="3">
                                <div class="slide slide-1" data-taste="3" data-filter="1">
                                    Купите в супермаркете экзотические фрукты, захватите Extreme Шоколадный ямбери.  Дома, в романтической обстановке, покормите друг друга, разложив кусочки лакомств на самые пикантные места. #часстрасти #ЭкзотикаСтрасти
                                </div>
                                <div class="slide slide-2" data-taste="3" data-filter="1">
                                    Проведите романтическое свидание в <a target="_blank" href="http://www.v-temnote.ru/">«В темноте?!»</a>. Ничего не видно? Зато обостряются другие чувства. Сосредоточьтесь на голосе, запахах и прикосновениях. На десерт отведайте Extreme Шоколадный ямбери, может это свидание вдохновит вас на эксперименты с завязанными глазами? #часстрасти #ЭкзотикаСтрасти
                                </div>
                                <div class="slide slide-3" data-taste="3" data-filter="1">
                                    Пригласите любимого на чайную церемонию. Вы сможете расслабиться, поговорить о любви, почувствовать близость душ, а потом, возможно, и близость тел. Extreme Шоколадный ямбери поможет подкрепиться перед страстной ночью. #часстрасти #ЭкзотикаСтрасти
                                </div>
                                <div class="slide slide-4" data-taste="3" data-filter="1">
                                    Устройте со своей половинкой вечер <a target="_blank" href="https://ru.foursquare.com/user/26909830/list/%D0%BC%D0%B0%D1%81%D1%81%D0%B0%D0%B6-%D0%B2-%D0%BC%D0%BE%D1%81%D0%BA%D0%B2%D0%B5">массажа</a> для двоих, такую услугу не трудно найти. Насладившись массажем вместе, продолжите приятный вечер дома. Не забудьте Extreme ямбери, чтобы подогреть вашу страсть! #часстрасти #ЭкзотикаСтрасти
                                </div>
                                <div class="slide slide-5 movie" data-taste="3" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/6155/">ГОРЬКАЯ ЛУНА</a> (1992, Франция, Великобритания, США)</p>
                                    <p>Режиссер: Роман Полански. В ролях: Хью Грант, Питер Койот, Эммануэль Сенье. </p>
                                    <p>Случайная встреча в парижском автобусе на всю оставшуюся жизнь определила судьбу Оскара и Мими. Они не хотели романтики, а хотели исследовать свою страсть.</p>
                                    <p>#часстрасти #ЭкзотикаСтрасти</p>
                                </div>
                                <div class="slide slide-6 movie" data-taste="3" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/7147/">ПОСЛЕДНЕЕ ТАНГО В ПАРИЖЕ</a> (1972,  Франция, Италия)</p>
                                    <p>Режиссер: Бернардо Бертолуччи. В роялх: Марлон Брандо, Мария Шнайдер. </p>
                                    <p>Классика кинематографа. За десятилетия история  американского вдовца и молодой парижанки не потеряла актуальности.</p>
                                    <p>#часстрасти #ЭкзотикаСтрасти</p>
                                </div>
                                <div class="slide slide-7 movie" data-taste="3" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/408960/">БЕШЕНАЯ КРОВЬ</a> (2008, Италия, Франция)</p>
                                    <p>Режиссер:  Марко Туллио Джордана. В ролях: Моника Беллуччи, Алессио Бони.</p>
                                    <p>Фильм, основанный на реальных событиях, повествует о жизни и смерти двух великих итальянских актеров, Освальдо Валенти и Луизы Фериды.  Яркая история на фоне Второй мировой войны.</p>
                                    <p>#часстрасти #ЭкзотикаСтрасти</p>
                                </div>
                            </div>
                            <div class="advice-fotorama" data-taste="2">
                                <div class="slide slide-1" data-taste="2" data-filter="1">
                                    Загорелые тела, это ведь так сексуально. Отправляйтесь со второй половинкой в солярий, не забудьте о защитных средствах. После загара съешьте Extreme Тропик, чтобы усилить ощущение знойного лета. #часстрасти #УтренняяСтрасть
                                </div>
                                <div class="slide slide-2" data-taste="2" data-filter="1">
                                    Отправляйтесь вдвоем в <a target="_blank" href="https://ru.foursquare.com/explore?mode=url&near=%D0%BC%D0%BE%D1%81%D0%BA%D0%B2%D0%B0&q=%D0%90%D0%BA%D0%B2%D0%B0%D0%BF%D0%B0%D1%80%D0%BA
">аквапарк</a>. Водные горки, искусственные волны, джакузи – море эмоций с капелькой риска. Для полноты ощущений не забудьте Extreme Тропик. #часстрасти #УтренняяСтрасть
                                </div>
                                <div class="slide slide-3" data-taste="2" data-filter="1">
                                    Парк аттракционов – это и милая карусель, и опасные американские горки, и множество других развлечений. Посоревнуйтесь в стрельбе по мишеням или позвольте мужчине выиграть для вас мягкую игрушку. Завершите вечер поеданием Extreme Тропик и страстными поцелуями. #часстрасти #УтренняяСтрасть
                                </div>
                                <div class="slide slide-4" data-taste="2" data-filter="1">
                                    В жаркую погоду, вы можете спрятаться с возлюбленным в Ботаническом саду <a target="_blank" href="http://hortus.ru/">«Аптекарский огород»</a>. Наслаждайтесь свежим воздухом, экзотическими растениями, мороженым Extreme Тропик и друг другом. #часстрасти #УтренняяСтрасть
                                </div>
                                <div class="slide slide-5" data-taste="2" data-filter="1">
                                    Угостите друг друга самым летним вкусом мороженного Extreme Тропик, нежась на утреннем солнце у бассейна <a target="_blank" href="https://ru.foursquare.com/v/the-%D0%B1%D0%B0ss%D0%B5%D0%B9%D0%BD-%D0%BC%D0%BE%D1%81%D0%BA%D0%B2%D0%B0/5013cb85e4b0be172b877b84">в Сокольниках</a> или <a target="_blank" href="https://ru.foursquare.com/v/%D1%84%D0%B8%D0%BB%D1%91%D0%B2%D1%81%D0%BA%D0%B8%D0%B9-%D0%BF%D0%B0%D1%80%D0%BA/4bd2739da8b3a5935010685f">Парке Фили</a>. После страстного поцелуя смело ныряйте в прохладную воду! #часстрасти #УтренняяСтрасть
                                </div>
                                <div class="slide slide-6 movie" data-taste="2" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/23737/">ОДЕРЖИМОСТЬ</a> (2004, США)</p>
                                    <p>Режиссер: Пол МакГиган В ролях: Джош Хартнетт, Роуз Бирн, Мэттью Лиллард, Дайан Крюгер</p>
                                    <p>Виртуозная интрига завязана на отъезде одной из главных героинь в другую страну, а в через несколько лет в поезде герой сумеет развязать этот узел!  Потрясающая история и шикарный саундтрек!</p>
                                    <p>#часстрасти #УтренняяСтрасть</p>
                                </div>
                                <div class="slide slide-7 movie" data-taste="2" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/3663/">ПИАНИНО</a> (1992, Австралия, Новая Зеландия, Франция)</p>
                                    <p>Режиссер: Джейн Кэмпион. В ролях: Холли Хантер, Харви Кейтель, Сэм Нил</p>
                                    <p>Середина 19-го века. Немая Ада вместе с маленькой дочерью и любимым пианино покидает родную Шотландию и переезжает на другой конец света, в Новую Зеландию, где ее ждет будущий муж Стюарт. Но у мужа есть дикий сосед…</p>
                                    <p>#часстрасти #УтренняяСтрасть</p>
                                </div>
                                <div class="slide slide-8 movie" data-taste="2" data-filter="3">
                                    <p><a target="_blank" href="www.kinopoisk.ru/film/12819/">АФЕРА ТОМАСА КРАУНА</a> (1999, США)</p>
                                    <p>Режиссер: Джон МакТирнан. В ролях: Пирс Броснан, Рене Руссо</p>
                                    <p>Миллиардер Томас Краун похищает из крупного музея картину Моне стоимостью в 100 млн долларов. Кэтрин Бэннинг — следователь страховой компании, должна поймать его…Кто кого поймает, узнаете после просмотра фильма!</p>
                                    <p>#часстрасти #УтренняяСтрасть</p>
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
                    <div class="mini-slider" id="photoMiniSlider" data-auto="false">
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
                <div class="popup-body" id="photoPopupCont">
                    <header class="popup-header">
                        <h2>#Часстрасти</h2>
                        <div class="popup-headdesc">
                            Добавляйте свои страстные моменты 
                            в инстаграмм с хэштегом #ЧасСтрасти
                            <span class="slider-tag" data-taste="0">#ЯркаяСтрасть</span><!-- Клубника -->
                            <span class="slider-tag hidden" data-taste="1">#ДразнящаяСтрасть</span><!-- Фисташка -->
                            <span class="slider-tag hidden" data-taste="2">#УтренняяСтрасть</span><!-- Тропик -->
                            <span class="slider-tag hidden" data-taste="3">#ЭкзотикаСтрасти</span><!-- Ямбери -->
                            <span class="slider-tag hidden" data-taste="4">#ВечнаяСтрасть</span><!-- Два шоколада -->
                            <span class="slider-tag hidden" data-taste="5">#ИзысканнаяСтрасть</span><!-- Ягодный -->
                        </div>
                    </header>
                    <div class="popup-content">
                        <div class="instaphoto-slider jcarousel">
                            <ul id="instaSlider">
                                <li class="insta-slide slide-1" style="background:url(http://scontent-b.cdninstagram.com/hphotos-xfp1/t51.2885-15/10448874_655000991250123_1147404698_n.jpg) no-repeat center center / cover;" data-taste="1">
                                    <div class="slide-desc">
                                        <div class="slide-user">Maxim Goroshkov</div>
                                        <div class="slide-description"></div>
                                        <div class="slide-tags">#ЧасСтрасти</div>
                                    </div>
                                </li>
                                <li class="insta-slide slide-1" style="background:url(http://scontent-b.cdninstagram.com/hphotos-xfp1/t51.2885-15/10448874_655000991250123_1147404698_n.jpg) no-repeat center center / cover;" data-taste="1">
                                    <div class="slide-desc">
                                        <div class="slide-user">Maxim Goroshkov</div>
                                        <div class="slide-description"></div>
                                        <div class="slide-tags">#ЧасСтрасти</div>
                                    </div>
                                </li>
                                <li class="insta-slide slide-1" style="background:url(http://scontent-b.cdninstagram.com/hphotos-xfp1/t51.2885-15/10448874_655000991250123_1147404698_n.jpg) no-repeat center center / cover;" data-taste="-1">
                                    <div class="slide-desc">
                                        <div class="slide-user">Maxim Goroshkov</div>
                                        <div class="slide-description"></div>
                                        <div class="slide-tags">#ЧасСтрасти</div>
                                    </div>
                                </li>
                            <?php
                                foreach($hashtags as $hashtag) {
                                    $data = getInstaFeed($hashtag, 10);
                                    
                                    foreach ($data['data'] as $img) {
                                        echo '<li class="insta-slide slide-1" data-taste="0" style="background:' .
                                                'url('.$img['images']['standard_resolution']['url'].') no-repeat center center / cover;">' .
                                                '<div class="slide-desc">' .
                                                    '<div class="slide-user">'.$img['user']['full_name'].'</div>' .
                                                    '<div class="slide-description"></div>' .
                                                    '<div class="slide-tags">#'.$hashtag.'</div>' .
                                                '</div>' .
                                            '</li>';
                                    }                                        
                                }
                            ?>
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
                <a href="#" class="jcarousel-vert-control first-vert jcarousel-vert-control-prev">
                    <span class="icon icon-up-dir"></span>
                </a>
                <a href="#" class="jcarousel-vert-control first-vert jcarousel-vert-control-next">
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
                            <div class="popup-fotorama" id="Twitter">
                            <?php
                            foreach($hashtags as $hashtag) {
                                $tweets = getTweets($hashtag);
                                for ($i=0; $i < count($tweets->statuses); $i++) {
                                    echo '<div class="slide slide-'.$i.'" data-taste="0">'.$tweets->statuses[$i]->text.'</div>';
                                }
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
    <script type="text/javascript">
        var rootElems;

        $(function(){
            fotoramaInit();
            rootElems = navInit();
            console.log(rootElems);
        });

        function navInit() {
            var rootElems = $('#instaSlider .insta-slide').clone();
            var elems = rootElems.filter('[data-taste="0"]').clone().empty();
            var parent = $('#instaNavSlider');
            parent.append(elems);
            jCarouselInit();

            return rootElems;
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
        function jcarouselLoad(taste) {
            var elems = rootElems.filter('[data-taste="' + taste + '"], [data-taste="-1"]');

            $('#instaSlider, #instaNavSlider').empty();

            $('#instaSlider').append(elems.clone());
            $('#instaNavSlider').append(elems.clone().empty());

            $('.jcarousel, .jcarousel-vert').jcarousel('destroy');

            jCarouselInit();
        }
        function jCarouselInit() {
            var connector = function(itemNavigation, carouselStage) {
                return carouselStage.jcarousel('items').eq(itemNavigation.index());
            };
            var mainCarousel = $('.jcarousel').jcarousel({

            }).jcarousel('scroll', '0');
            var navCarousel = $('.jcarousel-vert').jcarousel({
                vertical: true
            }).jcarousel('scroll', '0');
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

        $fotoramaCont = $('.advice-fotorama');
        $fotoramaContElems = {};
        $fotoramaCont.each( function(){
            $fotoramaContElems[''+$(this).data('taste')] = $(this).find('.slide');
        });
        console.log($fotoramaContElems);

        var $twFotorama = $('#Twitter').fotorama({
            nav: false,
            width: '848',
            height: '550',
            arrows: 'always'
        });

        var $popupFotorama = $('.advice-fotorama').fotorama({
            nav: false,
            width: '848',
            height: '550',
            arrows: 'always'
        });
        var $popupFotoramaApi = $popupFotorama.data('fotorama');
        
        $popupFotorama.on(
          'fotorama: show fotorama:showend',
          function (e, fotorama, extra) {
            var index = $('.popup-fotorama .fotorama__active .slide').data('taste');
          }
        );
        
        var $miniFotorama = $('#miniSlider').fotorama({
            nav: false,
            autoplay: false
        });

        var miniLoadCD = 0;

        $miniFotorama.on(
          'fotorama: show fotorama:showend',
          function (e, fotorama, extra) {
            var superIndex = $('.ice-cream-slider .slide.active').data('taste');
            var index = $('#miniSlider .fotorama__active .slide').data('taste');
            $('#miniSlider').attr('data-taste', index);
            $('#popupCont').attr('data-taste', index);
            
            if(!miniLoadCD) {
                fotorama.show(superIndex);
                miniLoadCD = 1;
            }

            setTimeout( function(){
                $('.cat-adv').trigger('click');
                console.log('triggered');
            }, 500);
            
          }
        ); 

        var $photoMiniFotorama = $('#photoMiniSlider').fotorama({
            nav: false,
            autoplay: false
        }); 

        $photoMiniFotorama.on(
            'fotorama: show fotorama:showend',
            function (e, fotorama, extra) {
                var superIndex = $('.ice-cream-slider .slide.active').data('taste');
                var index = $('#photoMiniSlider .fotorama__active .slide').data('taste');
                $('#photoMiniSlider').attr('data-taste', index);
                $('#photoPopupCont').attr('data-taste', index);
                $('.jcarousel-vert-control').attr('data-taste', index);
                $('#photoPopupCont .popup-headdesc span').addClass('hidden');
                $('#photoPopupCont .popup-headdesc span[data-taste="' + index + '"]').removeClass('hidden');
                jcarouselLoad(index);
            }
        );  
    </script>
	<script src="js/libs/jquery-form.min.js"></script>
	<script src="js/libs/upload.js"></script>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-52189500-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
</body>
</html>
