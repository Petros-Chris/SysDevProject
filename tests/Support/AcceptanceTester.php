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

    /**
     * @Given the customer is at the product listing page
     */
    public function theCustomerIsAtTheProductListingPage($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they hover or click the cart icon
    */
    public function theyHoverOrClickTheCartIcon()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they hover or click the cart icon` is not defined");
    }

   /**
    * @Then they should see a list of products and their price as well as the subtotal of the cart
    */
    public function theyShouldSeeAListOfProductsAndTheirPriceAsWellAsTheSubtotalOfTheCart()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a list of products and their price as well as the subtotal of the cart` is not defined");
    }

   /**
    * @Given the customer is browsing product listings
    */
    public function theCustomerIsBrowsingProductListings($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they click on a button to add a product to a cart
    */
    public function theyClickOnAButtonToAddAProductToACart()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they click on a button to add a product to a cart` is not defined");
    }

   /**
    * @Then the product alongside the price should be added to their shopping cart
    */
    public function theProductAlongsideThePriceShouldBeAddedToTheirShoppingCart()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the product alongside the price should be added to their shopping cart` is not defined");
    }

   /**
    * @Given the customer has items in their shopping cart
    */
    public function theCustomerHasItemsInTheirShoppingCart()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customer has items in their shopping cart` is not defined");
    }

   /**
    * @When they remove an item from their cart
    */
    public function theyRemoveAnItemFromTheirCart()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they remove an item from their cart` is not defined");
    }

   /**
    * @Then the item alongside the price should be removed from their cart
    */
    public function theItemAlongsideThePriceShouldBeRemovedFromTheirCart()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the item alongside the price should be removed from their cart` is not defined");
    }

   /**
    * @Given the user has items in their shopping cart
    */
    public function theUserHasItemsInTheirShoppingCart()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the user has items in their shopping cart` is not defined");
    }

   /**
    * @When they proceed to checkout
    */
    public function theyProceedToCheckout()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they proceed to checkout` is not defined");
    }

   /**
    * @Then they should receive a message prompting them to log in
    */
    public function theyShouldReceiveAMessagePromptingThemToLogIn()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should receive a message prompting them to log in` is not defined");
    }

   /**
    * @Given the customer is in checkout
    */
    public function theCustomerIsInCheckout($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they have succesfully payed
    */
    public function theyHaveSuccesfullyPayed()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they have succesfully payed` is not defined");
    }

   /**
    * @Then the order should be seen by admins
    */
    public function theOrderShouldBeSeenByAdmins()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the order should be seen by admins` is not defined");
    }

   /**
    * @Given the customer is on the checkout page
    */
    public function theCustomerIsOnTheCheckoutPage($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they attempt to proceed without providing shipping or payment information
    */
    public function theyAttemptToProceedWithoutProvidingShippingOrPaymentInformation()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to proceed without providing shipping or payment information` is not defined");
    }

   /**
    * @Then they should see an error message prompting them to fill out all required fields
    */
    public function theyShouldSeeAnErrorMessagePromptingThemToFillOutAllRequiredFields()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see an error message prompting them to fill out all required fields` is not defined");
    }

   /**
    * @Given the user or customer is on the website
    */
    public function theUserOrCustomerIsOnTheWebsite($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they navigate to the contact page
    */
    public function theyNavigateToTheContactPage($url)
    {
        $this->amGoingTo($url);
    }

   /**
    * @Then they see contact information
    */
    public function theySeeContactInformation()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they see contact information` is not defined");
    }

   /**
    * @Given the customer is on the website
    */
    public function theCustomerIsOnTheWebsite($url)
    {
        $url->amOnPage($url);
    }

   /**
    * @Then they should see a form to submit their inquiry
    */
    public function theyShouldSeeAFormToSubmitTheirInquiry()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a form to submit their inquiry` is not defined");
    }

   /**
    * @Given the customer is on the contact page
    */
    public function theCustomerIsOnTheContactPage($url)
    {
        $url->amOnPage($url);
    }

   /**
    * @When they submit the inquiry form
    */
    public function theySubmitTheInquiryForm()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit the inquiry form` is not defined");
    }

   /**
    * @Then they should see a confirmation message indicating that their inquiry has been received
    */
    public function theyShouldSeeAConfirmationMessageIndicatingThatTheirInquiryHasBeenReceived()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a confirmation message indicating that their inquiry has been received` is not defined");
    }

   /**
    * @When they attempt to submit the inquiry form without filling out all required fields
    */
    public function theyAttemptToSubmitTheInquiryFormWithoutFillingOutAllRequiredFields()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to submit the inquiry form without filling out all required fields` is not defined");
    }

   /**
    * @Given user is on the registration page
    */
    public function userIsOnTheRegistrationPage($url)
    {
        $url->amOnPage($url);
    }

   /**
    * @When they submit the registration form with valid information
    */
    public function theySubmitTheRegistrationFormWithValidInformation()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit the registration form with valid information` is not defined");
    }

   /**
    * @When activate their account through their email
    */
    public function activateTheirAccountThroughTheirEmail()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `activate their account through their email` is not defined");
    }

   /**
    * @Then they should be redirected to the login page
    */
    public function theyShouldBeRedirectedToTheLoginPage($url)
    {
        $this->amGoingTo($url);
    }

   /**
    * @Given the user is on the registration page
    */
    public function theUserIsOnTheRegistrationPage($url)
    {
        $url->amOnPage($url);
    }

   /**
    * @When they submit the registration form incompletely
    */
    public function theySubmitTheRegistrationFormIncompletely()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit the registration form incompletely` is not defined");
    }

   /**
    * @When they submit the registration form with invalid information
    */
    public function theySubmitTheRegistrationFormWithInvalidInformation()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit the registration form with invalid information` is not defined");
    }

   /**
    * @Then they should see an error message notifying them of invalid information
    */
    public function theyShouldSeeAnErrorMessageNotifyingThemOfInvalidInformation()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see an error message notifying them of invalid information` is not defined");
    }

   /**
    * @Given the admin is on the order management section
    */
    public function theAdminIsOnTheOrderManagementSection($url)
    {
        $url->amOnPage($url);
    }

   /**
    * @When they create a new order for a specific customer
    */
    public function theyCreateANewOrderForASpecificCustomer()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they create a new order for a specific customer` is not defined");
    }

   /**
    * @Then they should see a message indicating that the order has been created
    */
    public function theyShouldSeeAMessageIndicatingThatTheOrderHasBeenCreated()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a message indicating that the order has been created` is not defined");
    }

//TODO: ???

   /**
    * @When they make changes to a specific customers’ order
    */
    public function theyMakeChangesToASpecificCustomersOrder()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they make changes to a specific customers’ order` is not defined");
    }

   /**
    * @Then they should see a message indicating that the order has been updated
    */
    public function theyShouldSeeAMessageIndicatingThatTheOrderHasBeenUpdated()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a message indicating that the order has been updated` is not defined");
    }

//TODO: ???

   /**
    * @When they confirm a specific customers' order to disable
    */
    public function theyConfirmASpecificCustomersOrderToDisable()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they confirm a specific customers' order to disable` is not defined");
    }

   /**
    * @Then they should see a message indicating that the order has been disabled
    */
    public function theyShouldSeeAMessageIndicatingThatTheOrderHasBeenDisabled()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a message indicating that the order has been disabled` is not defined");
    }

   /**
    * @Given the admin is on the product listing creation page
    */
    public function theAdminIsOnTheProductListingCreationPage($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they submit a form with product images and fields such as product name, description, price, and category
    */
    public function theySubmitAFormWithProductImagesAndFieldsSuchAsProductNameDescriptionPriceAndCategory()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit a form with product images and fields such as product name, description, price, and category` is not defined");
    }

   /**
    * @Then they should see a success message indicating that the product listing has been created
    */
    public function theyShouldSeeASuccessMessageIndicatingThatTheProductListingHasBeenCreated()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a success message indicating that the product listing has been created` is not defined");
    }

//TODO: ???

   /**
    * @When they attempt to submit the form without filling out all required fields
    */
    public function theyAttemptToSubmitTheFormWithoutFillingOutAllRequiredFields()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to submit the form without filling out all required fields` is not defined");
    }

