Feature: Base
  Scenario: Site work
    Given I am on the homepage
    Then I should see "Laravel Québec!"

  Scenario: The sign in form is on the homepage
    Given I am on the homepage
    Then I should see "Connexion"
    And I should see "Courriel" in the "div.signin" element
    And I should see "Mot de passe" in the "div.signin" element
    And I should see an "input[type='submit']" element

  Scenario: The sign up form is on the homepage
    Given I am on the homepage
    Then I should see "Inscription"
    And I should see "Courriel" in the "div.signup" element
    And I should see an "input[type='submit']" element