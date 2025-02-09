# PHP Post-Increment Gotcha
This example demonstrates a subtle, yet common, error related to PHP's post-increment operator (`++`) when used within a function's return statement.  The post-increment operator increments the variable *after* its value is returned.

The `bug.php` file contains the buggy code. The `bugSolution.php` file provides a corrected version.

## How to reproduce
Clone the repository and run `bug.php`.  Observe the unexpected output (5 instead of 6).

## Solution
The solution involves ensuring the variable is incremented before the return statement, or using the pre-increment operator.