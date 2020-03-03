<?php

namespace Sitegeist\SandMoulds\Domain\Model;

/*
 * This file is part of the Sitegeist.SandMoulds package
 */

use Neos\Flow\Annotations as Flow;

/**
 * The property domain value object
 *
 * @Flow\Proxy(false)
 */
final class Property
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var bool
     */
    private $inline;

    /**
     * @var bool
     */
    private $required;

    public function __construct(string $name, string $type, bool $inline)
    {
        $this->name = $name;
        $this->required = !(\mb_strpos($type, '?') === 0);
        $this->type = trim($type, '?');
        $this->inline = $inline;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function isInline(): bool
    {
        return $this->inline;
    }

    public function isRequired(): bool
    {
        return $this->required;
    }
}