//TODO: ???

   /**
    * @When they attempt to submit the form with invalid data
    */
    public function theyAttemptToSubmitTheFormWithInvalidData()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to submit the form with invalid data` is not defined");
    }

   /**
    * @Then they should see an error message indicating the invalid data
    */
    public function theyShouldSeeAnErrorMessageIndicatingTheInvalidData()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see an error message indicating the invalid data` is not defined");
    }

   /**
    * @Given the user is on the website
    */
    public function theUserIsOnTheWebsite($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they navigate to the settings or preferences section
    */
    public function theyNavigateToTheSettingsOrPreferencesSection($url)
    {
        $this->amGoingTo($url);
    }

   /**
    * @When they toggle the dark mode option
    */
    public function theyToggleTheDarkModeOption()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they toggle the dark mode option` is not defined");
    }

   /**
    * @Then the website interface should switch to dark mode
    */
    public function theWebsiteInterfaceShouldSwitchToDarkMode()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the website interface should switch to dark mode` is not defined");
    }

   /**
    * @Then the user's preference for dark mode should be saved for future visits
    */
    public function theUsersPreferenceForDarkModeShouldBeSavedForFutureVisits()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the user's preference for dark mode should be saved for future visits` is not defined");
    }

   /**
    * @Given the user is on the website in dark mode
    */
    public function theUserIsOnTheWebsiteInDarkMode()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the user is on the website in dark mode` is not defined");
    }

   /**
    * @When they toggle the dark mode option to disable
    */
    public function theyToggleTheDarkModeOptionToDisable()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they toggle the dark mode option to disable` is not defined");
    }

   /**
    * @Then the website interface should switch back to light mode
    */
    public function theWebsiteInterfaceShouldSwitchBackToLightMode()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the website interface should switch back to light mode` is not defined");
    }

   /**
    * @Given the admin is on the customer management section
    */
    public function theAdminIsOnTheCustomerManagementSection()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the admin is on the customer management section` is not defined");
    }

   /**
    * @When they select to deactivate a customers' account
    */
    public function theySelectToDeactivateACustomersAccount()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they select to deactivate a customers' account` is not defined");
    }

   /**
    * @Then the customers' account should be deactivated
    */
    public function theCustomersAccountShouldBeDeactivated()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customers' account should be deactivated` is not defined");
    }

   /**
    * @Given the admin is on the product listing disable page
    */
    public function theAdminIsOnTheProductListingDisablePage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the admin is on the product listing disable page` is not defined");
    }

   /**
    * @When they select and confirm the product listing they want to disable
    */
    public function theySelectAndConfirmTheProductListingTheyWantToDisable()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they select and confirm the product listing they want to disable` is not defined");
    }

   /**
    * @Then they should see a success message indicating that the product listing has been disabled
    */
    public function theyShouldSeeASuccessMessageIndicatingThatTheProductListingHasBeenDisabled()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a success message indicating that the product listing has been disabled` is not defined");
    }

   /**
    * @Given the admin is on the product listing enable page
    */
    public function theAdminIsOnTheProductListingEnablePage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the admin is on the product listing enable page` is not defined");
    }

   /**
    * @When they select and confirm the disabled product listing they want to enable
    */
    public function theySelectAndConfirmTheDisabledProductListingTheyWantToEnable()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they select and confirm the disabled product listing they want to enable` is not defined");
    }

   /**
    * @Then they should see a success message indicating that the product listing has been enabled
    */
    public function theyShouldSeeASuccessMessageIndicatingThatTheProductListingHasBeenEnabled()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a success message indicating that the product listing has been enabled` is not defined");
    }

   /**
    * @Given the admin is on the product listing edit page
    */
    public function theAdminIsOnTheProductListingEditPage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the admin is on the product listing edit page` is not defined");
    }

   /**
    * @When they submit changes to the product they want to edit
    */
    public function theySubmitChangesToTheProductTheyWantToEdit()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit changes to the product they want to edit` is not defined");
    }

   /**
    * @Then they should see a success message indicating that the product listing has been updated
    */
    public function theyShouldSeeASuccessMessageIndicatingThatTheProductListingHasBeenUpdated()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a success message indicating that the product listing has been updated` is not defined");
    }

   /**
    * @When they submit changes with missing information to the product they want to edit
    */
    public function theySubmitChangesWithMissingInformationToTheProductTheyWantToEdit()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit changes with missing information to the product they want to edit` is not defined");
    }

   /**
    * @When they submit changes with invalid data to the product they want to edit
    */
    public function theySubmitChangesWithInvalidDataToTheProductTheyWantToEdit()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit changes with invalid data to the product they want to edit` is not defined");
    }

   /**
    * @Given the admin is on the product management section
    */
    public function theAdminIsOnTheProductManagementSection()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the admin is on the product management section` is not defined");
    }

   /**
    * @When they update the stock number for a specific product
    */
    public function theyUpdateTheStockNumberForASpecificProduct()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they update the stock number for a specific product` is not defined");
    }

   /**
    * @Then they should see a message indicating that the stock number has been updated
    */
    public function theyShouldSeeAMessageIndicatingThatTheStockNumberHasBeenUpdated()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a message indicating that the stock number has been updated` is not defined");
    }

   /**
    * @Given the customer is on the product listing page
    */
    public function theCustomerIsOnTheProductListingPage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customer is on the product listing page` is not defined");
    }

   /**
    * @When they apply filters based on categories, price range, or other criteria
    */
    public function theyApplyFiltersBasedOnCategoriesPriceRangeOrOtherCriteria()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they apply filters based on categories, price range, or other criteria` is not defined");
    }

   /**
    * @Then they should see a refined list of products based on the applied filters
    */
    public function theyShouldSeeARefinedListOfProductsBasedOnTheAppliedFilters()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a refined list of products based on the applied filters` is not defined");
    }

   /**
    * @Given the customer has applied filters on the product listing page
    */
    public function theCustomerHasAppliedFiltersOnTheProductListingPage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customer has applied filters on the product listing page` is not defined");
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
    * @When they navigate to the order history page
    */
    public function theyNavigateToTheOrderHistoryPage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they navigate to the order history page` is not defined");
    }

   /**
    * @Then they should see a list of their previous orders with all the details
    */
    public function theyShouldSeeAListOfTheirPreviousOrdersWithAllTheDetails()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a list of their previous orders with all the details` is not defined");
    }

   /**
    * @Given the admin is on the order processing page
    */
    public function theAdminIsOnTheOrderProcessingPage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the admin is on the order processing page` is not defined");
    }

   /**
    * @When they select a specific customer
    */
    public function theySelectASpecificCustomer()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they select a specific customer` is not defined");
    }

   /**
    * @Then they can process the order and mark it as complete
    */
    public function theyCanProcessTheOrderAndMarkItAsComplete()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they can process the order and mark it as complete` is not defined");
    }

   /**
    * @Given the customer is on the product detail page
    */
    public function theCustomerIsOnTheProductDetailPage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customer is on the product detail page` is not defined");
    }

   /**
    * @When they look at the product description section
    */
    public function theyLookAtTheProductDescriptionSection()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they look at the product description section` is not defined");
    }

   /**
    * @Then they should see detailed information about the product
    */
    public function theyShouldSeeDetailedInformationAboutTheProduct()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see detailed information about the product` is not defined");
    }

   /**
    * @Given the user is on the product detail page
    */
    public function theUserIsOnTheProductDetailPage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the user is on the product detail page` is not defined");
    }

   /**
    * @When they click a back button
    */
    public function theyClickABackButton()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they click a back button` is not defined");
    }

   /**
    * @Then they should be redirected back to the product listing page
    */
    public function theyShouldBeRedirectedBackToTheProductListingPage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should be redirected back to the product listing page` is not defined");
    }

   /**
    * @When they browse through the available products
    */
    public function theyBrowseThroughTheAvailableProducts()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they browse through the available products` is not defined");
    }

   /**
    * @Then they should see a list of products with details such as name, price, image and description
    */
    public function theyShouldSeeAListOfProductsWithDetailsSuchAsNamePriceImageAndDescription()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a list of products with details such as name, price, image and description` is not defined");
    }

   /**
    * @When they click on a product
    */
    public function theyClickOnAProduct()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they click on a product` is not defined");
    }

   /**
    * @Then they should be redirected to the product detail page where they can view more information about the product
    */
    public function theyShouldBeRedirectedToTheProductDetailPageWhereTheyCanViewMoreInformationAboutTheProduct()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should be redirected to the product detail page where they can view more information about the product` is not defined");
    }

   /**
    * @When they submit their address details
    */
    public function theySubmitTheirAddressDetails()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit their address details` is not defined");
    }

   /**
    * @Then they should see available shipping options for their address
    */
    public function theyShouldSeeAvailableShippingOptionsForTheirAddress()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see available shipping options for their address` is not defined");
    }

   /**
    * @When they attempt to proceed to view shipping options without providing an address
    */
    public function theyAttemptToProceedToViewShippingOptionsWithoutProvidingAnAddress()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to proceed to view shipping options without providing an address` is not defined");
    }

   /**
    * @Then they should see an error message prompting them to enter their address
    */
    public function theyShouldSeeAnErrorMessagePromptingThemToEnterTheirAddress()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see an error message prompting them to enter their address` is not defined");
    }

   /**
    * @Given the customer has received the product and navigated to the product detail page
    */
    public function theCustomerHasReceivedTheProductAndNavigatedToTheProductDetailPage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customer has received the product and navigated to the product detail page` is not defined");
    }

   /**
    * @When they submit the form with their rating and comment
    */
    public function theySubmitTheFormWithTheirRatingAndComment()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they submit the form with their rating and comment` is not defined");
    }

   /**
    * @Then they should see a confirmation message indicating that their review has been submitted
    */
    public function theyShouldSeeAConfirmationMessageIndicatingThatTheirReviewHasBeenSubmitted()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a confirmation message indicating that their review has been submitted` is not defined");
    }

   /**
    * @When they attempt to submit a review without purchasing the product
    */
    public function theyAttemptToSubmitAReviewWithoutPurchasingTheProduct()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to submit a review without purchasing the product` is not defined");
    }

   /**
    * @Then they should see an error message indicating that they need to purchase the product before leaving a review
    */
    public function theyShouldSeeAnErrorMessageIndicatingThatTheyNeedToPurchaseTheProductBeforeLeavingAReview()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see an error message indicating that they need to purchase the product before leaving a review` is not defined");
    }

   /**
    * @When they attempt to submit a review without filling all required fields
    */
    public function theyAttemptToSubmitAReviewWithoutFillingAllRequiredFields()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to submit a review without filling all required fields` is not defined");
    }

   /**
    * @Given the customer is in the account settings page
    */
    public function theCustomerIsInTheAccountSettingsPage()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `the customer is in the account settings page` is not defined");
    }

   /**
    * @When they change and confirm their personal details
    */
    public function theyChangeAndConfirmTheirPersonalDetails()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they change and confirm their personal details` is not defined");
    }

   /**
    * @Then they should have a confirmation of their changes as a pop-up
    */
    public function theyShouldHaveAConfirmationOfTheirChangesAsAPopup()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should have a confirmation of their changes as a pop-up` is not defined");
    }

   /**
    * @When they attempt to update their personal details with invalid data
    */
    public function theyAttemptToUpdateTheirPersonalDetailsWithInvalidData()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they attempt to update their personal details with invalid data` is not defined");
    }

   /**
    * @Then they should see a list of that customer's past orders with all the details
    */
    public function theyShouldSeeAListOfThatCustomersPastOrdersWithAllTheDetails()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a list of that customer's past orders with all the details` is not defined");
    }

   /**
    * @Then they should see a list of that customers' current orders
    */
    public function theyShouldSeeAListOfThatCustomersCurrentOrders()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a list of that customers' current orders` is not defined");
    }

   /**
    * @When they scroll down to the review section
    */
    public function theyScrollDownToTheReviewSection()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they scroll down to the review section` is not defined");
    }

   /**
    * @Then they should see a list of reviews for the product
    */
    public function theyShouldSeeAListOfReviewsForTheProduct()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a list of reviews for the product` is not defined");
    }

   /**
    * @When there are no reviews available for the product
    */
    public function thereAreNoReviewsAvailableForTheProduct()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `there are no reviews available for the product` is not defined");
    }

   /**
    * @Then they should see a message indicating that there are no reviews available for the product
    */
    public function theyShouldSeeAMessageIndicatingThatThereAreNoReviewsAvailableForTheProduct()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a message indicating that there are no reviews available for the product` is not defined");
    }
}
