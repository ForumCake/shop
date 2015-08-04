<?php
namespace Cake\License;

class Install_FileHealthCheck extends \Cake\Install_FileHealthCheckBase
{
    
    public function getFileHashes()
    {
        return array(
        	'library/Cake/License/addon-Cake_License.xml' => '0cef5e0177a5f19143af04dd5ae92fa6',
        	'library/Cake/License/Install/Controller.php' => 'ca8cbf75ef6bd34f2bd9688852681754',
        	'library/Cake/License/Install/Data.php' => 'd253aa7fd735e76c767c729f0ea4c183',
        );
    }
}