Feature: Contact an employee through the ticketing system

  In order to talk to an employee about my inquiries
  As a customer
  I need to have a ticket page

  Scenario: Customer accesses the ticket page
	Given the customer is on the "home_page"
	When they navigate to the "ticket" page
	Then they should see a "form" to submit their "inquiry"
  
  Scenario: Customer submits inquiry via the ticket form
	Given the customer is on the "ticket" page
	When they submit the "inquiry" "form"
	Then they should see a confirmation "message" indicating that their inquiry has been received

  Scenario: Customer attempts to submit inquiry with missing information
	Given the customer is on the "ticket" page
	When they attempt to submit the inquiry "form" without filling out all the required fields with "data"
	Then they should see an error "message" prompting them to fill out all required fields
