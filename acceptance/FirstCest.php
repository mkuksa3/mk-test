<?php 

class rrFirstCest
{
    public function _before(AcceptanceTester $I)
    {
		$I->amOnPage('/');
		$I->wait(3);
        $I->see('Join the john bull family');
        $I->wait(3);
        $I->clickWithLeftButton('/html/body/div[2]/aside[1]/div[2]/header/button');
        $I->wait(3);
        $I->click("My account");
        $I->click("Log in");
        $I->fillField("Email","maksim.kuksa+3@overdose.digital");
        $I->wait(3);
        $I->fillField("Password","Test123123");
        $I->wait(3);
        $I->click("//button[contains(@class,'action login primary')]");
        $I->wait(10);
        $I->see("Hi Maksim Test!");


    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
/*$I->wait(5);
        $I->click("//div[@class='minicart-wrapper']");// click to mini cart
        $I->waitForElementVisible("//div[@class='subtotal-wrapper']"); //verify minicart popup
        $I->clearField("//input[@id='cart-item-15274-qty']");
        /*$I->fillField("//input[@type='number']",'2');
        $I->wait(3);
 $I->clickWithLeftButton("//*[@id=\"update-cart-item-15274\"]");
$I->wait(5);*/