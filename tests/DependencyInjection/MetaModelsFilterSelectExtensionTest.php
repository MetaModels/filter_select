<?php

/**
 * This file is part of MetaModels/filter_select.
 *
 * (c) 2012-2024 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels/filter_select
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Ingolf Steinhardt <info@e-spin.de>
 * @copyright  2012-2024 The MetaModels team.
 * @license    https://github.com/MetaModels/filter_select/blob/master/LICENSE LGPL-3.0-or-later
 * @filesource
 */

namespace MetaModels\FilterSelectBundle\Test\DependencyInjection;

use MetaModels\FilterSelectBundle\DependencyInjection\MetaModelsFilterSelectExtension;
use MetaModels\FilterSelectBundle\FilterSetting\SelectFilterSettingTypeFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

/**
 * This test case test the extension.
 *
 * @covers \MetaModels\FilterSelectBundle\DependencyInjection\MetaModelsFilterSelectExtension
 */
class MetaModelsFilterSelectExtensionTest extends TestCase
{
    public function testInstantiation(): void
    {
        $extension = new MetaModelsFilterSelectExtension();

        $this->assertInstanceOf(MetaModelsFilterSelectExtension::class, $extension);
        $this->assertInstanceOf(ExtensionInterface::class, $extension);
    }

    public function testFactoryIsRegistered(): void
    {
        $container = new ContainerBuilder();

        $extension = new MetaModelsFilterSelectExtension();
        $extension->load([], $container);

        self::assertTrue($container->hasDefinition('metamodels.filter_select.factory'));
        $definition = $container->getDefinition('metamodels.filter_select.factory');
        self::assertCount(1, $definition->getTag('metamodels.filter_factory'));
    }
}
