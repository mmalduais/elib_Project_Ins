<?php

namespace coding\app\controllers;

use coding\app\models\Userr;

class userrController extends Controller{

    function listAll(){
        $userr=new Userr();
        $alluserr=$userr->getAll();
        //print_r($alluserr);

        $this->view('list_userr',$alluserr);

    }
    function create(){
        $this->view('add_userr');

    }

    function store(){

        $userr=new Userr();
        
        $userr->name=$_POST['name'];
     
      
        $userr->email=$_POST['email'];
        $userr->password=$_POST['password'];
      
        $userr->is_active=$_POST['is_active'];
        $userr->role_id=1;
        $userr->save();

    }
    function edit(){
        

    }
    function update(){

    }
    public function remove(){

    }



    




}

?>