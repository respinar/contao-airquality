<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2017 Leo Feyer
 *
 * @package   AirQuality
 * @author    Hamid Abbaszadeh
 * @license   GNU/LGPL
 * @copyright 2015-2017
 */


/**
 * Namespace
 */
namespace Respinar\AirQuality\Model;

/**
 * Class AirqualityStationModel
 *
 * @copyright  2015
 * @author     Hamid Abbaszadeh
 * @package    Devtools
 */
class AirQualityStationModel extends \Model
{

	/**
	 * Name of the table
	 * @var string
	 */
	protected static $strTable = 'tl_airquality_station';

	/**
	 * Find Air Pollution by its ID
	 *
	 * @param integer $intId      The air pollution category ID
	 *
	 * @return \Model\Collection|null A collection of models or null if there are no news
	 */
	public static function findByPid($intId)
	{
		$t = static::$strTable;

		$arrColumns = array("$t.pid=?");

		return static::findBy($arrColumns, $intId);
	}

}
