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
    <body class="manifest-body">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="manifest-wrapper">
            <div class="crops-wrapper">
                <div class="man man-1">
                    <span class="min">Почему мы ждем его/ее</span>
                    <span class="large">вконтакте,</span>
                    <span class="med">а не в своих</span>
                    <span class="big">объятиях?</span>
                </div>
                <div class="man man-2">
                    <span class="big">Почему смотрим</span>
                    <span class="med">на экран чаще, чем в</span>
                    <span class="large">любимые глаза</span>
                </div>
                <div class="man man-3">
                    <span class="min">Пора понять: поцелуи</span>
                    <span class="big">слаще лайков,</span>
                    <span class="med">реальная страсть</span>
                    <span class="large">вкуснее</span>
                </div>
                <div class="man man-4">
                    <span class="min">Пора выйти из сети</span>
                    <span class="med">и уделить время</span>
                    <span class="large">любимым.</span>
                </div>
                <a href="main.php<? echo (strlen($_SERVER['QUERY_STRING']) > 2) ? '?'.$_SERVER['QUERY_STRING'] : ''; ?>" class="enter-btn"> </a>
                <div class="counter">
                    318
                </div>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
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
        <script>
            $('.crops-wrapper').mousemove(function(e){
                var amountMovedX = (e.pageX  * -1 / 200);
                var amountMovedY = (e.pageY * -1 / 200);
                $(this).css('background-position', (50 + amountMovedX) + '% ' + (50 + amountMovedY) + '%');
            });
        </script>
</body>
</html>
