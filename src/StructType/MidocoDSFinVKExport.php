<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDSFinVKExport StructType
 * @subpackage Structs
 */
class MidocoDSFinVKExport extends AbstractStructBase
{
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The exportId
     * @var int|null
     */
    protected ?int $exportId = null;
    /**
     * The exportDate
     * @var string|null
     */
    protected ?string $exportDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The cashBalanceNoFrom
     * @var int|null
     */
    protected ?int $cashBalanceNoFrom = null;
    /**
     * The cashBalanceNoTo
     * @var int|null
     */
    protected ?int $cashBalanceNoTo = null;
    /**
     * The cashBalanceDateFrom
     * @var string|null
     */
    protected ?string $cashBalanceDateFrom = null;
    /**
     * The cashBalanceDateTo
     * @var string|null
     */
    protected ?string $cashBalanceDateTo = null;
    /**
     * The repositoryId
     * @var int|null
     */
    protected ?int $repositoryId = null;
    /**
     * Constructor method for MidocoDSFinVKExport
     * @uses MidocoDSFinVKExport::setUnitName()
     * @uses MidocoDSFinVKExport::setExportId()
     * @uses MidocoDSFinVKExport::setExportDate()
     * @uses MidocoDSFinVKExport::setCreationUser()
     * @uses MidocoDSFinVKExport::setCashBalanceNoFrom()
     * @uses MidocoDSFinVKExport::setCashBalanceNoTo()
     * @uses MidocoDSFinVKExport::setCashBalanceDateFrom()
     * @uses MidocoDSFinVKExport::setCashBalanceDateTo()
     * @uses MidocoDSFinVKExport::setRepositoryId()
     * @param string $unitName
     * @param int $exportId
     * @param string $exportDate
     * @param int $creationUser
     * @param int $cashBalanceNoFrom
     * @param int $cashBalanceNoTo
     * @param string $cashBalanceDateFrom
     * @param string $cashBalanceDateTo
     * @param int $repositoryId
     */
    public function __construct(?string $unitName = null, ?int $exportId = null, ?string $exportDate = null, ?int $creationUser = null, ?int $cashBalanceNoFrom = null, ?int $cashBalanceNoTo = null, ?string $cashBalanceDateFrom = null, ?string $cashBalanceDateTo = null, ?int $repositoryId = null)
    {
        $this
            ->setUnitName($unitName)
            ->setExportId($exportId)
            ->setExportDate($exportDate)
            ->setCreationUser($creationUser)
            ->setCashBalanceNoFrom($cashBalanceNoFrom)
            ->setCashBalanceNoTo($cashBalanceNoTo)
            ->setCashBalanceDateFrom($cashBalanceDateFrom)
            ->setCashBalanceDateTo($cashBalanceDateTo)
            ->setRepositoryId($repositoryId);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport
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
    /**
     * Get exportId value
     * @return int|null
     */
    public function getExportId(): ?int
    {
        return $this->exportId;
    }
    /**
     * Set exportId value
     * @param int $exportId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport
     */
    public function setExportId(?int $exportId = null): self
    {
        // validation for constraint: int
        if (!is_null($exportId) && !(is_int($exportId) || ctype_digit($exportId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($exportId, true), gettype($exportId)), __LINE__);
        }
        $this->exportId = $exportId;
        
        return $this;
    }
    /**
     * Get exportDate value
     * @return string|null
     */
    public function getExportDate(): ?string
    {
        return $this->exportDate;
    }
    /**
     * Set exportDate value
     * @param string $exportDate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport
     */
    public function setExportDate(?string $exportDate = null): self
    {
        // validation for constraint: string
        if (!is_null($exportDate) && !is_string($exportDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportDate, true), gettype($exportDate)), __LINE__);
        }
        $this->exportDate = $exportDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport
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
     * Get cashBalanceNoFrom value
     * @return int|null
     */
    public function getCashBalanceNoFrom(): ?int
    {
        return $this->cashBalanceNoFrom;
    }
    /**
     * Set cashBalanceNoFrom value
     * @param int $cashBalanceNoFrom
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport
     */
    public function setCashBalanceNoFrom(?int $cashBalanceNoFrom = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBalanceNoFrom) && !(is_int($cashBalanceNoFrom) || ctype_digit($cashBalanceNoFrom))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBalanceNoFrom, true), gettype($cashBalanceNoFrom)), __LINE__);
        }
        $this->cashBalanceNoFrom = $cashBalanceNoFrom;
        
        return $this;
    }
    /**
     * Get cashBalanceNoTo value
     * @return int|null
     */
    public function getCashBalanceNoTo(): ?int
    {
        return $this->cashBalanceNoTo;
    }
    /**
     * Set cashBalanceNoTo value
     * @param int $cashBalanceNoTo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport
     */
    public function setCashBalanceNoTo(?int $cashBalanceNoTo = null): self
    {
        // validation for constraint: int
        if (!is_null($cashBalanceNoTo) && !(is_int($cashBalanceNoTo) || ctype_digit($cashBalanceNoTo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cashBalanceNoTo, true), gettype($cashBalanceNoTo)), __LINE__);
        }
        $this->cashBalanceNoTo = $cashBalanceNoTo;
        
        return $this;
    }
    /**
     * Get cashBalanceDateFrom value
     * @return string|null
     */
    public function getCashBalanceDateFrom(): ?string
    {
        return $this->cashBalanceDateFrom;
    }
    /**
     * Set cashBalanceDateFrom value
     * @param string $cashBalanceDateFrom
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport
     */
    public function setCashBalanceDateFrom(?string $cashBalanceDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($cashBalanceDateFrom) && !is_string($cashBalanceDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cashBalanceDateFrom, true), gettype($cashBalanceDateFrom)), __LINE__);
        }
        $this->cashBalanceDateFrom = $cashBalanceDateFrom;
        
        return $this;
    }
    /**
     * Get cashBalanceDateTo value
     * @return string|null
     */
    public function getCashBalanceDateTo(): ?string
    {
        return $this->cashBalanceDateTo;
    }
    /**
     * Set cashBalanceDateTo value
     * @param string $cashBalanceDateTo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport
     */
    public function setCashBalanceDateTo(?string $cashBalanceDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($cashBalanceDateTo) && !is_string($cashBalanceDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cashBalanceDateTo, true), gettype($cashBalanceDateTo)), __LINE__);
        }
        $this->cashBalanceDateTo = $cashBalanceDateTo;
        
        return $this;
    }
    /**
     * Get repositoryId value
     * @return int|null
     */
    public function getRepositoryId(): ?int
    {
        return $this->repositoryId;
    }
    /**
     * Set repositoryId value
     * @param int $repositoryId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDSFinVKExport
     */
    public function setRepositoryId(?int $repositoryId = null): self
    {
        // validation for constraint: int
        if (!is_null($repositoryId) && !(is_int($repositoryId) || ctype_digit($repositoryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repositoryId, true), gettype($repositoryId)), __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
}
