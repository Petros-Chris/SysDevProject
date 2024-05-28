<?php

declare(strict_types=1);

namespace Tests\Support;

/**
 * Inherited Methods
 * @method void wantTo($text)
 * @method void wantToTest($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method void pause($vars = [])
 *
 * @SuppressWarnings(PHPMD)
 */
class AcceptanceTester extends \Codeception\Actor
{
    use _generated\AcceptanceTesterActions;

    //TODO: Reivew system thing
    /**
     * @Given I am on the review page for product with id :arg1
     */
    public function iAmOnTheReviewPageForProductWithId($arg1)
    {
        $this->amOnPage("/Product/index?id=$arg1");
    }

    /**
     * @Then I should see the page contains :arg1
     */
    public function iShouldSeeThePageContains($arg1)
    {
        $this->seeElement(".$arg1");
    }

    /**
     * @Given I am on :arg1
     */
    public function iAmOn($arg1)
    {
        $this->amOnPage($arg1);
    }

    /**
     * @When I fill the :arg1 with :arg2
     */
    public function iFillTheWith($arg1, $arg2)
    {
        $this->fillField("#form-description", $arg2);
    }

    /**
     * @When I press the submitReview:num1 button
     */
    public function iPressTheSubmitReviewButton($num1)
    {
        $this->click("#submitReview$num1");
    }

    /**
     * @Then I should be redirected to the review page for product with id :arg1
     */
    public function iShouldBeRedirectedToTheReviewPageForProductWithId($arg1)
    {
        $this->seeCurrentUrlEquals("/Product/index?id=$arg1");
    }



    //TODO:cartSystem.feature IS HERE
    /**
     * @Given the customer is browsing :arg1
     */
    public function theCustomerIsBrowsing($url)
    {
        $this->amOnPage('http://localhost/Product/listing');
    }

    /**
     * @When they click on the :arg1 to view the full product listing
     */
    public function theyClickOnTheToViewTheFullProductListing($url)
    {
        $this->click("#productLink");
    }

    /**
     * @When they click on the #add_to_cart button to add a product to a cart
     */
    public function theyClickOnTheadd_to_cartButtonToAddAProductToACart()
    {
        $this->click("#cartBtn");
    }

    /**
     * @Then the :arg1 alongside the :arg2 should be added to their shopping :arg3
     */
    public function theAlongsideTheShouldBeAddedToTheirShopping($price, $subtotal, $cart)
    {
        //$cart->add($price);
        //$cart->add($subtotal); [Error] Call to a member function add() on string
    }

    /**
     * @Given the customer is at the :arg1 page
     */
    public function theCustomerIsAtThePage($url)
    {
        $this->amOnPage($url);
    }

    /**
     * @When they hover or click the cart_icon
     */
    public function theyHoverOrClickTheCart_icon()
    {
        $this->click("#cartBtn");
    }

    /**
     * @Then they should see a list of products and their :arg1 as well as the :arg2 of the cart
     */
    public function theyShouldSeeAListOfProductsAndTheirAsWellAsTheOfTheCart($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a list of products and their :arg1 as well as the :arg2 of the cart` is not defined");
    }

    /**
     * @Given the user has :arg1 in their :arg2
     */
    public function theUserHasInTheir($items, $cart)
    {
        $this->amOnPage('http://localhost/Product/index?id=1');
    }

    /**
     * @When they click on a check_out button to proceed to checkout
     */
    public function theyClickOnACheck_outButtonToProceedToCheckout()
    {
        $this->click("#checkoutBtn");
    }

    /**
     * @Then they should receive a :arg1 prompting them to log in
     */
    public function theyShouldReceiveAPromptingThemToLogIn($message)
    {
        $this->amGoingTo('http://localhost/User/login');
    }

    /**
     * @Given the customer has :arg1 in their :arg2
     */
    public function theCustomerHasInTheir($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customer has :arg1 in their :arg2` is not defined");
    }

