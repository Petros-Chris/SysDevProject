Feature: Submit a review 

  In order to submit a review on a product
  As a Customer
  I need to have a review page

  Scenario: Customer submits a product review
	Given the customer has received the product and navigated to the "product_detail" page
	When they submit the form with their "rating" and "comment"
	Then they should see a confirmation "message" indicating that their review has been submitted
	
  Scenario: Customer attempts to submit a review without filling out all required fields
	Given the customer is on the "product_detail" page
	When they attempt to submit a "review" without filling all required fields
	Then they should see an error "message" prompting them to fill out all required fields
