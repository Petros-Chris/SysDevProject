Feature: Contact an employee through the ticketing system

  In order to talk to an employee about my inquiries
  As a customer
  I need to have a ticket page

  Scenario: Customer accesses the contact page
	Given the customer is on the website
	When they navigate to the contact page
	Then they should see a form to submit their inquiry
  
  Scenario: Customer submits inquiry via the contact form
	Given the customer is on the contact page
	When they submit the inquiry form
	Then they should see a confirmation message indicating that their inquiry has been received

  Scenario: Customer attempts to submit inquiry with missing information
	Given the customer is on the contact page
	When they attempt to submit the inquiry form without filling out all required fields
	Then they should see an error message prompting them to fill out all required fields
