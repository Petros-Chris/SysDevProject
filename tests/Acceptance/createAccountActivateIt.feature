Feature: Create an account and activate it

  In order to create an account
  As a user
  I need to fill out a form, register and activate it through my email

  Scenario: User fills out registration form correctly and activates account
	Given user is on the [registration page]
	When they submit the [registration form] with [valid information] 
	And activate their account through their email
	Then they should be redirected to the login page

  Scenario: User leaves registration form incomplete
	Given the user is on the registration page
	When they submit the registration form incompletely
	Then they should see an error message prompting them to fill out all required fields

  Scenario: User reigsters with invalid information
	Given the user is on the registration page
	When they submit the registration form with invalid information
	Then they should see an error message notifying them of invalid information
