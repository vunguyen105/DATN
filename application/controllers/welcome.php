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


<?php

App::import('Component', 'BaseComponent');
App::import('Component', 'Util');
App::import('Component', 'Account');
App::import('Component', 'Util');
App::import('Component', 'HenseiLogin');
App::import('Component', 'HenseiLoginAdult');
App::import('Component', 'NsboAuth');
App::import('Component', 'NsboActivate');
App::import('Component', 'NsboCampaign');
App::import('Component', 'NsboPoint');
App::import('Component', 'NsboUserChange');
App::import('Component', 'NsboUserSearch');
App::import('Component', 'NsboUserEmailaddressChange');
App::import('Component', 'NsboMultiAccount');
App::import('Component', 'UserSetting');
App::import('Component', 'ApplyService');
App::import('Component', 'Campaign');
App::import('Component', 'NsboSalesPurchase');
App::import('Component', 'CmsProduct');
App::import('Component', 'Parentallock');
App::import('Component', 'NsboParentallock');
App::import('Component', 'NsboUserSettingUpdate');
App::import('Component', 'Genre');
App::import('Component', 'RelationMenu');
App::import('Component', 'RelationGenre');
App::import('Component', 'RelationSubCategory');
App::import('Component', 'RelationTitleGenreRel');
App::import('Component', 'BannerFeature');
App::import('Component', 'BannerEyecatchBnr');
App::import('Component', 'BannerGenreBnr');
App::import('Component', 'BannerGenreBnrSp');
App::import('Component', 'RankingTheme');
App::import('Component', 'Title');
App::import('Component', 'CmsGenre');
App::import('Component', 'Session');
App::import('Component', 'Cookie');

/**
 * UtilComponentTest
 */
class UtilComponentTest extends PHPUnit_Framework_TestCase {

    protected $object;

    protected function setUp() {
        $this->object = new UtilComponent();
        $this->object->Account = new AccountComponent();
        $this->object->Account->Util = new UtilComponent();
        // TODO Session Component test. Mock test?
        //$this->object->Account->Session = new SessionComponent();
        $this->object->Account->HenseiLogin = new HenseiLoginComponent();
        $this->object->Account->HenseiLoginAdult = new HenseiLoginAdultComponent();
        $this->object->Account->NsboAuth = new NsboAuthComponent();
        $this->object->Account->NsboActivate = new NsboActivateComponent();
        $this->object->Account->NsboCampaign = new NsboCampaignComponent();
        $this->object->Account->NsboPoint = new NsboPointComponent();
        $this->object->Account->NsboUserChange = new NsboUserChangeComponent();
        $this->object->Account->NsboUserSearch = new NsboUserSearchComponent();
        $this->object->Account->NsboUserEmailaddressChange = new NsboUserEmailaddressChangeComponent();
        $this->object->Account->NsboMultiAccount = new NsboMultiAccountComponent();
        $this->object->Account->UserSetting = new UserSettingComponent();
        $this->object->Account->ApplyService = new ApplyServiceComponent();
        $this->object->Account->Campaign = new CampaignComponent();
        $this->object->NsboSalesPurchase = new NsboSalesPurchaseComponent();
        $this->object->CmsProduct = new CmsProductComponent();
        // TODO Session Component test. Mock test?
        $this->object->Session = new SessionComponent();
        // TODO Session Component test. Mock test?
        //$this->object->Session = new SessionComponent();
        $this->object->Parentallock = new ParentallockComponent();
        $this->object->Parentallock->Util = new UtilComponent();
        $this->object->Parentallock->NsboParentallock = new NsboParentallockComponent();
        $this->object->Parentallock->NsboUserSettingUpdate = new NsboUserSettingUpdateComponent();
        $this->object->Genre = new GenreComponent();
        $this->object->Genre->Util = new UtilComponent();
        $this->object->Genre->RelationMenu = new RelationMenuComponent();
        $this->object->Genre->RelationGenre = new RelationGenreComponent();
        $this->object->Genre->RelationSubCategory = new RelationSubCategoryComponent();
        $this->object->Genre->RelationTitleGenreRel = new RelationTitleGenreRelComponent();
        // TODO Session Component test. Mock test?
        //$this->object->Genre->Session = new SessionComponent();
        $this->object->Genre->BannerFeature = new BannerFeatureComponent();
        $this->object->Genre->BannerEyecatchBnr = new BannerEyecatchBnrComponent();
        $this->object->Genre->BannerGenreBnr = new BannerGenreBnrComponent();
        $this->object->Genre->BannerGenreBnrSp = new BannerGenreBnrSpComponent();
        $this->object->Genre->RankingTheme = new RankingThemeComponent();
        $this->object->Genre->Title = new TitleComponent();
        $this->object->Genre->CmsGenre = new CmsGenreComponent();
        $this->object->Cookie = new CookieComponent();
    }

    protected function tearDown() {
        
    }

    /**
     * @dataProvider distinctionDeviceTypeProvider
     */
    public function test_distinctionDeviceType($userAgent, $expect) {
        $result = $this->object->distinctionDeviceType($userAgent);
        if ($expect[RESPONSE_CODE] == COMMON_RESULT_SYSTEM_ERROR) {
            $this->assertEquals($result, $expect);
        } else {
            $this->assertEquals($result['deviceInfo']['deviceType'], $expect['deviceInfo']['deviceType']);
        }
    }

    public function distinctionDeviceTypeProvider() {
        return array(
            array('', array(
                    RESPONSE_CODE => COMMON_RESULT_SYSTEM_ERROR,
                    RESPONSE_MESSAGE => COMMON_RESULT_SYSTEM_ERROR_MESSAGE,
                    RESPONSE_CODE_NSBO => '')),
            array('Opera/9.80 (Linux mips; U; WoooRemote/2.2 (00014A;SonyDTV115;0002;0100) KDL26EX320; CC/HUN; en) Presto/2.7.61 Version/11.00',
                array(RESPONSE_CODE => COMMON_RESULT_SUCCESS,
                    'deviceInfo' => array('deviceType' => DEVICE_DTV))),
            array('Mozilla/5.0 (iPad; U; CPU OS 3_2_2 like Mac OS X; nl-nl) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B500 Safari/531.21.10',
                array(RESPONSE_CODE => COMMON_RESULT_SUCCESS,
                    'deviceInfo' => array('deviceType' => DEVICE_TABLET))),
            array('Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_2 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Mobile/11A501',
                array(RESPONSE_CODE => COMMON_RESULT_SUCCESS,
                    'deviceInfo' => array('deviceType' => DEVICE_SMART_PHONE))),
            array('AVLCE', array(RESPONSE_CODE => COMMON_RESULT_SUCCESS,
                    'deviceInfo' => array('deviceType' => DEVICE_STB)))
        );
    }

    /**
     * @dataProvider requiredParametersCheckProvider
     */
    public function test_requiredParametersCheck($args, $expected) {
        $result = $this->object->requiredParametersCheck($args);

        $this->assertEquals($result, $expected);
    }

    public function requiredParametersCheckProvider() {
        return array(
            array(NULL, false),
            array(array(0, NULL), false),
            array(array(1, '', 3), false),
            array('', false),
            array(1, true),
            array(array(1, 2), true)
        );
    }

    public function test_convertSimpleArray() {
        $list = array(
            array('BookName' => 'NewComic', 'BookProduct' => array('fi_book_id' => 5)),
            array('BookName' => 'Novel', 'BookProduct' => array('fi_book_id' => 1))
        );
        $expect = array(5, 1);
        $result = $this->object->convertSimpleArray($list, 'BookProduct', 'fi_book_id');
        $this->assertEquals($result, $expect);
    }

    /**
     * @dataProvider isValidDateProvider
     * @param unknown $startDate
     * @param unknown $endDate
     * @param unknown $expect
     */
    public function test_isValidDate($startDate, $endDate, $expect) {
        $result = $this->object->isValidDate($startDate, $endDate);
        $this->assertEquals($result, $expect);
    }

    public function isValidDateProvider() {
        $nowDate = date('Y/m/d H:i:s');
        $yesterday = date('Y/m/d H:i:s', strtotime('-1 day'));
        $tomorrow = date('Y/m/d H:i:s', strtotime('+1 day'));
        return array(
            array($yesterday, $tomorrow, true),
            array($tomorrow, $yesterday, false),
        );
    }

    /**
     * @dataProvider isValidDateUnspecifiedProvider
     * @param unknown $startDate
     * @param unknown $endDate
     * @param unknown $expect
     */
    public function test_isValidDateUnspecified($startDate, $endDate, $expect) {
        $result = $this->object->isValidDateUnspecified($startDate, $endDate);
        $this->assertEquals($result, $expect);
    }

    public function isValidDateUnspecifiedProvider() {
        $nowDate = date('Y/m/d H:i:s');
        $yesterday = date('Y/m/d H:i:s', strtotime('-1 day'));
        $tomorrow = date('Y/m/d H:i:s', strtotime('+1 day'));
        return array(
            array('', '', 0),
            array($yesterday, $tomorrow, 0),
            array($tomorrow, $nowDate, -1),
            array($nowDate, $yesterday, 1)
        );
    }

    public function test_isWoooRemote() {
        $this->assertEquals($this->object->isWoooRemote('Opera/9.80 (Linux mips; U; WoooRemote/2.2 (00014A;SonyDTV115;0002;0100) KDL26EX320; CC/HUN; en) Presto/2.7.61 Version/11.00'), 1);
        $this->assertEquals($this->object->isWoooRemote('Opera/9.80 (Linux mips; U; InettvBrowser/2.2 (00014A;SonyDTV115;0002;0100) KDL26EX320; CC/HUN; en) Presto/2.7.61 Version/11.00'), 0);
    }

    public function test_isKindleFire() {
        $this->assertEquals($this->object->isKindleFire('Mozilla/5.0 (Linux; U; Android 4.0.3; en-us; KFTT Build/IML74K) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30'), 1);
        $this->assertEquals($this->object->isKindleFire('Mozilla/5.0 (Linux; U; Android 4.0.3; en-us; KFTT Build/IML74K) AppleWebKit/535.19 (KHTML, like Gecko) Silk/3.4 Mobile Safari/535.19 Silk-Accelerated=true'), 1);
        $this->assertEquals($this->object->isKindleFire('Opera/9.80 (Linux mips; U; InettvBrowser/2.2 (00014A;SonyDTV115;0002;0100) KDL26EX320; CC/HUN; en) Presto/2.7.61 Version/11.00'), 0);
    }

    /**
     * @dataProvider getWoooRemoteThemeProvider
     */
    public function test_getWoooRemoteTheme($userAgent, $expected) {
        $result = $this->object->getWoooRemoteTheme($userAgent);

        $this->assertEquals($result, $expected);
    }

    public function getWoooRemoteThemeProvider() {
        return array(
            array('Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_2 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Mobile/11A501', THEME_SMART_PHONE),
            array('Mozilla/5.0 (iPod touch; CPU iPhone OS 7_1_1 like Mac OS X) AppleWebKit/537.51.2 (KHTML, like Gecko) Version/7.0 Mobile/11D201 Safari/9537.53', THEME_SMART_PHONE),
            array('Mozilla/5.0 (iPad; CPU OS 7_1_1 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) CriOS/35.0.1916.38 Mobile/11D201 Safari/9537.53 (000575)', THEME_TABLET),
            array('Mozilla/5.0 (Linux; Android 4.3; SM-N900V Build/JSS15J) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.92 Mobile Safari/537.36', THEME_SMART_PHONE),
            array('Mozilla/5.0 (Linux; U; Android 4.2.2; nl-nl; SM-T310 Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30', THEME_TABLET),
            array('Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; NOKIA; Lumia 810)', THEME_SMART_PHONE)
        );
    }

    public function test_isAndroidByUserAgent() {
        $this->assertEquals($this->object->isAndroidByUserAgent('Linux; Android 4.3; SM-N900V Build/JSS15J) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.92 Mobile Safari/537.36'), 1);
        $this->assertEquals($this->object->isAndroidByUserAgent('Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; NOKIA; Lumia 810)'), 0);
    }

    public function test_isOldAndroid() {
        $this->assertEquals($this->object->isOldAndroid('Mozilla/5.0 (Linux; Android 4.3; SM-N900V Build/JSS15J) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.92 Mobile Safari/537.36'), false);
        $this->assertEquals($this->object->isOldAndroid('Mozilla/5.0 (Linux; U; Android 2.3.5; nl-nl; GT-I9100 Build/GINGERBREAD) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1'), true);
    }

    public function test_isOldIOS() {
        $this->assertEquals($this->object->isOldIOS('Mozilla/5.0 (iPad; U; CPU OS 3_2_2 like Mac OS X; nl-nl) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B500 Safari/531.21.10'), true);
        $this->assertEquals($this->object->isOldIOS('Mozilla/5.0 (iPhone; CPU iPhone OS 7_0_2 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) Mobile/11A501'), false);
    }

    /**
     * @dataProvider checkRelateIdProvider
     */
    public function test_checkRelateId($relateId, $expect) {
        $result = $this->object->checkRelateId($relateId);
        $this->assertEquals($result, $expect);
    }

    public function checkRelateIdProvider() {
        return array(
            array("", false),
            array("12afDn", true),
            array("12345678901234567890asd", false)
        );
    }

    public function test_isChild() {
        $this->object->Session->write(SESSION_NAME_ACCOUNT_DIV, 1);
        $result = $this->object->isChild();
        $this->assertTrue($result);

        $this->object->Session->write(SESSION_NAME_ACCOUNT_DIV, 0);
        $result = $this->object->isChild();
        $this->assertFalse($result);
    }

    /**
     * @dataProvider isBookPlaceServiceLinkedProvider
     */
    public function test_isBookPlaceServiceLinked($otherServiceList, $multiAccountId, $expect) {
        $result = $this->object->isBookPlaceServiceLinked($otherServiceList, $multiAccountId);
        $this->assertEquals($result, $expect);
    }

    public function isBookPlaceServiceLinkedProvider() {
        return array(
            array(null, "", false),
            array(array(array('otherServiceType' => '102', 'userMultiAccountId' => 5)), 5, true),
            array(array('otherServiceType' => '102', 'userMultiAccountId' => 5), 6, false)
        );
    }

    // 	/**
    // 	 * @dataProvider getContentFormatListProvider
    // 	 */
    // 	public function test_getContentFormatList($userAgent, $result)
    // 	{
    // 		$result = $this->object->getContentFormatList($userAgent);
    // 		$this->assertEquals($result, $expect);
    // 	}
    // 	public function getContentFormatListProvider()
    // 	{
    // 		$smartAndroid = 'Mozilla/5.0 (Linux; Android 4.3; SM-N900V Build/JSS15J) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.92 Mobile Safari/537.36';
    // 		$tabletAndroid = 'Mozilla/5.0 (Linux; U; Android 4.2.2; nl-nl; SM-T310 Build/JDQ39) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 Safari/534.30';
    // 		'Mozilla/5.0 (iPad; CPU OS 712 like Mac OS X) AppleWebKit/537.51.2 (KHTML like Gecko) Mobile/11D257 TwonkyBeamBrowser/3.6.0-72 (iPad iOS Ver:7.1.2) ';
    // 	}

    public function test_isPlayVerifyLinked() {
        $this->object->Session->write(SESSION_NAME_USER_OTHER_FUNCTION_TYPE, OTHER_SERVICE_TYPE_PLAY_VERIFICATION);
        $this->assertTrue($this->object->isPlayVerifyLinked());
    }

    public function test___isNoPiboFalse() {
        //		$_ENV['HTTP_USER_AGENT'] = 'Mozilla/5.0 (compatible; MSIE 10.6; Windows NT 6.1; Trident/5.0; InfoPath.2; SLCC1; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 2.0.50727) 3gpp-gba UNTRUSTED/1.0';
        $this->assertFalse($this->object->__isNoPibo());
    }

    public function test_checkPlayableDeviceInUnextApp() {
        $userAgent = "Mozilla/5.0(iPhone;U;CPUiPhoneOS4_0likeMacOSX;en-us)AppleWebKit/532.9(KHTML,likeGecko)Version/4.0.5Mobile/8A293Safari/6531.22.7";
        $this->object->checkPlayableDeviceInUnextApp($userAgent);
        $txt = "iPhone";
        $path = ROOT . DS . 'inner' . DS . 'unext_player_app' . DS . 'ng_device_list';
        if (file_exists($path)) {
            rename($path, $path . 'tmp');
        }

        $myfile = fopen($path, "w");
        fwrite($myfile, "abc");
        fclose($myfile);

        $this->assertTrue($this->object->checkPlayableDeviceInUnextApp($userAgent));

        $myfile = fopen($path, "w");

        fwrite($myfile, $txt);
        fclose($myfile);
        $this->assertFalse($this->object->checkPlayableDeviceInUnextApp($userAgent));

        unlink($path);
        if (file_exists($path . 'tmp')) {
            rename($path . 'tmp', $path);
        }
    }

    public function test_getBookWithErrorList() {
        $txt = "bookwitherrorlist";
        $path = ROOT . DS . 'inner' . DS . 'bp4u' . DS . 'book_with_error_list';
        if (file_exists($path)) {
            rename($path, $path . 'tmp');
        }


        $myfile = fopen($path, "w");

        fwrite($myfile, $txt);
        $result = $this->object->getBookWithErrorList();
        $this->assertEquals($result[0], $txt);
        fclose($myfile);

        unlink($path);
        if (file_exists($path . 'tmp')) {
            rename($path . 'tmp', $path);
        }
    }

    public function test_getUsenWithErrorList() {
        $txt = "usenwitherrorlist";
        $path = ROOT . DS . 'inner' . DS . 'usen' . DS . 'usen_with_error_list';
        if (file_exists($path)) {
            rename($path, $path . 'tmp');
        }

        $myfile = fopen($path, "w");

        fwrite($myfile, $txt);
        $result = $this->object->getUsenWithErrorList();
        $this->assertEquals($result[0], $txt);
        fclose($myfile);

        unlink($path);
        if (file_exists($path . 'tmp')) {
            rename($path . 'tmp', $path);
        }
    }

    public function test_getSlEggCookieId() {
        $this->object->getSlEggCookieId();
    }

    /**
     * @dataProvider createSpecId
     */
    public function test_createSpecId($serviceId, $contentsType, $recomendType, $isAccumulation, $categoryId) {
        $this->object->createSpecId($serviceId, $contentsType, $recomendType, $isAccumulation, $categoryId);
    }

    public function createSpecId() {
        return array(
            //array(""),
            array(SERVICE_ID_TYPE_ANDROID_APP, CONTENTS_TYPE_ADULT, "B3cc", null, null),
            array(SERVICE_ID_TYPE_ANDROID_STB_APP, CONTENTS_TYPE_ACCUMULATION, "aac", null, null),
            array(SERVICE_ID_TYPE_ANDROID_TAB_APP, CONTENTS_TYPE_ACCUMULATION, "aac", null, null),
            array(SERVICE_ID_TYPE_PORTAL_APP, CONTENTS_TYPE_BOOK, null, null, "BGDx", null, null),
            array(SERVICE_ID_TYPE_PORTAL_APP, CONTENTS_TYPE_BOOK, "b4", null, CATEGORY_ID_BOOK, null, null),
            array(SERVICE_ID_TYPE_PORTAL_APP, CONTENTS_TYPE_BOOK, "b5", null, "abc", null, null),
            array(SERVICE_ID_TYPE_ANDROID_STB_APP, CONTENTS_TYPE_KIDS, "B3c", null, null),
            array(SERVICE_ID_TYPE_ANDROID_STB_APP, CONTENTS_TYPE_KIDS, "BGDx", null, null)
        );
    }

    public function test_isBookPlace() {
        $this->object->isBookPlace();
    }

    public function test_accesstradeSocket() {
        $this->object->accesstradeSocket();
    }

    /**
     * @dataProvider distinctionServiceType
     */
    public function test_distinctionServiceType() {
        $this->object->distinctionServiceType();
    }

    public function distinctionServiceType() {
        return array(
            array(""),
            array("920")
        );
    }

    /**
     * @dataProvider distinctionSiteCode
     */
    public function test_distinctionSiteCode() {
        $this->object->distinctionSiteCode();
    }

    public function distinctionSiteCode() {
        return array(
        );
    }

    /**
     * @dataProvider checkZipCode
     */
    public function test_checkZipCode($zipCode) {
        $this->object->checkZipCode($zipCode);
    }

    public function checkZipCode() {
        return array(
            array(""),
            array("0010000"),
            array("99974837842784738247827384782378")
        );
    }

    /**
     * @dataProvider checkFactCode
     */
    public function test_checkFactCode($factCode) {
        $this->object->checkFactCode($factCode);
    }

    public function checkFactCode() {
        return array(
            array(""),
            array("1001060001"),
            array("99974837842784738247827384782378")
        );
    }

    /**
     * @dataProvider isAvailablePurchase
     */
    public function test_isAvailablePurchase($userInfo) {
        //$var = array("platformList"=>array(array("contDetailSettlement"=>PAY_NON,"carrierFlag" => true)));
        //$var = array("platformList"=>array(array("contDetailSettlement"=>90,"carrierFlag" => true))
        //);
        //var_dump($var['platformList'][0]['contDetailSettlement']);die;
        $this->object->isAvailablePurchase($userInfo);
    }

    public function isAvailablePurchase() {
        return array(
            array("userInfo" => array("platformList" => array(array("contDetailSettlement" => PAY_NON, "carrierFlag" => true)))
            ),
            array("userInfo" => array("platformList" => array(array("contDetailSettlement" => 10, "carrierFlag" => true)))
            )
        );
    }

    /**
     * @dataProvider isParentalLocked
     */
    public function test_isParentalLocked($parentalLockType, $adultFlg) {
        $this->object->isParentalLocked($parentalLockType, $adultFlg);
    }

    public function isParentalLocked() {
        return array(
            array(PARENTAL_R15, 0),
            array(PARENTAL_R18, 1),
            array(PARENTAL_R20, 2),
            array(PARENTAL_ADULT, 3),
            array(PARENTAL_RELEASE, 4),
            array(PARENTAL_R20, 5),
            array(10, 5)
        );
    }

    /**
     * @dataProvider isPlayableAdult
     */
    public function test_isPlayableAdult($userInfo) {
        $this->object->isPlayableAdult($userInfo);
    }

    public function isPlayableAdult() {
        return array(
            array("userInfo" => array("platformList" => array(array("contDetailSettlement" => PAY_NON, "carrierFlag" => true)))
            ),
            array("userInfo" => array("platformList" => array(array("contDetailSettlement" => 10, "carrierFlag" => true)))
            )
        );
    }

    /**
     * @dataProvider distinctionContentsType
     */
    public function test_distinctionContentsType($contentsInfo) {
        $this->object->distinctionContentsType($contentsInfo);
    }

    public function distinctionContentsType() {
        return array(
            array("contentsInfo" => array("Content" => array("fi_adult_flg" => 9, "fi_title_id" => KARAOKE_TITLE_ID))),
            array("contentsInfo" => array("Content" => array("fi_adult_flg" => 1, "fi_title_id" => KARAOKE_TITLE_ID))),
            array("contentsInfo" => array("Content" => array("fi_adult_flg" => 10, "fi_title_id" => 12345)))
        );
    }

    /**
     * @dataProvider isRegistSityouHistory
     */
    public function test_isRegistSityouHistory($contentsInfo, $historySetting) {
        $this->object->isRegistSityouHistory($contentsInfo, $historySetting);
    }

    public function isRegistSityouHistory() {
        $contentsInfo = array("Content" => array("fi_adult_flg" => 9, "fi_title_id" => KARAOKE_TITLE_ID));
        $historySetting = array("playHistAdult" => 1, "playHistKaraoke" => 2, "playHistVideo" => 3);
        $contentsInfo2 = array("Content" => array("fi_adult_flg" => 1, "fi_title_id" => KARAOKE_TITLE_ID));
        $historySetting2 = array("playHistAdult" => 1, "playHistKaraoke" => 2, "playHistVideo" => 3);
        $contentsInfo3 = array("Content" => array("fi_adult_flg" => 10, "fi_title_id" => 12345));
        $historySetting3 = array("playHistAdult" => 1, "playHistKaraoke" => 2, "playHistVideo" => 3);
        return
                array(
                    array('', ''),
                    array($contentsInfo, $historySetting),
                    array($contentsInfo2, $historySetting2),
                    array($contentsInfo3, $historySetting3),
        );
    }

    /**
     * @dataProvider distinctionClientApplicationType
     */
    /* public function test_distinctionContentsType($userInfo)
      {
      $this->object->distinctionClientApplicationType($userInfo);
      }
      public function distinctionClientApplicationType()
      {
      return array(
      );
      }
     */

    /**
     * @dataProvider isHikariBox
     */
    public function test_isHikariBox($userAgent) {
        $this->object->isHikariBox($userAgent);
    }

    public function isHikariBox() {
        $userAgent = "xyz" . HIKARI_BOX_PATTERN_HB_1000 . "abc";
        return array(
            "",
            $userAgent
        );
    }

    /**
     * @dataProvider changeSampleBitrateList
     */
    public function test_changeSampleBitrateList($bitrateList, $contentsType) {
        $this->object->changeSampleBitrateList($bitrateList, $contentsType);
    }

    public function changeSampleBitrateList() {
        return
                array(
                    array(1, 33),
                    array(2, 34)
        );
    }

    /**
     * @dataProvider getStaticBitrateList
     */
    public function test_getStaticBitrateList($contentsType, $siteCode) {
        $this->object->getStaticBitrateList($contentsType, $siteCode);
    }

    public function getStaticBitrateList() {
        return
                array(
                    array(33, 145),
                    array(34, 22232323)
        );
    }

    /**
     * @dataProvider isGuestUser
     */
    public function test_isGuestUser($userInfo,$expect) {
        $this->object->isGuestUser($userInfo);
    }

    public function isGuestUser() {
        return array(
            array("userInfo" => array("platformList" => array(array("siteCode" => SITECD_MOVIE_CARD, "carrierFlag" => true)))
            ),
            array("userInfo" => array("platformList" => array(array("siteCode" => 10, "carrierFlag" => true)))
            )
        );
    }

    /**
     * @dataProvider checkVODContDetail
     */
    public function test_checkVODContDetail($authCodeList,$expect) {
        //var_dump($authCodeList);die;
       // $this->object->checkVODContDetail($authCodeList);
        $result = $this->object->checkVODContDetail($authCodeList);
        $this->assertEquals($result, $expect);
    }

    public function checkVODContDetail() {
        return array(
            array(null, false),
            array(array(100, 200, 300),true),
        );
    }

    /**
     * @dataProvider checkPPVPurchase
     */
    public function test_checkPPVPurchase($userId, $userPlatformId, $multiAccountId, $purchaseHistory) {
        $this->object->checkPPVPurchase($userId, $userPlatformId, $multiAccountId, $purchaseHistory);
    }

    public function checkPPVPurchase() {
        return array(
            array(),
            array(1, 2),
                //array('222','333','100')
        );
    }

    /**
     * @dataProvider isMovieCardUser
     */
    public function test_isMovieCardUser($userId, $userPlatformId, $multiAccountId, $userAgent, $userInfo) {
        $this->object->isMovieCardUser($userId, $userPlatformId, $multiAccountId, $userAgent, $userInfo);
    }

    public function isMovieCardUser() {
        return array(
            array(),
            array(1, 2),
            array('100', '200', '222', '', '', array('platformList' => 1))
        );
    }

    /**
     * @dataProvider checkPpdPurchase
     */
    public function test_checkPpdPurchase($userId, $userPlatformId, $multiAccountId) {
        $this->object->checkPpdPurchase($userId, $userPlatformId, $multiAccountId);
    }

    public function checkPpdPurchase() {
        return array(
            array(),
            array(1, 2),
            array('100', '200', '222')
        );
    }

    /**
     * @dataProvider chkAndroidVersion
     */
    public function test_chkAndroidVersion($userAgent) {
        $this->object->chkAndroidVersion($userAgent);
      //  $this->assertEquals($result, $expect);
    }

    public function chkAndroidVersion() {

        return array(
            array(''),
            array('AVLCE', false),
            array('Opera/9.80 (Linux mips; U; InettvBrowser/2.2 (00014A;SonyDTV115;0002;0100) KDL26EX320; CC/HUN; en) Presto/2.7.61 Version/11.00', true),
            array('Mozilla/5.0 (iPod touch; CPU iPhone OS 7_1_1 like Mac OS X) AppleWebKit/537.51.2 (KHTML, like Gecko) Version/7.0 Mobile/11D201 Safari/9537.53'),
            array('Mozilla/5.0 (iPad; CPU OS 7_1_1 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) CriOS/35.0.1916.38 Mobile/11D201 Safari/9537.53 (000575)'),
        );
    }

    /**
     * @dataProvider _determineDeviceTypeByUA
     */
    public function test__determineDeviceTypeByUA($userAgent, $expected) {
        $reflector = new ReflectionClass('UtilComponent');
        $method = $reflector->getMethod('_determineDeviceTypeByUA');
        $method->setAccessible(true);
        $actual = $method->invokeArgs($this->object, array($userAgent));
        $this->assertEquals($expected, $expect);
//       $result = $this->object->_determineDeviceTypeByUA($userAgent);
//
//        $this->assertEquals($result, $expected);
    }

    public function _determineDeviceTypeByUA() {

        return array(
            // array(''),
            array('AVLCE'),
            array('Opera/9.80 (Linux mips; U; InettvBrowser/2.2 (00014A;SonyDTV115;0002;0100) KDL26EX320; CC/HUN; en) Presto/2.7.61 Version/11.00'),
                //array('Mozilla/5.0 (iPod touch; CPU iPhone OS 7_1_1 like Mac OS X) AppleWebKit/537.51.2 (KHTML, like Gecko) Version/7.0 Mobile/11D201 Safari/9537.53'),
                //array('Mozilla/5.0 (iPad; CPU OS 7_1_1 like Mac OS X) AppleWebKit/537.51.1 (KHTML, like Gecko) CriOS/35.0.1916.38 Mobile/11D201 Safari/9537.53 (000575)'),
                // array('Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322) SonyBrowserCore/2.30.7.0.0.3 (Silk) InettvBrowser/2.2 (00014A;SonyDTV095;0001;0500) 2010BRAVIA'),
        );
    }

}




























<?php
/**
 * ã��ã�®ä»–ã�®å‡¦ç�†
 *
 * @package app.controllers.components
 * @access  public
 * @author
 * @version 1.0
 **/
App::import('Component', 'BaseComponent');
class UtilComponent extends BaseComponent {

	var $components = array('Account', 'NsboSalesPurchase', 'CmsProduct', 'Session', 'Cookie', 'Parentallock', 'Genre');

	const CONTENTS_THUMBNAIL_DIR = '/www/'; //ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ç”»åƒ�URLåŠ å·¥ç”¨(DIR)
	const CONTENTS_SUFIX = '_m'; //ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ç”»åƒ�URLåŠ å·¥ç”¨(ã‚µãƒ•ã‚£ãƒƒã‚¯ã‚¹)

