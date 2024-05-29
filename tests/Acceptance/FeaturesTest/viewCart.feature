Feature: Cart system
 
  In order to keep track of what I want to buy
  As a user or customer
  I need to have a cart

  Scenario: Customer adds items to their shopping cart
	Given the customer is browsing "product listings" 
 	When they click on the "product" to view the full product listing
	And they click on the #add_to_cart button to add a product to a cart
	Then the "product" alongside the "price" should be added to their shopping "cart"

  Scenario: Customer views their shopping cart
	Given the customer is at the "product_listing" page
	When they hover or click the cart_icon
	Then they should see a list of products and their "price" as well as the "subtotal" of the cart

  Scenario: User attempts to proceed to the checkout page
	Given the user has "items" in their "cart"
	When they click on a check_out button to proceed to checkout
	Then they should receive a "message" prompting them to log in

  Scenario: Customer removes items from their shopping cart
	Given the customer has "items" in their "cart"
	When they click on the remove_from_cart button
	Then the "item" alongside the price should be removed from their "cart"
