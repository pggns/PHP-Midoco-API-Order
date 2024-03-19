<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintAllUsersBonusCalculationRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintAllUsersBonusCalculationRequest extends AbstractStructBase
{
    /**
     * The bonusId
     * @var int|null
     */
    protected ?int $bonusId = null;
    /**
     * The isPreview
     * @var bool|null
     */
    protected ?bool $isPreview = null;
    /**
     * The isSummaryOnly
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isSummaryOnly = null;
    /**
     * Constructor method for PrintAllUsersBonusCalculationRequest
     * @uses PrintAllUsersBonusCalculationRequest::setBonusId()
     * @uses PrintAllUsersBonusCalculationRequest::setIsPreview()
     * @uses PrintAllUsersBonusCalculationRequest::setIsSummaryOnly()
     * @param int $bonusId
     * @param bool $isPreview
     * @param bool $isSummaryOnly
     */
    public function __construct(?int $bonusId = null, ?bool $isPreview = null, ?bool $isSummaryOnly = false)
    {
        $this
            ->setBonusId($bonusId)
            ->setIsPreview($isPreview)
            ->setIsSummaryOnly($isSummaryOnly);
    }
    /**
     * Get bonusId value
     * @return int|null
     */
    public function getBonusId(): ?int
    {
        return $this->bonusId;
    }
    /**
     * Set bonusId value
     * @param int $bonusId
     * @return \Pggns\MidocoApi\Order\StructType\PrintAllUsersBonusCalculationRequest
     */
    public function setBonusId(?int $bonusId = null): self
    {
        // validation for constraint: int
        if (!is_null($bonusId) && !(is_int($bonusId) || ctype_digit($bonusId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bonusId, true), gettype($bonusId)), __LINE__);
        }
        $this->bonusId = $bonusId;
        
        return $this;
    }
    /**
     * Get isPreview value
     * @return bool|null
     */
    public function getIsPreview(): ?bool
    {
        return $this->isPreview;
    }
    /**
     * Set isPreview value
     * @param bool $isPreview
     * @return \Pggns\MidocoApi\Order\StructType\PrintAllUsersBonusCalculationRequest
     */
    public function setIsPreview(?bool $isPreview = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isPreview) && !is_bool($isPreview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPreview, true), gettype($isPreview)), __LINE__);
        }
        $this->isPreview = $isPreview;
        
        return $this;
    }
    /**
     * Get isSummaryOnly value
     * @return bool|null
     */
    public function getIsSummaryOnly(): ?bool
    {
        return $this->isSummaryOnly;
    }
    /**
     * Set isSummaryOnly value
     * @param bool $isSummaryOnly
     * @return \Pggns\MidocoApi\Order\StructType\PrintAllUsersBonusCalculationRequest
     */
    public function setIsSummaryOnly(?bool $isSummaryOnly = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isSummaryOnly) && !is_bool($isSummaryOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSummaryOnly, true), gettype($isSummaryOnly)), __LINE__);
        }
        $this->isSummaryOnly = $isSummaryOnly;
        
        return $this;
    }
}
