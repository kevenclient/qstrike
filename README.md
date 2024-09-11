## Technical Exam Requirements

### Overview
Build an admin panel using the Laravel framework to manage factories and employees.

### Admin Panel Setup

1. **Create a Database Seed**

   Generate an initial administrator account:
   - **Email:** admin@admin.com
   - **Password:** password

2. **Set Up Authentication**

   Implement basic Laravel authentication to enable administrator login.

3. **Create Database Tables Using Migrations**

   Set up two tables:

   - **Factories**
     - `factory_name` (required)
     - `location` (required)
     - `email`
     - `website`

   - **Employees**
     - `firstname` (required)
     - `lastname` (required)
     - `factory_id` (foreign key)
     - `email`
     - `phone`

4. **Implement CRUD Operations**

   Enable full create, read, update, and delete operations for both factories and employees.

5. **Utilize Laravel's Resource Controllers**

   Implement the following standard methods:

   - `index`
   - `create`
   - `store`
   - `show`
   - `edit`
   - `update`
   - `destroy`

6. **Input Validation**

   Use Laravel's built-in validation features to ensure all input data meets the required formats and rules.

7. **Paginated Lists**

   Display a paginated list of factories and employees, showing 10 entries per page.

8. **Model Event Service**

   Create a Model Event Service to log user activities:

   - Track the following details:

     - Model name: Factories or Employees
     - Record ID
     - User ID
     - Changes made (log both old and new values for updates and the initial value for creations)

   - Log this activity to the `laravel.log` file.
