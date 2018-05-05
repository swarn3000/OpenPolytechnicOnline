Feature: Request a form as a staff member

@form
Scenario: I am a Staff member requestng for a course form
 Given I am logged in as an OP staff member
 When I land on the staff request form
 And I request for a staff request form
 Then I log out of the page