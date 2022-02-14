<?php


namespace App\classes;


class UploadImage
{
    protected $file;
    protected $directory;
    protected $products;
    protected $product;
    protected $imageName;
    protected $price;
    protected $description;
    protected $name;
    protected $tempPath;


    public function __construct($post = null, $file = null)
    {
        $this->file         = $file;
        $this->imageName    = $file['image']['name'];
        $this->tempPath     = $file['image']['tmp_name'];
        $this->directory    = 'assets/img/product-image/'.$this->imageName;
    }

    public function index(){
        header('Location: action.php?pages=uploadImage');
    }

    public function newProduct(){


        move_uploaded_file($this->tempPath, $this->directory);
        return $this->directory;
    }

}