    /**
     * @When they click on the remove_from_cart button
     */
    public function theyClickOnTheRemove_from_cartButton()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they click on the remove_from_cart button` is not defined");
    }

    /**
     * @Then the :arg1 alongside the price should be removed from their :arg2
     */
    public function theAlongsideThePriceShouldBeRemovedFromTheir($item, $cart)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the :arg1 alongside the price should be removed from their :arg2` is not defined");
    }

    //TODO: THIS IS GAP 
    /**
     * @Given the customer is in :arg1
     */
    public function theCustomerIsIn($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customer is in :arg1` is not defined");
    }

    /**
     * @When they have submitted the completed :arg1
     */
    public function theyHaveSubmittedTheCompleted($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they have submitted the completed :arg1` is not defined");
    }

    /**
     * @Then the :arg1 should be added to the :arg2
     */
    public function theShouldBeAddedToThe($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the :arg1 should be added to the :arg2` is not defined");
    }

    /**
     * @Given the customer is on the :arg1 page
     */
    public function theCustomerIsOnThePage($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customer is on the :arg1 page` is not defined");
    }

    /**
     * @When they attempt to submit the :arg1 without filling out all the required fields with :arg2
     */
    public function theyAttemptToSubmitTheWithoutFillingOutAllTheRequiredFieldsWith($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to submit the :arg1 without filling out all the required fields with :arg2` is not defined");
    }

    /**
     * @Then they should see an error :arg1 prompting them to fill out the form
     */
    public function theyShouldSeeAnErrorPromptingThemToFillOutTheForm($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see an error :arg1 prompting them to fill out the form` is not defined");
    }

    /**
     * @When they attempt to submit the :arg1 with invalid :arg2
     */
    public function theyAttemptToSubmitTheWithInvalid($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to submit the :arg1 with invalid :arg2` is not defined");
    }

    /**
     * @Then they should see an :arg1 telling them which fields are invalid
     */
    public function theyShouldSeeAnTellingThemWhichFieldsAreInvalid($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see an :arg1 telling them which fields are invalid` is not defined");
    }

    /**
     * @Given the user or customer is on the :arg1
     */
    public function theUserOrCustomerIsOnThe($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the user or customer is on the :arg1` is not defined");
    }

    /**
     * @When they navigate to the :arg1 page
     */
    public function theyNavigateToThePage($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they navigate to the :arg1 page` is not defined");
    }

    /**
     * @Then they see contact :arg1
     */
    public function theySeeContact($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they see contact :arg1` is not defined");
    }

    /**
     * @Given the customer is on the :arg1
     */
    public function theCustomerIsOnThe($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customer is on the :arg1` is not defined");
    }

    /**
     * @Then they should see a :arg1 to submit their :arg2
     */
    public function theyShouldSeeAToSubmitTheir($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a :arg1 to submit their :arg2` is not defined");
    }

    /**
     * @When they submit the :arg1 :arg2
     */
    public function theySubmitThe($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit the :arg1 :arg2` is not defined");
    }

    /**
     * @Then they should see a confirmation :arg1 indicating that their inquiry has been received
     */
    public function theyShouldSeeAConfirmationIndicatingThatTheirInquiryHasBeenReceived($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a confirmation :arg1 indicating that their inquiry has been received` is not defined");
    }

    /**
     * @When they attempt to submit the inquiry :arg1 without filling out all the required fields with :arg2
     */
    public function theyAttemptToSubmitTheInquiryWithoutFillingOutAllTheRequiredFieldsWith($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to submit the inquiry :arg1 without filling out all the required fields with :arg2` is not defined");
    }

    /**
     * @Then they should see an error :arg1 prompting them to fill out all required fields
     */
    public function theyShouldSeeAnErrorPromptingThemToFillOutAllRequiredFields($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see an error :arg1 prompting them to fill out all required fields` is not defined");
    }

    /**
     * @Given user is on the :arg1
     */
    public function userIsOnThe($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `user is on the :arg1` is not defined");
    }

    /**
     * @When they submit the :arg1 with :arg2
     */
    public function theySubmitTheWith($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit the :arg1 with :arg2` is not defined");
    }

    /**
     * @When activate their :arg1 through their :arg2
     */
    public function activateTheirThroughTheir($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `activate their :arg1 through their :arg2` is not defined");
    }

    /**
     * @Then they should be redirected to the :arg1
     */
    public function theyShouldBeRedirectedToThe($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should be redirected to the :arg1` is not defined");
    }

    /**
     * @Given the user is on the :arg1
     */
    public function theUserIsOnThe($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the user is on the :arg1` is not defined");
    }

    /**
     * @When they submit the :arg1 without filling out all the required fields with :arg2
     */
    public function theySubmitTheWithoutFillingOutAllTheRequiredFieldsWith($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit the :arg1 without filling out all the required fields with :arg2` is not defined");
    }

    /**
     * @Then they should see an error :arg1 notifying them of invalid information
     */
    public function theyShouldSeeAnErrorNotifyingThemOfInvalidInformation($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see an error :arg1 notifying them of invalid information` is not defined");
    }

    /**
     * @Given the admin is on the :arg1
     */
    public function theAdminIsOnThe($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the admin is on the :arg1` is not defined");
    }

    /**
     * @When they create a new :arg1 for a specific :arg2
     */
    public function theyCreateANewForASpecific($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they create a new :arg1 for a specific :arg2` is not defined");
    }

    /**
     * @Then they should see a :arg1 indicating that the order has been created
     */
    public function theyShouldSeeAIndicatingThatTheOrderHasBeenCreated($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a :arg1 indicating that the order has been created` is not defined");
    }

    /**
     * @When they make changes to a specific :arg1 :arg2
     */
    public function theyMakeChangesToASpecific($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they make changes to a specific :arg1 :arg2` is not defined");
    }

    /**
     * @Then they should see a :arg1 indicating that the order has been updated
     */
    public function theyShouldSeeAIndicatingThatTheOrderHasBeenUpdated($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a :arg1 indicating that the order has been updated` is not defined");
    }

    /**
     * @When they confirm a specific :arg1 :arg2 to disable
     */
    public function theyConfirmASpecificToDisable($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they confirm a specific :arg1 :arg2 to disable` is not defined");
    }

    /**
     * @Then they should see a :arg1 indicating that the order has been disabled
     */
    public function theyShouldSeeAIndicatingThatTheOrderHasBeenDisabled($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a :arg1 indicating that the order has been disabled` is not defined");
    }

    /**
     * @Given the admin is on the :arg1 page
     */
    public function theAdminIsOnThePage($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the admin is on the :arg1 page` is not defined");
    }

    /**
     * @When they submit a :arg1 with product images and :arg2 such as product name, description, price, and category
     */
    public function theySubmitAWithProductImagesAndSuchAsProductNameDescriptionPriceAndCategory($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit a :arg1 with product images and :arg2 such as product name, description, price, and category` is not defined");
    }

    /**
     * @Then they should see a success :arg1 indicating that the product listing has been created
     */
    public function theyShouldSeeASuccessIndicatingThatTheProductListingHasBeenCreated($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a success :arg1 indicating that the product listing has been created` is not defined");
    }

    /**
     * @When they attempt to submit the :arg1 without filling out all required :arg2
     */
    public function theyAttemptToSubmitTheWithoutFillingOutAllRequired($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to submit the :arg1 without filling out all required :arg2` is not defined");
    }

    /**
     * @When they attempt to submit the :arg1 with :arg2
     */
    public function theyAttemptToSubmitTheWith($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to submit the :arg1 with :arg2` is not defined");
    }

    /**
     * @Then they should see an error :arg1 indicating the invalid data
     */
    public function theyShouldSeeAnErrorIndicatingTheInvalidData($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see an error :arg1 indicating the invalid data` is not defined");
    }

    /**
     * @When they navigate to the :arg1
     */
    public function theyNavigateToThe($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they navigate to the :arg1` is not defined");
    }

    /**
     * @When they toggle the :arg1 option
     */
    public function theyToggleTheOption($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they toggle the :arg1 option` is not defined");
    }

    /**
     * @Then the website interface should switch to an darker interface
     */
    public function theWebsiteInterfaceShouldSwitchToAnDarkerInterface()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the website interface should switch to an darker interface` is not defined");
    }

    /**
     * @Given the user is on the :arg1 in :arg2
     */
    public function theUserIsOnTheIn($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the user is on the :arg1 in :arg2` is not defined");
    }

    /**
     * @When they toggle the :arg1 option to disable
     */
    public function theyToggleTheOptionToDisable($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they toggle the :arg1 option to disable` is not defined");
    }

    /**
     * @When they select to deactivate a :arg1
     */
    public function theySelectToDeactivateA($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they select to deactivate a :arg1` is not defined");
    }

    /**
     * @Then the :arg1 should be deactivated
     */
    public function theShouldBeDeactivated($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the :arg1 should be deactivated` is not defined");
    }

    /**
     * @When they select and confirm the :arg1 they want to disable
     */
    public function theySelectAndConfirmTheTheyWantToDisable($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they select and confirm the :arg1 they want to disable` is not defined");
    }

    /**
     * @Then they should see a success :arg1 indicating that the product listing has been disabled
     */
    public function theyShouldSeeASuccessIndicatingThatTheProductListingHasBeenDisabled($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a success :arg1 indicating that the product listing has been disabled` is not defined");
    }

    /**
     * @When they select and confirm the :arg1 they want to enable
     */
    public function theySelectAndConfirmTheTheyWantToEnable($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they select and confirm the :arg1 they want to enable` is not defined");
    }

    /**
     * @Then they should see a success :arg1 indicating that the product listing has been enabled
     */
    public function theyShouldSeeASuccessIndicatingThatTheProductListingHasBeenEnabled($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a success :arg1 indicating that the product listing has been enabled` is not defined");
    }

    /**
     * @When they submit :arg1 to the :arg2 they want to edit
     */
    public function theySubmitToTheTheyWantToEdit($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit :arg1 to the :arg2 they want to edit` is not defined");
    }

    /**
     * @Then they should see a success :arg1 indicating that the product listing has been updated
     */
    public function theyShouldSeeASuccessIndicatingThatTheProductListingHasBeenUpdated($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a success :arg1 indicating that the product listing has been updated` is not defined");
    }

    /**
     * @When they update the :arg1 for a specific :arg2
     */
    public function theyUpdateTheForASpecific($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they update the :arg1 for a specific :arg2` is not defined");
    }

    /**
     * @Then they should see a :arg1 indicating that the stock number has been updated
     */
    public function theyShouldSeeAIndicatingThatTheStockNumberHasBeenUpdated($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a :arg1 indicating that the stock number has been updated` is not defined");
    }

    /**
     * @When they update the :arg1 for a specific :arg2 with incomplete data
     */
    public function theyUpdateTheForASpecificWithIncompleteData($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they update the :arg1 for a specific :arg2 with incomplete data` is not defined");
    }

    /**
     * @When they update the :arg1 for a specific :arg2 with invalid data
     */
    public function theyUpdateTheForASpecificWithInvalidData($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they update the :arg1 for a specific :arg2 with invalid data` is not defined");
    }

    /**
     * @When they apply :arg1 based on categories, price range, or other criteria
     */
    public function theyApplyBasedOnCategoriesPriceRangeOrOtherCriteria($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they apply :arg1 based on categories, price range, or other criteria` is not defined");
    }

    /**
     * @Then they should see a refined list of :arg1 based on the applied filters
     */
    public function theyShouldSeeARefinedListOfBasedOnTheAppliedFilters($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a refined list of :arg1 based on the applied filters` is not defined");
    }

    /**
     * @Given the customer has applied filters on the :arg1 page
     */
    public function theCustomerHasAppliedFiltersOnThePage($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customer has applied filters on the :arg1 page` is not defined");
    }

    /**
     * @Then they should see a list of their :arg1 with all the details
     */
    public function theyShouldSeeAListOfTheirWithAllTheDetails($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a list of their :arg1 with all the details` is not defined");
    }

    /**
     * @When they select a specific :arg1
     */
    public function theySelectASpecific($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they select a specific :arg1` is not defined");
    }

    /**
     * @When they look at the product_description section
     */
    public function theyLookAtTheProduct_descriptionSection()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they look at the product_description section` is not defined");
    }

    /**
     * @Then they should see detailed information about the :arg1
     */
    public function theyShouldSeeDetailedInformationAboutThe($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see detailed information about the :arg1` is not defined");
    }

    /**
     * @Given the user is on the :arg1 page
     */
    public function theUserIsOnThePage($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the user is on the :arg1 page` is not defined");
    }

    /**
     * @Then they should be redirected back to the :arg1 page
     */
    public function theyShouldBeRedirectedBackToThePage($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should be redirected back to the :arg1 page` is not defined");
    }

    /**
     * @Then they should see a list of :arg1 with details such as name, price, image and description
     */
    public function theyShouldSeeAListOfWithDetailsSuchAsNamePriceImageAndDescription($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a list of :arg1 with details such as name, price, image and description` is not defined");
    }

    /**
     * @Then they should be redirected to the product :arg1 where they can view more information about the product
     */
    public function theyShouldBeRedirectedToTheProductWhereTheyCanViewMoreInformationAboutTheProduct($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should be redirected to the product :arg1 where they can view more information about the product` is not defined");
    }

    /**
     * @When they submit their :arg1 details
     */
    public function theySubmitTheirDetails($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit their :arg1 details` is not defined");
    }

    /**
     * @Then they should see available shipping options for their :arg1
     */
    public function theyShouldSeeAvailableShippingOptionsForTheir($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see available shipping options for their :arg1` is not defined");
    }

    /**
     * @When they attempt to proceed to view shipping options without providing an :arg1
     */
    public function theyAttemptToProceedToViewShippingOptionsWithoutProvidingAn($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to proceed to view shipping options without providing an :arg1` is not defined");
    }

    /**
     * @Then they should see an error :arg1 prompting them to enter their address
     */
    public function theyShouldSeeAnErrorPromptingThemToEnterTheirAddress($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see an error :arg1 prompting them to enter their address` is not defined");
    }

    /**
     * @Given the customer has received the product and navigated to the :arg1 page
     */
    public function theCustomerHasReceivedTheProductAndNavigatedToThePage($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customer has received the product and navigated to the :arg1 page` is not defined");
    }

    /**
     * @When they submit the form with their :arg1 and :arg2
     */
    public function theySubmitTheFormWithTheirAnd($arg1, $arg2)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit the form with their :arg1 and :arg2` is not defined");
    }

    /**
     * @Then they should see a confirmation :arg1 indicating that their review has been submitted
     */
    public function theyShouldSeeAConfirmationIndicatingThatTheirReviewHasBeenSubmitted($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a confirmation :arg1 indicating that their review has been submitted` is not defined");
    }

    /**
     * @When they attempt to submit a :arg1 without purchasing the product
     */
    public function theyAttemptToSubmitAWithoutPurchasingTheProduct($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to submit a :arg1 without purchasing the product` is not defined");
    }

    /**
     * @Then they should see an error :arg1 indicating that they need to purchase the product before leaving a review
     */
    public function theyShouldSeeAnErrorIndicatingThatTheyNeedToPurchaseTheProductBeforeLeavingAReview($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see an error :arg1 indicating that they need to purchase the product before leaving a review` is not defined");
    }

    /**
     * @When they attempt to submit a :arg1 without filling all required fields
     */
    public function theyAttemptToSubmitAWithoutFillingAllRequiredFields($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to submit a :arg1 without filling all required fields` is not defined");
    }

    /**
     * @Given the customer is in the :arg1 page
     */
    public function theCustomerIsInThePage($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customer is in the :arg1 page` is not defined");
    }

    /**
     * @When they change and confirm their :arg1
     */
    public function theyChangeAndConfirmTheir($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they change and confirm their :arg1` is not defined");
    }

    /**
     * @Then they should have a confirmation of their :arg1 as a pop-up
     */
    public function theyShouldHaveAConfirmationOfTheirAsAPopup($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should have a confirmation of their :arg1 as a pop-up` is not defined");
    }

    /**
     * @When they attempt to update their :arg1 with invalid data
     */
    public function theyAttemptToUpdateTheirWithInvalidData($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to update their :arg1 with invalid data` is not defined");
    }

    /**
     * @Given the admin is on the :arg1 section
     */
    public function theAdminIsOnTheSection($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the admin is on the :arg1 section` is not defined");
    }

    /**
     * @When they select a specific :arg1customer"
     */
    public function theySelectASpecificCustomer($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they select a specific :arg1customer' is not defined");
    }

    /**
     * @Then they should see a :arg1 of that customer's past orders with all the details
     */
    public function theyShouldSeeAOfThatCustomersPastOrdersWithAllTheDetails($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a :arg1 of that customer's past orders with all the details` is not defined");
    }

    /**
     * @Then they should see a :arg1 of that customers' current orders
     */
    public function theyShouldSeeAOfThatCustomersCurrentOrders($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a :arg1 of that customers' current orders` is not defined");
    }

    /**
     * @Then they should see a list of :arg1 for the product
     */
    public function theyShouldSeeAListOfForTheProduct($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a list of :arg1 for the product` is not defined");
    }

    /**
     * @When there are no :arg1 available for the product
     */
    public function thereAreNoAvailableForTheProduct($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `there are no :arg1 available for the product` is not defined");
    }

    /**
     * @Then they should see a :arg1 indicating that there are no reviews available for the product
     */
    public function theyShouldSeeAIndicatingThatThereAreNoReviewsAvailableForTheProduct($arg1)
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a :arg1 indicating that there are no reviews available for the product` is not defined");
    }
    /**
     * @Then the user's preference for dark mode should be saved for future visits
     */
    public function theUsersPreferenceForDarkModeShouldBeSavedForFutureVisits()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the user's preference for dark mode should be saved for future visits` is not defined");
    }

    /**
     * @Then the website interface should switch back to light mode
     */
    public function theWebsiteInterfaceShouldSwitchBackToLightMode()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the website interface should switch back to light mode` is not defined");
    }

    /**
     * @When they choose to reset the filters
     */
    public function theyChooseToResetTheFilters()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they choose to reset the filters` is not defined");
    }

    /**
     * @Then they should see the original, unfiltered product listing
     */
    public function theyShouldSeeTheOriginalUnfilteredProductListing()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see the original, unfiltered product listing` is not defined");
    }

    /**
     * @Given the customer is logged into their account
     */
    public function theCustomerIsLoggedIntoTheirAccount()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customer is logged into their account` is not defined");
    }

    /**
     * @Then they can process the order and mark it as complete
     */
    public function theyCanProcessTheOrderAndMarkItAsComplete()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they can process the order and mark it as complete` is not defined");
    }

    /**
     * @When they click a back button
     */
    public function theyClickABackButton()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they click a back button` is not defined");
    }

    /**
     * @When they browse through the available products
     */
    public function theyBrowseThroughTheAvailableProducts()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they browse through the available products` is not defined");
    }

    /**
     * @When they click on a product
     */
    public function theyClickOnAProduct()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they click on a product` is not defined");
    }

    /**
     * @When they scroll down to the review section
     */
    public function theyScrollDownToTheReviewSection()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they scroll down to the review section` is not defined");
    }
}