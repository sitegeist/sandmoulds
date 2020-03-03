<?php
namespace PackageFactory\AtomicFusion\PresentationObjects\Tests\Unit\Domain\Component;

use Neos\Flow\Tests\UnitTestCase;
use PHPUnit\Framework\Assert;
use Sitegeist\SandMoulds\Domain\Model\BasicNodeTypeIdentifier;
use Sitegeist\SandMoulds\Domain\Model\ModelIdentifier;
use Sitegeist\SandMoulds\Domain\Model\Property;
use Sitegeist\SandMoulds\Domain\Model\SandMould;

/**
 * Test cases for Component
 */
class SandMouldTest extends UnitTestCase
{
    /**
     * @dataProvider nodeTypeDefinitionProvider
     * @param ModelIdentifier $modelIdentifier
     * @param BasicNodeTypeIdentifier $basicNodeTypeIdentifier
     * @param array $properties
     * @param array $expectedNodeTypeDefinition
     */
    public function testMouldNodeTypeDefinition(ModelIdentifier $modelIdentifier, BasicNodeTypeIdentifier $basicNodeTypeIdentifier, array $properties, array $expectedNodeTypeDefinition): void
    {
        $subject = new SandMould($modelIdentifier, $basicNodeTypeIdentifier, $properties);
        Assert::assertSame($expectedNodeTypeDefinition, $subject->mouldNodeTypeDefinition());
    }

    public function nodeTypeDefinitionProvider(): array
    {
        return [
            [
                new ModelIdentifier('Product'),
                BasicNodeTypeIdentifier::document(),
                [
                    new Property('mpn', 'string', false),
                    new Property('description', '?string', true),
                ],
                [
                    'superTypes' => [
                        'Neos.Neos:Document' => true
                    ],
                    'ui' => [
                        'label' => 'Product',
                        'icon' => 'barcode'
                    ],
                    'properties' => [
                        'mpn' => [
                            'type' => 'string',
                            'defaultValue' => '',
                            'ui' => [
                                'label' => 'mpn'
                            ],
                            'validation' => [
                                'Neos.Neos/Validation/NotEmptyValidator' => []
                            ]
                        ],
                        'description' => [
                            'type' => 'string',
                            'defaultValue' => '',
                            'ui' => [
                                'label' => 'description',
                                'inlineEditable' => true,
                                'inline' => [
                                    'editorOptions' => [
                                        'placeholder' => ''
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }
}
