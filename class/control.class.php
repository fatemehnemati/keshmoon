<?php
include_once 'model.class.php';
class Control extends Model{

    public function createStore($cityName,$StoreName,$Address){
        $this->setStore($cityName,$StoreName,$Address);
    }

    public function createProduct($pName,$pQuantity,$Storeid)
    {
        $product_id=$this->setProduct($pName,$pQuantity);
        $this->setconnector($Storeid,$product_id);
    }

}