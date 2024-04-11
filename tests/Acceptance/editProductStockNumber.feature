Feature: Edit the products' stock number

  In order to edit the products' stock number
  As an admin
  I need to have a product stock modification page

  Scenario: Admin edits the stock number of a product
	Given the admin is on the product management section
	When they update the stock number for a specific product
	Then they should see a message indicating that the stock number has been updated
