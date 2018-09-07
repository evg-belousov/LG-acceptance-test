<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');

$I->amOnPage('/');
$I->see('мальчики'); // Фраза или ее часть с главной страницы