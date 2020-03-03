<?php

namespace Sitegeist\SandMoulds\Domain\Model;

/*
 * This file is part of the Sitegeist.SandMoulds package
 */

use Neos\Flow\Annotations as Flow;

/**
 * The exception to be thrown if in invalid model identifier was tried to be initialized
 *
 * @Flow\Proxy(false)
 */
final class ModelIdentifierIsInvalid extends \DomainException
{
    public static function becauseItMustBeANonEmptyString(string $attemptedValue): self
    {
        return new self('"' . $attemptedValue . '" is no valid model identifier, it must be a non-empty string', 1583173259);
    }
}
