<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
    $data['active'] = 'home';
		return view('index', $data);
	}
	
  public function about()
	{
    $data['active'] = 'about';
		return view('about', $data);
	}
  
  public function team()
	{
    $data['active'] = 'about';
		return view('team', $data);
	}
  
  public function testimonials()
	{
    $data['active'] = 'about';
		return view('testimonials', $data);
	}
  public function services()
	{
    $data['active'] = 'services';
		return view('services', $data);
	}
  public function portfolio()
	{
    $data['active'] = 'portfolio';
		return view('portfolio', $data);
	}
  public function pricing()
	{
    $data['active'] = 'pricing';
		return view('pricing', $data);
	}
  public function contact()
	{
    $data['active'] = 'contact';
		return view('contact', $data);
	}
}
