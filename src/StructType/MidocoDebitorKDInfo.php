<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDebitorKDInfo StructType
 * @subpackage Structs
 */
class MidocoDebitorKDInfo extends AbstractStructBase
{
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The name1
     * @var string|null
     */
    protected ?string $name1 = null;
    /**
     * The name2
     * @var string|null
     */
    protected ?string $name2 = null;
    /**
     * The remark1
     * @var string|null
     */
    protected ?string $remark1 = null;
    /**
     * The remark2
     * @var string|null
     */
    protected ?string $remark2 = null;
    /**
     * The remark3
     * @var string|null
     */
    protected ?string $remark3 = null;
    /**
     * Constructor method for MidocoDebitorKDInfo
     * @uses MidocoDebitorKDInfo::setDebitorNo()
     * @uses MidocoDebitorKDInfo::setName1()
     * @uses MidocoDebitorKDInfo::setName2()
     * @uses MidocoDebitorKDInfo::setRemark1()
     * @uses MidocoDebitorKDInfo::setRemark2()
     * @uses MidocoDebitorKDInfo::setRemark3()
     * @param string $debitorNo
     * @param string $name1
     * @param string $name2
     * @param string $remark1
     * @param string $remark2
     * @param string $remark3
     */
    public function __construct(?string $debitorNo = null, ?string $name1 = null, ?string $name2 = null, ?string $remark1 = null, ?string $remark2 = null, ?string $remark3 = null)
    {
        $this
            ->setDebitorNo($debitorNo)
            ->setName1($name1)
            ->setName2($name2)
            ->setRemark1($remark1)
            ->setRemark2($remark2)
            ->setRemark3($remark3);
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorKDInfo
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
    /**
     * Get name1 value
     * @return string|null
     */
    public function getName1(): ?string
    {
        return $this->name1;
    }
    /**
     * Set name1 value
     * @param string $name1
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorKDInfo
     */
    public function setName1(?string $name1 = null): self
    {
        // validation for constraint: string
        if (!is_null($name1) && !is_string($name1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name1, true), gettype($name1)), __LINE__);
        }
        $this->name1 = $name1;
        
        return $this;
    }
    /**
     * Get name2 value
     * @return string|null
     */
    public function getName2(): ?string
    {
        return $this->name2;
    }
    /**
     * Set name2 value
     * @param string $name2
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorKDInfo
     */
    public function setName2(?string $name2 = null): self
    {
        // validation for constraint: string
        if (!is_null($name2) && !is_string($name2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name2, true), gettype($name2)), __LINE__);
        }
        $this->name2 = $name2;
        
        return $this;
    }
    /**
     * Get remark1 value
     * @return string|null
     */
    public function getRemark1(): ?string
    {
        return $this->remark1;
    }
    /**
     * Set remark1 value
     * @param string $remark1
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorKDInfo
     */
    public function setRemark1(?string $remark1 = null): self
    {
        // validation for constraint: string
        if (!is_null($remark1) && !is_string($remark1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark1, true), gettype($remark1)), __LINE__);
        }
        $this->remark1 = $remark1;
        
        return $this;
    }
    /**
     * Get remark2 value
     * @return string|null
     */
    public function getRemark2(): ?string
    {
        return $this->remark2;
    }
    /**
     * Set remark2 value
     * @param string $remark2
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorKDInfo
     */
    public function setRemark2(?string $remark2 = null): self
    {
        // validation for constraint: string
        if (!is_null($remark2) && !is_string($remark2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark2, true), gettype($remark2)), __LINE__);
        }
        $this->remark2 = $remark2;
        
        return $this;
    }
    /**
     * Get remark3 value
     * @return string|null
     */
    public function getRemark3(): ?string
    {
        return $this->remark3;
    }
    /**
     * Set remark3 value
     * @param string $remark3
     * @return \Pggns\MidocoApi\Order\StructType\MidocoDebitorKDInfo
     */
    public function setRemark3(?string $remark3 = null): self
    {
        // validation for constraint: string
        if (!is_null($remark3) && !is_string($remark3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remark3, true), gettype($remark3)), __LINE__);
        }
        $this->remark3 = $remark3;
        
        return $this;
    }
}
