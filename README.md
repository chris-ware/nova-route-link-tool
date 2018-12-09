# Nova Route Link Tool
Nova Tool for linking to website routes


[![Latest Stable Version](https://badgen.net/packagist/v/chris-ware/nova-route-link-tool)](https://packagist.org/packages/chris-ware/nova-route-link-tool)
[![Total Downloads](https://badgen.net/packagist/dt/chris-ware/nova-route-link-tool)](ttps://packagist.org/packages/chris-ware/nova-route-link-tool)
[![License](https://badgen.net/packagist/license/chris-ware/nova-route-link-tool)](ttps://packagist.org/packages/chris-ware/nova-route-link-tool)
[![StyleCI](https://github.styleci.io/repos/161075536/shield?branch=master)](https://github.styleci.io/repos/161075536)

 ## Installation

You can install the package in to a Laravel app that uses [Nova](https://nova.laravel.com) via composer:

```bash
composer require chris-ware/nova-route-link-tool
```

Next, you must register the card with Nova. This is typically done in the `cards` method of the `NovaServiceProvider`.

```php
// in app/Providers/NovaServiceProvder.php

// ...
public function tools()
{
    return [
        // ...
        \ChrisWare\NovaRouteLinkTool\NovaRouteLinkTool::make(),
    ];
}
```

 ## Customization
 You are able to customize the route name, the label and the target.

```php
// in app/Providers/NovaServiceProvder.php

// ...
public function cards()
{
    return [
        // ...
        \ChrisWare\NovaRouteLinkCard\NovaRouteLinkCard::make($route, $label, $target)
    ];
}
```
