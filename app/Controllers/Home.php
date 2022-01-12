<?php

namespace App\Controllers;
use App\Models\UserModel;

class Home extends BaseController
{
    private $user = '' ;
    public function __construct(){
        $this->user = new UserModel();
               
    }
    public function index()
    {
        /*
        $to='revathy.paramasivam.9@gmail.com';
        $subject='Email through CodeIgnitor Libray';
        $message='Hi Revathy, <br> <br> You have sucessfully completed the work - sending Email through Codeigniter Email Library.<br>Thanks with Regards<br><br>Revathy P.<br>9095005859'
                    .'<br><br><a href="http://localhost/email/" target="_blank">Test Link</a>';
        
        //Email instance creation;
        $email=\Config\Services::email();
        $email->setFrom('revathy.paramasivam.9@gmail.com');
        $email->setTo($to);
        $email->setCC('bennyjarvishsixbakshara@gmail.com');
        $email->setBCC('chijithjerin2004@gmail.com');
        $email->setSubject($subject);
        $email->setMessage($message);
        $attachmentPath="public/Endtime_logo.png";
        $email->attach($attachmentPath);
        if($email->send())
            echo "Successfully sent Mail";
        else
        {
            $data=$email->printDebugger(['headers']);
            print_r($data);
        }*/

      echo "Swagger Testing Site ";
    }


    
}
