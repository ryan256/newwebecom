<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

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
	public function index()
	{
		$data['title']                  = 'TRUSH SHOP';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/samping');
		$this->load->view('menu/menuutama');
		$this->load->view('menu/bawah');
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

	public function contact()
	{
		$data['title']                  = 'Contact';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/contact');
		$this->load->view('menu/bawah');

	}

	public function cart()
	{
		$data['title']                  = 'Cart';

		$this->load->view('menu/atas',$data);
		$this->load->view('menu/menunav');
		$this->load->view('menu/cart');
		$this->load->view('menu/bawah');

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