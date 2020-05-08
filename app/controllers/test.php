<?php 
	

	class test extends CI_Controller
	{
		private $titre_defaut;

		public function __construct(){

			parent::__construct();
			$this->titre_defaut='test des controller Code Igniter';
			$this->load->helper('url');
			//echo "test ... test ... test..";
		}

		public function index() 
			//l'accueil de tout les test au cas ou aucune methode nest specifie
		{	
			echo "<h1>";
			echo($this->titre_defaut);
			//redirect(array('test', 'test1')); //cette fonction le tout vers une classe error de  methode probleme
			echo "</h1>";
			echo '<h2 style="color:blue;"> Hello Team</h2></br>';
			echo '<a href="http://localhost/Itig-goma/index.php/test/test1"> test 1 </a></br>';
			echo '<a href="http://localhost/Itig-goma/index.php/test/test2"> test GET variable </a></br> ';

		}

		public function test1() //laccueil de tout les test
		{
			echo '<h1 style="color:blue;"> Hello Team, this is to test the whole system! </h1>';
		}

		public function test2($yrname='',$job='')
		{
			$data = array();
			$data['name']=$yrname;
			$data['job'] =$job;

			//$var = $this->load->view('test_UI',$data, true); //this will cache and save the 
			$this->load->view('test/test_UI',$data);
			//var_dump($var); //this can be used to take out the page viewed in the webbrowser
		}

		/*
		// this block will activate the maintenance page!!
		public function redirection(){
			echo "Maintenance";
		}

		public function _remap($method){
			$this->redirection();
		}
		*/
	}


?>