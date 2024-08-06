<?php

/**
 * This file is part of MetaModels/filter_select.
 *
 * (c) 2012-2023 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels/filter_select
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Ingolf Steinhardt <info@e-spin.de>
 * @author     Sven Baumann <baumann.sv@gmail.com>
 * @copyright  2012-2023 The MetaModels team.
 * @license    https://github.com/MetaModels/filter_select/blob/master/LICENSE LGPL-3.0-or-later
 * @filesource
 */

namespace MetaModels\FilterSelectBundle\FilterSetting;

use MetaModels\Filter\FilterUrlBuilder;
use MetaModels\Filter\Setting\AbstractFilterSettingTypeFactory;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Attribute type factory for select filter settings.
 */
class SelectFilterSettingTypeFactory extends AbstractFilterSettingTypeFactory
{
    /**
     * The event dispatcher.
     *
     * @var EventDispatcherInterface
     */
    private EventDispatcherInterface $dispatcher;

    /**
     * The filter URL builder.
     *
     * @var FilterUrlBuilder
     */
    private FilterUrlBuilder $filterUrlBuilder;

    /**
     * {@inheritDoc}
     *
     * @param EventDispatcherInterface $dispatcher       The event dispatcher.
     * @param FilterUrlBuilder         $filterUrlBuilder The filter URL builder.
     */
    public function __construct(EventDispatcherInterface $dispatcher, FilterUrlBuilder $filterUrlBuilder)
    {
        parent::__construct();

        $this
            ->setTypeName('select')
            ->setTypeIcon('bundles/metamodelsfilterselect/filter_select.png')
            ->setTypeClass(Select::class)
            ->allowAttributeTypes();

        $attributes = [
            'alias',
            'translatedalias',
            'select',
            'translatedselect',
            'text',
            'translatedtext',
            'tags',
            'translatedtags',
            'numeric',
            'combinedvalues',
            'translatedcombinedvalues'
        ];
        foreach ($attributes as $attribute) {
            $this->addKnownAttributeType($attribute);
        }

        $this->dispatcher       = $dispatcher;
        $this->filterUrlBuilder = $filterUrlBuilder;
    }

    /**
     * {@inheritDoc}
     */
    public function createInstance($information, $filterSettings)
    {
        return new Select(
            $filterSettings,
            $information,
            $this->dispatcher,
            $this->filterUrlBuilder
        );
    }
}
