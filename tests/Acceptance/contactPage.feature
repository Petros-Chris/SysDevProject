Feature: Contact page

  In order to talk to an employee
  As a user or customer
  I need to have a contact page

  Scenario: User or customer accesses the contact page
	  Given the user or customer is on the "home_page"
	  When they navigate to the "contact" page
	  Then they see contact "information"