# php_run
This is a package for PHP-CLI that allows php code to be run as a command.

# Usage
php_run [-bs, -json, -timer, -noend] somePHPCode()

# Options
- **bs**: Escapes backslashes in the command, e.g. so you dont have to type \\\\ in file paths.
- **json**: Returns the return of the ran code as json to the console.
- **timer**: Adds a timer and says how long it took to run the code.
- **noend**: Stops the default behaviour of adding a semicolon at the end of the command.
