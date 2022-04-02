<?php
namespace coding\app\controllers;

use coding\app\models\cities;

class citiesController extends Controller  {

  

    function listAll(){
        $citiess=new Cities();
        $allcitiess=$citiess->getAll();
        // print_r($allcitiess);

        $this->view('list_cities',$allcitiess);

    }
    function create(){
        $this->view('add_cities');

    }

    function store(){

        $cities=new Cities();
        
        $cities->name=$_POST['name'];
  
        
        $cities->is_active=$_POST['is_active'];
   
       
       
        $cities->created_by=1;
    
        $cities->save();
  

    }
    function edit(){
        

    }
    function update(){

    }
    public function remove(){

    }




    


}





?>