	const SPEC_ID_DEVICE_PC = 'pc';
	const SPEC_ID_DEVICE_SP = 'sp';
	const SPEC_ID_DEVICE_TAB = 'tb';
	const SPEC_ID_DEVICE_APP = 'ap';
	const SPEC_ID_DEVICE_ANDROID_STB = 'tv';
	const SPEC_ID_GENERAL = '11'; //ä¸€èˆ¬VODã‚¹ãƒšãƒƒã‚¯IDã‚¿ã‚¤ãƒ—
	const SPEC_ID_ADULT = '12'; //ä¸€èˆ¬VODã‚¹ãƒšãƒƒã‚¯IDã‚¿ã‚¤ãƒ—
	const SPEC_ID_ACCUMULATION = '13'; //è“„ç©�ã‚¹ãƒšãƒƒã‚¯IDã‚¿ã‚¤ãƒ—
	const SPEC_ID_BOOK_TOP_AND_PLAY = '13'; // æ›¸ç±�ç”¨(ãƒ­ã‚°ã‚¤ãƒ³æ¸ˆã�¿TOPã€�å†�ç”Ÿ)
	const SPEC_ID_BOOK_TITLE_AND_CONTENTS = '14'; // æ›¸ç±�ç”¨(ã‚¿ã‚¤ãƒˆãƒ«ä¸€è¦§ã€�ã‚³ãƒ³ãƒ†ãƒ³ãƒ„è©³ç´°)
	const SPEC_ID_BOOK_GENRE_DETAIL = '15'; // æ›¸ç±�ç”¨(ã‚¸ãƒ£ãƒ³ãƒ«è©³ç´°)
	const SPEC_ID_KIDS = '16'; // ã‚­ãƒƒã‚ºTOPç”¨

	/**
	 * æ©Ÿå™¨ç¨®åˆ¥åˆ¤åˆ¥
	 *
	 * @param String $userAgent UserAgent
	 * @return array:æ©Ÿå™¨æƒ…å ±
	 */
	function distinctionDeviceType($userAgent) {

		//å¿…é ˆãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ãƒ�ã‚§ãƒƒã‚¯
		if (!$this->requiredParametersCheck(array($userAgent))) {
			//ãƒ­ã‚°å‡ºåŠ›
			//TODO:æœ¬ãƒ­ã‚°ã�Œå¤§é‡�ã�«å‡ºåŠ›ã�•ã‚Œã�¦ã�„ã‚‹ã�®ã�§ãƒ­ã‚°å‡ºåŠ›å¼·åŒ–(åŽŸå› åˆ¤æ˜Žå¾Œã�«å‰Šé™¤äºˆå®š!!)
			$path = @$_SERVER['REQUEST_URI'];
			$remoteAddr = @$_SERVER['REMOTE_ADDR'];
			$param = array('userAgent' => $userAgent, 'path' => $path, 'remoteAddr' => $remoteAddr);
// 			$this->outputErrorLog(COMMON_RESULT_REQUIRED_ERROR, COMMON_RESULT_REQUIRED_ERROR_MESSAGE, $param);
			//å¼•æ•°ãƒ�ã‚§ãƒƒã‚¯ã‚¨ãƒ©ãƒ¼
			return $this->makeResult(COMMON_RESULT_SYSTEM_ERROR);
		}

		//UAåˆ¤åˆ¥
		$deviceType = $this->_determineDeviceTypeByUA($userAgent);

		//æ©Ÿå™¨æƒ…å ±ã�®è¨­å®š
		switch ($deviceType) {
		case DEVICE_DTV:
		//ã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰ã‚’æ©Ÿå™¨æƒ…å ±ã�¨ã�—ã�¦å�–å¾—
			$deviceInfo = $this->_determineSiteCdByUA($userAgent, $deviceType);
			break;

		case DEVICE_TABLET:
			$check = '/' . DEVICE_PATTERN_IPAD . '|' . DEVICE_PATTERN_ANDROID . '|' . DEVICE_PATTERN_KINDLE_FIRE_HD . '/i';
			preg_match($check, $userAgent, $matches);
			$deviceInfo = $matches[0];
			break;

		case DEVICE_SMART_PHONE:
			$check = '/' . DEVICE_PATTERN_IPHONE . '|' . DEVICE_PATTERN_IPHONE2 . '|' . DEVICE_PATTERN_ANDROID . '/i';
			preg_match($check, $userAgent, $matches);
			$deviceInfo = $matches[0];
			break;

		default:
			$deviceInfo = '';
			break;
		}

		//å¿œç­”è¿”å�´
		$result = $this->makeResult(COMMON_RESULT_SUCCESS);
		$result['deviceInfo'] =
				array('deviceType' => $deviceType, 'deviceInfo' => $deviceInfo, 'deviceDetailInfo' => $userAgent);

		return $result;

		/*return array(RESPONSE_CODE    => COMMON_RESULT_SUCCESS,
		             RESPONSE_MESSAGE => COMMON_RESULT_SUCCESS_MESSAGE,
		                 'deviceInfo'     => array('deviceType'       => '006',
		                                       'deviceInfo'       => 'Sharp',
		                                       'deviceDetailInfo' => 'User-Agent'));*/
	}

	/**
	 * ã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰åˆ¤åˆ¥
	 *
	 * @param String $userAgent UserAgent
	 * @return array:ã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰
	 */

	function distinctionSiteCode($userAgent) {

		//å¿…é ˆãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ãƒ�ã‚§ãƒƒã‚¯
		if (!$this->requiredParametersCheck(array($userAgent))) {
			//ãƒ­ã‚°å‡ºåŠ›
			$path = @$_SERVER['REQUEST_URI'];
			$remoteAddr = @$_SERVER['REMOTE_ADDR'];
			$param = array('userAgent' => $userAgent, 'path' => $path, 'remoteAddr' => $remoteAddr);
// 			$this->outputErrorLog(COMMON_RESULT_REQUIRED_ERROR, COMMON_RESULT_REQUIRED_ERROR_MESSAGE, $param);
			//å¼•æ•°ãƒ�ã‚§ãƒƒã‚¯ã‚¨ãƒ©ãƒ¼(å¿…é ˆãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ãƒ�ã‚§ãƒƒã‚¯)
			return parent::makeResult(COMMON_RESULT_SYSTEM_ERROR);
		}

		//UAåˆ¤åˆ¥
		$deviceType = $this->_determineDeviceTypeByUA($userAgent);

		//ã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰è¨­å®š
		switch ($deviceType) {
		case DEVICE_STB:
		//STB
			$siteCd = SITECD_STB;
			break;

		case DEVICE_DTV:
		//DTV
			$siteCd = $this->_determineSiteCdByUA($userAgent, $deviceType);
			break;

		case DEVICE_TABLET:
		//ã‚¿ãƒ–ãƒ¬ãƒƒãƒˆ
			$siteCd = $this->_determineSiteCdByUA($userAgent, $deviceType);
			break;

		case DEVICE_SMART_PHONE:
		//ã‚¹ãƒžãƒ¼ãƒˆãƒ•ã‚©ãƒ³
			$siteCd = $this->_determineSiteCdByUA($userAgent, $deviceType);
			break;

		case DEVICE_HIKARI_BOX:
		//å…‰BOX
			$siteCd = SITECD_HIKARI_BOX;
			break;

		case DEVICE_PS_VITA:
		//PS VITA
			$siteCd = SITECD_PS_VITA;
			break;

		case DEVICE_PS_VITA_TV:
		//PS VITA TV
			$siteCd = SITECD_PS_VITA_TV;
			break;

		case DEVICE_ANDROID_STB:
			//AndroidSTB
			$siteCd = SITECD_ANDROID_STB_APP;
			break;

		case DEVICE_JCOTT:
		//JCOTT
			$siteCd = SITECD_JCOTT;
			break;
		case DEVICE_CHROMECAST:
		//Chromecast
			$siteCd = SITECD_CHROMECAST;
			break;
		case DEVICE_PC:
		//PC
			$siteCd = SITECD_PC;
			break;
		}

		// ã‚¬ãƒ©ã‚±ãƒ¼ã�¯æ©Ÿå™¨ç¨®åˆ¥ã‚’æŒ�ã�Ÿã�ªã�„ã�®ã�§ç›´æŽ¥åˆ¤æ–­
		if($this->isFeaturePhone()){
			// ã‚¬ãƒ©ã‚±ãƒ¼
			$siteCd = SITECD_FEATURE_PHONE;
		}

		//å¿œç­”è¿”å�´
		$result = $this->makeResult(COMMON_RESULT_SUCCESS);
		$result['siteCode'] = $siteCd;
		return $result;

	}

	/**
	 * ã‚µãƒ¼ãƒ“ã‚¹ç¨®åˆ¥IDåˆ¤åˆ¥
	 *
	 * @param String $userAgent UserAgent
	 * @return array:ã‚µãƒ¼ãƒ“ã‚¹ç¨®åˆ¥ID
	 */
	function distinctionServiceType($userAgent) {

		//å¿…é ˆãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ãƒ�ã‚§ãƒƒã‚¯
		if (!$this->requiredParametersCheck(array($userAgent))) {
			//ãƒ­ã‚°å‡ºåŠ›
			$param = array('userAgent' => $userAgent);
			$this->outputErrorLog(COMMON_RESULT_REQUIRED_ERROR, COMMON_RESULT_REQUIRED_ERROR_MESSAGE, $param);
			//å¼•æ•°ãƒ�ã‚§ãƒƒã‚¯ã‚¨ãƒ©ãƒ¼(å¿…é ˆãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ãƒ�ã‚§ãƒƒã‚¯)
			return parent::makeResult(COMMON_RESULT_SYSTEM_ERROR);
		}

		// ã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰ã�®å�–å¾—
		$siteCode = $this->distinctionSiteCode($userAgent);
		$siteCode = $siteCode['siteCode'];

		//ã‚µãƒ¼ãƒ“ã‚¹ç¨®åˆ¥åˆ¤åˆ¥
		$serviceId = '';
		switch ($siteCode) {
			case SITECD_DTV_AQUOS:
			case SITECD_DTV_REGZA:
			case SITECD_DTV_VIERA:
			case SITECD_DTV_LG:
			case SITECD_DTV_WOOO:
			case SITECD_DTV_OTHER:
				$serviceId = SERVICE_ID_TYPE_DTV;
				break;

			case SITECD_PC:
				$serviceId = SERVICE_ID_TYPE_PC;
				break;

			case SITECD_SMART_PHONE_ANDROID:
				$serviceId = SERVICE_ID_TYPE_SP_ANDROID;
				break;

			case SITECD_SMART_PHONE_ANDROID_NATIVE:
				if (NATIVE_PLAY_RELEASE) {
					if ($this->isOldAndroid($userAgent)) {
						$serviceId = SERVICE_ID_TYPE_SP_ANDROID;
					} else {
						$serviceId = SERVICE_ID_TYPE_ANDROID_APP;
					}
				} else {
					$serviceId = SERVICE_ID_TYPE_SP_ANDROID;
				}
				break;

			case SITECD_SMART_PHONE_IPHONE:
				$serviceId = SERVICE_ID_TYPE_SP_IPHONE;
				break;

			case SITECD_SMART_PHONE_IPHONE_NATIVE:
				if (NATIVE_PLAY_RELEASE) {
					if (PC_ADULT_DOMAIN == env('HTTP_HOST')) {
						//$serviceId = SERVICE_ID_TYPE_IOS_SAFARI;
						$serviceId = SERVICE_ID_TYPE_IPHONE_APP;
					} else {
						if ($this->isOldIOS($userAgent)) {
							$serviceId = SERVICE_ID_TYPE_SP_IPHONE;
						} else {
							$serviceId = SERVICE_ID_TYPE_IPHONE_APP;
						}
					}
				} else {
					$serviceId = SERVICE_ID_TYPE_SP_IPHONE;
				}
				break;

			case SITECD_TABLET_ANDROID:
				$serviceId = SERVICE_ID_TYPE_TABLET_ANDROID;
				break;

			case SITECD_TABLET_ANDROID_NATIVE:
				if (NATIVE_PLAY_RELEASE) {
					if ($this->isOldAndroid($userAgent)) {
						$serviceId = SERVICE_ID_TYPE_TABLET_ANDROID;
					} else {
						$serviceId = SERVICE_ID_TYPE_ANDROID_TAB_APP;
					}
				} else {
					$serviceId = SERVICE_ID_TYPE_TABLET_ANDROID;
				}
				break;

			case SITECD_TABLET_IPAD:
				$serviceId = SERVICE_ID_TYPE_TABLET_IPAD;
				break;

			case SITECD_TABLET_IPAD_NATIVE:
				if (NATIVE_PLAY_RELEASE) {
					if (PC_ADULT_DOMAIN == env('HTTP_HOST')) {
						//$serviceId = SERVICE_ID_TYPE_IOS_SAFARI;
						$serviceId = SERVICE_ID_TYPE_IPAD_APP;
					} else {
						if ($this->isOldIOS($userAgent)) {
							$serviceId = SERVICE_ID_TYPE_TABLET_IPAD;
						} else {
							$serviceId = SERVICE_ID_TYPE_IPAD_APP;
						}
					}
				} else {
					$serviceId = SERVICE_ID_TYPE_TABLET_IPAD;
				}
				break;

			case SITECD_HIKARI_BOX:
				$serviceId = SERVICE_ID_TYPE_HIKARI_BOX;
				break;

			case SITECD_PS_VITA:
				$serviceId = SERVICE_ID_TYPE_PS_VITA;
				break;

			case SITECD_PS_VITA_TV:
				$serviceId = SERVICE_ID_TYPE_PS_VITA_TV;
				break;

			case SITECD_ANDROID_APP:
				$serviceId = SERVICE_ID_TYPE_ANDROID_APP;
				break;

			case SITECD_ANDROID_TAB_APP:
				$serviceId = SERVICE_ID_TYPE_ANDROID_TAB_APP;
				break;

			case SITECD_IPHONE_APP:
				$serviceId = SERVICE_ID_TYPE_IPHONE_APP;
				break;

			case SITECD_IPAD_APP:
				$serviceId = SERVICE_ID_TYPE_IPAD_APP;
				break;

			case SITECD_ANDROID_STB_APP:
				$serviceId = SERVICE_ID_TYPE_ANDROID_STB_APP;
				break;

			case SITECD_JCOTT:
				$serviceId = SERVICE_ID_TYPE_JCOTT;
				break;

			case SITECD_CHROMECAST:
				$serviceId = SERVICE_ID_TYPE_CHROMECAST;
				break;
		}

		$result = $this->makeResult(COMMON_RESULT_SUCCESS);
		$result['serviceId'] = $serviceId;
		return $result;

	}

	/**
	 * æ©Ÿå™¨æƒ…å ±åˆ¤åˆ¥
	 *
	 * @param String $userAgent UserAgent
	 * @return String æ©Ÿå™¨æƒ…å ±(NSBOã�®ä¼šå“¡æ©Ÿå™¨TBLã�«ç™»éŒ²ã�™ã‚‹æƒ…å ±)
	 */

	function distinctionDeviceInfo($userAgent) {

		// ã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰å�–å¾—
		$siteCode = $this->distinctionSiteCode($userAgent);
		if (COMMON_RESULT_SUCCESS != $siteCode[RESPONSE_CODE]) {
			//å¿œç­”ãƒ¡ãƒƒã‚»ãƒ¼ã‚¸ï¼ˆã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰åˆ¤åˆ¥å‡¦ç�†ã‚¨ãƒ©ãƒ¼ï¼‰
			return null;
		}

		// KINEZO ã‚¢ãƒ—ãƒªåˆ¤å®š
		if (preg_match('/'.DEVICE_PATTERN_ANDROID_KINEZO_APP.'/i', $userAgent)) {
			$deviceInfo = 'Android';
		} elseif (preg_match('/'.DEVICE_PATTERN_IPHONE_KINEZO_APP.'|'.DEVICE_PATTERN_IPAD_KINEZO_APP.'/', $userAgent)) {
			$deviceInfo = 'iOS';
		} else {
			// æ©Ÿå™¨æƒ…å ±åˆ¤åˆ¥
			foreach (Configure::read('DEVICE_INFO_MAPPING') as $key => $value) {
				if ($key == $siteCode['siteCode']) {
					$deviceInfo = $value;
					break;
				}
			}
		}

		return @$deviceInfo;

	}

	/**
	 * æ©Ÿå™¨è©³ç´°æƒ…å ±åˆ¤åˆ¥
	 *
	 * @param String $userAgent UserAgent
	 * @return String æ©Ÿå™¨è©³ç´°æƒ…å ±(NSBOã�®ä¼šå“¡æ©Ÿå™¨TBLã�«ç™»éŒ²ã�™ã‚‹æƒ…å ±)
	 */

	function distinctionDeviceDetailInfo($userAgent) {

		// ã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰å�–å¾—
		$siteCode = $this->distinctionSiteCode($userAgent);
		if (COMMON_RESULT_SUCCESS != $siteCode[RESPONSE_CODE]) {
			//å¿œç­”ãƒ¡ãƒƒã‚»ãƒ¼ã‚¸ï¼ˆã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰åˆ¤åˆ¥å‡¦ç�†ã‚¨ãƒ©ãƒ¼ï¼‰
			return null;
		}

		// KINEZO ã‚¢ãƒ—ãƒªåˆ¤å®š
		if (preg_match('/'.DEVICE_PATTERN_ANDROID_KINEZO_APP.'/i', $userAgent) || preg_match('/'.DEVICE_PATTERN_IPHONE_KINEZO_APP.'|'.DEVICE_PATTERN_IPAD_KINEZO_APP.'/', $userAgent)) {
			$deviceDetailInfo = 'KINEPASS';
		} else {
			// æ©Ÿå™¨æƒ…å ±åˆ¤åˆ¥
			foreach (Configure::read('DEVICE_DETAIL_INFO_MAPPING') as $key => $value) {
				if ($key == $siteCode['siteCode']) {
					$deviceDetailInfo = $value;
					break;
				}
			}
		}

		return @$deviceDetailInfo;

	}

	/**
	 * ã‚¸ãƒ£ãƒ³ãƒ«ç”»åƒ�URLç”Ÿæˆ�
	 *
	 * @param String $genreId ã‚¸ãƒ£ãƒ³ãƒ«ID
	 * @param String $userAgent
	 * @return array():ã‚¸ãƒ£ãƒ³ãƒ«IDã�‹ã‚‰ç”Ÿæˆ�ã�—ã�Ÿã‚¸ãƒ£ãƒ³ãƒ«ç”»åƒ�URL
	 * 			ã‚¸ãƒ£ãƒ³ãƒ«IDã�«å¯¾å¿œã�™ã‚‹ç”»åƒ�ã�Œã�ªã�„å ´å�ˆã€�ç”»åƒ�URLã�¯nullãƒªã‚¿ãƒ¼ãƒ³
	 * 			å¤±æ•—ã�—ã�Ÿå ´å�ˆã�¯ã€�ã‚¨ãƒ©ãƒ¼ã‚³ãƒ¼ãƒ‰ã�¨ãƒ¡ãƒƒã‚»ãƒ¼ã‚¸
	 */
	function generateGenreThumbnailUrl($genreId, $userAgent) {

		//å¿…é ˆãƒ�ã‚§ãƒƒã‚¯
		if (!$this->requiredParametersCheck(array($genreId, $userAgent))) {
			//ãƒ­ã‚°å‡ºåŠ›
			$param = array('genreId' => $genreId, 'userAgent' => $userAgent);
			$this->outputErrorLog(COMMON_RESULT_REQUIRED_ERROR, COMMON_RESULT_REQUIRED_ERROR_MESSAGE, $param);
			//å¿œç­”ãƒ¡ãƒƒã‚»ãƒ¼ã‚¸ï¼ˆå¿…é ˆã‚¨ãƒ©ãƒ¼ï¼‰
			return parent::makeResult(COMMON_RESULT_SYSTEM_ERROR);
		}

		//ãƒ¬ã‚¹ãƒ�ãƒ³ã‚¹ã‚³ãƒ¼ãƒ‰ã€�ãƒ¡ãƒƒã‚»ãƒ¼ã‚¸ç”Ÿæˆ�
		$result = parent::makeResult(COMMON_RESULT_SUCCESS);
		//ã‚¸ãƒ£ãƒ³ãƒ«IDã�‹ã‚‰ã‚µãƒ ãƒ�ã‚¤ãƒ«URLã‚’ç”Ÿæˆ�ã�—è¿½åŠ 
		$result['thumbnailUrl'] = $this->__generateGenreThumbnailUrl($genreId);

		//å¿œç­”è¿”å�´
		return $result;
	}

	/**
	 * ã‚¿ã‚¤ãƒˆãƒ«ç”»åƒ�URLç”Ÿæˆ�
	 *
	 * @param String $titleId ã‚¿ã‚¤ãƒˆãƒ«ID
	 * @param String $userAgent
	 * @return multitype:ã‚¿ã‚¤ãƒˆãƒ«ID
	 */
	function generateTitleThumbnailUrl($titleId, $userAgent) {

		$deviceType = array();
		//ç”»åƒ�URLç”Ÿæˆ�å‡¦ç�†ã�®å…±é€šå‡¦ç�†å®Ÿè¡Œ
		$result = $this->__generatThumbnailUrlBase($titleId, $userAgent, $deviceType);

		if (COMMON_RESULT_SUCCESS != $result[RESPONSE_CODE]) {
			//ã‚¨ãƒ©ãƒ¼ãƒªã‚¿ãƒ¼ãƒ³
			$param = array(
					'titleId' => $titleId,
					'ua' => $userAgent,
					'deviceType' => $deviceType
			);
			$this->outputErrorLog($result[RESPONSE_CODE], 'ç”»åƒ�URLç”Ÿæˆ�å‡¦ç�†å¤±æ•—', $param);
			return $result;
		}
		$thumbnailUrlInfo = $this->__generateTitleThumbnailUrlInfo($titleId, $deviceType);
		//ã‚µãƒ ãƒ�ã‚¤ãƒ«URLè¿½åŠ 
		$result['thumbnailUrlInfo'] = $thumbnailUrlInfo;

		//å¿œç­”è¿”å�´
		return $result;
	}

	/**
	 * ã‚¿ã‚¤ãƒˆãƒ«ç”»åƒ�URLç”Ÿæˆ�å‡¦ç�†ã�®ã‚µãƒ ãƒ�ã‚¤ãƒ«URLæƒ…å ±ã‚’ç”Ÿæˆ�
	 *
	 * @param String $titleId ã‚¿ã‚¤ãƒˆãƒ«ID
	 * @param List   $deviceType æ©Ÿå™¨ç¨®åˆ¥æƒ…å ±
	 * @return multitype ã‚µãƒ ãƒ�ã‚¤ãƒ«URLæƒ…å ±
	 */
	private function __generateTitleThumbnailUrlInfo($titleId, $deviceType) {

		//ã‚¿ã‚¤ãƒˆãƒ«IDã�®1000ã�®ä½�ã�§ãƒ‡ã‚£ãƒ¬ã‚¯ãƒˆãƒªã‚’ç‰¹å®š
		$dir = ceil($titleId / 1000);

		$device = $deviceType['deviceInfo']['deviceType'];
		$isPc = false;
		if (DEVICE_TABLET == $device) {
			// ãƒ�ã‚¤ãƒ†ã‚£ãƒ–ã�‹ã�¤æœªãƒ­ã‚°ã‚¤ãƒ³ã�®æ™‚ã€�PCç”¨ã�®ç”»åƒ�ã�¨ã�™ã‚‹
			$clientApp = $this->distinctionClientApplicationType(env('HTTP_USER_AGENT'));
			if (CLIENT_APP_TBB != $clientApp) {
				if (!$this->isWoooRemote(env('HTTP_USER_AGENT'))) {
					$userId = $this->Session->read(SESSION_NAME_USER_ID);
					$userPlatformId = $this->Session->read(SESSION_NAME_USER_PLATFORM_ID);
					if (!isset($userId) || !isset($userPlatformId)) {
						$isPc = true;
					}
				}
			}
			if ($isPc) {
				$device = DEVICE_PC;
			} else {
				$device = DEVICE_SMART_PHONE;
			}
		}
		$suffixList = array('_l', '_s', '_b', '_ml', '_pibo');
		$suffixSetList = $this->_identifySuffixForTitle($deviceType['deviceInfo'], $isPc);
		$thumbnailUrlInfo = array();

		$i = 0;
		foreach ($suffixList as $value) {
			if (@$suffixSetList[$i]) {
				if (in_array(env('HTTP_HOST'), array(API_DOMAIN, DOWNLOAD_DOMAIN))) {
					if ($this->isAdultById($titleId)){
						// ã‚¢ãƒ€ãƒ«ãƒˆã�®å ´å�ˆ
						$suffixSetList = array('_ps_a', '_pm', '_pl_a');
						$thumbnailUrlInfo['thumbnailUrl' . $value] =
						TITLE_THUMBNAIL_BASE_URL . sprintf('%03d/%s%s.jpg', $dir, $titleId, $suffixSetList[$i]);
					} else {
						if ('_hvgaw' == $suffixSetList[$i]) {
							$thumbnailUrlInfo['thumbnailUrl' . $value] =
								TITLE_THUMBNAIL_BASE_URL . sprintf('%03d/%s%s.png'.GET_PARAM_IMG_QUALITY_30, $dir, $titleId, $suffixSetList[$i]);
						} else {
							$thumbnailUrlInfo['thumbnailUrl' . $value] =
								TITLE_THUMBNAIL_BASE_URL . sprintf('%03d/%s%s.jpg', $dir, $titleId, $suffixSetList[$i]);
						}
					}
				} else if (DEVICE_PC == $device) {
					if (PC_ADULT_DOMAIN == env('HTTP_HOST')) {
						// ã‚¢ãƒ€ãƒ«ãƒˆã�®å ´å�ˆã€�imgcã�®ãƒ‰ãƒ¡ã‚¤ãƒ³ã�®ã�¿å¤‰æ›´
						$thumbnailUrlInfo['thumbnailUrl' . $value] =
							TITLE_THUMBNAIL_BASE_URL . sprintf('%03d/%s%s.jpg', $dir, $titleId, $suffixSetList[$i]);
					} else {
						if ('_hvgaw' == $suffixSetList[$i]) {
							$thumbnailUrlInfo['thumbnailUrl' . $value] =
								TITLE_THUMBNAIL_BASE_URL . sprintf('%03d/%s%s.png'.GET_PARAM_IMG_QUALITY_30, $dir, $titleId, $suffixSetList[$i]);
						} elseif ('_pibo' == $suffixSetList[$i]) {
							$thumbnailUrlInfo['thumbnailUrl' . $value] =
								TITLE_THUMBNAIL_BASE_URL . sprintf('%03d/%s%s.jpg'.GET_PARAM_IMG_QUALITY_30, $dir, $titleId, $suffixSetList[$i]);
						} else {
							$thumbnailUrlInfo['thumbnailUrl' . $value] =
								TITLE_THUMBNAIL_BASE_URL . sprintf('%03d/%s%s.jpg', $dir, $titleId, $suffixSetList[$i]);
						}
					}
				} else if (DEVICE_SMART_PHONE == $device || DEVICE_HIKARI_BOX == $device || DEVICE_PS_VITA == $device || DEVICE_PS_VITA_TV == $device || DEVICE_JCOTT == $device) {
					if (PC_ADULT_DOMAIN == env('HTTP_HOST')) {
						// ã‚¢ãƒ€ãƒ«ãƒˆã�®å ´å�ˆã€�imgcã�®ãƒ‰ãƒ¡ã‚¤ãƒ³ã�®ã�¿å¤‰æ›´
						$thumbnailUrlInfo['thumbnailUrl' . $value] =
							TITLE_THUMBNAIL_BASE_URL . sprintf('%03d/%s%s.jpg', $dir, $titleId, $suffixSetList[$i]);
					} else {
						if ('_hvgaw' == $suffixSetList[$i]) {
							$thumbnailUrlInfo['thumbnailUrl' . $value] =
								TITLE_THUMBNAIL_BASE_URL . sprintf('%03d/%s%s.png'.GET_PARAM_IMG_QUALITY_30, $dir, $titleId, $suffixSetList[$i]);
						}elseif ('_pibo' == $suffixSetList[$i]) {
							$thumbnailUrlInfo['thumbnailUrl' . $value] =
								TITLE_THUMBNAIL_BASE_URL . sprintf('%03d/%s%s.jpg'.GET_PARAM_IMG_QUALITY_30, $dir, $titleId, $suffixSetList[$i]);
						}else {
							$thumbnailUrlInfo['thumbnailUrl' . $value] =
								TITLE_THUMBNAIL_BASE_URL . sprintf('%03d/%s%s.jpg', $dir, $titleId, $suffixSetList[$i]);
						}
					}
				} else {
					$thumbnailUrlInfo['thumbnailUrl' . $value] =
							TITLE_THUMBNAIL_BASE_URL_IMG . sprintf('%03d/%s%s.jpg', $dir, $titleId, $suffixSetList[$i]);
				}
				$i++;
			}
		}
		return $thumbnailUrlInfo;
	}

	/**
	 * æ©Ÿå™¨ç¨®åˆ¥ã�«å¿œã�˜ã�Ÿã‚µãƒ•ã‚£ãƒƒã‚¯ã‚¹ç‰¹å®šï¼ˆã‚¿ã‚¤ãƒˆãƒ«ã‚µãƒ ãƒ�ã‚¤ãƒ«ç”»åƒ�ç”¨ï¼‰
	 *
	 * @param array $deviceInfo æ©Ÿå™¨æƒ…å ±
	 * @param array $isPc true:PCç”¨ã�®ç”»åƒ� false:SPç”¨ã�®ç”»åƒ� (TABã�®ã�¿ã�§ä½¿ç”¨)
	 * @return ã‚µãƒ•ã‚£ãƒƒã‚¯ã‚¹ãƒªã‚¹ãƒˆ
	 */
	private function _identifySuffixForTitle($deviceInfo, $isPc = false) {
		$deviceTypeId = $deviceInfo['deviceType'];
		$siteCode = $deviceInfo['deviceInfo'];
		$returnList = array('_l', '_s', '_b');
		$return = '';
		switch ($deviceTypeId) {
		case DEVICE_DTV: //DTV
			$return = array('_dm', '_ds', '_dm');
			break;
		case DEVICE_PC: //PC
			$return = array('_hvgaw', '_pm', '_ll', '_pl', '_pibo');
			// ã‚¢ãƒ€ãƒ«ãƒˆã‚µã‚¤ãƒˆã�®å ´å�ˆã‚µãƒ ãƒ�ã‚¤ãƒ«ã‚’å¤‰ã�ˆã‚‹.
			if(PC_ADULT_DOMAIN == env('HTTP_HOST')){
				$return = array('_ps_a', '_pm', '_ll');
			}
			break;
		case DEVICE_TABLET: //tablet
			if(PC_ADULT_DOMAIN == env('HTTP_HOST')){
				$return = array('_ps_a', '_pm', '_pl_a');
			} else if ($isPc) {
				$return = array('_hvgaw', '_pm', '_ll', '_pl', '_pibo');
			} else {
				$return = array('_hvgaw', '_s', '_pt', '_pibo', '_pibo');
			}
			break;
		case DEVICE_SMART_PHONE: // SP
			$return = array('_hvgaw', '_s', '_pt', '_pibo', '_pibo');
			// ã‚¢ãƒ€ãƒ«ãƒˆã‚µã‚¤ãƒˆã�®å ´å�ˆã‚µãƒ ãƒ�ã‚¤ãƒ«ã‚’å¤‰ã�ˆã‚‹.
			if(PC_ADULT_DOMAIN == env('HTTP_HOST')){
				$return = array('_ps_a', '_pm', '_pl_a');
			}
			break;
		case DEVICE_HIKARI_BOX: //å…‰BOX+
		case DEVICE_PS_VITA: //PS VITA
		case DEVICE_PS_VITA_TV: //PS VITA TV
		case DEVICE_JCOTT: //JCOTT
		case DEVICE_CHROMECAST: //Chromecast
			if(PC_ADULT_DOMAIN == env('HTTP_HOST')) {
				$return = array('_ps_a', '_pl_a', '_pm');
			} else {
				$return = array('_pt', '_pm', '_p');
			}
			break;
		case DEVICE_ANDROID_STB: //AndroidSTB
				$return = array('_hvgaw', '_pm', '_ll', '_pl');
				break;
		default:
			$return = $returnList;
			break;
		}
		if ($siteCode == SITECD_DTV_VIERA) {
			$return = array('_ll', '_l', '_ll'); //VIERA
		}
		return $return;
	}

