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
