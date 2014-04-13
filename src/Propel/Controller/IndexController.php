<?php
/**
 * zpropel (http://4zend.com/)
 */

namespace Propel\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Console\Request as ConsoleRequest;
use RuntimeException;

class IndexController extends AbstractActionController
{
    /**
    * Proxy to the propel-gen script
    * 
    * $ php ~/?/public/index.php propel-gen
    *
    * @return void
    */
    public function genAction() {
        $request = $this->getRequest();

        // Make sure that we are running in a console and the user has not tricked our
        // application into running this action from a public web server.
        if (!$request instanceof ConsoleRequest) {
            throw new RuntimeException('You can only use this action from a console!');
        }
        
        // current directory
        $d = getcwd();
        
        // cd to propel project directory
        chdir('data/propel/proxy');
        
        // propel-gen {script}
        $script = $request->getParam('script');
        exec('../../../vendor/propel/propel1/generator/bin/propel-gen ' . $script, $output);
        
        foreach($output as $line) echo $line . PHP_EOL;
        
        // switch back to original directory.
        chdir($d);
        
        return;
    }
}