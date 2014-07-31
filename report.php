<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('class/tcpdf/tcpdf.php');
include_once("class/PHPJasperXML.inc.php");
include_once ('setting.php');
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

$xml =  simplexml_load_file("static/jrxml/report.jrxml");

$page = $_POST['page'];
$current_date = date("d/m/y");
$msg_date = date("d") .' de '. getMonthName(date("m")) . ' de ' . date("Y");

$PHPJasperXML = new PHPJasperXML();
$PHPJasperXML->arrayParameter=array(
	"PAGE"=>$page,
	"CURRENT_DATE"=>$current_date,
	"MSG_DATE"=>$msg_date,
	"MSG_DATE_LOWER"=>strtolower($msg_date)
);

$PHPJasperXML->xml_dismantle($xml);
$PHPJasperXML->transferDBtoArray($server,$user,$pass,$db); //* use this line if you want to connect with mysql

//if you want to use universal odbc connection, please create a dsn connection in odbc first
//$PHPJasperXML->transferDBtoArray($server,"odbcuser","odbcpass","phpjasperxml","odbc"); //odbc = connect to odbc
//$PHPJasperXML->transferDBtoArray($server,"psqluser","psqlpass","phpjasperxml","psql"); //odbc = connect to potgresql
$PHPJasperXML->outpage("I");    //page output method I:standard output  D:Download file

/**
 * Retorna o nome do mes em portugues a partir do valor do mes atual.
 * param month
 * return month_name
 */
function getMonthName($month) {
	switch ($month) {
		case 01: $month_name = 'Janeiro'; break;
		case 02: $month_name = 'Fevereiro'; break;
		case 03: $month_name = 'Março'; break;
		case 04: $month_name = 'Abril'; break;
		case 05: $month_name = 'Maio'; break;
		case 06: $month_name = 'Junho'; break;
		case 07: $month_name = 'Julho'; break;
		case 08: $month_name = 'Agosto'; break;
		case 09: $month_name = 'Setembro'; break;
		case 10: $month_name = 'Outubro'; break;
		case 11: $month_name = 'Novembro'; break;
		case 12: $month_name = 'Dezembro'; break;
		default: $month_name = 'Janeiro'; break;
	}
	return $month_name;
}
?>
