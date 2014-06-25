<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Создать фото страсти</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=1280, initial-scale=1, maximum-scale=1, minimal-ui">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body class="app-body">
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="main-wrapper app-wrapper">
        <header class="main-header">
            <div class="main-header-cont">
                <h1 class="logo">
                    Час страсти
                </h1>
            </div>
        </header>
        <main data-bg="app">
            <div class="app-main">
                <div class="app-container">
                    <div class="app-window">
                        <div class="app-ices">
                            <div class="ice-item ice-item-yamberi">
                                <a href="#" class="ice-cream" data-ice="yamberi"></a>
                                <span class="ice-name"><span>Ямбери</span></spam>
                            </div>
                            <div class="ice-item ice-item-tropic">
                                <a href="#" class="ice-cream" data-ice="tropic"></a>
                                <span class="ice-name"><span>Тропик</span></span>
                            </div>
                            <div class="ice-item ice-item-strawberry">
                                <a href="#" class="ice-cream" data-ice="strawberry"></a>
                                <span class="ice-name"><span>Клубника</span></span>
                            </div>
                            <div class="ice-item ice-item-pistachio">
                                <a href="#" class="ice-cream" data-ice="pistachio"></a>
                                <span class="ice-name"><span>Фисташка</span></span>
                            </div>
                            <div class="ice-item ice-item-whitechocolate">
                                <a href="#" class="ice-cream" data-ice="whitechokolate"></a>
                                <span class="ice-name"><span>Белый шоколад</span></span>
                            </div>
                            <div class="ice-item ice-item-blackcurrant">
                                <a href="#" class="ice-cream" data-ice="blackcurrant"></a>
                                <span class="ice-name"><span>Ягодный</span></span>
                            </div>
                        </div>
                        <div class="app-upload">
                            <a href="#" class="upload-zone">Загрузите сюда фотографию</a>
                            <!-- <a class="select-image upload-btn" href="javascript:void(0);">Выбрать фото</a> -->
                            <span class="logo-ext not-vis">
                                <span class="add"></span>
                                <span class="remove"></span>
                            </span>
                            <span class="logo-hou not-vis">
                                <span class="add"></span>
                                <span class="remove"></span>
                            </span>
                        </div>
                        <div class="app-screen">                            
                            <div class="app-overlay"></div>
                            <div id="HolderPhoto"></div>
                        </div>
                    </div>
                    <div class="app-nav">
                        <a href="#" class="share-btn"><span>Поделиться</span></a>
                        <a href="#" class="new-photo"><span>Новое фото</span></a>
                        <form id="form-photo-save" method="POST" action="upload.php">
                            <input type="file" style="position: absolute; width: 1em;" name="file" class="input-photo invisible" id="selectPhoto">
                            <button value="send" type="submit" class="save-btn"><span>Сохранить</span></button>
                            <input type="hidden" name="logo-extreme" value="no">
                            <input type="hidden" name="logo-hours" value="no">
                            <input type="hidden" name="position" value="0, 0">
                            <input type="hidden" name="filter" value="no">
                            <input type="hidden" name="width">
                            <input type="hidden" name="height">
                        </form>                        
                    </div>
                </div>
            </div>
            <div class="wrapper">
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

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="js/app.js"></script>
    <script src="js/libs/jquery-form.min.js"></script>
	<script src="js/libs/upload.js"></script>
    <script src="js/vendor/jquery-ui-1.10.4.custom.min"></script>
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