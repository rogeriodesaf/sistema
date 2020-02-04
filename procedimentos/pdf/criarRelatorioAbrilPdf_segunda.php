<?php

require_once '../../lib/dompdf/autoload.inc.php';
use Dompdf\Dompdf;

$id = $_GET['idprocesso'];

function file_get_contents_curl($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $dados = curl_exec($ch);
    curl_close($ch);

    return $dados;
}

$html = file_get_contents("http://localhost/sistema/view/processos/relatorioProcessosAbrilPdf_segunda.php?idprocesso=" . $id);

// Instanciamos um objeto da classe DOMPDF.
$pdf = new DOMPDF();

// Definimos o tamanho do papel e orientação.
$pdf->set_paper('A4', 'portrait');
//$pdf->set_paper(array(0,0,104,250));

// Carregar o conteúdo html.
//$pdf->load_html(utf8_decode($html));
$pdf->load_html($html);

// Renderizar PDF.
$pdf->render();

// Enviamos pdf para navegador.
$pdf->stream('relatorio_abril_segunda_camara.pdf');