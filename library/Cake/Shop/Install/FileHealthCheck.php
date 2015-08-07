<?php
namespace Cake\Shop;

class Install_FileHealthCheck extends \Cake\Install_FileHealthCheckBase
{
    
    public function getFileHashes()
    {
        return array(
        	'library/Cake/Shop/addon-Cake_Shop.xml' => '3f4e82412cf2d93f5f8dc0fcf29895db',
        	'library/Cake/Shop/Install/Controller.php' => 'dad1dfb2e7400ef1562a8d3b0f0b4e5c',
        	'library/Cake/Shop/Install/Data.php' => 'd6908703b5e99fe1cbc698638db200a6',
        	'js/cake/shop/index.html' => 'd41d8cd98f00b204e9800998ecf8427e',
        );
    }
}