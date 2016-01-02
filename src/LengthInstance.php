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

use Illuminate\Http\Request;
use Mailable\Support\Lists\Field\Types\Instance;

class LengthInstance extends Instance
{
    protected $presenter = 'length-field-type::_length-type-instance';

    public function rules(Request $request)
    {
        return [
            'length' => 'numeric',
            'units' => 'required|in:cm,m',
        ];
    }

    public function messages()
    {
        return [
            'units.in' => 'The unit must be either CM or M.',
            'units.required' => 'The unit must be either CM or M.',
        ];
    }
}