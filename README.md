# php-helper
Common PHP Function get / post / cookie

get($variable, custom function to run when value is returned, What to Return if False (function or variable), Type of Return "int", "bool", "float", "string" : Default "string")

**Examples:<br>**
*http://localhost/?roundup=52.23*
```
$var = get("roundup",  function($value) {
	return ceil($value);
}, function() {
	die("roundup not set");
}, "int");
/// returnes 52
```
*http://localhost/?foo=simpson*
```
$var = get("foo", false, 'bar', "string");
/// returns simpson
```

*http://localhost*
```
$var = get("foo", false, 'bar', "string");
/// returns bar
```


```
$auth_cookie = cookie("ticket",  function($value) {
	/// Validate Ticket Code Here
	return $value;
}, function() {
	// Create New Ticket Since One Does Not Exist
	return $ticket;
}, "string");
```
