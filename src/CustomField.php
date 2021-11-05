<?php

namespace Cyrus\CustomNovaField;

use Laravel\Nova\Fields\Field;

class CustomField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'custom-nova-field';

    /**
     * Indicates if the element should be shown on the index view.
     *
     * @var bool
     */
    public $showOnIndex = true;

    /**
     * Indicates if the element should be shown on the detail view.
     *
     * @var bool
     */
    public $showOnDetail = true;

    /**
     * Indicates if the element should be shown on the creation view.
     *
     * @var bool
     */
    public $showOnCreation = true;

    /**
     * Indicates if the element should be shown on the update view.
     *
     * @var bool
     */
    public $showOnUpdate = true;

    public function value($value)
    {
        return $this->withMeta([
            'value' => $value,
        ]);
    }
}
