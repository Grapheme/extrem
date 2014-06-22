<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
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
        <header class="app-header"></header>
        <div class="app-main">
            <div class="app-container">
                <a href="#" class="app-logo-ext"></a>
                <a href="#" class="app-logo-hou"></a>
                <a href="#" class="app-add-text">Добавить текст</a>
                <div class="app-window">
                    <div class="app-upload">
                        <a href="#" class="upload-zone">
                            <span class="upload-prog" style="width: 20%;"></span>
                            Загрузите сюда фотографию
                        </a>
                        <a href="#" class="upload-btn">Загрузить</a>
                    </div>
                    <div class="app-screen">
                        <img src="img/application/test.jpg">
                    </div>
                </div>
                <div class="app-nav">
                    <a href="#" class="share-btn"><span>Поделиться</span></a>
                    <a href="#" class="save-btn"><span>Сохранить</span></a>
                    <div class="app-ices">
                        <div class="ice-item">
                            <a href="#" class="ice-cream" data-ice="yamberi"></a>
                            <span class="ice-name"><span>Yamberi</span></spam>
                        </div>
                        <div class="ice-item">
                            <a href="#" class="ice-cream" data-ice="tropic"></a>
                            <span class="ice-name"><span>Tropic</span></span>
                        </div>
                        <div class="ice-item">
                            <a href="#" class="ice-cream" data-ice="strawberry"></a>
                            <span class="ice-name"><span>Strawberry</span></span>
                        </div>
                        <br>
                        <div class="ice-item">
                            <a href="#" class="ice-cream" data-ice="pistachio"></a>
                            <span class="ice-name"><span>Pistachio</span></span>
                        </div>
                        <div class="ice-item active">
                            <a href="#" class="ice-cream" data-ice="whitechokolate"></a>
                            <span class="ice-name"><span>White Chokolate</span></span>
                        </div>
                        <div class="ice-item">
                            <a href="#" class="ice-cream" data-ice="blackcurrant"></a>
                            <span class="ice-name"><span>Blackcurrant</span></span>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <footer class="app-footer">
                <a href="#" class="soc-vk"></a>
                <a href="#" class="soc-fb"></a>
                <a href="#" class="soc-ok"></a>
                <span class="app-share">Делись фото в соцсетях</span>
            </footer>
        </div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/vendor/dropzone.js"></script>
        <script>
            Dropzone.options.dropzone = {
                dictDefaultMessage: '<span class="drop-text">Загрузите вашу фотографию</span>'
            }
        </script>
    </body>
</html>
