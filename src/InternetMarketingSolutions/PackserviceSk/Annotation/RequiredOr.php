<?php

namespace InternetMarketingSolutions\PackserviceSk\Annotation;

/**
 * @Annotation
 * @Target({"PROPERTY"})
 */
final class RequiredOr
{
    public $name;

    public function __construct(array $values)
    {
        if (!is_string($values['value'])) {
            throw new RuntimeException(sprintf('"value" must be a string.'));
        }

        $this->name = $values['value'];
    }
}