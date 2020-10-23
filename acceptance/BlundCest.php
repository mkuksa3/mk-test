<?php 

class BlundCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->wait(3);
        $I->see('Join the john bull family');
        $I->wait(3);
        $I->click("//button[contains(@class,'action-close')]");
        $I->wait(2);
        $I->click("My account");
        $I->click("Log in");
        $I->click('//*[@id="login-form"]/fieldset/div[4]/div[2]/a');
        $I->wait(5);
        $I->fillField("First Name","Maks");
        $I->fillField("Last Name","Test");
        $I->fillField("Email","maksim.kuksa+2207@overdose.digital");
        $I->fillField("Password","Test123123");
        $I->fillField("Confirm Password","Test123133");
        $I->wait(3);
        $I->click('//*[@id="form-validate"]/div/div[1]/button');
        $I->wait(2);
        $I->see("Please enter the same value again.");
        $I->fillField("Confirm Password","Test123123");
        $I->click('//*[@id="form-validate"]/div/div[1]/button');
        $I->wait(10);
        $I->see("Thank you for registering with Blundstone USA.");
        $I->wait(5);
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
