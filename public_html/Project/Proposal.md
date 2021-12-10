# Project Name: (Which Project): Simple Shop
## Project Summary: (Copy from proposal): This project will create a simple e-commerce site for users. Administrators or store owners will be able to manage inventory and users will be able to manage their cart and place orders.
## Github Link: (Prod Branch of Project Folder)
## Project Board Link: 
## Website Link: (Heroku Prod of Project folder)
## Your Name: Muhamad Abdul Mannan

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] \(mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
--> 
### Proposal Checklist and Evidence

- Milestone 1
- [ ] \(11/11/2021) User will be able to register a new account
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: (https://mm2623-prod.herokuapp.com/Project/register.php)
    - Pull Requests
      - PR link #1 (https://github.com/mm2623/IT202-007/pull/26):
    - Screenshots
      - Screenshot #1 (![image](https://user-images.githubusercontent.com/90267420/141394946-a86aaee5-6b0f-49e1-be56-59ad8909e002.png))
        - Screenshot #1 Email is required and must be validated.
      - Screenshot #2 (![image](https://user-images.githubusercontent.com/90267420/141600740-f082080b-3e73-4a04-9508-348491c5c689.png))
        - Screenshot #2 User Table with Id, username, email, password (60 characters), created, modified.
      - Screenshot #3 (![image](https://user-images.githubusercontent.com/90267420/141600800-f04bf441-8d29-463c-9c17-7b883d3a2725.png))
        - Screenshot #3 Password must be hashed.
      - Screenshot #4 (![image](https://user-images.githubusercontent.com/90267420/141601616-2c86921f-e480-44de-afee-0c6706acb6b2.png))
        - Screenshot #4 Email should be unique.
      - Screenshot #5 (![image](https://user-images.githubusercontent.com/90267420/141601616-2c86921f-e480-44de-afee-0c6706acb6b2.png))
        - Screenshot #5 Username should be unique
      - Screenshot #6 (![image](https://user-images.githubusercontent.com/90267420/141392722-87104257-ce3f-4cbb-883c-0ea84ac37acf.png)
        ![image](https://user-images.githubusercontent.com/90267420/141392819-7a264baf-29e1-46b4-b5df-37f62b80896d.png))
        - Screenshot #6 System let user know if username or email is taken and allow the user to correct the error without wiping/clearing the form.

- [ ] \(11/11/2021)User will be able to login to their account (given they enter the correct credentials)
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: (https://mm2623-prod.herokuapp.com/Project/login.php)
    - Pull Requests
      - PR link #1 (https://github.com/mm2623/IT202-007/pull/28)
    - Screenshots
      - Screenshot #1 (![image](https://user-images.githubusercontent.com/90267420/141387628-e329422c-3585-439c-a44c-7371e24f7c28.png))
        - Screenshot #1 User can login with email or username.
        Screenshot #2 (![image](https://user-images.githubusercontent.com/90267420/141392243-abac33a4-a648-495f-a2f5-1d064e7b5336.png))
        (![image](https://user-images.githubusercontent.com/90267420/141392115-100f225f-e3a9-4ed7-8316-41eabc536c71.png))
        - Screenshot #2 User see friendly error messages when an account either doesn’t exist or if passwords don’t match.
      - Screenshot #3 (![image](https://user-images.githubusercontent.com/90267420/141605858-57860ae1-a11e-40a9-8e79-556a530d310c.png))
        - Screenshot #3 Logging in should fetch the user’s details (and roles) and save them into the session.
      - Screenshot #4 (![image](https://user-images.githubusercontent.com/90267420/141387628-e329422c-3585-439c-a44c-7371e24f7c28.png))
        - Screenshot #4 User will be directed to a landing page(home page) upon login

- [ ] \(11/11/2021) User will be able to logout
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: (https://mm2623-prod.herokuapp.com/Project/logout.php)
    - Pull Requests
      - PR link #1 (https://github.com/mm2623/IT202-007/pull/25)
    - Screenshots
      - Screenshot #1 (![image](https://user-images.githubusercontent.com/90267420/141387674-dc548003-8022-49e8-bdfb-b649d670cde8.png))
        - Screenshot #1 Logging out redirect to login page
        Screenshot #2 (![image](https://user-images.githubusercontent.com/90267420/141387674-dc548003-8022-49e8-bdfb-b649d670cde8.png))
        - Screenshot #2 User should see a message that they’ve successfully logged out
      - Screenshot #3 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #3 Session should be destroyed (so the back button doesn’t allow them access back in

- [ ] \(11/11/2021) Basic security rules implemented
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: (https://mm2623-prod.herokuapp.com/Project/home.php)
    - Pull Requests
      - PR link #1 (https://github.com/mm2623/IT202-007/pull/27)
    - Screenshots
      - Screenshot #1 (![image](https://user-images.githubusercontent.com/90267420/141606098-c04dc7eb-fc4e-498e-ac0b-5cfbd73a0e7d.png))
        - Screenshot #1 Authentication that Function to check if user is logged in and call on appropriate pages that only allow logged in users.
        Screenshot #2 (![image](https://user-images.githubusercontent.com/90267420/141606164-7eec7521-8238-4abb-b8ab-7642f0972dc7.png))
        - Screenshot #2 Have a roles table. (id, name, description, is_active, modified, created)

- [ ] \(11/11/2021) Basic Roles implemented
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: (https://mm2623-prod.herokuapp.com/Project/home.php)
    - Pull Requests
      - PR link #1 (https://github.com/mm2623/IT202-007/pull/27)
    - Screenshots
      - Screenshot #1 (![image](https://user-images.githubusercontent.com/90267420/141606164-7eec7521-8238-4abb-b8ab-7642f0972dc7.png))
        - Screenshot #1 Have a Roles table	(id, name, description, is_active, modified, created)
        Screenshot #2 (![image](https://user-images.githubusercontent.com/90267420/141606247-0bea2678-d3aa-4bed-9703-7a36244295d6.png))
        - Screenshot #2 Have a User Roles table (id, user_id, role_id, is_active, created, modified)
      - Screenshot #3 (![image](https://user-images.githubusercontent.com/90267420/141606098-c04dc7eb-fc4e-498e-ac0b-5cfbd73a0e7d.png))
        - Screenshot #3 A function to check if a user has a specific role

- [ ] \(11/11/2021) Site should have basic styles/theme applied; everything should be styled
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: (https://mm2623-prod.herokuapp.com/Project/styles.css)
    - Pull Requests
      - PR link #1 (https://github.com/mm2623/IT202-007/pull/29)
    - Screenshots
      - Screenshot #1 (![image](https://user-images.githubusercontent.com/90267420/141387628-e329422c-3585-439c-a44c-7371e24f7c28.png))
        - Screenshot #1 Site have basic styles/theme applied to forms/input, navigation bar, etc

- [ ] \(11/11/2021) Any output messages/errors should be “user friendly”
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: (https://mm2623-prod.herokuapp.com/partials/flash.php)
    - Pull Requests
      - PR link #1 (https://github.com/mm2623/IT202-007/pull/24)
    - Screenshots
      - Screenshot #1 (![image](https://user-images.githubusercontent.com/90267420/141387628-e329422c-3585-439c-a44c-7371e24f7c28.png)) (![image](https://user-images.githubusercontent.com/90267420/141387674-dc548003-8022-49e8-bdfb-b649d670cde8.png)) (![image](https://user-images.githubusercontent.com/90267420/141391759-2e57cda4-779c-4368-b9a2-2143e8cb24d1.png)) (![image](https://user-images.githubusercontent.com/90267420/141392015-32443ec2-62d1-4deb-86d8-de57129a32d8.png)) (![image](https://user-images.githubusercontent.com/90267420/141392115-100f225f-e3a9-4ed7-8316-41eabc536c71.png)) (![image](https://user-images.githubusercontent.com/90267420/141392243-abac33a4-a648-495f-a2f5-1d064e7b5336.png)) (![image](https://user-images.githubusercontent.com/90267420/141392722-87104257-ce3f-4cbb-883c-0ea84ac37acf.png)) (![image](https://user-images.githubusercontent.com/90267420/141392819-7a264baf-29e1-46b4-b5df-37f62b80896d.png))
        - Screenshot #1 Some outputed user friendly messages.

- [ ] \(11/11/2021) User will be able to see their profile
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: (https://mm2623-prod.herokuapp.com/Project/profile.php)
    - Pull Requests
      - PR link #1 (https://github.com/mm2623/IT202-007/pull/25)
    - Screenshots
      - Screenshot #1 (![image](https://user-images.githubusercontent.com/90267420/141606712-1c995cb7-4824-4eee-81e8-4501336ddd47.png))
        - Screenshot #1 User are able to see their Email, username, etc.

- [ ] \(11/11/2021) User will be able to edit their profile
  -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: (https://mm2623-prod.herokuapp.com/Project/profile.php)
    - Pull Requests
      - PR link #1 (https://github.com/mm2623/IT202-007/pull/25)
    - Screenshots
      - Screenshot #1 (![image](https://user-images.githubusercontent.com/90267420/141606920-8a2c6d3c-4f9b-4b87-81cb-6f75366aa0f6.png)) 
      (![image](https://user-images.githubusercontent.com/90267420/141606946-8b37a0db-cb2d-4c79-9bce-c616a3577a54.png))
        - Screenshot #1 User will be able to change username/email and should properly check to see if it’s available before allowing the change.
        Screenshot #2 (![image](https://user-images.githubusercontent.com/90267420/141606876-e00c11e9-fa52-40ac-9810-995e45c216a3.png))
        - Screenshot #2 Any other fields should be properly validated
      - Screenshot #3 (![image](https://user-images.githubusercontent.com/90267420/141606876-e00c11e9-fa52-40ac-9810-995e45c216a3.png)) 
      (![image](https://user-images.githubusercontent.com/90267420/141606843-4f8bb41c-901f-47f7-9e02-69dfda89b567.png))
        - Screenshot #3 Allow password reset (only if the existing correct password is provided)

- Milestone 2
- Milestone 3
- Milestone 4
- [ ] \(mm/dd/yyyy of completion)
<table>
<tr><td>milestone 4</td></tr><tr><td>
<table>
<tr><td>F1 - User can set their profile to be public or private (will need another column in Users table) ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F1 - If public, hide email address from other users</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - User will be able to rate a product they purchased ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F2 - Create table called Ratings (id, product_id, user_id, rating, comment, created)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - 1-5 rating</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - Text Comment (use TEXT data type in sql)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - Must be done on the Product Details Page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - Ratings and Rating Comments will be visible on the Product Details page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - Show the average rating on the Product Details Page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - User’s Purchase History Changes ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F3 - Filter by date range</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F3 - Filter by category</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F3 - Sort by total, date purchased, etc</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F3 - Add pagination</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - Store Owner Purchase History Changes ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F4 - Filter by Date Range</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - Filter by Category</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - Sort by total, date purchased, etc</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - Add pagination</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - The result page should show the accurate total price of the combined search results (i.e., if just 3 records show each of $25, it should show $75 total for this view)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F5 - Add pagination to Shop Page (and any other product lists not yet mentioned) ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F5 - pagination to Shop Page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F6 - Store Owner will be able to see all products out of stock ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F6 - This will be added as a filter to their product list page from Milestone 2</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F6 - Pagination should account for this new filter</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F6 - Recommended to have the filter applied as a given value (i.e., where quantity is <= value)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F7 - User can sort products by average rating on the Shop Page ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:</td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F7 - Hint: may want to add an “average rating” field to the Products table and update this value any time a new rating is given for the product</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="">
<p></p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone branch as the source)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board