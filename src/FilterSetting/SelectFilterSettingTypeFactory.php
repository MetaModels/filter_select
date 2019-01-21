<?php

/**
 * This file is part of MetaModels/filter_select.
 *
 * (c) 2012-2019 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels/filter_select
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  2012-2019 The MetaModels team.
 * @license    https://github.com/MetaModels/filter_select/blob/master/LICENSE LGPL-3.0-or-later
 * @filesource
 */

namespace MetaModels\FilterSelectBundle\FilterSetting;

use MetaModels\Filter\Setting\AbstractFilterSettingTypeFactory;

/**
 * Attribute type factory for select filter settings.
 */
class SelectFilterSettingTypeFactory extends AbstractFilterSettingTypeFactory
{
    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        parent::__construct();

        $this
            ->setTypeName('select')
            ->setTypeIcon('bundles/metamodelsfilterselect/filter_select.png')
            ->setTypeClass(Select::class)
            ->allowAttributeTypes();

        foreach ([
            'select',
            'translatedselect',
            'text',
            'translatedtext',
            'tags',
            'translatedtags',
        ] as $attribute) {
            $this->addKnownAttributeType($attribute);
        }
    }
}
