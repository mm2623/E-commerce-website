# Project Name: (Which Project): Simple Shop
## Project Summary: (Copy from proposal): This project will create a simple e-commerce site for users. Administrators or store owners will be able to manage inventory and users will be able to manage their cart and place orders.
## Github Link: (Prod Branch of Project Folder)
## Project Board Link: 
## Website Link: (https://mm2623-prod.herokuapp.com/Project)
## Demo Link: (https://mediaspace.njit.edu/media/Project+shop+demonstration/1_o9d4su4r)
## Your Name: Muhammad Abdul Mannan

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

- [ ] \(12/02/2021 of completion) 

<table>
<tr><td>milestone 2</td></tr><tr><td>
<table>
<tr><td>F1 - User with an admin role or shop owner role will be able to add products to inventory (2021-12-02)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/admin/add_item.php](https://mm2623-prod.herokuapp.com/Project/admin/add_item.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/49](https://github.com/mm2623/IT202-007/pull/49)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - Table should be called Products (id, name, description, category, stock, created, modified, unit_price, visibility [true, false])</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145479600-79026e5b-5a37-4f49-a993-6306e902a3f4.png">
<p>Screenshot #1 Showing product table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - Any user will be able to see products with visibility = true on the Shop page (2021-12-02)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/shop.php](https://mm2623-prod.herokuapp.com/Project/shop.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/50](https://github.com/mm2623/IT202-007/pull/50)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Product list page will be public (i.e. doesn’t require login)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145499367-30811d10-8ded-4a3b-9db5-0040ede707b9.png">
<p>Screenshot #1 Showing shop page when not login.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - User will be able to filter results by category</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145499622-0ea1fe9a-b5da-4c40-863b-fcb945ee4356.png">
<p>Screenshot #1 Showing items in shop page are in category order.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - User will be able to filter results by partial matches on the name</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145499918-7f119184-eb37-4bd1-9673-363bd4fd6c7e.png">
<p>Screenshot #1 Showing items in shop page are filter by partial matches on the name.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - User will be able to sort results by price</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145500326-95d6618c-95df-4bed-b60b-33db01cc426b.png">
<p>Screenshot #1 Showing items in shop page are sort by price.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - Admin/Shop owner will be able to see products with any visibility (2021-12-02)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/admin/list_items.php](https://mm2623-prod.herokuapp.com/Project/admin/list_items.php)</p><p>

 [https://mm2623-prod.herokuapp.com/Project/admin/list_roles.php](https://mm2623-prod.herokuapp.com/Project/admin/list_roles.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/51](https://github.com/mm2623/IT202-007/pull/51)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - This should be a separate page from Shop, but will be similar</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145502408-de0f056c-f644-4c4d-b013-003ff94f1cea.png">
<p>Screenshot #1 Showing items in list item page so Admin/Shop owner will be able to see products.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F3 - This page should only be accessible to the appropriate role(s)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145502956-52354a3c-24ea-45bb-a995-7dbb6c8a4367.png">
<p>Screenshot #1 Showing users with admin access in list role page so this page is to be only accessible by appropriate roles.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - Admin/Shop owner will be able to edit any product (2021-12-02)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/admin/edit_item.php](https://mm2623-prod.herokuapp.com/Project/admin/edit_item.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/51](https://github.com/mm2623/IT202-007/pull/51)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - Edit button should be accessible for the appropriate role(s) anywhere a product is shown (Shop list, Product Details Page, etc)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145510488-4ea1623e-314f-4a34-8192-fb8f87b80516.png">
<p>Screenshot #1 Showing that admin/shop owner have access to edit item in edit item page.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F5 - User will be able to click an item from a list and view a full page with more info about the item  (2021-12-02)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/product_detail.php](https://mm2623-prod.herokuapp.com/Project/product_detail.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/52](https://github.com/mm2623/IT202-007/pull/52)</p></td></tr>
<tr><td>
<table>
<tr><td>F5 - Product Details Page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145511173-ebbcbacc-4c1d-449a-a66c-5ff7e7282bf1.png">
<p>Screenshot #1 Showing product detail in product detail page so any user, login or not login can be able to see it.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F6 - User must be logged in for any Cart related activity below (2021-12-02)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/shop.php](https://mm2623-prod.herokuapp.com/Project/shop.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/50](https://github.com/mm2623/IT202-007/pull/50)</p></td></tr>
<tr><td>
<table>
<tr><td>F6 - Login to view cart</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145511820-bbbd6c10-8f0d-414e-b4c2-13a16c5d052e.png">
<p>Screenshot #1 Showing user must be login to view cart from shop page.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F7 - User will be able to add items to Cart (2021-12-02)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/cart.php](https://mm2623-prod.herokuapp.com/Project/cart.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/53](https://github.com/mm2623/IT202-007/pull/53)</p></td></tr>
<tr><td>
<table>
<tr><td>F7 - Cart will be table-based (id, product_id, user_id, desired_quantity, unit_cost, created, modified)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145513746-e51222d4-0035-47f4-a567-dc0c086ef8de.png">
<p>Screenshot #1 Showing cart table with users and their items with quantity.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F7 - Adding items to Cart will not affect the Product's quantity in the Products table</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145513958-88e260bf-ac09-4092-a57c-f87301c7114a.png">
<p>Screenshot #1 Showing item is added to cart from shop.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F8 - User will be able to see their cart (2021-12-02)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/cart.php](https://mm2623-prod.herokuapp.com/Project/cart.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/53](https://github.com/mm2623/IT202-007/pull/53)</p></td></tr>
<tr><td>
<table>
<tr><td>F8 - List all the items</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145514780-fd97049c-d7a1-461b-bba3-5f2cf38a61a8.png">
<p>Screenshot #1 Showing all the items of the user in the cart.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Show subtotal for each line item based on desired_quantity * unit_cost</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145514780-fd97049c-d7a1-461b-bba3-5f2cf38a61a8.png">
<p>Screenshot #1 Showing subtotal of each item in the cart.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Show total cart value (sum of line item subtotals)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145514780-fd97049c-d7a1-461b-bba3-5f2cf38a61a8.png">
<p>Screenshot #1 Showing total cart value of all items in the cart.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F8 - Will be able to click an item to see more details (Product Details Page)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145514780-fd97049c-d7a1-461b-bba3-5f2cf38a61a8.png">
<p>Screenshot #1 Showing clickable item name for product detail in the cart.</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145511173-ebbcbacc-4c1d-449a-a66c-5ff7e7282bf1.png">
<p>Screenshot #2 Showing product detail page after clicking item name in the cart.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F9 - User will be able to change quantity of items in their cart (2021-12-02)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/cart.php](https://mm2623-prod.herokuapp.com/Project/cart.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/53](https://github.com/mm2623/IT202-007/pull/53)</p></td></tr>
<tr><td>
<table>
<tr><td>F9 - Quantity of 0 should also remove from cart</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145516091-01bd943e-5145-4e78-83f9-57ed25160c5c.png">
<p>Screenshot #1 Showing item removed from the cart when quantity is set to 0.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F10 - User will be able to remove a single item from their cart vai button click (2021-12-02)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/cart.php](https://mm2623-prod.herokuapp.com/Project/cart.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/53](https://github.com/mm2623/IT202-007/pull/53)</p></td></tr>
<tr><td>
<table>
<tr><td>F10 - Remove single item</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145516349-daeca78c-f614-452a-b3fd-66c7980ac71a.png">
<p>Screenshot #1 Showing item removed from the cart when clicking remove button.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F11 - User will be able to clear their entire cart via a button click (2021-12-02)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/cart.php](https://mm2623-prod.herokuapp.com/Project/cart.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/53](https://github.com/mm2623/IT202-007/pull/53)</p></td></tr>
<tr><td>
<table>
<tr><td>F11 - Empty the cart</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/145516551-6f0d44f6-21a9-48c5-8d39-6ac0dec99991.png">
<p>Screenshot #1 Showing all item removed from the cart when clicking empty the cart button.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>
- Milestone 3

- [ ] \(12/10/2021)
  
<table>
<tr><td>milestone 3</td></tr><tr><td>
<table>
<tr><td>F1 - User will be able to purchase items in their Cart (2021-12-10)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/checkout.php](https://mm2623-prod.herokuapp.com/Project/checkout.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/67](https://github.com/mm2623/IT202-007/pull/67)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - Create an Orders table (id, user_id, created, total_price, address, payment_method)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/146705794-debee09a-8750-4e26-a5a9-1619ce9c5b0b.png">
<p>Screenshot #1 Showing the order Table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - Create an OrderItems table (id, order_id, product_id, quantity, unit_price)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/146708510-422c9378-a8c2-4fc9-b5aa-2c3a120b6aa9.png">
<p>Screenshot #1 Showing the order Item table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - Checkout Form</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/146708648-1d487aba-d739-4bf2-aad4-bba915ad26a9.png">
<p>Screenshot #1 Showing the checkout page</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - User will be asked for their Address for shipping purposes</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/146708874-fd57deb7-a50d-4689-bde6-250716e49072.png">
<p>Screenshot #1 Shows a flash message when address is not entered.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - Order process</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/146705794-debee09a-8750-4e26-a5a9-1619ce9c5b0b.png">
<p>Screenshot #1 Showing the order is created in order table</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/146708510-422c9378-a8c2-4fc9-b5aa-2c3a120b6aa9.png">
<p>Screenshot #2 Showing the order item is added in order items table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - Order Confirmation Page (2021-12-10)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/confirmation.php](https://mm2623-prod.herokuapp.com/Project/confirmation.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/68](https://github.com/mm2623/IT202-007/pull/68)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Show the entire order details from the Order and OrderItems table (similar to cart)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/146804319-506abb73-2c0b-4a28-8672-bd71e7a57424.png">
<p>Screenshot #1 Showing the order details from the Order and OrderItems table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - Displays a Thank you message</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/146804319-506abb73-2c0b-4a28-8672-bd71e7a57424.png">
<p>Screenshot #1 Showing a Thank you message</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - User will be able to see their Purchase History (2021-12-10)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/purchase_history.php](https://mm2623-prod.herokuapp.com/Project/purchase_history.php)</p><p>

 [https://mm2623-prod.herokuapp.com/Project/purchase_deatil_page.php](https://mm2623-prod.herokuapp.com/Project/purchase_deatil_page.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/69](https://github.com/mm2623/IT202-007/pull/69)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - For now limit to 10 most recent orders</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/146807216-04866c69-b455-429c-b094-fa24050809a5.png">
<p>Screenshot #1 Showing the list of order placed by the user with total amount paid and when the ordered is placed.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F3 - A list item can be clicked to view the full details in the Order Details Page (similar to Order Confirmation Page except no “Thank you” message)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/146817358-8fbf28a3-8438-4ffe-acb2-93b84aa95146.png">
<p>Screenshot #1 Showing order detail page when list item clicked</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - Store Owner will be able to see all Purchase History (2021-12-10)</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/purchase_history.php](https://mm2623-prod.herokuapp.com/Project/purchase_history.php)</p><p>

 [https://mm2623-prod.herokuapp.com/Project/purchase_deatil_page.php](https://mm2623-prod.herokuapp.com/Project/purchase_deatil_page.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/69](https://github.com/mm2623/IT202-007/pull/69)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - For now limit to 10 most recent orders</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/146816717-22617ae2-b3dd-4eb2-9041-f5258494ea96.png">
<p>Screenshot #1 Showing the list of order placed by all the users with their total amount paid and when the ordered is placed.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - A list item can be clicked to view the full details in the Order Details Page (similar to Order Confirmation Page except no “Thank you” message)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/146817358-8fbf28a3-8438-4ffe-acb2-93b84aa95146.png">
<p>Screenshot #1 Showing order detail page when list item clicked</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>

- Milestone 4
- [ ] \(12/23/2021 of completion)

<table>
<tr><td>milestone 4</td></tr><tr><td>
<table>
<tr><td>F1 - User can set their profile to be public or private (will need another column in Users table) (2021-12-21)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/profile.php](https://mm2623-prod.herokuapp.com/Project/profile.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/74](https://github.com/mm2623/IT202-007/pull/74)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - If public, hide email address from other users</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147289566-d4cf37cf-4f23-4fca-b01c-0e2ecc34b76c.png">
<p>Screenshot #1 Showing the user can set their profile to public or private in their profile page.</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147289436-a5b4bae6-7d46-4c2c-b37c-3fa0bd9ed7f4.png">
<p>Screenshot #2 Showing that when view someone else profile and it set to public then you cannot see their email address.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - User will be able to rate a product they purchased (2021-12-21)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/product_detail.php](https://mm2623-prod.herokuapp.com/Project/product_detail.php)</p><p>

 [https://mm2623-prod.herokuapp.com/Project/purchase_detail_page.php](https://mm2623-prod.herokuapp.com/Project/purchase_detail_page.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/75](https://github.com/mm2623/IT202-007/pull/75)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Create table called Ratings (id, product_id, user_id, rating, comment, created)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147289805-ee14920a-0e65-49ab-ba8c-f0820d559020.png">
<p>Screenshot #1 Showing the Rating table</p>
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
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147289675-89f68be6-1dcd-4aae-9b90-6047a6fd387f.png">
<p>Screenshot #1 Showing that user can only rate from 1 to 5.</p>
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
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147289805-ee14920a-0e65-49ab-ba8c-f0820d559020.png">
<p>Screenshot #1 Showing that table data type for comment is set to TEXT.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - Must be done on the Purchase Details Page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147289675-89f68be6-1dcd-4aae-9b90-6047a6fd387f.png">
<p>Screenshot #1 Showing that user can only rate and comment from their order Purchase Details Page</p>
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
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147290018-b2eb8367-a2f9-4072-92d9-d5d2f1ddfa18.png">
<p>Screenshot #1 Showing the rating and its comment on Product Details page</p>
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
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147290018-b2eb8367-a2f9-4072-92d9-d5d2f1ddfa18.png">
<p>Screenshot #1 Showing average rating on Product Details page</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - User’s Purchase History Changes (2021-12-21)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/purchase_history.php](https://mm2623-prod.herokuapp.com/Project/purchase_history.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/76](https://github.com/mm2623/IT202-007/pull/76)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - Filter by date range</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147290351-fffb0677-4eb2-4dee-a520-65e50f0d97bc.png">
<p>Screenshot #1 Showing sort by date range from 12/22/2021 to 12/24/2021</p>
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
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147290718-4b1be21d-8e49-48ca-875f-fbf732983b6c.png">
<p>Screenshot #1 Showing the sort by category</p>
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
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147290503-79e9972d-f713-484a-ab9b-9c1e515811f4.png">
<p>Screenshot #1 Showing the sort by total cost</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147290621-fbf16710-274d-4132-b75d-3c80af4e4bb4.png">
<p>Screenshot #2 Showing the sort by date purchased</p>
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
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147290621-fbf16710-274d-4132-b75d-3c80af4e4bb4.png">
<p>Screenshot #1 Showing the pagination is added to the page</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - Store Owner Purchase History Changes (2021-12-21)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/purchase_history.php](https://mm2623-prod.herokuapp.com/Project/purchase_history.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/76](https://github.com/mm2623/IT202-007/pull/76)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - Filter by Date Range</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147291006-257e6b3b-59e7-4c40-b1a3-94fdd3282bd6.png">
<p>Screenshot #1 Showing the sort by Date Range</p>
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
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147291207-19ad4eae-5376-46d4-9ca7-fea7bef4d67c.png">
<p>Screenshot #1 Showing the sort by Category</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147291286-ac042cf3-5fce-4431-b737-8c5a827fa5b9.png">
<p>Screenshot #1 Showing the other half of page</p>
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
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147291363-9c538ece-be79-4185-892c-41b97a032607.png">
<p>Screenshot #1 Showing the sorting by total cost</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147291443-8542d4c2-0c8e-4c65-852f-be361b012089.png">
<p>Screenshot #2 Showing the other half of page</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147291505-a3d65d1c-e8fc-49fb-b46c-6326bbdcf13c.png">
<p>Screenshot #1 Showing the sorting by date purchased</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147291589-2a703155-65ad-45fb-815b-13331eed2cb1.png">
<p>Screenshot #2 Showing the other half of page</p>
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
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147292138-ec69053b-6761-4a25-b737-b52a0cf91463.png">
<p>Screenshot #1 Showing the header of the page for the second screenshot</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147292040-c822b69e-dc02-4eee-9b5f-662442f34b7d.png">
<p>Screenshot #2 Showing the Purchase History page with pagination</p>
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
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147292138-ec69053b-6761-4a25-b737-b52a0cf91463.png">
<p>Screenshot #1 Showing the header of the page for the second screenshot</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147292040-c822b69e-dc02-4eee-9b5f-662442f34b7d.png">
<p>Screenshot #2 Showing the combined total price of the page</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F5 - Add pagination to Shop Page (and any other product lists not yet mentioned) (2021-12-21)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/shop.php](https://mm2623-prod.herokuapp.com/Project/shop.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/77](https://github.com/mm2623/IT202-007/pull/77)</p></td></tr>
<tr><td>
<table>
<tr><td>F5 - pagination to Shop Page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147235601-354ab2d6-d681-403b-9113-ac3344dcaebc.png">
<p>Screenshot #1 Showing the pagination to shop page</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F6 - Store Owner will be able to see all products out of stock (2021-12-21)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/shop.php](https://mm2623-prod.herokuapp.com/Project/shop.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/77](https://github.com/mm2623/IT202-007/pull/77)</p></td></tr>
<tr><td>
<table>
<tr><td>F6 - This will be added as a filter to their product list page from Milestone 2</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147234854-a190ba41-e5a9-4582-a6ef-3cd228dda94b.png">
<p>Screenshot #1 Showing that Admin can sort out of stock product</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147235114-52306985-13aa-4e8e-a506-872c899cb739.png">
<p>Screenshot #2 Showing that the product above has stock 0.</p>
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
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147235601-354ab2d6-d681-403b-9113-ac3344dcaebc.png">
<p>Screenshot #1 Showing the pagination without sort</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147235880-f78799d6-1949-4468-ad5d-bb88614ef502.png">
<p>Screenshot #2 Showing the pagination when sorting out of stock products</p>
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
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147237228-afa7ca05-6dff-4534-bb8f-74ae1408e3ac.png">
<p>Screenshot #1 Showing the code where filter is applied but in a different way.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F7 - User can sort products by average rating on the Shop Page (2021-12-21)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mm2623-prod.herokuapp.com/Project/shop.php](https://mm2623-prod.herokuapp.com/Project/shop.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/mm2623/IT202-007/pull/77](https://github.com/mm2623/IT202-007/pull/77)</p></td></tr>
<tr><td>
<table>
<tr><td>F7 - Hint: may want to add an “average rating” field to the Products table and update this value any time a new rating is given for the product</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147234272-d1550b0d-fcef-4fbe-a3c0-e521c65d42f2.png">
<p>Screenshot #1 Showing the sorted products by average rating from low to high.</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90267420/147234565-61244486-e527-456d-ba26-325de31f64d5.png">
<p>Screenshot #2 Showing the sorted products by average rating from high to low.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F8 - Demo (2021-12-21)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://mediaspace.njit.edu/media/Project+shop+demonstration/1_o9d4su4r](https://mediaspace.njit.edu/media/Project+shop+demonstration/1_o9d4su4r)</p></td></tr>
<tr><td>PRs:</td></tr>
<tr><td>
<table>
<tr><td>F8 - just submitting the link above as well</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

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
