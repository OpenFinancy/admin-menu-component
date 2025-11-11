<?php

declare(strict_types=1);

namespace OpenFinancy\Component\AdminMenu;

abstract class AbstractMenuComponent implements MenuComponent
{
    /**
     * @var array<MenuComponent>
     */
    protected array $children;

    /**
     * @param iterable<MenuComponent> $children
     */
    public function __construct(
        protected readonly string $label,
        protected readonly ?string $icon = null,
        protected readonly ?string $route = null,
        iterable $children = []
    ) {
        $this->children = is_array($children) ? $children : iterator_to_array($children);
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function getRoute(): ?string
    {
        return $this->route;
    }

    /**
     * @return array<MenuComponent>
     */
    public function getChildren(): array
    {
        return $this->children;
    }

    public function hasChildren(): bool
    {
        return $this->children !== [];
    }

    abstract public function isGroup(): bool;
}
