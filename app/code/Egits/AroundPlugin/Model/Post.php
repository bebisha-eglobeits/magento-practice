<?php
namespace Egits\AroundPlugin\Model;
use Egits\AroundPlugin\Api\Data\PostInterface;

class Post extends \Magento\Framework\Model\AbstractModel implements PostInterface
{
	const CACHE_TAG = 'egits_aroundPlugin_post';

	protected $_cacheTag = 'egits_aroundPlugin_post';

	protected $_eventPrefix = 'egits_aroundPlugin_post';


	protected function _construct()
	{
		$this->_init('Egits\AroundPlugin\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}


	public function getId()
    {
        return $this->getData(self::ID);
    }

    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }
	public function getEmailid()
    {
        return  $this->getData(self::Email_ID);
    }
	public function setEmailid($emailid)
    {
        return $this->setData(self::Email_ID, $emailid);
    }

	public function getCount()
    {
        return $this->getData(self::Count);
    }
	public function setCount($count)
    {
        return $this->setData(self::Count, $count);
    }
	public function getStatus()
    {
        return $this->getData(self::Status);
    }
	public function setStatus($status)
    {
        return $this->setData(self::Status,$status);
    }

}




