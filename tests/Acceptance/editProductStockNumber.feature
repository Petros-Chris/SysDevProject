Feature: Edit the products' stock number

  In order to edit the products' stock number
  As an admin
  I need to have a product stock modification page

  Scenario: Admin edits the stock number of a product
	  Given the admin is on the "product_management_section"
	  When they update the "stock_number" for a specific "product"
	  Then they should see a "message" indicating that the stock number has been updated

  Scenario: Admin edits the stock number of a product with incomplete data
	  Given the admin is on the "product_management_section"
	  When they update the "stock_number" for a specific "product" with incomplete data
	  Then they should see a "message" indicating that the stock number has been updated

  Scenario: Admin edits the stock number of a product with invalid data
	  Given the admin is on the "product_management_section"
	  When they update the "stock_number" for a specific "product" with invalid data
	  Then they should see a "message" indicating that the stock number has been updated
