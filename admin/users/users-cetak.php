<?php
include('../../koneksi.php');
require_once("../../dompdf/autoload.inc.php");

use Dompdf\Dompdf;
$query = mysqli_query($koneksi, "select * from tb_user");
$dompdf = new Dompdf();
$html = '<center><h3>Daftar Username & Password Users (Privacy)</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Email</th>
				<th>Password</th>
			</tr>';
			$no = 1;
			while ($row = mysqli_fetch_array($query)) {
				$html .= "<tr>
				<td>" . $no . "</td>
				<td>" . $row['Username'] . "</td>
				<td>" . $row['Email'] . "</td>
				<td>" . $row['Password'] . "</td>
				</tr>";
				$no++;
			}
$html .= "</html>";

$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'potrait');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan-users.pdf');
