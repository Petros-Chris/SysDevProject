Feature: View Product reviews

  In order to view reviews
  As a user, customer or admin
  I need to have a review page

  Scenario: User views product reviews
    Given the user is on the "product_detail" page
    When they scroll down to the review section
    Then they should see a list of "reviews" for the product

  Scenario: User views no reviews available for the product
    Given the user is on the "product_detail" page
    When there are no "reviews" available for the product
    Then they should see a "message" indicating that there are no reviews available for the product

