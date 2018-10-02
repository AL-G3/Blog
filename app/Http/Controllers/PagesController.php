<?php

 namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex(){
		#process var data or params
		#talks to model
		#recieve from model
		#compile data
		#pass data to view

		return view('pages.welcome');
	} 

	public function getAbout(){

		$first = 'Al';
		$last = 'Garcia';
		$fullname = $first . " " . $last;
		$email = 'AlfredoAdonis3@gmail.com';

		return view('pages.about')->withFullname($fullname)->withEmail($email);
	}

	public function getContact(){
		return view('pages.contact');
	}

//	public function postContact(){
		
//	}



}