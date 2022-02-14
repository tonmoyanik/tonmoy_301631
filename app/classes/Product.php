<?php


namespace App\classes;


class Product
{
    protected $products = [];
    protected $search_product;
    protected $result = [];
    protected $search_id;

    public function __construct($post = null)
    {
        if (isset($post['search_btn'])) {
            $this->search_id = $post['search'];
        }
    }

    public function getAllProduct(){

        return [
            0 => [
                'id'            => '1',
                'name'          => 'Shirt',
                'description'   => 'Smart Shirt',
                'price'         => 'Tk. 2200',
                'image'         => 'ss3.jpg',
                'brand'         => 'Richman',
                'category'      => 'Men'
            ],
            1 => [
                'id'            => '2',
                'name'          => 'Zippo Lighter',
                'description'   => 'B&H Smart Lighter',
                'price'         => 'Tk. 2750',
                'image'         => 'ss4.jpg',
                'brand'         => 'Rick',
                'category'      => 'Men'
            ],
            2 => [
                'id'            => '3',
                'name'          => 'Key Ring',
                'description'   => 'Well designed ring',
                'price'         => 'Tk. 700',
                'image'         => 'ss5.jpg',
                'brand'         => 'Arick',
                'category'      => 'Electronics'
            ],
            3 => [
                'id'            => '4',
                'name'          => 'Shoe',
                'description'   => 'Apex super shoe',
                'price'         => 'Tk. 3000',
                'image'         => 'ss8.jpg',
                'brand'         => 'Apex',
                'category'      => 'Men'
            ],
            4 => [
                'id'            => '5',
                'name'          => 'Hand Watch',
                'description'   => 'Stylish',
                'price'         => 'Tk. 3450',
                'image'         => 'ss9.jpg',
                'brand'         => 'Titan',
                'category'      => 'Men'
            ],
            5 => [
                'id'            => '6',
                'name'          => 'Che Cap',
                'description'   => 'Stylish Che guevara cap',
                'price'         => 'Tk. 750',
                'image'         => 'ss7.jpg',
                'brand'         => 'C',
                'category'      => 'Men'
            ],
        ];
    }
    public function getProductById($id){

        $this->products = $this->getAllProduct();
        foreach ($this->products as $product){

            if ($product['id'] == $id){
                return $product;
            }
        }
    }

    public function searchProduct(){

        $this->search_product = $this->getAllProduct();
        foreach ($this->search_product as $prod){
            if ($this->search_id == $prod['id']){
                $this->result = $prod;
                break;
            }
        }
        return $this->result;
    }
}