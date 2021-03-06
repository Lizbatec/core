<?php
/**
 * @author Bernhard Posselt <dev@bernhard-posselt.com>
 * @author Jörn Friedrich Dreyer <jfd@butonic.de>
 * @author Lukas Reschke <lukas@owncloud.com>
 * @author Morris Jobke <hey@morrisjobke.de>
 * @author Thomas Müller <thomas.mueller@tmit.eu>
 *
 * @copyright Copyright (c) 2015, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

/**
 * Public interface of ownCloud for apps to use.
 * AppFramework/IApi interface
 */

namespace OCP\AppFramework;


/**
 * A few very basic and frequently used API functions are combined in here
 * @deprecated
 */
interface IApi {


	/**
	 * Gets the userid of the current user
	 * @return string the user id of the current user
	 * @deprecated Use \OC::$server->getUserSession()->getUser()->getUID()
	 */
	function getUserId();


	/**
	 * Adds a new javascript file
	 * @deprecated include javascript and css in template files
	 * @param string $scriptName the name of the javascript in js/ without the suffix
	 * @param string $appName the name of the app, defaults to the current one
	 * @return void
	 */
	function addScript($scriptName, $appName = null);


	/**
	 * Adds a new css file
	 * @deprecated include javascript and css in template files
	 * @param string $styleName the name of the css file in css/without the suffix
	 * @param string $appName the name of the app, defaults to the current one
	 * @return void
	 */
	function addStyle($styleName, $appName = null);


	/**
	 * @deprecated include javascript and css in template files
	 * shorthand for addScript for files in the 3rdparty directory
	 * @param string $name the name of the file without the suffix
	 * @return void
	 */
	function add3rdPartyScript($name);


	/**
	 * @deprecated include javascript and css in template files
	 * shorthand for addStyle for files in the 3rdparty directory
	 * @param string $name the name of the file without the suffix
	 * @return void
	 */
	function add3rdPartyStyle($name);


	/**
	 * Checks if an app is enabled
	 * @deprecated communication between apps should happen over built in
	 * callbacks or interfaces (check the contacts and calendar managers)
	 * Checks if an app is enabled
	 * also use \OC::$server->getAppManager()->isEnabledForUser($appName)
	 * @param string $appName the name of an app
	 * @return bool true if app is enabled
	 */
	public function isAppEnabled($appName);

}
