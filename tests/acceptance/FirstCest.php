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
        $title = 'Laravel';
        $I->amOnPage('/');
        // $I->expect(sprintf('See the title with value = "%s"', $title));
            // $I->seeInTitle($title);
        // $I->expect(sprintf('See element in the main content with value = "%s"', $title));
            // $I->seeElement(sprintf('//*/div[@class="content"]/div[@class="title m-b-md" and text()="%s"]', $title));
        // $I->expect('See a link navigate to Laravel documentation address');
            // $I->seeLink('Documentation','https://laravel.com/docs');
    }

    // test demo page
    public function demoTitlePageTest(AcceptanceTester $I)
    {
        $title = 'list item';
        $mainContent = 'The title is: list item';
        $I->amOnPage('/demo');
        // $I->expect(sprintf('See the title with value = %s', $title));
            // $I->seeInTitle($title);
        // $I->expect(sprintf('See element in the main content with value = "%s"', $mainContent));
            // $I->seeElement(sprintf('//*/div[@class="content"]/div[@class="title m-b-md" and text()="%s"]', $mainContent));
        // $I->expect('See a link navigate to Laravel Github Repo address');
            // $I->seeLink('GitHub','https://github.com/laravel/laravel');
    }
}
