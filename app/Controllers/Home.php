<?php namespace App\Controllers;

use App\Models\home_model;

class Home extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		return view('coming_soon');
	}

	public function homepage()
	{
		// return view('welcome_message');
		// ini_set('display_errors', 1);
		$home_model = new home_model();

		$banner_data = $home_model->get_banner();
		$brand_icons_data = $home_model->get_myclients();
		$my_comments_data = $home_model->get_mycomments();

		// echo '<pre>';
		// print_r(json_decode(json_encode($banner_data)));
		// // print_r($this->objectToArray($banner_data));
		// die;
		$data['banners'] = $banner_data;
		$data['brand_icons'] = $brand_icons_data;
		$data['my_comments'] = $my_comments_data;

		echo view('header');
		echo view('homepage',$data);
		echo view('footer');

		
	}

	//--------------------------------------------------------------------

}
