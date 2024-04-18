Feature: Process a customers' order

  In order to process a customers' order
  As an admin
  I need to have an customer order processing page

  Scenario: Admin processes a customer's order
	  Given the admin is on the "order_processing" page
	  When they select a specific "customer"
	  Then they can process the order and mark it as complete