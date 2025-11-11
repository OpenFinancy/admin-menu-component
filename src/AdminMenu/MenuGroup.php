<?php

declare(strict_types=1);

namespace OpenFinancy\Component\AdminMenu;

final class MenuGroup extends AbstractMenuComponent
{
    /**
     * @param iterable<MenuComponent> $children
     */
    public function __construct(string $label, ?string $icon = null, iterable $children = [])
    {
        parent::__construct($label, $icon, null, $children);
    }

    public function getRoute(): ?string
    {
        return null;
    }

    public function isGroup(): bool
    {
        return true;
    }
}
