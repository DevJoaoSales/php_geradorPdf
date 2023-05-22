<?php

// IMPORTANTE: Colocar link com URL completa.


/* Carrega a classe DOMPdf */
require_once("vendor/autoload.php");


// Referenciar namespace.
use Dompdf\Dompdf;

/* Cria a instância */
//$dompdf = new Dompdf();  // Não suporta Imagens
$dompdf = new Dompdf(["enable_remote" => true]); // Suporta imagens.

// Lendo o arquivo HTML correspondente.
//$html = file_get_contents('index.php');
$html = implode("",file('index.php'));

// Observação: colocar URL completa das imagens
// exemplo: <img src="https://imran.noinsta.com/teste/image/street-road.jpg" >

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


