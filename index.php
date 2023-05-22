<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador PDF</title>
    <link rel="stylesheet" href="https://imran.noinsta.com/teste/estilo.css">

</head>
<body>

    <div class="container-center">

      <div class="container-btn-mpdf">
        <a href="gerarPDF.php">Download</a>
        <a href="gerarPDF2.php">Download com CSS</a>
        <a href="gerarPDF3.php">Download com URL</a>
      </div>

      <h1>Teste Página</h1>
      <h2>Subtitulo Teste</h2>
      <p>
        Lorem ipsum dolor, sit amet consectetur <span class="red">adipisicing elit</span>. Hic debitis minus deserunt accusamus incidunt ipsum voluptatem. Perferendis deserunt ducimus tenetur aliquam, voluptatem sapiente ad ullam, vero nobis reprehenderit assumenda nostrum.<br>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic debitis minus deserunt accusamus incidunt ipsum voluptatem. Perferendis deserunt ducimus tenetur aliquam, voluptatem sapiente ad ullam, vero nobis reprehenderit assumenda nostrum.<br><br>
        <span class="yellow">Lorem ipsum dolor, sit <strong>amet</strong> consectetur adipisicing elit.</span> Hic debitis minus deserunt accusamus incidunt ipsum voluptatem. Perferendis deserunt ducimus tenetur aliquam, voluptatem sapiente ad ullam, vero nobis reprehenderit assumenda nostrum.<br>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic debitis minus deserunt accusamus incidunt ipsum voluptatem. Perferendis deserunt ducimus tenetur aliquam, voluptatem sapiente ad ullam, vero nobis reprehenderit assumenda nostrum.
      </p>


      <!--Div that will hold the pie chart-->
      <div id="chart_div"></div>


      <!--<img src="https://imran.noinsta.com/teste/image/download.png">-->
      <img src="https://imran.noinsta.com/teste/image/street-road.jpg" >

    </div>
<footer>

<style>

</style>

<!-- ################################################# -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {

      var data = google.visualization.arrayToDataTable([
        ['Element', 'Density', { role: 'style' }],
        ['Copper', 8.94, '#b87333', ],
        ['Silver', 10.49, 'silver'],
        ['Gold', 19.30, 'gold'],
        ['Platinum', 21.45, 'color: #e5e4e2' ]
      ]);

      var options = {
        title: "Density of Precious Metals, in g/cm^3",
        bar: {groupWidth: '95%'},
        legend: 'none',
      };

      var chart_div = document.getElementById('chart_div');
      var chart = new google.visualization.ColumnChart(chart_div);

      // Wait for the chart to finish drawing before calling the getImageURI() method.
      google.visualization.events.addListener(chart, 'ready', function () {
        chart_div.innerHTML = '<img src="' + chart.getImageURI() + '">';
        console.log(chart_div.innerHTML);
      });

      chart.draw(data, options);

  }
  </script>


<!-- ################################################# -->

</footer>

</body>
</html>