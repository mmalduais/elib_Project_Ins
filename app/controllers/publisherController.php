<?php

namespace coding\app\controllers;

use coding\app\models\publisher;

class publisherController extends Controller{

    function listAll(){
        $publisher=new Publisher();
        $allpublisher=$publisher->getAll();
        //print_r($allpublisher);

        $this->view('list_publisher',$allpublisher);

    }
    function create(){
        $this->view('add_publisher');

    }

    function store(){

        $publisher=new Publisher();
        
        $publisher->name=$_POST['name'];
        // $imageName=$this->uploadFile($_FILES['image']);

        // $publisher->image=$imageName!=null?$imageName:"default.png";

        $publisher->phone=$_POST['phone'];
        $publisher->alt_phone=$_POST['alt_phone'];
        $publisher->fax=$_POST['fax'];
        $publisher->fax=$_POST['email'];
        $publisher->address=$_POST['address'];
        $publisher->country=$_POST['country'];
        $publisher->country=$_POST['is_active'];
        $publisher->created_by=1;
        $publisher->save();

    }
    function edit(){
        

    }
    function update(){

    }
    public function remove(){

    }


    public static function uploadFile(array $imageFile): string
    {
        // check images direction
        if (!is_dir(__DIR__ . '/../../public/images')) {
            mkdir(__DIR__ . '/../../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);

            return $imageName;
        }

        return null;
    }

    




}

?>