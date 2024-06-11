<?php

use yii\helpers\Url;

class InformasiCest
{
    public function ensureThatInformasiWorks(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/informasi'));
        $I->see('Informasi', 'h1');
    }
}