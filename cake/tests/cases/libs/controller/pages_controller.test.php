<?php
/* SVN FILE: $Id: pages_controller.test.php 8120 2009-03-19 20:25:10Z gwoo $ */
/**
 * PagesControllerTest file
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <https://trac.cakephp.org/wiki/Developement/TestSuite>
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          https://trac.cakephp.org/wiki/Developement/TestSuite CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.tests.cases.libs.controller
 * @since         CakePHP(tm) v 1.2.0.5436
 * @version       $Revision: 8120 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2009-03-19 16:25:10 -0400 (Thu, 19 Mar 2009) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
App::import('Core', array('Controller', 'AppController', 'PagesController'));
/**
 * PagesControllerTest class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.controller
 */
class PagesControllerTest extends CakeTestCase {
/**
 * testDisplay method
 *
 * @access public
 * @return void
 */
	function testDisplay() {
		Configure::write('viewPaths', array(TEST_CAKE_CORE_INCLUDE_PATH . 'tests' . DS . 'test_app' . DS . 'views'. DS, TEST_CAKE_CORE_INCLUDE_PATH . 'libs' . DS . 'view' . DS));
		$Pages =& new PagesController();

		$Pages->viewPath = 'posts';
		$Pages->display('index');
		$this->assertPattern('/posts index/', $Pages->output);
		$this->assertEqual($Pages->viewVars['page'], 'index');
		$this->assertEqual($Pages->pageTitle, 'Index');

		$Pages->viewPath = 'themed';
		$Pages->display('test_theme', 'posts', 'index');
		$this->assertPattern('/posts index themed view/', $Pages->output);
		$this->assertEqual($Pages->viewVars['page'], 'test_theme');
		$this->assertEqual($Pages->viewVars['subpage'], 'posts');
		$this->assertEqual($Pages->pageTitle, 'Index');
	}
}
?>