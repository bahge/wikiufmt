<?php

/*
	Extension:Moderation - MediaWiki extension.
	Copyright (C) 2018 Edward Chernenko.

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
*/

/**
 * @file
 * Basic interface for working with one row in the 'moderation' SQL table.
 */

interface IModerationEntry {
	/**
	 * Get the list of fields needed for selecting $row, as expected by newFromRow().
	 * @return array ($fields parameter for $db->select()).
	 */
	public static function getFields();
}
