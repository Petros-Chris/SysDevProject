Feature: Deactivate customer accounts. 

  In order to deactivate customer accounts
  As an admin
  I need to have a customer deactivation page

  Scenario: Admin deactivates a customer account
	  Given the admin is on the "customer management section"
	  When they select to deactivate a "customer_account"
	  Then the "customer_account" should be deactivated