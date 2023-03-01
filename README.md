# StringLib
- Its a library made to facilitate some text tasks

# Examples
- ### QuotationMarks
```php
$text = 'The best developer is "Laith98Dev"';

$quotations = StringLib::getQuotationMarks($text)->asArray();

var_dump($quotations);
```
The result of above code is 
```
array(1) {
  [0]=>
  string(10) "Laith98Dev"
}
```
Also you can use single quotation instead of the double quotation
```php
$text = "The best developer is 'Laith98Dev'";

$quotations = StringLib::getQuotationMarks($text, "'")->asArray();

var_dump($quotations);
```
and the same result 
```
array(1) {
  [0]=>
  string(10) "Laith98Dev"
}
```

- ### String Shift
```php
$text = "My name is Laith98Dev";

$shifted = StringLib::str_shift($text)->asString();

var_dump($shifted);
var_dump($text);
```
The result of above code is 
```
string(1) "M"
string(20) "y name is Laith98Dev"
```
