# Validator Pizza #

Symfony integration to the disposable email validator

For more info please see: https://www.validator.pizza

## Usage ##

Use this as a simple service:

For instance inside a controller:

```php
// Validate an email address :
$email = $this->get('thelan.validator_pizza')->validate('demo@example.com');

// Validate an domain:
$domain = $this->get('thelan.validator_pizza')->validate('example.com');

// check if the MX exist:
$email->isMx();

// Check if listed as disposable:
$email->isDisposable();
```

## Installation ##

### For Symfony >= 2.1.* ###

Require the bundle in your composer.json file:

```
{
    "require": {
        "thelan/validator-pizza": "~1.0",
    }
}
```

Register the bundle:

```php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // [...]
        new thelan\ValidatorPizzaBundle\ValidatorPizzaBundle(),
        // [...]
    );
}
```

Install the bundle:

```
$ composer update thelan/validator-pizza
```
