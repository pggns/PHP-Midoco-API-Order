<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTextRemark StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoTextRemark extends RemarkDTO
{
    /**
     * The cultureName
     * @var string|null
     */
    protected ?string $cultureName = null;
    /**
     * The useInEMailAsInteger
     * @var int|null
     */
    protected ?int $useInEMailAsInteger = null;
    /**
     * The useInOrderAsInteger
     * @var int|null
     */
    protected ?int $useInOrderAsInteger = null;
    /**
     * The useInServiceAsInteger
     * @var int|null
     */
    protected ?int $useInServiceAsInteger = null;
    /**
     * The constraintOrgunitAsInteger
     * @var int|null
     */
    protected ?int $constraintOrgunitAsInteger = null;
    /**
     * The constraintSupplierAsInteger
     * @var int|null
     */
    protected ?int $constraintSupplierAsInteger = null;
    /**
     * The flightTimeChangeAsInteger
     * @var int|null
     */
    protected ?int $flightTimeChangeAsInteger = null;
    /**
     * The useInVerkAsInteger
     * @var int|null
     */
    protected ?int $useInVerkAsInteger = null;
    /**
     * The useInNoticeAsInteger
     * @var int|null
     */
    protected ?int $useInNoticeAsInteger = null;
    /**
     * The useAsTaskAsInteger
     * @var int|null
     */
    protected ?int $useAsTaskAsInteger = null;
    /**
     * The useInAdditServiceAsInteger
     * @var int|null
     */
    protected ?int $useInAdditServiceAsInteger = null;
    /**
     * The isInheritance
     * @var bool|null
     */
    protected ?bool $isInheritance = null;
    /**
     * Constructor method for MidocoTextRemark
     * @uses MidocoTextRemark::setCultureName()
     * @uses MidocoTextRemark::setUseInEMailAsInteger()
     * @uses MidocoTextRemark::setUseInOrderAsInteger()
     * @uses MidocoTextRemark::setUseInServiceAsInteger()
     * @uses MidocoTextRemark::setConstraintOrgunitAsInteger()
     * @uses MidocoTextRemark::setConstraintSupplierAsInteger()
     * @uses MidocoTextRemark::setFlightTimeChangeAsInteger()
     * @uses MidocoTextRemark::setUseInVerkAsInteger()
     * @uses MidocoTextRemark::setUseInNoticeAsInteger()
     * @uses MidocoTextRemark::setUseAsTaskAsInteger()
     * @uses MidocoTextRemark::setUseInAdditServiceAsInteger()
     * @uses MidocoTextRemark::setIsInheritance()
     * @param string $cultureName
     * @param int $useInEMailAsInteger
     * @param int $useInOrderAsInteger
     * @param int $useInServiceAsInteger
     * @param int $constraintOrgunitAsInteger
     * @param int $constraintSupplierAsInteger
     * @param int $flightTimeChangeAsInteger
     * @param int $useInVerkAsInteger
     * @param int $useInNoticeAsInteger
     * @param int $useAsTaskAsInteger
     * @param int $useInAdditServiceAsInteger
     * @param bool $isInheritance
     */
    public function __construct(?string $cultureName = null, ?int $useInEMailAsInteger = null, ?int $useInOrderAsInteger = null, ?int $useInServiceAsInteger = null, ?int $constraintOrgunitAsInteger = null, ?int $constraintSupplierAsInteger = null, ?int $flightTimeChangeAsInteger = null, ?int $useInVerkAsInteger = null, ?int $useInNoticeAsInteger = null, ?int $useAsTaskAsInteger = null, ?int $useInAdditServiceAsInteger = null, ?bool $isInheritance = null)
    {
        $this
            ->setCultureName($cultureName)
            ->setUseInEMailAsInteger($useInEMailAsInteger)
            ->setUseInOrderAsInteger($useInOrderAsInteger)
            ->setUseInServiceAsInteger($useInServiceAsInteger)
            ->setConstraintOrgunitAsInteger($constraintOrgunitAsInteger)
            ->setConstraintSupplierAsInteger($constraintSupplierAsInteger)
            ->setFlightTimeChangeAsInteger($flightTimeChangeAsInteger)
            ->setUseInVerkAsInteger($useInVerkAsInteger)
            ->setUseInNoticeAsInteger($useInNoticeAsInteger)
            ->setUseAsTaskAsInteger($useAsTaskAsInteger)
            ->setUseInAdditServiceAsInteger($useInAdditServiceAsInteger)
            ->setIsInheritance($isInheritance);
    }
    /**
     * Get cultureName value
     * @return string|null
     */
    public function getCultureName(): ?string
    {
        return $this->cultureName;
    }
    /**
     * Set cultureName value
     * @param string $cultureName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTextRemark
     */
    public function setCultureName(?string $cultureName = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureName) && !is_string($cultureName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureName, true), gettype($cultureName)), __LINE__);
        }
        $this->cultureName = $cultureName;
        
        return $this;
    }
    /**
     * Get useInEMailAsInteger value
     * @return int|null
     */
    public function getUseInEMailAsInteger(): ?int
    {
        return $this->useInEMailAsInteger;
    }
    /**
     * Set useInEMailAsInteger value
     * @param int $useInEMailAsInteger
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTextRemark
     */
    public function setUseInEMailAsInteger(?int $useInEMailAsInteger = null): self
    {
        // validation for constraint: int
        if (!is_null($useInEMailAsInteger) && !(is_int($useInEMailAsInteger) || ctype_digit($useInEMailAsInteger))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($useInEMailAsInteger, true), gettype($useInEMailAsInteger)), __LINE__);
        }
        $this->useInEMailAsInteger = $useInEMailAsInteger;
        
        return $this;
    }
    /**
     * Get useInOrderAsInteger value
     * @return int|null
     */
    public function getUseInOrderAsInteger(): ?int
    {
        return $this->useInOrderAsInteger;
    }
    /**
     * Set useInOrderAsInteger value
     * @param int $useInOrderAsInteger
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTextRemark
     */
    public function setUseInOrderAsInteger(?int $useInOrderAsInteger = null): self
    {
        // validation for constraint: int
        if (!is_null($useInOrderAsInteger) && !(is_int($useInOrderAsInteger) || ctype_digit($useInOrderAsInteger))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($useInOrderAsInteger, true), gettype($useInOrderAsInteger)), __LINE__);
        }
        $this->useInOrderAsInteger = $useInOrderAsInteger;
        
        return $this;
    }
    /**
     * Get useInServiceAsInteger value
     * @return int|null
     */
    public function getUseInServiceAsInteger(): ?int
    {
        return $this->useInServiceAsInteger;
    }
    /**
     * Set useInServiceAsInteger value
     * @param int $useInServiceAsInteger
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTextRemark
     */
    public function setUseInServiceAsInteger(?int $useInServiceAsInteger = null): self
    {
        // validation for constraint: int
        if (!is_null($useInServiceAsInteger) && !(is_int($useInServiceAsInteger) || ctype_digit($useInServiceAsInteger))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($useInServiceAsInteger, true), gettype($useInServiceAsInteger)), __LINE__);
        }
        $this->useInServiceAsInteger = $useInServiceAsInteger;
        
        return $this;
    }
    /**
     * Get constraintOrgunitAsInteger value
     * @return int|null
     */
    public function getConstraintOrgunitAsInteger(): ?int
    {
        return $this->constraintOrgunitAsInteger;
    }
    /**
     * Set constraintOrgunitAsInteger value
     * @param int $constraintOrgunitAsInteger
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTextRemark
     */
    public function setConstraintOrgunitAsInteger(?int $constraintOrgunitAsInteger = null): self
    {
        // validation for constraint: int
        if (!is_null($constraintOrgunitAsInteger) && !(is_int($constraintOrgunitAsInteger) || ctype_digit($constraintOrgunitAsInteger))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($constraintOrgunitAsInteger, true), gettype($constraintOrgunitAsInteger)), __LINE__);
        }
        $this->constraintOrgunitAsInteger = $constraintOrgunitAsInteger;
        
        return $this;
    }
    /**
     * Get constraintSupplierAsInteger value
     * @return int|null
     */
    public function getConstraintSupplierAsInteger(): ?int
    {
        return $this->constraintSupplierAsInteger;
    }
    /**
     * Set constraintSupplierAsInteger value
     * @param int $constraintSupplierAsInteger
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTextRemark
     */
    public function setConstraintSupplierAsInteger(?int $constraintSupplierAsInteger = null): self
    {
        // validation for constraint: int
        if (!is_null($constraintSupplierAsInteger) && !(is_int($constraintSupplierAsInteger) || ctype_digit($constraintSupplierAsInteger))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($constraintSupplierAsInteger, true), gettype($constraintSupplierAsInteger)), __LINE__);
        }
        $this->constraintSupplierAsInteger = $constraintSupplierAsInteger;
        
        return $this;
    }
    /**
     * Get flightTimeChangeAsInteger value
     * @return int|null
     */
    public function getFlightTimeChangeAsInteger(): ?int
    {
        return $this->flightTimeChangeAsInteger;
    }
    /**
     * Set flightTimeChangeAsInteger value
     * @param int $flightTimeChangeAsInteger
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTextRemark
     */
    public function setFlightTimeChangeAsInteger(?int $flightTimeChangeAsInteger = null): self
    {
        // validation for constraint: int
        if (!is_null($flightTimeChangeAsInteger) && !(is_int($flightTimeChangeAsInteger) || ctype_digit($flightTimeChangeAsInteger))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($flightTimeChangeAsInteger, true), gettype($flightTimeChangeAsInteger)), __LINE__);
        }
        $this->flightTimeChangeAsInteger = $flightTimeChangeAsInteger;
        
        return $this;
    }
    /**
     * Get useInVerkAsInteger value
     * @return int|null
     */
    public function getUseInVerkAsInteger(): ?int
    {
        return $this->useInVerkAsInteger;
    }
    /**
     * Set useInVerkAsInteger value
     * @param int $useInVerkAsInteger
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTextRemark
     */
    public function setUseInVerkAsInteger(?int $useInVerkAsInteger = null): self
    {
        // validation for constraint: int
        if (!is_null($useInVerkAsInteger) && !(is_int($useInVerkAsInteger) || ctype_digit($useInVerkAsInteger))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($useInVerkAsInteger, true), gettype($useInVerkAsInteger)), __LINE__);
        }
        $this->useInVerkAsInteger = $useInVerkAsInteger;
        
        return $this;
    }
    /**
     * Get useInNoticeAsInteger value
     * @return int|null
     */
    public function getUseInNoticeAsInteger(): ?int
    {
        return $this->useInNoticeAsInteger;
    }
    /**
     * Set useInNoticeAsInteger value
     * @param int $useInNoticeAsInteger
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTextRemark
     */
    public function setUseInNoticeAsInteger(?int $useInNoticeAsInteger = null): self
    {
        // validation for constraint: int
        if (!is_null($useInNoticeAsInteger) && !(is_int($useInNoticeAsInteger) || ctype_digit($useInNoticeAsInteger))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($useInNoticeAsInteger, true), gettype($useInNoticeAsInteger)), __LINE__);
        }
        $this->useInNoticeAsInteger = $useInNoticeAsInteger;
        
        return $this;
    }
    /**
     * Get useAsTaskAsInteger value
     * @return int|null
     */
    public function getUseAsTaskAsInteger(): ?int
    {
        return $this->useAsTaskAsInteger;
    }
    /**
     * Set useAsTaskAsInteger value
     * @param int $useAsTaskAsInteger
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTextRemark
     */
    public function setUseAsTaskAsInteger(?int $useAsTaskAsInteger = null): self
    {
        // validation for constraint: int
        if (!is_null($useAsTaskAsInteger) && !(is_int($useAsTaskAsInteger) || ctype_digit($useAsTaskAsInteger))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($useAsTaskAsInteger, true), gettype($useAsTaskAsInteger)), __LINE__);
        }
        $this->useAsTaskAsInteger = $useAsTaskAsInteger;
        
        return $this;
    }
    /**
     * Get useInAdditServiceAsInteger value
     * @return int|null
     */
    public function getUseInAdditServiceAsInteger(): ?int
    {
        return $this->useInAdditServiceAsInteger;
    }
    /**
     * Set useInAdditServiceAsInteger value
     * @param int $useInAdditServiceAsInteger
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTextRemark
     */
    public function setUseInAdditServiceAsInteger(?int $useInAdditServiceAsInteger = null): self
    {
        // validation for constraint: int
        if (!is_null($useInAdditServiceAsInteger) && !(is_int($useInAdditServiceAsInteger) || ctype_digit($useInAdditServiceAsInteger))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($useInAdditServiceAsInteger, true), gettype($useInAdditServiceAsInteger)), __LINE__);
        }
        $this->useInAdditServiceAsInteger = $useInAdditServiceAsInteger;
        
        return $this;
    }
    /**
     * Get isInheritance value
     * @return bool|null
     */
    public function getIsInheritance(): ?bool
    {
        return $this->isInheritance;
    }
    /**
     * Set isInheritance value
     * @param bool $isInheritance
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTextRemark
     */
    public function setIsInheritance(?bool $isInheritance = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isInheritance) && !is_bool($isInheritance)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isInheritance, true), gettype($isInheritance)), __LINE__);
        }
        $this->isInheritance = $isInheritance;
        
        return $this;
    }
}
