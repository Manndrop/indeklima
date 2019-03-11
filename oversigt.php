<!DOCTYPE html>
<?php
    include("dbh.php");
    //echo $m['value'];
?>
<html lang="da">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="maeler3.css">


</head>

<body>
    <header>
        <nav class="nav-header-main">
            <ul>
                <li><a href="oversigt.php">Oversigt</a></li>
                <li><a href="dataside.php">Data</a></li>
            </ul>
        </nav>
    </header>


    <div id="indhold">
        <p></p>
    </div>
    

    <?xml version="1.0" encoding="utf-8"?>
    <!-- Generator: Adobe Illustrator 22.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1366px" height="768px" viewBox="0 0 1366 768" style="enable-background:new 0 0 1366 768;" xml:space="preserve">
        <style type="text/css">
            .st0 {
                fill: none;
                stroke: #000000;
                stroke-miterlimit: 10;
            }

            .st1 {
                fill: none;
            }

            .st2 {
                fill: #FFFFFF;
                stroke: #231F20;
                stroke-width: 3.0545;
            }

            .st3 {
                fill: #231F20;
            }

            .st4 {
                font-family: 'ArialMT';
            }

            .st5 {
                font-size: 36px;
            }

            .st6 {
                font-size: 35.0721px;
            }

        </style>
        <path class="Meteret" d="M857.5,283.5c0,59.9-25.2,114.8-67.3,157.7c-53.9-49.6-131.5-80.7-217.7-80.7c-91.7,0-173.6,35.2-227.7,90.3
	c-48-44.1-77.3-102.8-77.3-167.3c0-137,132.1-248,295-248S857.5,146.5,857.5,283.5z" />
        <g>
            <g>
                <g>
                    <g>
                        <g>
                            <line class="st1" x1="579.7" y1="460.5" x2="579.7" y2="192.4" />
                            <g>
                                <g>
                                    <g>
                                        <polygon id="Pilen" points="565.8,458.9 531.5,279.6 506.7,279.6 543.2,242.9 579.6,206.3 616,242.9 652.5,279.6 
									628.5,279.6 594.2,458.9 								" />
                                    </g>

                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </g>
        </g>
<text transform="matrix(0.9999 1.728128e-02 -1.728128e-02 0.9999 552.5009 68.6687)" class="st4 st5">21</text>
<text transform="matrix(0.969 -0.247 0.247 0.969 481.3056 81.5582)" class="st4 st6">20</text>
<text transform="matrix(0.8963 -0.4435 0.4435 0.8963 420.8213 107.6023)" class="st4 st6">19</text>
<text transform="matrix(0.8006 -0.5992 0.5992 0.8006 365.2216 148.9345)" class="st4 st6">18</text>
<text transform="matrix(0.9754 0.2203 -0.2203 0.9754 619.347 72.1438)" class="st4 st6">22</text>
<text transform="matrix(0.8866 0.4625 -0.4625 0.8866 679.7991 89.4402)" class="st4 st6">23</text>
<text transform="matrix(0.8262 0.5633 -0.5633 0.8262 730.04 125.8424)" class="st4 st6">24</text>
    </svg>

</body>

</html>

<script>
    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("indhold").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "hentMaaling.php", true);

        xhttp.send();

    } setInterval(loadDoc, 1200);
    
        function loadTemp() {
        var xhttp2 = new XMLHttpRequest();
        xhttp2.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                xmp = parseFloat(this.responseText);

            }
        };
        xhttp2.open("GET", "hentTemp.php", true);

        xhttp2.send();
            
    var calc = xmp - 21;
    var eet = calc * 11;

    //var x = document.getElementsByClassName("Pilen"); 

    eval("document.getElementById('Pilen').style.transform = 'rotate(" + eet + "deg)';");

    } setInterval(loadTemp, 4000);
    
    //var nval = xmp;

</script>
