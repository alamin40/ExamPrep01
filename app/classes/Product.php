<?php
namespace App\classes;
class Product
{
    protected $products = [];
    public function getAllProduct(){
        return [
            0=>[
                'id'            =>  1,
                'name'         =>  'T-Shirt',
                'price'         =>  '$50',
                'brand'         =>  'Yellow',
                'category'      =>  'TShirts',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's1.png'
            ],
            1=>[
                'id'            =>  2,
                'name'         =>  'T-Shirt',
                'price'         =>  '$50',
                'brand'         =>  'Zara',
                'category'      =>  'TShirts',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's2.png'
            ],
            2=>[
                'id'            =>  3,
                'name'         =>  'Smart Watch',
                'price'         =>  '$50',
                'brand'         =>  'Sansung',
                'category'      =>  'Electronics',
                'description'   =>  'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores hic labore neque omnis quis tempore? Accusamus ad et fuga perferendis ut. Consectetur delectus dignissimos ducimus fugiat fugit in magnam rerum?',
                'image'         =>  's14.jpg'
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
}