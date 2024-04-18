Feature: A product list

  In order to decide on what to buy
  As an user or customer
  I need to be able to view the product listing

  Scenario: Customer views product listing successfully
	Given the customer is on the "product_listing" page
	When they browse through the available products
	Then they should see a list of "products" with details such as name, price, image and description

  Scenario: Customer clicks on a product to view details
	Given the customer is on the "product_listing" page
	When they click on a product
	Then they should be redirected to the product "detail_page" where they can view more information about the product
