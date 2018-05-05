<?php
namespace Page;

class StaffRequestPage{
	
	// include url of current page
	public static $URL = '';
	public static $SelectFactSheet = '//*[@id="mat-select-0"]/div/div[2]/div';
	public static $Firstname = '//*[@id="mat-input-0"]';
	public static $Lastname = '//*[@id="mat-input-1"]';
	//public static $submitButton = "#idSIButton9";
	//public static $nextButton = "//input[@value='Next']";
	//public static $permissionLogin = "#idSIButton9";
	
	/**
	 * Declare UI map for this page here. CSS or XPath allowed.
	 * public static $usernameField = '#username';
	 * public static $formSubmitButton = "#mainForm input[type=submit]";new
	 *
	 */
	
	/**
	 * Basic route example for your current URL
	 * You can append any additional parameter to URL
	 * and use it in tests like: Page\Edit::route('/123-post');
	 */
	public static function route($param)
	{
		return static::$URL.$param;
	}
	
	public function RequestForm(\AcceptanceTester $I){
		$I->amOnPage('/');
		/* $I->click(self::$SelectFactSheet);
		$I->waitForElement('//*[@id="mat-option-245"]/mat-pseudo-checkbox');
		$I->click('//*[@id="mat-option-245"]/mat-pseudo-checkbox');
		//$I->switchToWindow();
		//$I->waitForElement('//*[@id="mat-input-3"]');
		$I->click('/html/body');
		$I->click(self::$Firstname);
		$I->fillField(self::$Firstname,"Swarn");
		$I->fillField(self::$Lastname,'Singh'); */
		
}

  public function database(\AcceptanceTester $I){
    	$I->seeInDatabase('DrugNames', array('DrugID' => '2'));
    } 
}