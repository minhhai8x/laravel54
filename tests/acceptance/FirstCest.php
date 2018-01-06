<?php


class FirstCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // test home page
    public function homePageTest(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        // $I->seeInTitle('Laravel');
        // $I->seeElement(sprintf('//*/div[@class="content"]/div[@class="title m-b-md" and text()="%s"]', 'Laravel'));
    }

    // test demo page
    public function demoTitlePageTest(AcceptanceTester $I)
    {
        $I->amOnPage('/demo');
        // $I->seeInTitle('list item');
        // $I->seeElement(sprintf('//*/div[@class="content"]/div[@class="title m-b-md" and text()="%s"]', 'The title is: list item'));
    }
}
