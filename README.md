NmbTwigExtensionsBundle
=======================

Some Twig functions and filters i wanna use on my symfony projects

## Installation

Add NmbTwigExtensionsBundle to your composer.json

```js
{
    "require": {
        "nmb/twig-extensionsbundle": "dev-master"
    }
}
```

Download the bundle by runung the command
``` bash
$php composer.phar update nmb/twig-extensions-bundle
```

Add the bundle to your app/AppKernel.php
``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Nmb\TwigExtensionsBundle\NmbTwigExtensionsBundle(),
    );
}
```

## Usage
In your twig template 
``` twig
{{ getParameter('my_parameter') }}
```
