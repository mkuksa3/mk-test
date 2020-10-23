<?php 

class AdminConfigurableProductCest
{
    public function _before(AcceptanceTester $I)
    { $I->amOnPage('/'); //open Admin panel
        $I->see("Welcome, please sign in"); // check Text on login form
        $I->click("//input[@id='username']"); //Click to Username field
        $I->fillField("//input[@id='username']",'admin'); //Add Username
        $I->click("//input[@id='login']"); //click to Password field
        $I->fillField("//input[@id='login']",'tn6W_{SQ'); //Add Password
        $I->click("//button[@class='action-login action-primary']"); //Click to "Login" button
        $I->waitForElementVisible("//h1[@class='page-title']"); // Check Dashboard title
        $I->clickWithLeftButton("//*[@id=\"menu-magento-catalog-catalog\"]/a"); //click to Catlog
        $I->wait(5);
        $I->clickWithLeftButton("//li[@id='menu-magento-catalog-catalog']//li[1]//div[1]//ul[1]//li[1]//a[1]"); //click to Products
        $I->waitForElementVisible("//h1[@class='page-title']", "15"); //Check page title
        $I->click("//button[@class='action-toggle primary add']"); //click to "Add Product" button
        $I->click("//span[@title='Configurable Product']"); //Choose "Configurable Product"
        $I->see("New Product","//h1[@class='page-title']"); //Check new product page
        $I->wait(5);
        $I->click("//div[@class='admin__field-label']//span[contains(text(),'SKU')]"); //Click to SKU field
        $I->fillField("//input[@name='product[sku]']","conftestprod"); //Add SKU
        $I->click("//div[@class='admin__field-label']//span[contains(text(),'Price')]"); //Click to Price field
        $I->fillField("//input[@name='product[price]']","299.09"); //Add Price
        $I->click("//span[contains(text(),'Product Name')]"); //Click to Product name field
        $I->fillField("//input[@name='product[name]']",'Conf Prod Auto'); //Add Product name
        $I->wait(5);
        $I->click("//div[contains(text(),'Select...')]"); //clicl to Categoty drop down
        $I->click("//label[contains(text(),\"Women's Bestsellers\")]"); //choose category
        $I->wait(5);
        $I->click("//button[@class='action-default']"); //Click "Done" button
        $I->wait(5);
        $I->click("//div[@class='admin__field-complex']//button[@class='action-basic']");
        $I->wait(5);
        $I->waitForElementVisible("//h2[contains(text(),'Step 1: Select Attributes')]","5");
        $I->click("//input[@id='idscheck93']");
        $I->wait(3);
        $I->click("//button[contains(@class,'action-default action-primary action-next-step')]");
        $I->wait(5);
        $I->click("//label[contains(text(),'Antique Brown')]");
        $I->wait(1);
        $I->click("//label[contains(text(),'Chestnut Brown')]");
        $I->wait(1);
        $I->click("//label[contains(text(),'Auburn')]");
        $I->wait(1);
        $I->click("//button[@class='action-default action-primary action-next-step']");
        $I->wait(3);
        $I->click("//button[@class='action-default action-primary action-next-step']");
        $I->wait(3);
        $I->click("//button[contains(@class,'action-default action-primary action-next-step')]");
        $I->wait(5);
        $I->click("//input[@name='configurable-matrix[0][price]']");
        $I->wait(1);
        $I->fillField("//input[@name='configurable-matrix[0][price]']","199");
        $I->wait(1);
        $I->click("//button[@id='save-button']"); //Click to "Save" button
        $I->waitForElementVisible("//div[@class='message message-success success']","20"); // Check success message
        $I->see("You saved the product."); //Check message text
        $I->wait(10);
        $I->click("//button[@id='back']"); //click to Back button
        $I->wait(10);
        $I->see("Products"); //Check text on page
        $I->click("//button[contains(text(),'Filters')]"); //Click to Filters
        $I->click("//input[@name='sku']"); //click to Name filed
        $I->fillField("//input[@name='sku']","conftestprod"); //Add product name
        $I->click("//span[contains(text(),'Apply Filters')]"); //Apply filter
        $I->wait(5);
        $I->click("(//button[@class='action-multicheck-toggle'])[2]");
        $I->click("//div[@class='action-multicheck-wrap _active']//li[1]//span[1]"); //Choose all product in grid (checkbox)
        $I->waitForText("4 records found (4 selected)","5","//div[@class='col-xs-3']");
        $I->click("//div[@class='col-xs-2']//button[@class='action-select']"); //Clicl to Actions field
        $I->wait(5);
        $I->click("//div[@class='col-xs-2']//span[@class='action-menu-item'][contains(text(),'Delete')]"); //Choose Delete
        $I->wait(5);
        $I->click("//button[@class='action-primary action-accept']"); //Choose "Ok"
        $I->wait(10);
        $I->waitForElementVisible("//div[contains(text(),'A total of 4 record(s) have been deleted.')]",5); //Check success message
        $I->wait(4);







    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
