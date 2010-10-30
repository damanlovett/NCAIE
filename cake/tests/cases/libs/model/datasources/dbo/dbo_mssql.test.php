<?php
/* SVN FILE: $Id: dbo_mssql.test.php 8120 2009-03-19 20:25:10Z gwoo $ */
/**
 * DboMssqlTest file
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs
 * @since         CakePHP(tm) v 1.2.0
 * @version       $Revision: 8120 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2009-03-19 16:25:10 -0400 (Thu, 19 Mar 2009) $
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
if (!defined('CAKEPHP_UNIT_TEST_EXECUTION')) {
	define('CAKEPHP_UNIT_TEST_EXECUTION', 1);
}
require_once LIBS.'model'.DS.'model.php';
require_once LIBS.'model'.DS.'datasources'.DS.'datasource.php';
require_once LIBS.'model'.DS.'datasources'.DS.'dbo_source.php';
require_once LIBS.'model'.DS.'datasources'.DS.'dbo'.DS.'dbo_mssql.php';
/**
 * DboMssqlTestDb class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.model.datasources.dbo
 */
class DboMssqlTestDb extends DboMssql {
/**
 * Contructor
 *
 * @return void
 * @access public
 */
	function __construct() {
	}
/**
 * connect method
 *
 * @return boolean
 * @access public
 */
	function connect() {
		$this->connected = true;
		return true;
	}
/**
 * lastError method
 *
 * @return void
 * @access public
 */
	function lastError() {
	}
/**
 * simulated property
 *
 * @var array
 * @access public
 */
	var $simulated = array();
/**
 * fetchAllResultsStack
 *
 * @var array
 * @access public
 */
	var $fetchAllResultsStack = array();
/**
 * execute method
 *
 * @param mixed $sql
 * @access protected
 * @return void
 */
	function _execute($sql) {
		$this->simulated[] = $sql;
		return null;
	}
/**
 * fetchAll method
 *
 * @param mixed $sql
 * @access protected
 * @return void
 */
	function _matchRecords(&$model, $conditions = null) {
		return $this->conditions(array('id' => array(1, 2)));
	}
/**
 * fetchAll method
 *
 * @param mixed $sql
 * @access protected
 * @return void
 */
	function fetchAll($sql, $cache = true, $modelName = null) {
		$result = parent::fetchAll($sql, $cache, $modelName);
		if (!empty($this->fetchAllResultsStack)) {
    		return array_pop($this->fetchAllResultsStack);
		}
		return $result;
	}
/**
 * getLastQuery method
 *
 * @access public
 * @return void
 */
	function getLastQuery() {
		return $this->simulated[count($this->simulated) - 1];
	}
}
/**
 * MssqlTestModel class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.model.datasources
 */
class MssqlTestModel extends Model {
/**
 * name property
 *
 * @var string 'MssqlTestModel'
 * @access public
 */
	var $name = 'MssqlTestModel';
/**
 * useTable property
 *
 * @var bool false
 * @access public
 */
	var $useTable = false;
/**
 * find method
 *
 * @param mixed $conditions
 * @param mixed $fields
 * @param mixed $order
 * @param mixed $recursive
 * @access public
 * @return void
 */
	function find($conditions = null, $fields = null, $order = null, $recursive = null) {
		return $conditions;
	}
/**
 * findAll method
 *
 * @param mixed $conditions
 * @param mixed $fields
 * @param mixed $order
 * @param mixed $recursive
 * @access public
 * @return void
 */
	function findAll($conditions = null, $fields = null, $order = null, $recursive = null) {
		return $conditions;
	}
/**
 * schema method
 *
 * @access public
 * @return void
 */
	function schema() {
		$this->_schema = array(
			'id'		=> array('type' => 'integer', 'null' => '', 'default' => '', 'length' => '8'),
			'client_id'	=> array('type' => 'integer', 'null' => '', 'default' => '0', 'length' => '11'),
			'name'		=> array('type' => 'string', 'null' => '', 'default' => '', 'length' => '255'),
			'login'		=> array('type' => 'string', 'null' => '', 'default' => '', 'length' => '255'),
			'passwd'	=> array('type' => 'string', 'null' => '1', 'default' => '', 'length' => '255'),
			'addr_1'	=> array('type' => 'string', 'null' => '1', 'default' => '', 'length' => '255'),
			'addr_2'	=> array('type' => 'string', 'null' => '1', 'default' => '', 'length' => '25'),
			'zip_code'	=> array('type' => 'string', 'null' => '1', 'default' => '', 'length' => '155'),
			'city'		=> array('type' => 'string', 'null' => '1', 'default' => '', 'length' => '155'),
			'country'	=> array('type' => 'string', 'null' => '1', 'default' => '', 'length' => '155'),
			'phone'		=> array('type' => 'string', 'null' => '1', 'default' => '', 'length' => '155'),
			'fax'		=> array('type' => 'string', 'null' => '1', 'default' => '', 'length' => '155'),
			'url'		=> array('type' => 'string', 'null' => '1', 'default' => '', 'length' => '255'),
			'email'		=> array('type' => 'string', 'null' => '1', 'default' => '', 'length' => '155'),
			'comments'	=> array('type' => 'text', 'null' => '1', 'default' => '', 'length' => ''),
			'last_login'=> array('type' => 'datetime', 'null' => '1', 'default' => '', 'length' => ''),
			'created'	=> array('type' => 'date', 'null' => '1', 'default' => '', 'length' => ''),
			'updated'	=> array('type' => 'datetime', 'null' => '1', 'default' => '', 'length' => null)
		);
		return $this->_schema;
	}
}
/**
 * DboMssqlTest class
 *
 * @package       cake
 * @subpackage    cake.tests.cases.libs.model.datasources.dbo
 */
