<?php
namespace App\classes;
class Home
{
    protected $number;
    protected $i;
    protected $catch;

    public function __construct($POST = null)
    {
        $this->number = $_POST['given_number'];
    }

    public function index(){
        header('Location: action.php?pages=home');
    }

    






}
