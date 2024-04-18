Feature: View any customers' past orders.

  In order to view any customers' past orders
  As an admin
  I need to have an customer history view page 

  Scenario: Admin views a customer's past orders
	  Given the admin is on the "customer_management" section
	  When they select a specific ""customer"
	  Then they should see a "list" of that customer's past orders with all the details
