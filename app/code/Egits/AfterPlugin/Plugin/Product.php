<?php

namespace Egits\AfterPlugin\Plugin;

class Product{
	public function afterGetName(\Magento\Catalog\Model\Product $subject, $result) {
		
		return "Apple".$result; 
	}
    }
