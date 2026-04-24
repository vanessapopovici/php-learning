# PHP Learning Journey
This repository tracks my progress as I learn PHP through the **Laracasts "PHP for Beginners"** course.

## Project Structure
- **/controllers**: Contains the logic for specific pages like `about.php` and `contact.php`.
- **/views**: Contains the HTML templates (view files).
- **/views/partials**: Reusable components like the header, navigation, and footer.
- **functions.php**: Common helper functions like `dd()` and `urlIs()`.
- **router.php**: The mapping system that directs URIs to their respective controller files.

## What I've Learned So Far
- Separating logic from presentation using `.view.php` files.
- Superglobals like `$_SERVER['REQUEST_URI']`.
- Requiring files to keep code DRY (Don't Repeat Yourself).
- Creating a Front Controller to direct all traffic through `index.php`.
- Building a custom Router to map URLs to specific controller files.
- Using `.htaccess` to create clean URLs (like `/about` instead of `/about.php`).
- Setting HTTP status codes and creating custom 404 error pages.
- Using `parse_url()` to handle clean path matching in the router.
- Connecting to a MySQL database using a Data Source Name (DSN) string.
- Creating a PDO instance to manage database connections.
- Fetching database results into associative arrays using `fetchAll(PDO::FETCH_ASSOC)`.
