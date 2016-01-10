<?php

/*
 * This file is part of Mailable.
 *
 * (c) Oliver Green <oliver@mailable.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mailable\Support\Field\Types\Length;

use Mailable\Support\Field\Types\Definition;

class LengthDefinition extends Definition
{
    protected $label = 'Length Input';

    protected $handle = 'length';

    protected $store_keys = ['length' => 'Length', 'units' => 'Units'];
}
