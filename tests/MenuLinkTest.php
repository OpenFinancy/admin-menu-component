<?php

declare(strict_types=1);

namespace OpenFinancy\Component\AdminMenu\Tests;

use OpenFinancy\Component\AdminMenu\MenuLink;
use PHPUnit\Framework\TestCase;

final class MenuLinkTest extends TestCase
{
    public function testLinkDoesNotExposeChildren(): void
    {
        $link = new MenuLink('Dashboard', 'bi bi-speedometer2', 'admin_dashboard');

        self::assertFalse($link->isGroup());
        self::assertSame('Dashboard', $link->getLabel());
        self::assertSame('bi bi-speedometer2', $link->getIcon());
        self::assertSame('admin_dashboard', $link->getRoute());
        self::assertFalse($link->hasChildren());
        self::assertSame([], $link->getChildren());
    }
}
