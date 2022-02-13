# Dump variable

Sometimes you might want to dump a variable with a name in php in the same way js does:

```js
let name = "foo";

console.log({ name });

// { name: 'foo'}
```

You can do this with `dv()` in php:

```php
$name = 'foo';

// dump with variable
dv($name);

// [ 'name' => 'foo' ]

// dd with variable
dvd($name);
```
