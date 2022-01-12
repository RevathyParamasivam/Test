<?php




        $pass="";
        $con=new mysqli("localhost","root",$pass,"gemsadmin_ver_dev");
        $sql="select * from user_login";
        $userRes=$con->query($sql);
        
        $user=array();
        while($row=$userRes->fetch_assoc())
        {
            $user[]=$row;
        }
        
        echo json_encode($user); 
?>