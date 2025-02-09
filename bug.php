```php
function foo(int $x): int {
  return $x++;
}

$result = foo(5);
echo $result; // Outputs 5, not 6
```