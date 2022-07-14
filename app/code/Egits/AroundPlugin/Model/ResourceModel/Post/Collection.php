<?php
namespace Egits\AroundPlugin\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	Public function _construct()
	{
		$this->_init('Egits\AroundPlugin\Model\Post', 'Egits\AroundPlugin\Model\ResourceModel\Post');
	}

}

