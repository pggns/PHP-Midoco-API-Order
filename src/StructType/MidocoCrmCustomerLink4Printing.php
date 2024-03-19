<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCrmCustomerLink4Printing StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoCrmCustomerLink4Printing extends CrmCustomerLinkDTO
{
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The middleName
     * @var string|null
     */
    protected ?string $middleName = null;
    /**
     * The typeDesc
     * @var string|null
     */
    protected ?string $typeDesc = null;
    /**
     * Constructor method for MidocoCrmCustomerLink4Printing
     * @uses MidocoCrmCustomerLink4Printing::setTitle()
     * @uses MidocoCrmCustomerLink4Printing::setForename()
     * @uses MidocoCrmCustomerLink4Printing::setMiddleName()
     * @uses MidocoCrmCustomerLink4Printing::setTypeDesc()
     * @param string $title
     * @param string $forename
     * @param string $middleName
     * @param string $typeDesc
     */
    public function __construct(?string $title = null, ?string $forename = null, ?string $middleName = null, ?string $typeDesc = null)
    {
        $this
            ->setTitle($title)
            ->setForename($forename)
            ->setMiddleName($middleName)
            ->setTypeDesc($typeDesc);
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCustomerLink4Printing
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCustomerLink4Printing
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get middleName value
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }
    /**
     * Set middleName value
     * @param string $middleName
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCustomerLink4Printing
     */
    public function setMiddleName(?string $middleName = null): self
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middleName, true), gettype($middleName)), __LINE__);
        }
        $this->middleName = $middleName;
        
        return $this;
    }
    /**
     * Get typeDesc value
     * @return string|null
     */
    public function getTypeDesc(): ?string
    {
        return $this->typeDesc;
    }
    /**
     * Set typeDesc value
     * @param string $typeDesc
     * @return \Pggns\MidocoApi\Order\StructType\MidocoCrmCustomerLink4Printing
     */
    public function setTypeDesc(?string $typeDesc = null): self
    {
        // validation for constraint: string
        if (!is_null($typeDesc) && !is_string($typeDesc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($typeDesc, true), gettype($typeDesc)), __LINE__);
        }
        $this->typeDesc = $typeDesc;
        
        return $this;
    }
}
