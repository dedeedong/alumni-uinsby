<?php

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Ikatan Alumni dan Keluarga Universitas Islam Negeri Sunan Ampel Surabaya');
$pdf->SetTitle('Curriculum Vitae');
$pdf->SetSubject('Curriculum Vitae');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.'', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 10);

// add a page
$pdf->AddPage();

// set cell padding
$pdf->setCellPaddings(1, 1, 1, 1);

// set cell margins
$pdf->setCellMargins(1, 1, 1, 1);

// set color for background
$pdf->SetFillColor(255, 255, 127);
$from = new DateTime($getdataalumni['TANGGAL_LAHIR']);
$to   = new DateTime('today');
$UMUR = $from->diff($to)->y;

$sex=(string)$getdataalumni['GENDER'];
if ($sex=="L") {
	$gender =  "Laki-laki";
} else {
	$gender = "Perempuan";
}

if (strpos($getdatariwayat['GAJI_AKHIR'], '<') !== false) {
	$gajiakhir = str_replace('<', '&lt;', $getdatariwayat['GAJI_AKHIR']);
}
if (strpos($getdatariwayat['GAJI_HARAP'], '<') !== false) {
	$gajiharap = str_replace('<', '&lt;', $getdatariwayat['GAJI_HARAP']);
}


	// $var=1;
	// foreach($getbahasa->result() as $row)
	// {
	// 	$nomorID = $var;
	// 	$bahasaID = "hai aku";
	// 	$tingkatID = $row->TINGKAT;
	// 	$var++;    
	// }
	// $bahasaID = $getbahasa->result();





$jeneng = $this->session->userdata('nama');
// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)
$title = '<h3>CURRICULUM VITAE</h3>';
$pdf->WriteHTMLCell(0, 0, '', '', $title, 0, 1, 0, true, 'C', true);
$nama = '<h3>'.$jeneng.'</h3>';
$pdf->writeHTML($nama, true, false, true, false, '');
$ringkasan =
	'
	<h4>Ringkasan Resume</h4>
	<br/>
	<table border="0" cellpadding="6">
		<tr>
			<td width="130px">Posisi Terakhir</td>
			<td width="30px">:</td>
			<td>'.$getdatariwayat['POSISI_TERAKHIR'].'</td>
		</tr>
		<tr>
			<td width="130px">Industri Terakhir</td>
			<td width="30px">:</td>
			<td>'.$getdatariwayat['JENIS_PERUSAHAAN'].'</td>
		</tr>
		<tr>
			<td width="130px">Gaji Terakhir</td>
			<td width="30px">:</td>
			<td>'.$gajiakhir.'</td>
		</tr>
		<tr>
			<td width="130px">Gaji yang diharapkan</td>
			<td width="30px">:</td>
			<td>'.$gajiharap.'</td>
		</tr>
	</table>
	';
$pdf->writeHTML($ringkasan, true, false, true, false, '');
$ketpribadi =
	'
	<h4>Keterangan Pribadi</h4>
	<table border="0" cellpadding="6">
		<tr>
			<td width="130px">Jenis Kelamin</td>
			<td width="30px">:</td>
			<td>'.$gender.'</td>
		</tr>
		<tr>
			<td width="130px">Umur</td>
			<td width="30px">:</td>
			<td>'.$UMUR.'</td>
		</tr>
		<tr>
			<td width="130px">Tempat, Tanggal Lahir</td>
			<td width="30px">:</td>
			<td>'.$getdataalumni['TEMPAT_LAHIR'].', '.$getdataalumni['TANGGAL_LAHIR'].'</td>
		</tr>
		<tr>
			<td width="130px">Agama</td>
			<td width="30px">:</td>
			<td>'.$getdataalumni['AGAMA'].'</td>
		</tr>
		<tr>
			<td width="130px">Status</td>
			<td width="30px">:</td>
			<td>'.$getdataalumni['STATUS'].'</td>
		</tr>
		<tr>
			<td width="130px">Alamat Sekarang</td>
			<td width="30px">:</td>
			<td>'.$getdataalumni['ALAMAT'].'</td>
		</tr>
		<tr>
			<td width="130px">Kota</td>
			<td width="30px">:</td>
			<td>'.$getdataalumni['KOTA'].'</td>
		</tr>
		<tr>
			<td width="130px">Telepon Rumah</td>
			<td width="30px">:</td>
			<td>'.$getdataalumni['NO_TLP'].'</td>
		</tr>
		<tr>
			<td width="130px">Handphone</td>
			<td width="30px">:</td>
			<td>'.$getdataalumni['NO_HP'].'</td>
		</tr>
		<tr>
			<td width="130px">E-mail</td>
			<td width="30px">:</td>
			<td>'.$getdataalumni['EMAIL'].'</td>
		</tr>
	</table>
	';
