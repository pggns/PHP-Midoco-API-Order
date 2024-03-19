<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateMilesAndMoreBurnTransactionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreateMilesAndMoreBurnTransactionRequest extends AbstractStructBase
{
    /**
     * The documentId
     * Meta information extracted from the WSDL
     * - documentation: The billing documents id mandatory field
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The parentInternalVersion
     * Meta information extracted from the WSDL
     * - documentation: The billing documents internal version mandatory field
     * - default: -1
     * @var int|null
     */
    protected ?int $parentInternalVersion = null;
    /**
     * The requestedAmount
     * Meta information extracted from the WSDL
     * - documentation: mandatory field
     * @var float|null
     */
    protected ?float $requestedAmount = null;
    /**
     * The countryCode
     * Meta information extracted from the WSDL
     * - documentation: mandatory field
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The cardNo
     * Meta information extracted from the WSDL
     * - documentation: The Miles and More Card number - mandatory field
     * @var string|null
     */
    protected ?string $cardNo = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * Constructor method for CreateMilesAndMoreBurnTransactionRequest
     * @uses CreateMilesAndMoreBurnTransactionRequest::setDocumentId()
     * @uses CreateMilesAndMoreBurnTransactionRequest::setParentInternalVersion()
     * @uses CreateMilesAndMoreBurnTransactionRequest::setRequestedAmount()
     * @uses CreateMilesAndMoreBurnTransactionRequest::setCountryCode()
     * @uses CreateMilesAndMoreBurnTransactionRequest::setCardNo()
     * @uses CreateMilesAndMoreBurnTransactionRequest::setPosition()
     * @param int $documentId
     * @param int $parentInternalVersion
     * @param float $requestedAmount
     * @param string $countryCode
     * @param string $cardNo
     * @param int $position
     */
    public function __construct(?int $documentId = null, ?int $parentInternalVersion = -1, ?float $requestedAmount = null, ?string $countryCode = null, ?string $cardNo = null, ?int $position = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setParentInternalVersion($parentInternalVersion)
            ->setRequestedAmount($requestedAmount)
            ->setCountryCode($countryCode)
            ->setCardNo($cardNo)
            ->setPosition($position);
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Order\StructType\CreateMilesAndMoreBurnTransactionRequest
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get parentInternalVersion value
     * @return int|null
     */
    public function getParentInternalVersion(): ?int
    {
        return $this->parentInternalVersion;
    }
    /**
     * Set parentInternalVersion value
     * @param int $parentInternalVersion
     * @return \Pggns\MidocoApi\Order\StructType\CreateMilesAndMoreBurnTransactionRequest
     */
    public function setParentInternalVersion(?int $parentInternalVersion = -1): self
    {
        // validation for constraint: int
        if (!is_null($parentInternalVersion) && !(is_int($parentInternalVersion) || ctype_digit($parentInternalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($parentInternalVersion, true), gettype($parentInternalVersion)), __LINE__);
        }
        $this->parentInternalVersion = $parentInternalVersion;
        
        return $this;
    }
    /**
     * Get requestedAmount value
     * @return float|null
     */
    public function getRequestedAmount(): ?float
    {
        return $this->requestedAmount;
    }
    /**
     * Set requestedAmount value
     * @param float $requestedAmount
     * @return \Pggns\MidocoApi\Order\StructType\CreateMilesAndMoreBurnTransactionRequest
     */
    public function setRequestedAmount(?float $requestedAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($requestedAmount) && !(is_float($requestedAmount) || is_numeric($requestedAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($requestedAmount, true), gettype($requestedAmount)), __LINE__);
        }
        $this->requestedAmount = $requestedAmount;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Order\StructType\CreateMilesAndMoreBurnTransactionRequest
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get cardNo value
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
    }
    /**
     * Set cardNo value
     * @param string $cardNo
     * @return \Pggns\MidocoApi\Order\StructType\CreateMilesAndMoreBurnTransactionRequest
     */
    public function setCardNo(?string $cardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($cardNo) && !is_string($cardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardNo, true), gettype($cardNo)), __LINE__);
        }
        $this->cardNo = $cardNo;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Order\StructType\CreateMilesAndMoreBurnTransactionRequest
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
}