	/**
	 * ç”»åƒ�URLç”Ÿæˆ�å…±é€šå‡¦ç�†
	 *
	 * @param String $id ã‚¸ãƒ£ãƒ³ãƒ«IDã€�ã‚¿ã‚¤ãƒˆãƒ«IDã�ªã�©
	 * @param String $userAgent
	 * @param String &$deviceType æ©Ÿå™¨ç¨®åˆ¥åˆ¤åˆ¥å‡¦ç�†çµ�æžœã‚’å�‚ç…§æ¸¡ã�—ã�§æ ¼ç´�
	 * @return multitype å…±é€šå‡¦ç�†å®Ÿè¡Œçµ�æžœã‚³ãƒ¼ãƒ‰ã�¨ãƒ¡ãƒƒã‚»ãƒ¼ã‚¸
	 */
	private function __generatThumbnailUrlBase($id, $userAgent, &$deviceType) {

		//å¿…é ˆãƒ�ã‚§ãƒƒã‚¯
		if (!$this->requiredParametersCheck(array($id, $userAgent))) {
			//ãƒ­ã‚°å‡ºåŠ›
			$param = array('id' => $id, 'userAgent' => $userAgent);
			$this->outputErrorLog(COMMON_RESULT_REQUIRED_ERROR, COMMON_RESULT_REQUIRED_ERROR_MESSAGE, $param);
			//å¿œç­”ãƒ¡ãƒƒã‚»ãƒ¼ã‚¸ï¼ˆå¿…é ˆã‚¨ãƒ©ãƒ¼ï¼‰
			return parent::makeResult(COMMON_RESULT_SYSTEM_ERROR);
		}
		//æ©Ÿå™¨ç¨®åˆ¥åˆ¤åˆ¥
		$deviceType = $this->distinctionDeviceType($userAgent);
		if (COMMON_RESULT_SUCCESS != $deviceType[RESPONSE_CODE]) {
			//å¿œç­”ãƒ¡ãƒƒã‚»ãƒ¼ã‚¸ï¼ˆæ©Ÿå™¨ç¨®åˆ¥åˆ¤åˆ¥å‡¦ç�†ã‚¨ãƒ©ãƒ¼ï¼‰
			$this->outputErrorLog(null, 'æ©Ÿå™¨ç¨®åˆ¥åˆ¤åˆ¥å‡¦ç�†ã‚¨ãƒ©ãƒ¼', array('ua' => $userAgent));
			return parent::makeResult(COMMON_RESULT_SYSTEM_ERROR);
		}

		// WoooRemoteå¯¾å¿œ
		if ($this->isWoooRemote($userAgent)) {
			if ($this->getWoooRemoteTheme($userAgent) == THEME_SMART_PHONE) {
				$deviceType['deviceInfo']['deviceType'] = DEVICE_SMART_PHONE;
			} else {
				$deviceType['deviceInfo']['deviceType'] = DEVICE_TABLET;
			}
		}

		//å¿œç­”è¿”å�´
		return parent::makeResult(COMMON_RESULT_SUCCESS);
	}

	/**
	 * ã‚·ãƒªãƒ¼ã‚ºç”»åƒ�URLç”Ÿæˆ�
	 *
	 * @param String $commonId å…±é€šID
	 * @param String $userAgent
	 * @return multitype:å…±é€šIDã�‹ã‚‰ç”Ÿæˆ�ã�—ã�Ÿã‚·ãƒªãƒ¼ã‚ºç”»åƒ�URL
	 */
	function generateSeriesThumbnailUrl($commonId, $userAgent) {

		$deviceType = array();
		//ç”»åƒ�URLç”Ÿæˆ�å‡¦ç�†ã�®å…±é€šå‡¦ç�†å®Ÿè¡Œ
		$result = $this->__generatThumbnailUrlBase($commonId, $userAgent, $deviceType);

		if (COMMON_RESULT_SUCCESS != $result[RESPONSE_CODE]) {
			return $result;
		}

		//å…±é€šIDã�®1000ã�®ä½�ã�§ãƒ‡ã‚£ãƒ¬ã‚¯ãƒˆãƒªã‚’ç‰¹å®šï¼ˆå…±é€šIDã�Œnxtã�§å§‹ã�¾ã‚‹ã‚‚ã�®ã�¯ã€�ãƒ‘ãƒƒã‚¯ã�§ã�¯ã�ªã�„ã�Ÿã‚�ã€�å…ˆé ­æ–‡å­—ã�®åˆ‡æ�¨ã�¦ã�¯è¡Œã‚�ã�ªã�„ï¼‰
		$dir = ceil($commonId / 1000);
		//ã‚µãƒ•ã‚£ãƒƒã‚¯ã‚¹ç‰¹å®š
		$suffix = $this->_identifySuffixForSeries($deviceType['deviceInfo']);
		//ãƒ™ãƒ¼ã‚¹URLã�¨çµ�å�ˆ
		$thumbnailUrl = SERIES_THUMBNAIL_BASE_URL . sprintf('%03d/%s%s.jpg', $dir, $commonId, $suffix);
		//ã‚µãƒ ãƒ�ã‚¤ãƒ«URLè¿½åŠ 
		$result['thumbnailUrl'] = $thumbnailUrl;
		//å¿œç­”è¿”å�´
		return $result;
	}

	/**
	 * æ©Ÿå™¨ç¨®åˆ¥ã�«å¿œã�˜ã�Ÿã‚µãƒ•ã‚£ãƒƒã‚¯ã‚¹ç‰¹å®šï¼ˆã‚·ãƒªãƒ¼ã‚ºç”»åƒ�ç”¨ï¼‰
	 *
	 * @param array $deviceInfo æ©Ÿå™¨æƒ…å ±
	 * @return ã‚µãƒ•ã‚£ãƒƒã‚¯ã‚¹
	 */
	private function _identifySuffixForSeries($deviceInfo) {
		$deviceTypeId = $deviceInfo['deviceType'];
		$siteCode = $deviceInfo['deviceInfo'];
		$returnCode = array('_l', '_s', '_b', '_p', '_ll');
		$return = '';
		switch ($deviceTypeId) {
		case DEVICE_DTV: //DTV
			$return = $returnCode[2];
			break;
		case DEVICE_PC: //PC
			$return = $returnCode[3];
			break;
		case DEVICE_TABLET: //tablet
			$return = $returnCode[3];
			break;
		case DEVICE_HIKARI_BOX: //å…‰BOX+
		case DEVICE_PS_VITA: //PS VITA
		case DEVICE_PS_VITA_TV: //PS VITA TV
		case DEVICE_JCOTT: //JCOTT
		case DEVICE_CHROMECAST: //Chromecast
			$return = $returnCode[4];
			break;
		default:
			$return = $returnCode[2];
			break;
		}
		if ($siteCode == SITECD_DTV_VIERA) {
			$return = $returnCode[4]; //VIERA
		}
		return $return;
	}

	/**
	 * ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ç”»åƒ�URLç”Ÿæˆ�
	 *
	 * @param String $contentsId ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ID
	 * @param String $userAgent
	 * @param String $fc_image   ç”»åƒ�ãƒ•ã‚¡ã‚¤ãƒ«ãƒ‘ã‚¹
	 * @return multitype:ã‚³ãƒ³ãƒ†ãƒ³ãƒ„IDã�‹ã‚‰ç”Ÿæˆ�ã�—ã�Ÿã‚³ãƒ³ãƒ†ãƒ³ãƒ„ç”»åƒ�URL
	 */
	function generateContentsThumbnailUrl($contentsId, $userAgent, $fc_image) {

		$deviceType = array();
		//ç”»åƒ�URLç”Ÿæˆ�å‡¦ç�†ã�®å…±é€šå‡¦ç�†å®Ÿè¡Œ
		$result = $this->__generatThumbnailUrlBase($contentsId, $userAgent, $deviceType);

		if (COMMON_RESULT_SUCCESS != $result[RESPONSE_CODE]) {
			return $result;
		}

		//ã‚µãƒ•ã‚£ãƒƒã‚¯ã‚¹ç‰¹å®š
		$suffix = $this->_identifySuffixForContents($deviceType['deviceInfo']);
		//ã‚³ãƒ³ãƒ†ãƒ³ãƒ„IDã�®1000ã�®ä½�ã�§ãƒ‡ã‚£ãƒ¬ã‚¯ãƒˆãƒªã‚’ç‰¹å®š
		/*$dir = ceil(substr($contentsId, 3) / 1000);
		//ãƒ™ãƒ¼ã‚¹URLã�¨çµ�å�ˆ
		$thumbnailUrl = CONTENTS_THUMBNAIL_BASE_URL . sprintf('%03d/%s%s.jpg', $dir, $contentsId, $suffix);*/

		//ç”»åƒ�ãƒ•ã‚¡ã‚¤ãƒ«ãƒ‘ã‚¹ã�®åŠ å·¥
		$url = str_replace(self::CONTENTS_THUMBNAIL_DIR, '', $fc_image);
		$dir = str_replace(self::CONTENTS_SUFIX, $suffix, $url);
		//ãƒ™ãƒ¼ã‚¹URLã�¨çµ�å�ˆ
		$thumbnailUrl = CONTENTS_THUMBNAIL_BASE_URL . $dir;

		//ã‚µãƒ ãƒ�ã‚¤ãƒ«URLè¿½åŠ 
		$result['thumbnailUrl'] = $thumbnailUrl;
		//å¿œç­”è¿”å�´
		return $result;
	}

	/**
	 * æ©Ÿå™¨ç¨®åˆ¥ã�«å¿œã�˜ã�Ÿã‚µãƒ•ã‚£ãƒƒã‚¯ã‚¹ç‰¹å®šï¼ˆã‚³ãƒ³ãƒ†ãƒ³ãƒ„ç”»åƒ�ç”¨ï¼‰
	 *
	 * @param array $deviceInfo æ©Ÿå™¨æƒ…å ±
	 * @return ã‚µãƒ•ã‚£ãƒƒã‚¯ã‚¹
	 */
	private function _identifySuffixForContents($deviceInfo) {
		$deviceTypeId = $deviceInfo['deviceType'];
		$siteCode = $deviceInfo['deviceInfo'];
		$returnCode = array('_b', '_p', '_ll');
		$return = '';
		switch ($deviceTypeId) {
		case DEVICE_DTV: //DTV
			$return = $returnCode[0];
			break;
		case DEVICE_PC: //PC
			$return = $returnCode[1];
			break;
		case DEVICE_SMART_PHONE: //SP
			$return = $returnCode[1];
			break;
		case DEVICE_TABLET: //tablet
			$return = $returnCode[1];
			break;
		case DEVICE_HIKARI_BOX: //å…‰BOX+
		case DEVICE_PS_VITA: //PS VITA
		case DEVICE_PS_VITA_TV: //PS VITA TV
		case DEVICE_JCOTT: //JCOTT
		case DEVICE_CHROMECAST: //Chromecast
			$return = $returnCode[1];
			break;
		default:
			$return = $returnCode[0];
			break;
		}
		if ($siteCode == SITECD_DTV_VIERA) {
			$return = $returnCode[2]; //VIERA
		}
		return $return;
	}

	/**
	 * å¿…é ˆãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ãƒ�ã‚§ãƒƒã‚¯
	 * @param array $args
	 * @return boolean:
	 */
	function requiredParametersCheck($args) {
		//ç©ºã�§ã�ªã�„ã�‹
		if (!isset($args)) {
			return false;
		}
		//é…�åˆ—ã�‹ã�©ã�†ã�‹
		if (is_array($args)) {
			foreach ($args as $arg) {
				if (!isset($arg) || $arg === '') {
					return false;
				}
			}
		} else {
			if ($args === '') {
				return false;
			}
		}
		return true;
	}

	/**
	 * ã‚µãƒ¼ãƒ“ã‚¹æ��ä¾›åˆ¤åˆ¥
	 *
	 * @param String $contentsId ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ID
	 * @param String $serviceId ã‚µãƒ¼ãƒ“ã‚¹ç¨®åˆ¥ID
	 * @return boolean:<br />
	 * 			true  â†’ ã‚³ãƒ³ãƒ†ãƒ³ãƒ„IDã€�ã‚µãƒ¼ãƒ“ã‚¹ç¨®åˆ¥IDã�®çµ„ã�¿å�ˆã‚�ã�›ã�Œã€�ã‚µãƒ¼ãƒ“ã‚¹æ��ä¾›ã�‚ã‚Š<br />
	 * 			false â†’ ã‚³ãƒ³ãƒ†ãƒ³ãƒ„IDã€�ã‚µãƒ¼ãƒ“ã‚¹ç¨®åˆ¥IDã�®çµ„ã�¿å�ˆã‚�ã�›ã�Œã€�ã‚µãƒ¼ãƒ“ã‚¹æ��ä¾›ã�ªã�—<br />
	 */
	function isServiceOffer($contentsId, $serviceId) {
		$result = true;

		//ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ãƒ¢ãƒ‡ãƒ«ã�®èª­ã�¿è¾¼ã�¿
		$contentsModel = ClassRegistry::init('Content');

		//å®Ÿè¡Œ
		//CMSã�®ã‚µãƒ¼ãƒ“ã‚¹ç¨®åˆ¥ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ãƒªãƒ¬ãƒ¼ã‚·ãƒ§ãƒ³TBLã�«ãƒ¬ã‚³ãƒ¼ãƒ‰ã�Œå­˜åœ¨ã�™ã‚‹ã�‹ã‚’ç¢ºèª�
		$result = $contentsModel->isExists($contentsId, $serviceId);
		//å®Ÿè¡Œçµ�æžœã�Œfalseã�®å ´å�ˆã€�ä¾‹å¤–ã‚¹ãƒ­ãƒ¼
		if ($result === false) {
			throw new Exception($model->getDbo()->lastError());
		}
		//		if (count($result) == 0) {
		//			$result = false;
		//		} else {
		//			$result = true;
		//		}

		return $result;
	}

	/**
	 * ç¬¬1å¼•æ•°ã�®é…�åˆ—ã�‹ã‚‰ã€�ç¬¬2å¼•æ•°ã�«æŒ‡å®šã�—ã�Ÿãƒ†ãƒ¼ãƒ–ãƒ«ãƒ‡ãƒ¼ã‚¿ã�®ã€�ç¬¬3å¼•æ•°ã�§æŒ‡å®šã�—ã�Ÿãƒ•ã‚£ãƒ¼ãƒ«ãƒ‰ã�®ãƒ‡ãƒ¼ã‚¿ã‚’å�˜ç´”é…�åˆ—åŒ–ã�™ã‚‹
	 *
	 * @param array $list æ“�ä½œå¯¾è±¡é…�åˆ—
	 * @param String $param1 æ“�ä½œå¯¾è±¡ãƒ†ãƒ¼ãƒ–ãƒ«å��
	 * @param String $param2 æ“�ä½œå¯¾è±¡ãƒ•ã‚£ãƒ¼ãƒ«ãƒ‰å��
	 * @return å�˜ç´”é…�åˆ—åŒ–ã�—ã�Ÿé…�åˆ—
	 */
	function convertSimpleArray($list, $param1, $param2) {
		$result = array();
		//å…±é€šIDä¸€è¦§ã‚’INæ�¡ä»¶ã�«è¿½åŠ 
		foreach ($list as $value) {
			$result[] = $value[$param1][$param2];
		}

		return $result;
	}

	/**
	 * æœŸé–“æœ‰åŠ¹ãƒ�ã‚§ãƒƒã‚¯
	 *
	 * @param String $startDate
	 * @param String $endDate
	 * @return  boolean:<br />
	 * 			true  â†’ æœ‰åŠ¹<br />
	 * 			false â†’ ç„¡åŠ¹<br />
	 */
	function isValidDate($startDate, $endDate) {

		$result = false;
		$nowDate = new DateTime(); //ç�¾åœ¨æ™‚
		$startDate = new DateTime($startDate); //é–‹å§‹æ™‚
		$endDate = new DateTime($endDate); //çµ‚äº†æ™‚

		if (($startDate <= $nowDate) && ($nowDate <= $endDate)) {
			$result = true;
		}
		return $result;
	}

	/**
	 * æœŸé–“æœ‰åŠ¹ãƒ�ã‚§ãƒƒã‚¯(æœªæŒ‡å®šå¯¾å¿œç‰ˆ)
	 *
	 * @param String $startDate		æŒ‡å®šã�—ã�ªã�„å ´å�ˆã�¯é�ŽåŽ»ã�«ã�ªã‚‹
	 * @param String $endDate		æŒ‡å®šã�—ã�ªã�„å ´å�ˆã�¯æœªæ�¥ã�«ã�ªã‚‹
	 * @return  boolean:<br />
	 * 			0  â†’ æœ‰åŠ¹<br />
	 * 			-1 â†’ ç„¡åŠ¹(æœŸé–“å‰�)<br />
	 * 			+1 â†’ ç„¡åŠ¹(æœŸé–“å¾Œ)<br />
	 */
	function isValidDateUnspecified($startDate = null, $endDate = null) {

		$result = 0;
		$nowDate = new DateTime(); //ç�¾åœ¨æ™‚

		if(empty($startDate)){
			$startDate = new DateTime(date('Y/m/d H:i:s', strtotime('-1 day')));	//æ˜¨æ—¥
		}else{
			$startDate = new DateTime($startDate); 		//é–‹å§‹æ™‚
		}

		if(empty($endDate)){
			$endDate = new DateTime(date('Y/m/d H:i:s', strtotime('+1 day')));	//æ˜Žæ—¥
		}else{
			$endDate = new DateTime($endDate); 		//çµ‚äº†æ™‚
		}

		if (($startDate <= $nowDate) && ($nowDate <= $endDate)) {
			$result = 0;
		} else {
			if ($startDate > $nowDate) {
				$result = -1;
			} else {
				$result = 1;
			}
		}
		return $result;
	}
	/**
	 *
	 * UAåˆ¤åˆ¥
	 * @param String $userAgent UserAgent
	 * @return String æ©Ÿå™¨ç¨®åˆ¥
	 */
	function _determineDeviceTypeByUA($userAgent) {

		//å�„ãƒ�ã‚§ãƒƒã‚¯ãƒ‘ã‚¿ãƒ¼ãƒ³ã‚’è¨­å®š
		$dtvPattern = array(DEVICE_PATTERN_DTV1, DEVICE_PATTERN_DTV3, DEVICE_PATTERN_DTV2, DEVICE_PATTERN_DTV4);//DTV
		$iphonePattern = array(DEVICE_PATTERN_IPHONE, DEVICE_PATTERN_IPHONE2);//ã‚¹ãƒžãƒ¼ãƒˆãƒ•ã‚©ãƒ³(Iphone)

		//å�„æ©Ÿå™¨åˆ¤åˆ¥

		//STB
		$check = '/' . DEVICE_PATTERN_STB . '/';
		if (preg_match($check, $userAgent)) {
			return DEVICE_STB;
		}

		//DTV
		$check = '/' . implode('|', $dtvPattern) . '/';
		if (preg_match($check, $userAgent)) {
			return DEVICE_DTV;
		}

		// WoooRemote
		if ($this->isWoooRemote($userAgent)) {
			return DEVICE_DTV;
		}

		//iPhoneãƒ»iPod(ã‚¹ãƒžãƒ¼ãƒˆãƒ•ã‚©ãƒ³)
		$check = '/' . implode('|', $iphonePattern) . '/';
		if (preg_match($check, $userAgent)) {
			return DEVICE_SMART_PHONE;
		}

		//iPad(ã‚¿ãƒ–ãƒ¬ãƒƒãƒˆ)
		$check = '/' . DEVICE_PATTERN_IPAD . '/';
		if (preg_match($check, $userAgent)) {
			return DEVICE_TABLET;
		}

		//å…‰BOX+
		if ($this->isHikariBox($userAgent)) {
			return DEVICE_HIKARI_BOX;
		}

		//PS VITA
		if ($this->isPsVita($userAgent)) {
			return DEVICE_PS_VITA;
		}

		//PS VITA TV
		if ($this->isPsVitaTv($userAgent)) {
			return DEVICE_PS_VITA_TV;
		}

		//Kindle Fire HD
		$check = '/' . DEVICE_PATTERN_KINDLE_FIRE_HD . '/';
		if (preg_match($check, $userAgent)) {
			return DEVICE_TABLET;
		}

		//AndroidSTB
		$check = '/' . DEVICE_PATTERN_ANDROID_STB . '/';
		if (preg_match($check, $userAgent)) {
			return DEVICE_ANDROID_STB;
		}

		//JCOTT
		if ($this->isJcott($userAgent)) {
			return DEVICE_JCOTT;
		}

		//Chromecast
		if ($this->isChromecast($userAgent)) {
			return DEVICE_CHROMECAST;
		}

		//Android
		$check = '/' . DEVICE_PATTERN_ANDROID . '/';
		$check1 = '/' . DEVICE_PATTERN_ANDROID_KINEZO_APP . '/i';
		if (preg_match($check, $userAgent) || preg_match($check1, $userAgent)) {
			//ã‚¹ãƒžãƒ¼ãƒˆãƒ•ã‚©ãƒ³ãƒ�ã‚§ãƒƒã‚¯
			$check2 = '/' . DEVICE_PATTERN_SMARTPHONE . '/i';
			if (preg_match($check2, $userAgent)) {
				//ãƒžãƒƒãƒ�ã�™ã‚Œã�°ã‚¹ãƒžãƒ¼ãƒˆãƒ•ã‚©ãƒ³
				return DEVICE_SMART_PHONE;
			} else {
				//ãƒžãƒƒãƒ�ã�—ã�ªã�‘ã‚Œã�°ã‚¿ãƒ–ãƒ¬ãƒƒãƒˆ
				return DEVICE_TABLET;
			}
		}

		//ä¸Šè¨˜ã�®ä½•ã‚Œã�«ã‚‚ãƒžãƒƒãƒ�ã�—ã�ªã�‘ã‚Œã�°PCã�¨ã�™ã‚‹
		return DEVICE_PC;

	}

	/**
	 *
	 * ã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰åˆ¤åˆ¥
	 * @param String $userAgent UserAgent
	 * @param String $deviceType æ©Ÿå™¨ç¨®åˆ¥
	 * @return String:ã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰
	 */
	function _determineSiteCdByUA($userAgent, $deviceType) {
		$result = "";

		//å�„ãƒ�ã‚§ãƒƒã‚¯ãƒ‘ã‚¿ãƒ¼ãƒ³ã‚’è¨­å®š
		$dtvPattern = array(DEVICE_PATTERN_DTV1, DEVICE_PATTERN_DTV3, DEVICE_PATTERN_DTV2);//DTV
		$iphonePattern = array(DEVICE_PATTERN_IPHONE, DEVICE_PATTERN_IPHONE2);//ã‚¹ãƒžãƒ¼ãƒˆãƒ•ã‚©ãƒ³(Iphone)

		//æ©Ÿå™¨ç¨®åˆ¥ã�«ã‚ˆã�£ã�¦ã€�å‡¦ç�†ã‚’åˆ†å²�
		switch ($deviceType) {
		case DEVICE_DTV:
		//DTV
			$check = '/' . DEVICE_PATTERN_DTV3 . '/';
			if (preg_match($check, $userAgent)) {
				$result = SITECD_DTV_BRAVIA;
				break;
			}

			$check = '/' . SITECD_PATTERN_AQUOS . '/';
			if (preg_match($check, $userAgent)) {
				$result = SITECD_DTV_AQUOS;
				break;
			}

			$check = '/' . SITECD_PATTERN_REGZA . '/';
			if (preg_match($check, $userAgent)) {
				$result = SITECD_DTV_REGZA;
				break;
			}

			$check = '/' . SITECD_PATTERN_VIERA . '/';
			if (preg_match($check, $userAgent)) {
				$result = SITECD_DTV_VIERA;
				break;
			}

			$check = '/' . SITECD_PATTERN_LG . '/';
			if (preg_match($check, $userAgent)) {
				$result = SITECD_DTV_LG;
				break;
			}

			$check = '/' . SITECD_PATTERN_WOOO . '/';
			if (preg_match($check, $userAgent)) {
				$result = SITECD_DTV_WOOO;
				break;
			}

			if ($this->isWoooRemote($userAgent)) {
				$result = SITECD_DTV_WOOO;
				break;
			}

			if (empty($result)) {
				//ã��ã�®ä»–ã‚»ãƒƒãƒˆ
				$result = SITECD_DTV_OTHER;
				break;
			}

		case DEVICE_TABLET:
		//ã‚¿ãƒ–ãƒ¬ãƒƒãƒˆ
			$check = '/' . SITECD_PATTERN_ANDROID_STB_APP . '/';
			if (preg_match($check, $userAgent)) {
				$result = SITECD_ANDROID_STB_APP;
				break;
			}

			$check = '/' . SITECD_PATTERN_ANDROID_TAB_APP . '/';
			if (preg_match($check, $userAgent)) {
				$result = SITECD_ANDROID_TAB_APP;
				break;
			}

			$check = '/' . SITECD_PATTERN_IPAD_APP . '/';
			if (preg_match($check, $userAgent)) {
				$result = SITECD_IPAD_APP;
				break;
			}

		//iPad
			$check = '/' . DEVICE_PATTERN_IPAD . '/';
			if (preg_match($check, $userAgent)) {
				if ($this->distinctionClientApplicationType($userAgent) == CLIENT_APP_TBB) {
					$result = SITECD_TABLET_IPAD;
				} else {
					$result = SITECD_TABLET_IPAD_NATIVE;
				}
				break;
			}

			//Android
			$check = '/' . DEVICE_PATTERN_ANDROID . '/';
			$check1 = '/' . DEVICE_PATTERN_ANDROID_KINEZO_APP . '/i';
			if (preg_match($check1, $userAgent)) {
				$result = SITECD_TABLET_ANDROID_NATIVE;
				break;
			} else if (preg_match($check, $userAgent)) {
				if ($this->distinctionClientApplicationType($userAgent) == CLIENT_APP_TBB) {
					$result = SITECD_TABLET_ANDROID;
				} else {
					$result = SITECD_TABLET_ANDROID_NATIVE;
				}
				break;
			}

		case DEVICE_SMART_PHONE:
		//ã‚¹ãƒžãƒ¼ãƒˆãƒ•ã‚©ãƒ³
		// Androidã‚¢ãƒ—ãƒª
			$check = '/' . SITECD_PATTERN_ANDROID_APP . '/';
			if (preg_match($check, $userAgent)) {
				$result = SITECD_ANDROID_APP;
				break;
			}

		// iPhoneã‚¢ãƒ—ãƒª
			$check = '/' . SITECD_PATTERN_IPHONE_APP . '/';
			if (preg_match($check, $userAgent)) {
				$result = SITECD_IPHONE_APP;
				break;
			}

		//iPhoneãƒ»iPod
			$check = '/' . implode('|', $iphonePattern) . '/';
			if (preg_match($check, $userAgent)) {
				if ($this->distinctionClientApplicationType($userAgent) == CLIENT_APP_TBB) {
					$result = SITECD_SMART_PHONE_IPHONE;
				} else {
					$result = SITECD_SMART_PHONE_IPHONE_NATIVE;
				}
				break;
			}

			//Android
			$check = '/' . DEVICE_PATTERN_ANDROID . '|' . DEVICE_PATTERN_SMARTPHONE . '/i';
			if (preg_match($check, $userAgent)) {
				if ($this->distinctionClientApplicationType($userAgent) == CLIENT_APP_TBB) {
					$result = SITECD_SMART_PHONE_ANDROID;
				} else {
					$result = SITECD_SMART_PHONE_ANDROID_NATIVE;
				}
				break;
			}

		case DEVICE_HIKARI_BOX:
			// å…‰BOX
			$result = SITECD_HIKARI_BOX;
			break;

		case DEVICE_PS_VITA:
			// PS VITA
			$result = SITECD_PS_VITA;
			break;

		case DEVICE_PS_VITA_TV:
			// PS VITA TV
			$result = SITECD_PS_VITA_TV;
			break;

		case DEVICE_ANDROID_STB:
			// AndroidSTB
			$result = SITECD_ANDROID_STB_APP;
			break;

		case DEVICE_JCOTT:
			// AndroidSTB
			$result = SITECD_JCOTT;
			break;

		case DEVICE_CHROMECAST:
			// Chromecast
			$result = SITECD_CHROMECAST;
			break;
		}
		//è¿”å�´
		return $result;

	}

	/**
	 * éƒµä¾¿ç•ªå�·å­˜åœ¨ãƒ�ã‚§ãƒƒã‚¯
	 *
	 * @param String $zipCode éƒµä¾¿ç•ªå�·
	 * @return boolean å­˜åœ¨ã�™ã‚‹ï¼štrue å­˜åœ¨ã�—ã�ªã�„ï¼šfalse
	 */
	function checkZipCode($zipCode) {
		$result = $this->makeResult(COMMON_RESULT_SUCCESS);
		$result['isExistZipCode'] = false;

		//å¿…é ˆãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ãƒ�ã‚§ãƒƒã‚¯
		if (!$this->requiredParametersCheck(array($zipCode))) {
			//ãƒ­ã‚°å‡ºåŠ›
			$param = array('zipCode' => $zipCode);
			$this->outputErrorLog(COMMON_RESULT_REQUIRED_ERROR, COMMON_RESULT_REQUIRED_ERROR_MESSAGE, $param);
			//å¼•æ•°ãƒ�ã‚§ãƒƒã‚¯ã‚¨ãƒ©ãƒ¼
			return $this->makeResult(COMMON_RESULT_SYSTEM_ERROR);
		}

		//ãƒ¢ãƒ‡ãƒ«ã�®èª­ã�¿è¾¼ã�¿
		$zipCodeModel = ClassRegistry::init('ZipCode');

		//éƒµä¾¿ç•ªå�·ã�®å­˜åœ¨ãƒ�ã‚§ãƒƒã‚¯
		$resZipCode = $zipCodeModel->masterCheck($zipCode);

		//å®Ÿè¡Œçµ�æžœã�Œfalseã�®å ´å�ˆã€�ä¾‹å¤–ã‚¹ãƒ­ãƒ¼
		if ($resZipCode === false) {
			throw new Exception($zipCodeModel->getDbo()->lastError());
		} else if (count($resZipCode) > 0) {
			$result['isExistZipCode'] = true;
		}

		return $result;
	}

