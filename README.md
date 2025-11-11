# OpenFinancy Admin Menu Component

[![CI](https://github.com/openfinancy/admin-menu-component/actions/workflows/ci.yml/badge.svg)](https://github.com/openfinancy/admin-menu-component/actions/workflows/ci.yml)

Composite-based menu primitives shared across the OpenFinancy Symfony services. The package exposes lightweight tree objects (`MenuGroup`, `MenuLink`, etc.) under the `OpenFinancy\Component\AdminMenu` namespace so each project can render consistent administration navigation without re-implementing the pattern.

## Installation

```bash
composer require openfinancy/admin-menu-component:^0.1
```

The component targets **PHP 8.4+** and contains no Symfony-specific dependencies, making it reusable in any PHP application that relies on composite menu trees.

## Key Features

- `MenuComponent` interface and `AbstractMenuComponent` base class implementing the composite pattern.
- Concrete `MenuGroup` and `MenuLink` types for hierarchical navigation structures.
- Immutable value objects with typed children for simple serialisation or templating.
- Thorough PHPUnit coverage to ensure behaviour remains stable across projects.

## Usage

```php
use OpenFinancy\Component\AdminMenu\MenuGroup;
use OpenFinancy\Component\AdminMenu\MenuLink;

$menu = [
    new MenuGroup('Dashboard', 'bi bi-speedometer2', [
        new MenuLink('Overview', 'bi bi-graph-up', 'admin_dashboard'),
        new MenuLink('Health', 'bi bi-heart-pulse', 'admin_health'),
    ]),
    new MenuGroup('Configuration', 'bi bi-sliders', [
        new MenuLink('Service Settings', 'bi bi-gear', 'admin_service_configuration'),
    ]),
];
```

Render the resulting structure using Twig, Blade, or your templating engine of choice.

## Development

Run the bundled Composer scripts before submitting changes:

```bash
composer test
composer analyse
composer lint
```

The scripts execute PHPUnit, PHPStan and PHP-CS-Fixer respectively.

## Documentation

- `CHANGELOG.md` tracks release history.
- The `tests/` directory demonstrates expected behaviour.

## License

Distributed under the **European Union Public Licence v1.2 (EUPL-1.2)**. See the `LICENSE` file for the full text.


