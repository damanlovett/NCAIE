<?php
/* SVN FILE: $Id: post_fixture.php 8120 2009-03-19 20:25:10Z gwoo $ */
/**
 * Short description for file.
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
 * @subpackage    cake.tests.fixtures
 * @since         CakePHP(tm) v 1.2.0.4667
 * @version       $Revision: 8120 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2009-03-19 16:25:10 -0400 (Thu, 19 Mar 2009) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * Short description for class.
 *
 * @package       cake
 * @subpackage    cake.tests.fixtures
 */
class PostFixture extends CakeTestFixture {
/**
 * name property
 *
 * @var string 'Post'
 * @access public
 */
	var $name = 'Post';
/**
 * fields property
 *
 * @var array
 * @access public
 */
	var $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'author_id' => array('type' => 'integer', 'null' => false),
		'title' => array('type' => 'string', 'null' => false),
		'body' => 'text',
		'published' => array('type' => 'string', 'length' => 1, 'default' => 'N'),
		'created' => 'datetime',
		'updated' => 'datetime'
	);
/**
 * records property
 *
 * @var array
 * @access public
 */
	var $records = array(
		array('author_id' => 1, 'title' => 'First Post', 'body' => 'First Post Body', 'published' => 'Y', 'created' => '2007-03-18 10:39:23', 'updated' => '2007-03-18 10:41:31'),
		array('author_id' => 3, 'title' => 'Second Post', 'body' => 'Second Post Body', 'published' => 'Y', 'created' => '2007-03-18 10:41:23', 'updated' => '2007-03-18 10:43:31'),
		array('author_id' => 1, 'title' => 'Third Post', 'body' => 'Third Post Body', 'published' => 'Y', 'created' => '2007-03-18 10:43:23', 'updated' => '2007-03-18 10:45:31')
	);
}
?>