	/**
	 * ä»£ç�†åº—ã‚³ãƒ¼ãƒ‰å­˜åœ¨ãƒ�ã‚§ãƒƒã‚¯
	 *
	 * @param String $factCode ä»£ç�†åº—ã‚³ãƒ¼ãƒ‰
	 * @return boolean å­˜åœ¨ã�™ã‚‹ï¼štrue å­˜åœ¨ã�—ã�ªã�„ï¼šfalse
	 */
	function checkFactCode($factCode) {
		$result = $this->makeResult(COMMON_RESULT_SUCCESS);
		$result['isExistFactCode'] = false;

		//å¿…é ˆãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ãƒ�ã‚§ãƒƒã‚¯
		if (!$this->requiredParametersCheck(array($factCode))) {
			//ãƒ­ã‚°å‡ºåŠ›
			$param = array('factCode' => $factCode);
			$this->outputErrorLog(COMMON_RESULT_REQUIRED_ERROR, COMMON_RESULT_REQUIRED_ERROR_MESSAGE, $param);
			//å¼•æ•°ãƒ�ã‚§ãƒƒã‚¯ã‚¨ãƒ©ãƒ¼
			return $this->makeResult(COMMON_RESULT_SYSTEM_ERROR);
		}

		//ãƒ¢ãƒ‡ãƒ«ã�®èª­ã�¿è¾¼ã�¿
		$agencyModel = ClassRegistry::init('Agency');

		//éƒµä¾¿ç•ªå�·ã�®å­˜åœ¨ãƒ�ã‚§ãƒƒã‚¯
		$resAgency = $agencyModel->masterCheck($factCode);

		//å®Ÿè¡Œçµ�æžœã�Œfalseã�®å ´å�ˆã€�ä¾‹å¤–ã‚¹ãƒ­ãƒ¼
		if ($resAgency === false) {
			throw new Exception($agencyModel->getDbo()->lastError());
		} else if (count($resAgency) > 0) {
			$result['isExistFactCode'] = true;
		}

		return $result;
	}

	/**
	 * ã‚¸ãƒ£ãƒ³ãƒ«IDã�«å¿œã�˜ã�Ÿç”»åƒ�URLã‚’è¿”ã�™
	 * ä¸€è¦§è¡¨ã�«å­˜åœ¨ã�—ã�ªã�„ã‚¸ãƒ£ãƒ³ãƒ«IDã�®å ´å�ˆã€�nullã‚’è¿”ã�™
	 *
	 * @param String $genreId ã‚¸ãƒ£ãƒ³ãƒ«ID
	 * @return String ç”»åƒ�URL
	 */
	private function __generateGenreThumbnailUrl($genreId) {

		$genreImgMapping = Configure::read('GENRE_IMG_MAPPING');
		if (isset($genreImgMapping[$genreId])) {
			//ãƒ™ãƒ¼ã‚¹ã�«ã�ªã‚‹URLã�«ãƒ•ã‚¡ã‚¤ãƒ«å��ã‚’è¿½åŠ 
			return GENRE_THUMBNAIL_BASE_URL . $genreImgMapping[$genreId];
		} else {
			return null;
		}
	}

	/**
	 * ãƒ•ã‚¡ã‚¤ãƒ«ãƒ‘ã‚¹ç”Ÿæˆ�
	 * (ç·¨æˆ�å±€ç®¡ç�†ãƒ•ã‚¡ã‚¤ãƒ«ç”¨)
	 *
	 * @param String $base
	 * @return mixed
	 */
	public static function getCurrentFilePath($base) {

		$pre = "";
		$ext = "";

		$date = date("YmdH");
		$files = array();

		if (preg_match("/(.+)\/(.+)\.(.+)$/", $base, $match)) {
			// ãƒ™ãƒ¼ã‚¹ãƒ•ã‚¡ã‚¤ãƒ«å��ã‚’ãƒ‘ã‚¹/ãƒ•ã‚¡ã‚¤ãƒ«å��/æ‹¡å¼µå­�ã�«åˆ†ã�‘ã‚‹
			$path = $match[1];
			$pre = $match[2];
			$ext = $match[3];

			$pattern = sprintf('/%s_(\d{10})\.%s$/', $pre, $ext);

			// ãƒ•ã‚¡ã‚¤ãƒ«åˆ¤å®š
			if ($res = dir($path)) {
				while ($buf = $res->read()) {
					if (preg_match($pattern, $buf, $match2)) {
						// ãƒ‘ã‚¿ãƒ¼ãƒ³ä¸€è‡´ã�‹ã�¤å½“æ—¥ä»¥å‰�ã�ªã‚‰å�–å¾—
						// ã‚¹ãƒ†ãƒ¼ã‚¸ãƒ³ã‚°ã�§ã�¯ç�¾åœ¨æ—¥æ™‚ã�¯ç„¡è¦–ã�—ã�¦æœ€å¤§ã‚’å�–å¾—
						if ($match2[1] <= $date) {
							array_push($files, $path . "/" . $buf);
						}
					}
				}
			}

			if (count($files) === 0) {
				array_push($files, $path . "/" . $pre . "." . $ext);
			}

			sort($files);
		}
		// æœ€æ–°ã�®ä¸€ä»¶ã‚’è¿”ã�™
		return array_pop($files);
	}

	/**
	 * ä¼šå“¡æƒ…å ±å�–å¾—çµ�æžœã�‹ã‚‰ã€�PPVãƒ»PPDã�®è³¼å…¥å�¯èƒ½ã�ªå¥‘ç´„ã�‹ãƒ�ã‚§ãƒƒã‚¯
	 *
	 * @param List $userInfo ä¼šå“¡æƒ…å ±ï¼ˆ1ä»¶ã�®ã�¿ã� ã�Œã€�ãƒªã‚¹ãƒˆå½¢å¼�ï¼‰
	 * @return boolean:<br />
	 * 			true  â†’ è³¼å…¥å�¯èƒ½<br />
	 * 			false â†’ è³¼å…¥ä¸�å�¯<br />
	 */
	public function isAvailablePurchase($userInfo) {

		$result = false;
		//æ±ºæ¸ˆæ–¹æ³•å�–å¾—
		$contDetailSettlement = $userInfo['platformList'][0]['contDetailSettlement'];
		
		if ($contDetailSettlement == PAY_NON) {
			// ã‚­ãƒ£ãƒªã‚¢èª²é‡‘ãƒ¦ãƒ¼ã‚¶(ã‚»ãƒ³ã‚¿ãƒ¼è«‹æ±‚ã�‹ã�¤ã‚­ãƒ£ãƒªã‚¢ãƒ•ãƒ©ã‚°ONã�®ãƒ¦ãƒ¼ã‚¶)â†’trueã�¨ã�™ã‚‹
			$carrierFlg = $userInfo['platformList'][0]['carrierFlag'];
			$result = $carrierFlg ? true : false;
		} else {
			//è³¼å…¥å�¯èƒ½æ±ºæ¸ˆä¸€è¦§å�–å¾—
			$availablePurchaseList = Configure::read('PPV_PPD_AVAILABLE_BUY');

			//å�–å¾—ã�—ã�Ÿæ±ºæ¸ˆæ–¹æ³•ã�Œè³¼å…¥å�¯èƒ½æ±ºæ¸ˆä¸€è¦§ã�«å­˜åœ¨ã�™ã‚‹ã�‹ç¢ºèª�
			foreach ($availablePurchaseList as $value) {
				if ($value == $contDetailSettlement) {
					$result = true;
					break;
				}
			}
		}

		return $result;
	}

	/**
	 * æŒ‡å®šã�•ã‚Œã�Ÿãƒšã‚¢ãƒ¬ãƒ³ã‚¿ãƒ«ãƒ­ãƒƒã‚¯è¨­å®šå€¤ã�®å ´å�ˆã�«, ã‚³ãƒ³ãƒ†ãƒ³ãƒ„
	 * (ã�®ã‚¢ãƒ€ãƒ«ãƒˆãƒ•ãƒ©ã‚°) ã�Œãƒšã‚¢ãƒ¬ãƒ³ã‚¿ãƒ«ãƒ­ãƒƒã‚¯å¯¾è±¡ã�§ã�‚ã‚‹ã�‹åˆ¤å®šã�™ã‚‹.
	 * <p>
	 * <b>è£œè¶³äº‹é …:</b><br/>
	 * ContentController::_checkParentalType ã�‹ã‚‰éƒ¨åˆ†æŠ½å‡ºã�—ã�¦ä½œæˆ�.
	 * </p>
	 * @param string $parentalLockType å½“è©²ãƒ¦ãƒ¼ã‚¶ãƒ¼ã�®ãƒšã‚¢ãƒ¬ãƒ³ã‚¿ãƒ«ãƒ­ãƒƒã‚¯è¨­å®šå€¤
	 * @param string $adultFlg å¯¾è±¡ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã�®ã‚¢ãƒ€ãƒ«ãƒˆãƒ•ãƒ©ã‚°
	 * @return ãƒšã‚¢ãƒ¬ãƒ³ã‚¿ãƒ«ãƒ­ãƒƒã‚¯å¯¾è±¡ã�®å ´å�ˆã�¯ true, ã��ã�†ã�§ã�ªã�„å ´å�ˆã�¯ false
	 */
	public function isParentalLocked($parentalLockType, $adultFlg) {
		switch ($parentalLockType) {
		case PARENTAL_R15:
			$validList = array(0);
			break;
		case PARENTAL_R18:
			$validList = array(0, 2);
			break;
		case PARENTAL_R20:
			$validList = array(0, 1, 2);
			break;
		case PARENTAL_ADULT:
			$validList = array(0, 1, 2, 3);
			break;
		case PARENTAL_RELEASE:
			return false; // ALL OK
		default:
			$validList = array();
		}
		if (in_array($adultFlg, $validList)) {
			return false; // OK
		}
		return true; // Locked
	}

	/**
	 * ä¼šå“¡æƒ…å ±å�–å¾—çµ�æžœã�‹ã‚‰ã€�ã‚¢ãƒ€ãƒ«ãƒˆã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã�®å†�ç”Ÿå�¯èƒ½ã�‹ãƒ�ã‚§ãƒƒã‚¯
	 *
	 * @param List $userInfo ä¼šå“¡æƒ…å ±ï¼ˆ1ä»¶ã�®ã�¿ã� ã�Œã€�ãƒªã‚¹ãƒˆå½¢å¼�ï¼‰
	 * @return boolean:<br />
	 * 			true  â†’ å†�ç”Ÿå�¯èƒ½<br />
	 * 			false â†’ å†�ç”Ÿä¸�å�¯<br />
	 */
	public function isPlayableAdult($userInfo) {

		$result = false;
		//æ±ºæ¸ˆæ–¹æ³•å�–å¾—
		$contDetailSettlement = $userInfo['platformList'][0]['contDetailSettlement'];
		//å†�ç”Ÿå�¯èƒ½æ±ºæ¸ˆä¸€è¦§å�–å¾—
		$availablePlayList = Configure::read('ADULT_AVAILABLE_PLAY');

		//å�–å¾—ã�—ã�Ÿæ±ºæ¸ˆæ–¹æ³•ã�Œå†�ç”Ÿå�¯èƒ½æ±ºæ¸ˆä¸€è¦§ã�«å­˜åœ¨ã�™ã‚‹ã�‹ç¢ºèª�
		foreach ($availablePlayList as $value) {
			if ($value == $contDetailSettlement) {
				$result = true;
				break;
			}
		}
		return $result;
	}

	/**
	 * ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã‚¿ã‚¤ãƒ—ã�®åˆ¤åˆ¥
	 *
	 * @param array $contentsInfo
	 * @return ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã‚¿ã‚¤ãƒ—<br/>
	 *         1: VOD 2:ã‚¢ãƒ€ãƒ«ãƒˆ 3:ã‚«ãƒ©ã‚ªã‚±
	 */
	public function distinctionContentsType($contentsInfo) { 
		$adultFlg = @$contentsInfo['Content']['fi_adult_flg'];
		$titleId = @$contentsInfo['Content']['fi_title_id'];

		if ($adultFlg == 9) { // TODO: å®šæ•°åŒ–
		// ã‚¢ãƒ€ãƒ«ãƒˆ
			return CONTENTS_TYPE_ADULT;
		} else if ($titleId == KARAOKE_TITLE_ID) {
			// ã‚«ãƒ©ã‚ªã‚±
			return CONTENTS_TYPE_KARAOKE;
		} else {
			// VOD
			return CONTENTS_TYPE_VOD;
		}
	}

	/**
	 * è©²å½“ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã�®è¦–è�´å±¥æ­´ã‚’æ®‹ã�™ã�‹åˆ¤åˆ¥
	 *
	 * @param array $contentsInfo
	 * @param array $historySetting
	 * @return boolean true:æ®‹ã�™ false:æ®‹ã�•ã�ªã�„
	 */
	public function isRegistSityouHistory($contentsInfo, $historySetting) {
		//var_dump($contentsInfo,$historySetting);die;
		$contentType = $this->distinctionContentsType($contentsInfo);

		if ($contentType == CONTENTS_TYPE_ADULT) {
			// ã‚¢ãƒ€ãƒ«ãƒˆ
			return @$historySetting['playHistAdult'];

		} else if ($contentType == CONTENTS_TYPE_KARAOKE) {
			// ã‚«ãƒ©ã‚ªã‚±
			return @$historySetting['playHistKaraoke'];

		} else if ($contentType == CONTENTS_TYPE_VOD) {
			// VOD
			return @$historySetting['playHistVideo'];

		}

		return false;
	}

	/**
	 * ç�¾åœ¨ã�®é…�ä¿¡æ•°ã‚’å�–å¾—ã�™ã‚‹
	 * â€»é…�ä¿¡ã‚³ãƒ³ãƒ†ãƒ³ãƒ„æ•°å®šç¾©ãƒ•ã‚¡ã‚¤ãƒ«ã�®æœ€çµ‚æ›´æ–°æ—¥ã‚’ãƒ�ã‚§ãƒƒã‚¯ã�—ã€�
	 * ã€€ã‚¹ãƒ¬ãƒƒãƒ‰å‡¦ç�†ã�«ã�¦å®šç¾©ãƒ•ã‚¡ã‚¤ãƒ«ã�®æ›´æ–°ã‚’è¡Œã�†ã€‚
	 *
	 * @return array é…�ä¿¡æ•°(VIDEOã�¨ã‚«ãƒ©ã‚ªã‚±ã�¯åˆ¥ã�§ä¿�æŒ�)
	 */
	public function getDistributionVols() {
		$filename = DISTRIBUTION_VOLS_FILE_PATH; //é…�ä¿¡ã‚³ãƒ³ãƒ†ãƒ³ãƒ„æ•°å®šç¾©ãƒ•ã‚¡ã‚¤ãƒ«
		$isRemake = false; //å®šç¾©ãƒ•ã‚¡ã‚¤ãƒ«å†�ç”Ÿæˆ�ãƒ•ãƒ©ã‚°

		// å®šç¾©ãƒ•ã‚¡ã‚¤ãƒ«ã�®å†�ç”Ÿæˆ�æœ‰ç„¡åˆ¤å®š
		if (file_exists($filename)) {
			$fileTime = filemtime($filename); //å®šç¾©ãƒ•ã‚¡ã‚¤ãƒ«æœ€çµ‚æ›´æ–°æ—¥æ™‚
			$time = strtotime("-1 day"); //ç�¾åœ¨ã‚ˆã‚Š1æ—¥å‰�
			if ($time > $fileTime) {
				// ã‚¿ã‚¤ãƒ ã‚¹ã‚¿ãƒ³ãƒ—ã�Œ1æ—¥ä»¥ä¸Šå‰�ã�®å ´å�ˆã€�ãƒ•ã‚¡ã‚¤ãƒ«ã‚’å†�ç”Ÿæˆ�
				$isRemake = true;
			}
		} else {
			$isRemake = true;
		}
		if ($isRemake) {
			// å®šç¾©ãƒ•ã‚¡ã‚¤ãƒ«ã‚’ã‚¹ãƒ¬ãƒƒãƒ‰ã�«ã�¦å†�ç”Ÿæˆ�
			$cmd = 'cd /var/dtv/www; ./cake/console/cake -app ./app DailyBatch all --force > /dev/null &';
			shell_exec($cmd);
		}

		// é…�ä¿¡æ•°ã‚’å�–å¾—
		@include DISTRIBUTION_VOLS_FILE_PATH;
		$distributionVols = Configure::read('DISTRIBUTION_VOLS');

		// é…�ä¿¡æ•°ã�Œå�–å¾—ã�§ã��ã�ªã�‹ã�£ã�Ÿå ´å�ˆã�¯ã€Œ0ã€�ã‚’è¨­å®šã�™ã‚‹
		if (!isset($distributionVols)) {

			$distributionVols = array('video' => 0, 'karaoke' => 0);
		} else {
			//é…�ä¿¡é›†å�–å¾—æˆ�åŠŸ
// 			//DTVã�®ã‚³ãƒ³ãƒ†ãƒ³ãƒ„æ•°ã‚’å�–å¾—
// 			$video = @$distributionVols[SERVICE_ID_TYPE_DTV];
			//STBã�®ã‚³ãƒ³ãƒ†ãƒ³ãƒ„æ•°ã‚’å�–å¾—
			$video = @$distributionVols[SERVICE_ID_TYPE_STB];
			//å�–å¾—ã�§ã��ã�ªã�‹ã�£ã�Ÿå ´å�ˆã�¯0
			if(!isset($video)){
				$video  = 0;
			}
			//ã‚«ãƒ©ã‚ªã‚±æ•°å�–å¾—
			$karaoke = @$distributionVols['karaoke'];
			//å�–å¾—ã�§ã��ã�ªã�‹ã�£ã�Ÿå ´å�ˆã�¯0
			if(!isset($karaoke)){
				$karaoke  = 0;
			}
			$distributionVols = array('video' => $video, 'karaoke' => $karaoke);
		}

		return $distributionVols;
	}

	/**
	 * ã‚¯ãƒ©ã‚¤ã‚¢ãƒ³ãƒˆã‚¢ãƒ—ãƒªã‚±ãƒ¼ã‚·ãƒ§ãƒ³ç¨®åˆ¥åˆ¤å®š
	 *
	 * @param string $userAgent
	 */
	public function distinctionClientApplicationType($userAgent) {
		$ret = CLIENT_APP_OTHER;

		$deviceType = $this->_determineDeviceTypeByUA($userAgent);

		if (in_array($deviceType, array(DEVICE_SMART_PHONE, DEVICE_TABLET, DEVICE_HIKARI_BOX))) {
			if (preg_match('/' . CLIENT_APP_PATTERN_TBB . '/', $userAgent) || $this->isSmartPlay($userAgent)) {
				// TwonkyBeamBrowser
				// SmartPlayã‚‚TBBæ‰±ã�„ã�¨ã�™ã‚‹
				$ret = CLIENT_APP_TBB;
			}
		}
		return $ret;
	}

	/**
	 * ã‚¯ãƒ­ãƒ¼ãƒ©ãƒ¼ã‚¢ã‚¯ã‚»ã‚¹åˆ¤åˆ¥
	 *
	 * @param string $userAgent
	 * @return åˆ¤åˆ¥çµ�æžœ
	 */
	public function distinctionCrawler($userAgent) {
		$result = false;

		// å¿…é ˆãƒ�ã‚§ãƒƒã‚¯
		if (!@$userAgent) {
			$param = array("ua" => $userAgent);
			$this->outputWarningLog(COMMON_RESULT_REQUIRED_ERROR, COMMON_RESULT_REQUIRED_ERROR_MESSAGE, $param);
			return result;
		}

		$filePath = CRAWLER_LIST_FILE_PATH;
		if (file_exists($filePath)) {
			// ã‚ªãƒ¼ãƒ—ãƒ³
			$fp = fopen($filePath, 'r');

			while (!feof($fp)) {
				// UA Check
				$line = rtrim (mb_convert_encoding(fgets($fp), "UTF-8"));
				if (@$line && preg_match("/$line/", $userAgent)) {
					$result = true;
					break;
				}
			}
			// ã‚¯ãƒ­ãƒ¼ã‚º
			fclose($fp);

		} else {
			// ãƒ•ã‚¡ã‚¤ãƒ«å­˜åœ¨ã�—ã�ªã�„å ´å�ˆã�¯ãƒ­ã‚°å‡ºåŠ›
			$msg = COMMON_RESULT_FILE_ERROR_MESSAGE . ': file not exists';
			$this->outputWarningLog(COMMON_RESULT_FILE_ERROR, $msg, array('filePath' => $filePath));
		}

		return $result;
	}

	/**
	 * SPãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆ
	 * ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆå¯¾è±¡ç«¯æœ«â†’true
	 * ã��ã‚Œä»¥å¤–â†’false
	 */
	function isBlackList() {
		$isBlack = false;
		//ã‚¿ã‚¤ãƒ ã‚¹ã‚¿ãƒ³ãƒ—ã�®å�–å¾—
		$times = Cache::read(SP_BLACK_LIST_KEY_NAME_TIME_STAMP);
		//ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å­˜åœ¨ç¢ºèª�
		if (file_exists(SP_BLACK_LIST_FILE_NAME)) {
			if ($times != filemtime(SP_BLACK_LIST_FILE_NAME)) {
				//ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆèª­ã�¿ç›´ã�—ã�®ã�Ÿã‚�ã‚­ãƒ£ãƒƒã‚·ãƒ¥ã�‹ã‚‰å‰Šé™¤
				Cache::delete(SP_BLACK_LIST_KEY_NAME);
				Cache::write(SP_BLACK_LIST_KEY_NAME_TIME_STAMP, filemtime(SP_BLACK_LIST_FILE_NAME));
				$this->outputInfoLog('SPãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆã�Œæ›´æ–°ã�•ã‚Œã�¾ã�—ã�Ÿã€‚');
			}
			$data = Cache::read(SP_BLACK_LIST_KEY_NAME);
			if (!$data) {
				//ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«èª­ã�¿ç›´ã�—
				$data = file_get_contents(SP_BLACK_LIST_FILE_NAME);
				Cache::write(SP_BLACK_LIST_KEY_NAME, $data);
				$this->outputInfoLog('SPãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å†�èª­ã�¿è¾¼ã�¿');
			}

			foreach (preg_split('/\r\n/', $data) as $value) {
				if (ereg($value, env('HTTP_USER_AGENT'))) {
					//ãƒžãƒƒãƒ�
					$isBlack = true;
					break;
				}
			}
		} else {
			//ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œå­˜åœ¨ã�—ã�ªã�„å ´å�ˆWarningãƒ­ã‚°ã‚’å‡ºåŠ›ã�—ã€�å‡¦ç�†ç¶šè¡Œ
			$this->outputErrorLog('','SPç”¨ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œã�‚ã‚Šã�¾ã�›ã‚“ã€‚');
		}
		return $isBlack;
	}
	/**
	 * SPãƒ›ãƒ¯ã‚¤ãƒˆãƒªã‚¹ãƒˆ
	 * ãƒ›ãƒ¯ã‚¤ãƒˆãƒªã‚¹ãƒˆå¯¾è±¡ç«¯æœ«â†’true
	 * ã��ã‚Œä»¥å¤–â†’false
	 */
	function iswhiteList() {
		$iswhite = false;
		//ã‚¿ã‚¤ãƒ ã‚¹ã‚¿ãƒ³ãƒ—ã�®å�–å¾—
		$times = Cache::read(SP_WHITE_LIST_KEY_NAME_TIME_STAMP);
		//ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å­˜åœ¨ç¢ºèª�
		if (file_exists(SP_WHITE_LIST_FILE_NAME)) {
			if ($times != filemtime(SP_WHITE_LIST_FILE_NAME)) {
				//ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆèª­ã�¿ç›´ã�—ã�®ã�Ÿã‚�ã‚­ãƒ£ãƒƒã‚·ãƒ¥ã�‹ã‚‰å‰Šé™¤
				Cache::delete(SP_WHITE_LIST_KEY_NAME);
				Cache::write(SP_WHITE_LIST_KEY_NAME_TIME_STAMP, filemtime(SP_WHITE_LIST_FILE_NAME));
				$this->outputInfoLog('SPãƒ›ãƒ¯ã‚¤ãƒˆãƒªã‚¹ãƒˆã�Œæ›´æ–°ã�•ã‚Œã�¾ã�—ã�Ÿã€‚');
			}
			$data = Cache::read(SP_WHITE_LIST_KEY_NAME);
			if (!$data) {
				//ãƒ›ãƒ¯ã‚¤ãƒˆãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«èª­ã�¿ç›´ã�—
				$data = file_get_contents(SP_WHITE_LIST_FILE_NAME);
				Cache::write(SP_WHITE_LIST_KEY_NAME, $data);
				$this->outputInfoLog('SPãƒ›ãƒ¯ã‚¤ãƒˆãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å†�èª­ã�¿è¾¼ã�¿');
			}

			foreach (preg_split('/\r\n/', $data) as $value) {
				if (ereg($value, env('HTTP_USER_AGENT'))) {
					//ãƒžãƒƒãƒ�
					$iswhite = true;
					break;
				}
			}
		} else {
			//ãƒ›ãƒ¯ã‚¤ãƒˆãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œå­˜åœ¨ã�—ã�ªã�„å ´å�ˆWarningãƒ­ã‚°ã‚’å‡ºåŠ›ã�—ã€�å‡¦ç�†ç¶šè¡Œ
			$this->outputErrorLog('','SPç”¨ãƒ›ãƒ¯ã‚¤ãƒˆãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œã�‚ã‚Šã�¾ã�›ã‚“ã€‚');
		}
		return $iswhite;
	}
	/**
	 * SPå†�ç”Ÿã‚¨ãƒ³ã‚¸ãƒ³åˆ¤åˆ¥
	 * å¯Œå£«é€šâ†’PLAY_ENGINE_FUJITU
	 * Xperiaâ†’PLAY_ENGINE_XPERIA
	 * ã��ã‚Œä»¥å¤–â†’PLAY_ENGINE_OTHER
	 */
	function identifyPlayEngine(){
		//ãƒ•ã‚¸å�´
		//ã‚¿ã‚¤ãƒ ã‚¹ã‚¿ãƒ³ãƒ—ã�®å�–å¾—
		$times = Cache::read(SP_PLAY_ENGINE_FUJI_KEY_NAME_TIME_STAMP);
		//ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å­˜åœ¨ç¢ºèª�
		if (file_exists(SP_PLAY_ENGINE_LIST_FUJI)) {
			if ($times != filemtime(SP_PLAY_ENGINE_LIST_FUJI)) {
				//ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆèª­ã�¿ç›´ã�—ã�®ã�Ÿã‚�ã‚­ãƒ£ãƒƒã‚·ãƒ¥ã�‹ã‚‰å‰Šé™¤
				Cache::delete(SP_PLAY_ENGINE_FUJI_KEY_NAME);
				Cache::write(SP_PLAY_ENGINE_FUJI_KEY_NAME_TIME_STAMP, filemtime(SP_PLAY_ENGINE_LIST_FUJI));
				$this->outputInfoLog('SP_å¯Œå£«å†�ç”Ÿã‚¨ãƒ³ã‚¸ãƒ³ãƒªã‚¹ãƒˆã�Œæ›´æ–°ã�•ã‚Œã�¾ã�—ã�Ÿã€‚');
			}
			$data = Cache::read(SP_PLAY_ENGINE_FUJI_KEY_NAME);
			if (!$data) {
				//ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«èª­ã�¿ç›´ã�—
				$data = file_get_contents(SP_PLAY_ENGINE_LIST_FUJI);
				Cache::write(SP_PLAY_ENGINE_FUJI_KEY_NAME, $data);
				$this->outputInfoLog('SP_å¯Œå£«å†�ç”Ÿã‚¨ãƒ³ã‚¸ãƒ³ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å†�èª­ã�¿è¾¼ã�¿');
			}

			foreach (preg_split('/\r\n/', $data) as $value) {
				if (ereg($value, env('HTTP_USER_AGENT'))) {
					//ãƒžãƒƒãƒ�
					return PLAY_ENGINE_FUJITU;
				}
			}
		} else {
			//ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œå­˜åœ¨ã�—ã�ªã�„å ´å�ˆWarningãƒ­ã‚°ã‚’å‡ºåŠ›ã�—ã€�å‡¦ç�†ç¶šè¡Œ
			$this->outputErrorLog('','SP_å¯Œå£«å†�ç”Ÿã‚¨ãƒ³ã‚¸ãƒ³ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œã�‚ã‚Šã�¾ã�›ã‚“ã€‚');
		}

		//ãƒšãƒªã‚¢å�´
		//ã‚¿ã‚¤ãƒ ã‚¹ã‚¿ãƒ³ãƒ—ã�®å�–å¾—
		$times = Cache::read(SP_PLAY_ENGINE_XPERIA_KEY_NAME_TIME_STAMP);
		//ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å­˜åœ¨ç¢ºèª�
		if (file_exists(SP_PLAY_ENGINE_LIST_XPERIA)) {
			if ($times != filemtime(SP_PLAY_ENGINE_LIST_XPERIA)) {
				//ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆèª­ã�¿ç›´ã�—ã�®ã�Ÿã‚�ã‚­ãƒ£ãƒƒã‚·ãƒ¥ã�‹ã‚‰å‰Šé™¤
				Cache::delete(SP_PLAY_ENGINE_XPERIA_KEY_NAME);
				Cache::write(SP_PLAY_ENGINE_XPERIA_KEY_NAME_TIME_STAMP, filemtime(SP_PLAY_ENGINE_LIST_XPERIA));
				$this->outputInfoLog('SP_Xperiaå†�ç”Ÿã‚¨ãƒ³ã‚¸ãƒ³ãƒªã‚¹ãƒˆã�Œæ›´æ–°ã�•ã‚Œã�¾ã�—ã�Ÿã€‚');
			}
			$data = Cache::read(SP_PLAY_ENGINE_XPERIA_KEY_NAME);
			if (!$data) {
				//ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«èª­ã�¿ç›´ã�—
				$data = file_get_contents(SP_PLAY_ENGINE_LIST_XPERIA);
				Cache::write(SP_PLAY_ENGINE_XPERIA_KEY_NAME, $data);
				$this->outputInfoLog('SP_Xperiaå†�ç”Ÿã‚¨ãƒ³ã‚¸ãƒ³ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å†�èª­ã�¿è¾¼ã�¿');
			}

			foreach (preg_split('/\r\n/', $data) as $value) {
				if (ereg($value, env('HTTP_USER_AGENT'))) {
					//ãƒžãƒƒãƒ�
					return PLAY_ENGINE_XPERIA;
				}
			}
		} else {
			//ãƒ–ãƒ©ãƒƒã‚¯ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œå­˜åœ¨ã�—ã�ªã�„å ´å�ˆWarningãƒ­ã‚°ã‚’å‡ºåŠ›ã�—ã€�å‡¦ç�†ç¶šè¡Œ
			$this->outputErrorLog('','SP_Xperiaå†�ç”Ÿã‚¨ãƒ³ã‚¸ãƒ³ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œã�‚ã‚Šã�¾ã�›ã‚“ã€‚');
		}

		return PLAY_ENGINE_OTHER;
	}
	/**
	 * SPé«˜ç”»è³ªã‚³ãƒ³ãƒ†ãƒ³ãƒ„å¯¾å¿œ<br />
	 * é«˜ç”»è³ªå¯¾è±¡â†’array('RESULT' => true, 'CONTENTS_ID' => é«˜ç”»è³ªã‚³ãƒ³ãƒ†ãƒ³ãƒ„ID) <br />
	 * ã��ã‚Œä»¥å¤–â†’array('RESULT' => false, 'CONTENTS_ID' => null)
	 */
	function ishighQualityContents($contentsId = null) {
		$isHQ = array('RESULT' => false, 'CONTENTS_ID' => null);
		if(isset($contentsId)){
			//ã‚¿ã‚¤ãƒ ã‚¹ã‚¿ãƒ³ãƒ—ã�®å�–å¾—
			$times = Cache::read(SP_HIGH_QUALITY_LIST_KEY_NAME_TIME_STAMP);
			//é«˜ç”»è³ªãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å­˜åœ¨ç¢ºèª�
			if (file_exists(SP_HIGH_QUALITY_LIST_FILE_NAME)) {
				if ($times != filemtime(SP_HIGH_QUALITY_LIST_FILE_NAME)) {
					//é«˜ç”»è³ªãƒªã‚¹ãƒˆèª­ã�¿ç›´ã�—ã�®ã�Ÿã‚�ã‚­ãƒ£ãƒƒã‚·ãƒ¥ã�‹ã‚‰å‰Šé™¤
					Cache::delete(SP_HIGH_QUALITY_LIST_KEY_NAME);
					Cache::write(SP_HIGH_QUALITY_LIST_KEY_NAME_TIME_STAMP, filemtime(SP_HIGH_QUALITY_LIST_FILE_NAME));
					$this->outputInfoLog('SPé«˜ç”»è³ªãƒªã‚¹ãƒˆã�Œæ›´æ–°ã�•ã‚Œã�¾ã�—ã�Ÿã€‚');
				}
				$data = Cache::read(SP_HIGH_QUALITY_LIST_KEY_NAME);
				if (!$data) {
					//ãƒ›ãƒ¯ã‚¤ãƒˆãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«èª­ã�¿ç›´ã�—
					$data = file_get_contents(SP_HIGH_QUALITY_LIST_FILE_NAME);
					Cache::write(SP_HIGH_QUALITY_LIST_KEY_NAME, $data);
					$this->outputInfoLog('SPé«˜ç”»è³ªãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å†�èª­ã�¿è¾¼ã�¿');
				}

				foreach (preg_split('/\r\n/', $data) as $key => $value) {
					//ä¸€è¡Œç›®ã�¯ãƒ˜ãƒƒãƒ€
					if($key === 0){
						continue;
					}
					//ã‚³ãƒ³ãƒ†ãƒ³ãƒ„IDæ¯”è¼ƒ
					$listContentId = preg_split('/,/', $value);
					if($contentsId == $listContentId[0]){
						//ãƒžãƒƒãƒ�
						$isHQ = array('RESULT' => true, 'CONTENTS_ID' => $listContentId[1]);
						break;
					}
				}
			} else {
				//é«˜ç”»è³ªãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œå­˜åœ¨ã�—ã�ªã�„å ´å�ˆWarningãƒ­ã‚°ã‚’å‡ºåŠ›ã�—ã€�å‡¦ç�†ç¶šè¡Œ
				$this->outputErrorLog('','SPé«˜ç”»è³ªãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œã�‚ã‚Šã�¾ã�›ã‚“ã€‚');
			}
		}
		return $isHQ;
	}

