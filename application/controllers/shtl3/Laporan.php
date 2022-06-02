<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_laporan_shtl3');
        $this->load->helper('url','file');
	}

	public function index()
	{
		//$a['data']=$this->M_laporan->eff();
		$this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
		$this->load->view('shtl3/laporan/laporan_eff_kain');
		$this->load->view('shtl3/footer');
	}


/*---------------------------------------------------------------FUNGSI EFF PERTANGGAL--------------------------------------------------------*/
	public function laporan_kain()
	{
		$bulan =  $this->input->post('bulan');
		$tahun =  $this->input->post('tahun');
		$data['data'] = $this->M_laporan_shtl3->lap_kain($bulan, $tahun);
		$data['bulan'] = $bulan;
	 	$data['tahun'] = $tahun;
		$this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar_content');
		$this->load->view('shtl3/laporan/lap_kain_view', $data);
		$this->load->view('shtl3/footer');
	}

	public function laporan_kain_cetak()
	{
		include_once './assets/cexcel/Classes/PHPExcel.php';
		date_default_timezone_set('Asia/Jakarta');
		$objPHPExcel = new PHPExcel();

		$bulan =  $this->input->post('bulan');
		$tahun =  $this->input->post('tahun');
		$data = $this->M_laporan_shtl3->lap_kain($bulan, $tahun);
	
		$objPHPExcel = new PHPExcel(); 
		$objPHPExcel->setActiveSheetIndex(0);
		$rowCount = 5;
		$rowcount2 = 2;
		
		$objPHPExcel->getSheet(0)->mergeCells('A1:AG1');
		$objPHPExcel->getActiveSheet()->SetCellValue('A1', "Laporan Kain");
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setName('Times New Roman');
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
		
		$objPHPExcel->getSheet(0)->mergeCells('A2:AG2');
		$objPHPExcel->getActiveSheet()->SetCellValue('A2', indonesian_date($bulan)." - ".indonesian_date($tahun));
		$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setName('Times New Roman');
		$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setItalic(true);		
		$objPHPExcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

		// Set Orientation, size and scaling
		$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToPage(true);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToHeight(0);

		$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':'.'AG'.$rowCount)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':'.'AG'.$rowCount)->getFill()->getStartColor()->setARGB('999999');
		$objPHPExcel->getActiveSheet()->getStyle('A4:AG4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $objPHPExcel->getActiveSheet()->getStyle('A4:AG4')->getFill()->getStartColor()->setARGB('999999');
        //  Border header
        $objPHPExcel->getActiveSheet()->getStyle('A4:AG4')->applyFromArray(array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN)))); 
	
        $objPHPExcel->getSheet(0)->mergeCells('B4:AF4');
		$objPHPExcel->getActiveSheet()->getStyle('B4:AF4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
     	$objPHPExcel->getActiveSheet()->SetCellValue('B4', "TANGGAL");

        $objPHPExcel->getSheet(0)->mergeCells('A4:A5');
		$objPHPExcel->getActiveSheet()->getStyle('A4:A5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->SetCellValue('A4', "KONSTRUKSI");

		$objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, "1");
		$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, "2");
		$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, "3");
		$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, "4");
		$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, "5");
		$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, "6");
		$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, "7");
		$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, "8");
		$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount, "9");
		$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount, "10");
		$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount, "11");
		$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount, "12");
		$objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount, "13");
		$objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount, "14");
		$objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount, "15");
		$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount, "16");
		$objPHPExcel->getActiveSheet()->SetCellValue('R'.$rowCount, "17");
		$objPHPExcel->getActiveSheet()->SetCellValue('S'.$rowCount, "18");
		$objPHPExcel->getActiveSheet()->SetCellValue('T'.$rowCount, "19");
		$objPHPExcel->getActiveSheet()->SetCellValue('U'.$rowCount, "20");
		$objPHPExcel->getActiveSheet()->SetCellValue('V'.$rowCount, "21");
		$objPHPExcel->getActiveSheet()->SetCellValue('W'.$rowCount, "22");
		$objPHPExcel->getActiveSheet()->SetCellValue('X'.$rowCount, "23");
		$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$rowCount, "24");
		$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$rowCount, "25");
		$objPHPExcel->getActiveSheet()->SetCellValue('AA'.$rowCount, "26");
		$objPHPExcel->getActiveSheet()->SetCellValue('AB'.$rowCount, "27");
		$objPHPExcel->getActiveSheet()->SetCellValue('AC'.$rowCount, "28");
		$objPHPExcel->getActiveSheet()->SetCellValue('AD'.$rowCount, "29");
		$objPHPExcel->getActiveSheet()->SetCellValue('AE'.$rowCount, "30");
		$objPHPExcel->getActiveSheet()->SetCellValue('AF'.$rowCount, "31");

		$objPHPExcel->getSheet(0)->mergeCells('AG4:AG5');
		$objPHPExcel->getActiveSheet()->getStyle('AG4:AG5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
     	$objPHPExcel->getActiveSheet()->SetCellValue('AG4', "RATA-RATA");
		$rowCount++;

		// set datatable 
		foreach($data as $value){
		    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $value->jns_konstruksi); 
		    $objPHPExcel->getActiveSheet()->setCellValue('B'.$rowCount, $value->TGL_1);
		    $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $value->TGL_2); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $value->TGL_3); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $value->TGL_4); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $value->TGL_5);
		    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $value->TGL_6);
			$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, $value->TGL_7);
			$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, $value->TGL_8);
			$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount, $value->TGL_9);
			$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount, $value->TGL_10);
			$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount, $value->TGL_11);
			$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount, $value->TGL_12);
		    $objPHPExcel->getActiveSheet()->setCellValue('N'.$rowCount, $value->TGL_13);
		    $objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount, $value->TGL_14); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount, $value->TGL_15); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount, $value->TGL_16); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('R'.$rowCount, $value->TGL_17);
		    $objPHPExcel->getActiveSheet()->SetCellValue('S'.$rowCount, $value->TGL_18);
			$objPHPExcel->getActiveSheet()->SetCellValue('T'.$rowCount, $value->TGL_19);
			$objPHPExcel->getActiveSheet()->SetCellValue('U'.$rowCount, $value->TGL_20);
			$objPHPExcel->getActiveSheet()->SetCellValue('V'.$rowCount, $value->TGL_21);
			$objPHPExcel->getActiveSheet()->SetCellValue('W'.$rowCount, $value->TGL_22);
			$objPHPExcel->getActiveSheet()->SetCellValue('X'.$rowCount, $value->TGL_23);
			$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$rowCount, $value->TGL_24);
			$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$rowCount, $value->TGL_25);
		    $objPHPExcel->getActiveSheet()->setCellValue('AA'.$rowCount, $value->TGL_26);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AB'.$rowCount, $value->TGL_27); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('AC'.$rowCount, $value->TGL_28); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('AD'.$rowCount, $value->TGL_29); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('AE'.$rowCount, $value->TGL_30);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AF'.$rowCount, $value->TGL_31);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AG'.$rowCount, $value->rata2_);
		    $rowCount++;
		}

		//  Border Data		
		$objPHPExcel->getActiveSheet()->getStyle('A5:AG'.($rowCount-1))->applyFromArray(array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN))));

		// set autosize
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);     
		$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);	
		$objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AG4')->setAutoSize(true);

		 
		// set output
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, "Excel2007");
        sleep(1);
        $filename = 'Laporan_kain '.date('d-m-Y H-i').'.xlsx';
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header('Content-Disposition: attachment; filename="'.$filename.'"');
        header("Cache-Control: max-age=0");
        ob_clean();
        $objWriter->save("php://output");
        $objPHPExcel->disconnectWorksheets();
		unset($objPHPExcel);
		
	}

