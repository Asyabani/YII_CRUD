<?php

use yii\helpers\Url;

class TranskasiCest
{
    public function ensureThatTranskasiWorks(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/transaksi'));
        $I->see('Transkasi', 'h1');
    }
}