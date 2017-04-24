<?php


return array(
 
  'navigation' => array(
   'default' => array(
      array(
       'label' => 'Home',
        'route' => 'home',                 
             ),
        array(
           
        'label'=>'Crud',   
        'route' =>'crud'                          
       ),               
       ),
     ),  
     
 'db' => array(
 'driver' => 'Pdo',
 'dsn' => 'mysql:dbname=zf2tutorial;host=startup.localhost',
 'driver_options' => array(
  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
  ),
  ),
    
    
   'service_manager' => array(
       
         'factories' => array(
             'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
             'Zend\Db\Adapter\Adapter'=>'Zend\Db\Adapter\AdapterServiceFactory'
             
    ),
       
       
       
       
    ),
);
