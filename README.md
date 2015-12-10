[![Build Status](https://travis-ci.org/PortaText/php-sdk.svg)](https://travis-ci.org/PortaText/php-sdk)
[![Latest Stable Version](https://poser.pugx.org/portatext/php-sdk/v/stable)](https://packagist.org/packages/portatext/php-sdk)
[![Total Downloads](https://poser.pugx.org/portatext/php-sdk/downloads)](https://packagist.org/packages/portatext/php-sdk)
[![Latest Unstable Version](https://poser.pugx.org/portatext/php-sdk/v/unstable)](https://packagist.org/packages/portatext/php-sdk)
[![License](https://poser.pugx.org/portatext/php-sdk/license)](https://packagist.org/packages/portatext/php-sdk)

# php-sdk
PHP Client for the PortaText API.

# Installing
Add this library to your [Composer](https://packagist.org/) configuration. In
composer.json:
```json
  "require": {
    "portatext": "1.*"
  }
```

# Developers
This project uses [phing](https://www.phing.info/). Current tasks include:
 * test: Runs [PHPUnit](https://phpunit.de/).
 * cs: Runs [CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer).
 * doc: Runs [PhpDocumentor](http://www.phpdoc.org/).
 * build: This is the default task, and will run all the other tasks.

To run a task, just do:

```sh
vendor/bin/phing build
```

# License
The source code is released under Apache 2 License.

Check [LICENSE](https://github.com/PortaText/php-sdk/blob/master/LICENSE) file for more information.
