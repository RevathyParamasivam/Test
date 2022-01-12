<?php

namespace App\Controllers;
use App\Models\UserModel;

class APi extends BaseController
{
    private $user = '' ;
    public function __construct(){
        $this->user = new UserModel();
               
    }
        public function User()
        {
        $userRes=$this->user->findAll();
             
        return json_encode($userRes);
        }
        public function addUser()
        {
            $data=['password'=>'testswagger@123','user_name'=>$_POST['name'],'staff_emp_code'=>'3',
                                'staff_id'=>456,'email_id'=>'swagger@gmail.com','mobile_no'=>'Swaggertest','reset_password'=>0,
                                'forgot_password'=>'password','sponser_id'=>123456,'fname'=>'password','lname'=>'password','avatar'=>'password'];
            
            return json_encode($_POST['name']);
            /*
        $userRes=$this->user->findAll();
             
        return json_encode($userRes);
        */
        }

/**
 * @SWG\Delete(
 *     path="/user/{id}",
 *     tags={"user"},
 *     description="deletes a single user based on the ID supplied",
 *     operationId="deleteUser",
 *     @SWG\Parameter(
 *         description="ID of user to delete",
 *         format="int64",
 *         in="path",
 *         name="id",
 *         required=true,
 *         type="integer"
 *     ),
 *     @SWG\Response(
 *         response=200,
 *         description="user deleted"
 *     ),
 *     @SWG\Response(
 *         response="default",
 *         description="unexpected error",
 *         @SWG\Schema(ref="#/definitions/errorModel")
 *     )
 * )
 */
public function deleteUser()
{
}
        

    
}
