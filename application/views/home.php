<?php
    $this->load->helper('url');
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!--  Mobile viewport optimized: j.mp/bplateviewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">


    <!-- CSS : implied media="all" -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css?v=2">

    <!-- Uncomment if you are specifically targeting less enabled mobile browsers
    <link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

    <script src="<?php echo base_url(); ?>assets/js/libs/modernizr-1.6.min.js"></script>

    <script type="text/javascript">
        WebFontConfig = {
            google: { families: [ 'Yanone Kaffeesatz:extralight,light,bold' ] }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

</head>

<body lang="en">

<div id="container">
    <header>
        <div id="header" class="clearfix">
            <div id="page_logo">
                <div id="logo_glasses">
                    <img src="<?php echo base_url(); ?>assets/img/logo/logo_glasses.png">
                </div>
                <div id="logo_shirt">
                    <img src="<?php echo base_url(); ?>assets/img/logo/logo_shirt.png">
                </div>

                <a href="/" title="Shirtnerd Home">SHIRTNERD</a>
            </div>
            <ul id="global-navigation">
                <li>
                    <ul id="account-navigation">
                        <li class="truncate">
                            <strong>
                                <a href="/account" title="Edit account details for Josh Sullivan" class="">Josh
                                Sullivan
                                </a>
                            </strong>
                        </li>
                        <li>
                            <a href="/logout" title="Log out Josh Sullivan" class="button deemphasized deemphasized-5">log out
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>

    <div id="content" role="content">
    </div>

    <footer>

    </footer>
</div>
<!--! end of #container -->


<!-- JavaScript at the bottom for fast page loading -->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="<?php echo base_url(); ?>assets/js/libs/jquery.1.5.min.js"%3E%3C/script%3E'))</script>


<!-- scripts concatenated and minified via ant build script-->
<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>
<script src="<?php echo base_url(); ?>assets/js/script.js"></script>
<!-- end concatenated and minified scripts-->

<script src="<?php echo base_url(); ?>assets/js/jquery/jquery.lettering-0.6.1.min.js"></

<!--[if lt IE 7 ]>
<script src="<?php echo base_url(); ?>assets/js/libs/dd_belatedpng.js"></script>
<script>DD_belatedPNG.fix('img, .png_bg'); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
<![endif]-->


<!-- mathiasbynens.be/notes/async-analytics-snippet Change UA-XXXXX-X to be your site's ID -->
<script>
    var _gaq = [
        ['_setAccount','UA-XXXXX-X'],
        ['_trackPageview']
    ];
    (function(d, t) {
        var g = d.createElement(t),s = d.getElementsByTagName(t)[0];
        g.async = 1;
        g.src = ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s)
    }(document, 'script'));
</script>

</body>
</html>