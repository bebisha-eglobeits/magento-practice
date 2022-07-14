<?php

namespace Egits\CmsPlugin\Plugin;

class Example{

    public function beforeExecute(\Magento\Cms\Controller\Page\View $subject)
	{
		die('error');
	}


}