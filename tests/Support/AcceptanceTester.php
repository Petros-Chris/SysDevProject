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
    public function theyHoverOrClickTheCartIcon($icon)
    {
        $this->click($icon);
        $this->moveMouseOver($icon);
    }

   /**
    * @Then they should see a list of products and their price as well as the subtotal of the cart
    */
    public function theyShouldSeeAListOfProductsAndTheirPriceAsWellAsTheSubtotalOfTheCart($price, $subtotal)
    {
        $this->seeElement($price);
        $this->seeElement($subtotal);
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
    public function theyClickOnAButtonToAddAProductToACart($button)
    {
        $this->click($button);
    }

   /**
    * @Then the product alongside the price should be added to their shopping cart
    */
    public function theProductAlongsideThePriceShouldBeAddedToTheirShoppingCart($product, $price)
    {
        $this->see($product);
        $this->see($price);
    }

   /**
    * @Given the customer has items in their shopping cart
    */
    public function theCustomerHasItemsInTheirShoppingCart($item, $cart)
    {
        $this->see($item, $cart);
    }

   /**
    * @When they remove an item from their cart
    */
    public function theyRemoveAnItemFromTheirCart($removeButton)
    {
        $this->click($removeButton);
    }

   /**
    * @Then the item alongside the price should be removed from their cart
    */
    public function theItemAlongsideThePriceShouldBeRemovedFromTheirCart($item, $cart)
    {
        $this->dontSee($item, $cart);
    }

   /**
    * @Given the user has items in their shopping cart
    */
    public function theUserHasItemsInTheirShoppingCart($cart)
    {
        $this->seeElement($cart);
    }

   /**
    * @When they proceed to checkout
    */
    public function theyProceedToCheckout($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @Then they should receive a message prompting them to log in
    */
    public function theyShouldReceiveAMessagePromptingThemToLogIn($message)
    {
        $this->seeElement($message);
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
    public function theyHaveSuccesfullyPayed($form, $data)
    {
        $this->submitForm($form, $data);
    }

   /**
    * @Then the order should be seen by admins
    */
    public function theOrderShouldBeSeenByAdmins($order, $orderId)
    {
        $this->seeElement($order, $orderId);
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
    public function theyAttemptToProceedWithoutProvidingShippingOrPaymentInformation($form, $data)
    {
        $this->submitForm($form, $data);
    }

   /**
    * @Then they should see an error message prompting them to fill out all required fields
    */
    public function theyShouldSeeAnErrorMessagePromptingThemToFillOutAllRequiredFields($message)
    {
        $this->seeElement($message);
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
    public function theySeeContactInformation($contactInformation)
    {
        $this->seeElement($contactInformation);
    }

   /**
    * @Given the customer is on the website
    */
    public function theCustomerIsOnTheWebsite($url)
    {
        $url->amOnPage($url);
    }
//TODO: ???
   /**
    * @Then they should see a form to submit their inquiry
    */
    public function theyShouldSeeAFormToSubmitTheirInquiry($form)
    {
        $this->seeElement($form);
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
    public function theySubmitTheInquiryForm($form, $data)
    {
        $this->submitForm($form, $data);
    }

   /**
    * @Then they should see a confirmation message indicating that their inquiry has been received
    */
    public function theyShouldSeeAConfirmationMessageIndicatingThatTheirInquiryHasBeenReceived($message)
    {
        $this->seeElement($message);
    }
//TODO: ???
   /**
    * @When they attempt to submit the inquiry form without filling out all required fields
    */
    public function theyAttemptToSubmitTheInquiryFormWithoutFillingOutAllRequiredFields($button)
    {
        $this->click($button);
    }
//TODO: ???
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
    public function theySubmitTheRegistrationFormWithValidInformation($form, $data)
    {
        $this->submitForm($form, $data);
    }
//TODO: ???
//TODO: ???
   /**
    * @When activate their account through their email
    */
    public function activateTheirAccountThroughTheirEmail($activationLink)
    {
        $this->amOnPage($activationLink);
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
    public function theySubmitTheRegistrationFormIncompletely($form, $data)
    {
        $this->submitForm($form, $data);
    }
//TODO: ???
//TODO: ???
   /**
    * @When they submit the registration form with invalid information
    */
    public function theySubmitTheRegistrationFormWithInvalidInformation($form, $data)
    {
        $this->submitForm($form, $data);
    }

   /**
    * @Then they should see an error message notifying them of invalid information
    */
    public function theyShouldSeeAnErrorMessageNotifyingThemOfInvalidInformation($message)
    {
        $this->seeElement($message);
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
    public function theyCreateANewOrderForASpecificCustomer($form, $orderData)
    {
        $this->submitForm($form, $orderData);
    }

   /**
    * @Then they should see a message indicating that the order has been created
    */
    public function theyShouldSeeAMessageIndicatingThatTheOrderHasBeenCreated($message)
    {
        $this->seeElement($message);
    }

//TODO: ???

   /**
    * @When they make changes to a specific customers’ order
    */
    public function theyMakeChangesToASpecificCustomersOrder($orderId, $change)
    {
        $this->submitForm($orderId, $change);
    }

   /**
    * @Then they should see a message indicating that the order has been updated
    */
    public function theyShouldSeeAMessageIndicatingThatTheOrderHasBeenUpdated($message)
    {
        $this->seeElement($message);
    }

//TODO: ???

   /**
    * @When they confirm a specific customers' order to disable
    */
    public function theyConfirmASpecificCustomersOrderToDisable($orderId, $button)
    {
        $this->click($orderId);
        $this->click($button);
    }

   /**
    * @Then they should see a message indicating that the order has been disabled
    */
    public function theyShouldSeeAMessageIndicatingThatTheOrderHasBeenDisabled($message)
    {
        $this->seeElement($message);
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
    public function theySubmitAFormWithProductImagesAndFieldsSuchAsProductNameDescriptionPriceAndCategory($form, $data)
    {
        $this->submitForm($form, $data);
    }

   /**
    * @Then they should see a success message indicating that the product listing has been created
    */
    public function theyShouldSeeASuccessMessageIndicatingThatTheProductListingHasBeenCreated($message)
    {
        $this->seeElement($message);
    }

//TODO: ???

   /**
    * @When they attempt to submit the form without filling out all required fields
    */
    public function theyAttemptToSubmitTheFormWithoutFillingOutAllRequiredFields($submitButton)
    {
        $this->click($submitButton);
    }

//TODO: ???
//TODO: ???

   /**
    * @When they attempt to submit the form with invalid data
    */
    public function theyAttemptToSubmitTheFormWithInvalidData($form, $data)
    {
        $this->submitForm($form, $data);
    }

   /**
    * @Then they should see an error message indicating the invalid data
    */
    public function theyShouldSeeAnErrorMessageIndicatingTheInvalidData($message)
    {
        $this->seeElement($message);
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
//TODO: ???
//TODO: ???
   /**
    * @When they toggle the dark mode option
    */
    public function theyToggleTheDarkModeOption($toggleButton)
    {
        $this->click($toggleButton);
    }

   /**
    * @Then the website interface should switch to dark mode
    */
    public function theWebsiteInterfaceShouldSwitchToDarkMode($darkMode)
    {
        $this->seeElement($darkMode);
    }
//TODO: ???
//TODO: ???
   /**
    * @Then the user's preference for dark mode should be saved for future visits
    */
    public function theUsersPreferenceForDarkModeShouldBeSavedForFutureVisits($preferenceCheckScript)
    {
        $this->executeJS($preferenceCheckScript);
    }

   /**
    * @Given the user is on the website in dark mode
    */
    public function theUserIsOnTheWebsiteInDarkMode($darkMode)
    {
        $this->amOnPage($darkMode);
    }

   /**
    * @When they toggle the dark mode option to disable
    */
    public function theyToggleTheDarkModeOptionToDisable($button)
    {
        $this->click($button);
    }

   /**
    * @Then the website interface should switch back to light mode
    */
    public function theWebsiteInterfaceShouldSwitchBackToLightMode($lightMode)
    {
        $this->seeElement($lightMode);
    }

   /**
    * @Given the admin is on the customer management section
    */
    public function theAdminIsOnTheCustomerManagementSection($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they select to deactivate a customers' account
    */
    public function theySelectToDeactivateACustomersAccount($customerId, $button)
    {
        $this->click($customerId);
        $this->click($button);
    }

   /**
    * @Then the customers' account should be deactivated
    */
    public function theCustomersAccountShouldBeDeactivated($customerStatus, $customerId)
    {
        $this->see($customerStatus, $customerId);
    }

   /**
    * @Given the admin is on the product listing disable page
    */
    public function theAdminIsOnTheProductListingDisablePage($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they select and confirm the product listing they want to disable
    */
    public function theySelectAndConfirmTheProductListingTheyWantToDisable($productId, $button)
    {
        $this->click($productId);
        $this->click($button);
    }

   /**
    * @Then they should see a success message indicating that the product listing has been disabled
    */
    public function theyShouldSeeASuccessMessageIndicatingThatTheProductListingHasBeenDisabled($message)
    {
        $this->seeElement($message);
    }

   /**
    * @Given the admin is on the product listing enable page
    */
    public function theAdminIsOnTheProductListingEnablePage($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they select and confirm the disabled product listing they want to enable
    */
    public function theySelectAndConfirmTheDisabledProductListingTheyWantToEnable($productId, $button)
    {
        $this->click($productId);
        $this->click($button);
    }

   /**
    * @Then they should see a success message indicating that the product listing has been enabled
    */
    public function theyShouldSeeASuccessMessageIndicatingThatTheProductListingHasBeenEnabled($message)
    {
        $this->seeElement($message);
    }

   /**
    * @Given the admin is on the product listing edit page
    */
    public function theAdminIsOnTheProductListingEditPage($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they submit changes to the product they want to edit
    */
    public function theySubmitChangesToTheProductTheyWantToEdit($form, $change)
    {
        $this->submitForm($form, $change);
    }

   /**
    * @Then they should see a success message indicating that the product listing has been updated
    */
    public function theyShouldSeeASuccessMessageIndicatingThatTheProductListingHasBeenUpdated($message)
    {
        $this->seeElement($message);
    }
//TODO: ???
   /**
    * @When they submit changes with missing information to the product they want to edit
    */
    public function theySubmitChangesWithMissingInformationToTheProductTheyWantToEdit($form, $change)
    {
        $this->submitForm($form, $change);
    }
//TODO: ???
//TODO: ???
   /**
    * @When they submit changes with invalid data to the product they want to edit
    */
    public function theySubmitChangesWithInvalidDataToTheProductTheyWantToEdit($form, $change)
    {
        $this->submitForm($form, $change);
    }
//TODO: ???
   /**
    * @Given the admin is on the product management section
    */
    public function theAdminIsOnTheProductManagementSection($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they update the stock number for a specific product
    */
    public function theyUpdateTheStockNumberForASpecificProduct($productId, $button)
    {
        $this->click($productId);
        $this->click($button);
    }

   /**
    * @Then they should see a message indicating that the stock number has been updated
    */
    public function theyShouldSeeAMessageIndicatingThatTheStockNumberHasBeenUpdated($message)
    {
        $this->seeElement($message);
    }

   /**
    * @Given the customer is on the product listing page
    */
    public function theCustomerIsOnTheProductListingPage($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they apply filters based on categories, price range, or other criteria
    */
    public function theyApplyFiltersBasedOnCategoriesPriceRangeOrOtherCriteria($filter, $criteria, $button)
    {
        foreach ($criteria as $key => $value) {
            $this->selectOption($filter[$key], $value);
        }
        $this->click($button);
    }

   /**
    * @Then they should see a refined list of products based on the applied filters
    */
    public function theyShouldSeeARefinedListOfProductsBasedOnTheAppliedFilters($products)
    {
        $this->seeElement($products);
    }

   /**
    * @Given the customer has applied filters on the product listing page
    */
    public function theCustomerHasAppliedFiltersOnTheProductListingPage($isFilterActive)
    {
        $this->seeElement($isFilterActive);
    }

   /**
    * @When they choose to reset the filters
    */
    public function theyChooseToResetTheFilters($button)
    {
        $this->click($button);
    }

   /**
    * @Then they should see the original, unfiltered product listing
    */
    public function theyShouldSeeTheOriginalUnfilteredProductListing($filter)
    {
        $this->dontSeeElement($filter);
    }

   /**
    * @Given the customer is logged into their account
    */
    public function theCustomerIsLoggedIntoTheirAccount($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they navigate to the order history page
    */
    public function theyNavigateToTheOrderHistoryPage($url)
    {
        $this->amGoingTo($url);
    }

   /**
    * @Then they should see a list of their previous orders with all the details
    */
    public function theyShouldSeeAListOfTheirPreviousOrdersWithAllTheDetails($orderDetails)
    {
        $this->seeElement($orderDetails);
    }

   /**
    * @Given the admin is on the order processing page
    */
    public function theAdminIsOnTheOrderProcessingPage($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they select a specific customer
    */
    public function theySelectASpecificCustomer($customerId)
    {
        $this->click($customerId);
    }

   /**
    * @Then they can process the order and mark it as complete
    */
    public function theyCanProcessTheOrderAndMarkItAsComplete($orderId, $button)
    {
        $this->click($orderId);
        $this->click($button);
    }

   /**
    * @Given the customer is on the product detail page
    */
    public function theCustomerIsOnTheProductDetailPage($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they look at the product description section
    */
    public function theyLookAtTheProductDescriptionSection($description)
    {
        $this->seeElement($description);
    }

   /**
    * @Then they should see detailed information about the product
    */
    public function theyShouldSeeDetailedInformationAboutTheProduct($informations)
    {
        foreach ($informations as $information) {
            $this->seeElement($information);
        }
    }

   /**
    * @Given the user is on the product detail page
    */
    public function theUserIsOnTheProductDetailPage($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they click a back button
    */
    public function theyClickABackButton($button)
    {
        $this->click($button);
    }

   /**
    * @Then they should be redirected back to the product listing page
    */
    public function theyShouldBeRedirectedBackToTheProductListingPage($url)
    {
        $this->amGoingTo($url);
    }

   /**
    * @When they browse through the available products
    */
    public function theyBrowseThroughTheAvailableProducts($products)
    {
        $this->seeElement($products);
    }

   /**
    * @Then they should see a list of products with details such as name, price, image and description
    */
    public function theyShouldSeeAListOfProductsWithDetailsSuchAsNamePriceImageAndDescription($productDetails)
    {
        $this->seeElement($productDetails);
    }
//TODO: ???
   /**
    * @When they click on a product
    */
    public function theyClickOnAProduct($product)
    {
        $this->click($product);
    }

   /**
    * @Then they should be redirected to the product detail page where they can view more information about the product
    */
    public function theyShouldBeRedirectedToTheProductDetailPageWhereTheyCanViewMoreInformationAboutTheProduct($url)
    {
       $this->amGoingTo($url);
    }
//TODO: ???
   /**
    * @When they submit their address details
    */
    public function theySubmitTheirAddressDetails($form, $addresDetails)
    {
        $this->submitForm($form, $addresDetails);
    }

   /**
    * @Then they should see available shipping options for their address
    */
    public function theyShouldSeeAvailableShippingOptionsForTheirAddress($shippingOptions)
    {
        $this->seeElement($shippingOptions);
    }
//TODO: ???
   /**
    * @When they attempt to proceed to view shipping options without providing an address
    */
    public function theyAttemptToProceedToViewShippingOptionsWithoutProvidingAnAddress($button)
    {
        $this->click($button);
    }

   /**
    * @Then they should see an error message prompting them to enter their address
    */
    public function theyShouldSeeAnErrorMessagePromptingThemToEnterTheirAddress($message)
    {
        $this->seeElement($message);
    }

   /**
    * @Given the customer has received the product and navigated to the product detail page
    */
    public function theCustomerHasReceivedTheProductAndNavigatedToTheProductDetailPage($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they submit the form with their rating and comment
    */
    public function theySubmitTheFormWithTheirRatingAndComment($form, $reviewData)
    {
        $this->submitForm($form, $reviewData);
    }

   /**
    * @Then they should see a confirmation message indicating that their review has been submitted
    */
    public function theyShouldSeeAConfirmationMessageIndicatingThatTheirReviewHasBeenSubmitted($message)
    {
        $this->seeElement($message);
    }
//TODO: ???
   /**
    * @When they attempt to submit a review without purchasing the product
    */
    public function theyAttemptToSubmitAReviewWithoutPurchasingTheProduct($form, $reviewData)
    {
        $this->submitForm($form, $reviewData);
    }

   /**
    * @Then they should see an error message indicating that they need to purchase the product before leaving a review
    */
    public function theyShouldSeeAnErrorMessageIndicatingThatTheyNeedToPurchaseTheProductBeforeLeavingAReview($message)
    {
        $this->seeElement($message);
    }
//TODO: ???
   /**
    * @When they attempt to submit a review without filling all required fields
    */
    public function theyAttemptToSubmitAReviewWithoutFillingAllRequiredFields($form, $reviewData)
    {
        $this->submitForm($form, $reviewData);
    }
//TODO: ???
   /**
    * @Given the customer is in the account settings page
    */
    public function theCustomerIsInTheAccountSettingsPage($url)
    {
        $this->amOnPage($url);
    }

   /**
    * @When they change and confirm their personal details
    */
    public function theyChangeAndConfirmTheirPersonalDetails($form, $changeDetails)
    {
        $this->submitForm($form, $changeDetails);
    }

   /**
    * @Then they should have a confirmation of their changes as a pop-up
    */
    public function theyShouldHaveAConfirmationOfTheirChangesAsAPopup($message)
    {
        $this->seeElement($message);
    }
//TODO: ???
   /**
    * @When they attempt to update their personal details with invalid data
    */
    public function theyAttemptToUpdateTheirPersonalDetailsWithInvalidData($form, $changeDetails)
    {
        $this->submitForm($form, $changeDetails);
    }

   /**
    * @Then they should see a list of that customer's past orders with all the details
    */
    public function theyShouldSeeAListOfThatCustomersPastOrdersWithAllTheDetails($orderId, $orderDetails)
    {
        $this->seeElement($orderId, $orderDetails);
    }
//TODO: ???
//TODO: ???
   /**
    * @Then they should see a list of that customers' current orders
    */
    public function theyShouldSeeAListOfThatCustomersCurrentOrders($orderId, $orderDetails)
    {
        $this->seeElement($orderId, $orderDetails);
    }
//TODO: ???
   /**
    * @When they scroll down to the review section
    */
    public function theyScrollDownToTheReviewSection()
    {
        $this->seeElement()
    }

   /**
    * @Then they should see a list of reviews for the product
    */
    public function theyShouldSeeAListOfReviewsForTheProduct()
    {
        throw new \PHPUnit\Framework\IncompleteTestError("Step `they should see a list of reviews for the product` is not defined");
    }
//TODO: ???
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
