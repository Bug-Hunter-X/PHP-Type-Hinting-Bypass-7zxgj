# PHP Type Hinting Bypass

This repository demonstrates a common yet subtle bug in PHP related to type hinting bypass. Type hinting, while helpful in improving code quality and catching errors early, can be circumvented if functions are called with incompatible argument types. This can lead to unexpected results and difficult-to-trace errors.

The `bug.php` file shows a function with type hinting.  The `bugSolution.php` file demonstrates how to improve the code to handle such situations robustly.

## Bug
The `foo()` function in `bug.php` is declared with type hinting for integers. However, if you pass non-integer arguments, PHP will perform type juggling instead of throwing an error, leading to incorrect results. 

## Solution
The `bugSolution.php` file offers a more robust version of the `foo()` function that performs argument validation before proceeding with the calculation. This prevents unexpected results and makes the code more reliable.

## How to reproduce the bug
1. Clone this repository.
2. Execute `bug.php` with various argument types (integer, string, float) and observe the output.
3. Execute `bugSolution.php` with the same arguments to see how the improved validation handles these inputs.