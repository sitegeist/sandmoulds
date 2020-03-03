<?php

namespace Sitegeist\SandMoulds\Domain\Model;

/*
 * This file is part of the Sitegeist.SandMoulds package
 */

use Neos\Flow\Annotations as Flow;
use Sitegeist\SandMoulds\Domain\Model\ModelIdentifier;
use Sitegeist\SandMoulds\Domain\Model\ToyBox;

/**
 * The sand mould domain entity
 *
 * @Flow\Scope("singleton")
 */
final class Moulder
{
    /**
     * @Flow\Inject
     * @var ToyBox
     */
    protected $toyBox;

    public function mouldModel(ModelIdentifier $modelIdentifier, array $properties): void
    {
        $sandMould = $this->toyBox->findSandMould($modelIdentifier);

        #$sandMould->mouldNodeTypeDefinition();
    }
}
