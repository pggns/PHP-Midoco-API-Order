<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingPrintSettingDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingPrintSettingDTO extends AbstractStructBase
{
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The printIndividualPrices
     * @var bool|null
     */
    protected ?bool $printIndividualPrices = null;
    /**
     * The printRoute
     * @var bool|null
     */
    protected ?bool $printRoute = null;
    /**
     * The printTravellers
     * @var bool|null
     */
    protected ?bool $printTravellers = null;
    /**
     * The useRemarks
     * @var bool|null
     */
    protected ?bool $useRemarks = null;
    /**
     * Constructor method for BillingPrintSettingDTO
     * @uses BillingPrintSettingDTO::setDocumentId()
     * @uses BillingPrintSettingDTO::setPrintIndividualPrices()
     * @uses BillingPrintSettingDTO::setPrintRoute()
     * @uses BillingPrintSettingDTO::setPrintTravellers()
     * @uses BillingPrintSettingDTO::setUseRemarks()
     * @param int $documentId
     * @param bool $printIndividualPrices
     * @param bool $printRoute
     * @param bool $printTravellers
     * @param bool $useRemarks
     */
    public function __construct(?int $documentId = null, ?bool $printIndividualPrices = null, ?bool $printRoute = null, ?bool $printTravellers = null, ?bool $useRemarks = null)
    {
        $this
            ->setDocumentId($documentId)
            ->setPrintIndividualPrices($printIndividualPrices)
            ->setPrintRoute($printRoute)
            ->setPrintTravellers($printTravellers)
            ->setUseRemarks($useRemarks);
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
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintSettingDTO
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
     * Get printIndividualPrices value
     * @return bool|null
     */
    public function getPrintIndividualPrices(): ?bool
    {
        return $this->printIndividualPrices;
    }
    /**
     * Set printIndividualPrices value
     * @param bool $printIndividualPrices
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintSettingDTO
     */
    public function setPrintIndividualPrices(?bool $printIndividualPrices = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printIndividualPrices) && !is_bool($printIndividualPrices)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printIndividualPrices, true), gettype($printIndividualPrices)), __LINE__);
        }
        $this->printIndividualPrices = $printIndividualPrices;
        
        return $this;
    }
    /**
     * Get printRoute value
     * @return bool|null
     */
    public function getPrintRoute(): ?bool
    {
        return $this->printRoute;
    }
    /**
     * Set printRoute value
     * @param bool $printRoute
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintSettingDTO
     */
    public function setPrintRoute(?bool $printRoute = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printRoute) && !is_bool($printRoute)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printRoute, true), gettype($printRoute)), __LINE__);
        }
        $this->printRoute = $printRoute;
        
        return $this;
    }
    /**
     * Get printTravellers value
     * @return bool|null
     */
    public function getPrintTravellers(): ?bool
    {
        return $this->printTravellers;
    }
    /**
     * Set printTravellers value
     * @param bool $printTravellers
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintSettingDTO
     */
    public function setPrintTravellers(?bool $printTravellers = null): self
    {
        // validation for constraint: boolean
        if (!is_null($printTravellers) && !is_bool($printTravellers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($printTravellers, true), gettype($printTravellers)), __LINE__);
        }
        $this->printTravellers = $printTravellers;
        
        return $this;
    }
    /**
     * Get useRemarks value
     * @return bool|null
     */
    public function getUseRemarks(): ?bool
    {
        return $this->useRemarks;
    }
    /**
     * Set useRemarks value
     * @param bool $useRemarks
     * @return \Pggns\MidocoApi\Order\StructType\BillingPrintSettingDTO
     */
    public function setUseRemarks(?bool $useRemarks = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useRemarks) && !is_bool($useRemarks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useRemarks, true), gettype($useRemarks)), __LINE__);
        }
        $this->useRemarks = $useRemarks;
        
        return $this;
    }
}
