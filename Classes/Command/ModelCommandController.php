<?php

namespace Sitegeist\SandMoulds\Command;

/*
 * This file is part of the Sitegeist.SandMoulds package
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Cli\CommandController;
use Sitegeist\SandMoulds\Domain\Model\ModelIdentifier;
use Sitegeist\SandMoulds\Domain\Model\Moulder;

/**
 * The command controller for model handling
 */
class ModelCommandController extends CommandController
{
    /**
     * @Flow\Inject
     * @var Moulder
     */
    protected $moulder;

    public function kickStartCommand(string $model, array $properties): void
    {
        $this->moulder->mouldModel(new ModelIdentifier($model), $properties);
    }
}
