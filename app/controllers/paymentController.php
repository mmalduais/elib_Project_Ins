<?php

namespace coding\app\controllers;

use coding\app\models\payment;

class paymentController extends Controller{

    function listAll(){
        $payment=new Payment();
        $allpayment=$payment->getAll();
        //print_r($allpayment);

        $this->view('list_payment',$allpayment);

    }
    function create(){
        $this->view('add_payment');

    }

    function store(){

        $payment=new Payment();
        
        $payment->name=$_POST['name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $payment->image=$imageName!=null?$imageName:"default.png";
        
 

        $payment->is_active=$_POST['is_active'];
        $payment->created_by=1;
        $payment->save();

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