<?php

namespace Egits\ShowData\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    protected $scopeConfig;
 
   const XML_PATH_STORE_NAME = 'general/store_information/name';
   const XML_PATH_STORE_PHONE = 'general/store_information/phone';
   const XML_PATH_STORE_HOURS = 'general/store_information/hours';
   const XML_PATH_STORE_COUNTRY = 'general/store_information/country_id';
   const XML_PATH_STORE_REGION = 'general/store_information/region_id';
   const XML_PATH_STORE_POSTCODE = 'general/store_information/postcode';
   const XML_PATH_STORE_CITY = 'general/store_information/city';
   const XML_PATH_STORE_STREET = 'general/store_information/street_line1';
   const XML_PATH_STORE_VATNO = 'general/store_information/merchant_vat_number';
   

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    public function getName() {
        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
   
        return $this->scopeConfig->getValue(self::XML_PATH_STORE_NAME, $storeScope);
   
   
        }
        public function getPhone() {
            $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
       
            return $this->scopeConfig->getValue(self::XML_PATH_STORE_PHONE, $storeScope);
       
       
            }
            public function getHours() {
                $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
           
                return $this->scopeConfig->getValue(self::XML_PATH_STORE_HOURS, $storeScope);
           
           
                }
                public function getCountry() {
                    $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
               
                    return $this->scopeConfig->getValue(self::XML_PATH_STORE_COUNTRY, $storeScope);
               
               
                    }
                    public function getRegion() {
                        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
                   
                        return $this->scopeConfig->getValue(self::XML_PATH_STORE_REGION, $storeScope);
                   
                   
                        }
                        public function getPostcode() {
                            $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
                       
                            return $this->scopeConfig->getValue(self::XML_PATH_STORE_POSTCODE, $storeScope);
                       
                       
                            }
                            public function getCity() {
                                $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
                           
                                return $this->scopeConfig->getValue(self::XML_PATH_STORE_CITY, $storeScope);
                           
                           
                                }
                                public function getStreet() {
                                    $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
                               
                                    return $this->scopeConfig->getValue(self::XML_PATH_STORE_STREET, $storeScope);
                               
                               
                                    }
                                    public function getVatno() {
                                        $storeScope = \Magento\Store\Model\ScopeInterface::SCOPE_STORE;
                                   
                                        return $this->scopeConfig->getValue(self::XML_PATH_STORE_VATNO, $storeScope);
                                   
                                   
                                        }


}
