<?php

$html = '<h1>Teste Página</h1>';
$html .= '<p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic debitis minus deserunt accusamus incidunt ipsum voluptatem. Perferendis deserunt ducimus tenetur aliquam, voluptatem sapiente ad ullam, vero nobis reprehenderit assumenda nostrum.<br>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic debitis minus deserunt accusamus incidunt ipsum voluptatem. Perferendis deserunt ducimus tenetur aliquam, voluptatem sapiente ad ullam, vero nobis reprehenderit assumenda nostrum.<br><br>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic debitis minus deserunt accusamus incidunt ipsum voluptatem. Perferendis deserunt ducimus tenetur aliquam, voluptatem sapiente ad ullam, vero nobis reprehenderit assumenda nostrum.<br>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic debitis minus deserunt accusamus incidunt ipsum voluptatem. Perferendis deserunt ducimus tenetur aliquam, voluptatem sapiente ad ullam, vero nobis reprehenderit assumenda nostrum.
        </p>';

// IMPORTANTE: Colocar link com URL completa.
$html .= ' <img src="https://imran.noinsta.com/teste/image/street-road.jpg" style="width:700px;">';

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


