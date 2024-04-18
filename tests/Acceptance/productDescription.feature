Feature: A product description
  
  In order to make sure a product fits my needs
  As an user or customer
  I need to view a products' description

  Scenario: Customer views product description
	Given the customer is on the "product_detail" page
	When they look at the product_description section
	Then they should see detailed information about the "product"

  Scenario: User navigates back to product listing from product description
	Given the user is on the "product_detail" page
	When they click a back button
	Then they should be redirected back to the "product_listing" page