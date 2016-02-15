# phpci-composer-security-checker

This PHPCI plugin allow you to check your composer.lock using https://security.sensiolabs.org/

## Install

* Add hipay/phpci-composer-security-checker in your composer.json:

```yml
[...]
    "require": {
        [...]
        "hipay/phpci-composer-security-checker": "dev-master",
        [...]
    },
[...]
```

* Run composer require hipay/hipay/phpci-composer-security-checker
* Copy javascript to PHPCI :

```bash
    cp /path/to/phpci/vendor/hipay/hipay/phpci-composer-security-checker/Hipay/PHPCI/Plugin/js/composer-security-check.js /path/to/phpci/public/assets/js/build-plugins/composer-security-check.js
```

* Add this line to your phpci.yml:
```yml
    \Hipay\PHPCI\Plugin\ComposerChecker:
```
