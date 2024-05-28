Feature: Review Page
  As a user, employee, customer or admin
  I want to have a review page
  So I can see what others think about a product

  Scenario: Viewing the review page for a product
    Given I am on the review page for product with id "1"
    Then I should see the page contains "review-container"

  Scenario: Submitting a review for a product
    Given I am on "http://localhost/Review/create"
    When I fill the "form-description" with "Wow great product"
    And I press the submitReview1 button
    Then I should be redirected to the review page for product with id "1"