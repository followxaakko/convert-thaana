<html>
    <body>
        <head>
            <style>
                @font-face {
                    font-family: Waheed;
                    src: url(src/font/MVWaheed.otf);
                }
                @font-face {
                    font-family: Faseyha;
                    src: url(src/font/MV_Faseyha.otf);
                }
                body {
                    font-family: Faseyha;
                    font-weight: lighter;
                }
                #example1 {
                    background-color: #db0000;
                    background-position: right bottom, left top;
                    background-repeat: no-repeat, repeat;
                    padding: 15px;
                    border-radius: 15px;
                    width: 620px;
                    height: "auto"px;
                    box-shadow: 0 5px 15px 0 rgba(10, 36, 19, 0.2), 0 2px 15px 0 rgba(0, 0, 0, 0.30);
                    border-style: solid;
                    border-width: 5px;

                }
                body {
                    color: white;
                }

                h1 {
                    color: rgb(255, 255, 255);
                    direction: rtl;
                }
                h2 {
                    color: rgb(255, 255, 255);
                }
                h3 {
                    color: rgb(255, 255, 255);
                    font-size: 1.5em;
                }
            </style>
                <center>
            <div id="example1">
        </head>
    </body>
</html>
<?php
    include "./src/class-thaana-transliterator.php";
        $context = $_GET ['dhivehi'];
        echo "<h1>  ދިވެހި ލިޔުން:</h1><h3>$context</h3>";

        $doconvert = Thaana_Transliterator::transliterate("$context"); // Salaam
        echo "<h1> ތާނަ ޓްރާނސްލޭޓެޑް:</h1><h2>$doconvert</h2>";
?>