<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserJwtTokenResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetUserJwtTokenResponse extends AbstractStructBase
{
    /**
     * The MidocoUserJwtToken
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUserJwtToken
     * @var \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO[]
     */
    protected ?array $MidocoUserJwtToken = null;
    /**
     * Constructor method for GetUserJwtTokenResponse
     * @uses GetUserJwtTokenResponse::setMidocoUserJwtToken()
     * @param \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO[] $midocoUserJwtToken
     */
    public function __construct(?array $midocoUserJwtToken = null)
    {
        $this
            ->setMidocoUserJwtToken($midocoUserJwtToken);
    }
    /**
     * Get MidocoUserJwtToken value
     * @return \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO[]
     */
    public function getMidocoUserJwtToken(): ?array
    {
        return $this->MidocoUserJwtToken;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoUserJwtToken method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUserJwtToken method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUserJwtTokenForArrayConstraintFromSetMidocoUserJwtToken(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUserJwtTokenResponseMidocoUserJwtTokenItem) {
            // validation for constraint: itemType
            if (!$getUserJwtTokenResponseMidocoUserJwtTokenItem instanceof \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO) {
                $invalidValues[] = is_object($getUserJwtTokenResponseMidocoUserJwtTokenItem) ? get_class($getUserJwtTokenResponseMidocoUserJwtTokenItem) : sprintf('%s(%s)', gettype($getUserJwtTokenResponseMidocoUserJwtTokenItem), var_export($getUserJwtTokenResponseMidocoUserJwtTokenItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUserJwtToken property can only contain items of type \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUserJwtToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO[] $midocoUserJwtToken
     * @return \Pggns\MidocoApi\Order\StructType\GetUserJwtTokenResponse
     */
    public function setMidocoUserJwtToken(?array $midocoUserJwtToken = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUserJwtTokenArrayErrorMessage = self::validateMidocoUserJwtTokenForArrayConstraintFromSetMidocoUserJwtToken($midocoUserJwtToken))) {
            throw new InvalidArgumentException($midocoUserJwtTokenArrayErrorMessage, __LINE__);
        }
        $this->MidocoUserJwtToken = $midocoUserJwtToken;
        
        return $this;
    }
    /**
     * Add item to MidocoUserJwtToken value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO $item
     * @return \Pggns\MidocoApi\Order\StructType\GetUserJwtTokenResponse
     */
    public function addToMidocoUserJwtToken(\Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoUserJwtToken property can only contain items of type \Pggns\MidocoApi\Order\StructType\UsersJwtTokenDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUserJwtToken[] = $item;
        
        return $this;
    }
}
