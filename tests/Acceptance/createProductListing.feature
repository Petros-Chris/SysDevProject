Feature: Create a product listing. 

  In order to create a product listing
  As an admin
  I need to have a product creation page

  Scenario: Admin creates a new product listing
	Given the admin is on the product listing creation page
	When they submit a form with product images and fields such as product name, description, price, and category 
	Then they should see a success message indicating that the product listing has been created

  Scenario: Admin attempts to create a product listing with missing information
	Given the admin is on the product listing creation page
	When they attempt to submit the form without filling out all required fields
	Then they should see an error message prompting them to fill out all required fields

  Scenario: Admin attempts to create a product listing with invalid data
	Given the admin is on the product listing creation page
	When they attempt to submit the form with invalid data 
	Then they should see an error message indicating the invalid data