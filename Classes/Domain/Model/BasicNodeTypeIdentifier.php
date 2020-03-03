<?php

namespace Sitegeist\SandMoulds\Domain\Model;

/*
 * This file is part of the Sitegeist.SandMoulds package
 */

use Neos\Flow\Annotations as Flow;

/**
 * The basic node type identifier domain value object
 *
 * @Flow\Proxy(false)
 */
final class BasicNodeTypeIdentifier
{
    const TYPE_CONTENT = 'Content';
    const TYPE_DOCUMENT = 'Document';

    /**
     * @var string
     */
    private $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function content(): self
    {
        return new self(self::TYPE_CONTENT);
    }

    public static function document(): self
    {
        return new self(self::TYPE_DOCUMENT);
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