class DboMssqlTest extends CakeTestCase {
/**
 * The Dbo instance to be tested
 *
 * @var DboSource
 * @access public
 */
	var $db = null;
/**
 * Skip if cannot connect to mssql
 *
 * @access public
 */
	function skip() {
		$this->_initDb();
		$this->skipif ($this->db->config['driver'] != 'mssql', 'SQL Server connection not available');
	}
/**
 * Sets up a Dbo class instance for testing
 *
 * @access public
 */
	function setUp() {
		$db = ConnectionManager::getDataSource('test_suite');
		$this->db = new DboMssqlTestDb($db->config);
		$this->model = new MssqlTestModel();
	}
/**
 * tearDown method
 *
 * @access public
 * @return void
 */
	function tearDown() {
		unset($this->model);
	}

/**
 * testQuoting method
 *
 * @access public
 * @return void
 */
	function testQuoting() {
		$result = $this->db->fields($this->model);
		$expected = array(
			'[MssqlTestModel].[id] AS [MssqlTestModel__0]',
			'[MssqlTestModel].[client_id] AS [MssqlTestModel__1]',
			'[MssqlTestModel].[name] AS [MssqlTestModel__2]',
			'[MssqlTestModel].[login] AS [MssqlTestModel__3]',
			'[MssqlTestModel].[passwd] AS [MssqlTestModel__4]',
			'[MssqlTestModel].[addr_1] AS [MssqlTestModel__5]',
			'[MssqlTestModel].[addr_2] AS [MssqlTestModel__6]',
			'[MssqlTestModel].[zip_code] AS [MssqlTestModel__7]',
			'[MssqlTestModel].[city] AS [MssqlTestModel__8]',
			'[MssqlTestModel].[country] AS [MssqlTestModel__9]',
			'[MssqlTestModel].[phone] AS [MssqlTestModel__10]',
			'[MssqlTestModel].[fax] AS [MssqlTestModel__11]',
			'[MssqlTestModel].[url] AS [MssqlTestModel__12]',
			'[MssqlTestModel].[email] AS [MssqlTestModel__13]',
			'[MssqlTestModel].[comments] AS [MssqlTestModel__14]',
			'CONVERT(VARCHAR(20), [MssqlTestModel].[last_login], 20) AS [MssqlTestModel__15]',
			'[MssqlTestModel].[created] AS [MssqlTestModel__16]',
			'CONVERT(VARCHAR(20), [MssqlTestModel].[updated], 20) AS [MssqlTestModel__17]'
		);
		$this->assertEqual($result, $expected);

		$expected = "1.2";
		$result = $this->db->value(1.2, 'float');
		$this->assertIdentical($expected, $result);

		$expected = "'1,2'";
		$result = $this->db->value('1,2', 'float');
		$this->assertIdentical($expected, $result);
	}
/**
 * testDistinctFields method
 *
 * @access public
 * @return void
 */
	function testDistinctFields() {
		$result = $this->db->fields($this->model, null, array('DISTINCT Car.country_code'));
		$expected = array('DISTINCT [Car].[country_code] AS [Car__0]');
		$this->assertEqual($result, $expected);

		$result = $this->db->fields($this->model, null, 'DISTINCT Car.country_code');
		$expected = array('DISTINCT [Car].[country_code] AS [Car__1]');
		$this->assertEqual($result, $expected);
	}
/**
 * testDistinctWithLimit method
 *
 * @access public
 * @return void
 */
	function testDistinctWithLimit() {
		$this->db->read($this->model, array(
			'fields' => array('DISTINCT MssqlTestModel.city', 'MssqlTestModel.country'),
			'limit' => 5
		));
		$result = $this->db->getLastQuery();
		$this->assertPattern('/^SELECT DISTINCT TOP 5/', $result);
	}
/**
 * testDescribe method
 *
 * @access public
 * @return void
 */
	function testDescribe() {
		$MssqlTableDescription = array(
			0 => array(
				0 => array(
					'Default' => '((0))',
					'Field' => 'count',
					'Key' => 0,
					'Length' => '4',
					'Null' => 'NO',
					'Type' => 'integer',
				)
			)
		);
		$this->db->fetchAllResultsStack = array($MssqlTableDescription);
		$dummyModel = $this->model;
		$result = $this->db->describe($dummyModel);
		$expected = array(
			'count' => array(
				'type' => 'integer',
				'null' => false,
				'default' => '0',
				'length' => 4
			)
		);
		$this->assertEqual($result, $expected);
	}
/**
 * testUpdateAllSyntax method
 *
 * @return void
 * @access public
 */
	function testUpdateAllSyntax() {
		$model = ClassRegistry::init('MssqlTestModel');
		$fields = array('MssqlTestModel.client_id' => '[MssqlTestModel].[client_id] + 1');
		$conditions = array('MssqlTestModel.updated <' => date('2009-01-01 00:00:00'));
		$this->db->update($model, $fields, null, $conditions);

		$result = $this->db->getLastQuery();
		$this->assertNoPattern('/MssqlTestModel/', $result);
		$this->assertPattern('/^UPDATE \[mssql_test_models\]/', $result);
		$this->assertPattern('/SET \[client_id\] = \[client_id\] \+ 1/', $result);
	}
}
?>