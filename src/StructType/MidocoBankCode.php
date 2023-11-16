<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBankCode StructType
 * @subpackage Structs
 */
class MidocoBankCode extends AbstractStructBase
{
    /**
     * The stadt
     * @var string|null
     */
    protected ?string $stadt = null;
    /**
     * The bank
     * @var string|null
     */
    protected ?string $bank = null;
    /**
     * The code
     * @var string|null
     */
    protected ?string $code = null;
    /**
     * Constructor method for MidocoBankCode
     * @uses MidocoBankCode::setStadt()
     * @uses MidocoBankCode::setBank()
     * @uses MidocoBankCode::setCode()
     * @param string $stadt
     * @param string $bank
     * @param string $code
     */
    public function __construct(?string $stadt = null, ?string $bank = null, ?string $code = null)
    {
        $this
            ->setStadt($stadt)
            ->setBank($bank)
            ->setCode($code);
    }
    /**
     * Get stadt value
     * @return string|null
     */
    public function getStadt(): ?string
    {
        return $this->stadt;
    }
    /**
     * Set stadt value
     * @param string $stadt
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBankCode
     */
    public function setStadt(?string $stadt = null): self
    {
        // validation for constraint: string
        if (!is_null($stadt) && !is_string($stadt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stadt, true), gettype($stadt)), __LINE__);
        }
        $this->stadt = $stadt;
        
        return $this;
    }
    /**
     * Get bank value
     * @return string|null
     */
    public function getBank(): ?string
    {
        return $this->bank;
    }
    /**
     * Set bank value
     * @param string $bank
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBankCode
     */
    public function setBank(?string $bank = null): self
    {
        // validation for constraint: string
        if (!is_null($bank) && !is_string($bank)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bank, true), gettype($bank)), __LINE__);
        }
        $this->bank = $bank;
        
        return $this;
    }
    /**
     * Get code value
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }
    /**
     * Set code value
     * @param string $code
     * @return \Pggns\MidocoApi\Order\StructType\MidocoBankCode
     */
    public function setCode(?string $code = null): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->code = $code;
        
        return $this;
    }
}
