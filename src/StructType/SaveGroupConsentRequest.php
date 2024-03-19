<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveGroupConsentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveGroupConsentRequest extends AbstractStructBase
{
    /**
     * The MidocoGroupConsent
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoGroupConsent
     * @var \Pggns\MidocoApi\Order\StructType\MidocoGroupConsent
     */
    protected \Pggns\MidocoApi\Order\StructType\MidocoGroupConsent $MidocoGroupConsent;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The internalVersion
     * @var int|null
     */
    protected ?int $internalVersion = null;
    /**
     * Constructor method for SaveGroupConsentRequest
     * @uses SaveGroupConsentRequest::setMidocoGroupConsent()
     * @uses SaveGroupConsentRequest::setCustomerId()
     * @uses SaveGroupConsentRequest::setInternalVersion()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoGroupConsent $midocoGroupConsent
     * @param int $customerId
     * @param int $internalVersion
     */
    public function __construct(\Pggns\MidocoApi\Order\StructType\MidocoGroupConsent $midocoGroupConsent, ?int $customerId = null, ?int $internalVersion = null)
    {
        $this
            ->setMidocoGroupConsent($midocoGroupConsent)
            ->setCustomerId($customerId)
            ->setInternalVersion($internalVersion);
    }
    /**
     * Get MidocoGroupConsent value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoGroupConsent
     */
    public function getMidocoGroupConsent(): \Pggns\MidocoApi\Order\StructType\MidocoGroupConsent
    {
        return $this->MidocoGroupConsent;
    }
    /**
     * Set MidocoGroupConsent value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoGroupConsent $midocoGroupConsent
     * @return \Pggns\MidocoApi\Order\StructType\SaveGroupConsentRequest
     */
    public function setMidocoGroupConsent(\Pggns\MidocoApi\Order\StructType\MidocoGroupConsent $midocoGroupConsent): self
    {
        $this->MidocoGroupConsent = $midocoGroupConsent;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Order\StructType\SaveGroupConsentRequest
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get internalVersion value
     * @return int|null
     */
    public function getInternalVersion(): ?int
    {
        return $this->internalVersion;
    }
    /**
     * Set internalVersion value
     * @param int $internalVersion
     * @return \Pggns\MidocoApi\Order\StructType\SaveGroupConsentRequest
     */
    public function setInternalVersion(?int $internalVersion = null): self
    {
        // validation for constraint: int
        if (!is_null($internalVersion) && !(is_int($internalVersion) || ctype_digit($internalVersion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($internalVersion, true), gettype($internalVersion)), __LINE__);
        }
        $this->internalVersion = $internalVersion;
        
        return $this;
    }
}
