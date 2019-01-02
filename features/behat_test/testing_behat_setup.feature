@behat_test
Feature: Testing Behat setup
  In order to test boilerplate behat setup
  As a developer
  I want to use Hook, Setup, Transform, Api and Ui contexts.

  Background:
    Given I just triggered Setup context

  @ui
  Scenario: Playing along
    When I use Transform context
    And I enter page
    And then I use Ui context
    And I query Api context
    Then All 5 contexts should be marked as used
