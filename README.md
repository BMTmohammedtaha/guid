# Bmt\Guid

`Bmt\Guid` is a PHP package that provides a `GuidGenerator` class for generating a GUID (Globally Unique Identifier) incorporating a custom key.

## Installation

You can install the `Bmt\Guid` package via Composer by running the following command:

```shell
composer require bmt/guid
```

## Usage

To generate a GUID, follow these steps:

1. Instantiate the `Bmt\Guid\GuidGenerator` class.
2. Call the `generateGuid()` method, passing an optional custom key as a parameter.
3. The method will return the generated GUID as a string.

```php
<?php

use Bmt\Guid\GuidGenerator;

// Instantiate the GuidGenerator class (if needed)

$customKey = 'my_custom_key'; // Optional: Provide a custom key
$guid = GuidGenerator::generateGuid($customKey);
echo $guid;
```

### Method

#### `generateGuid(string $customKey = ''): string`

This method generates a GUID incorporating a custom key.

##### Parameters

- `$customKey` (optional): Custom key to incorporate into the GUID. Defaults to an empty string.

##### Return Value

- Returns the generated GUID as a string.

## Requirements

- PHP 5.4 or higher

## License

This project is licensed under the [MIT License](LICENSE).