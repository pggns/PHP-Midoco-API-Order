<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelSubscriptionResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CancelSubscriptionResponse extends AbstractStructBase
{
    /**
     * The success
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $success = null;
    /**
     * The errorDescription
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorDescription = null;
    /**
     * The document
     * Meta information extracted from the WSDL
     * - documentation: The confirmation of cancellation document send by email as (pdf).
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $document = null;
    /**
     * The endDate
     * Meta information extracted from the WSDL
     * - documentation: The end date of subscription. This is not the date of cancelation date.
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $endDate = null;
    /**
     * Constructor method for CancelSubscriptionResponse
     * @uses CancelSubscriptionResponse::setSuccess()
     * @uses CancelSubscriptionResponse::setErrorDescription()
     * @uses CancelSubscriptionResponse::setDocument()
     * @uses CancelSubscriptionResponse::setEndDate()
     * @param bool $success
     * @param string $errorDescription
     * @param string $document
     * @param string $endDate
     */
    public function __construct(?bool $success = null, ?string $errorDescription = null, ?string $document = null, ?string $endDate = null)
    {
        $this
            ->setSuccess($success)
            ->setErrorDescription($errorDescription)
            ->setDocument($document)
            ->setEndDate($endDate);
    }
    /**
     * Get success value
     * @return bool|null
     */
    public function getSuccess(): ?bool
    {
        return $this->success;
    }
    /**
     * Set success value
     * @param bool $success
     * @return \Pggns\MidocoApi\Order\StructType\CancelSubscriptionResponse
     */
    public function setSuccess(?bool $success = null): self
    {
        // validation for constraint: boolean
        if (!is_null($success) && !is_bool($success)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($success, true), gettype($success)), __LINE__);
        }
        $this->success = $success;
        
        return $this;
    }
    /**
     * Get errorDescription value
     * @return string|null
     */
    public function getErrorDescription(): ?string
    {
        return $this->errorDescription;
    }
    /**
     * Set errorDescription value
     * @param string $errorDescription
     * @return \Pggns\MidocoApi\Order\StructType\CancelSubscriptionResponse
     */
    public function setErrorDescription(?string $errorDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($errorDescription) && !is_string($errorDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorDescription, true), gettype($errorDescription)), __LINE__);
        }
        $this->errorDescription = $errorDescription;
        
        return $this;
    }
    /**
     * Get document value
     * @return string|null
     */
    public function getDocument(): ?string
    {
        return $this->document;
    }
    /**
     * Set document value
     * @param string $document
     * @return \Pggns\MidocoApi\Order\StructType\CancelSubscriptionResponse
     */
    public function setDocument(?string $document = null): self
    {
        // validation for constraint: string
        if (!is_null($document) && !is_string($document)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($document, true), gettype($document)), __LINE__);
        }
        $this->document = $document;
        
        return $this;
    }
    /**
     * Get endDate value
     * @return string|null
     */
    public function getEndDate(): ?string
    {
        return $this->endDate;
    }
    /**
     * Set endDate value
     * @param string $endDate
     * @return \Pggns\MidocoApi\Order\StructType\CancelSubscriptionResponse
     */
    public function setEndDate(?string $endDate = null): self
    {
        // validation for constraint: string
        if (!is_null($endDate) && !is_string($endDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endDate, true), gettype($endDate)), __LINE__);
        }
        $this->endDate = $endDate;
        
        return $this;
    }
}