	/**
	* æ¨©åˆ©è€…IDã�‹ã‚‰å†�ç”Ÿåˆ¶å¾¡ã�Œå¿…è¦�ã�ªã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã‚’åˆ¤å®š
	* å†�ç”Ÿåˆ¶å¾¡å¯¾è±¡â†’array('RESULT' => true, 'ACCOUNT_NUM' => å†�ç”Ÿå�¯èƒ½ã‚¢ã‚«ã‚¦ãƒ³ãƒˆæ•°)
	* å¯¾è±¡å¤–â†’array('RESULT' => false, 'ACCOUNT_NUM' => null)
	*/
	function isPlayControlByHolderId($holderId = null) {
		$response = array('RESULT' => false, 'ACCOUNT_NUM' => null);
		if(isset($holderId)){
			//ã‚¿ã‚¤ãƒ ã‚¹ã‚¿ãƒ³ãƒ—ã�®å�–å¾—
			$times = Cache::read(PLAY_CONTROL_HOLDER_KEY_NAME_TIME_STAMP);
			//æ¨©åˆ©è€…IDãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å­˜åœ¨ç¢ºèª�
			if (file_exists(PLAY_CONTROL_HOLDER_FILE_NAME)) {
				if ($times != filemtime(PLAY_CONTROL_HOLDER_FILE_NAME)) {
					//æ¨©åˆ©è€…IDãƒªã‚¹ãƒˆèª­ã�¿ç›´ã�—ã�®ã�Ÿã‚�ã‚­ãƒ£ãƒƒã‚·ãƒ¥ã�‹ã‚‰å‰Šé™¤
					Cache::delete(PLAY_CONTROL_HOLDER_KEY_NAME);
					Cache::write(PLAY_CONTROL_HOLDER_KEY_NAME_TIME_STAMP, filemtime(PLAY_CONTROL_HOLDER_FILE_NAME));
					$this->outputInfoLog('å†�ç”Ÿåˆ¶å¾¡æ¨©åˆ©è€…IDãƒªã‚¹ãƒˆã�Œæ›´æ–°ã�•ã‚Œã�¾ã�—ã�Ÿã€‚');
				}
				$data = Cache::read(PLAY_CONTROL_HOLDER_KEY_NAME);
				if (!$data) {
					//å†�ç”Ÿåˆ¶å¾¡æ¨©åˆ©è€…IDãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«èª­ã�¿ç›´ã�—
					$data = file_get_contents(PLAY_CONTROL_HOLDER_FILE_NAME);
					Cache::write(PLAY_CONTROL_HOLDER_KEY_NAME, $data);
					$this->outputInfoLog('å†�ç”Ÿåˆ¶å¾¡æ¨©åˆ©è€…IDãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å†�èª­ã�¿è¾¼ã�¿');
				}

				foreach (preg_split('/\r\n/', $data) as $key => $value) {
					//ä¸€è¡Œç›®ã�¯ãƒ˜ãƒƒãƒ€
					if($key === 0){
						continue;
					}
					//ã‚³ãƒ³ãƒ†ãƒ³ãƒ„IDæ¯”è¼ƒ
					$listHolderId = preg_split('/,/', $value);
					if($holderId == $listHolderId[0]){
						//ãƒžãƒƒãƒ�
						$response = array('RESULT' => true, 'ACCOUNT_NUM' => $listHolderId[1]);
						break;
					}
				}
			} else {
				//å†�ç”Ÿåˆ¶å¾¡æ¨©åˆ©è€…IDãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œå­˜åœ¨ã�—ã�ªã�„å ´å�ˆWarningãƒ­ã‚°ã‚’å‡ºåŠ›ã�—ã€�å‡¦ç�†ç¶šè¡Œ
				$this->outputErrorLog('','å†�ç”Ÿåˆ¶å¾¡æ¨©åˆ©è€…IDãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œã�‚ã‚Šã�¾ã�›ã‚“ã€‚');
			}
		}
		return $response;
	}

	/**
	 * å…‰BOX+åˆ¤åˆ¥
	 * @param String $userAgent ãƒ¦ãƒ¼ã‚¶ã‚¨ãƒ¼ã‚¸ã‚§ãƒ³ãƒˆ
	 * @return 1:å…‰BOXã�§ã�‚ã‚‹ã€�0:å…‰BOXã�§ã�ªã�„
	 */
	function isHikariBox($userAgent) {
		return preg_match('/' . HIKARI_BOX_PATTERN_HB_100 . '/', $userAgent) ||
				$this->isHikariBox2($userAgent) ||
				$this->isSmartPlay($userAgent);
	}

	/**
	 * å…‰BOX+2åˆ¤åˆ¥
	 * @param String $userAgent ãƒ¦ãƒ¼ã‚¶ã‚¨ãƒ¼ã‚¸ã‚§ãƒ³ãƒˆ
	 * @return 1:å…‰BOXã�§ã�‚ã‚‹ã€�0:å…‰BOXã�§ã�ªã�„
	 */
	function isHikariBox2($userAgent) {
		return preg_match('/' . HIKARI_BOX_PATTERN_HB_1000 . '/', $userAgent);
	}

	/**
	 * å…‰BOX+2(SmartPlay)åˆ¤åˆ¥
	 * @param String $userAgent ãƒ¦ãƒ¼ã‚¶ã‚¨ãƒ¼ã‚¸ã‚§ãƒ³ãƒˆ
	 * @return 1:SmartPlayã�§ã�‚ã‚‹ã€�0:SmartPlayã�§ã�ªã�„
	 */
	function isSmartPlay($userAgent) {
		return preg_match('/' . HIKARI_BOX_PATTERN_SMART_PLAY . '/', $userAgent);
	}

	/**
	* PS VITAåˆ¤åˆ¥
	* @param String $userAgent ãƒ¦ãƒ¼ã‚¶ã‚¨ãƒ¼ã‚¸ã‚§ãƒ³ãƒˆ
	* @return 1:PS VITAã�§ã�‚ã‚‹ã€�0:PS VITAã�§ã�ªã�„
	*/
	function isPsVita($userAgent) {
		return preg_match('/' . DEVICE_PATTERN_PS_VITA . '/', $userAgent);
	}

	/**
	* PS VITA TVåˆ¤åˆ¥
	* @param String $userAgent ãƒ¦ãƒ¼ã‚¶ã‚¨ãƒ¼ã‚¸ã‚§ãƒ³ãƒˆ
	* @return 1:PS VITA TVã�§ã�‚ã‚‹ã€�0:PS VITA TVã�§ã�ªã�„
	*/
	function isPsVitaTv($userAgent) {
		return preg_match('/' . DEVICE_PATTERN_PS_VITA_TV . '/', $userAgent);
	}

	/**
	* JCOTTåˆ¤åˆ¥
	* @param String $userAgent ãƒ¦ãƒ¼ã‚¶ã‚¨ãƒ¼ã‚¸ã‚§ãƒ³ãƒˆ
	* @return 1:JCOTTã�§ã�‚ã‚‹ã€�0:JCOTTã�§ã�ªã�„
	*/
	function isJcott($userAgent) {
		return preg_match('/' . DEVICE_PATTERN_JCOTT . '/', $userAgent);
	}

	/**
	 * Chromecaståˆ¤åˆ¥
	 * @param String $userAgent ãƒ¦ãƒ¼ã‚¶ã‚¨ãƒ¼ã‚¸ã‚§ãƒ³ãƒˆ
	 * @return 1:Chromecastã�§ã�‚ã‚‹ã€�0:Chromecastã�§ã�ªã�„
	 */
	function isChromecast($userAgent) {
		return preg_match('/' . DEVICE_PATTERN_CHROMECAST . '/', $userAgent);
	}

	/**
	 * WGETãƒ¦ãƒ¼ã‚¶åˆ¤åˆ¥ï¼ˆé�™çš„HTMLã‚’ä½œæˆ�ã�™ã‚‹ãƒ¦ãƒ¼ã‚¶ã�‹ï¼‰
	 * @param string $userAgent ãƒ¦ãƒ¼ã‚¶ã‚¨ãƒ¼ã‚¸ã‚§ãƒ³ãƒˆ
	 * @return 1:WGETãƒ¦ãƒ¼ã‚¶ã�§ã�‚ã‚‹ã€�0:WGETãƒ¦ãƒ¼ã‚¶ã�§ã�ªã�„
	 */
	function isWgetUser($userAgent) {
		return preg_match('/__WGET_PROMO__/', $userAgent) || preg_match('/__WGET_RANKING__/', $userAgent) || preg_match('/__WGET_CREATE_DB__/', $userAgent);
	}

	/**
	 * ã‚¿ãƒƒãƒ—ãƒŠã‚¦åˆ¤åˆ¥
	 * @return ture:ã‚¿ãƒƒãƒ—ãƒŠã‚¦ã�§ã�‚ã‚‹ã€�false:ã‚¿ãƒƒãƒ—ãƒŠã‚¦ã�§ã�ªã�„
	 */
	function isTapnow() {
		$isTapnow = false;
		//ã‚¿ã‚¤ãƒ ã‚¹ã‚¿ãƒ³ãƒ—ã�®å�–å¾—
		$times = Cache::read(SP_TAPNOW_LIST_KEY_NAME_TIME_STAMP);
		//ã‚¿ãƒƒãƒ—ãƒŠã‚¦ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å­˜åœ¨ç¢ºèª�
		if (file_exists(SP_TAPNOW_LIST_FILE_NAME)) {
			if ($times != filemtime(SP_TAPNOW_LIST_FILE_NAME)) {
				//ã‚¿ãƒƒãƒ—ãƒŠã‚¦ãƒªã‚¹ãƒˆèª­ã�¿ç›´ã�—ã�®ã�Ÿã‚�ã‚­ãƒ£ãƒƒã‚·ãƒ¥ã�‹ã‚‰å‰Šé™¤
				Cache::delete(SP_TAPNOW_LIST_KEY_NAME);
				Cache::write(SP_TAPNOW_LIST_KEY_NAME_TIME_STAMP, filemtime(SP_TAPNOW_LIST_FILE_NAME));
				$this->outputInfoLog('ã‚¿ãƒƒãƒ—ãƒŠã‚¦ãƒªã‚¹ãƒˆã�Œæ›´æ–°ã�•ã‚Œã�¾ã�—ã�Ÿã€‚');
			}
			$data = Cache::read(SP_TAPNOW_LIST_KEY_NAME);
			if (!$data) {
				//ã‚¿ãƒƒãƒ—ãƒŠã‚¦ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«èª­ã�¿ç›´ã�—
				$data = file_get_contents(SP_TAPNOW_LIST_FILE_NAME);
				Cache::write(SP_TAPNOW_LIST_KEY_NAME, $data);
				$this->outputInfoLog('ã‚¿ãƒƒãƒ—ãƒŠã‚¦ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å†�èª­ã�¿è¾¼ã�¿');
			}

			foreach (preg_split('/\r\n/', $data) as $value) {
				if (ereg($value, env('HTTP_USER_AGENT'))) {
					//ãƒžãƒƒãƒ�
					$isTapnow = true;
					break;
				}
			}
		} else {
			//ã‚¿ãƒƒãƒ—ãƒŠã‚¦ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œå­˜åœ¨ã�—ã�ªã�„å ´å�ˆWarningãƒ­ã‚°ã‚’å‡ºåŠ›ã�—ã€�å‡¦ç�†ç¶šè¡Œ
			$this->outputErrorLog('','ã‚¿ãƒƒãƒ—ãƒŠã‚¦ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œã�‚ã‚Šã�¾ã�›ã‚“ã€‚');
		}
		return $isTapnow;
	}

	/**
	 * é–‹ç™ºç”¨ãƒ­ã‚¸ãƒƒã‚¯<BR>
	 * ã‚³ãƒ³ãƒ†ãƒ³ãƒ„IDã‚’å†�ç”Ÿå�¯èƒ½ã�ªã‚µãƒ³ãƒ—ãƒ«IDã�«æ›¸ã��æ�›ã�ˆã‚‹.<BR>
	 * é–‹ç™ºç’°å¢ƒã�§ç„¡ã�„å ´å�ˆã�¯ã��ã�®ã�¾ã�¾ã�®ã‚³ãƒ³ãƒ†ãƒ³ãƒ„IDã‚’è¿”å�´ã�™ã‚‹.<BR>
	 * @param String $contentsId ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ID
	 * @param String $deviceFlg ãƒ‡ãƒ�ã‚¤ã‚¹æ¯Žã�®åˆ¤åˆ¥ã‚’è¡Œã�†ã�‹ã�®ãƒ•ãƒ©ã‚°
	 * @param String $highQuality trueã�ªã‚‰é«˜ç”»è³ª
	 * @param String $cmsContentsType CMSã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã‚¿ã‚¤ãƒ—ï¼ˆ1:VODã€�2:ã‚¢ãƒ€ãƒ«ãƒˆã€�3:ã‚«ãƒ©ã‚ªã‚±ï¼‰
	 */
	function changeSampleContents($contentsId, $deviceFlg = false, $highQuality = false, $cmsContentsType = CONTENTS_TYPE_VOD, $contentForm = null) {
		// ã�Šå®¢æ§˜é–‹ç™ºç’°å¢ƒç”¨ãƒ­ã‚¸ãƒƒã‚¯
		if (CHANGE_SAMPLE_CONTENT_FLG == 1) {
			/*
			 * ãƒ‡ãƒ�ã‚¤ã‚¹åˆ¤åˆ¥ã‚’è¡Œã�†å ´å�ˆ
			* PC, SPã�¯å¤‰æ›´ã�›ã�šè¿”å�´ã�™ã‚‹
			*/
			if ($deviceFlg && in_array(@$_SERVER['HTTP_HOST'], array(PC_DOMAIN, SP_DOMAIN, PC_ADULT_DOMAIN, API_DOMAIN))) {
				return $contentsId;
			}

			$userAgent = env('HTTP_USER_AGENT');
			//ã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰å�–å¾—
			$siteCodeInfo = $this->distinctionSiteCode($userAgent);
			if ($siteCodeInfo[RESPONSE_CODE] != COMMON_RESULT_SUCCESS) {
				//ã‚¨ãƒ©ãƒ¼å‡ºåŠ›(ãƒªãƒ€ã‚¤ãƒ¬ã‚¯ãƒˆã�¯ã�—ã�ªã�„)
				$called = "Util::distinctionSiteCode($userAgent)";
				$params = array('called' => $called, 'return' => $siteCodeInfo);
				$this->outputErrorLog($siteCodeInfo[RESPONSE_CODE], 'ã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰å�–å¾—å¤±æ•—', $params);
				return;
			}
			$highQualityInfo = $this->ishighQualityContents($contentsId);
			// ã‚µãƒ³ãƒ—ãƒ«ã‚³ãƒ³ãƒ†ãƒ³ãƒ„IDã‚’å�–å¾—ï¼†ç½®ã��æ�›ã�ˆ
			if (in_array(@$_SERVER['HTTP_HOST'], array(PC_DOMAIN))) {
				$showPlayType = $this->Cookie->read(COOKIE_NAME_PLAYER_SHOW_TYPE);
				if ($showPlayType == 1) {
					// WMV
					$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_WMV');
				} else {
					$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_SMOOTH');
				}
			} else if(in_array(@$_SERVER['HTTP_HOST'], array(PC_ADULT_DOMAIN))){
				//ã‚¢ãƒ€ãƒ«ãƒˆãƒ‰ãƒ¡ã‚¤ãƒ³å†…ã�§ã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰åˆ¤åˆ¥ã‚’è¡Œã�†
				if (in_array($siteCodeInfo['siteCode'], array(SITECD_SMART_PHONE_IPHONE, SITECD_TABLET_IPAD))) {
					$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS');
				} else if (in_array($siteCodeInfo['siteCode'], array(SITECD_SMART_PHONE_IPHONE_NATIVE, SITECD_TABLET_IPAD_NATIVE))) {
					if (NATIVE_PLAY_RELEASE) {
						$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS_AES');
					} else {
						$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS');
					}
				} else if (in_array($siteCodeInfo['siteCode'], array(SITECD_SMART_PHONE_ANDROID, SITECD_TABLET_ANDROID))) {
					$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_SMOOTH');
				} else if (in_array($siteCodeInfo['siteCode'], array(SITECD_SMART_PHONE_ANDROID_NATIVE, SITECD_TABLET_ANDROID_NATIVE))) {
					if (NATIVE_PLAY_RELEASE) {
						if ($this->isOldAndroid($userAgent)) {
							$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS');
						} else {
							$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS_AES');
						}
					} else {
						$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS');
					}
				} else if (in_array($siteCodeInfo['siteCode'], array(SITECD_PS_VITA, SITECD_PS_VITA_TV, SITECD_JCOTT))) {
					$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS_AES');
				} else {
					// PCã€�å…‰BOX
					$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_SMOOTH');
				}
			} else if (in_array(@$_SERVER['HTTP_HOST'], array(SP_DOMAIN))) {
				if (in_array($siteCodeInfo['siteCode'], array(SITECD_SMART_PHONE_IPHONE, SITECD_TABLET_IPAD))) {
					$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS');
				} else if (in_array($siteCodeInfo['siteCode'], array(SITECD_SMART_PHONE_IPHONE_NATIVE, SITECD_TABLET_IPAD_NATIVE))) {
					if (NATIVE_PLAY_RELEASE) {
						if ($this->isOldIOS($userAgent)) {
							$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS');
						} else {
							$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS_IS');
						}
					} else {
						$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS');
					}
				} else if (in_array($siteCodeInfo['siteCode'], array(SITECD_SMART_PHONE_ANDROID, SITECD_TABLET_ANDROID))) {
					$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_SMOOTH');
				} else if (in_array($siteCodeInfo['siteCode'], array(SITECD_SMART_PHONE_ANDROID_NATIVE, SITECD_TABLET_ANDROID_NATIVE))) {
					if (NATIVE_PLAY_RELEASE) {
						if ($this->isOldAndroid($userAgent)) {
							$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS');
						} else {
							$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS_IS');
						}
					} else {
						$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS');
					}
				} else if (in_array($siteCodeInfo['siteCode'], array(SITECD_PS_VITA, SITECD_PS_VITA_TV, SITECD_JCOTT))) {
					if ($cmsContentsType == CONTENTS_TYPE_VOD) {
						$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS_IS');
					} else {
						// ã‚«ãƒ©ã‚ªã‚±
						$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS_AES');
					}
				} else {
					// å…‰BOX
					$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_SMOOTH');
				}
			} else if (in_array(@$_SERVER['HTTP_HOST'], array(DTV_DOMAIN, VIERA_DOMAIN))) {
				// DTVã�¯h.264
				$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_CPC');
			} else if (in_array(@$_SERVER['HTTP_HOST'], array(API_DOMAIN))) {
				// ã‚¢ãƒ—ãƒªã�¯iPhone/Androidã�«ã‚ˆã�£ã�¦åˆ‡ã‚Šåˆ†ã�‘
				if (in_array($siteCodeInfo['siteCode'], array(SITECD_IPHONE_APP, SITECD_IPAD_APP))) {
					// iOSã�¯HLS_IS
					$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS_IS');
				} else {
					// Androidã�¯Smooth
					$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_SMOOTH');
					//  TODO ã‚¢ãƒ—ãƒªãƒªãƒªãƒ¼ã‚¹å¾Œã�«å¤‰æ›´
// 					if ($cmsContentsType == CONTENTS_TYPE_VOD) {
// 						$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS_IS');
// 					} else {
// 						// ã‚«ãƒ©ã‚ªã‚±
// 						$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS_AES');
// 					}
				}
			} else {
				// ã��ã�®ä»–ã�¯wmv
				$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_WMV');
			}

			// å‹•ç”»å½¢å¼�ã�®æŒ‡å®šã�Œã�‚ã‚‹å ´å�ˆã�¯ä¸Šæ›¸ã��
			if ($contentForm == CONTENTS_FORM_ISMV) {
				$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_SMOOTH');
			} else if ($contentForm == CONTENTS_FORM_HLS_TBB) {
				$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS');
			} else if ($contentForm == CONTENTS_FORM_HLS_IS) {
				$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS_IS');
			} else if ($contentForm == CONTENTS_FORM_HLS_AES) {
				$sampleIds = Configure::read('SAMPLE_CONTENTS_ID_HLS_AES');
			}

			$pos = substr($contentsId, (strlen($contentsId) - 1));
			$sampleId = $sampleIds[($pos % count($sampleIds))];

			$info = debug_backtrace();
			$param = array('contentsId' => $contentsId, 'sampleId=' => $sampleId);
			$this->outputInfoLog('é–‹ç™ºç’°å¢ƒç”¨ã�«ã‚³ãƒ³ãƒ†ãƒ³ãƒ„IDæ›¸ã��æ�›ã�ˆ. func=' . $info[1]['function'], $param);
			$contentsId = $sampleId;
		}
		return $contentsId;
	}

	/**
	 * ã‚µãƒ³ãƒ—ãƒ«ãƒ“ãƒƒãƒˆãƒ¬ãƒ¼ãƒˆãƒªã‚¹ãƒˆæ›¸ã��æ�›ã�ˆï¼Ž
	 * @param Array $bitrateList ãƒ“ãƒƒãƒˆãƒ¬ãƒ¼ãƒˆãƒªã‚¹ãƒˆ
	 * @param int $contentsType ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã‚¿ã‚¤ãƒ—
	 * @return ãƒ“ãƒƒãƒˆãƒ¬ãƒ¼ãƒˆãƒªã‚¹ãƒˆ
	 */
	function changeSampleBitrateList($bitrateList, $contentsType) {
		if (CHANGE_SAMPLE_CONTENT_FLG == 1) {
			if ('33' == $contentsType) {
				$bitrateList = Configure::read('SAMPLE_BITRATE_HLS_IS');
			}

			if ('34' == $contentsType) {
				$bitrateList = Configure::read('SAMPLE_BITRATE_HLS_AES');
			}
		}
		return $bitrateList;
	}

	/**
	 * å›ºå®šãƒ“ãƒƒãƒˆãƒ¬ãƒ¼ãƒˆå�–å¾—
	 * @param int $contentsType ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã‚¿ã‚¤ãƒ—
	 * @param int $siteCode ã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰
	 * @return ãƒ“ãƒƒãƒˆãƒ¬ãƒ¼ãƒˆãƒªã‚¹ãƒˆ
	 */
	function getStaticBitrateList($contentsType, $siteCode) {
		if ($contentsType == CONTENTS_FORM_HLS_IS) {
			$bitrateList = Configure::read('STATIC_BITRATE_HLS_IS');
			if (!in_array($siteCode, array(SITECD_SMART_PHONE_IPHONE_NATIVE, SITECD_TABLET_IPAD_NATIVE, SITECD_IPHONE_APP, SITECD_IPAD_APP))) {
				array_shift($bitrateList);
			}
		}

		if ($contentsType == CONTENTS_FORM_HLS_AES) {
			$bitrateList = Configure::read('STATIC_BITRATE_HLS_AES');
		}
		return $bitrateList;
	}

	/**
	 * ã‚²ã‚¹ãƒˆãƒ¦ãƒ¼ã‚¶åˆ¤åˆ¥.
	 * @param array $userInfo ä¼šå“¡æƒ…å ±
	 * @return boolean trueï¼šã‚²ã‚¹ãƒˆãƒ¦ãƒ¼ã‚¶ falseï¼šã��ã‚Œä»¥å¤–
	 */
	function isGuestUser($userInfo) {
		// ã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰å�–å¾—
		$siteCode = $userInfo['platformList'][0]['siteCode'];

		// ã‚²ã‚¹ãƒˆãƒ¦ãƒ¼ã‚¶ãƒ�ã‚§ãƒƒã‚¯
		if ($siteCode === SITECD_MOVIE_CARD) {
			return true;
		}
		return false;
	}

	/**
	 * è¦‹æ”¾é¡Œæ˜Žç´°æœ‰ç„¡ãƒ�ã‚§ãƒƒã‚¯.
	 * @params $authCodeList èª�è¨¼ã‚³ãƒ¼ãƒ‰(Account->getUserDataã�«ã�¦å�–å¾—.)
	 * @return boolean trueï¼šæ˜Žç´°ã�‚ã‚Š falseï¼šæ˜Žç´°ç„¡ã�—
	 */
	function checkVODContDetail($authCodeList = null) {
		// authCodeListã�Œæ¸¡ã�•ã‚Œã�ªã�‹ã�£ã�Ÿå ´å�ˆã‚»ãƒƒã‚·ãƒ§ãƒ³ã�‹ã‚‰ã�®å�–å¾—ã‚’è©¦ã�¿ã‚‹.
		if(!isset($authCodeList)){
			$authCodeList = $this->Session->read(SESSION_NAME_USER_AUTH_CODE_LIST);
		}

		if (is_array($authCodeList)) {
			foreach ($authCodeList as $authCode) {
				if ($authCode == AUTH_CODE_VOD_MONTH) {
					// æ˜Žç´°ã�‚ã‚Š
					return true;
				}
			}
		}
		// æ˜Žç´°ç„¡ã�—
		return false;
	}

	/**
	 * PPVè³¼å…¥å±¥æ­´æœ‰ç„¡ãƒ�ã‚§ãƒƒã‚¯.
	 *
	 * @param String $userId ä¼šå“¡ID
	 * @param String $userPlatformId ä¼šå“¡ãƒ—ãƒ©ãƒƒãƒˆãƒ•ã‚©ãƒ¼ãƒ ID
	 * @param String $multiAccountId ãƒžãƒ«ãƒ�ã‚¢ã‚«ã‚¦ãƒ³ãƒˆID
	 * @param array $purchaseHistory è³¼å…¥å±¥æ­´
	 * @return boolean trueï¼šè³¼å…¥ã�‚ã‚Š falseï¼šè³¼å…¥ç„¡ã�—
	 */
	function checkPPVPurchase($userId, $userPlatformId, $multiAccountId, $purchaseHistory = null) {

		//å¿…é ˆãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ãƒ�ã‚§ãƒƒã‚¯
		if (!$this->requiredParametersCheck(array($userId, $userPlatformId))) {
			return false;
		}

		if (empty($purchaseHistory)) {
			// APIå‘¼ã�³å‡ºã�—ç”¨ã�®ãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ä½œæˆ�
			$params = array(
					'userId'             => $userId,
					'userPlatformId'     => $userPlatformId,
// 					'userMultiAccountId' => $multiAccountId,
					'ppvValidViewFlag'   => 1,
					'itemType'           => 2);

			// è³¼å…¥å±¥æ­´å�–å¾—
			$result = $this->NsboSalesPurchase->salesPurchaseSearch($params);
			$purchaseHistory = @$result['salesPurchaseList'];
		}

		if (!@$purchaseHistory) {
			return false;
		}

		// è³¼å…¥å±¥æ­´ã�«ã�‚ã‚‹å•†å“�IDã�§CMSã�®å•†å“�ãƒžã‚¹ã‚¿ã‚’æ¤œç´¢
		foreach (@$purchaseHistory as $salesPurchase) {
			// å•†å“�æƒ…å ±å�–å¾—
			$productInfo = $this->CmsProduct->getProductInfoByProductId($salesPurchase['itemId']);
			$productSeq = @$productInfo[0]['Product']['fi_product_seg'];

			if (!in_array($productSeq, Configure::read('PRODUCT_SEGS_ALL_PPD'))) {
				return true;
			}
		}
		return false;
	}

	/**
	 * MovieCardå¥‘æ©Ÿã�§ã�®ä¼šå“¡ã�‹åˆ¤åˆ¥.<br>
	 * (ã‚²ã‚¹ãƒˆãƒ¦ãƒ¼ã‚¶ã�‹ã�¤æ±ºæ¸ˆç™»éŒ²ç„¡ã�—ã�‹ã�¤è¦‹æ”¾é¡Œæ˜Žç´°ã�Œã�ªã�„ãƒ¦ãƒ¼ã‚¶)
	 *
	 * @param String $userId ä¼šå“¡ID
	 * @param String $userPlatformId ä¼šå“¡ãƒ—ãƒ©ãƒƒãƒˆãƒ•ã‚©ãƒ¼ãƒ ID
	 * @param String $multiAccountId ãƒžãƒ«ãƒ�ã‚¢ã‚«ã‚¦ãƒ³ãƒˆID
	 * @param String $userAgent ãƒ¦ãƒ¼ã‚¶ã‚¨ãƒ¼ã‚¸ã‚§ãƒ³ãƒˆ
	 * @param List $userInfo ä¼šå“¡æƒ…å ±
	 * @return boolean trueï¼šMovieCardå¥‘æ©Ÿã�§ã�®ä¼šå“¡ falseï¼šã��ã‚Œä»¥å¤–ã�®å¥‘æ©Ÿã�§ã�®ä¼šå“¡
	 */
	function isMovieCardUser($userId, $userPlatformId, $multiAccountId, $userAgent, $userInfo = null) {

		//å¿…é ˆãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ãƒ�ã‚§ãƒƒã‚¯
		if (!$this->requiredParametersCheck(array($userId, $userPlatformId, $userAgent))) {
			//ãƒ­ã‚°å‡ºåŠ›
			$param = array('userId' => $userId, 'userPlatformId' => $userPlatformId, 'userAgent' => $userAgent);
			$this->outputErrorLog(COMMON_RESULT_REQUIRED_ERROR, COMMON_RESULT_REQUIRED_ERROR_MESSAGE, $param);
			//å¼•æ•°ãƒ�ã‚§ãƒƒã‚¯ã‚¨ãƒ©ãƒ¼
			return $this->makeResult(COMMON_RESULT_SYSTEM_ERROR);
		}

		// ã‚»ãƒƒã‚·ãƒ§ãƒ³ã‚ˆã‚Šä¼šå“¡æƒ…å ±å�–å¾—ã‚’è©¦ã�¿ã‚‹
		$userInfo = $this->Session->read(SESSION_NAME_USERINFO);

		// ã‚»ãƒƒã‚·ãƒ§ãƒ³ã‚ˆã‚Šèª�è¨¼ã‚³ãƒ¼ãƒ‰ãƒªã‚¹ãƒˆå�–å¾—ã‚’è©¦ã�¿ã‚‹
		$authCodeList = $this->Session->read(SESSION_NAME_USER_AUTH_CODE_LIST);

		if (empty($userInfo['platformList']) || !isset($authCodeList)) {
			// ä¼šå“¡æƒ…å ±å�–å¾—
			$userInfo = $this->Account->getUserDataPortal($userId, $userPlatformId, $multiAccountId, $userAgent);
		}

		// ã‚²ã‚¹ãƒˆãƒ¦ãƒ¼ã‚¶ãƒ�ã‚§ãƒƒã‚¯
		if ($this->isGuestUser($userInfo)) {

			// æ±ºæ¸ˆç™»éŒ²æœ‰ç„¡ãƒ�ã‚§ãƒƒã‚¯
			if (!$this->isAvailablePurchase($userInfo)) {

				// è¦‹æ”¾é¡Œæ˜Žç´°æœ‰ç„¡ãƒ�ã‚§ãƒƒã‚¯
				if (!$this->checkVODContDetail($authCodeList)) {

					// MovieCardå¥‘æ©Ÿã�§ã�®ä¼šå“¡ã�¨åˆ¤å®š
					return true;
				}
			}
		}
		return false;
	}

