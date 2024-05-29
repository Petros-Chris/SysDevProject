Feature: Edit a product listing. 

  In order to edit a product listing
  As an admin
  I need to have a product editing page

  Scenario: Admin edits an existing product listing
	Given the admin is on the "http://localhost/Employee/modify?id=34" page
	When they fill in the "product model" field with "New Product Model"
    And they fill in the "product description" field with "New Product Description"
    And they fill in the "product price" field with "100"
	Then they should be directed to "http://localhost/Admin/index"
