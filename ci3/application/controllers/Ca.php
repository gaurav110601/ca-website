	<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class ca extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{

		$this->load->view('CA Website/index');

	}
	public function contact()
	{
		
		$this->load->view('CA Website/contact');

		if ($this->input->post()) {
			 $data = array(  
                        'Name'     => $this->input->post('name'),
                        'Email'   => $this->input->post('email'),
                        'Message'   => $this->input->post('message')
                        );  
    
        $this->db->insert('contact',$data);  
  
        redirect(); 
		}

	}
	public function register()
	{
		
		$this->load->view('CA Website/register');

		if ($this->input->post()) {
			 $data = array(  
                        'Name'     => $this->input->post('name'),
                        'Email'   => $this->input->post('email'),
                        'Mobile_Number'   => $this->input->post('no'),
                        'City'   => $this->input->post('city'),
                        'Password'   => $this->input->post('password'),
                        'Confirm_Password'   => $this->input->post('verifyPassword')
                        );    
        $this->db->insert('register',$data);  
  
        redirect('login'); 
		}


	}

	public function login()
	{
	$this->load->view('CA Website/login');
	
	if($this->input->post()){
		$this->db->where('Email',$this->input->post('email'));
		$this->db->where('Password',$this->input->post('password'));
        $row=$this->db->get('register')->row();
        if($row){
        	$_SESSION['user_id'] = $row->Id;

        	$this->session->set_userdata('login',$row);
        	redirect('dashboard');
        }
        else{
        	redirect("register");
        }


	} 



}

	public function dashboard()
	{

		$this->load->view('CA Website/dashboard');

	}

	public function admin_login()
	{

		$this->load->view('CA Website/admin_login');


		if($this->input->post()){
		$this->db->where('Email',$this->input->post('email'));
		$this->db->where('Password',$this->input->post('password'));
        $row=$this->db->get('admin')->row();
        if($row){
        	$_SESSION['user_id'] = $row->Id;
        	$this->session->set_userdata('admin_login',$row);
        	redirect('admin_dashboard');
        }
	}

}

public function admin_dashboard(){
	$this->load->view('CA Website/admin_dashboard');
	
		}

public function admin_dashboard_register(){
	$this->load->view('CA Website/admin_dashboard_register');

		
}
public function admin_dashboard_contacts(){
	$this->load->view('CA Website/admin_dashboard_contacts');

		}

public function customer_edit($Id){
	
		if ($this->input->post()) {
			 $data = array(  
                        'Name' => $this->input->post('name'),
                        'Email' => $this->input->post('email'),
                        'Mobile_Number' => $this->input->post('no'),
                        'City' => $this->input->post('city'),
                        'Password' => $this->input->post('password'),
                        'Confirm_Password' => $this->input->post('verifyPassword')
                        );    
        $this->db->where('Id',$Id);
        $this->db->update('register',$data);
        redirect('Ca/admin_dashboard_register'); 
		}
$data['user'] = $this->db->where('Id',$Id)->get('register')->row();
$this->load->view('CA Website/customer_edit',$data);
		}

	public function delete_for_contacts($id){
		$this->db->where('id',$id);
		$this->db->delete('contact');
		 echo 'Deleted successfully.';
		redirect("admin_dashboard_contacts"); 

	}

	public function delete_for_customers($id){
		$this->db->where('id',$id);
		$this->db->delete('register');
		redirect("admin_dashboard_register"); 

	}

	

	public function who_we_are(){
		$this->load->view('CA Website/who_we_are');

	}



	public function about_us(){
		$this->load->view('CA Website/about_us');

	}



	public function admin_dashboard_slider(){
		$this->load->view('CA Website/admin_dashboard_slider');

	}




	public function slider_add(){

		if (!empty($_FILES['image']['name'])) {
	   $data['image'] = $this->Common_model->image('image'); 
			
        $this->db->insert('slider',$data);  
        redirect('ca/admin_dashboard_slider'); 

	}
		$this->load->view('CA Website/slider_add');
	
}






