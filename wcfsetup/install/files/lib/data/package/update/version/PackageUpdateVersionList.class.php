<?php
namespace wcf\data\package\update\version;
use wcf\data\DatabaseObjectList;

/**
 * Represents a list of package update versions.
 * 
 * @author	Alexander Ebert
 * @copyright	2001-2018 WoltLab GmbH
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	WoltLabSuite\Core\Data\Package\Update\Version
 *
 * @method	PackageUpdateVersion		current()
 * @method	PackageUpdateVersion[]		getObjects()
 * @method	PackageUpdateVersion|null	search($objectID)
 * @property	PackageUpdateVersion[]		$objects
 */
class PackageUpdateVersionList extends DatabaseObjectList {
	/**
	 * @inheritDoc
	 */
	public $className = PackageUpdateVersion::class;
}
