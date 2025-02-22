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

namespace Respect\Validation\Test\Stubs;

/**
 * Stub to test classes that implement the __toString() method.
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class ToStringStub
{
    /**
     * @var string
     */
    private $value;

    /**
     * Initializes the object with the value that will be returned when the
     * object is converted to string.
     */
    public function __construct(string $value)
    {
        $this->value = $value;
    }

    /**
     * Returns the value defined in the constructor.
     */
    public function __toString(): string
    {
        return $this->value;
    }
}
