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
use Mailable\Support\Lists\Field\Types\Field;

class LengthField extends Field
{
    protected $presenter = 'length-field-type::_length-type-instance';

    public function rules(Request $request, $rules = [])
    {
        $rules = array_merge($rules, [
            'length' => 'numeric',
            'units' => 'in:cm,m',
        ]);

        return parent::rules($request, $rules);
    }

    public function messages($messages = [])
    {
        $messages = array_merge($messages, [
            'units.in' => 'The unit must be either CM or M.',
            'units.required' => 'The unit must be either CM or M.',
        ]);

        return parent::messages($messages);
    }
}