	/**
	 * PPDè¦‹æ”¾é¡Œæœ‰åŠ¹ãƒ�ã‚§ãƒƒã‚¯.<br>
	 * è³¼å…¥æ¸ˆã�¿ã�‹ã�¤æœ‰åŠ¹æœŸé–“å†…ã� ã�£ã�Ÿå ´å�ˆã�¯ã€�æœ‰åŠ¹æœŸé™�ã‚’ã‚»ãƒƒã‚·ãƒ§ãƒ³ã�«æ ¼ç´�ã�™ã‚‹.
	 * @param String $userId ä¼šå“¡ID
	 * @param String $userPlatformId ä¼šå“¡ãƒ—ãƒ©ãƒƒãƒˆãƒ•ã‚©ãƒ¼ãƒ ID
	 * @param String $multiAccountId ãƒžãƒ«ãƒ�ã‚¢ã‚«ã‚¦ãƒ³ãƒˆID
	 */
	function checkPpdPurchase($userId, $userPlatformId, $multiAccountId) {

		//å¿…é ˆãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ãƒ�ã‚§ãƒƒã‚¯
		if (!$this->requiredParametersCheck(array($userId, $userPlatformId))) {
			//ãƒ­ã‚°å‡ºåŠ›
			$param = array('userId' => $userId, 'userPlatformId' => $userPlatformId);
			$this->outputErrorLog(COMMON_RESULT_REQUIRED_ERROR, COMMON_RESULT_REQUIRED_ERROR_MESSAGE, $param);
			//å¼•æ•°ãƒ�ã‚§ãƒƒã‚¯ã‚¨ãƒ©ãƒ¼
			return;
		}

		// PPDå•†å“�IDå�–å¾—
		$productIds = $this->CmsProduct->getProductIdListByPpd(PPD_PRODUCT_TYPE_VIDEO, false);

		// APIå‘¼ã�³å‡ºã�—ç”¨ã�®ãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ä½œæˆ�
		$params = array(
				'userId'             => $userId,
				'userPlatformId'     => $userPlatformId,
// 				'userMultiAccountId' => $multiAccountId,
				'ppvValidViewFlag'   => 1,
				'itemType'           => 2,
				'itemId'             => $productIds);

		// è³¼å…¥å±¥æ­´å�–å¾—
		$purchaseHistory = $this->NsboSalesPurchase->salesPurchaseSearch($params);
		if (@$purchaseHistory['salesPurchaseList']) {

			// æœ‰åŠ¹æœŸé–“ãƒ�ã‚§ãƒƒã‚¯
			$expire = 0;
			foreach ($purchaseHistory['salesPurchaseList'] as $purchase) {
				//æœ€æ–°ã�®æœ‰åŠ¹æœŸé–“ã‚’å�–å¾—
				if (strtotime($expire) < strtotime($purchase['ppvExpireTo'])) {
					$expire = $purchase['ppvExpireTo'];
				}
			}

			if (strtotime($expire) < strtotime(date('YmdHis'))) {
				// æœ‰åŠ¹æœŸé™�å¤–
				// æœŸé™�åˆ‡ã‚Œã�®å ´å�ˆã�¯å‰Šé™¤ã�™ã‚‹
				$this->Session->delete(SESSION_NAME_PPD_EXPIRE);
			} else {
				// æœ‰åŠ¹æœŸé™�å†…
				// ã‚»ãƒƒã‚·ãƒ§ãƒ³ã�«è³¼å…¥æ¸ˆã�¿æƒ…å ±ã‚’ç™»éŒ²
				$this->Session->write(SESSION_NAME_PPD_EXPIRE, $expire);
			}
		} else {
			// å�–å¾—0ä»¶ã�®å ´å�ˆã�¯å‰Šé™¤ã�™ã‚‹
			$this->Session->delete(SESSION_NAME_PPD_EXPIRE);
		}
	}

	/**
	 * PPDè¦‹æ”¾é¡Œæœ‰åŠ¹ãƒ�ã‚§ãƒƒã‚¯(å¼•æ•°æœ‰ã‚Šç‰ˆ).<br>
	 * è³¼å…¥æ¸ˆã�¿ã�‹ã�¤æœ‰åŠ¹æœŸé–“å†…ã� ã�£ã�Ÿå ´å�ˆã�¯ã€�æœ‰åŠ¹æœŸé™�ã‚’ã‚»ãƒƒã‚·ãƒ§ãƒ³ã�«æ ¼ç´�ã�™ã‚‹.
	 *
	 * @param array  $salesPurchaseList è³¼å…¥å±¥æ­´
	 */
	function checkPpdPurchaseNoAPI($salesPurchaseList) {
		// PPDå•†å“�IDå�–å¾—
		$productIds = $this->CmsProduct->getProductIdListByPpd(PPD_PRODUCT_TYPE_VIDEO, false);

		// PPDå•†å“�ã�®è³¼å…¥å±¥æ­´ã�®ã�¿ã�«çµžã‚‹
		$ppdPurchaseList = array();
		if ($salesPurchaseList) {
			foreach ($salesPurchaseList as $purchase) {
				if (in_array($purchase['itemId'], $productIds)) {
					array_push($ppdPurchaseList, $purchase);
				}
			}
		}

		if (@$ppdPurchaseList) {
			// æœ‰åŠ¹æœŸé–“ãƒ�ã‚§ãƒƒã‚¯
			$expire = 0;
			foreach ($ppdPurchaseList as $ppdPurchase) {
				//æœ€æ–°ã�®æœ‰åŠ¹æœŸé–“ã‚’å�–å¾—
				if (strtotime($expire) < strtotime($ppdPurchase['ppvExpireTo'])) {
					$expire = $ppdPurchase['ppvExpireTo'];
				}
			}

			if (strtotime($expire) < strtotime(date('YmdHis'))) {
				// æœ‰åŠ¹æœŸé™�å¤–
				// æœŸé™�åˆ‡ã‚Œã�®å ´å�ˆã�¯å‰Šé™¤ã�™ã‚‹
				$this->Session->delete(SESSION_NAME_PPD_EXPIRE);
			} else {
				// æœ‰åŠ¹æœŸé™�å†…
				// ã‚»ãƒƒã‚·ãƒ§ãƒ³ã�«è³¼å…¥æ¸ˆã�¿æƒ…å ±ã‚’ç™»éŒ²
				$this->Session->write(SESSION_NAME_PPD_EXPIRE, $expire);
			}
		} else {
			// è³¼å…¥å±¥æ­´ã�Œå­˜åœ¨ã�—ã�ªã�„å ´å�ˆã�¯å‰Šé™¤ã�™ã‚‹
			$this->Session->delete(SESSION_NAME_PPD_EXPIRE);
		}
	}

	/**
	 * æœ‰åŠ¹æœŸé™�å†…
	 * @return boolean
	 */
	function isWithinPpdExpire() {
		$expire = $this->Session->read(SESSION_NAME_PPD_EXPIRE);
		if (strtotime($expire) < strtotime(date('YmdHis'))) {
			// æœ‰åŠ¹æœŸé™�å¤–
			$this->Session->delete(SESSION_NAME_PPD_EXPIRE);
			return false;
		} else {
			// æœ‰åŠ¹æœŸé™�å†…
			return $expire;
		}
	}

	/**
	 * mixiå°‚ç”¨PPDè³¼å…¥æ¸ˆã�¿ãƒ�ã‚§ãƒƒã‚¯.<br>
	 * è³¼å…¥æ¸ˆã�¿ã�‹ã�¤æœ‰åŠ¹æœŸé–“å†…ã� ã�£ã�Ÿå ´å�ˆã�¯ã€�æœ‰åŠ¹æœŸé™�ã‚’ã‚»ãƒƒã‚·ãƒ§ãƒ³ã�«æ ¼ç´�ã�™ã‚‹.<br>
	 * ã�¾ã�Ÿã€�ãƒšã‚¢ãƒ¬ãƒ³ã‚¿ãƒ«ãƒ­ãƒƒã‚¯ã�®ã‚»ãƒƒã‚·ãƒ§ãƒ³ã‚’R18ã�«è¨­å®šã�™ã‚‹(ãƒ•ãƒ«ãƒ­ãƒƒã‚¯ã�®å ´å�ˆã‚’é™¤ã��).<br>
	 * @param String $userId ä¼šå“¡ID
	 * @param String $userPlatformId ä¼šå“¡ãƒ—ãƒ©ãƒƒãƒˆãƒ•ã‚©ãƒ¼ãƒ ID
	 * @param String $multiAccountId ãƒžãƒ«ãƒ�ã‚¢ã‚«ã‚¦ãƒ³ãƒˆID
	 * @param String $userAgent
	 * @param array  $purchaseHistory è³¼å…¥å±¥æ­´
	 * @return Boolean true on mixi ppd purchased. false on not purchased.
	 */
	function checkMixiPPDPurchase($userId, $userPlatformId, $multiAccountId, $userAgent, $purchaseHistory = null) {

		$result = false;

		try {
			// å¿…é ˆãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ãƒ�ã‚§ãƒƒã‚¯
			if (!$this->requiredParametersCheck(array($userId, $userPlatformId, $userAgent))) {
				// å¼•æ•°ãƒ�ã‚§ãƒƒã‚¯ã‚¨ãƒ©ãƒ¼
				$param = array('userId' => $userId, 'userPlatformId' => $userPlatformId, 'userAgent' => $userAgent);
				$this->outputErrorLog(COMMON_RESULT_REQUIRED_ERROR, COMMON_RESULT_REQUIRED_ERROR_MESSAGE, $param);
				throw new Exception(COMMON_RESULT_REQUIRED_ERROR_MESSAGE);
			}

			// ä¼šå“¡æƒ…å ±å�–å¾—
			// ã‚»ãƒƒã‚·ãƒ§ãƒ³ã�«å€¤ã�Œå­˜åœ¨ã�—ã�Ÿå ´å�ˆä¼šå“¡æƒ…å ±å�–å¾—å‡¦ç�†ã‚’ã‚¹ã‚­ãƒƒãƒ—.
			$userInfo = $this->Session->read(SESSION_NAME_USERINFO);
			$authCodeList = $this->Session->read(SESSION_NAME_USER_AUTH_CODE_LIST);
			if(!isset($authCodeList)){
				$userInfo = $this->Account->getUserDataPortal($userId, $userPlatformId, $multiAccountId, $userAgent);
				$authCodeList = $this->Session->read(SESSION_NAME_USER_AUTH_CODE_LIST);
			}
			// å¥‘ç´„æƒ…å ±ãƒ�ã‚§ãƒƒã‚¯
			if($this->checkVODContDetail($authCodeList)) {
				throw new Exception('è¦‹æ”¾é¡Œå¥‘ç´„æ¸ˆã�¿');
			}

			// PPDå•†å“�IDå�–å¾—
			$productIds = $this->CmsProduct->getProductIdListByPpd(PPD_PRODUCT_TYPE_ALL, false);

			// è³¼å…¥å±¥æ­´å�–å¾—
			if (empty($purchaseHistory)) {
				$params = array(
						'userId'             => $userId,
						'userPlatformId'     => $userPlatformId,
// 						'userMultiAccountId' => $multiAccountId,
						'ppvValidViewFlag'   => 1,
						'itemType'           => 2,
						'itemId'             => $productIds);

				$purchaseHistory = $this->NsboSalesPurchase->salesPurchaseSearch($params);
				if ($purchaseHistory[RESPONSE_CODE] !== NSBO_RESULT_SUCCESS) {
					// è³¼å…¥å±¥æ­´å�–å¾—ã‚¨ãƒ©ãƒ¼
					$called = "NsboSalesPurchase::salesPurchaseSearch(" . print_r($params, true) . ")";
					$params = array('called' => $called, 'return' => $purchaseHistory);
					$this->outputErrorLog($purchaseHistory[RESPONSE_CODE], 'PPDè³¼å…¥å±¥æ­´å�–å¾—å¤±æ•—', $params);
					throw new Exception('PPDè³¼å…¥å±¥æ­´å�–å¾—å¤±æ•—');
				}
			} else {
				// è³¼å…¥å±¥æ­´ã�‹ã‚‰å•†å“�IDãƒªã‚¹ãƒˆã�®æƒ…å ±ã�®ã�¿æŠ½å‡º
				$tmpArray = array();
				foreach ($purchaseHistory as $purchase) {
					if (in_array($purchase['itemId'], $productIds)) {
						array_push($tmpArray, $purchase);
					}
				}
				$purchaseHistory = array();
				if (!empty($tmpArray)) {
					$purchaseHistory['salesPurchaseList'] = $tmpArray;
				}
			}

			// PPDè³¼å…¥ãƒ•ãƒ©ã‚°ãƒ�ã‚§ãƒƒã‚¯
			if(!isset($purchaseHistory['salesPurchaseList'])) {
				throw new Exception('è³¼å…¥å±¥æ­´ã�ªã�—');
			}

			// TODO APIå‘¼å‡ºã�—å‰Šæ¸›æ™‚ã�«å‡¦ç�†ã‚’å¤–ã� ã�—ã�™ã‚‹ï¼ˆç�¾çŠ¶ã�¯å›žæ•°ã�Œå¢—ã�ˆã�ªã�„ã‚ˆã�†ã�«ã�“ã�“ã�§å‡¦ç�†ã‚’ã�—ã�¦ã�Šã��ï¼‰
			$expire = 0;
			foreach ($purchaseHistory['salesPurchaseList'] as $purchase) {
				//æœ€æ–°ã�®æœ‰åŠ¹æœŸé–“ã‚’å�–å¾—
				if (in_array($purchase['itemId'], Configure::read('PPD_PRODUCTIDS_1DAY'))
					&& strtotime($expire) < strtotime($purchase['ppvExpireTo'])
				) {
					$expire = $purchase['ppvExpireTo'];
				}
			}
			if (strtotime($expire) < time()) {
				if($this->Session->check(SESSION_NAME_1DAY_PPD_EXPIRE)) {
					$this->Session->delete(SESSION_NAME_1DAY_PPD_EXPIRE);
				}
			} else {
				// ã‚»ãƒƒã‚·ãƒ§ãƒ³ã�«æœ‰åŠ¹æœŸé–“ã‚’ç™»éŒ²
				$this->Session->write(SESSION_NAME_1DAY_PPD_EXPIRE, $expire);
			}


			/*******************************************/
			/** ã�“ã�“ã�¾ã�§ã��ã�Ÿã‚‰mixiå°‚ç”¨PPDã�®ã�¿ã�®ãƒ¦ãƒ¼ã‚¶ **/
			/*******************************************/

			// æœ‰åŠ¹æœŸé–“ãƒ�ã‚§ãƒƒã‚¯
			$expire = 0;
			foreach ($purchaseHistory['salesPurchaseList'] as $purchase) {
				//æœ€æ–°ã�®æœ‰åŠ¹æœŸé–“ã‚’å�–å¾—
				if (in_array($purchase['itemId'], Configure::read('PPD_PRODUCTIDS_MIXI'))
					&& strtotime($expire) < strtotime($purchase['ppvExpireTo'])
				) {
					$expire = $purchase['ppvExpireTo'];
				}
			}
			if (strtotime($expire) < time()) {
				throw new Exception('æœ‰åŠ¹æœŸé™�å¤–');
			}

			// ã‚»ãƒƒã‚·ãƒ§ãƒ³ã�«æœ‰åŠ¹æœŸé–“ã‚’ç™»éŒ²
			$this->Session->write(SESSION_NAME_MIXI_PPD_EXPIRE, $expire);

			// æ±ºæ¸ˆæƒ…å ±ãƒ�ã‚§ãƒƒã‚¯
			if($this->isAvailablePurchase($userInfo)) {
				// æ±ºæ¸ˆæ–¹æ³•ã�Œã�‚ã‚‹å ´å�ˆã�¯ã€�ãƒšã‚¢ãƒ¬ãƒ³ã‚¿ãƒ«ãƒ­ãƒƒã‚¯åˆ¶å¾¡ã�¯ã�—ã�ªã�„
				$this->Session->delete(SESSION_NAME_PARENTAL_LOCK);
				$this->Session->delete(SESSION_NAME_PARENTAL_LOCK_OVERRIDE_FLG);
			} else {
				// ãƒšã‚¢ãƒ¬ãƒ³ã‚¿ãƒ«ãƒ­ãƒƒã‚¯ã�®ã‚ªãƒ¼ãƒ�ãƒ¼ãƒ©ã‚¤ãƒ‰æ¸ˆã�¿ãƒ�ã‚§ãƒƒã‚¯
				if(!$this->Session->read(SESSION_NAME_PARENTAL_LOCK_OVERRIDE_FLG)) {
					// å¼·åˆ¶çš„ã�«ãƒšã‚¢ãƒ¬ãƒ³ã‚¿ãƒ«ãƒ­ãƒƒã‚¯ã‚’R18ãƒ­ãƒƒã‚¯ã�«æ›¸ã��æ�›ã�ˆã‚‹(ãƒ•ãƒ«ãƒ­ãƒƒã‚¯ã�®å ´å�ˆã�¯ã��ã�®ã�¾ã�¾)
					$oldParentalLock = $this->Session->read(SESSION_NAME_PARENTAL_LOCK);
					if($oldParentalLock != PARENTAL_R15 && $oldParentalLock != PARENTAL_R18) {
						//ã‚¢ãƒ€ãƒ«ãƒˆãƒ‰ãƒ¡ã‚¤ãƒ³ã�®å ´å�ˆãƒšã‚¢ãƒ¬ãƒ³ã‚¿ãƒ«ãƒ­ãƒƒã‚¯ã‚’è¨­å®šã�—ã�ªã�„
						if(@$_SERVER['HTTP_HOST'] !== PC_ADULT_DOMAIN){
							// è³¼å…¥å±¥æ­´ã�‹ã‚‰å•†å“�IDã�®ã�¿ã‚’å�–å¾—
							$productIds = Set::extract('{n}.itemId', $purchaseHistory['salesPurchaseList']);

							// mixiPPDä»¥å¤–ã�Œã�‚ã‚‹å ´å�ˆãƒšã‚¢ãƒ¬ãƒ³ã‚¿ãƒ«ãƒ­ãƒƒã‚¯ã�—ã�ªã�„
							$diff = array_diff($productIds, Configure::read('PPD_PRODUCTIDS_MIXI'));
							if(count($diff) == 0) {
								$this->Session->write(SESSION_NAME_PARENTAL_LOCK, PARENTAL_R18);
							}
						}
						$this->Session->write(SESSION_NAME_PARENTAL_LOCK_OVERRIDE_FLG, true);
					}
				}
			}
			$result = true;
		} catch(Exception $e) {
			if($this->Session->check(SESSION_NAME_MIXI_PPD_EXPIRE)) {
				$this->Session->delete(SESSION_NAME_MIXI_PPD_EXPIRE);
				$this->Session->delete(SESSION_NAME_PARENTAL_LOCK);
				$this->Session->delete(SESSION_NAME_PARENTAL_LOCK_OVERRIDE_FLG);
			}
		}

		// ãƒšã‚¢ãƒ¬ãƒ³ã‚¿ãƒ«ãƒ­ãƒƒã‚¯ã�Œæ¶ˆã�ˆã�¦ã�„ã�Ÿã‚‰å�–å¾—ã�—ç›´ã�™
		if(!$this->Session->check(SESSION_NAME_PARENTAL_LOCK)) {
			$tokenId = $this->Cookie->read(COOKIE_NAME_TOKEN_ID);
			if ($tokenId) {
				//ãƒšã‚¢ãƒ¬ãƒ³ã‚¿ãƒ«ãƒ­ãƒƒã‚¯è¨­å®šå�–å¾—
				$parentallocktype = $this->Parentallock->getParentallockData($userId, $userPlatformId, $multiAccountId, $tokenId);
				if (COMMON_RESULT_SUCCESS == $parentallocktype[RESPONSE_CODE]) {
					//ã‚»ãƒƒã‚·ãƒ§ãƒ³ã�«ãƒšã‚¢ãƒ¬ãƒ³ã‚¿ãƒ«ãƒ­ãƒƒã‚¯è¨­å®šã‚’ã‚»ãƒƒãƒˆ
					$this->Session->write(SESSION_NAME_PARENTAL_LOCK, $parentallocktype['parentalLockType']);
				}
			} else {
				//ãƒ­ãƒƒã‚¯è§£é™¤ã�¨ã�—ã�¦æ‰±ã�†
				$this->Session->write(SESSION_NAME_PARENTAL_LOCK, PARENTAL_RELEASE);
			}
		}
		return $result;
	}

	/**
	 * Androidã�®ãƒ�ãƒ¼ã‚¸ãƒ§ãƒ³ãƒ�ã‚§ãƒƒã‚¯
	 * trueâ†’2.2ã‚ˆã‚Šä¸Š
	 * falseâ†’2.2ä»¥ä¸‹
	 */
	function chkAndroidVersion($ua){
		//UAåˆ¤åˆ¥
		$deviceType = $this->_determineDeviceTypeByUA($ua);

		//iOSã�‹Androidã�‹åˆ¤åˆ¥
		$deviceInfo = $this->_determineSiteCdByUA($ua, $deviceType);

		if (empty($deviceInfo)) {
			// ã‚¬ãƒ©ã‚±ãƒ¼ã�®å ´å�ˆã€�ãƒ‡ãƒ�ã‚¤ã‚¹æƒ…å ±ç„¡ã�—
			return false;
		}
		if(in_array($deviceInfo, array(SITECD_TABLET_IPAD, SITECD_TABLET_IPAD_NATIVE, SITECD_SMART_PHONE_IPHONE, SITECD_SMART_PHONE_IPHONE_NATIVE))){
			//iOSã�®å ´å�ˆtrue
			return true;
		}else{
			//Androidã�®OSã‚’UAã‚ˆã‚ŠæŠ½å‡º
			preg_match('/Android.+;/', $ua, $osVersion);
			preg_match('/\d\.\d/', @$osVersion[0],$num);
			$ginger = array(2,3);
			$osArray = explode('.', @$num[0]);

			for($i=0; $i < count($ginger); $i++){
				if($ginger[$i] > $osArray[$i]){
					return false;
				}elseif($ginger[$i] < $osArray[$i]){
					return true;
				}
			}
			return true;
		}
	}

	/**
	 * Twonkeyã�®ãƒ�ãƒ¼ã‚¸ãƒ§ãƒ³ãƒ�ã‚§ãƒƒã‚¯
	 * trueâ†’TBBã�˜ã‚ƒã�ªã�„ã€�æŒ‡å®šãƒ�ãƒ¼ã‚¸ãƒ§ãƒ³ä»¥ä¸Š
	 * String â†’ æŒ‡å®šãƒ�ãƒ¼ã‚¸ãƒ§ãƒ³ä»¥ä¸‹ã€‚è¡¨ç¤ºViewå��ã‚’è¿”å�´
	 */
	function chkTbbVersion($ua){
		$VIEWNAME_IOS = 'tbb_version_up_ios';
		$VIEWNAME_ANDROID = 'tbb_version_up_android';
		$VIEWNAME_ANDROID_SMARTPLAY = 'sp_version_up_android';
		//TBBã�˜ã‚ƒã�ªã�„å ´å�ˆtrue
		if($this->distinctionClientApplicationType($ua) != CLIENT_APP_TBB
		|| $this->isWgetUser($ua)){
			return true;
		}
		//UAåˆ¤åˆ¥
		$deviceType = $this->_determineDeviceTypeByUA($ua);

		//iOSã�‹Androidã�‹åˆ¤åˆ¥
		$deviceInfo = $this->_determineSiteCdByUA($ua, $deviceType);

//		if($deviceInfo == SITECD_HIKARI_BOX){
			//å…‰BOXã�®å ´å�ˆtrue
//			return true;
//		}elseif($this->isTapnow()){
		if($this->isTapnow()){
		// ã‚¿ãƒƒãƒ—ãƒŠã‚¦ã�®å ´å�ˆtrue
			return true;
		}elseif(in_array($deviceInfo, array(SITECD_TABLET_IPAD, SITECD_SMART_PHONE_IPHONE))){
			//iOS
			$version = explode('.',TWONKY_VERSION_IOS);
			$viewName = $VIEWNAME_IOS;
		}elseif($this->isSmartPlay($ua)){
			//Android
			$version = explode('.',SMARTPLAY_VERSION_ANDROID);
			$viewName = $VIEWNAME_ANDROID_SMARTPLAY;
		}elseif($this->isHikariBox($ua)){
				//Android(å…‰BOX)
				$version = explode('.',TWONKY_VERSION_HIKARI);
				$viewName = $VIEWNAME_ANDROID;
		}else{
			//Android
			$version = explode('.',TWONKY_VERSION_ANDROID);
			$viewName = $VIEWNAME_ANDROID;
		}

		if($this->isSmartPlay($ua)){
			preg_match('/TwonkyTV\/(.*)\(/', $ua, $twonkyVersion);
			@$versionDevice = explode('.', @$twonkyVersion[1]);
		}else{
			preg_match('/TwonkyBeamBrowser\/(.*)\(/', $ua, $twonkyVersion);
			@$versionDevice = explode('.', @$twonkyVersion[1]);
		}

		for($i=0; $i < count($version); $i++) {
			if (!isset($versionDevice[$i])) {
				$versionDevice[$i] = 0;
			}
			if ($version[$i] > trim($versionDevice[$i])) {
				return $viewName;
			} elseif ($version[$i] < trim($versionDevice[$i])) {
				return true;
			}
		}

		return true;
	}

	/**
	 * SPã‚¹ãƒ ãƒ¼ã‚¹å¯¾è±¡ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã�‹ã�©ã�†ã�‹
	 * ã‚¹ãƒ ãƒ¼ã‚¹å¯¾è±¡â†’true
	 * ã��ã‚Œä»¥å¤–â†’false
	 *
	 * @param $contentsId ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ID
	 */
	function isSmoothContents($contentsId = null) {
		$isSmooth = false;
		//ã‚¿ã‚¤ãƒ ã‚¹ã‚¿ãƒ³ãƒ—ã�®å�–å¾—
		$times = Cache::read(SP_SMOOTH_KEY_NAME_TIME_STAMP);
		//ã‚¹ãƒ ãƒ¼ã‚¹ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å­˜åœ¨ç¢ºèª�
		if (file_exists(SP_SMOOTH_LIST_FILE_NAME)) {
			if ($times != filemtime(SP_SMOOTH_LIST_FILE_NAME)) {
				//ã‚¹ãƒ ãƒ¼ã‚¹ãƒªã‚¹ãƒˆèª­ã�¿ç›´ã�—ã�®ã�Ÿã‚�ã‚­ãƒ£ãƒƒã‚·ãƒ¥ã�‹ã‚‰å‰Šé™¤
				Cache::delete(SP_SMOOTH_KEY_NAME);
				Cache::write(SP_SMOOTH_KEY_NAME_TIME_STAMP, filemtime(SP_SMOOTH_LIST_FILE_NAME));
				$this->outputInfoLog('SPã‚¹ãƒ ãƒ¼ã‚¹ãƒªã‚¹ãƒˆã�Œæ›´æ–°ã�•ã‚Œã�¾ã�—ã�Ÿã€‚');
			}
			$data = Cache::read(SP_SMOOTH_KEY_NAME);
			if (!$data) {
				//ã‚¹ãƒ ãƒ¼ã‚¹ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«èª­ã�¿ç›´ã�—
				$data = array();
				$file = fopen(SP_SMOOTH_LIST_FILE_NAME, "r");
				while (!feof($file)) {
					$str = fgets($file);
					$data[] = trim($str);
				}
				Cache::write(SP_SMOOTH_KEY_NAME, $data);
				$this->outputInfoLog('SPã‚¹ãƒ ãƒ¼ã‚¹ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å†�èª­ã�¿è¾¼ã�¿');
			}

			foreach ($data as $key => $value) {
				//ä¸€è¡Œç›®ã�¯ãƒ˜ãƒƒãƒ€
				if($key === 0){
					continue;
				}
				if ($value == $contentsId) {
					//ãƒžãƒƒãƒ�
					$isSmooth = true;
					break;
				}
			}
		} else {
			//ã‚¹ãƒ ãƒ¼ã‚¹ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œå­˜åœ¨ã�—ã�ªã�„å ´å�ˆWarningãƒ­ã‚°ã‚’å‡ºåŠ›ã�—ã€�å‡¦ç�†ç¶šè¡Œ
			$this->outputErrorLog('','SPç”¨ã‚¹ãƒ ãƒ¼ã‚¹ãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œã�‚ã‚Šã�¾ã�›ã‚“ã€‚');
		}
		return $isSmooth;
	}

