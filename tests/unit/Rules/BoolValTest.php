<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alganet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

declare(strict_types=1);

namespace Respect\Validation\Rules;

use Respect\Validation\Test\RuleTestCase;

/**
 * @group rule
 *
 * @covers \Respect\Validation\Rules\BoolVal
 *
 * @author Emmerson Siqueira <emmersonsiqueira@gmail.com>
 * @author Henrique Moody <henriquemoody@gmail.com>
 * @author William Espindola <oi@williamespindola.com.br>
 */
final class BoolValTest extends RuleTestCase
{
    /**
     * {@inheritDoc}
     */
    public function providerForValidInput(): array
    {
        $rule = new BoolVal();

        return [
            [$rule, true],
            [$rule, 1],
            [$rule, 'on'],
            [$rule, 'yes'],
            [$rule, 0],
            [$rule, false],
            [$rule, 'off'],
            [$rule, 'no '],
            [$rule, ''],
        ];
    }

    /**
     * {@inheritDoc}
     */
    public function providerForInvalidInput(): array
    {
        $rule = new BoolVal();

        return [
            [$rule, 'ok'],
            [$rule, 'yep'],
            [$rule, 10],
        ];
    }
}
