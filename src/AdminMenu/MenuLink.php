<?php

declare(strict_types=1);

namespace OpenFinancy\Component\AdminMenu;

final class MenuLink extends AbstractMenuComponent
{
    public function __construct(string $label, ?string $icon, string $route)
    {
        parent::__construct($label, $icon, $route, []);
    }

    public function hasChildren(): bool
    {
        return false;
    }

    /**
     * @return array<MenuComponent>
     */
    public function getChildren(): array
    {
        return [];
    }

    public function isGroup(): bool
    {
        return false;
    }
}