	/**
	 * æ¨©åˆ©è€…IDã�‹ã‚‰ãƒ€ã‚¦ãƒ³ãƒ­ãƒ¼ãƒ‰æœ‰åŠ¹æœŸé™�ã�Œåˆ¶é™�ã�•ã‚Œã�¦ã�„ã‚‹ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã‚’åˆ¤å®š
	 * åˆ¶å¾¡å¯¾è±¡â†’ãƒ€ã‚¦ãƒ³ãƒ­ãƒ¼ãƒ‰æœ‰åŠ¹æœŸé™�(h)
	 * å¯¾è±¡å¤–â†’0
	 */
	function getDownloadLicenseByHolderId($holderId = null) {
		$response = 0;
		if (isset($holderId)) {
			//ã‚¿ã‚¤ãƒ ã‚¹ã‚¿ãƒ³ãƒ—ã�®å�–å¾—
			$times = Cache::read(DOWNLOAD_CONTROL_HOLDER_KEY_NAME_TIME_STAMP);
			//æ¨©åˆ©è€…IDãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å­˜åœ¨ç¢ºèª�
			if (file_exists(DOWNLOAD_CONTROL_HOLDER_FILE_NAME)) {
				if ($times != filemtime(DOWNLOAD_CONTROL_HOLDER_FILE_NAME)) {
					//æ¨©åˆ©è€…IDãƒªã‚¹ãƒˆèª­ã�¿ç›´ã�—ã�®ã�Ÿã‚�ã‚­ãƒ£ãƒƒã‚·ãƒ¥ã�‹ã‚‰å‰Šé™¤
					Cache::delete(DOWNLOAD_CONTROL_HOLDER_KEY_NAME);
					Cache::write(DOWNLOAD_CONTROL_HOLDER_KEY_NAME_TIME_STAMP,
							filemtime(DOWNLOAD_CONTROL_HOLDER_FILE_NAME));
					$this->outputInfoLog('ãƒ€ã‚¦ãƒ³ãƒ­ãƒ¼ãƒ‰åˆ¶å¾¡æ¨©åˆ©è€…IDãƒªã‚¹ãƒˆã�Œæ›´æ–°ã�•ã‚Œã�¾ã�—ã�Ÿã€‚');
				}
				$data = Cache::read(DOWNLOAD_CONTROL_HOLDER_KEY_NAME);
				if (!$data) {
					//ãƒ€ã‚¦ãƒ³ãƒ­ãƒ¼ãƒ‰åˆ¶å¾¡æ¨©åˆ©è€…IDãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«èª­ã�¿ç›´ã�—
					$data = file_get_contents(DOWNLOAD_CONTROL_HOLDER_FILE_NAME);
					Cache::write(DOWNLOAD_CONTROL_HOLDER_KEY_NAME, $data);
					$this->outputInfoLog('ãƒ€ã‚¦ãƒ³ãƒ­ãƒ¼ãƒ‰åˆ¶å¾¡æ¨©åˆ©è€…IDãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«å†�èª­ã�¿è¾¼ã�¿');
				}

				foreach (preg_split('/\r\n/', $data) as $key => $value) {
					//ä¸€è¡Œç›®ã�¯ãƒ˜ãƒƒãƒ€
					if ($key === 0) {
						continue;
					}
					//ã‚³ãƒ³ãƒ†ãƒ³ãƒ„IDæ¯”è¼ƒ
					$listHolderId = preg_split('/,/', $value);
					if ($holderId == $listHolderId[0]) {
						//ãƒžãƒƒãƒ�
						$response = $listHolderId[1];
						break;
					}
				}
			} else {
				//ãƒ€ã‚¦ãƒ³ãƒ­ãƒ¼ãƒ‰åˆ¶å¾¡æ¨©åˆ©è€…IDãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œå­˜åœ¨ã�—ã�ªã�„å ´å�ˆWarningãƒ­ã‚°ã‚’å‡ºåŠ›ã�—ã€�å‡¦ç�†ç¶šè¡Œ
				$this->outputErrorLog('', 'ãƒ€ã‚¦ãƒ³ãƒ­ãƒ¼ãƒ‰åˆ¶å¾¡æ¨©åˆ©è€…IDãƒªã‚¹ãƒˆãƒ•ã‚¡ã‚¤ãƒ«ã�Œã�‚ã‚Šã�¾ã�›ã‚“ã€‚');
			}
		}
		return $response;
	}

	/**
	 * WoooRemoteã�‹ã�©ã�†ã�‹
	 * @param string $userAgent ãƒ¦ãƒ¼ã‚¶ã‚¨ãƒ¼ã‚¸ã‚§ãƒ³ãƒˆ
	 * @return WoooRemoteã�§ã�‚ã‚Œã�°true
	 */
	function isWoooRemote($userAgent) {
		return preg_match('/' . DEVICE_PATTERN_WOOO_REMOTE . '/', $userAgent);
	}

	/**
	* kindleFireã�‹ã�©ã�†ã�‹
	* @param string $userAgent ãƒ¦ãƒ¼ã‚¶ã‚¨ãƒ¼ã‚¸ã‚§ãƒ³ãƒˆ
	* @return kindleFireã�§ã�‚ã‚Œã�°true
	*/
	function isKindleFire($userAgent) {
		return preg_match('/'.DEVICE_PATTERN_KINDLE_FIRE_HD.'|'.DEVICE_PATTERN_KINDLE.'/', $userAgent);
	}

	/**
	 * WoooRemoteã�§ã�®ãƒ†ãƒ¼ãƒžåˆ¤åˆ¥
	 * @param string $userAgent ãƒ¦ãƒ¼ã‚¶ã‚¨ãƒ¼ã‚¸ã‚§ãƒ³ãƒˆ
	 * @return string ãƒ†ãƒ¼ãƒž
	 */
	function getWoooRemoteTheme($userAgent) {
		$iphonePattern = array(DEVICE_PATTERN_IPHONE, DEVICE_PATTERN_IPHONE2);//ã‚¹ãƒžãƒ¼ãƒˆãƒ•ã‚©ãƒ³(Iphone)

		//iPhoneãƒ»iPod(ã‚¹ãƒžãƒ¼ãƒˆãƒ•ã‚©ãƒ³)
		$check = '/' . implode('|', $iphonePattern) . '/';
		if (preg_match($check, $userAgent)) {
			return THEME_SMART_PHONE;
		}

		//iPad(ã‚¿ãƒ–ãƒ¬ãƒƒãƒˆ)
		$check = '/' . DEVICE_PATTERN_IPAD . '/';
		if (preg_match($check, $userAgent)) {
			return THEME_TABLET;
		}

		//Android
		$check = '/' . DEVICE_PATTERN_ANDROID . '/';
		if (preg_match($check, $userAgent)) {
			//ã‚¹ãƒžãƒ¼ãƒˆãƒ•ã‚©ãƒ³ãƒ�ã‚§ãƒƒã‚¯
			$check2 = '/' . DEVICE_PATTERN_SMARTPHONE . '/i';
			if (preg_match($check2, $userAgent)) {
				//ãƒžãƒƒãƒ�ã�™ã‚Œã�°ã‚¹ãƒžãƒ¼ãƒˆãƒ•ã‚©ãƒ³
				return THEME_SMART_PHONE;
			} else {
				//ãƒžãƒƒãƒ�ã�—ã�ªã�‘ã‚Œã�°ã‚¿ãƒ–ãƒ¬ãƒƒãƒˆ
				return THEME_TABLET;
			}
		}

		return THEME_SMART_PHONE;
	}

	/**
	 * Androidåˆ¤åˆ¥ï¼ˆãƒ¦ãƒ¼ã‚¶ã‚¨ãƒ¼ã‚¸ã‚§ãƒ³ãƒˆä½¿ç”¨ï¼‰
	 * @param string $userAgent
	 * @return Androidã�®å ´å�ˆtrue
	 */
	function isAndroidByUserAgent($userAgent) {
		return preg_match('/' . DEVICE_PATTERN_ANDROID . '/', $userAgent);
	}

	/**
	 * Androidãƒ�ãƒ¼ã‚¸ãƒ§ãƒ³ã�Œ4ç³»ã‚ˆã‚Šã‚‚å‰�ã�‹ãƒ�ã‚§ãƒƒã‚¯
	 * @param string $userAgent
	 * @return 4ç³»ã‚ˆã‚Šã‚‚å‰�ã�®å ´å�ˆtrue
	 */
	function isOldAndroid($userAgent) {
		// Androidãƒ�ãƒ¼ã‚¸ãƒ§ãƒ³ä¸Šä¸€æ¡�å�–å¾—ï¼Ž
		preg_match('/Android.+;/', $userAgent, $osVersion);
		preg_match('/\d\./', @$osVersion[0],$num);
		$num = explode('.', @$num[0]);
		return @$num[0] < 4;
	}

	/**
	 * iOSãƒ�ãƒ¼ã‚¸ãƒ§ãƒ³ã�Œ5ç³»ã‚ˆã‚Šã‚‚å‰�ã�‹ãƒ�ã‚§ãƒƒã‚¯
	 * @param string $userAgent
	 * @return 5ç³»ã‚ˆã‚Šã‚‚å‰�ã�®å ´å�ˆtrue
	 */
	function isOldIOS($userAgent) {
		preg_match('/OS (\d+)_(\d+)_?(\d+)?/', $userAgent, $osVersion);
		return @$osVersion[1] < 5;
	}

	/**
	* ã‚¸ãƒ£ãƒ³ãƒ«ãƒ¬ã‚³ãƒ¡ãƒ³ãƒ‰å�–å¾—ç”¨UserIdå�–å¾—å‡¦ç�†
	*/
	function getUserIdForGenreRecommend(){
		//é–‹ç™ºã�˜ã‚ƒã�ªã�‹ã�£ã�Ÿã‚‰çµ‚äº†
		//ãƒ­ã‚°ã‚¤ãƒ³ã�—ã�¦ã�ªã�‹ã�£ã�Ÿã‚‰çµ‚äº†
		$userId =  @$this->Session->read(SESSION_NAME_USER_PLATFORM_ID);
// 		if($userId){
// 			if('production' != Configure::read('CakeEnv')){
// 				$userIds = Configure::read('USER_GENRE_PLATFORM_ID');
// 				if(!empty($userIds)){
// 					$userId = $userIds[array_rand($userIds)];
// 				}
// 			}
// 		}
		return $userId;

	}

	/**
	* AEONã‚·ãƒ�ãƒžã�‹ã�©ã�†ã�‹åˆ¤æ–­ã�™ã‚‹.
	* @param $otherFunctionType ä»–æ©Ÿèƒ½ç¨®åˆ¥ID
	* @return boolean
	*/
	function isAeonCinema($otherFunctionType = null){
		// ãƒ­ã‚°ã‚¤ãƒ³æ¸ˆã�¿ or ä»–æ©Ÿèƒ½ç¨®åˆ¥ãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿ã�‚ã‚Šã�®å ´å�ˆ
		$userId = $this->Session->read(SESSION_NAME_USER_ID);
		if (isset($userId) || @$otherFunctionType) {
			$otherFunctionType = @$otherFunctionType ? $otherFunctionType : $this->Session->read(SESSION_NAME_USER_OTHER_FUNCTION_TYPE);
			if(isset($otherFunctionType) && preg_match(OTHER_FUNCTION_TYPE_PATTERN_600, $otherFunctionType)) {
				// ä»–æ©Ÿèƒ½ç¨®åˆ¥ã�Œ600ç³»ã�ªã‚‰AEONã‚·ãƒ�ãƒž
				return true;
			} else {
				// ä»–æ©Ÿèƒ½ç¨®åˆ¥ã�Œ600ç³»ä»¥å¤–ã�®å ´å�ˆã�¯ã‚·ãƒ�ãƒžã�«ã�—ã�ªã�„
				return false;
			}
		}

		// AEONã‚·ãƒ�ãƒžãƒ‰ãƒ¡ã‚¤ãƒ³åˆ¤åˆ¥
		if(PC_AEON_CINEMA_DOMAIN == env('HTTP_HOST')){
			return true;
		}

		// AEONã‚·ãƒ�ãƒžGETãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿(SP/PCãƒ‰ãƒ¡ã‚¤ãƒ³ã�®ã�¿)
		if(in_array(env('HTTP_HOST'), array(PC_DOMAIN, SP_DOMAIN, BOOKPLACE_DOMAIN)) && isset($_GET[GET_PARAM_AEON_CINEMA])){
			return true;
		}

		// AEONã‚·ãƒ�ãƒžCookie(ã‚¢ãƒ€ãƒ«ãƒˆãƒ‰ãƒ¡ã‚¤ãƒ³æ™‚ã�®ã�¿)
		if ((PC_ADULT_DOMAIN == env('HTTP_HOST') || BOOKPLACE_DOMAIN == env('HTTP_HOST')) && @$this->Cookie->read(COOKIE_NAME_AEON_CINEMA_FLG)) {
			return true;
		}

		// AEONã‚·ãƒ�ãƒžã�§ã�¯ã�ªã�„
		return false;
	}

	/**
	 * ãƒ¤ãƒžãƒ€é›»æ©Ÿãƒ¦ãƒ¼ã‚¶ã�‹ã�©ã�†ã�‹åˆ¤æ–­ã�™ã‚‹
	 * @return ä»–æ©Ÿèƒ½ç®¡ç�†ç¨®åˆ¥ã�Œ700,701ã�ªã‚‰true
	 */
	function isYamada() {
		return preg_match(OTHER_FUNCTION_TYPE_PATTERN_700, $this->Session->read(SESSION_NAME_USER_OTHER_FUNCTION_TYPE));
	}

	/**
	 * ã‚¬ãƒ©ã‚±ãƒ¼åˆ¤åˆ¥å‡¦ç�†
	 *
	 * @return ture:ã‚¬ãƒ©ã‚±ãƒ¼ false:ã‚¬ãƒ©ã‚±ãƒ¼ã�˜ã‚ƒã�ªã�„
	 */
	function isFeaturePhone(){
		$userAgent = env('HTTP_USER_AGENT');
		return (preg_match(FEATURE_PHONE_PATTERN_DOCOMO, $userAgent)			// DOCOMO
				|| preg_match(FEATURE_PHONE_PATTERN_SOFTBANK, $userAgent)		// softbank
				|| preg_match(FEATURE_PHONE_PATTERN_AU, $userAgent)			// AU
				|| preg_match(FEATURE_PHONE_PATTERN_EMOBAIL, $userAgent)		// emobail
				|| preg_match(FEATURE_PHONE_PATTERN_WILLCOM, $userAgent)		// WILLCOM
		);
	}

	/**
	 * å ´é�¢å†™ç”»åƒ�ä½œæˆ�.
	 *
	 * @param unknown $titleId
	 * @param unknown $sceneNum
	 * @return string
	 */
	function createSceneImages($titleId, $sceneNum, $isNotLB = false){
		//ã‚¿ã‚¤ãƒˆãƒ«IDã�®1000ã�®ä½�ã�§ãƒ‡ã‚£ãƒ¬ã‚¯ãƒˆãƒªã‚’ç‰¹å®š
		$dir = ceil($titleId / 1000);

		$sceneImages = array();

		// LBã‚¿ã‚¤ãƒˆãƒ«
		if (!$isNotLB) {
			$sceneImages['sceneImage_s'][0] = TITLE_THUMBNAIL_BASE_URL . sprintf('%03d/%s_pt_a.jpg', $dir, $titleId);;;
		}
		$sceneImages['sceneImage_l'][0] = TITLE_THUMBNAIL_BASE_URL . sprintf('%03d/%s_pl_a.jpg', $dir, $titleId);;


		// å ´é�¢å†™
		for($i = 1; $i <= $sceneNum; $i++){
			$sceneImages['sceneImage_l'][$i] = SCENE_IMG_BASE_URL . sprintf('%03d/%s_%s_l.jpg', $dir, $titleId, $i);
			$sceneImages['sceneImage_s'][$i] = SCENE_IMG_BASE_URL . sprintf('%03d/%s_%s_s.jpg', $dir, $titleId, $i);
		}

		return $sceneImages;
	}

	/**
	 * ãƒ©ã‚¤ãƒˆBOXèµ·å‹•æ™‚ã�®ãƒ‰ãƒ¡ã‚¤ãƒ³ã‚¿ã‚¤ãƒ—ã‚’è¿”å�´
	 */
	function getDomainType() {
		$domainType = 1;
		$hosts = env('HTTP_HOST');
		if ($hosts == PC_NO_ADULT_DOMAIN) {
			$domainType = 3;
		} else if ($hosts == PC_PROMOTION_DOMAIN_P) {
			$domainType = 2;
		} else if ($hosts == PC_DOMAIN || $hosts == SP_DOMAIN || $hosts == PC_ADULT_DOMAIN) {
			$domainType = 0;
		} else if ($hosts == PC_AEON_CINEMA_DOMAIN) {
			$domainType = 4;
		}

		return $domainType;
	}

	/**
	* å¹´é½¢ç¢ºèª�ã�Œå¿…è¦�ã�‹ã�©ã�†ã�‹åˆ¤å®š
	* @param $otherFunctionType ä»–æ©Ÿèƒ½ç¨®åˆ¥ID
	* @return boolean
	*/
	function isNeedAgeCheck ($otherFunctionType = null) {
		if (isset($otherFunctionType) && !empty($otherFunctionType)) {
			return in_array($otherFunctionType, Configure::read('NEED_AGE_CHECK_OTHER_FUNCTION_TYPE'));
		} else {
			return false;
		}
	}

