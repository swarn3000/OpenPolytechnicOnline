<?php
use Page\StaffRequestPage;

class StaffRequestStep extends \Codeception\Actor
{
	use _generated\AcceptanceTesterActions;
	/**
	 *
	 * @var AcceptanceTester
	 */
	public  $I;
	public static $refNumber;
	function __construct(\AcceptanceTester $I) {
		$this->I = $I;
	}
	
	/**
	 * @Given I am logged in as an OP staff member
	 */
	public function iAmLoggedInAsAnOPStaffMember()
	{
		StaffRequestPage::database($this->I);
		//StaffRequestPage::RequestForm($this->I);
		//throw new \Codeception\Exception\Incomplete("Step `I am logged in as an OP staff member` is not defined");
	}
	
	/**
	 * @When I land on the staff request form
	 */
	public function iLandOnTheStaffRequestForm()
	{
		//throw new \Codeception\Exception\Incomplete("Step `I land on the staff request form` is not defined");
	}
	
	/**
	 * @When I request for a staff request form
	 */
	public function iRequestForAStaffRequestForm()
	{
		//throw new \Codeception\Exception\Incomplete("Step `I request for a staff request form` is not defined");
	}
	
	/**
	 * @Then I log out of the page
	 */
	public function iLogOutOfThePage()
	{
		//throw new \Codeception\Exception\Incomplete("Step `I log out of the page` is not defined");
	}
	

}