# Dump variable

Sometimes you might want to dump a variable with a name in php in the same way js does:

```js
let name = "foo";

console.log({ name });

// { name: 'foo'}
```

You can do this with `dv()` or `dvd()` in php:

```php
$name = 'foo';

// dump with variable
dv($name);

// dd with variable
dvd($name);

// [ '$name' => 'foo' ]
```

## Installation

```bash
composer require pkboom/dump-variable --dev
```
