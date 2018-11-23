<?php

namespace Treestoneit\BelongsToField;

use Laravel\Nova\Fields\BelongsTo;

class BelongsToField extends BelongsTo
{
    /**
     * Resolve the field's value.
     *
     * @param  mixed  $resource
     * @param  string|null  $attribute
     * @return void
     */
    public function resolve($resource, $attribute = null)
    {
        $value = $resource->{$this->attribute};

        if ($value) {
            $this->belongsToId = $value->getKey();

            $this->value = $this->formatDisplayValue($value);
        }
    }
}
