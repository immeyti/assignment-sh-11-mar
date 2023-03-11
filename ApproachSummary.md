# Approach Summary

I initially considered using both the `Factory-Method` and `Strategy` design patterns. However, after considering the time (4 hours) and the need for simplicity, I decided to proceed with just the `Factory-Method` pattern.

Using the Factory-Method pattern, I plan to create objects from inputs that have the same properties and methods, allowing me to process input data more efficiently. To simplify the calculations, I will convert all distance units to `meters` first and then perform the necessary arithmetic operations. Once the result is obtained, I will then convert it to the desired unit specified by the user.

To handle invalid inputs, I plan to include validation checks to ensure that the input data consists of valid numbers and that the distance units are either meters or yards.
