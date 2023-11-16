<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetFeeTypesForAgencyResponse StructType
 * @subpackage Structs
 */
class GetFeeTypesForAgencyResponse extends AbstractStructBase
{
    /**
     * The code
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $code = [];
    /**
     * Constructor method for GetFeeTypesForAgencyResponse
     * @uses GetFeeTypesForAgencyResponse::setCode()
     * @param string[] $code
     */
    public function __construct(array $code = [])
    {
        $this
            ->setCode($code);
    }
    /**
     * Get code value
     * @return string[]
     */
    public function getCode(): array
    {
        return $this->code;
    }
    /**
     * This method is responsible for validating the values passed to the setCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCodeForArrayConstraintsFromSetCode(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getFeeTypesForAgencyResponseCodeItem) {
            // validation for constraint: itemType
            if (!is_string($getFeeTypesForAgencyResponseCodeItem)) {
                $invalidValues[] = is_object($getFeeTypesForAgencyResponseCodeItem) ? get_class($getFeeTypesForAgencyResponseCodeItem) : sprintf('%s(%s)', gettype($getFeeTypesForAgencyResponseCodeItem), var_export($getFeeTypesForAgencyResponseCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The code property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set code value
     * @throws InvalidArgumentException
     * @param string[] $code
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeTypesForAgencyResponse
     */
    public function setCode(array $code = []): self
    {
        // validation for constraint: array
        if ('' !== ($codeArrayErrorMessage = self::validateCodeForArrayConstraintsFromSetCode($code))) {
            throw new InvalidArgumentException($codeArrayErrorMessage, __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
    /**
     * Add item to code value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetFeeTypesForAgencyResponse
     */
    public function addToCode(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The code property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->code[] = $item;
        
        return $this;
    }
}