public function slider_edit($Id){

if (!empty($_FILES['image'] ['name'])) {
 $data['image'] = $this->Common_model->image('image');

 $this->db->where('Id',$Id);
 $this->db->update('slider',$data);
 redirect('Ca/admin_dashboard_slider'); 
}
$data['user'] = $this->db->where('Id',$Id)->get('slider')->row();
$this->load->view('CA Website/slider_edit',$data);


	}

	public function slider_delete($id){
		$this->db->where('id',$id);
		$this->db->delete('slider');
		redirect("admin_dashboard_slider"); 

	}


	public function admin_dashboard_why_choose_us(){
		$this->load->view('CA Website/admin_dashboard_why_choose_us');

	}

	public function why_choose_us_add(){
	$this->load->view('CA Website/why_choose_us_add');

	if ($this->input->post()) {
	
    		$data['title'] = $this->input->post('title');
    		$data['description'] = $this->input->post('description');
    		if ($_FILES['image'] ['name']) {
		$data['image'] = $this->Common_model->image('image');
	}
        $this->db->insert('why_choose_us',$data);  
        redirect('admin_dashboard_why_choose_us');
        
        }
		
	}	

		

	

	public function why_choose_us_delete($id){
		$this->db->where('id',$id);
		$this->db->delete('why_choose_us');
		redirect("admin_dashboard_why_choose_us"); 

	}

	public function why_choose_us_edit($Id){
	
		if ($this->input->post()) {
			 $data = array(  
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description'),
                        'image' => $this->Common_model->image('image')
                        );    
        $this->db->where('Id',$Id);
        $this->db->update('why_choose_us',$data);
        redirect('Ca/admin_dashboard_why_choose_us'); 
		}
$data['user'] = $this->db->where('Id',$Id)->get('why_choose_us')->row();
$this->load->view('CA Website/why_choose_us_edit',$data);
		}


		public function admin_about(){
		$this->load->view('CA Website/admin_about');


	}


	public function about_add(){
		
		if ($this->input->post()) {
			 $data = array( 
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description')
                        
                        );    
    
        $this->db->insert('about',$data);  
  
        redirect('admin_about');
        } 
		$this->load->view('CA Website/about_add');

	}

	public function about_delete($id){
		$this->db->where('id',$id);
		$this->db->delete('about');
		redirect("admin_about"); 

	}

	public function about_edit($Id){
	
		if ($this->input->post()) {
			 $data = array(  
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description')
                        
                        );    
        $this->db->where('Id',$Id);
        $this->db->update('about',$data);
        redirect('Ca/admin_about'); 
		}
$data['user'] = $this->db->where('Id',$Id)->get('about')->row();
$this->load->view('CA Website/about_edit',$data);
		}






		public function admin_features()
	{

		$this->load->view('CA Website/admin_features');

	}

	public function features_add(){
		
		if ($this->input->post()) {
			 $data = array(  
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description')
                        
                        );    
    
        $this->db->insert('features',$data);  
  
        redirect('admin_features');
        } 
		$this->load->view('CA Website/features_add');

	}

	public function features_delete($id){
		$this->db->where('id',$id);
		$this->db->delete('features');
		redirect("admin_features"); 

	}

	public function features_edit($Id){
	
		if ($this->input->post()) {
			 $data = array(  
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description')
                        
                        );    
        $this->db->where('Id',$Id);
        $this->db->update('features',$data);
        redirect('Ca/admin_features'); 
		}
$data['user'] = $this->db->where('Id',$Id)->get('features')->row();
$this->load->view('CA Website/features_edit',$data);
		}






	public function admin_services()
	{

		$this->load->view('CA Website/admin_services');

	}

	public function services_add(){

	if ($this->input->post()) {
			 $data = array(  
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description'),
                        'image' => $this->Common_model->image('image')
                        );    
    
        $this->db->insert('services',$data);  
  
        redirect('admin_services');
        } 
		$this->load->view('CA Website/services_add');
	}

		

	

	public function services_delete($id){
		$this->db->where('id',$id);
		$this->db->delete('services');
		redirect("admin_services"); 

	}

	public function services_edit($Id){
	
		if ($this->input->post()) {
			 $data = array(  
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description'),
                        'image' => $this->Common_model->image('image')
                        );
        $this->db->where('Id',$Id);
        $this->db->update('services',$data);
        redirect('Ca/admin_services'); 
		}
$data['user'] = $this->db->where('Id',$Id)->get('services')->row();
$this->load->view('CA Website/services_edit',$data);
		}









	public function admin_team()
	{

		$this->load->view('CA Website/admin_team');

	}

	public function team_add(){

	if ($this->input->post()) {
			 $data = array(  
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description'),
                        'image' => $this->Common_model->image('image')
                        );    
    
        $this->db->insert('team',$data);  
  
        redirect('admin_team');
        } 
		$this->load->view('CA Website/team_add');
	}

		

	

	public function team_delete($id){
		$this->db->where('id',$id);
		$this->db->delete('team');
		redirect("admin_team"); 

	}

	public function team_edit($Id){
	
		if ($this->input->post()) {
			 $data = array(  
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description'),
                        'image' => $this->Common_model->image('image')
                        );    
        $this->db->where('Id',$Id);
        $this->db->update('team',$data);
        redirect('Ca/admin_team'); 
		}
$data['user'] = $this->db->where('Id',$Id)->get('team')->row();
$this->load->view('CA Website/team_edit',$data);
		}




