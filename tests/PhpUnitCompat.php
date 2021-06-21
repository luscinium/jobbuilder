<?php

declare(strict_types=1);

/*
 * This file is part of the Tarantool JobBuilder package.
 *
 * (c) Eugene Leonovich <gen.work@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tarantool\JobQueue\JobBuilder\Tests;

/**
 * A compatibility layer for the legacy PHPUnit 7.
 */
trait PhpUnitCompat
{
    public function expectExceptionMessageMatches(string $regularExpression) : void
    {
        if (\is_callable('parent::expectExceptionMessageMatches')) {
            parent::expectExceptionMessageMatches($regularExpression);

            return;
        }

        parent::expectExceptionMessageRegExp($regularExpression);
    }
}
