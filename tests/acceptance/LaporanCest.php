<?php

use yii\helpers\Url;

class LaporanCest
{
    public function ensureThatLaporanWorks(AcceptanceTester $I)
    {
        $I->amOnPage(Url::toRoute('/site/laporan'));
        $I->see('Laporan', 'h1');
    }
}