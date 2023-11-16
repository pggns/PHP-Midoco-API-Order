<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserWithCrsExpedientRequest StructType
 * @subpackage Structs
 */
class GetUserWithCrsExpedientRequest extends AbstractStructBase
{
    /**
     * The MidocoUser
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoUser
     * @var \Pggns\MidocoApi\Order\StructType\MidocoUser[]
     */
    protected array $MidocoUser = [];
    /**
     * The crs
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $crs = [];
    /**
     * The doSearchParents
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $doSearchParents = null;
    /**
     * Constructor method for GetUserWithCrsExpedientRequest
     * @uses GetUserWithCrsExpedientRequest::setMidocoUser()
     * @uses GetUserWithCrsExpedientRequest::setCrs()
     * @uses GetUserWithCrsExpedientRequest::setDoSearchParents()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUser[] $midocoUser
     * @param string[] $crs
     * @param bool $doSearchParents
     */
    public function __construct(array $midocoUser = [], array $crs = [], ?bool $doSearchParents = false)
    {
        $this
            ->setMidocoUser($midocoUser)
            ->setCrs($crs)
            ->setDoSearchParents($doSearchParents);
    }
    /**
     * Get MidocoUser value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUser[]
     */
    public function getMidocoUser(): array
    {
        return $this->MidocoUser;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoUser method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoUserForArrayConstraintsFromSetMidocoUser(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUserWithCrsExpedientRequestMidocoUserItem) {
            // validation for constraint: itemType
            if (!$getUserWithCrsExpedientRequestMidocoUserItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoUser) {
                $invalidValues[] = is_object($getUserWithCrsExpedientRequestMidocoUserItem) ? get_class($getUserWithCrsExpedientRequestMidocoUserItem) : sprintf('%s(%s)', gettype($getUserWithCrsExpedientRequestMidocoUserItem), var_export($getUserWithCrsExpedientRequestMidocoUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoUser property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoUser, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoUser value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUser[] $midocoUser
     * @return \Pggns\MidocoApi\Order\StructType\GetUserWithCrsExpedientRequest
     */
    public function setMidocoUser(array $midocoUser = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoUserArrayErrorMessage = self::validateMidocoUserForArrayConstraintsFromSetMidocoUser($midocoUser))) {
            throw new InvalidArgumentException($midocoUserArrayErrorMessage, __LINE__);
        }
        $this->MidocoUser = $midocoUser;
        
        return $this;
    }
    /**
     * Add item to MidocoUser value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoUser $item
     * @return \Pggns\MidocoApi\Order\StructType\GetUserWithCrsExpedientRequest
     */
    public function addToMidocoUser(\Pggns\MidocoApi\Order\StructType\MidocoUser $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoUser) {
            throw new InvalidArgumentException(sprintf('The MidocoUser property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoUser, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoUser[] = $item;
        
        return $this;
    }
    /**
     * Get crs value
     * @return string[]
     */
    public function getCrs(): array
    {
        return $this->crs;
    }
    /**
     * This method is responsible for validating the values passed to the setCrs method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCrs method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCrsForArrayConstraintsFromSetCrs(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUserWithCrsExpedientRequestCrsItem) {
            // validation for constraint: itemType
            if (!is_string($getUserWithCrsExpedientRequestCrsItem)) {
                $invalidValues[] = is_object($getUserWithCrsExpedientRequestCrsItem) ? get_class($getUserWithCrsExpedientRequestCrsItem) : sprintf('%s(%s)', gettype($getUserWithCrsExpedientRequestCrsItem), var_export($getUserWithCrsExpedientRequestCrsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The crs property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set crs value
     * @throws InvalidArgumentException
     * @param string[] $crs
     * @return \Pggns\MidocoApi\Order\StructType\GetUserWithCrsExpedientRequest
     */
    public function setCrs(array $crs = []): self
    {
        // validation for constraint: array
        if ('' !== ($crsArrayErrorMessage = self::validateCrsForArrayConstraintsFromSetCrs($crs))) {
            throw new InvalidArgumentException($crsArrayErrorMessage, __LINE__);
        }
        $this->crs = $crs;
        
        return $this;
    }
    /**
     * Add item to crs value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetUserWithCrsExpedientRequest
     */
    public function addToCrs(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The crs property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->crs[] = $item;
        
        return $this;
    }
    /**
     * Get doSearchParents value
     * @return bool|null
     */
    public function getDoSearchParents(): ?bool
    {
        return $this->doSearchParents;
    }
    /**
     * Set doSearchParents value
     * @param bool $doSearchParents
     * @return \Pggns\MidocoApi\Order\StructType\GetUserWithCrsExpedientRequest
     */
    public function setDoSearchParents(?bool $doSearchParents = false): self
    {
        // validation for constraint: boolean
        if (!is_null($doSearchParents) && !is_bool($doSearchParents)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($doSearchParents, true), gettype($doSearchParents)), __LINE__);
        }
        $this->doSearchParents = $doSearchParents;
        
        return $this;
    }
}
