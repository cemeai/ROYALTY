<?php namespace Codesleeve\Sprockets;

class DependOnTest extends TestCase
{ 
    public function setUp()
    {
    	$this->basePath = realpath(__DIR__ . '/../fixtures');

    	$config = include $this->basePath . '/config/config1.php';
 		$config['base_path'] = $this->basePath;

 		$parser = new Parsers\DirectivesParser($config);

        $this->directive = new Directives\DependOn;
        $this->directive->initialize($parser, $this->basePath . '/app/assets/javascripts/manifest7.js');
    }

    /**
     * Not implemented yet
     * @expectedException InvalidArgumentException
     * @return void
     */
    public function testProcess()
    {
        $this->directive->process('manifest8');
    }

}