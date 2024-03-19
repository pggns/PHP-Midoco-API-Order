<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDebitorNoDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDebitorNoDTO extends AbstractStructBase
{
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * Constructor method for MidocoDebitorNoDTO
     * @uses MidocoDebitorNoDTO::setDebitorNo()
     * @param string $debitorNo
     */
    public function __construct(?string $debitorNo = null)
    {
        $this
            ->setDebitorNo($debitorNo);
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorNoDTO
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
}