/*-------------------------------------------------END OF FUNGSI EFF PERTANGGAL-----------------------------------------*/


/*--------------------------------------------------FUNGSI LAPORAN PERMESIN---------------------------------------------*/
/*----------------------------------------------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------------------------*/
/*----------------------------------------------------------------------------------------------------------------------*/

	public function laporan_permesin()
	{
		$this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
		$this->load->view('shtl3/laporan/laporan_eff_permesin');
		$this->load->view('shtl3/footer');
	}

	public function laporan_permesin_view()
	{
		$bulan =  $this->input->post('bulan');
		$tahun =  $this->input->post('tahun');
		$data['data_permesin'] = $this->M_laporan_shtl3->lap_eff_permesin($bulan, $tahun);		
		$data['data_total'] = $this->M_laporan_shtl3->lap_eff_total_kagrup_permesin($bulan, $tahun);
		$data['bulan'] = $bulan;
	 	$data['tahun'] = $tahun;
		$this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar_content');
		$this->load->view('shtl3/laporan/lap_eff_permesin_view', $data);
		$this->load->view('shtl3/footer');
	}

public function laporan_permesin_cetak()
	{
		include_once './assets/cexcel/Classes/PHPExcel.php';
		date_default_timezone_set('Asia/Jakarta');
		$objPHPExcel = new PHPExcel();

		$bulan =  $this->input->post('bulan');
		$tahun =  $this->input->post('tahun');
		$data1 = $this->M_laporan_shtl3->lap_eff_permesin($bulan, $tahun);		
		$data2 = $this->M_laporan_shtl3->lap_eff_total_kagrup_permesin($bulan, $tahun);


		$objPHPExcel = new PHPExcel(); 
		$objPHPExcel->setActiveSheetIndex(0);
		$rowCount = 6;
		$rowcount2 = 4;
																	/*PERMESIN*/
		$objPHPExcel->getSheet(0)->mergeCells('A1:AI1');
		$objPHPExcel->getActiveSheet()->SetCellValue('A1', "Laporan Eff Permesin");
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setName('Times New Roman');
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
		
		$objPHPExcel->getSheet(0)->mergeCells('A2:AI2');
		$objPHPExcel->getActiveSheet()->SetCellValue('A2', indonesian_date($bulan)." - ".indonesian_date($tahun));
		$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setName('Times New Roman');
		$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setItalic(true);		
		$objPHPExcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

		$objPHPExcel->getActiveSheet()->SetCellValue('A4',"Eff Permesin");
		$objPHPExcel->getActiveSheet()->getStyle('A4')->getFont()->setName('Times New Roman');
		$objPHPExcel->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

		// Set Orientation, size and scaling
		$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToPage(true);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToHeight(0);

		$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':'.'AI'.$rowCount)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':'.'AI'.$rowCount)->getFill()->getStartColor()->setARGB('999999');
		$objPHPExcel->getActiveSheet()->getStyle('A5:AI5')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $objPHPExcel->getActiveSheet()->getStyle('A5:AI5')->getFill()->getStartColor()->setARGB('999999');
        //  Border header
        $objPHPExcel->getActiveSheet()->getStyle('A5:AI5')->applyFromArray(array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN)))); 
	
        $objPHPExcel->getSheet(0)->mergeCells('D5:AH5');
		$objPHPExcel->getActiveSheet()->getStyle('D5:AH5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
     	$objPHPExcel->getActiveSheet()->SetCellValue('D5', "TANGGAL");

        $objPHPExcel->getSheet(0)->mergeCells('A5:A6');
		$objPHPExcel->getActiveSheet()->getStyle('A5:A6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->SetCellValue('A5', "KA GRUP");
        
        $objPHPExcel->getSheet(0)->mergeCells('B5:B6');
		$objPHPExcel->getActiveSheet()->getStyle('B5:B6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->SetCellValue('B5', "MTC");

        $objPHPExcel->getSheet(0)->mergeCells('C5:C6');
		$objPHPExcel->getActiveSheet()->getStyle('C5:C6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->SetCellValue('C5', "MESIN");

		$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, "1");
		$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, "2");
		$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, "3");
		$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, "4");
		$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, "5");
		$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, "6");
		$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount, "7");
		$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount, "8");
		$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount, "9");
		$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount, "10");
		$objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount, "11");
		$objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount, "12");
		$objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount, "13");
		$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount, "14");
		$objPHPExcel->getActiveSheet()->SetCellValue('R'.$rowCount, "15");
		$objPHPExcel->getActiveSheet()->SetCellValue('S'.$rowCount, "16");
		$objPHPExcel->getActiveSheet()->SetCellValue('T'.$rowCount, "17");
		$objPHPExcel->getActiveSheet()->SetCellValue('U'.$rowCount, "18");
		$objPHPExcel->getActiveSheet()->SetCellValue('V'.$rowCount, "19");
		$objPHPExcel->getActiveSheet()->SetCellValue('W'.$rowCount, "20");
		$objPHPExcel->getActiveSheet()->SetCellValue('X'.$rowCount, "21");
		$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$rowCount, "22");
		$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$rowCount, "23");
		$objPHPExcel->getActiveSheet()->SetCellValue('AA'.$rowCount, "24");
		$objPHPExcel->getActiveSheet()->SetCellValue('AB'.$rowCount, "25");
		$objPHPExcel->getActiveSheet()->SetCellValue('AC'.$rowCount, "26");
		$objPHPExcel->getActiveSheet()->SetCellValue('AD'.$rowCount, "27");
		$objPHPExcel->getActiveSheet()->SetCellValue('AE'.$rowCount, "28");
		$objPHPExcel->getActiveSheet()->SetCellValue('AF'.$rowCount, "29");
		$objPHPExcel->getActiveSheet()->SetCellValue('AG'.$rowCount, "30");
		$objPHPExcel->getActiveSheet()->SetCellValue('AH'.$rowCount, "31");

		$objPHPExcel->getSheet(0)->mergeCells('AI5:AI6');
		$objPHPExcel->getActiveSheet()->getStyle('AI5:AI6')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
     	$objPHPExcel->getActiveSheet()->SetCellValue('AI5', "RATA-RATA");
		$rowCount++;

		// set datatable 
		foreach($data1 as $value){
		    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $value->nama_kagrup); 
		    $objPHPExcel->getActiveSheet()->setCellValue('B'.$rowCount, $value->nama_mtc);
		    $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $value->no_mesin); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $value->TGL_1); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $value->TGL_2); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $value->TGL_3);
		    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $value->TGL_4);
			$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, $value->TGL_5);
			$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, $value->TGL_6);
			$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount, $value->TGL_7);
			$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount, $value->TGL_8);
			$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount, $value->TGL_9);
			$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount, $value->TGL_10);
		    $objPHPExcel->getActiveSheet()->setCellValue('N'.$rowCount, $value->TGL_11);
		    $objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount, $value->TGL_12); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount, $value->TGL_13); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount, $value->TGL_14); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('R'.$rowCount, $value->TGL_15);
		    $objPHPExcel->getActiveSheet()->SetCellValue('S'.$rowCount, $value->TGL_16);
			$objPHPExcel->getActiveSheet()->SetCellValue('T'.$rowCount, $value->TGL_17);
			$objPHPExcel->getActiveSheet()->SetCellValue('U'.$rowCount, $value->TGL_18);
			$objPHPExcel->getActiveSheet()->SetCellValue('V'.$rowCount, $value->TGL_19);
			$objPHPExcel->getActiveSheet()->SetCellValue('W'.$rowCount, $value->TGL_20);
			$objPHPExcel->getActiveSheet()->SetCellValue('X'.$rowCount, $value->TGL_21);
			$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$rowCount, $value->TGL_22);
			$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$rowCount, $value->TGL_23);
		    $objPHPExcel->getActiveSheet()->setCellValue('AA'.$rowCount, $value->TGL_24);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AB'.$rowCount, $value->TGL_25); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('AC'.$rowCount, $value->TGL_26); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('AD'.$rowCount, $value->TGL_27); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('AE'.$rowCount, $value->TGL_28);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AF'.$rowCount, $value->TGL_29);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AG'.$rowCount, $value->TGL_30);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AH'.$rowCount, $value->TGL_31);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AI'.$rowCount, $value->rata2_);
		    $rowCount++;
			}

		//  Border Data		
		$objPHPExcel->getActiveSheet()->getStyle('A5:AI'.($rowCount-1))->applyFromArray(array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN))));

		
															/*total ka grup*/
		$hasil4 = $rowCount + $rowcount2 -1;
		$hasil3 = $rowCount + $rowcount2 -2;
		$hasil2 = $rowCount + $rowcount2;
		$objPHPExcel->getActiveSheet()->SetCellValue('A'.$hasil3, "Total Eff Perkagrup");
		$objPHPExcel->getActiveSheet()->getStyle('A'.$hasil3)->getFont()->setName('Times New Roman');
		$objPHPExcel->getActiveSheet()->getStyle('A'.$hasil3)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

		// Set Orientation, size and scaling
		$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToPage(true);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToHeight(0);

		$objPHPExcel->getActiveSheet()->getStyle('C'.$hasil4.':'.'AI'.$hasil4)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $objPHPExcel->getActiveSheet()->getStyle('C'.$hasil4.':'.'AI'.$hasil4)->getFill()->getStartColor()->setARGB('999999');
		$objPHPExcel->getActiveSheet()->getStyle('C'.$hasil2.':'.'AI'.$hasil2)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $objPHPExcel->getActiveSheet()->getStyle('C'.$hasil2.':'.'AI'.$hasil2)->getFill()->getStartColor()->setARGB('999999');
        //  Border header
        $objPHPExcel->getActiveSheet()->getStyle('C'.$hasil2.':'.'AI'.$hasil2)->applyFromArray(array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN)))); 
	
        $objPHPExcel->getSheet(0)->mergeCells('D'.$hasil4.':'.'AH'.$hasil4);
		$objPHPExcel->getActiveSheet()->getStyle('D'.$hasil4.':'.'AH'.$hasil4)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
     	$objPHPExcel->getActiveSheet()->SetCellValue('D'.$hasil4, "TANGGAL");

        $objPHPExcel->getSheet(0)->mergeCells('C'.$hasil4.':'.'C'.$hasil2);
		$objPHPExcel->getActiveSheet()->getStyle('C'.$hasil4.':'.'C'.$hasil2)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->SetCellValue('C'.$hasil4, "KA GRUP");

		$objPHPExcel->getActiveSheet()->SetCellValue('D'.$hasil2, "1");
		$objPHPExcel->getActiveSheet()->SetCellValue('E'.$hasil2, "2");
		$objPHPExcel->getActiveSheet()->SetCellValue('F'.$hasil2, "3");
		$objPHPExcel->getActiveSheet()->SetCellValue('G'.$hasil2, "4");
		$objPHPExcel->getActiveSheet()->SetCellValue('H'.$hasil2, "5");
		$objPHPExcel->getActiveSheet()->SetCellValue('I'.$hasil2, "6");
		$objPHPExcel->getActiveSheet()->SetCellValue('J'.$hasil2, "7");
		$objPHPExcel->getActiveSheet()->SetCellValue('K'.$hasil2, "8");
		$objPHPExcel->getActiveSheet()->SetCellValue('L'.$hasil2, "9");
		$objPHPExcel->getActiveSheet()->SetCellValue('M'.$hasil2, "10");
		$objPHPExcel->getActiveSheet()->SetCellValue('N'.$hasil2, "11");
		$objPHPExcel->getActiveSheet()->SetCellValue('O'.$hasil2, "12");
		$objPHPExcel->getActiveSheet()->SetCellValue('P'.$hasil2, "13");
		$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$hasil2, "14");
		$objPHPExcel->getActiveSheet()->SetCellValue('R'.$hasil2, "15");
		$objPHPExcel->getActiveSheet()->SetCellValue('S'.$hasil2, "16");
		$objPHPExcel->getActiveSheet()->SetCellValue('T'.$hasil2, "17");
		$objPHPExcel->getActiveSheet()->SetCellValue('U'.$hasil2, "18");
		$objPHPExcel->getActiveSheet()->SetCellValue('V'.$hasil2, "19");
		$objPHPExcel->getActiveSheet()->SetCellValue('W'.$hasil2, "20");
		$objPHPExcel->getActiveSheet()->SetCellValue('X'.$hasil2, "21");
		$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$hasil2, "22");
		$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$hasil2, "23");
		$objPHPExcel->getActiveSheet()->SetCellValue('AA'.$hasil2, "24");
		$objPHPExcel->getActiveSheet()->SetCellValue('AB'.$hasil2, "25");
		$objPHPExcel->getActiveSheet()->SetCellValue('AC'.$hasil2, "26");
		$objPHPExcel->getActiveSheet()->SetCellValue('AD'.$hasil2, "27");
		$objPHPExcel->getActiveSheet()->SetCellValue('AE'.$hasil2, "28");
		$objPHPExcel->getActiveSheet()->SetCellValue('AF'.$hasil2, "29");
		$objPHPExcel->getActiveSheet()->SetCellValue('AG'.$hasil2, "30");
		$objPHPExcel->getActiveSheet()->SetCellValue('AH'.$hasil2, "31");

		$objPHPExcel->getSheet(0)->mergeCells('AI'.$hasil4.':'.'AI'.$hasil2);
		$objPHPExcel->getActiveSheet()->getStyle('AI'.$hasil4.':'.'AI'.$hasil2)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
     	$objPHPExcel->getActiveSheet()->SetCellValue('AI'.$hasil4, "RATA-RATA");
		$hasil2++;

		// set datatable 
		foreach($data2 as $value){
		    $objPHPExcel->getActiveSheet()->SetCellValue('C'.$hasil2, $value->nama_kagrup); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('D'.$hasil2, $value->TGL_1); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('E'.$hasil2, $value->TGL_2); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('F'.$hasil2, $value->TGL_3);
		    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$hasil2, $value->TGL_4);
			$objPHPExcel->getActiveSheet()->SetCellValue('H'.$hasil2, $value->TGL_5);
			$objPHPExcel->getActiveSheet()->SetCellValue('I'.$hasil2, $value->TGL_6);
			$objPHPExcel->getActiveSheet()->SetCellValue('J'.$hasil2, $value->TGL_7);
			$objPHPExcel->getActiveSheet()->SetCellValue('K'.$hasil2, $value->TGL_8);
			$objPHPExcel->getActiveSheet()->SetCellValue('L'.$hasil2, $value->TGL_9);
			$objPHPExcel->getActiveSheet()->SetCellValue('M'.$hasil2, $value->TGL_10);
		    $objPHPExcel->getActiveSheet()->setCellValue('N'.$hasil2, $value->TGL_11);
		    $objPHPExcel->getActiveSheet()->SetCellValue('O'.$hasil2, $value->TGL_12); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('P'.$hasil2, $value->TGL_13); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('Q'.$hasil2, $value->TGL_14); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('R'.$hasil2, $value->TGL_15);
		    $objPHPExcel->getActiveSheet()->SetCellValue('S'.$hasil2, $value->TGL_16);
			$objPHPExcel->getActiveSheet()->SetCellValue('T'.$hasil2, $value->TGL_17);
			$objPHPExcel->getActiveSheet()->SetCellValue('U'.$hasil2, $value->TGL_18);
			$objPHPExcel->getActiveSheet()->SetCellValue('V'.$hasil2, $value->TGL_19);
			$objPHPExcel->getActiveSheet()->SetCellValue('W'.$hasil2, $value->TGL_20);
			$objPHPExcel->getActiveSheet()->SetCellValue('X'.$hasil2, $value->TGL_21);
			$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$hasil2, $value->TGL_22);
			$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$hasil2, $value->TGL_23);
		    $objPHPExcel->getActiveSheet()->setCellValue('AA'.$hasil2, $value->TGL_24);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AB'.$hasil2, $value->TGL_25); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('AC'.$hasil2, $value->TGL_26); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('AD'.$hasil2, $value->TGL_27); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('AE'.$hasil2, $value->TGL_28);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AF'.$hasil2, $value->TGL_29);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AG'.$hasil2, $value->TGL_30);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AH'.$hasil2, $value->TGL_31);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AI'.$hasil2, $value->rata2_);
		    $hasil2++;
			}

		$ds = $rowCount + 3;	
		$objPHPExcel->getActiveSheet()->getStyle('C'.$ds.':'.'AI'.($hasil2-1))->applyFromArray(array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN))));
				//set autosize
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);     
		$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);	
		$objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AH')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AI5')->setAutoSize(true);

		 
		// set output
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, "Excel2007");
        sleep(1);
        $filename = 'Laporan_Eff_Kagrup '.date('d-m-Y H-i').'.xlsx';
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header('Content-Disposition: attachment; filename="'.$filename.'"');
        header("Cache-Control: max-age=0");
        ob_clean();
        $objWriter->save("php://output");
        $objPHPExcel->disconnectWorksheets();
		unset($objPHPExcel);
	}

