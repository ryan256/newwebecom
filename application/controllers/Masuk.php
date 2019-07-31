<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	public function index()
	{
		$data['title']                  = 'TRUSH SHOP';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/menuutama');
		$this->load->view('menu/bawah');
}

	function buy(){
		
		$data['namabank']        = $this->input->post('namabank',true);
		$data['norek']           = $this->input->post('norek',true);
		
		$this->pembelian_model->buying($data);

		redirect('index.php/Masuk/successs');
	}

	public function login()
	{
		$data['title']                  = 'LOGIN';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/login');
		$this->load->view('menu/bawah');

	}
	
	Function login_user (){
		
		$data['account']         = $this->input->post('account',true);
		$data['password']        = $this->input->post('password',true);
		
		$this->registerlogin_model->login_us($data);
		
		
		$xdata['account']     = $data['account'];
		$this->session->set_userdata($xdata);
		redirect('index.php/Masuk/index');
	}
	
	Function add_cart(){
		
		//$data['account']     = $this->input->post('account',true);
		$data['pname'] = $this->input->post('pname',true);
		$data['unitprice']   = $this->input->post('unitprice',true);
		$data['qty']         = $this->input->post('qty',true);
		//$data['price']       = $this->input->post('price',true);
		
		$this->pembelian_model->addcart($data);
		
		redirect('index.php/Masuk/cart');
		
	}

	public function listt()
	{
		$data['title']                  = 'LIST';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/listvieww');
		$this->load->view('menu/bawah');

	}

	public function laptop()
	{
		$data['title']                  = 'Products Laptop';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/productslaptop');
		$this->load->view('menu/bawah');

	}

	public function mouse()
	{
		$data['title']                  = 'Products Mouse';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/productsmouse');
		$this->load->view('menu/bawah');

	}
	
	public function vga()
	{
		$data['title']                  = 'Products VGA & RAM';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/productsvga');
		$this->load->view('menu/bawah');

	}
	
	public function keyboard()
	{
		$data['title']                  = 'Products Keyboard';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/productskeyboard');
		$this->load->view('menu/bawah');

	}
	
	public function processor()
	{
		$data['title']                  = 'Products processor';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/productsprocessor');
		$this->load->view('menu/bawah');

	}

	public function regis()
	{
		$data['title']                  = 'Register';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/register');
		$this->load->view('menu/bawah');

	}
	
		function register_save (){
		
		$data['account']         = $this->input->post('account',true);
		$data['fname']           = $this->input->post('fname',true);
		$data['email']           = $this->input->post('email',true);
		$data['pnumber']         = $this->input->post('pnumber',true);
		$data['password']        = $this->input->post('password',true);
		
		$this->registerlogin_model->register_save($data);

		redirect('index.php/Masuk/success');
	}
	
	public function success()
	{
		$data['title']                  = 'Register';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/success');
		$this->load->view('menu/bawah');

	}
	
	public function successs()
	{
		$data['title']                  = 'Rekening';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/successs');
		$this->load->view('menu/bawah');
	}
	
	

	public function contact()
	{
		$data['title']                  = 'Contact';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/contact');
		$this->load->view('menu/bawah');

	}
	
	public function rekening()
	{
		$data['title']                  = 'Rekening';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/rekening');
		$this->load->view('menu/bawah');

	}

	public function cart()
	{
		$data['title']                  = 'Cart';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/cart');
		$this->load->view('menu/bawah');
		
		$this->data['tampil']=$this->pembelian_model->showdata()->result_object();
	}

	public function produklaptop1()
	{
		$data['title']                  = 'Dell Alienware 15 R3';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/product_detail-laptop1');
		$this->load->view('menu/bawah');

	}

	public function produklaptop2()
	{
		$data['title']                  = 'Acer Predator Helios 300 PH317-51';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/product_detail-laptop2');
		$this->load->view('menu/bawah');

	}

	public function produklaptop3()
	{
		$data['title']                  = 'Asus ROG Strix GL 753VD';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/product_detail-laptop3');
		$this->load->view('menu/bawah');

	}
	
	public function produklaptop4()
	{
		$data['title']                  = 'ASUS VivoBook Max X441NA';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/product_detail-laptop4');
		$this->load->view('menu/bawah');

	}
	
	public function produklaptop5()
	{
		$data['title']                  = 'DELL New Inspiron 15 7000 Gaming 7567 ZAC030';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/product_detail-laptop5');
		$this->load->view('menu/bawah');

	}
	
	
	
	
	public function produkmouse1()
	{
		$data['title']                  = 'Logitech G304 LightSpeed Wireless Gaming Mouse';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/product_detail-mouse1');
		$this->load->view('menu/bawah');

	}
	
	public function produkmouse2()
	{
		$data['title']                  = 'Bloody ML160A Gaming Mouse';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/product_detail-mouse2');
		$this->load->view('menu/bawah');

	}
	
	public function produkmouse3()
	{
		$data['title']                  = 'Logitech G102 Prodigy RGB Gaming Mouse';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/product_detail-mouse3');
		$this->load->view('menu/bawah');

	}
	
	
	
	
	public function produkkeyboard()
	{
		$data['title']                  = 'Razer BlackWidow Chroma Gaming Keyboard';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/product_detail-keyboard');
		$this->load->view('menu/bawah');

	}
	
	public function produkkeyboard2()
	{
		$data['title']                  = 'NYK K-01 TKL';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/product_detail-keyboard2');
		$this->load->view('menu/bawah');

	}
	
	
	
	
	public function produkram1()
	{
		$data['title']                  = 'Corsair SO-DIMM DDR3 8GB PC12800(2X4GB)';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/product_detail-ram1');
		$this->load->view('menu/bawah');

	}
	
	public function produkram2()
	{
		$data['title']                  = 'Intel Core I9 7980XE 18 Core';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/product_detail-ram2');
		$this->load->view('menu/bawah');

	}
	
	
	
	
	public function produkprocessor()
	{
		$data['title']                  = 'AMD A10-7870K';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/product_detail-processor1');
		$this->load->view('menu/bawah');

	}
	
	public function produkprocessor2()
	{
		$data['title']                  = 'INTEL Core i7-6700K';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/product_detail-processor2');
		$this->load->view('menu/bawah');

	}
	
	
	
	
	public function produkvga1()
	{
		$data['title']                  = 'Nvidia Quadro M6000';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/product_detail-vga1');
		$this->load->view('menu/bawah');

	}


}