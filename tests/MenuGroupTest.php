<?php

declare(strict_types=1);

namespace OpenFinancy\Component\AdminMenu\Tests;

use OpenFinancy\Component\AdminMenu\MenuGroup;
use OpenFinancy\Component\AdminMenu\MenuLink;
use PHPUnit\Framework\TestCase;

final class MenuGroupTest extends TestCase
{
    public function testGroupExposesChildren(): void
    {
        $links = [
            new MenuLink('Dashboard', 'bi bi-speedometer2', 'admin_dashboard'),
            new MenuLink('Setup', null, 'admin_setup'),
        ];

        $group = new MenuGroup('Menu', 'bi bi-menu', $links);

        self::assertTrue($group->isGroup());
        self::assertSame('Menu', $group->getLabel());
        self::assertNull($group->getRoute());
        self::assertTrue($group->hasChildren());
        self::assertSame($links, $group->getChildren());
    }
}
