Feature: View previous orders

  In order to remember what I bought
  As a customer
  I need to view my previous orders

  Scenario: Customer views their order history
	  Given the customer is logged into their account
	  When they navigate to the "order_history" page
	  Then they should see a list of their "previous_orders" with all the details
