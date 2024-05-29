Feature: Checkout

  In order to order my products
  As a customer
  I need to checkout

  Scenario: Customer places an order successfully
	Given the customer is in "checkout"
	When they have submitted the completed "checkout_form"
	Then the "order" should be added to the "database"

  Scenario: Customer attempts to place an order without providing necessary information
	Given the customer is on the "checkout" page
	When they attempt to submit the "checkout_form" without filling out all the required fields with "data"
	Then they should see an error "message" prompting them to fill out the form

  Scenario: Customer attempts to place an order with invalid information
    Given the customer is in "checkout"
	When they attempt to submit the "checkout_form" with invalid "data"
	Then they should see an "message" telling them which fields are invalid
 