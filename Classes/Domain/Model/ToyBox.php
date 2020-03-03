<?php

namespace Sitegeist\SandMoulds\Domain\Model;

/*
 * This file is part of the Sitegeist.SandMoulds package
 */

use Neos\Flow\Annotations as Flow;

/**
 * The toy box domain repository
 *
 * Contains all available sand moulds
 *
 * @Flow\Scope("singleton")
 */
final class ToyBox
{
    /**
     * @var array|SandMould[]
     */
    private $sandMoulds = [];

    public function __construct()
    {
        $this->sandMoulds = [
            'Product' => new SandMould(
                new ModelIdentifier('Product'),
                BasicNodeTypeIdentifier::document(),
                [
                    new Property('mpn', 'string', false)
                ]
            )
        ];
    }

    public function findSandMould(ModelIdentifier $modelIdentifier): ?SandMould
    {
        return $this->sandMoulds[(string) $modelIdentifier] ?? null;
    }
}
