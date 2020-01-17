<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('./excel/vendor/autoload.php');

// use PhpOffice\PhpSpreadsheet\Helper\Sample;
// use PhpOffice\PhpSpreadsheet\IOFactory;
// use PhpOffice\PhpSpreadsheet\Spreadsheet;

use PhpOffice\PhpSpreadsheet\Helper\Sample;
use PhpOffice\PhpSpreadsheet\IOFactory;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xls;

class Rkas extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->library('curl');
        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->helper('form');
        $this->load->helper('file');
        $this->load->library('session');
        $this->load->library('upload');     
        $this->_module = 'auth';
        $this->load->helper('path');
    } 

	public function get_func($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        // curl_setopt($ch, CURLOPT_HTTPHEADER, $token);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $content =curl_exec($ch);
        $gets = json_decode($content);
        return $gets;
	}
	
	public function index()
	{

		$url = "https://jsonplaceholder.typicode.com/todos";
		$rkas = $this->get_func($url);
		$data['data_rkas'] = $rkas;

		// print_r($data['data_rkas']);

		$this->load->view('laporan/laporan_rkas', $data);
	}

	// Export ke excel
	public function export()
	{
		$this->load->helper('download');
		$fileName = 'simple';
		$spreadsheet = new Spreadsheet();
		$sheet = $spreadsheet->getActiveSheet();
		$spreadsheet->getProperties()->setCreator('Andoyo - Java Web Media')
			->setLastModifiedBy('Andoyo - Java Web Medi')
			->setTitle('Office 2007 XLSX Test Document')
			->setSubject('Office 2007 XLSX Test Document')
			->setDescription('Test document for Office 2007 XLSX, generated using PHP classes.')
			->setKeywords('office 2007 openxml php')
			->setCategory('Test result file');

			$spreadsheet->setActiveSheetIndex(0)->setCellValue('A1', "Laporan Format BPK Periode 2020"); // Set kolom A1 dengan tulisan "DATA SISWA"
			$spreadsheet->getActiveSheet()->mergeCells('A1:F1'); // Set Merge Cell pada kolom A1 sampai E1
			$spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setBold(TRUE); // Set bold kolom A1
			$spreadsheet->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
			$spreadsheet->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal('center'); // Set font size 15 untuk kolom A1

		// Add some data
		$spreadsheet->setActiveSheetIndex(0) 
			->setCellValue('A3', 'No')
			->setCellValue('B3', 'Tribulan')
			->setCellValue('C3', 'Penerimaan')
			->setCellValue('D3', 'Pengeluaran')
			->setCellValue('D4', 'Belanja Pegawai')
			->setCellValue('E4', 'Belanja Barang dan Jasa')
			->setCellValue('F4', 'Belanja Modal')
		;

		$spreadsheet->getActiveSheet()->mergeCells('A3:A4');
		$spreadsheet->getActiveSheet()->mergeCells('B3:B4');
		$spreadsheet->getActiveSheet()->mergeCells('C3:C4');
		$spreadsheet->getActiveSheet()->mergeCells('D3:F3');


		// Miscellaneous glyphs, UTF-8
		$url = "https://jsonplaceholder.typicode.com/todos";
		$rkas = $this->get_func($url);

		$i=5;
		//  foreach($rkas as $provinsi) {

		// $spreadsheet->setActiveSheetIndex(0)
		// 	->setCellValue('A'.$i, $provinsi->userId)
		// 	->setCellValue('B'.$i, $provinsi->id)
		// 	->setCellValue('C'.$i, $provinsi->title)
		// 	->setCellValue('D'.$i, $provinsi->completed);
		// 	$i++;
		// }

		// Rename worksheet
		$spreadsheet->getActiveSheet()->setTitle('Laporan BPK '.date('Y'));

		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$spreadsheet->setActiveSheetIndex(0);

		$styleHeaderTorp = [
            'font' => [
                'bold' => true
            ],
            'alignment' => [
				'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
				'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
        ];

        $spreadsheet->getActiveSheet()->getStyle('A3:F4')->applyFromArray($styleHeaderTorp);

        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];
        $i = $i - 1;
        $sheet->getStyle('A3:F'.$i)->applyFromArray($styleArray);
        $spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(5); // Set width kolom A
        $spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(15); // Set width kolom B
        $spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(20); // Set width kolom C
        $spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(25); // Set width kolom D
        $spreadsheet->getActiveSheet()->getColumnDimension('E')->setWidth(30); // Set width kolom E
        $spreadsheet->getActiveSheet()->getColumnDimension('F')->setWidth(25); // Set width kolom E
        
		// $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
		
		
		
		$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $fileName = $fileName.'.xlsx';
        
        $this->output->set_header('Content-Type: application/vnd.ms-excel');
		$this->output->set_header("Content-type: application/csv");
		$this->output->set_header('Cache-Control: max-age=0');
		$writer->save(ROOT_UPLOAD_PATH.$fileName); 
		//redirect(HTTP_UPLOAD_PATH.$fileName); 
		$filepath = file_get_contents(ROOT_UPLOAD_PATH.$fileName);
		force_download($fileName, $filepath);
		
		exit;
	}

	
}
