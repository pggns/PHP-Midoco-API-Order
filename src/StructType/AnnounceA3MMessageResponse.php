<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AnnounceA3MMessageResponse StructType
 * @subpackage Structs
 */
class AnnounceA3MMessageResponse extends AbstractStructBase
{
    /**
     * The AnnounceA3MError
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: AnnounceA3MError
     * @var \Pggns\MidocoApi\Order\StructType\AnnounceA3MError[]
     */
    protected array $AnnounceA3MError = [];
    /**
     * Constructor method for AnnounceA3MMessageResponse
     * @uses AnnounceA3MMessageResponse::setAnnounceA3MError()
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceA3MError[] $announceA3MError
     */
    public function __construct(array $announceA3MError = [])
    {
        $this
            ->setAnnounceA3MError($announceA3MError);
    }
    /**
     * Get AnnounceA3MError value
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceA3MError[]
     */
    public function getAnnounceA3MError(): array
    {
        return $this->AnnounceA3MError;
    }
    /**
     * This method is responsible for validating the values passed to the setAnnounceA3MError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAnnounceA3MError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAnnounceA3MErrorForArrayConstraintsFromSetAnnounceA3MError(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $announceA3MMessageResponseAnnounceA3MErrorItem) {
            // validation for constraint: itemType
            if (!$announceA3MMessageResponseAnnounceA3MErrorItem instanceof \Pggns\MidocoApi\Order\StructType\AnnounceA3MError) {
                $invalidValues[] = is_object($announceA3MMessageResponseAnnounceA3MErrorItem) ? get_class($announceA3MMessageResponseAnnounceA3MErrorItem) : sprintf('%s(%s)', gettype($announceA3MMessageResponseAnnounceA3MErrorItem), var_export($announceA3MMessageResponseAnnounceA3MErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AnnounceA3MError property can only contain items of type \Pggns\MidocoApi\Order\StructType\AnnounceA3MError, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AnnounceA3MError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceA3MError[] $announceA3MError
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceA3MMessageResponse
     */
    public function setAnnounceA3MError(array $announceA3MError = []): self
    {
        // validation for constraint: array
        if ('' !== ($announceA3MErrorArrayErrorMessage = self::validateAnnounceA3MErrorForArrayConstraintsFromSetAnnounceA3MError($announceA3MError))) {
            throw new InvalidArgumentException($announceA3MErrorArrayErrorMessage, __LINE__);
        }
        $this->AnnounceA3MError = $announceA3MError;
        
        return $this;
    }
    /**
     * Add item to AnnounceA3MError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AnnounceA3MError $item
     * @return \Pggns\MidocoApi\Order\StructType\AnnounceA3MMessageResponse
     */
    public function addToAnnounceA3MError(\Pggns\MidocoApi\Order\StructType\AnnounceA3MError $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AnnounceA3MError) {
            throw new InvalidArgumentException(sprintf('The AnnounceA3MError property can only contain items of type \Pggns\MidocoApi\Order\StructType\AnnounceA3MError, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AnnounceA3MError[] = $item;
        
        return $this;
    }
}
