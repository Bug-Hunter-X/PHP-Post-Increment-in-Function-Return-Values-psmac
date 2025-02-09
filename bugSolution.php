```php
function foo(int $x): int {
  $x++;
  return $x;
}

$result = foo(5);
echo $result; // Outputs 6

//Alternative using pre-increment:
function bar(int $x): int {
  return ++$x;
}

$result = bar(5);
echo $result; // Outputs 6
```