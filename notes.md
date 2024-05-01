# Key notes about PHP

- PHP has a isset($variable) method to check if a variable exists and has a value. this method only check if a variable exists and it is usually used with && in conditional statement to check if the variable is true of false:

`
if(isset($variable)) && $variable {
//insert code
}else {
//insert code

}
`

PHP treats the following as false:

- 0 and string "0"as false
- '' , " " empty string
- NULL

An anonymous  function is somtimes calles a lamda
