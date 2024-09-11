## Technical Exam Requirements

### Overview
Create an admin panel using Laravel framework to manage factories and employees. This should include database migrations, seeders, form request validations, and basic authentication. Implement full (CRUD) operations with pagination, and a model event service to log user activities.

### Admin Panel Setup

1. Create a database seed to generate initial administrator account:

    - **Email:** admin@admin.com
    - **Password:** password

2. Create a basic Laravel authentication to enable administrator login.

3. Create two database tables using migrations:

    - **Factories**
        - `factory_name` (required)
        - `location` (required)
        - `email`
        - `website`

    - **Employees**
        - `firstname` (required)
        - `lastname` (required)
        - `factory_id` (FK)
        - `email`
        - `phone`

4. Implement full create, read, update, and delete (CRUD) operations for both factories and employees.

5. Utilize Laravel's resource controllers with standard methods:

    - `index`
    - `create`
    - `store`
    - `show`
    - `edit`
    - `update`
    - `destroy`

6. Use Laravel's built-in validation features to ensure all input data meets the required formats and rules.

7. Display a paginated list of factories and employees, showing 10 entries per page.

8. Create a model event service to log user activities:

    - Track the following details:

        - Model name: Factories or Employees
        - Record ID
        - User ID
        - Changes made (log both old and new values for update and the initial value for creation)

    - Log this activity to the `laravel.log` file.
