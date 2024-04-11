Feature: Checkout

  In order to order my products
  As a customer
  I need to checkout

  Scenario: Customer places an order successfully
	Given the customer is in checkout
	When they have succesfully payed
	Then the order should be seen by admins

  Scenario: Customer attempts to place an order without providing necessary information
	Given the customer is on the checkout page
	When they attempt to proceed without providing shipping or payment information
	Then they should see an error message prompting them to fill out all required fields
