<?php

/*
 * This file is part of Mailable.
 *
 * (c) Oliver Green <oliver@mailable.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mailable\Support\Lists\Field\Types\Length;

use Mailable\Support\Lists\Field\Types\TypeDefinition;

class LengthTypeDefinition extends TypeDefinition
{
    protected $label = 'Length Input';

    protected $handle = 'length';
}