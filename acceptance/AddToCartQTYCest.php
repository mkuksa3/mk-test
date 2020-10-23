<?php 

class AddToCartQTYCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $I->waitForElementVisible("//div[@class='modal-inner-wrap']"); //Pop-up opens
        $I->see("Join the john bull family"); //check text in popup
        $I->click("//button[contains(@class,'action-close')]"); // close popup
        $I->wait(3);
        $I->moveMouseOver("//*[@id=\"ui-id-3\"]/li[2]/a"); //hover to Man category
        $I->wait(3);
        $I->clickWithLeftButton("//*[@id=\"ui-id-30\"]"); //Click to "originals" category
        $I->clickWithLeftButton("//*[@id=\"maincontent\"]/div[4]/div/div[3]/div/div/ol/li[2]/div[2]/div[1]/div[1]/a/img"); //open product page
        $I->wait(5);
        $I->clickWithLeftButton("//*[@id=\"product-options-wrapper\"]/div/div/div[3]/div[1]/div[1]"); //click to size
        $I->clickWithLeftButton("//*[@id=\"product-addtocart-button\"]"); //add to cart
        $I->waitForElementVisible("//div[@class='message-success success message']"); // verify Success notification
        $I->click("//a[contains(@class,'action primary')]");
        $I->wait(3);
        $I->clickWithLeftButton("//*[@id=\"shopping-cart-table\"]/tbody[1]/tr/td[4]/div[2]/div[2]/div/div/span/span[1]/span/span[2]");
        $I->wait(3);
        $I->click("//ul[contains(@class,'select2-results__options')]");
        //$I->clickWithLeftButton("//*[@id=\"select2-cart-15274-qty-result-h7oy-2\"]");//
        $I->wait(13);
        $I->clickWithLeftButton("//*[@id=\"maincontent\"]/div[3]/div/div[2]/div[1]/div[2]/button");
        $I->wait(13);
        $I->clickWithLeftButton("//*[@id=\"customer-email\"]");
        $I->fillField("//input[@id='customer-email']",'maksim.kuksa+3007@overdose.digital');
        $I->wait(10);
        $I->clickWithLeftButton("//*[@id=\"customer-password\"]");
        $I->fillField("//input[@id='customer-password']",'Test123123');
        $I->wait(3);
        $I->clickWithLeftButton("//*[@id=\"customer-email-fieldset\"]/fieldset/div[3]/div[1]/button");
        $I->wait(10);
        $I->clickWithLeftButton("//*[@id=\"shipping-method-buttons-container\"]/div/button");
        $I->wait(10);
        $I->clickWithLeftButton("//*[@id=\"checkout-payment-method-load\"]/div/div/div[2]/div[2]/div[1]/label");
        $I->wait(5);
        $I->clickWithLeftButton("//*[@id=\"chcybersource_cc_number\"]");
        $I->fillField("//input[@id='chcybersource_cc_number']", '4111111111111111');
        $I->selectOption("payment[cc_exp_month]","2");
        $I->selectOption("payment[cc_exp_year]","2021");
        $I->clickWithLeftButton("//*[@id=\"chcybersource_cc_cid\"]");
        $I->fillField("//input[@id='chcybersource_cc_cid']",'123');
        $I->clickWithLeftButton("//*[@id=\"discount-code\"]");
        $I->fillField("//input[@id='discount-code']",'test15');
        $I->clickWithLeftButton("//*[@id=\"discount-form\"]/div[2]/div/button");
        $I->wait(20);
        $I->clickWithLeftButton("//*[@id=\"checkoutSteps\"]/div/button");
        $I->wait(40);
        $I->see("Order");
        $I->wait(20);



















    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
