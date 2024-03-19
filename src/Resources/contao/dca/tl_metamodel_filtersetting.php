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
 * @author     Christian de la Haye <service@delahaye.de>
 * @author     Andreas Isaak <info@andreas-isaak.de>
 * @author     David Molineus <mail@netzmacht.de>
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @author     Ingolf Steinhardt <info@e-spin.de>
 * @copyright  2012-2024 The MetaModels team.
 * @license    https://github.com/MetaModels/filter_select/blob/master/LICENSE LGPL-3.0-or-later
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['select extends _attribute_']['+fefilter'][] =
    'urlparam';
$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['select extends _attribute_']['+fefilter'][] =
    'label';
$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['select extends _attribute_']['+fefilter'][] =
    'hide_label';
$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['select extends _attribute_']['+fefilter'][] =
    'label_as_blankoption';
$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['select extends _attribute_']['+fefilter'][] =
    'template';
$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['select extends _attribute_']['+fefilter'][] =
    'apply_sorting';
$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['select extends _attribute_']['+fefilter'][] =
    'defaultid';
$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['select extends _attribute_']['+fefilter'][] =
    'blankoption';
$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['select extends _attribute_']['+fefilter'][] =
    'onlyused';
$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['select extends _attribute_']['+fefilter'][] =
    'onlypossible';
$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['select extends _attribute_']['+fefilter'][] =
    'skipfilteroptions';
$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['select extends _attribute_']['+fefilter'][] =
    'cssID';

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['select_where'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['select_where'],
    'exclude'   => true,
    'inputType' => 'textarea',
    'sql'       => 'text NULL',
    'eval'      => [
        'tl_class'       => 'clr',
        'style'          => 'height: 4em;',
        'decodeEntities' => 'true'
    ]
];

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['select_filter'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['select_filter'],
    'exclude'   => true,
    'inputType' => 'select',
    'sql'       => 'int(11) unsigned NOT NULL default \'0\'',
    'eval'      => [
        'includeBlankOption' => true,
        'alwaysSave'         => true,
        'submitOnChange'     => true,
        'tl_class'           => 'clr w50',
        'chosen'             => 'true'
    ],
];

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['select_filterparams'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['select_filterparams'],
    'exclude'   => true,
    'inputType' => 'mm_subdca',
    'sql'       => 'text NULL',
    'eval'      => [
        'tl_class' => 'clr m12'
    ]
];
