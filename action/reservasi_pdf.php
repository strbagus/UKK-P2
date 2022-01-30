<?php 
    require_once("../assets/DomPdf/autoload.inc.php");

    include '../config.php';

    $html .= '<!DOCTYPE html>';
    $html .= '<html>';
    $html .= '<head>';
    $html .= '<title>HOTEL HEBAT</title>';
    $html .= '</head>';
    $html .= '<body>';
    
    $sql = mysqli_query($con, "SELECT * FROM tb_reservasi ORDER BY res_id DESC LIMIT 1");
    $d = mysqli_fetch_array($sql);
    $tipe = $d['res_tipe'];
    $sql2 = mysqli_query($con, "SELECT * FROM tb_jkamar WHERE jk_id=$tipe");
    $d2 = mysqli_fetch_array($sql2);

    $html .= '<center><h2>Reservasi Hotel Hebat</h2></center>';
    $html .= '<table border="0" width="100%">';
    $html .= '<tr>';
    $html .= '<td>Nama Pemesan</td>';
    $html .= '<td>:'.$d['res_namapesan'].'</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td>Email</td>';
    $html .= '<td>:'.$d['res_email'].'</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td>No Handphone</td>';
    $html .= '<td>:'.$d['res_nohp'].'</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td>Nama Tamu</td>';
    $html .= '<td>:'.$d['res_namatamu'].'</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td>Tipe Kamar</td>';
    $html .= '<td>:'.$d2['jk_tipe'].'</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td>Jumlah Kamar</td>';
    $html .= '<td>:'.$d['res_jumlah'].'</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td>Tanggal Cek In</td>';
    $html .= '<td>:'.$d['res_cekin'].'</td>';
    $html .= '</tr>';
    $html .= '<tr>';
    $html .= '<td>Tanggal Cek Out</td>';
    $html .= '<td>:'.$d['res_cekout'].'</td>';
    $html .= '</tr>';
    $html .= '</table>';
    $html .= '</body';
    $html .= '</html>';

    use Dompdf\Dompdf;
    use Dompdf\Options;

    $dompdf = new Dompdf();
    $dompdf->set_paper('a4', 'potrait');
    $dompdf->load_html($html);
    $dompdf->render();
    $dompdf->stream('reservasi_hotel_hebat.pdf')
?>