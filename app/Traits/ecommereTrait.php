<?php


namespace App\Traits;


trait ecommereTrait{



    function saveImage($photo,  $path){

        $file_extension=$photo->getClientOriginalExtension();
        $file_name=time().".".$file_extension;
        $photo->move($path,$file_name);
        $xx = $file_name;
        return $xx;

    }




}
