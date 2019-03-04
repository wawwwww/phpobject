<?php 

class Product{
const DEFAULT_NB_VIEWS = 0;
public $name;
public $description;
public $price;

public function diplayprice() {
/*return "le prix : " . $this->price . '£';*/
echo "le prix : " . $this->price . '£';
return "le name : " . $this->name;


}

}
