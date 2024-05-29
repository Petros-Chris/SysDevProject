Feature: Add my address to view shipping options

  In order to see my shipping options
  As a customer
  I need to add my address

  Scenario: Customer adds address to view shipping options
	Given the customer is on the "checkout" page
	When they submit their "address" details
	Then they should see available shipping options for their "address"

  Scenario: Customer attempts to view shipping options without providing address
	Given the customer is on the "checkout" page
	When they attempt to proceed to view shipping options without providing an "address"
	Then they should see an error "message" prompting them to enter their address
