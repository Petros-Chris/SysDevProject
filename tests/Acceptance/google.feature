Feature: Create an account and activate it

  In order to create an account
  As a user
  I need to fill out a form, register and activate it through my email

  Scenario: User fills out registration form correctly and activates account
	Given user is on the registration page
	When they submit the registration form with valid information 
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


Feature: Updating my personal information.

  In order to update my personal information
  As a customer
  I need to be able to manage my account

  Scenario: Customer updates personal information successfully
	Given the customer is in the account settings page
	When they change and confirm their personal details
	Then they should have a confirmation of their changes as a pop-up

  Scenario: Customer attempts to update personal information with invalid data
	Given the customer is in the account settings page
	When they attempt to update their personal details with invalid data
	Then they should see an error message indicating the invalid data


Feature: A product list.

  In order to decide on what to buy
  As an user or customer
  I need to be able to view the product listing

  Scenario: Customer views product listing successfully
	Given the customer is on the product listing page
	When they browse through the available products
	Then they should see a list of products with details such as name, price, image and description

  Scenario: Customer clicks on a product to view details
	Given the customer is on the product listing page
	When they click on a product
	Then they should be redirected to the product detail page where they can view more information about the product


Feature A product description
  
  In order to make sure a product fits my needs
  As an user or customer
  I need to view a products' description

  Scenario: Customer views product description
	Given the customer is on the product detail page
	When they look at the product description section
	Then they should see detailed information about the product

  Scenario: User navigates back to product listing from product description
	Given the user is on the product detail page
	When they click a back button
	Then they should be redirected back to the product listing page


Feature: filtering system

  In order to view relevant listings
  As an user or customer
  I need to have a filtering system

  Scenario: Customer applies filters to refine product listing
	Given the customer is on the product listing page
	When they apply filters based on categories, price range, or other criteria
	Then they should see a refined list of products based on the applied filters

  Scenario: Customer resets filters
	Given the customer has applied filters on the product listing page
	When they choose to reset the filters
	Then they should see the original, unfiltered product listing


Feature: Cart system

  In order to keep track of what I want to buy
  As a customer
  I need to have a cart

  Scenario: Customer views their shopping cart
	Given the customer is at the product listing page
	When they hover or click the cart icon
	Then they should see a list of products and their price as well as the subtotal of the cart

  Scenario: Customer adds items to their shopping cart
	Given the customer is browsing product listings
	When they click on a button to add a product to a cart
	Then the product alongside the price should be added to their shopping cart

  Scenario: Customer removes items from their shopping cart
	Given the customer has items in their shopping cart
	When they remove an item from their cart
	Then the item alongside the price should be removed from their cart


Feature: Add my address to view shipping options

  In order to see my shipping options
  As a customer
  I need to add my address

  Scenario: Customer adds address to view shipping options
	Given the customer is on the checkout page
	When they submit their address details
	Then they should see available shipping options for their address

  Scenario: Customer attempts to view shipping options without providing address
	Given the customer is on the checkout page
	When they attempt to proceed to view shipping options without providing an address
	Then they should see an error message prompting them to enter their address


Feature: Checkout

  In order to order my products
  As a customer
  I need to checkout

  Scenario: Customer places an order successfully
	Given the customer is in checkout
	When they have succesfully payed
	Then the order should be seen by admins

  Scenario: Customer attempts to place an order without providing necessary information
	Given the customer is on the checkout page
	When they attempt to proceed without providing shipping or payment information
	Then they should see an error message prompting them to fill out all required fields


Feature: View previous orders

  In order to remember what I bought
  As a customer
  I need to view my previous orders

  Scenario: Customer views their order history
	Given the customer is logged into their account
	When they navigate to the order history page
	Then they should see a list of their previous orders with all the details


Feature: contact an employee

  In order to talk to an employee about my inquiries
  As a customer
  I need to have a contact page

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


Feature: Submit a review 

  In order to submit a review on a product
  As a Customer
  I need to have a review page

  Scenario: Customer submits a product review
	Given the customer has received the product and navigated to the product detail page
	When they submit the form with their rating and comment
	Then they should see a confirmation message indicating that their review has been submitted

  Scenario: Customer attempts to submit a review without purchasing the product
	Given the customer is on the product detail page
	When they attempt to submit a review without purchasing the product
	Then they should see an error message indicating that they need to purchase the product before leaving a review

  Scenario: Customer attempts to submit a review without filling out all required fields
	Given the customer is on the product detail page
	When they attempt to submit a review without filling all required fields
	Then they should see an error message prompting them to fill out all required fields


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


