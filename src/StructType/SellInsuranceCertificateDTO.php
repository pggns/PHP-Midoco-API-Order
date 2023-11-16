<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellInsuranceCertificateDTO StructType
 * @subpackage Structs
 */
class SellInsuranceCertificateDTO extends AbstractStructBase
{
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The insuranceId
     * @var int|null
     */
    protected ?int $insuranceId = null;
    /**
     * The isCanceled
     * @var bool|null
     */
    protected ?bool $isCanceled = null;
    /**
     * The isOsstCanceled
     * @var bool|null
     */
    protected ?bool $isOsstCanceled = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * The modifyTimestamp
     * @var string|null
     */
    protected ?string $modifyTimestamp = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The orderDocumentId
     * @var int|null
     */
    protected ?int $orderDocumentId = null;
    /**
     * The osstFileName
     * @var string|null
     */
    protected ?string $osstFileName = null;
    /**
     * Constructor method for SellInsuranceCertificateDTO
     * @uses SellInsuranceCertificateDTO::setCreationTimestamp()
     * @uses SellInsuranceCertificateDTO::setCreationUser()
     * @uses SellInsuranceCertificateDTO::setInsuranceId()
     * @uses SellInsuranceCertificateDTO::setIsCanceled()
     * @uses SellInsuranceCertificateDTO::setIsOsstCanceled()
     * @uses SellInsuranceCertificateDTO::setItemId()
     * @uses SellInsuranceCertificateDTO::setModifyTimestamp()
     * @uses SellInsuranceCertificateDTO::setModifyUser()
     * @uses SellInsuranceCertificateDTO::setOrderDocumentId()
     * @uses SellInsuranceCertificateDTO::setOsstFileName()
     * @param string $creationTimestamp
     * @param int $creationUser
     * @param int $insuranceId
     * @param bool $isCanceled
     * @param bool $isOsstCanceled
     * @param int $itemId
     * @param string $modifyTimestamp
     * @param int $modifyUser
     * @param int $orderDocumentId
     * @param string $osstFileName
     */
    public function __construct(?string $creationTimestamp = null, ?int $creationUser = null, ?int $insuranceId = null, ?bool $isCanceled = null, ?bool $isOsstCanceled = null, ?int $itemId = null, ?string $modifyTimestamp = null, ?int $modifyUser = null, ?int $orderDocumentId = null, ?string $osstFileName = null)
    {
        $this
            ->setCreationTimestamp($creationTimestamp)
            ->setCreationUser($creationUser)
            ->setInsuranceId($insuranceId)
            ->setIsCanceled($isCanceled)
            ->setIsOsstCanceled($isOsstCanceled)
            ->setItemId($itemId)
            ->setModifyTimestamp($modifyTimestamp)
            ->setModifyUser($modifyUser)
            ->setOrderDocumentId($orderDocumentId)
            ->setOsstFileName($osstFileName);
    }
    /**
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\SellInsuranceCertificateDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\SellInsuranceCertificateDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get insuranceId value
     * @return int|null
     */
    public function getInsuranceId(): ?int
    {
        return $this->insuranceId;
    }
    /**
     * Set insuranceId value
     * @param int $insuranceId
     * @return \Pggns\MidocoApi\Order\StructType\SellInsuranceCertificateDTO
     */
    public function setInsuranceId(?int $insuranceId = null): self
    {
        // validation for constraint: int
        if (!is_null($insuranceId) && !(is_int($insuranceId) || ctype_digit($insuranceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($insuranceId, true), gettype($insuranceId)), __LINE__);
        }
        $this->insuranceId = $insuranceId;
        
        return $this;
    }
    /**
     * Get isCanceled value
     * @return bool|null
     */
    public function getIsCanceled(): ?bool
    {
        return $this->isCanceled;
    }
    /**
     * Set isCanceled value
     * @param bool $isCanceled
     * @return \Pggns\MidocoApi\Order\StructType\SellInsuranceCertificateDTO
     */
    public function setIsCanceled(?bool $isCanceled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCanceled) && !is_bool($isCanceled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCanceled, true), gettype($isCanceled)), __LINE__);
        }
        $this->isCanceled = $isCanceled;
        
        return $this;
    }
    /**
     * Get isOsstCanceled value
     * @return bool|null
     */
    public function getIsOsstCanceled(): ?bool
    {
        return $this->isOsstCanceled;
    }
    /**
     * Set isOsstCanceled value
     * @param bool $isOsstCanceled
     * @return \Pggns\MidocoApi\Order\StructType\SellInsuranceCertificateDTO
     */
    public function setIsOsstCanceled(?bool $isOsstCanceled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isOsstCanceled) && !is_bool($isOsstCanceled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isOsstCanceled, true), gettype($isOsstCanceled)), __LINE__);
        }
        $this->isOsstCanceled = $isOsstCanceled;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\SellInsuranceCertificateDTO
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
    /**
     * Get modifyTimestamp value
     * @return string|null
     */
    public function getModifyTimestamp(): ?string
    {
        return $this->modifyTimestamp;
    }
    /**
     * Set modifyTimestamp value
     * @param string $modifyTimestamp
     * @return \Pggns\MidocoApi\Order\StructType\SellInsuranceCertificateDTO
     */
    public function setModifyTimestamp(?string $modifyTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTimestamp) && !is_string($modifyTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTimestamp, true), gettype($modifyTimestamp)), __LINE__);
        }
        $this->modifyTimestamp = $modifyTimestamp;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\SellInsuranceCertificateDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get orderDocumentId value
     * @return int|null
     */
    public function getOrderDocumentId(): ?int
    {
        return $this->orderDocumentId;
    }
    /**
     * Set orderDocumentId value
     * @param int $orderDocumentId
     * @return \Pggns\MidocoApi\Order\StructType\SellInsuranceCertificateDTO
     */
    public function setOrderDocumentId(?int $orderDocumentId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderDocumentId) && !(is_int($orderDocumentId) || ctype_digit($orderDocumentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderDocumentId, true), gettype($orderDocumentId)), __LINE__);
        }
        $this->orderDocumentId = $orderDocumentId;
        
        return $this;
    }
    /**
     * Get osstFileName value
     * @return string|null
     */
    public function getOsstFileName(): ?string
    {
        return $this->osstFileName;
    }
    /**
     * Set osstFileName value
     * @param string $osstFileName
     * @return \Pggns\MidocoApi\Order\StructType\SellInsuranceCertificateDTO
     */
    public function setOsstFileName(?string $osstFileName = null): self
    {
        // validation for constraint: string
        if (!is_null($osstFileName) && !is_string($osstFileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($osstFileName, true), gettype($osstFileName)), __LINE__);
        }
        $this->osstFileName = $osstFileName;
        
        return $this;
    }
}
