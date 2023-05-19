<?php

$html = '
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador PDF</title>

</head>
<body>

    <div class="container-center">

      <div class="container-btn-mpdf">
        <a href="gerarPDF2.php">Download com CSS</a>
        <a href="gerarPDF.php">Download</a>
      </div>

      <h1>Teste Página</h1>
      <h2>Subtitulo Teste</h2>
      <p>
        Lorem ipsum dolor, sit amet consectetur <span class="red">adipisicing elit</span>. Hic debitis minus deserunt accusamus incidunt ipsum voluptatem. Perferendis deserunt ducimus tenetur aliquam, voluptatem sapiente ad ullam, vero nobis reprehenderit assumenda nostrum.<br>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic debitis minus deserunt accusamus incidunt ipsum voluptatem. Perferendis deserunt ducimus tenetur aliquam, voluptatem sapiente ad ullam, vero nobis reprehenderit assumenda nostrum.<br><br>
        <span class="yellow">Lorem ipsum dolor, sit <strong>amet</strong> consectetur adipisicing elit.</span> Hic debitis minus deserunt accusamus incidunt ipsum voluptatem. Perferendis deserunt ducimus tenetur aliquam, voluptatem sapiente ad ullam, vero nobis reprehenderit assumenda nostrum.<br>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic debitis minus deserunt accusamus incidunt ipsum voluptatem. Perferendis deserunt ducimus tenetur aliquam, voluptatem sapiente ad ullam, vero nobis reprehenderit assumenda nostrum.
      </p>

      <img src="https://imran.noinsta.com/teste/image/street-road.jpg" style="width:700px;">


    </div>
<footer>

<style>

  .container-center {
      margin:100px auto;
      width:600px;
  }

  .container-center h1 {
    text-align:center;
    display:block;
  }

  .container-center h2 {
    font-family: cursive;
    color:blue;
    font-weight:bolder;
  }

  .container-center p {
    font-size:20px;
    text-align:justify;
    margin:50px 0px;
  }

  .container-center p span.red {
    color:red;
  }

  .container-center p span.yellow {
    color:#828220;
    text-decoration:underline;
  }

  .container-center img {
    display:block;
    margin:20px auto;
    width:500px;
    float:inherit;
  }

  .container-btn-mpdf {
    margin-bottom:20px;
    display:inline-block;
    float:right;
    width:100%;
  }

  .container-btn-mpdf a {
    background:#ccc;
    margin-left:10px;
    padding:5px 20px;
    color:#000;
    float:right;
    
  }

</style>

</footer>

</body>
</html>
';

// IMPORTANTE: Colocar link com URL completa.


/* Carrega a classe DOMPdf */
require_once("vendor/autoload.php");


// Referenciar namespace.
use Dompdf\Dompdf;

/* Cria a instância */
// $dompdf = new Dompdf();  // Não suporta Imagens
$dompdf = new Dompdf(["enable_remote" => true]); // Suporta imagens.

/* Carrega seu HTML */
$dompdf->loadHtml($html);

// tamanho da folha A4.
// Formato Paisagem = "landscape" 
// Formato Retrato = "portrait"
$dompdf->setPaper('A4','portrait');

/* Renderiza */
$dompdf->render();

/* Gerar PDF */
$dompdf->stream(
    "Relatorio.pdf", /* Nome do arquivo de saída */
);
?>


