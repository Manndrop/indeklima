<!DOCTYPE html>
<?php

    include("getData.php");
    include("dbh.php");
    session_start();

    echo $sql3;
?>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src=""></script>
    
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    
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
    
    <h1>Målinger</h1>
    <div id="grafen" style="width:70%;height:550px;"></div>


<script>

    
    
    
    /*
    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange == function() {
            if (this.readyState == 4 && this.status == 200) {
                var myObj = JSON.parse(this.responseText);
                visGraf(myObj);
            }
        };
        xhttp.open("POST", "getData.php?s=lysindfald&sys=Luxbanden", true);
        xhttp.open("POST", "getData.php?s=lufttemperatur&sys=IdaErin", true);
        xhttp.open("POST", "getData.php?s=luftkvalitet&sys=CO2", true);
        xhttp.send();
    }
    
    
    function visGraf();
    
     */
                      
    
    var luxData = {
            x: [<?php 
        while ($l = mysqli_fetch_array($resultat_lux)) { //js suppleres med php, der skriver js labels-array
            echo '"' . $l['nobstime'] . '",';
            } 
         ?>],
            y: [<?php 
            mysqli_data_seek($resultat_lux, 0); //vi spoler lige tilbage i arrayet, så vi kan løbe det igennem igen..
            while ($v = mysqli_fetch_array($resultat_lux)) {
                echo '"' . number_format($v['nvalue'],1) . '",'; //numberformat reducerer antallet af decimaler. 
            } 
       ?>],
            type: 'scatter',
            fill: 'none', //'tonexty',
            name: 'Lux'
        };



        var tempData = {
            x: [<?php 
        while ($l = mysqli_fetch_array($resultat_temp)) { //js suppleres med php, der skriver js labels-array
            echo '"' . $l['nobstime'] . '",';
        } 
         ?>],
            y: [<?php 
            mysqli_data_seek($resultat_temp, 0); //vi spoler lige tilbage i arrayet, så vi kan løbe det igennem igen..
            while ($v = mysqli_fetch_array($resultat_temp)) {
                echo '"' . number_format($v['nvalue'],2) . '",';
            } 
       ?>],
            type: 'scatter',
            fill: 'tozeroy', //'tozeroy',
            yaxis: 'y2',
            name: 'Temperatur'
        };

        var co2Data = {
            x: [<?php 
        while ($l = mysqli_fetch_array($resultat_co2)) { //js suppleres med php, der skriver js labels-array
            echo '"' . $l['nobstime'] . '",';
        } 
         ?>],
            y: [<?php 
            mysqli_data_seek($resultat_co2, 0); //vi spoler lige tilbage i arrayet, så vi kan løbe det igennem igen..
            while ($v = mysqli_fetch_array($resultat_co2)) {
                echo '"' . number_format($v['nvalue'],2) . '",';
            } 
       ?>],
            type: 'scatter',
            fill: 'none', //'tozeroy',
            yaxis: 'y3',
            name: 'Co2 niveau'
        };

        var data = [luxData, tempData, co2Data];

        var layout = {
            title: 'Indeklimaet og Indlaering - Plotly.js',
            yaxis: {
                title: 'Lux'
            },
            yaxis2: {
                title: 'Temperatur',
                titlefont: {
                    color: 'rgb(148, 103, 189)'
                },
                tickfont: {
                    color: 'rgb(148, 103, 189)'
                },
                overlaying: 'y',
                side: 'right'
            },
            yaxis3: {
                title: 'Temperatur',
                titlefont: {
                    color: 'rgb(1, 103, 189)'
                },
                tickfont: {
                    color: 'rgb(1, 103, 189)'
                },
                overlaying: 'y',
                side: 'right'
            }
        };

        //plotly.newPlot('grafen', data);

        Plotly.newPlot('grafen', data, layout, {
            showSendToCloud: true
        });
    
</script>
</body>

</html>


