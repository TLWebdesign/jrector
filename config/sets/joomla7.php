<?php

/**
 * @package     Joomla.Rector
 * @subpackage  Set
 *
 * @copyright   (C) 2026 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

declare(strict_types=1);

use Joomla\Rector\Joomla7\GetInstanceToContainerRector;
use Rector\Config\RectorConfig;

/**
 * Rules that bring code up to Joomla 7.
 */
return static function (RectorConfig $rectorConfig): void {
    // Replaces the removed static getInstance() accessors with the application or the container.
    $rectorConfig->rule(GetInstanceToContainerRector::class);
};
