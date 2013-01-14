<?php
/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package    MetaModels
 * @subpackage FrontendFilter
 * @author     Christian de la Haye <service@delahaye.de>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */
if (!defined('TL_ROOT'))
{
	die('You cannot access this file directly!');
}


/**
 * filter types
 */

$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['typenames']['select']   = 'Einfache Auswahl';


/**
 * fields
 */

$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['blankoption']  = array('Leerer Wert', 'Leere Auswahl einbinden.');
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['defaultid']    = array('Standardwert', 'Standardwert für Auswahlen.');
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['onlyused']     = array('Nur zugeordnete Werte', 'In den Optionen nur Werte zeigen, die einem Datensatz zugeordnet sind.');
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['onlypossible'] = array('Nur verbleibende Werte', 'In den Optionen nur Werte zeigen, die mit dem aktuellen Filter weiterhin vorkommen.');

?>