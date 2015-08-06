<?php
namespace Cake\License;

class Install_FileHealthCheck extends \Cake\Install_FileHealthCheckBase
{
    
    public function getFileHashes()
    {
        return array(
        	'library/Cake/License/addon-Cake_License.xml' => '5b8201d86d7a4056796e049b85c2eaf5',
        	'library/Cake/License/Install/Controller.php' => 'ca8cbf75ef6bd34f2bd9688852681754',
        	'library/Cake/License/Install/Data.php' => 'd253aa7fd735e76c767c729f0ea4c183',
        	'js/cake/license/index.html' => 'd41d8cd98f00b204e9800998ecf8427e',
        );
    }
}