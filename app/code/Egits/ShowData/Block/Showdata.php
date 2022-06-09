<?php
 
namespace Egits\ShowData\Block;
 
use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Egits\ShowData\Helper\Data;

 
class Showdata extends Template
{
 
    protected $helperData;
 
    public function __construct(Context $context, Data $helperData)
    {
       $this->helperData = $helperData;
        parent::__construct($context);
    }
 
    public function getCollection()
    {
        return $this->helperData;
    }
 
}