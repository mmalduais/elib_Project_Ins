<?php
namespace coding\app\controllers;

use coding\app\models\author;

class authorsController extends Controller  {

    // public function createAuthor(){
    //     $author=new AUthor();
    //     $author->name="ali";
    //     $author->phone="77878788";
    //     $author->bio="fafdasdfasdfas";
    //     $author->email="auth@gmail.com";
    //     $author->created_by=1;
    //     $author->is_active=1;
    //     $author->save();
    // }

    function listAll(){
        $authers=new author();
        $allauthers=$authers->getAll();
        // print_r($allauthers);

        $this->view('list_authers',$allauthers);

    }
    function create(){
        $this->view('add_auther');

    }

    function store(){

        $auther=new author();
        
        $auther->name=$_POST['name'];
  
        $auther->email=$_POST['email'];
        $auther->phone=$_POST['phone'];
        $auther->bio=$_POST['bio'];
       
       
        $auther->created_by=1;
    
        $auther->save();
  

    }
    function edit(){
        

    }
    function update(){

    }
    public function remove(){

    }




    


}





?>