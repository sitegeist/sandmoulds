<?php

namespace Sitegeist\SandMoulds\Domain\Model;

/*
 * This file is part of the Sitegeist.SandMoulds package
 */

use Neos\Flow\Annotations as Flow;

/**
 * The sand mould domain entity
 *
 * @Flow\Proxy(false)
 */
final class SandMould
{
    /**
     * @var ModelIdentifier
     */
    private $identifier;

    /**
     * @var BasicNodeTypeIdentifier
     */
    private $basicNodeTypeIdentifier;

    /**
     * @var array
     */
    private $properties;

    public function __construct(ModelIdentifier $identifier, BasicNodeTypeIdentifier $basicNodeTypeIdentifier, array $properties = [])
    {
        $this->identifier = $identifier;
        $this->basicNodeTypeIdentifier = $basicNodeTypeIdentifier;
        $this->properties = $properties;
    }

    public function getIdentifier(): ModelIdentifier
    {
        return $this->identifier;
    }

    public function setProperties(array $properties): void
    {
        $this->properties = $properties;
    }

    public function mouldNodeTypeDefinition(): array
    {
        return [
            'superTypes' => [
                'Neos.Neos:' . $this->basicNodeTypeIdentifier => true
            ]
        ];
    }

    public function mouldPhpClass(): array
    {
        return [
            'superTypes' => [
                'Neos.Neos:' . $this->basicNodeTypeIdentifier => true
            ]
        ];
    }

    public function mouldFusionPrototype(): array
    {
        return [
            'superTypes' => [
                'Neos.Neos:' . $this->basicNodeTypeIdentifier => true
            ]
        ];
    }
}
