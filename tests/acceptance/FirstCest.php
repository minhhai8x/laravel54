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
        $I->expect(sprintf('See the title with value = "%s"', $title));
        $I->expect(sprintf('See element in the main content with value = "%s"', $title));
        $I->expect('See a link navigate to Laravel documentation address');
    }

    // test demo page
    public function demoTitlePageTest(AcceptanceTester $I)
    {
        $title = 'list item';
        $mainContent = 'The title is: list item';
        $I->expect(sprintf('See the title with value = %s', $title));
        $I->expect(sprintf('See element in the main content with value = "%s"', $mainContent));
        $I->expect('See a link navigate to Laravel Github Repo address');
    }
}