Feature: edit a product listing. 

  In order to edit a product listing
  As an admin
  I need to have a product editing page

  Scenario: Admin edits an existing product listing
	Given the admin is on the product listing edit page
	When they submit changes to the product they want to edit
	Then they should see a success message indicating that the product listing has been updated

  Scenario: Admin attempts to edit a product listing with missing information
	Given the admin is on the product listing edit page
	When they submit changes with missing information to the product they want to edit
	Then they should see an error message prompting them to fill out all required fields

  Scenario: Admin attempts to edit a product listing with invalid data
	Given the admin is on the product listing edit page
	When they submit changes with invalid data to the product they want to edit
	Then they should see an error message indicating the invalid data


Feature: disable a product listing. 

  In order to disable a product listing
  As an admin
  I need to have a "disable product" button

  Scenario: Admin disables a product listing
	Given the admin is on the product listing disable page
	When they select and confirm the product listing they want to disable
	Then they should see a success message indicating that the product listing has been disabled

  Scenario: Admin enables a previously disabled product listing
	Given the admin is on the product listing enable page
	When they select and confirm the disabled product listing they want to enable
	Then they should see a success message indicating that the product listing has been enabled


Feature: view any customers' current orders.

  In order to view any customers' current orders
  As an admin
  I need to have an customer order view page 

  Scenario: Admin views a customer's current orders
	Given the admin is on the order processing page
	When they select a specific customer
	Then they should see a list of that customers' current orders


Feature: process a customers' order

  In order to process a customers' order
  As an admin
  I need to have an customer order processing page

  Scenario: Admin processes a customer's order
	Given the admin is on the order processing page
	When they select a specific customer
	Then they can process the order and mark it as complete


Feature: create, edit and disable customers' orders

  In order to manage a customers' order
  As an admin
  I need to have an customer order managing page

  Scenario: Admin creates a new customer order
	Given the admin is on the order management section
	When they create a new order for a specific customer
	Then they should see a message indicating that the order has been created

  Scenario: Admin edits a customer's order
	Given the admin is on the order management section
	When they make changes to a specific customers’ order
	Then they should see a message indicating that the order has been updated

  Scenario: Admin disables a customer's order
	Given the admin is on the order management section
	When they confirm a specific customers' order to disable 
	Then they should see a message indicating that the order has been disabled


Feature: view any customers' past orders.

  In order to view any customers' past orders
  As an admin
  I need to have an customer history view page 

  Scenario: Admin views a customer's past orders
	Given the admin is on the customer management section
	When they select a specific customer
	Then they should see a list of that customer's past orders with all the details


Feature: deactivate customer accounts. 

  In order to deactivate customer accounts
  As an admin
  I need to have a customer deactivation page

  Scenario: Admin deactivates a customer account
	Given the admin is on the customer management section
	When they select to deactivate a customers' account
	Then the customers' account should be deactivated


Feature: edit the products' stock number

  In order to edit the products' stock number
  As an admin
  I need to have a product stock modification page

  Scenario: Admin edits the stock number of a product
	Given the admin is on the product management section
	When they update the stock number for a specific product
	Then they should see a message indicating that the stock number has been updated


Feature: View Product reviews
  In order to view reviews
  As a user, customer or admin
  I need to have a review page

  Scenario: User views product reviews
	Given the user is on the product detail page
	When they scroll down to the review section
	Then they should see a list of reviews for the product

  Scenario: User views no reviews available for the product
	Given the user is on the product detail page
	When there are no reviews available for the product
	Then they should see a message indicating that there are no reviews available for the product


Feature: Dark mode
  In order to not strain my eyes
  As a user, customer or admin
  I want the ability to make my screen dark

  Scenario: User enables dark mode
	Given the user is on the website
	When they navigate to the settings or preferences section
	And they toggle the dark mode option
	Then the website interface should switch to dark mode
	And the user's preference for dark mode should be saved for future visits

  Scenario: User disables dark mode
	Given the user is on the website in dark mode
	When they navigate to the settings or preferences section
	And they toggle the dark mode option to disable
	Then the website interface should switch back to light mode
	And the user's preference for dark mode should be saved for future visits

