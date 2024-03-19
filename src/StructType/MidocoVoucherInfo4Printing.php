<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoVoucherInfo4Printing StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoVoucherInfo4Printing extends VoucherDTO
{
    /**
     * The creationUser
     * @var string|null
     */
    protected ?string $creationUser = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The voucherNoStart
     * @var string|null
     */
    protected ?string $voucherNoStart = null;
    /**
     * The voucherNoEnd
     * @var string|null
     */
    protected ?string $voucherNoEnd = null;
    /**
     * Constructor method for MidocoVoucherInfo4Printing
     * @uses MidocoVoucherInfo4Printing::setCreationUser()
     * @uses MidocoVoucherInfo4Printing::setDescription()
     * @uses MidocoVoucherInfo4Printing::setSupplierId()
     * @uses MidocoVoucherInfo4Printing::setVoucherNoStart()
     * @uses MidocoVoucherInfo4Printing::setVoucherNoEnd()
     * @param string $creationUser
     * @param string $description
     * @param string $supplierId
     * @param string $voucherNoStart
     * @param string $voucherNoEnd
     */
    public function __construct(?string $creationUser = null, ?string $description = null, ?string $supplierId = null, ?string $voucherNoStart = null, ?string $voucherNoEnd = null)
    {
        $this
            ->setCreationUser($creationUser)
            ->setDescription($description)
            ->setSupplierId($supplierId)
            ->setVoucherNoStart($voucherNoStart)
            ->setVoucherNoEnd($voucherNoEnd);
    }
    /**
     * Get creationUser value
     * @return string|null
     */
    public function getCreationUser(): ?string
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param string $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucherInfo4Printing
     */
    public function setCreationUser(?string $creationUser = null): self
    {
        // validation for constraint: string
        if (!is_null($creationUser) && !is_string($creationUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucherInfo4Printing
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucherInfo4Printing
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get voucherNoStart value
     * @return string|null
     */
    public function getVoucherNoStart(): ?string
    {
        return $this->voucherNoStart;
    }
    /**
     * Set voucherNoStart value
     * @param string $voucherNoStart
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucherInfo4Printing
     */
    public function setVoucherNoStart(?string $voucherNoStart = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherNoStart) && !is_string($voucherNoStart)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherNoStart, true), gettype($voucherNoStart)), __LINE__);
        }
        $this->voucherNoStart = $voucherNoStart;
        
        return $this;
    }
    /**
     * Get voucherNoEnd value
     * @return string|null
     */
    public function getVoucherNoEnd(): ?string
    {
        return $this->voucherNoEnd;
    }
    /**
     * Set voucherNoEnd value
     * @param string $voucherNoEnd
     * @return \Pggns\MidocoApi\Order\StructType\MidocoVoucherInfo4Printing
     */
    public function setVoucherNoEnd(?string $voucherNoEnd = null): self
    {
        // validation for constraint: string
        if (!is_null($voucherNoEnd) && !is_string($voucherNoEnd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($voucherNoEnd, true), gettype($voucherNoEnd)), __LINE__);
        }
        $this->voucherNoEnd = $voucherNoEnd;
        
        return $this;
    }
}
