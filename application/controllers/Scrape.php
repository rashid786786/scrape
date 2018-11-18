<?php 
/**
 * 
 */
class Scrape extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->view('simple_html_dom');
	}
	function index()
	{

		// $url = str_get_html(file_get_contents('https://www.peopleareawesome.com/'));
		// 	$doc = new DOMDocument();
		// 	$doc->loadHTML(file_get_contents($url));
		// 	$doc =$doc->find(".gallery-wrapper");
		// 	$selector = new DOMXPath($doc);

		// 	$div = $selector->query('//div[1]')->item(0);
		// 	echo $div;
		// 	//var_dump($doc->saveHTML($div));
		// 	exit();
		//get html content from the site.


		$dom=str_get_html(file_get_contents('https://www.peopleareawesome.com/'));
		$urls = array();
		$titles = array();
		if(!empty($dom))
		{
		/// get frame arrays 
		foreach($dom->find('iframe') as $frame) {
			 //echo($frame->src);
			 $urls[]= $frame->src;
		}
		print_r($urls);
	}
}
}
 ?>