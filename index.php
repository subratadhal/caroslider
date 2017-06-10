<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="MobileOptimized" content="width" />
        <meta name="HandheldFriendly" content="true" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <title>caroSlider</title>
        <meta name="author" content="Subrata Dhal">
        <meta name="desription" content="caroSlider is a simple carousel slider created with jquery">
        <meta name="keyword" content="jquery,jquery plugins,javascript plugins,jquery slider,slider">
        <meta name="robots" content="index,follow">
        <link rel="canonical" href="http://subratadhal.com/jquery/caroslider/" />
        <link href="css/page.css" rel="stylesheet" type="text/css" />
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'/>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script>
            $(document).ready(function () {
                $('#slider').caroslider();
            });
        </script>
    </head>
    <body> 
        <div id="container">
            <header>
                <h1>caroSlider<span>Ver-1.0</span></h1>
            </header>
            <section>
                <div id="slider-container">
                    <div id="subuprev"></div>
                    <div id="slider-wrapper">
                        <ul id="slider">
                            <li><img src="images/image1.jpg" alt="" /></li>
                            <li><img src="images/image1+.jpg" alt="" /></li>
                            <li><img src="images/image2.jpg" alt="" /></li>
                            <li><img src="images/image2+.jpg" alt="" /></li>
                            <li><img src="images/image3.jpg" alt="" /></li>
                            <li><img src="images/image3+.jpg" alt="" /></li>
                            <li><img src="images/image4.jpg" alt="" /></li>
                            <li><img src="images/image4+.jpg" alt="" /></li>
                            <li><img src="images/image5.jpg" alt="" /></li>
                            <li><img src="images/image5+.jpg" alt="" /></li>
                            <li><img src="images/image6.jpg" alt="" /></li>
                            <li><img src="images/image6+.jpg" alt="" /></li>
                            <li><img src="images/image7.jpg" alt="" /></li>
                            <li><img src="images/image7+.jpg" alt="" /></li>
                            <li><img src="images/image8.jpg" alt="" /></li>
                        </ul>
                    </div>
                    <div id="subunext"></div>
                </div>    
                <div class="divider"></div>
            </section>
        </div>
        <article>
            <header>
                <h2>Features</h2>
            </header>
            <ul class="feature">
                <li>Based on HTML5/CSS3/Jquery</li>
                <li>Less thank 10Kb size.</li>
                <li>Fully Customizable</li>
                <li>Compatible in Firefox, Safari, Opera, IE8</li>
            </ul>
        </article>
        <div class="github-link">
            <img src="images/github.png" alt=""/>
            <p> Find the working url on <a href="https://github.com/subratadhal/caroslider" target="_blank">github.</a></p>
        </div>
        <footer>    
            <div class="footer">
                Designed and Developed by: <a target="_blank" href="http://www.subratadhal.com">subratadhal.com</a>
            </div>
        </footer>
        <script src="js/caroslider.js"></script>
    </body>
</html>