$pdf->writeHTML($ketpribadi, true, false, true, false, '');
	
	$datapribadi =
	'
	<h4>Promosi Diri</h4>
	<table border="0" cellpadding="6">
		<tr width = "100%">
			<td>'.$getdatariwayat['PROMOSI'].'</td>
		</tr>
	</table>
	';
	$pdf->writeHTML($datapribadi, true, false, true, false, '');
	
	$nonformal =
	'
	<h4>Pendidikan Non Formal</h4>
	<table border="0" cellpadding="6">
		<tr width = "100%">
			<td>'.$getdatariwayat['PENDIDIKAN_NONFORMAL'].'</td>
		</tr>
	</table>
	';
	$pdf->writeHTML($nonformal, true, false, true, false, '');

	$title = '<h3>CURRICULUM VITAE</h3>';
	$detail = '<h3>DETAIL KOMPETENSI YANG DIMILIKI</h3>';
	$pdf->WriteHTMLCell(0, 0, '', '', $title, 0, 1, 0, true, 'C', true);
	$pdf->writeHTML($detail, true, false, true, false, '');
	
	$judulbhs = '<h4>Kemampuan Bahasa</h4>';
	$headerbhs='
	<table cellspacing="0" cellpadding="2">
		<tr style="background-color:#27ae60;color:#ffffff;">
			<td width="35" align="center"  border="1"><b>No</b></td>
			<td width="285`" align="center"  border="1"><b>Bahasa</b></td>
			<td width="285`" align="center"  border="1"><b>Kemampuan</b></td>
		</tr>';
	// $pdf->writeHTML($headerbhs, true, false, true, false, '');
	
	if($getbahasa->num_rows() > 0){
		$var=1;
		foreach($getbahasa->result() as $row)
		{
			$no = $var;
			$language = $row->LANGUAGE;
			$tingkat = $row->TINGKAT;
			$bahasa .= '
				<tr>
					<td width="35"  border="1">'.$no.'</td>
					<td width="285`"  border="1">'.$language.'</td>
					<td width="285`"  border="1">'.$tingkat.'</td>
				</tr>';
			// $pdf->writeHTML($bahasa, true, false, true, false, '');
			$var++;
		}
	}
	$footerbhs='</table>';
	
	$pdf->writeHTML($judulbhs, true, false, true, false, '');	
	$pdf->writeHTML($headerbhs.$bahasa.$footerbhs, true, false, true, false, '');

	$judulhard = '<h4>Kemampuan Hardskill</h4>';
	$headhardskill = '
	<table cellspacing="0" cellpadding="2">
		<tr style="background-color:#27ae60;color:#ffffff;">
			<td width="35" align="center"  border="1"><b>No</b></td>
			<td width="285`" align="center"  border="1"><b>Hardskill</b></td>
			<td width="285`" align="center"  border="1"><b>Kemampuan</b></td>
		</tr>';
	if($gethard->num_rows() > 0){
		$var=1;
		foreach($gethard->result() as $row)
		{
			$no = $var;
			$hardskill = $row->HARDSKILL;
			$tingkat = $row->TINGKAT;
			$isihardskill .= '
				<tr>
					<td width="35"  border="1">'.$no.'</td>
					<td width="285`"  border="1">'.$hardskill.'</td>
					<td width="285`"  border="1">'.$tingkat.'</td>
				</tr>';
			// $pdf->writeHTML($bahasa, true, false, true, false, '');
			$var++;
		}
	}
	$footerheadhardskill='</table>';

	$pdf->writeHTML($judulhard, true, false, true, false, '');	
	$pdf->writeHTML($headhardskill.$isihardskill.$footerheadhardskill, true, false, true, false, '');


	$judulsoft = '<h4>Kemampuan Softskill</h4>';
	$headsoftskill = '
	<table cellspacing="0" cellpadding="2">
		<tr style="background-color:#27ae60;color:#ffffff;">
			<td width="35" align="center"  border="1"><b>No</b></td>
			<td width="576`" align="center"  border="1"><b>Softskill</b></td>
		</tr>';
	if($getsoftskill->num_rows() > 0){
		$var=1;
		foreach($getsoftskill->result() as $row)
		{
			$no = $var;
			$softskill = $row->SOFTSKILL;
			$isisoftskill .= '
				<tr>
					<td width="35"  border="1">'.$no.'</td>
					<td width="576`"  border="1">'.$softskill.'</td>
				</tr>';
			// $pdf->writeHTML($bahasa, true, false, true, false, '');
			$var++;
		}
	}
	$footersoftskill='</table>';

	$pdf->writeHTML($judulsoft, true, false, true, false, '');	
	$pdf->writeHTML($headsoftskill.$isisoftskill.$footersoftskill, true, false, true, false, '');

	$judulrwtkj = '<h4>Daftar Riwayat Kerja</h4>';
	$headrwtkj = '
	<table cellspacing="0" cellpadding="2">
		<tr style="background-color:#27ae60;color:#ffffff;">
			<td width="35" align="center"  border="1"><b>No</b></td>
			<td width="109.5`" align="center"  border="1"><b>NIM</b></td>
			<td width="180`" align="center"  border="1"><b>Perusahaan</b></td>
			<td width="109.5`" align="center"  border="1"><b>Posisi</b></td>
			<td width="75`" align="center"  border="1"><b>Th.Masuk</b></td>
			<td width="75`" align="center"  border="1"><b>Th.Keluar</b></td>
			
		</tr>';
	if($getriwayatpkj->num_rows() > 0){
		$var=1;
		foreach($getriwayatpkj->result() as $row)
		{
			$no = $var;
			$nim = $row->NIM;
			$namap = $row->NAMA_PERUSAHAAN;
			$posisi = $row->POSISI;
			$thmsk = $row->THN_MASUK;
			$thkluar = $row->THN_KELUAR;			
			$isirwtkj .= '
				<tr>
					<td width="35"  border="1">'.$no.'</td>
					<td width="109.5`"  border="1">'.$nim.'</td>
					<td width="180`"  border="1">'.$namap.'</td>
					<td width="109.5`"  border="1">'.$posisi.'</td>
					<td width="75`"  border="1">'.$thmsk.'</td>
					<td width="75`"  border="1">'.$thkluar.'</td>
				</tr>';
			// $pdf->writeHTML($bahasa, true, false, true, false, '');
			$var++;
		}
	}
	$footerrwtkj='</table>';

	$pdf->writeHTML($judulrwtkj, true, false, true, false, '');	
	$pdf->writeHTML($headrwtkj.$isirwtkj.$footerrwtkj, true, false, true, false, '');


// set some text for example

// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
ob_clean();
$pdf->Output('cvika.pdf', 'I');
//============================================================+
// END OF FILE
//============================================================+
