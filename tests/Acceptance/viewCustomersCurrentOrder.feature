Feature: View any customers' current orders.

  In order to view any customers' current orders
  As an admin
  I need to have an customer order view page 

  Scenario: Admin views a customer's current orders
	  Given the admin is on the "order_processing" page
	  When they select a specific "customer"
	  Then they should see a "list" of that customers' current orders