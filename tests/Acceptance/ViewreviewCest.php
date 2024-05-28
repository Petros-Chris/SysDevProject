<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ViewreviewCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function createReview(AcceptanceTester $I)
    {
        $I->amOnPage("/Review/create");
        $I->fillField("form-description", "ASDWDASD");
        $I->click("#submitReview1");
        $I->seeCurrentUrlEquals("/Product/index?id=1");
    }
}
