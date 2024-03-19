<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MdcSettlementBillingMdocDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MdcSettlementBillingMdocDTO extends AbstractStructBase
{
    /**
     * The documentNatureId
     * @var string|null
     */
    protected ?string $documentNatureId = null;
    /**
     * The id
     * @var int|null
     */
    protected ?int $id = null;
    /**
     * The mdcSettlementBillingId
     * @var int|null
     */
    protected ?int $mdcSettlementBillingId = null;
    /**
     * The noOfMdocs
     * @var int|null
     */
    protected ?int $noOfMdocs = null;
    /**
     * The settlementMonth
     * @var string|null
     */
    protected ?string $settlementMonth = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for MdcSettlementBillingMdocDTO
     * @uses MdcSettlementBillingMdocDTO::setDocumentNatureId()
     * @uses MdcSettlementBillingMdocDTO::setId()
     * @uses MdcSettlementBillingMdocDTO::setMdcSettlementBillingId()
     * @uses MdcSettlementBillingMdocDTO::setNoOfMdocs()
     * @uses MdcSettlementBillingMdocDTO::setSettlementMonth()
     * @uses MdcSettlementBillingMdocDTO::setUnitName()
     * @param string $documentNatureId
     * @param int $id
     * @param int $mdcSettlementBillingId
     * @param int $noOfMdocs
     * @param string $settlementMonth
     * @param string $unitName
     */
    public function __construct(?string $documentNatureId = null, ?int $id = null, ?int $mdcSettlementBillingId = null, ?int $noOfMdocs = null, ?string $settlementMonth = null, ?string $unitName = null)
    {
        $this
            ->setDocumentNatureId($documentNatureId)
            ->setId($id)
            ->setMdcSettlementBillingId($mdcSettlementBillingId)
            ->setNoOfMdocs($noOfMdocs)
            ->setSettlementMonth($settlementMonth)
            ->setUnitName($unitName);
    }
    /**
     * Get documentNatureId value
     * @return string|null
     */
    public function getDocumentNatureId(): ?string
    {
        return $this->documentNatureId;
    }
    /**
     * Set documentNatureId value
     * @param string $documentNatureId
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO
     */
    public function setDocumentNatureId(?string $documentNatureId = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNatureId) && !is_string($documentNatureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNatureId, true), gettype($documentNatureId)), __LINE__);
        }
        $this->documentNatureId = $documentNatureId;
        
        return $this;
    }
    /**
     * Get id value
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param int $id
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO
     */
    public function setId(?int $id = null): self
    {
        // validation for constraint: int
        if (!is_null($id) && !(is_int($id) || ctype_digit($id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get mdcSettlementBillingId value
     * @return int|null
     */
    public function getMdcSettlementBillingId(): ?int
    {
        return $this->mdcSettlementBillingId;
    }
    /**
     * Set mdcSettlementBillingId value
     * @param int $mdcSettlementBillingId
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO
     */
    public function setMdcSettlementBillingId(?int $mdcSettlementBillingId = null): self
    {
        // validation for constraint: int
        if (!is_null($mdcSettlementBillingId) && !(is_int($mdcSettlementBillingId) || ctype_digit($mdcSettlementBillingId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mdcSettlementBillingId, true), gettype($mdcSettlementBillingId)), __LINE__);
        }
        $this->mdcSettlementBillingId = $mdcSettlementBillingId;
        
        return $this;
    }
    /**
     * Get noOfMdocs value
     * @return int|null
     */
    public function getNoOfMdocs(): ?int
    {
        return $this->noOfMdocs;
    }
    /**
     * Set noOfMdocs value
     * @param int $noOfMdocs
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO
     */
    public function setNoOfMdocs(?int $noOfMdocs = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfMdocs) && !(is_int($noOfMdocs) || ctype_digit($noOfMdocs))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfMdocs, true), gettype($noOfMdocs)), __LINE__);
        }
        $this->noOfMdocs = $noOfMdocs;
        
        return $this;
    }
    /**
     * Get settlementMonth value
     * @return string|null
     */
    public function getSettlementMonth(): ?string
    {
        return $this->settlementMonth;
    }
    /**
     * Set settlementMonth value
     * @param string $settlementMonth
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO
     */
    public function setSettlementMonth(?string $settlementMonth = null): self
    {
        // validation for constraint: string
        if (!is_null($settlementMonth) && !is_string($settlementMonth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($settlementMonth, true), gettype($settlementMonth)), __LINE__);
        }
        $this->settlementMonth = $settlementMonth;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Order\StructType\MdcSettlementBillingMdocDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