/*-------------------------------------------------END OF FUNGSI PERMESIN-------------------------------------------*/

/*------------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------------FUNGSI LAPORAN EFF MONTIR-----------------------------------------*/
/*------------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------------*/
/*------------------------------------------------------------------------------------------------------------------*/

	public function laporan_montir()
	{
		$this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar');
        $this->load->view('shtl3/sidebar_content');
		$this->load->view('shtl3/laporan/laporan_eff_montir');
		$this->load->view('shtl3/footer');
	}

	public function laporan_montir_view()
	{
		$bulan =  $this->input->post('bulan');
		$tahun =  $this->input->post('tahun');
		$data['data_montir'] = $this->M_laporan_shtl3->lap_eff_montir($bulan, $tahun);		
		$data['bulan'] = $bulan;
	 	$data['tahun'] = $tahun;
		$this->load->view('shtl3/index');
        $this->load->view('shtl3/sidebar_content');
		$this->load->view('shtl3/laporan/lap_eff_montir_view', $data);
		$this->load->view('shtl3/footer');
	}


	public function laporan_montir_cetak()
	{
		include_once './assets/cexcel/Classes/PHPExcel.php';
		date_default_timezone_set('Asia/Jakarta');
		$objPHPExcel = new PHPExcel();

		$bulan =  $this->input->post('bulan');
		$tahun =  $this->input->post('tahun');
		$data = $this->M_laporan_shtl3->lap_eff_montir($bulan, $tahun);

		$objPHPExcel = new PHPExcel(); 
		$objPHPExcel->setActiveSheetIndex(0);
		$rowCount = 5;
		$rowcount2 = 2;
		
		$objPHPExcel->getSheet(0)->mergeCells('A1:AH1');
		$objPHPExcel->getActiveSheet()->SetCellValue('A1', "Laporan EFF Montir");
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setName('Times New Roman');
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15);
		$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
		
		$objPHPExcel->getSheet(0)->mergeCells('A2:AH2');
		$objPHPExcel->getActiveSheet()->SetCellValue('A2', indonesian_date($bulan)." - ".indonesian_date($tahun));
		$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setName('Times New Roman');
		$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setItalic(true);		
		$objPHPExcel->getActiveSheet()->getStyle('A2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

		// Set Orientation, size and scaling
		$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_PORTRAIT);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToPage(true);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
		$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToHeight(0);

		$objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':'.'AH'.$rowCount)->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $objPHPExcel->getActiveSheet()->getStyle('A'.$rowCount.':'.'AH'.$rowCount)->getFill()->getStartColor()->setARGB('999999');
		$objPHPExcel->getActiveSheet()->getStyle('A4:AH4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
        $objPHPExcel->getActiveSheet()->getStyle('A4:AH4')->getFill()->getStartColor()->setARGB('999999');
        //  Border header
        $objPHPExcel->getActiveSheet()->getStyle('A4:AH4')->applyFromArray(array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN)))); 
	
        $objPHPExcel->getSheet(0)->mergeCells('C4:AG4');
		$objPHPExcel->getActiveSheet()->getStyle('C4:AG4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
     	$objPHPExcel->getActiveSheet()->SetCellValue('C4', "TANGGAL");

        $objPHPExcel->getSheet(0)->mergeCells('A4:A5');
		$objPHPExcel->getActiveSheet()->getStyle('A4:A5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->SetCellValue('A4', "DAERAH");
        $objPHPExcel->getSheet(0)->mergeCells('B4:B5');
		$objPHPExcel->getActiveSheet()->getStyle('B4:B5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$objPHPExcel->getActiveSheet()->SetCellValue('B4', "MTC");

		$objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, "1");
		$objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, "2");
		$objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, "3");
		$objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, "4");
		$objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, "5");
		$objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, "6");
		$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, "7");
		$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount, "8");
		$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount, "9");
		$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount, "10");
		$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount, "11");
		$objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount, "12");
		$objPHPExcel->getActiveSheet()->SetCellValue('O'.$rowCount, "13");
		$objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount, "14");
		$objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount, "15");
		$objPHPExcel->getActiveSheet()->SetCellValue('R'.$rowCount, "16");
		$objPHPExcel->getActiveSheet()->SetCellValue('S'.$rowCount, "17");
		$objPHPExcel->getActiveSheet()->SetCellValue('T'.$rowCount, "18");
		$objPHPExcel->getActiveSheet()->SetCellValue('U'.$rowCount, "19");
		$objPHPExcel->getActiveSheet()->SetCellValue('V'.$rowCount, "20");
		$objPHPExcel->getActiveSheet()->SetCellValue('W'.$rowCount, "21");
		$objPHPExcel->getActiveSheet()->SetCellValue('X'.$rowCount, "22");
		$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$rowCount, "23");
		$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$rowCount, "24");
		$objPHPExcel->getActiveSheet()->SetCellValue('AA'.$rowCount, "25");
		$objPHPExcel->getActiveSheet()->SetCellValue('AB'.$rowCount, "26");
		$objPHPExcel->getActiveSheet()->SetCellValue('AC'.$rowCount, "27");
		$objPHPExcel->getActiveSheet()->SetCellValue('AD'.$rowCount, "28");
		$objPHPExcel->getActiveSheet()->SetCellValue('AE'.$rowCount, "29");
		$objPHPExcel->getActiveSheet()->SetCellValue('AF'.$rowCount, "30");
		$objPHPExcel->getActiveSheet()->SetCellValue('AG'.$rowCount, "31");

		$objPHPExcel->getSheet(0)->mergeCells('AH4:AH5');
		$objPHPExcel->getActiveSheet()->getStyle('AH4:AH5')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
     	$objPHPExcel->getActiveSheet()->SetCellValue('AH4', "RATA-RATA");
		$rowCount++;

		// set datatable 
		foreach($data as $value){
		    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $value->daerah); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $value->nama_mtc); 
		    $objPHPExcel->getActiveSheet()->setCellValue('C'.$rowCount, $value->TGL_1);
		    $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $value->TGL_2); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $value->TGL_3); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $value->TGL_4); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $value->TGL_5);
		    $objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, $value->TGL_6);
			$objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, $value->TGL_7);
			$objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount, $value->TGL_8);
			$objPHPExcel->getActiveSheet()->SetCellValue('K'.$rowCount, $value->TGL_9);
			$objPHPExcel->getActiveSheet()->SetCellValue('L'.$rowCount, $value->TGL_10);
			$objPHPExcel->getActiveSheet()->SetCellValue('M'.$rowCount, $value->TGL_11);
			$objPHPExcel->getActiveSheet()->SetCellValue('N'.$rowCount, $value->TGL_12);
		    $objPHPExcel->getActiveSheet()->setCellValue('O'.$rowCount, $value->TGL_13);
		    $objPHPExcel->getActiveSheet()->SetCellValue('P'.$rowCount, $value->TGL_14); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('Q'.$rowCount, $value->TGL_15); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('R'.$rowCount, $value->TGL_16); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('S'.$rowCount, $value->TGL_17);
		    $objPHPExcel->getActiveSheet()->SetCellValue('T'.$rowCount, $value->TGL_18);
			$objPHPExcel->getActiveSheet()->SetCellValue('U'.$rowCount, $value->TGL_19);
			$objPHPExcel->getActiveSheet()->SetCellValue('V'.$rowCount, $value->TGL_20);
			$objPHPExcel->getActiveSheet()->SetCellValue('W'.$rowCount, $value->TGL_21);
			$objPHPExcel->getActiveSheet()->SetCellValue('X'.$rowCount, $value->TGL_22);
			$objPHPExcel->getActiveSheet()->SetCellValue('Y'.$rowCount, $value->TGL_23);
			$objPHPExcel->getActiveSheet()->SetCellValue('Z'.$rowCount, $value->TGL_24);
			$objPHPExcel->getActiveSheet()->SetCellValue('AA'.$rowCount, $value->TGL_25);
		    $objPHPExcel->getActiveSheet()->setCellValue('AB'.$rowCount, $value->TGL_26);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AC'.$rowCount, $value->TGL_27); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('AD'.$rowCount, $value->TGL_28); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('AE'.$rowCount, $value->TGL_29); 
		    $objPHPExcel->getActiveSheet()->SetCellValue('AF'.$rowCount, $value->TGL_30);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AG'.$rowCount, $value->TGL_31);
		    $objPHPExcel->getActiveSheet()->SetCellValue('AH'.$rowCount, $value->rata2_);
		    $rowCount++;
		}

		//  Border Data		
		$objPHPExcel->getActiveSheet()->getStyle('A5:AH'.($rowCount-1))->applyFromArray(array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN))));

		// set autosize
		$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);     
		$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setAutoSize(true);	
		$objPHPExcel->getActiveSheet()->getColumnDimension('AA')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AB')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AC')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AD')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AE')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AF')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AG')->setAutoSize(true);
		$objPHPExcel->getActiveSheet()->getColumnDimension('AH4')->setAutoSize(true);

		 
		// set output
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, "Excel2007");
        sleep(1);
        $filename = 'Laporan_eff_montir '.date('d-m-Y H-i').'.xlsx';
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header('Content-Disposition: attachment; filename="'.$filename.'"');
        header("Cache-Control: max-age=0");
        ob_clean();
        $objWriter->save("php://output");
        $objPHPExcel->disconnectWorksheets();
		unset($objPHPExcel);
		
	}

/*-------------------------------------------------------------END OF FUNGSI EFF MONTIR--------------------------------------------------------*/


}

/* End of file Laporan.pgp */
/* Location: ./application/controllers/Laporan.pgp */