<?php
namespace Egits\StoreInfo\Block;
class Index extends \Magento\Framework\View\Element\Template

{
	// public function __construct(\Magento\Framework\View\Element\Template\Context $context)
	// {
	// 	parent::__construct($context);
	// }

	// public function sayHello()
	// {
	// 	return __('Hello World');
    // }
      protected $_storeManager;    
		
		public function __construct(
			\Magento\Backend\Block\Template\Context $context,        
			\Magento\Store\Model\StoreManagerInterface $storeManager,        
			array $data = []
		)
		{        
			$this->_storeManager = $storeManager;        
			parent::__construct($context, $data);
		}
		public function getName()
		{
			return $this->_storeManager->getStore()->getName();
		}
		public function getWebsiteId()
		{
			return $this->_storeManager->getStore()->getWebsiteId();
		}
		public function getStoreCode()
		{
			return $this->_storeManager->getStore()->getCode();
		}
		
		public function getStoreName()
		{
			return $this->_storeManager->getStore()->getName();
		}
		
		public function getStoreUrl($fromStore = true)
		{
			return $this->_storeManager->getStore()->getCurrentUrl($fromStore);
		}
		
		public function isStoreActive()
		{
			return $this->_storeManager->getStore()->isActive();
		}
	}
	?>










