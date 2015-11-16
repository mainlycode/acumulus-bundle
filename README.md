mainlycode/acumulus-bundle
==========================

Symfony bundle for `nexttalent/acumulus` library

## Installation

Add the bundle to your composer.json

```bash
$ composer require mainlycode/acumulus-bundle 0.1.*@dev
```

Add the bundle to your Kernel

```php
$bundles = array(
    // ..
    new MainlyCode\Bundle\AcumulusBundle\AcumulusBundle(),
);
```

## Configuration

```yaml
parameters:
    acumulus.contractcode: # your Acumulus contract code
    acumulus.username:     # your Acumulus username
    acumulus.password:     # your Acumulus password
```
