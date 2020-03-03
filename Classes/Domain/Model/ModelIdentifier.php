<?php

namespace Sitegeist\SandMoulds\Domain\Model;

/*
 * This file is part of the Sitegeist.SandMoulds package
 */

use Neos\Flow\Annotations as Flow;

/**
 * The model identifier domain value object
 *
 * @Flow\Proxy(false)
 */
final class ModelIdentifier
{
    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        if (empty($value)) {
            throw ModelIdentifierIsInvalid::becauseItMustBeANonEmptyString($value);
        }
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function __toString(): string
    {
        return $this->value;
    }
}
