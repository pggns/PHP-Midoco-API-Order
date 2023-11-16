<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for hints StructType
 * Meta information extracted from the WSDL
 * - documentation: free text info, not used for printing, only internal
 * @subpackage Structs
 */
class Hints extends AbstractStructBase
{
    /**
     * The hint
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Pggns\MidocoApi\Order\StructType\Hint[]
     */
    protected array $hint = [];
    /**
     * Constructor method for hints
     * @uses Hints::setHint()
     * @param \Pggns\MidocoApi\Order\StructType\Hint[] $hint
     */
    public function __construct(array $hint = [])
    {
        $this
            ->setHint($hint);
    }
    /**
     * Get hint value
     * @return \Pggns\MidocoApi\Order\StructType\Hint[]
     */
    public function getHint(): array
    {
        return $this->hint;
    }
    /**
     * This method is responsible for validating the values passed to the setHint method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHint method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHintForArrayConstraintsFromSetHint(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $hintsHintItem) {
            // validation for constraint: itemType
            if (!$hintsHintItem instanceof \Pggns\MidocoApi\Order\StructType\Hint) {
                $invalidValues[] = is_object($hintsHintItem) ? get_class($hintsHintItem) : sprintf('%s(%s)', gettype($hintsHintItem), var_export($hintsHintItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The hint property can only contain items of type \Pggns\MidocoApi\Order\StructType\Hint, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set hint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Hint[] $hint
     * @return \Pggns\MidocoApi\Order\StructType\Hints
     */
    public function setHint(array $hint = []): self
    {
        // validation for constraint: array
        if ('' !== ($hintArrayErrorMessage = self::validateHintForArrayConstraintsFromSetHint($hint))) {
            throw new InvalidArgumentException($hintArrayErrorMessage, __LINE__);
        }
        $this->hint = $hint;
        
        return $this;
    }
    /**
     * Add item to hint value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\Hint $item
     * @return \Pggns\MidocoApi\Order\StructType\Hints
     */
    public function addToHint(\Pggns\MidocoApi\Order\StructType\Hint $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\Hint) {
            throw new InvalidArgumentException(sprintf('The hint property can only contain items of type \Pggns\MidocoApi\Order\StructType\Hint, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->hint[] = $item;
        
        return $this;
    }
}
