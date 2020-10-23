<?php 

class AdminSimpleProductCest
{
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/'); //open Admin panel
        $I->see("Welcome, please sign in"); // check Text on login form
        $I->click("//input[@id='username']"); //Click to Username field
        $I->fillField("//input[@id='username']",'admin'); //Add Username
        $I->click("//input[@id='login']"); //click to Password field
        $I->fillField("//input[@id='login']",'test'); //Add Password
        $I->click("//button[@class='action-login action-primary']"); //Click to "Login" button
        $I->waitForElementVisible("//h1[@class='page-title']"); // Check Dashboard title
        $I->clickWithLeftButton("//*[@id=\"menu-magento-catalog-catalog\"]/a"); //click to Catlog
        $I->wait(5);
        $I->clickWithLeftButton("//li[@id='menu-magento-catalog-catalog']//li[1]//div[1]//ul[1]//li[1]//a[1]"); //click to Products
        $I->waitForElementVisible("//h1[@class='page-title']", "15"); //Check page title
        $I->click("//button[@class='action-toggle primary add']"); //click to "Add Product" button
        $I->click("//span[@class='item item-default']"); //Choose "Simple Product"
        $I->see("New Product","//h1[@class='page-title']"); //Check new product page
        $I->wait(5);
        $I->click("//div[@class='admin__field-label']//span[contains(text(),'SKU')]"); //Click to SKU field
        $I->fillField("//input[@name='product[sku]']","autotestsku"); //Add SKU
        $I->click("//div[@class='admin__field-label']//span[contains(text(),'Price')]"); //Click to Price field
        $I->fillField("//input[@name='product[price]']","99.99"); //Add Price
        $I->click("//span[contains(text(),'Product Name')]"); //Click to Product name field
        $I->fillField("//input[@name='product[name]']",'Test product (auto)'); //Add Product name
        $I->wait(5);
        $I->click("//div[contains(text(),'Select...')]"); //clicl to Categoty drop down
        $I->click("//label[contains(text(),\"Women's Bestsellers\")]"); //choose category
        $I->wait(5);
        $I->click("//button[@class='action-default']"); //Click "Done" button
        $I->wait(5);
        $I->click("//button[@id='save-button']"); //Click to "Save" button
        $I->waitForElementVisible("//div[@class='message message-success success']","20"); // Check success message
        $I->see("You saved the product."); //Check message text
        $I->wait(10);
        $I->click("//button[@id='back']"); //click to Back button
        $I->wait(10);
        $I->see("Products"); //Check text on page
        $I->click("//button[contains(text(),'Filters')]"); //Click to Filters
        $I->click("//input[@name='name']"); //click to Name filed
        $I->fillField("//input[@name='name']","auto"); //Add product name
        $I->click("//span[contains(text(),'Apply Filters')]"); //Apply filter
        $I->wait(5);
        $I->click("//label[@class='data-grid-checkbox-cell-inner']"); //Choose product in grid (checkbox)
        $I->click("//div[@class='col-xs-2']//button[@class='action-select']"); //Clicl to Actions field
        $I->wait(5);
        $I->click("//div[@class='col-xs-2']//span[@class='action-menu-item'][contains(text(),'Delete')]"); //Choose Delete
        $I->wait(5);
        $I->click("//button[@class='action-primary action-accept']"); //Choose "Ok"
        $I->wait(10);
        $I->waitForElementVisible("//div[contains(text(),'A total of 1 record(s) have been deleted.')]",15); //Check success message
        $I->wait(10);









    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
