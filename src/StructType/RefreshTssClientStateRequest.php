<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RefreshTssClientStateRequest StructType
 * @subpackage Structs
 */
class RefreshTssClientStateRequest extends AbstractStructBase
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTssClient[]
     */
    protected array $MidocoTssClient = [];
    /**
     * Constructor method for RefreshTssClientStateRequest
     * @uses RefreshTssClientStateRequest::setMidocoTssClient()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssClient[] $midocoTssClient
     */
    public function __construct(array $midocoTssClient = [])
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTssClient[]
     */
    public function getMidocoTssClient(): array
    {
        return $this->MidocoTssClient;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTssClient method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTssClient method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTssClientForArrayConstraintsFromSetMidocoTssClient(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $refreshTssClientStateRequestMidocoTssClientItem) {
            // validation for constraint: itemType
            if (!$refreshTssClientStateRequestMidocoTssClientItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoTssClient) {
                $invalidValues[] = is_object($refreshTssClientStateRequestMidocoTssClientItem) ? get_class($refreshTssClientStateRequestMidocoTssClientItem) : sprintf('%s(%s)', gettype($refreshTssClientStateRequestMidocoTssClientItem), var_export($refreshTssClientStateRequestMidocoTssClientItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTssClient property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTssClient, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTssClient value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssClient[] $midocoTssClient
     * @return \Pggns\MidocoApi\Order\StructType\RefreshTssClientStateRequest
     */
    public function setMidocoTssClient(array $midocoTssClient = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTssClientArrayErrorMessage = self::validateMidocoTssClientForArrayConstraintsFromSetMidocoTssClient($midocoTssClient))) {
            throw new InvalidArgumentException($midocoTssClientArrayErrorMessage, __LINE__);
        }
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
    /**
     * Add item to MidocoTssClient value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTssClient $item
     * @return \Pggns\MidocoApi\Order\StructType\RefreshTssClientStateRequest
     */
    public function addToMidocoTssClient(\Pggns\MidocoApi\Order\StructType\MidocoTssClient $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoTssClient) {
            throw new InvalidArgumentException(sprintf('The MidocoTssClient property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoTssClient, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTssClient[] = $item;
        
        return $this;
    }
}
