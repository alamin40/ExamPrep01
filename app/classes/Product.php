<?php
namespace App\classes;
class Product
{
    protected $products = [];
    protected $result;
    protected $text;

    public function __construct($post=null)
    {
        if(isset($post['search'])){
            $this->text = $post['search'];
        }
    }
    public function getAllProduct(){
        return [
            0=>[
                'id'            =>  1,
                'name'          =>  'White T-Shirt',
                'price'         =>  '$50',
                'brand'         =>  'Yellow',
                'category'      =>  'TShirts',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's1.png'
            ],
            1=>[
                'id'            =>  2,
                'name'          =>  'Blue T-Shirt',
                'price'         =>  '$50',
                'brand'         =>  'Zara',
                'category'      =>  'TShirts',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's2.png'
            ],
            2=>[
                'id'            =>  3,
                'name'          =>  'Black T-Shirt',
                'price'         =>  '$50',
                'brand'         =>  'Sansung',
                'category'      =>  'Electronics',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's3.png'
            ],
            3=>[
                'id'            =>  4,
                'name'          =>  'Black T-Shirt',
                'price'         =>  '$50',
                'brand'         =>  'Sansung',
                'category'      =>  'Electronics',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's4.png'
            ],
            4=>[
                'id'            =>  5,
                'name'          =>  'Blue Shirt',
                'price'         =>  '$50',
                'brand'         =>  'Sansung',
                'category'      =>  'Electronics',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's5.png'
            ],
            5=>[
                'id'            =>  6,
                'name'          =>  'White Shirt',
                'price'         =>  '$50',
                'brand'         =>  'Sansung',
                'category'      =>  'Electronics',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's6.png'
            ],




        ];
    }

    public function getProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product){
            if ($product['id'] == $id)
            {
               return $product;
            }
        }
    }

    public function getAllProductBySearchText(){
        $this->products  = $this->getAllProduct();
        foreach ($this->products as $product){
            if ($this->text == $product['name']){
                return $product;

            }

        }


    }


}