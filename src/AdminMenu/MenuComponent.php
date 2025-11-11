<?php

declare(strict_types=1);

namespace OpenFinancy\Component\AdminMenu;

interface MenuComponent
{
    public function getLabel(): string;

    public function getIcon(): ?string;

    public function getRoute(): ?string;

    /**
     * @return iterable<MenuComponent>
     */
    public function getChildren(): iterable;

    public function hasChildren(): bool;

    public function isGroup(): bool;
}
