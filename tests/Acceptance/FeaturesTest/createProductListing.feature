Feature: Create a product listing. 

  In order to create a product listing
  As an admin
  I need to have a product creation page

  Scenario: Admin creates a new product listing
	Given the admin is on the "http://localhost/Admin/create" page
	When they fill in the "model" field with "Something"
	And they fill in the "price" field with "99.99"
	And they fill in the "size" field with "12"
    And they fill in the "description" field with "Description of new product"
	And they fill in the "quantity" field with "1"
	Then they should be directed to "http://localhost/Admin/index"
