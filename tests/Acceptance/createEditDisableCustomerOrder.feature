Feature: Create, edit and disable customers' orders

  In order to manage a customers' order
  As an admin
  I need to have an customer order managing page

  Scenario: Admin creates a new customer order
	Given the admin is on the "order_management_section"
	When they create a new "order" for a specific "customer"
	Then they should see a "message" indicating that the order has been created

  Scenario: Admin edits a customer's order
	Given the admin is on the "order_management_section"
	When they make changes to a specific "customer" "order"
	Then they should see a "message" indicating that the order has been updated

  Scenario: Admin disables a customer's order
	Given the admin is on the "order_management_section"
	When they confirm a specific "customer" "order" to disable 
	Then they should see a "message" indicating that the order has been disabled
