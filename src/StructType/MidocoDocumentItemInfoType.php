<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDocumentItemInfoType StructType
 * @subpackage Structs
 */
class MidocoDocumentItemInfoType extends AbstractStructBase
{
    /**
     * The sellitemId
     * @var int|null
     */
    protected ?int $sellitemId = null;
    /**
     * The documentNo
     * @var string|null
     */
    protected ?string $documentNo = null;
    /**
     * The travelType
     * @var string|null
     */
    protected ?string $travelType = null;
    /**
     * Constructor method for MidocoDocumentItemInfoType
     * @uses MidocoDocumentItemInfoType::setSellitemId()
     * @uses MidocoDocumentItemInfoType::setDocumentNo()
     * @uses MidocoDocumentItemInfoType::setTravelType()
     * @param int $sellitemId
     * @param string $documentNo
     * @param string $travelType
     */
    public function __construct(?int $sellitemId = null, ?string $documentNo = null, ?string $travelType = null)
    {
        $this
            ->setSellitemId($sellitemId)
            ->setDocumentNo($documentNo)
            ->setTravelType($travelType);
    }
    /**
     * Get sellitemId value
     * @return int|null
     */
    public function getSellitemId(): ?int
    {
        return $this->sellitemId;
    }
    /**
     * Set sellitemId value
     * @param int $sellitemId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentItemInfoType
     */
    public function setSellitemId(?int $sellitemId = null): self
    {
        // validation for constraint: int
        if (!is_null($sellitemId) && !(is_int($sellitemId) || ctype_digit($sellitemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($sellitemId, true), gettype($sellitemId)), __LINE__);
        }
        $this->sellitemId = $sellitemId;
        
        return $this;
    }
    /**
     * Get documentNo value
     * @return string|null
     */
    public function getDocumentNo(): ?string
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param string $documentNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentItemInfoType
     */
    public function setDocumentNo(?string $documentNo = null): self
    {
        // validation for constraint: string
        if (!is_null($documentNo) && !is_string($documentNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
    /**
     * Get travelType value
     * @return string|null
     */
    public function getTravelType(): ?string
    {
        return $this->travelType;
    }
    /**
     * Set travelType value
     * @param string $travelType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDocumentItemInfoType
     */
    public function setTravelType(?string $travelType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelType) && !is_string($travelType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelType, true), gettype($travelType)), __LINE__);
        }
        $this->travelType = $travelType;
        
        return $this;
    }
}
