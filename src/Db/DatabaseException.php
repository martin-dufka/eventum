<?php

/*
 * This file is part of the Eventum (Issue Tracking System) package.
 *
 * @copyright (c) Eventum Team
 * @license GNU General Public License, version 2 or later (GPL-2+)
 *
 * For the full copyright and license information,
 * please see the COPYING and AUTHORS files
 * that were distributed with this source code.
 */
namespace Eventum\Db;

use RuntimeException;

class DatabaseException extends RuntimeException
{
    public $context;

    public function setExceptionLocation($file, $line)
    {
        $this->file = $file;
        $this->line = $line;
    }

    public function setContext($context)
    {
        $this->context = $context;
    }
}
