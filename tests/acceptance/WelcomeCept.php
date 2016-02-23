<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnUrl('http://localhost/~hab/test/web/app_dev.php/'); 
$I->see('Hello World!');
//$I->fillField('username','hamza');
//$I->click('submit');
//$I->makeScreenshot($scenario->current('name').'_screenshot.png');
//$I->seeCurrentUrlEquals('/~hab/test/web/app_dev.php/testform');
//$I->seeInCurrentUrl('/testform');
