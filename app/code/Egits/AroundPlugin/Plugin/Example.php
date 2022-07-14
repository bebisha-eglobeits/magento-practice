<?php

namespace Egits\AroundPlugin\Plugin;
    use Egits\AroundPlugin\Model\PostFactory;
    use Egits\AroundPlugin\Model\ResourceModel\Post;
    use Egits\AroundPlugin\Model\ResourceModel\Post\CollectionFactory;
    use Magento\Customer\Model\Session;
    use Magento\Framework\App\RequestInterface;
    use Magento\Framework\Exception\AlreadyExistsException;
   
class Example {
  protected $_session;
  protected $_postfactory;
  protected $_post;
  protected $_collectionfactory;
  

  public function __construct(
    Session $session,PostFactory $postfactory,Post $post,CollectionFactory $collectionfactory
    
    ) 
  {
 
  $this->_session = $session;
  $this->_postfactory = $postfactory;
  $this->_post = $post;
  $this->_collectionfactory = $collectionfactory;
  
  }

    public function aroundExecute(\Magento\Customer\Controller\Account\LoginPost $subject,$proceed)
	{
	
		    $result = $proceed();
    
        $login = $subject->getRequest()->getPost('login');
        $email= $login['username'];
        // print_r($email);
        if (!$this->_session->isLoggedIn()) {
      
          $collection = $this->_collectionfactory->create();
          $collection->addFieldToFilter('emailid',['eq'=>$email]);
         $data= $collection->getFirstItem(); 
         $emailid=$data->getemailid();
         $count=$data->getCount();
        //  print_r($emailid);
       
         if(!empty($emailid)&&($email==$emailid)){
         
          $data->setemailid($email); 

           $data->setCount($count+1); 
           $data->setstatus('inactive'); 
          $this->_post->save($data); 

         }
         else{
          $data->setemailid($email); 

          $data->setCount(1); 
          $data->setstatus('inactive'); 
         $this->_post->save($data); 


         }

          // $collection->setemailid('abcd@gmail.com'); 
          // $collection->setCount(1); 
          // $collection->setstatus('active'); 
          // $this->_post->save($collection); 
         

      } 
	
     
else{
  $collection = $this->_collectionfactory->create();
  $collection->addFieldToFilter('emailid',['eq'=>$email]);
 $data= $collection->getFirstItem(); 

  $data->setemailid($email); 
  $data->setCount(0); 
  $data->setstatus('active'); 
  $this->_post->save($data); 


} 
return $result;

}

}
