Feature: Updating my personal information

  In order to update my personal information
  As a customer
  I need to be able to manage my account

  Scenario: Customer updates personal information successfully
	Given the customer is in the "account_settings" page
	When they change and confirm their "personal_details"
	Then they should have a confirmation of their "changes" as a pop-up

  Scenario: Customer attempts to update personal information with invalid data
	Given the customer is in the "account_settings" page
	When they attempt to update their "personal_details" with invalid data
	Then they should see an error "message" indicating the invalid data
