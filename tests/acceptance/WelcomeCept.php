<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/'); 
$I->see('Hello World!');
$I->fillField('username','hamza');
$I->click('submit');
//$I->seeCurrentUrlEquals('/~hab/test/web/app_dev.php/testform');
$I->seeInCurrentUrl('/testform');