public function admin_headline()
	{

		$this->load->view('CA Website/admin_headline');

	}

	public function headline_add(){

	if ($this->input->post()) {
			 $data = array(  
                        'headline' => $this->input->post('headline')
                        );    
    
        $this->db->insert('headline',$data);  
  
        redirect('admin_headline');
        } 
		$this->load->view('CA Website/headline_add');
	}

		

	

	public function headline_delete($id){
		$this->db->where('id',$id);
		$this->db->delete('headline');
		redirect("admin_headline"); 

	}

	public function headline_edit($Id){
	
		if ($this->input->post()) {
			 $data = array(  
                        'headline' => $this->input->post('headline')
                        );    
        $this->db->where('Id',$Id);
        $this->db->update('headline',$data);
        redirect('Ca/admin_headline'); 
		}
$data['user'] = $this->db->where('Id',$Id)->get('headline')->row();
$this->load->view('CA Website/headline_edit',$data);
		}

public function admin_dashboard_header(){
		$this->load->view('CA Website/admin_dashboard_header');

	}

	public function header_edit($Id){
	
		if ($this->input->post()) {
			 $data = array(  
                        'contact_no' => $this->input->post('contact_no'),
                        'image' => $this->Common_model->image('image')
                        );    
        $this->db->where('Id',$Id);
        $this->db->update('header',$data);
        redirect('Ca/admin_dashboard_header'); 
		}
$data['user'] = $this->db->where('Id',$Id)->get('header')->row();
$this->load->view('CA Website/header_edit',$data);
		}

		public function admin_news(){
			$this->load->view('CA Website/admin_news');

		}

		public function news_add(){

	if ($this->input->post()) {
			 $data = array(  
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description'),
                        'image' => $this->Common_model->image('image')
                        );    
    
        $this->db->insert('news',$data);  
  
        redirect('admin_news');
        } 
		$this->load->view('CA Website/news_add');
	}

		

	

	public function news_delete($id){
		$this->db->where('id',$id);
		$this->db->delete('news');
		redirect("admin_news"); 

	}

	public function news_edit($Id){
	
		if ($this->input->post()) {
			 $data = array(  
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description'),
                        'image' => $this->Common_model->image('image')
                        );    
        $this->db->where('Id',$Id);
        $this->db->update('news',$data);
        redirect('Ca/admin_news'); 
		}
$data['user'] = $this->db->where('Id',$Id)->get('news')->row();
$this->load->view('CA Website/news_edit',$data);
		}


		public function admin_footer2(){
			$this->load->view('CA Website/admin_footer2');
		}

		public function admin_logout(){
			$this->session->sess_destroy();
    		redirect('admin');
		}

		

		public function why_choose_us_hide(){
			$row=$this->db->get('why_choose_us_hide')->row();
			if ( 'none' == $row->display ){
				$data['display'] = 'block';
			$data['checkbox'] = 'checked';
				$this->db->update('why_choose_us_hide',$data);
        		redirect('Ca/admin_dashboard_why_choose_us');
        	} else {
        		$data['display'] = 'none';
			$data['checkbox'] = '';
			$this->db->update('why_choose_us_hide',$data);
        	redirect('Ca/admin_dashboard_why_choose_us'); 
        	}
		}

		public function header_hide(){
			$row=$this->db->get('header_hide')->row();
			if ( 'none' == $row->display ){
				$data['display'] = 'block';
			$data['checkbox'] = 'checked';
				$this->db->update('header_hide',$data);
        		redirect('Ca/admin_dashboard_header');
        	} else {
        		$data['display'] = 'none';
			$data['checkbox'] = '';
			$this->db->update('header_hide',$data);
        	redirect('Ca/admin_dashboard_header'); 
        	}
		}


		public function about_hide(){
			$row=$this->db->get('about_hide')->row();
			if ( 'none' == $row->display ){
				$data['display'] = 'block';
			$data['checkbox'] = 'checked';
				$this->db->update('about_hide',$data);
        		redirect('Ca/admin_about');
        	} else {
        		$data['display'] = 'none';
			$data['checkbox'] = '';
			$this->db->update('about_hide',$data);
        	redirect('Ca/admin_about'); 
        	}
		}

		public function features_hide(){
			$row=$this->db->get('features_hide')->row();
			if ( 'none' == $row->display ){
				$data['display'] = 'block';
			$data['checkbox'] = 'checked';
				$this->db->update('features_hide',$data);
        		redirect('Ca/admin_features');
        	} else {
        		$data['display'] = 'none';
			$data['checkbox'] = '';
			$this->db->update('features_hide',$data);
        	redirect('Ca/admin_features'); 
        	}
		}

		public function services_hide(){
			$row=$this->db->get('services_hide')->row();
			if ( 'none' == $row->display ){
				$data['display'] = 'block';
			$data['checkbox'] = 'checked';
				$this->db->update('services_hide',$data);
        		redirect('Ca/admin_services');
        	} else {
        		$data['display'] = 'none';
			$data['checkbox'] = '';
			$this->db->update('services_hide',$data);
        	redirect('Ca/admin_services'); 
        	}
		}

		public function team_hide(){
			$row=$this->db->get('team_hide')->row();
			if ( 'none' == $row->display ){
				$data['display'] = 'block';
			$data['checkbox'] = 'checked';
				$this->db->update('team_hide',$data);
        		redirect('Ca/admin_team');
        	} else {
        		$data['display'] = 'none';
			$data['checkbox'] = '';
			$this->db->update('team_hide',$data);
        	redirect('Ca/admin_team'); 
        	}
		}

		public function news_hide(){
			$row=$this->db->get('news_hide')->row();
			if ( 'none' == $row->display ){
				$data['display'] = 'block';
			$data['checkbox'] = 'checked';
				$this->db->update('news_hide',$data);
        		redirect('Ca/admin_news');
        	} else {
        		$data['display'] = 'none';
			$data['checkbox'] = '';
			$this->db->update('news_hide',$data);
        	redirect('Ca/admin_news'); 
        	}
		}

		public function pay()
	{

		$this->load->view('CA Website/pay');

	}
}

?>

