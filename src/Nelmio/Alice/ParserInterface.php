<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Nelmio\Alice;

use Nelmio\Alice\Throwable\ParseThrowable;

/**
 * @deprecated to be replaced by Nelmio\Alice\FixtureBuilder\ParserInterface
 */
interface ParserInterface
{
    /**
     * Parses the given file and returns an array of data.
     *
     * @param string $file File path
     *
     * @throws ParseThrowable
     *
     * @return array
     */
    public function parse(string $file): array;
}
