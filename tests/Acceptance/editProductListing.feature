Feature: Edit a product listing. 

  In order to edit a product listing
  As an admin
  I need to have a product editing page

  Scenario: Admin edits an existing product listing
	Given the admin is on the "product_listing_edit" page
	When they submit "changes" to the "product" they want to edit
	Then they should see a success "message" indicating that the product listing has been updated

  Scenario: Admin attempts to edit a product listing with missing information
	Given the admin is on the "product_listing_edit" page
	When they submit "changes_with_missing_information" to the "product" they want to edit
	Then they should see an error "message" prompting them to fill out all required fields

  Scenario: Admin attempts to edit a product listing with invalid data
	Given the admin is on the "product_listing_edit" page
	When they submit "changes_with_invalid_data" to the "product" they want to edit
	Then they should see an error "message" indicating the invalid data