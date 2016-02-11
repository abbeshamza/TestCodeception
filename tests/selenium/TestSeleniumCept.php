<?php 
$I = new SeleniumTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/'); 
$I->see('Hello World!');
$I->fillField('username','hamza');
$I->fillField('username','test');
$I->click('submit');
//$I->seeCurrentUrlEquals('/~hab/test/web/app_dev.php/testform');
$I->seeInCurrentUrl('/testform');