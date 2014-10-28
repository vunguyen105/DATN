<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		echo "Nguyen";die;
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */






<?php
/*
 * This file is completed/ This file is modifying/ This file is pending because of ticket [PORTAL_AUTO_TEST_xx][ PORTAL_AUTO_TEST_yy].
 * [Optional]
 * Completed function: test_function_01; test_function_02…; test function_n
 */
App::import('Component', 'SampleComponent');
App::import('Component', 'Session');
App::import('Helper', 'Unext');

/**
 * SampleTest
 */
class SampleTest extends PHPUnit_Framework_TestCase
{
	protected $object;

	protected function setUp()
	{
		$this->object = new SampleComponent();
	}

	/**
	 * @dataProvider getProvider
	 */
	public function test_get($userAgent,$expected)
	{
		$actual = $this->object->get($userAgent);
		$this->assertEquals($expected, $actual[RESPONSE_CODE]);
	}

	public function getProvider()
	{
		$expectResult = array(
				COMMON_RESULT_SUCCESS => COMMON_RESULT_SUCCESS,
				COMMON_RESULT_REQUIRED_ERROR => COMMON_RESULT_REQUIRED_ERROR
		);
		return array(
				//test case for return value at line XXX
				array('Mozilla/5.0 (iPad; CPU OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5355d Safari/8536.25',$expectResult[COMMON_RESULT_SUCCESS]),
				/**
			     * TODO
			     * PORTAL_AUTO_TEST-XX
			     * テストの内容 : Line X ~ Y
			     * テストが出来ない理由 : Undefined variable: examvar [APP/controllers/components/sample.php, line XXX]
			     * 「アプリケーション側のバグのため非対応」
			     */
				//array('',$expectResult[COMMON_RESULT_REQUIRED_ERROR])
		);
	}
	
	/**
	 * @dataProvider _protectedMethodProvider
	 */
	public function test__protectedMethod($userAgent,$expected)
	{
		$reflector = new ReflectionClass('SampleComponent');
		$method = $reflector->getMethod('_protectedMethod');
		$method->setAccessible(true);
		$actual = $method->invokeArgs($this->object,array($userAgent));
		$this->assertEquals($expected, $actual[RESPONSE_CODE]);
	}
	
	public function _protectedMethodProvider()
	{
		$expectResult = array(
				COMMON_RESULT_SUCCESS => COMMON_RESULT_SUCCESS,
				COMMON_RESULT_REQUIRED_ERROR => COMMON_RESULT_REQUIRED_ERROR
		);
		return array(
				//test case for return value at line XXX
				array('Mozilla/5.0 (iPad; CPU OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5355d Safari/8536.25',$expectResult[COMMON_RESULT_SUCCESS]),
				//test case for return value at line YYY
				array('',$expectResult[COMMON_RESULT_REQUIRED_ERROR]),
		);
	}
	
	/**
	 * @dataProvider getArrayDBProvider
	 */
	public function test_getArrayDB($param)
	{
		$actual = $this->object->getArrayDB($param);
		//assert size array greater than 0 if response array has a lot of value from DB
		$this->assertGreaterThan(count($actual),0);
	}

	public function getArrayDBProvider()
	{
		return array(
				array('param')
		);
	}
	
	/**
	 * @dataProvider getMultiCaseMethod_1Provider
	 */
	public function test_getMultiCaseMethod_1($param,$expected)
	{
		$actual = $this->object->getMultiCaseMethod($param);
		$this->assertEquals($expected, $actual[RESPONSE_CODE]);
	}

	public function getMultiCaseMethod_1Provider()
	{
		$expectResult = array(
				COMMON_RESULT_SUCCESS => COMMON_RESULT_SUCCESS,
				COMMON_RESULT_REQUIRED_ERROR => COMMON_RESULT_REQUIRED_ERROR
		);
		return array(
				//test case for return value at line XXX
				array('param',$expectResult[COMMON_RESULT_SUCCESS]),
		);
	}
	
	/**
	 * @dataProvider getMultiCaseMethod_2Provider
	 */
	public function test_getMultiCaseMethod_2($param,$expected)
	{
		$_SERVER['HTTP_USER_AGENT'] = '__WGET_PROMO__';
		$actual = $this->object->getMultiCaseMethod($param);
		$this->assertEquals($expected, $actual[RESPONSE_CODE]);
	}

	public function getMultiCaseMethod_2Provider()
	{
		$expectResult = array(
				COMMON_RESULT_SUCCESS => COMMON_RESULT_SUCCESS,
				COMMON_RESULT_REQUIRED_ERROR => COMMON_RESULT_REQUIRED_ERROR
		);
		return array(
				//test case for return value at line XXX
				array('param',$expectResult[COMMON_RESULT_SUCCESS]),
		);
	}
}
