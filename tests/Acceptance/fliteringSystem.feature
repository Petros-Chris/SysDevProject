Feature: Filtering system

  In order to view relevant listings
  As an user or customer
  I need to have a filtering system

  Scenario: Customer applies filters to refine product listing
	Given the customer is on the "product_listing" page
	When they apply "filters" based on categories, price range, or other criteria
	Then they should see a refined list of "products" based on the applied filters

  Scenario: Customer resets filters
	Given the customer has applied filters on the "product_listing" page
	When they choose to reset the filters
	Then they should see the original, unfiltered product listing