	/**
	 * é€£æ�ºIDãƒ�ã‚§ãƒƒã‚¯
	 * @param $relateId é€£æ�ºID
	 * @return boolean
	 */
	function checkRelateId ($relateId) {
		if (isset($relateId) && !empty($relateId)) {
			// å�Šè§’è‹±æ•°ãƒ»20æ–‡å­—ä»¥å†…ã�‹ãƒ�ã‚§ãƒƒã‚¯
			if (preg_match('/^[a-zA-Z0-9]+$/', $relateId) && mb_strlen($relateId) <= 20) {
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	/**
	 * å­�ã‚¢ã‚«ã‚¦ãƒ³ãƒˆãƒ�ã‚§ãƒƒã‚¯
	 *
	 */
	function isChild() {
		$accountDiv = $this->Session->read(SESSION_NAME_ACCOUNT_DIV);
		// å­�ã‚¢ã‚«ã‚¦ãƒ³ãƒˆã�‹ãƒ�ã‚§ãƒƒã‚¯
		if (ACCOUNT_DIV_TYPE_CHILD == $accountDiv) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * ã‚¯ãƒƒã‚­ãƒ¼IDã�®å�–å¾—ãƒ»è¨­å®š
	 */
	function getSlEggCookieId() {
		$slEggCookieId = $this->Cookie->read(COOKIE_NAME_SILVER_EGG_COOKIE_ID);
		if (isset($slEggCookieId) && !empty($slEggCookieId)) {
			// ã‚¯ãƒƒã‚­ãƒ¼IDã‚’ã��ã�®ã�¾ã�¾è¿”å�´
		} else {
			// ã‚¯ãƒƒã‚­ãƒ¼ã�®ç�¾åœ¨ã�®ã‚»ã‚­ãƒ¥ã‚¢ã€�ãƒ‰ãƒ¡ã‚¤ãƒ³ã�®è¨­å®šã‚’ä¸€æ™‚å¾…é�¿
			// ã‚¯ãƒƒã‚­ãƒ¼è¨­å®šå¾Œã€�å…ƒã�«æˆ»ã�™
			$secure = $this->Cookie->secure;
			$domain = $this->Cookie->domain;
			// ã‚¯ãƒƒã‚­ãƒ¼IDã�Œæœªè¨­å®šã�®å ´å�ˆã�¯è¨­å®šã�™ã‚‹
			$this->Cookie->secure = false;
			if (BOOKPLACE_DOMAIN == env('HTTP_HOST')) {
				$this->Cookie->domain = BOOKPLACE_DOMAIN;
			} else if (PC_ADULT_DOMAIN != env('HTTP_HOST')) {
				$this->Cookie->domain = COMMON_SUB_DOMAIN;
			}
			$slEggCookieId = uniqid(rand());
			$this->Cookie->write(COOKIE_NAME_SILVER_EGG_COOKIE_ID, $slEggCookieId, false, '2 year');

			// ã‚¯ãƒƒã‚­ãƒ¼ã�®è¨­å®šã‚’å…ƒã�«æˆ»ã�™
			$this->Cookie->secure = $secure;
			$this->Cookie->domain = $domain;
		}
		return $slEggCookieId;
	}

	/**
	 * ã‚¹ãƒšãƒƒã‚¯IDã�®ç”Ÿæˆ�
	 * @param $serviceId ã‚µãƒ¼ãƒ“ã‚¹ID
	 * @param $contentsType ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã‚¿ã‚¤ãƒ—
	 * @param $recomendType ãƒ¬ã‚³ãƒ¡ãƒ³ãƒ‰ã‚¿ã‚¤ãƒ—
	 * @param $isAccumulation è“„ç©�ãƒ•ãƒ©ã‚°
	 *
	 * @return String
	 */
	function createSpecId($serviceId, $contentsType, $recomendType, $isAccumulation = null, $categoryId = null){
		// ã‚¹ãƒšãƒƒã‚¯IDç”Ÿæˆ�
		if ($serviceId == SERVICE_ID_TYPE_SP_IPHONE || $serviceId == SERVICE_ID_TYPE_SP_ANDROID || $serviceId == SERVICE_ID_TYPE_IPHONE_APP || $serviceId == SERVICE_ID_TYPE_ANDROID_APP) {
			$specId = self::SPEC_ID_DEVICE_SP;
		} else if ($serviceId == SERVICE_ID_TYPE_TABLET_IPAD || $serviceId ==SERVICE_ID_TYPE_TABLET_ANDROID || $serviceId == SERVICE_ID_TYPE_IPAD_APP || $serviceId ==SERVICE_ID_TYPE_ANDROID_TAB_APP) {
			$specId = self::SPEC_ID_DEVICE_TAB;
		} else if ($serviceId == SERVICE_ID_TYPE_PORTAL_APP) {
			$specId = self::SPEC_ID_DEVICE_APP;
		} else if ($serviceId == SERVICE_ID_TYPE_ANDROID_STB_APP) {
			$specId = self::SPEC_ID_DEVICE_ANDROID_STB;
		} else {
			$specId = self::SPEC_ID_DEVICE_PC;
		}

		if (substr($recomendType, 0, 1) == CATEGORY_ID_BOOK) {
			$specId .= substr($recomendType, 1, 1);
		} else {
			$specId .= $recomendType;
		}

		if ($contentsType == CONTENTS_TYPE_ADULT) {
			$specId .= self::SPEC_ID_ADULT;
		} elseif($contentsType == CONTENTS_TYPE_ACCUMULATION){
			// ã‚³ãƒ³ãƒ†ãƒ³ãƒ„ã‚¿ã‚¤ãƒ—è“„ç©�ã�§ã‚‚ã‚¢ãƒ—ãƒªã�®å ´å�ˆã�¯GENERALï¼Ž
			if (in_array($serviceId, array(SERVICE_ID_TYPE_PORTAL_APP, SERVICE_ID_TYPE_ANDROID_STB_APP))) {
				$specId .= self::SPEC_ID_GENERAL;
			} else {
				$specId .= self::SPEC_ID_ACCUMULATION;
			}
		} else if ($contentsType == CONTENTS_TYPE_BOOK) {
			if (substr($categoryId, 0, 3) == CATEGORY_ID_BOOK_GENRE_DETAIL) {
				$specId .= self::SPEC_ID_BOOK_GENRE_DETAIL;
			} else if ($categoryId == CATEGORY_ID_BOOK && $recomendType != RECOMMEND_TYPE_TITLE_DETAIL_BOOK) {
				// ã‚³ãƒ³ãƒ†ãƒ³ãƒ„è©³ç´°ã€�ã‚¿ã‚¤ãƒˆãƒ«è©³ç´°ã�¯çœ�ã��
				$specId .= self::SPEC_ID_BOOK_TOP_AND_PLAY;
			} else {
				$specId .= self::SPEC_ID_BOOK_TITLE_AND_CONTENTS;
			}
		} else if ($contentsType == CONTENTS_TYPE_KIDS) {
			$specId .= self::SPEC_ID_KIDS;
		} else {
			$specId .= self::SPEC_ID_GENERAL;
		}
		return $specId;
	}


	/**
	 * BookPlace(æ�±èŠ�æ›¸ç±�)ã�‹ã�®åˆ¤åˆ¥
	 * @return boolean
	 */
	function isBookPlace(){
		// BookPlaceãƒ‰ãƒ¡ã‚¤ãƒ³åˆ¤åˆ¥
		if(BOOKPLACE_DOMAIN == env('HTTP_HOST')){
			return true;
		}

		// Not BookPlace
		return false;
	}

	/**
	* GREEï¼ˆã‚¢ã‚¯ã‚»ã‚¹ãƒˆãƒ¬ãƒ¼ãƒ‰ï¼‰å¯¾å¿œ
	* @param $userPlatformId ä¼šå“¡PFID
	* @param $greeTag GREEã‚¿ã‚°
	* @param $result_id
	*
	* @return String
	*/
	function accesstradeSocket($userPlatformId, $greeTag, $result_id, $userAgent) {
		try {
			$inputParam = array('upid' => $userPlatformId, 'rk' => $greeTag, 'result_id' => $result_id, 'ua' => $userAgent);
			$this->outputInfoLog('GREEï¼ˆã‚¢ã‚¯ã‚»ã‚¹ãƒˆãƒ¬ãƒ¼ãƒ‰ï¼‰é€šçŸ¥ é–‹å§‹', $inputParam);

			$m="unextsp";
			$timeout="10";
			$ctx = stream_context_create(array(
						'http' => array(
							'ignore_errors' => true,
							'timeout' => $timeout,
							'protocol_version' => 1.1,
							'user_agent' => $userAgent)));

			$start = microtime(true);
			$response = file_get_contents("http://sp.accesstrade.net/isatWeasel.cgi?m=$m&result_id=$result_id&verify=$userPlatformId&rk=$greeTag", false, $ctx);
			$end = microtime(true);

			$diffTime = $end - $start;
			if (!$response) {
				throw new  Exception('GREEï¼ˆã‚¢ã‚¯ã‚»ã‚¹ãƒˆãƒ¬ãƒ¼ãƒ‰ï¼‰é€šçŸ¥å¤±æ•— m:'.$m. ' result_id:'.$result_id. ' verify:'.$userPlatformId. ' rk:'.$greeTag. ' TAT:'.$diffTime.'(s)');
			}

			$result['response'] = $response;
			$result['m'] = $m;
			$result['result_id'] = $result_id;
			$result['verify'] = $userPlatformId;
			$result['rk'] = $greeTag;
			$result['TAT'] = $diffTime;

			$this->outputInfoLog('GREEï¼ˆã‚¢ã‚¯ã‚»ã‚¹ãƒˆãƒ¬ãƒ¼ãƒ‰ï¼‰é€šçŸ¥ å®Œäº†', $result);
			return $result;
		} catch (Exception $e) {
			$this->outputWarningLog('', $e->getMessage());
		}

		/********æ—§ãƒ�ãƒ¼ã‚¸ãƒ§ãƒ³******************************************************************
		try {
			$inputParam = array('upid' => $userPlatformId, 'rk' => $greeTag, 'result_id' => $result_id, 'ua' => $userAgent);
			$this->outputInfoLog('GREEï¼ˆã‚¢ã‚¯ã‚»ã‚¹ãƒˆãƒ¬ãƒ¼ãƒ‰ï¼‰é€šçŸ¥ é–‹å§‹', $inputParam);

			$host = 'sp.accesstrade.net';
			$m= 'unextsp';
			$port= '80';
			$timeout= '10';
			$iErrno = null;
			$sErrstr = null;

			$fp = fsockopen($host, $port, $iErrno, $sErrstr, $timeout);
			if (!$fp) {
				throw new  Exception('GREEï¼ˆã‚¢ã‚¯ã‚»ã‚¹ãƒˆãƒ¬ãƒ¼ãƒ‰ï¼‰é€šçŸ¥å¤±æ•— host:'.$host. ' port:'.$port. ' iErrno:'.$iErrno. ' sErrstr:'.$sErrstr. ' timeout:'.$timeout);
			} else {
				$fpParam = array('host' => $host, 'port' => $port, 'iErrno' => $iErrno, 'sErrstr' => $sErrstr, 'timeout' => $timeout);
				$this->outputInfoLog('GREEï¼ˆã‚¢ã‚¯ã‚»ã‚¹ãƒˆãƒ¬ãƒ¼ãƒ‰ï¼‰ã‚½ã‚±ãƒƒãƒ„æŽ¥ç¶šæˆ�åŠŸ', $fpParam);
			}
			fputs($fp, "GET http://sp.accesstrade.net/isatWeasel.cgi?m=$m&result_id=$result_id&verify=$userPlatformId&rk=$greeTag HTTP/1.1\r\n");
			fputs($fp, "Host: {$host}\r\n");
			fputs($fp, "User-Agent: {$userAgent}\r\n");
			fputs($fp, "Connection: Close\r\n\r\n");

			$fputsParam = array('m' => $m, 'result_id' => $result_id, 'rk' => $greeTag, 'host' => $host, 'ua' => $userAgent);
			$this->outputInfoLog('GREEï¼ˆã‚¢ã‚¯ã‚»ã‚¹ãƒˆãƒ¬ãƒ¼ãƒ‰ï¼‰ãƒ•ã‚¡ã‚¤ãƒ«æ›¸ã��è¾¼ã�¿å®Œäº†', $fputsParam);

			$response = "";
		//	while (!feof($fp)) {
		//		$this->outputInfoLog('GREEï¼ˆã‚¢ã‚¯ã‚»ã‚¹ãƒˆãƒ¬ãƒ¼ãƒ‰ï¼‰èª­ã�¿è¾¼ã�¿é–‹å§‹');
		//		$start = microtime(true);
		//		$response .= fgets($fp, 4096);
		//		$end = microtime(true);
		//		$diffTime = $end - $start;
		//		$this->outputInfoLog('GREEï¼ˆã‚¢ã‚¯ã‚»ã‚¹ãƒˆãƒ¬ãƒ¼ãƒ‰ï¼‰èª­ã�¿è¾¼ã�¿å‡¦ç�† response:'.$response.' TAT:'.$diffTime.'(s)');
		//	}
			fclose($fp);
			$this->outputInfoLog('GREEï¼ˆã‚¢ã‚¯ã‚»ã‚¹ãƒˆãƒ¬ãƒ¼ãƒ‰ï¼‰é€šçŸ¥å®Œäº† response:'.$response);
			return $response;

		} catch (Exception $e) {
			$this->outputWarningLog('', $e->getMessage());
		}
		********æ—§ãƒ�ãƒ¼ã‚¸ãƒ§ãƒ³******************************************************************/
	}

	/**
	* ã‚¤ãƒ³ã‚¿ãƒ¼ã‚¹ãƒšãƒ¼ã‚¹å¯¾å¿œ
	* @param $userPlatformId ä¼šå“¡PFID
	* @param $intSp ã‚¤ãƒ³ã‚¿ãƒ¼ã‚¹ãƒšãƒ¼ã‚¹ç”¨è­˜åˆ¥ID
	* @param $result_id
	*
	* @return String
	*/
	function interSpaceSocket($userPlatformId, $intSp, $result_id, $userAgent) {
		try {
			$inputParam = array('upid' => $userPlatformId, 'rk' => $intSp, 'result_id' => $result_id, 'ua' => $userAgent);
			$this->outputInfoLog('ã‚¤ãƒ³ã‚¿ãƒ¼ã‚¹ãƒšãƒ¼ã‚¹é€šçŸ¥ é–‹å§‹', $inputParam);

			$m="unextsp2";
			$timeout="10";
			$ctx = stream_context_create(array(
							'http' => array(
								'ignore_errors' => true,
								'timeout' => $timeout,
								'protocol_version' => 1.1,
								'user_agent' => $userAgent)));

			$start = microtime(true);
			$response = file_get_contents("http://sp.accesstrade.net/isatWeasel.cgi?m=$m&result_id=$result_id&verify=$userPlatformId&rk=$intSp", false, $ctx);
			$end = microtime(true);

			$diffTime = $end - $start;
			if (!$response) {
				throw new  Exception('ã‚¤ãƒ³ã‚¿ãƒ¼ã‚¹ãƒšãƒ¼ã‚¹é€šçŸ¥å¤±æ•— m:'.$m. ' result_id:'.$result_id. ' verify:'.$userPlatformId. ' rk:'.$intSp. ' TAT:'.$diffTime.'(s)');
			}

			$result['response'] = $response;
			$result['m'] = $m;
			$result['result_id'] = $result_id;
			$result['verify'] = $userPlatformId;
			$result['rk'] = $intSp;
			$result['TAT'] = $diffTime;

			$this->outputInfoLog('ã‚¤ãƒ³ã‚¿ãƒ¼ã‚¹ãƒšãƒ¼ã‚¹é€šçŸ¥ å®Œäº†', $result);
			return $result;
		} catch (Exception $e) {
			$this->outputWarningLog('', $e->getMessage());
		}
	}

	/**
	* A8FLY-EC å¯¾å¿œ
	* @param $userPlatformId ä¼šå“¡PFID
	* @param $a8Param A8FLY-ECç”¨ã‚¿ã‚°
	* @return Array
	*/
	function a8flyEcSocket($userPlatformId, $a8FlyTag) {
		try {
			$inputParam = array('upid' => $userPlatformId, 'a8FlyTag' => $a8FlyTag);
			$this->outputInfoLog('A8FLY-EC é€šçŸ¥ é–‹å§‹', $inputParam);

			$start = microtime(true);
			$response = file_get_contents("https://px.a8.net/cgi-bin/a8fly/a8flyec?F=S&a8={$a8FlyTag}&PID=s00000014274001&SO={$userPlatformId}&SI=1.1.1.mousikomi", false);
			$end = microtime(true);

			$diffTime = $end - $start;
			if (!$response) {
				throw new  Exception('A8FLY-EC é€šçŸ¥å¤±æ•— a8:'.$a8FlyTag. ' SO:'.$userPlatformId. ' TAT:'.$diffTime.'(s)');
			}

			$result['response'] = $response;
			$result['a8'] = $a8FlyTag;
			$result['SO'] = $userPlatformId;
			$result['TAT'] = $diffTime;

			$this->outputInfoLog('A8FLY-EC é€šçŸ¥ å®Œäº†', $result);
			return $result;
		} catch (Exception $e) {
			$this->outputWarningLog('', $e->getMessage());
		}
	}

	/**
	* JA NET å¯¾å¿œ
	* @param $userPlatformId ä¼šå“¡PFID
	* @param $a8Param JA NETç”¨ã‚¿ã‚°
	* @param $adid ã‚¿ã‚°åˆ¶å¾¡ç”¨ãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿
	* @return Array
	*/
	function jaNetSocket($userPlatformId, $jaNetTag, $adid) {
		try {
			$inputParam = array('upid' => $userPlatformId, 'jaNetTag' => $jaNetTag, 'adid' => $adid);
			$this->outputInfoLog('JA NET é€šçŸ¥ é–‹å§‹', $inputParam);

			// ã‚µãƒ³ã‚¯ã‚¹IDç”Ÿæˆ�
			if ($adid == CV_TAG_ADID_JA1) {
				$thanksId = '403015';
			} else if ($adid == CV_TAG_ADID_JA2) {
				$thanksId = '403016';
			} else {
				$thanksId = '403017';
			}
			$start = microtime(true);
			$response = file_get_contents("http://action.j-a-net.jp//{$jaNetTag}/{$userPlatformId}/{$thanksId}", false);
			$end = microtime(true);

			$diffTime = $end - $start;
			if (!$response) {
				throw new  Exception('JA NET é€šçŸ¥å¤±æ•— jaNetTag:'.$jaNetTag. ' upid:'. $userPlatformId. ' thanksId:'.$thanksId. ' TAT:'.$diffTime.'(s)');
			}

			$result['response'] = $response;
			$result['jaNetTag'] = $jaNetTag;
			$result['upid'] = $userPlatformId;
			$result['thanksId'] = $thanksId;
			$result['TAT'] = $diffTime;

			$this->outputInfoLog('JA NET é€šçŸ¥ å®Œäº†', $result);
			return $result;
		} catch (Exception $e) {
			$this->outputWarningLog('', $e->getMessage());
		}
	}

	/**
	* CA REWARD å¯¾å¿œ
	* @param $userPlatformId ä¼šå“¡PFID
	* @param $caTag CA REWARDç”¨ã‚¿ã‚°
	* @param $adid ã‚¿ã‚°åˆ¶å¾¡ç”¨ãƒ‘ãƒ©ãƒ¡ãƒ¼ã‚¿
	* @return Array
	*/
	function caRewardSocket($userPlatformId, $caTag, $adid) {
		try {
			$inputParam = array('upid' => $userPlatformId, 'caTag' => $caTag, 'adid' => $adid);
			$this->outputInfoLog('CA REWARD é€šçŸ¥ é–‹å§‹', $inputParam);

			// ã‚µãƒ³ã‚¯ã‚¹IDç”Ÿæˆ�
			if ($adid == CV_TAG_ADID_CAR) {
				$cid = '09057';
			} else if ($adid == CV_TAG_ADID_ASU) {
				$cid = '9513';
			} else if ($adid == CV_TAG_ADID_AMS) {
				$cid = '8814';
			} else if ($adid == CV_TAG_ADID_AMP) {
				$cid = '09074';
			}
			$start = microtime(true);
			$response = file_get_contents("http://ad.mobadme.jp/ac/action.php?cid={$cid}&af={$caTag}&uid={$userPlatformId}&pid=1", false);
			$end = microtime(true);

			$diffTime = $end - $start;
			if (!$response) {
				throw new  Exception('CA REWARD é€šçŸ¥å¤±æ•— cid:'.$cid. ' af:'.$caTag. ' uid:'. $userPlatformId.  ' TAT:'.$diffTime.'(s)');
			}

			$result['response'] = $response;
			$result['af'] = $caTag;
			$result['uid'] = $userPlatformId;
			$result['cid'] = $cid;
			$result['TAT'] = $diffTime;

			$this->outputInfoLog('CA REWARD é€šçŸ¥ å®Œäº†', $result);
			return $result;
		} catch (Exception $e) {
			$this->outputWarningLog('', $e->getMessage());
		}
	}

	/**
	* Rakuten LinkShare å¯¾å¿œ
	* @param $userPlatformId ä¼šå“¡PFID
	* @param $siteId ãƒˆãƒ©ãƒƒã‚­ãƒ³ã‚°ID
	* @param $visitTime è¨ªå•�æ—¥(ãƒˆãƒ©ãƒƒã‚­ãƒ³ã‚°IDã‚’Cookieã�«è©°ã‚�ã�Ÿæ—¥æ™‚)
	* @param $sku è­˜åˆ¥ID(LPID)
	* @return Array
	*/
	function rktnLinkSocket($userPlatformId, $siteId, $visitTime, $sku) {
		try {
			$inputParam = array('upid' => $userPlatformId, 'siteId' => $siteId, 'visitTime' => $visitTime, 'sku' => $sku);
			$this->outputInfoLog('Rakuten LinkShare é€šçŸ¥ é–‹å§‹', $inputParam);

			$mid = 39692;

			$endTime = gmdate("Ymd_Hi", time());
			$string = "ord={$userPlatformId}&tr={$siteId}&land={$visitTime}&date={$endTime}&amtlist=0&skulist={$sku}&qlist=1&cur=JPY&namelist=VOD";
			// Base64ã‚¨ãƒ³ã‚³ãƒ¼ãƒ‰
			$base64String = base64_encode($string);
			// ã€Œ+ã€�â†’ã€Œ-ã€�,ã€Œ/ã€�â†’ã€Œ_ã€�ã�«å¤‰æ�›
			$search = array('+', '/');
			$replace  = array('-', '_');
			$base64String = str_replace($search, $replace, $base64String);

			// HMAC-MD5ã�§è¨ˆç®—ã€�KEY(ç¬¬3å¼•æ•°)ã�¯backlog No.126ã‚’å�‚ç…§
			$md5String = mhash(MHASH_MD5, $string, 'DfdPDDCi');
			// HMAC-MD5ã�®è¨ˆç®—çµ�æžœã‚’Base64ã‚¨ãƒ³ã‚³ãƒ¼ãƒ‰
			$encode_md5String = base64_encode($md5String);
			// ã€Œ+ã€�â†’ã€Œ-ã€�,ã€Œ/ã€�â†’ã€Œ_ã€�ã�«å¤‰æ�›
			$encode_md5String = str_replace($search, $replace, $encode_md5String);

			$start = microtime(true);
			$response = file_get_contents("http://track.linksynergy.com/nvp?mid={$mid}&msg={$base64String}&md5={$encode_md5String}&xml=1", false);
			$end = microtime(true);

			$diffTime = $end - $start;
			if (!$response) {
				throw new  Exception('Rakuten LinkShare mid:'.$mid. ' ord:'.$userPlatformId. ' tr:'. $siteId. ' land:'. $visitTime. ' date:'.$endTime. ' skulist:'. $sku. ' base64:'.$base64String. ' md5String:'.$md5String. ' encode_md5String:'.$encode_md5String. ' TAT:'.$diffTime.'(s)');
			}

			$result['response'] = $response;
			$result['mid'] = $mid;
			$result['ord'] = $userPlatformId;
			$result['tr'] = $siteId;
			$result['land'] = $visitTime;
			$result['date'] = $endTime;
			$result['skulist'] = $sku;
			$result['TAT'] = $diffTime;

			$this->outputInfoLog('Rakuten LinkShare é€šçŸ¥ å®Œäº†', $result);
			return $result;
		} catch (Exception $e) {
			$this->outputWarningLog('', $e->getMessage());
		}
	}

	/**
	* ceres å¯¾å¿œ
	* @param $userPlatformId ä¼šå“¡PFID
	* @param $ceres ãƒˆãƒ©ãƒƒã‚­ãƒ³ã‚°ID
	* @return Array
	*/
	function ceresSocket($userPlatformId, $ceres) {
		try {
			$inputParam = array('upid' => $userPlatformId, 'ceres' => $ceres);
			$this->outputInfoLog('Ceres é€šçŸ¥ é–‹å§‹', $inputParam);

			$buyer = 35;
			$start = microtime(true);
			$response = file_get_contents("http://ad-track.jp/ad/p/cv?_buyer={$buyer}&_xuid={$ceres}&_buid={$userPlatformId}", false);
			$end = microtime(true);

			$diffTime = $end - $start;
			if (!$response) {
				throw new  Exception('Ceres _buyer:'.$buyer. ' _xuid:'.$ceres. ' _buid:'. $userPlatformId. ' TAT:'.$diffTime.'(s)');
			}

			$result['response'] = $response;
			$result['_buyer'] = $buyer;
			$result['_xuid'] = $ceres;
			$result['_buid'] = $userPlatformId;
			$result['TAT'] = $diffTime;

			$this->outputInfoLog('Ceres é€šçŸ¥ å®Œäº†', $result);
			return $result;
		} catch (Exception $e) {
			$this->outputWarningLog('', $e->getMessage());
		}
	}

	/**
	* TGã‚¢ãƒ•ã‚£ãƒªã‚¨ã‚¤ãƒˆ å¯¾å¿œ
	* @param $userPlatformId ä¼šå“¡PFID
	* @param $tg TGã‚¢ãƒ•ã‚£ãƒªã‚¨ã‚¤ãƒˆç”¨è­˜åˆ¥ID
	* @param $lpId LPID
	* @return Array
	*/
	function tgAffSocket($userPlatformId, $tg, $lpId) {
		try {
			$inputParam = array('upid' => $userPlatformId, 'tg' => $tg, 'lpId' => $lpId);
			$this->outputInfoLog('TGã‚¢ãƒ•ã‚£ãƒªã‚¨ã‚¤ãƒˆ é€šçŸ¥ é–‹å§‹', $inputParam);

			$start = microtime(true);
			$response = file_get_contents("https://ad2.trafficgate.net/mt/w/{$tg}/5868/{$lpId};1;0/{$userPlatformId}", false);
			$end = microtime(true);

			$diffTime = $end - $start;
			if (!$response) {
				throw new  Exception('TGã‚¢ãƒ•ã‚£ãƒªã‚¨ã‚¤ãƒˆ tg:'.$tg . ' upid:'.$userPlatformId. ' lpId:'. $lpId. ' TAT:'.$diffTime.'(s)');
			}

			$result['response'] = $response;
			$result['tg'] = $tg;
			$result['lpId'] = $lpId;
			$result['upid'] = $userPlatformId;
			$result['TAT'] = $diffTime;

			$this->outputInfoLog('TGã‚¢ãƒ•ã‚£ãƒªã‚¨ã‚¤ãƒˆ é€šçŸ¥ å®Œäº†', $result);
			return $result;
		} catch (Exception $e) {
			$this->outputWarningLog('', $e->getMessage());
		}
	}

	/**
	* MTI(ãƒ”ãƒƒãƒˆã‚¹ãƒ«ãƒ¼) å¯¾å¿œ
	* @param $userPlatformId ä¼šå“¡PFID
	* @param $nta MTI(ãƒ”ãƒƒãƒˆã‚¹ãƒ«ãƒ¼)ç”¨è­˜åˆ¥ID
	* @return Array
	*/
	function mtiPitSocket($userPlatformId, $nta) {
		try {
			$inputParam = array('upid' => $userPlatformId, 'nta' => $nta);
			$this->outputInfoLog('MTI(ãƒ”ãƒƒãƒˆã‚¹ãƒ«ãƒ¼) é€šçŸ¥ é–‹å§‹', $inputParam);

			$cr = 1071;
			$start = microtime(true);
			$response = file_get_contents("https://pit.mopita.com/if/portal/if_ext_conversion.aspx?nta={$nta}&cr={$cr}&suid={$userPlatformId}", false);
			$end = microtime(true);

			$diffTime = $end - $start;
			if (!$response) {
				throw new  Exception('MTI(ãƒ”ãƒƒãƒˆã‚¹ãƒ«ãƒ¼) nta:'.$nta . ' cr:'. $cr. ' suid:'.$userPlatformId. ' TAT:'.$diffTime.'(s)');
			}

			$result['response'] = $response;
			$result['nta'] = $nta;
			$result['cr'] = $cr;
			$result['suid'] = $userPlatformId;
			$result['TAT'] = $diffTime;

			$this->outputInfoLog('MTI(ãƒ”ãƒƒãƒˆã‚¹ãƒ«ãƒ¼) é€šçŸ¥ å®Œäº†', $result);
			return $result;
		} catch (Exception $e) {
			$this->outputWarningLog('', $e->getMessage());
		}
	}

	/**
	* ãƒªã‚¢ãƒ«ãƒ¯ãƒ¼ãƒ«ãƒ‰ å¯¾å¿œ
	* @param $userPlatformId ä¼šå“¡PFID
	* @param $rlw ãƒªã‚¢ãƒ«ãƒ¯ãƒ¼ãƒ«ãƒ‰ç”¨è­˜åˆ¥ID
	* @param $adid CVåˆ¶å¾¡ç”¨ID
	* @return Array
	*/
	function realWorldSocket($userPlatformId, $rlw, $adid) {
		try {
			$inputParam = array('upid' => $userPlatformId, 'rlw' => $rlw, 'adid' => $adid);
			$this->outputInfoLog('ãƒªã‚¢ãƒ«ãƒ¯ãƒ¼ãƒ«ãƒ‰é€šçŸ¥ é–‹å§‹', $inputParam);

			if ($adid == CV_TAG_ADID_RWU) {
				$option = '11db250d';
			} else {
				$option = '11db250e';
			}

			$start = microtime(true);
			$response = file_get_contents("http://rts.realworld.jp/res.cgi?id={$rlw}&a={$option}&u={$userPlatformId}", false);
			$end = microtime(true);

			$diffTime = $end - $start;
			if (!$response) {
				throw new  Exception('ãƒªã‚¢ãƒ«ãƒ¯ãƒ¼ãƒ«ãƒ‰ id:'.$rlw . ' a:'. $option. ' u:'.$userPlatformId. ' TAT:'.$diffTime.'(s)');
			}

			$result['response'] = $response;
			$result['id'] = $rlw;
			$result['a'] = $option;
			$result['u'] = $userPlatformId;
			$result['TAT'] = $diffTime;

			$this->outputInfoLog('ãƒªã‚¢ãƒ«ãƒ¯ãƒ¼ãƒ«ãƒ‰ é€šçŸ¥ å®Œäº†', $result);
			return $result;
		} catch (Exception $e) {
			$this->outputWarningLog('', $e->getMessage());
		}
	}

	/**
	* ã‚®ã‚¬ãƒ¡ãƒ‡ã‚£ã‚¢ å¯¾å¿œ
	* @param $userPlatformId ä¼šå“¡PFID
	* @param $transId ã‚®ã‚¬ãƒ¡ãƒ‡ã‚£ã‚¢ç”¨è­˜åˆ¥ID
	* @return Array
	*/
	function gigaMediaSocket($userPlatformId, $transId) {
		try {
			$inputParam = array('upid' => $userPlatformId, 'transid' => $transId);
			$this->outputInfoLog('ã‚®ã‚¬ãƒ¡ãƒ‡ã‚£ã‚¢é€šçŸ¥ é–‹å§‹', $inputParam);

			$campid = 'C53d86fc833a98';

			$start = microtime(true);
			$response = file_get_contents("http://ad.commercelead.jp/clt/r/ad?campid={$campid}&transid={$transId}&p1={$userPlatformId}", false);
			$end = microtime(true);

			$diffTime = $end - $start;
			if (!$response) {
				throw new  Exception('ã‚®ã‚¬ãƒ¡ãƒ‡ã‚£ã‚¢ campid:'.$campid . ' transid:'. $transId. ' p1:'.$userPlatformId. ' TAT:'.$diffTime.'(s)');
			}

			$result['response'] = $response;
			$result['campid'] = $campid;
			$result['transid'] = $transId;
			$result['p1'] = $userPlatformId;
			$result['TAT'] = $diffTime;

			$this->outputInfoLog('ã‚®ã‚¬ãƒ¡ãƒ‡ã‚£ã‚¢ é€šçŸ¥ å®Œäº†', $result);
			return $result;
		} catch (Exception $e) {
			$this->outputWarningLog('', $e->getMessage());
		}
	}

	/**
	 * æ›¸ç±�ã‚µãƒ¼ãƒ“ã‚¹ã�Œé€£æ�ºæ¸ˆã�¿ã�‹ã�®ãƒ�ã‚§ãƒƒã‚¯
	 * @param otherServiceList é€£æ�ºã‚µãƒ¼ãƒ“ã‚¹ãƒªã‚¹ãƒˆ
	 * @param multiAccountId ãƒžãƒ«ãƒ�ã‚¢ã‚«ã‚¦ãƒ³ãƒˆID
	 */
	function isBookPlaceServiceLinked($otherServiceList, $multiAccountId){
		// é€£æ�ºã‚µãƒ¼ãƒ“ã‚¹ãƒªã‚¹ãƒˆã�®æƒ…å ±ã�Œã�ªã�„å ´å�ˆã�¯falseã‚’è¿”å�´
		if((@$otherServiceList == null)
			|| (count($otherServiceList) <= 0)){
			return false;
		}else{
			// ãƒªã‚¹ãƒˆã‚’èµ°æŸ»ã�—ã€�æ›¸ç±�ã‚µãƒ¼ãƒ“ã‚¹ã�Œé€£æ�ºæ¸ˆã�¿ã�®å ´å�ˆã�¯trueã‚’è¿”å�´
			foreach(@$otherServiceList as $otherService){
				if($otherService['otherServiceType'] == OTHER_SERVICE_TYPE_BOOK_PLACE && $otherService['userMultiAccountId'] == $multiAccountId){
					return true;
				}
			}
		}
		return false;
	}

	/**
	 * æ›¸ç±�ã�®å¯¾è±¡ãƒ‡ãƒ�ã‚¤ã‚¹IDã‚’åˆ¤åˆ¥
	 *
	 * @param string $user_agent ãƒ¦ãƒ¼ã‚¶ã‚¨ãƒ¼ã‚¸ã‚§ãƒ³ãƒˆ
	 * @return string å¯¾å‡¦ãƒ‡ãƒ�ã‚¤ã‚¹ID
	 */
	function getTargetDeviceBook($user_agent = null) {

		if (!$user_agent) {
			// UAæŒ‡å®šç„¡ã�„å ´å�ˆã�¯å…¨ãƒ‡ãƒ�ã‚¤ã‚¹ã�¨åˆ¤åˆ¥(E-Linkã‚’é™¤ã��)
			return 	BOOK_TARGET_DEVICE_IOS + BOOK_TARGET_DEVICE_ANDROID + BOOK_TARGET_DEVICE_PC;
		}

		// UAã�‹ã‚‰ã‚µãƒ¼ãƒ“ã‚¹IDã‚’åˆ¤åˆ¥
		$result = $this->distinctionServiceType($user_agent);
		$serviceId = $result['serviceId'];

		if (in_array($serviceId, array(SERVICE_ID_TYPE_SP_IPHONE, SERVICE_ID_TYPE_TABLET_IPAD, SERVICE_ID_TYPE_IPHONE_APP, SERVICE_ID_TYPE_IPAD_APP, SERVICE_ID_TYPE_IOS_SAFARI))) {
			// iOS
			$targetDevice = BOOK_TARGET_DEVICE_IOS;

		} else if (in_array($serviceId, array(SERVICE_ID_TYPE_SP_ANDROID, SERVICE_ID_TYPE_TABLET_ANDROID, SERVICE_ID_TYPE_ANDROID_APP, SERVICE_ID_TYPE_ANDROID_TAB_APP))) {
			// Android
			$targetDevice = BOOK_TARGET_DEVICE_ANDROID;

		} else {
			// PC
			$targetDevice = BOOK_TARGET_DEVICE_PC;
		}

		return $targetDevice;
	}

	/**
	 * Usenã‚¨ãƒ©ãƒ¼ã�®ä»–æ©Ÿèƒ½ç¨®åˆ¥IDã�®å�–å¾—
	 * @return ä»–æ©Ÿèƒ½ç¨®åˆ¥ã‚¨ãƒ©ãƒ¼ãƒªã‚¹ãƒˆ
	 */
	function getUsenWithErrorList() {
		$withErrorList = array();
		$path = ROOT . DS . 'inner' . DS . 'usen' . DS . 'usen_with_error_list';
		$file = fopen($path, "r");
		if ($file) {
			while (!feof($file)) {
				$str = chop(fgets($file));
				if ($str) {
					$withErrorList[] = rtrim(mb_convert_encoding($str, 'UTF-8', 'Shift-JIS'));
				}
			}
		}
		return $withErrorList;
	}

	/**
	* Bookã‚¨ãƒ©ãƒ¼ã�®ä»–æ©Ÿèƒ½ç¨®åˆ¥IDã�®å�–å¾—
	* @return ä»–æ©Ÿèƒ½ç¨®åˆ¥ã‚¨ãƒ©ãƒ¼ãƒªã‚¹ãƒˆ
	*/
	function getBookWithErrorList() {
		$withErrorList = array();
		$path = ROOT . DS . 'inner' . DS . 'bp4u' . DS . 'book_with_error_list';
		$file = fopen($path, "r");
		if ($file) {
			while (!feof($file)) {
				$str = chop(fgets($file));
				if ($str) {
					$withErrorList[] = rtrim(mb_convert_encoding($str, 'UTF-8', 'Shift-JIS'));
				}
			}
		}
		return $withErrorList;
	}

	/**
	* U-NEXTPlayerå†�ç”ŸOKãƒ‡ãƒ�ã‚¤ã‚¹åˆ¤å®š
	* @return ä»–æ©Ÿèƒ½ç¨®åˆ¥ã‚¨ãƒ©ãƒ¼ãƒªã‚¹ãƒˆ
	*/
	function checkPlayableDeviceInUnextApp($userAgent) {
		$ngDeviceList = array();
		$path = ROOT . DS . 'inner' . DS . 'unext_player_app' . DS . 'ng_device_list';
		$file = fopen($path, "r");
		if ($file) {
			while (!feof($file)) {
				$str = chop(fgets($file));
				if ($str) {
					$ngDeviceList[] = rtrim(mb_convert_encoding($str, 'UTF-8', 'Shift-JIS'));
				}
			}
		}

		$result = true;
		foreach ($ngDeviceList as $value) {
			if (strpos($userAgent, $value)) {
				$result = false;
				break;
			}
		}
		return $result;
	}

	/**
	 * ã‚¢ãƒ€ãƒ«ãƒˆåˆ¤å®š(ã‚¿ã‚¤ãƒˆãƒ«ID)
	 */
	function isAdultById($titleId) {
		$isAdult = false;
		if (isset($titleId)) {
			$titleModel = ClassRegistry::init('Title');
			$result = $titleModel->findAdultFlgByTitleId($titleId);
			if (isset($result[0]['Title']['fi_adult_flg']) && PARENTAL_ADULT == $result[0]['Title']['fi_adult_flg']) {
				$isAdult = true;
			}
		}
		return $isAdult;
	}

	/**
	 * AndroidSTBåˆ¤æ–­
	 */
	function isAndroidStb() {
		$isAndroidStb = false;
		if (preg_match('/' . SITECD_PATTERN_ANDROID_STB_APP . '/', env('HTTP_USER_AGENT'))){
			$isAndroidStb = true;
		}
		return $isAndroidStb;
	}

	/**
	 * æ©Ÿç¨®åˆ¥å‹•ç”»å½¢å¼�ãƒªã‚¹ãƒˆã�®å�–å¾—
	 * @param  String $clientApp ã‚¯ãƒ©ã‚¤ã‚¢ãƒ³ãƒˆã‚¢ãƒ—ãƒªæƒ…å ±
	 * @return array $formatList å‹•ç”»å½¢å¼�ãƒªã‚¹ãƒˆ
	 */
	function getContentFormatList($userAgent){

		// UAã�‹ã‚‰ã‚µãƒ¼ãƒ“ã‚¹IDã‚’åˆ¤åˆ¥
		$result = $this->distinctionServiceType($userAgent);
		$serviceId = $result['serviceId'];

		$formatList = array();
		// ã‚µã‚¤ãƒˆã‚³ãƒ¼ãƒ‰ã�®å�–å¾—
		$siteCode = $this->distinctionSiteCode($userAgent);
		$siteCode = $siteCode['siteCode'];

		//ã‚µãƒ¼ãƒ“ã‚¹ç¨®åˆ¥åˆ¤åˆ¥
		$serviceId = '';
		switch ($siteCode) {
			case SITECD_SMART_PHONE_ANDROID:
			case SITECD_TABLET_ANDROID:
				$formatList += array('ISMV' => CONTENTS_FORM_ISMV);
				$formatList += array('HLS-TBB' => CONTENTS_FORM_HLS_TBB);
				break;
			case SITECD_SMART_PHONE_ANDROID_NATIVE:
			case SITECD_TABLET_ANDROID_NATIVE:
				if (PC_ADULT_DOMAIN == env('HTTP_HOST')) {
					$formatList += array('HLS-AES' => CONTENTS_FORM_HLS_AES);
				} else {
					$formatList += array('HLS-IS' => CONTENTS_FORM_HLS_IS);
					$formatList += array('ISMV' => CONTENTS_FORM_ISMV);
				}
				break;
			case SITECD_SMART_PHONE_IPHONE_NATIVE:
			case SITECD_TABLET_IPAD_NATIVE:
				if (PC_ADULT_DOMAIN == env('HTTP_HOST')) {
					$formatList += array('HLS-AES' => CONTENTS_FORM_HLS_AES);
				} else {
					$formatList += array('HLS-IS' => CONTENTS_FORM_HLS_IS);
				}
				break;
			case SITECD_HIKARI_BOX:
				$formatList += array('ISMV' => CONTENTS_FORM_ISMV);
				$formatList += array('HLS-TBB' => CONTENTS_FORM_HLS_TBB);
				break;
			default:
				break;
		}
		return $formatList;
	}

	/**
	 * æœ¬ç•ªç’°å¢ƒå†�ç”Ÿæ¤œè¨¼ é€£æ�ºåˆ¤å®š
	 */
	function isPlayVerifyLinked(){
		return $this->Session->read(SESSION_NAME_USER_OTHER_FUNCTION_TYPE) == OTHER_SERVICE_TYPE_PLAY_VERIFICATION;
	}

	/**
	 * PIBO æœªå¯¾å¿œãƒ–ãƒ©ã‚¦ã‚¶ã�‹ã�©ã�†ã�‹.
	 * @return boolean IE8ä»¥ä¸‹ï¼štrue, ã��ã‚Œä»¥å¤–ï¼šfalse
	 */
	function __isNoPibo() {
		$userAgent = getenv("HTTP_USER_AGENT");
		if (preg_match("/MSIE [5|6|7|8]/", $userAgent)) {
			return true;
		}
		return false;
	}


	/**
	 * æ–‡å­—åˆ—ã‚’æš—å�·åŒ–ã�™ã‚‹
	 * @param $str å¹³æ–‡
	 * @param $key MD5æš—å�·åŒ–ã‚­ãƒ¼
	 * @return æš—å�·åŒ–æ–‡å­—åˆ—
	 */
	function encrypt($str, $key) {
		$key = md5($key);

		//æš—å�·åŒ–ãƒ¢ã‚¸ãƒ¥ãƒ¼ãƒ«ä½¿ç”¨é–‹å§‹
		$td  = mcrypt_module_open(MCRYPT_DES, '', MCRYPT_MODE_ECB, '');
		$key = substr($key, 0, mcrypt_enc_get_key_size($td));
		$iv  = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);

		//æš—å�·åŒ–ãƒ¢ã‚¸ãƒ¥ãƒ¼ãƒ«åˆ�æœŸåŒ–
		if (mcrypt_generic_init($td, $key, $iv) < 0) {
			return false;
		}

		//ãƒ‡ãƒ¼ã‚¿ã‚’æš—å�·åŒ–
		$enc_str = base64_encode(mcrypt_generic($td, $str));

		//æš—å�·åŒ–ãƒ¢ã‚¸ãƒ¥ãƒ¼ãƒ«ä½¿ç”¨çµ‚äº†
		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);

		return $enc_str;
	}

	/**
	 * æ–‡å­—åˆ—ã‚’è¤‡å�ˆåŒ–ã�™ã‚‹
	 * @param $str æš—å�·åŒ–æ–‡å­—åˆ—
	 * @param $key MD5æš—å�·åŒ–ã‚­ãƒ¼
	 * @return è¤‡å�ˆåŒ–æ–‡å­—åˆ—
	 */
	function decrypt($str, $key){
		$key = md5($key);

		//æš—å�·åŒ–ãƒ¢ã‚¸ãƒ¥ãƒ¼ãƒ«ä½¿ç”¨é–‹å§‹
		$td  = mcrypt_module_open(MCRYPT_DES, '', MCRYPT_MODE_ECB, '');
		$key = substr($key, 0, mcrypt_enc_get_key_size($td));
		$iv  = mcrypt_create_iv(mcrypt_enc_get_iv_size($td), MCRYPT_RAND);

		//æš—å�·åŒ–ãƒ¢ã‚¸ãƒ¥ãƒ¼ãƒ«åˆ�æœŸåŒ–
		if (mcrypt_generic_init($td, $key, $iv) < 0) {
			return false;
		}

		//ãƒ‡ãƒ¼ã‚¿ã‚’å¾©å�·åŒ–
		$dec_str = @mdecrypt_generic($td, base64_decode($str));
		$dec_str = rtrim($dec_str); // ä½™è¨ˆã�ªæ–‡å­—ã‚’æ¶ˆã�™

		//æš—å�·åŒ–ãƒ¢ã‚¸ãƒ¥ãƒ¼ãƒ«ä½¿ç”¨çµ‚äº†
		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);

		return $dec_str;
	}
}
