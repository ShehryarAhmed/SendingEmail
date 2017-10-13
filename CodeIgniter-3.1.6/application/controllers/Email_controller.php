<?php 
   class Email_controller extends CI_Controller { 
 
    function index(){
 

    $configs = Array(
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.googlemail.com',
        'smtp_port' => 465,
        'smtp_user' => 'sa03158704640@gmail.com',
        'smtp_pass' => '0315khan870'
);

$this->load->library('email',$configs);
$this->email->set_newline("\r\n");

$this->email->from("sa03158704640@gmail.com");
$this->email->to("sa03158704640@gmail.com");
$this->email->subject("Email with Codeigniter");
$this->email->message("This is email has been sent with Codeigniter");

if($this->email->send())
{
  echo "Your email was sent.!";
} else {
  show_error($this->email->print_debugger());
}
    }
}
?>