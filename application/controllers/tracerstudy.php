<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracerstudy extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Beranda');
		$this->load->helper(array('form','url','file','download'));
		error_reporting(E_ALL^(E_NOTICE | E_WARNING));
	}

	public function index()
	{
		if($this->session->userdata('nim')){
			$nim=$this->session->userdata('nim');
			// $now=date('Y-m-d');
		  	$deco=$this->Beranda->dec1($nim,1);
			if(!empty($deco)){
				$data['data'] = json_decode($deco[0]->jawaban,true);
				// print_r($data);
				$this->load->view('base/header');
				$this->load->view('tracerstudy/sidebar');
				$this->load->view('tracerstudy/pekerjaan',$data);
				$this->load->view('base/footer');
			}else{
				$this->load->view('base/header');
				$this->load->view('tracerstudy/sidebar');
				$this->load->view('tracerstudy/pekerjaan');
				$this->load->view('base/footer');
			}
		}else{
			//jika tidak login redirect halaman awal
		}
	}
	public function kompetensi(){
		if($this->session->userdata('nim')){
			$nim=$this->session->userdata('nim');
		  	$deco=$this->Beranda->dec1($nim,2,$tanggal);
			if(!empty($deco)){
				$data['data'] = json_decode($deco[0]->jawaban,true);
				// print_r($data);
				$this->load->view('base/header');
				$this->load->view('tracerstudy/sidebar');
				$this->load->view('tracerstudy/kompetensi',$data);
				$this->load->view('base/footer');
			}else{
				$this->load->view('base/header');
				$this->load->view('tracerstudy/sidebar');
				$this->load->view('tracerstudy/kompetensi');
				$this->load->view('base/footer');
			}
		}else{
			//jika tidak login redirect halaman awal
		}
	}
	public function halaman3(){
		if($this->session->userdata('nim')){
			$nim=$this->session->userdata('nim');
		  	$deco=$this->Beranda->dec1($nim,3,$tanggal);
			if(!empty($deco)){
				$data['data'] = json_decode($deco[0]->jawaban,true);
				// print_r($data);
				$this->load->view('base/header');
				$this->load->view('tracerstudy/sidebar');
				$this->load->view('tracerstudy/halaman3',$data);
				$this->load->view('base/footer');
			}else{
				$this->load->view('base/header');
				$this->load->view('tracerstudy/sidebar');
				$this->load->view('tracerstudy/halaman3');
				$this->load->view('base/footer');
			}
		}else{
			//jika tidak login redirect halaman awal
		}
	}
	public function halaman4(){
		if($this->session->userdata('nim')){
			$nim=$this->session->userdata('nim');
		  	$deco=$this->Beranda->dec1($nim,4,$tanggal);
			if(!empty($deco)){
				$data['data'] = json_decode($deco[0]->jawaban,true);
				// print_r($data);
				$this->load->view('base/header');
				$this->load->view('tracerstudy/sidebar');
				$this->load->view('tracerstudy/halaman4',$data);
				$this->load->view('base/footer');
			}else{
				$this->load->view('base/header');
				$this->load->view('tracerstudy/sidebar');
				$this->load->view('tracerstudy/halaman4');
				$this->load->view('base/footer');
			}
		}else{
			//jika tidak login redirect halaman awal
		}
	}

	public function simpan1(){
		$nim=$this->session->userdata('nim');
			$data = array(
				array(
					'id_soal'=>'1',
					'jawaban_1'=>$this->input->post('jawaban_1'),
					'jawaban_2'=>$this->input->post('jawaban_2')
				),array(
					'id_soal'=>'2',
					'jawaban_1'=>$this->input->post('jawaban_3'),
					'jawaban_2'=>$this->input->post('jawaban_4'),
					'jawaban_3'=>$this->input->post('jawaban_5'),
					'jawaban_4'=>$this->input->post('jawaban_6'),
					'jawaban_5'=>$this->input->post('jawaban_7'),
					'jawaban_6'=>$this->input->post('jawaban_8'),
					'jawaban_7'=>$this->input->post('jawaban_9'),
					'jawaban_8'=>$this->input->post('jawaban_10'),
					'jawaban_9'=>$this->input->post('jawaban_11'),
					'jawaban_10'=>$this->input->post('jawaban_12'),
					'jawaban_11'=>$this->input->post('jawaban_13'),
					'jawaban_12'=>$this->input->post('jawaban_14'),
					'jawaban_13'=>$this->input->post('jawaban_15'),
					'jawaban_14'=>$this->input->post('jawaban_16'),
					'jawaban_15'=>$this->input->post('jawaban_17')
				),array(
					'id_soal'=>'3',
					'jawaban_1'=>$this->input->post('jawaban_18')
				),array(
					'id_soal'=>'4',
					'jawaban_1'=>$this->input->post('jawaban_19'),
					'jawaban_2'=>$this->input->post('jawaban_56')
				),array(
					'id_soal'=>'5',
					'jawaban_1'=>$this->input->post('jawaban_20')
				),array(
					'id_soal'=>'6',
					'jawaban_1'=>$this->input->post('jawaban_21')
				),array(
					'id_soal'=>'7',
					'jawaban_1'=>$this->input->post('jawaban_22'),
					'jawaban_2'=>$this->input->post('jawaban_23'),
					'jawaban_3'=>$this->input->post('jawaban_24'),
					'jawaban_4'=>$this->input->post('jawaban_25'),
					'jawaban_5'=>$this->input->post('jawaban_26')
				),array(
					'id_soal'=>'8',
					'jawaban_1'=>$this->input->post('jawaban_27')
				),array(
					'id_soal'=>'9',
					'jawaban_1'=>$this->input->post('jawaban_28')
				),array(
					'id_soal'=>'10',
					'jawaban_1'=>$this->input->post('jawaban_29')
				),array(
					'id_soal'=>'11',
					'jawaban_1'=>$this->input->post('jawaban_30'),
					'jawaban_2'=>$this->input->post('jawaban_31'),
					'jawaban_3'=>$this->input->post('jawaban_32')
				),array(
					'id_soal'=>'12',
					'jawaban_1'=>$this->input->post('jawaban_33')
				),array(
					'id_soal'=>'13',
					'jawaban_1'=>$this->input->post('jawaban_34')
				),array(
					'id_soal'=>'14',
					'jawaban_1'=>$this->input->post('jawaban_35'),
					'jawaban_2'=>$this->input->post('jawaban_36'),
					'jawaban_3'=>$this->input->post('jawaban_37'),
					'jawaban_4'=>$this->input->post('jawaban_38'),
					'jawaban_5'=>$this->input->post('jawaban_39'),
					'jawaban_6'=>$this->input->post('jawaban_40'),
					'jawaban_7'=>$this->input->post('jawaban_41'),
					'jawaban_8'=>$this->input->post('jawaban_42'),
					'jawaban_9'=>$this->input->post('jawaban_43'),
					'jawaban_10'=>$this->input->post('jawaban_44'),
					'jawaban_11'=>$this->input->post('jawaban_45'),
					'jawaban_12'=>$this->input->post('jawaban_46'),
					'jawaban_13'=>$this->input->post('jawaban_47')
				)
			);
			$query = json_encode($data);
			// echo $query;
			$now=date('Y-m-d'); //sekarang
			$tgl=$this->Beranda->cektgl($nim);//sekarang
			$tgl1=$tgl[0]['tanggal'];
			$data2 = array(
				'jawaban'=>$query
			);

			$data1 = array(
				'ID_SOAL'=>'1',
				'NIM'=>$nim,
				'jawaban'=>$query,
				'tanggal'=>$now
			);

			// echo $now;
			// print_r($tgl1);
			// echo $data2;
			if($tgl1==$now){
				$this->db->where('ID_SOAL',1);
				$this->db->where('NIM',$nim);
				$this->db->where('tanggal',$now);
				$this->db->update('tracer_study',$data2);
			}else{
				$this->Beranda->simpan('tracer_study',$data1);
			}
			// //print_r($data1);
			
			redirect("/tracerstudy/kompetensi");

	}
	public function simpan2(){
		$nim=$this->session->userdata('nim');
		$data1 = array(
			array(
				'id_soal'=>'15',
				'jawaban_1'=>$this->input->post('jawaban_48')
			),array(
				'id_soal'=>'16',
				'jawaban_1'=>$this->input->post('jawaban_49')
			),array(
				'id_soal'=>'17',
				'jawaban_1'=>$this->input->post('jawaban_50')
			),array(
				'id_soal'=>'18',
				'jawaban_1'=>$this->input->post('jawaban_51')
			),array(
				'id_soal'=>'19',
				'jawaban_1'=>$this->input->post('jawaban_52')
			),array(
				'id_soal'=>'20',
				'jawaban_1'=>$this->input->post('jawaban_53')
			),array(
				'id_soal'=>'21',
				'jawaban_1'=>$this->input->post('jawaban_54')
			),array(
				'id_soal'=>'22',
				'jawaban_1'=>$this->input->post('jawaban_55')
			),array(
				'id_soal'=>'23',
				'jawaban_1'=>$this->input->post('jawaban_56')
			),array(
				'id_soal'=>'24',
				'jawaban_1'=>$this->input->post('jawaban_57')
			),array(
				'id_soal'=>'25',
				'jawaban_1'=>$this->input->post('jawaban_58')
			),array(
				'id_soal'=>'26',
				'jawaban_1'=>$this->input->post('jawaban_59')
			),array(
				'id_soal'=>'27',
				'jawaban_1'=>$this->input->post('jawaban_60')
			),array(
				'id_soal'=>'28',
				'jawaban_1'=>$this->input->post('jawaban_61')
			),array(
				'id_soal'=>'29',
				'jawaban_1'=>$this->input->post('jawaban_62')
			),array(
				'id_soal'=>'30',
				'jawaban_1'=>$this->input->post('jawaban_63')
			),array(
				'id_soal'=>'31',
				'jawaban_1'=>$this->input->post('jawaban_64')
			),array(
				'id_soal'=>'32',
				'jawaban_1'=>$this->input->post('jawaban_65')
			),array(
				'id_soal'=>'33',
				'jawaban_1'=>$this->input->post('jawaban_66')
			),array(
				'id_soal'=>'34',
				'jawaban_1'=>$this->input->post('jawaban_67')
			),array(
				'id_soal'=>'35',
				'jawaban_1'=>$this->input->post('jawaban_68')
			),array(
				'id_soal'=>'36',
				'jawaban_1'=>$this->input->post('jawaban_69')
			),array(
				'id_soal'=>'37',
				'jawaban_1'=>$this->input->post('jawaban_70')
			),array(
				'id_soal'=>'38',
				'jawaban_1'=>$this->input->post('jawaban_71')
			),array(
				'id_soal'=>'39',
				'jawaban_1'=>$this->input->post('jawaban_72')
			),array(
				'id_soal'=>'40',
				'jawaban_1'=>$this->input->post('jawaban_73')
			),array(
				'id_soal'=>'41',
				'jawaban_1'=>$this->input->post('jawaban_74')
			),
		);
		$query = json_encode($data1);
			// echo $query;
			$now=date('Y-m-d'); //sekarang
			$tgl=$this->Beranda->cektgl($nim);//sekarang
			$tgl1=$tgl[0]['tanggal'];
			$data2 = array(
				'jawaban'=>$query
			);

			$data = array(
				'ID_SOAL'=>'2',
				'NIM'=>$nim,
				'jawaban'=>$query,
				'tanggal'=>$now
			);

			// echo $now;
			// print_r($tgl1);
			// echo $data2;
			if($tgl1==$now){
				$this->db->where('ID_SOAL',2);
				$this->db->where('NIM',$nim);
				$this->db->where('tanggal',$now);
				$this->db->update('tracer_study',$data2);
			}else{
				$this->Beranda->simpan('tracer_study',$data);
			}
	redirect("/tracerstudy/halaman3");
	}
	public function simpan3(){
		$nim=$this->session->userdata('nim');
		$data2=array(
			array(
				'id_soal'=>'42',
				'jawaban_1'=>$this->input->post('jawaban_75')
			),array(
				'id_soal'=>'43',
				'jawaban_1'=>$this->input->post('jawaban_76')
			),array(
				'id_soal'=>'44',
				'jawaban_1'=>$this->input->post('jawaban_77')
			),array(
				'id_soal'=>'45',
				'jawaban_1'=>$this->input->post('jawaban_78')
			),array(
				'id_soal'=>'46',
				'jawaban_1'=>$this->input->post('jawaban_79')
			),array(
				'id_soal'=>'47',
				'jawaban_1'=>$this->input->post('jawaban_80')
			),array(
				'id_soal'=>'48',
				'jawaban_1'=>$this->input->post('jawaban_81')
			),array(
				'id_soal'=>'49',
				'jawaban_1'=>$this->input->post('jawaban_82')
			),array(
				'id_soal'=>'50',
				'jawaban_1'=>$this->input->post('jawaban_83')
			),array(
				'id_soal'=>'51',
				'jawaban_1'=>$this->input->post('jawaban_84')
			),array(
				'id_soal'=>'52',
				'jawaban_1'=>$this->input->post('jawaban_85')
			),array(
				'id_soal'=>'53',
				'jawaban_1'=>$this->input->post('jawaban_86')
			),array(
				'id_soal'=>'54',
				'jawaban_1'=>$this->input->post('jawaban_87')
			),array(
				'id_soal'=>'55',
				'jawaban_1'=>$this->input->post('jawaban_88')
			),array(
				'id_soal'=>'56',
				'jawaban_1'=>$this->input->post('jawaban_89')
			),array(
				'id_soal'=>'57',
				'jawaban_1'=>$this->input->post('jawaban_90')
			),array(
				'id_soal'=>'58',
				'jawaban_1'=>$this->input->post('jawaban_91')
			),array(
				'id_soal'=>'59',
				'jawaban_1'=>$this->input->post('jawaban_92')
			),array(
				'id_soal'=>'60',
				'jawaban_1'=>$this->input->post('jawaban_93')
			),array(
				'id_soal'=>'61',
				'jawaban_1'=>$this->input->post('jawaban_94')
			),array(
				'id_soal'=>'62',
				'jawaban_1'=>$this->input->post('jawaban_95')
			),array(
				'id_soal'=>'63',
				'jawaban_1'=>$this->input->post('jawaban_96')
			),array(
				'id_soal'=>'64',
				'jawaban_1'=>$this->input->post('jawaban_97')
			),array(
				'id_soal'=>'65',
				'jawaban_1'=>$this->input->post('jawaban_98')
			),array(
				'id_soal'=>'66',
				'jawaban_1'=>$this->input->post('jawaban_99')
			),array(
				'id_soal'=>'67',
				'jawaban_1'=>$this->input->post('jawaban_100')
			),array(
				'id_soal'=>'68',
				'jawaban_1'=>$this->input->post('jawaban_101')
			),
		);
		$query = json_encode($data2);
			// echo $query;
			$now=date('Y-m-d'); //sekarang
			$tgl=$this->Beranda->cektgl($nim);//sekarang
			$tgl1=$tgl[0]['tanggal'];
			$data2 = array(
				'jawaban'=>$query
			);

			$data = array(
				'ID_SOAL'=>'3',
				'NIM'=>$nim,
				'jawaban'=>$query,
				'tanggal'=>$now
			);
			// print_r($this->Beranda->simpan('tracer_study',$data));
			// echo $now;
			// print_r($tgl1);
			// echo $data2;
			if($tgl1==$now){
				$this->db->where('ID_SOAL',3);
				$this->db->where('NIM',$nim);
				$this->db->where('tanggal',$now);
				$this->db->update('tracer_study',$data2);
			}else{
				$this->Beranda->simpan('tracer_study',$data);
			}
	redirect("/tracerstudy/halaman4");
	}
	public function simpan4(){
		$nim=$this->session->userdata('nim');
		$data3=array(
			array(
				'id_soal'=>'69',
				'jawaban_1'=>$this->input->post('jawaban_102')
			),array(
				'id_soal'=>'70',
				'jawaban_1'=>$this->input->post('jawaban_103')
			),array(
				'id_soal'=>'71',
				'jawaban_1'=>$this->input->post('jawaban_104')
			),array(
				'id_soal'=>'72',
				'jawaban_1'=>$this->input->post('jawaban_105')
			),array(
				'id_soal'=>'73',
				'jawaban_1'=>$this->input->post('jawaban_106')
			),array(
				'id_soal'=>'74',
				'jawaban_1'=>$this->input->post('jawaban_107')
			),array(
				'id_soal'=>'75',
				'jawaban_1'=>$this->input->post('jawaban_108')
			),array(
				'id_soal'=>'76',
				'jawaban_1'=>$this->input->post('jawaban_109')
			),array(
				'id_soal'=>'77',
				'jawaban_1'=>$this->input->post('jawaban_110')
			),array(
				'id_soal'=>'78',
				'jawaban_1'=>$this->input->post('jawaban_111')
			),array(
				'id_soal'=>'79',
				'jawaban_1'=>$this->input->post('jawaban_112')
			),array(
				'id_soal'=>'80',
				'jawaban_1'=>$this->input->post('jawaban_113')
			),array(
				'id_soal'=>'81',
				'jawaban_1'=>$this->input->post('jawaban_114')
			),array(
				'id_soal'=>'82',
				'jawaban_1'=>$this->input->post('jawaban_115')
			),array(
				'id_soal'=>'83',
				'jawaban_1'=>$this->input->post('jawaban_116')
			),array(
				'id_soal'=>'84',
				'jawaban_1'=>$this->input->post('jawaban_117')
			),array(
				'id_soal'=>'85',
				'jawaban_1'=>$this->input->post('jawaban_118')
			),array(
				'id_soal'=>'86',
				'jawaban_1'=>$this->input->post('jawaban_119')
			),array(
				'id_soal'=>'87',
				'jawaban_1'=>$this->input->post('jawaban_120')
			),array(
				'id_soal'=>'88',
				'jawaban_1'=>$this->input->post('jawaban_121')
			),array(
				'id_soal'=>'89',
				'jawaban_1'=>$this->input->post('jawaban_122')
			),array(
				'id_soal'=>'90',
				'jawaban_1'=>$this->input->post('jawaban_123')
			),array(
				'id_soal'=>'91',
				'jawaban_1'=>$this->input->post('jawaban_124')
			),array(
				'id_soal'=>'92',
				'jawaban_1'=>$this->input->post('jawaban_125')
			),array(
				'id_soal'=>'93',
				'jawaban_1'=>$this->input->post('jawaban_126')
			),array(
				'id_soal'=>'94',
				'jawaban_1'=>$this->input->post('jawaban_127')
			),array(
				'id_soal'=>'95',
				'jawaban_1'=>$this->input->post('jawaban_128')
			),array(
				'id_soal'=>'96',
				'jawaban_1'=>$this->input->post('jawaban_129')
			),array(
				'id_soal'=>'97',
				'jawaban_1'=>$this->input->post('jawaban_130')
			),array(
				'id_soal'=>'98',
				'jawaban_1'=>$this->input->post('jawaban_131')
			),array(
				'id_soal'=>'99',
				'jawaban_1'=>$this->input->post('jawaban_132')
			),array(
				'id_soal'=>'100',
				'jawaban_1'=>$this->input->post('jawaban_133')
			),array(
				'id_soal'=>'101',
				'jawaban_1'=>$this->input->post('jawaban_134')
			),array(
				'id_soal'=>'102',
				'jawaban_1'=>$this->input->post('jawaban_135')
			),array(
				'id_soal'=>'103',
				'jawaban_1'=>$this->input->post('jawaban_136')
			),array(
				'id_soal'=>'104',
				'jawaban_1'=>$this->input->post('jawaban_137')
			),array(
				'id_soal'=>'105',
				'jawaban_1'=>$this->input->post('jawaban_138')
			),array(
				'id_soal'=>'106',
				'jawaban_1'=>$this->input->post('jawaban_139')
			),array(
				'id_soal'=>'107',
				'jawaban_1'=>$this->input->post('jawaban_140'),
				'jawaban_2'=>$this->input->post('jawaban_141'),
				'jawaban_3'=>$this->input->post('jawaban_142'),
				'jawaban_4'=>$this->input->post('jawaban_143'),
				'jawaban_5'=>$this->input->post('jawaban_144'),
				'jawaban_6'=>$this->input->post('jawaban_145'),
				'jawaban_7'=>$this->input->post('jawaban_146'),
				'jawaban_8'=>$this->input->post('jawaban_147'),
				'jawaban_9'=>$this->input->post('jawaban_148'),
				'jawaban_10'=>$this->input->post('jawaban_149'),
				'jawaban_11'=>$this->input->post('jawaban_150'),
				'jawaban_12'=>$this->input->post('jawaban_151'),
				'jawaban_13'=>$this->input->post('jawaban_152')
			)
		);
		$query = json_encode($data3);
			// echo $query;
			$now=date('Y-m-d'); //sekarang
			$tgl=$this->Beranda->cektgl($nim);//sekarang
			$tgl1=$tgl[0]['tanggal'];
			$data2 = array(
				'jawaban'=>$query
			);

			$data = array(
				'ID_SOAL'=>'4',
				'NIM'=>$nim,
				'jawaban'=>$query,
				'tanggal'=>$now
			);
			// print_r($this->Beranda->simpan('tracer_study',$data));
			// echo $now;
			// print_r($tgl1);
			// echo $data2;
			if($tgl1==$now){
				$this->db->where('ID_SOAL',4);
				$this->db->where('NIM',$nim);
				$this->db->where('tanggal',$now);
				$this->db->update('tracer_study',$data2);
			}else{
				$this->Beranda->simpan('tracer_study',$data);
			}
	redirect("/tracerstudy/");
	}
}
