<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DebitorInfoDTO StructType
 * @subpackage Structs
 */
class DebitorInfoDTO extends AbstractStructBase
{
    /**
     * The creationAgent
     * @var string|null
     */
    protected ?string $creationAgent = null;
    /**
     * The creationBranch
     * @var string|null
     */
    protected ?string $creationBranch = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The department
     * @var string|null
     */
    protected ?string $department = null;
    /**
     * The modifyAgent
     * @var string|null
     */
    protected ?string $modifyAgent = null;
    /**
     * The modifyBranch
     * @var string|null
     */
    protected ?string $modifyBranch = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
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
     * Constructor method for DebitorInfoDTO
     * @uses DebitorInfoDTO::setCreationAgent()
     * @uses DebitorInfoDTO::setCreationBranch()
     * @uses DebitorInfoDTO::setCreationDate()
     * @uses DebitorInfoDTO::setDebitorNo()
     * @uses DebitorInfoDTO::setDepartment()
     * @uses DebitorInfoDTO::setModifyAgent()
     * @uses DebitorInfoDTO::setModifyBranch()
     * @uses DebitorInfoDTO::setModifyDate()
     * @uses DebitorInfoDTO::setName1()
     * @uses DebitorInfoDTO::setName2()
     * @uses DebitorInfoDTO::setRemark1()
     * @uses DebitorInfoDTO::setRemark2()
     * @uses DebitorInfoDTO::setRemark3()
     * @param string $creationAgent
     * @param string $creationBranch
     * @param string $creationDate
     * @param string $debitorNo
     * @param string $department
     * @param string $modifyAgent
     * @param string $modifyBranch
     * @param string $modifyDate
     * @param string $name1
     * @param string $name2
     * @param string $remark1
     * @param string $remark2
     * @param string $remark3
     */
    public function __construct(?string $creationAgent = null, ?string $creationBranch = null, ?string $creationDate = null, ?string $debitorNo = null, ?string $department = null, ?string $modifyAgent = null, ?string $modifyBranch = null, ?string $modifyDate = null, ?string $name1 = null, ?string $name2 = null, ?string $remark1 = null, ?string $remark2 = null, ?string $remark3 = null)
    {
        $this
            ->setCreationAgent($creationAgent)
            ->setCreationBranch($creationBranch)
            ->setCreationDate($creationDate)
            ->setDebitorNo($debitorNo)
            ->setDepartment($department)
            ->setModifyAgent($modifyAgent)
            ->setModifyBranch($modifyBranch)
            ->setModifyDate($modifyDate)
            ->setName1($name1)
            ->setName2($name2)
            ->setRemark1($remark1)
            ->setRemark2($remark2)
            ->setRemark3($remark3);
    }
    /**
     * Get creationAgent value
     * @return string|null
     */
    public function getCreationAgent(): ?string
    {
        return $this->creationAgent;
    }
    /**
     * Set creationAgent value
     * @param string $creationAgent
     * @return \Pggns\MidocoApi\Order\StructType\DebitorInfoDTO
     */
    public function setCreationAgent(?string $creationAgent = null): self
    {
        // validation for constraint: string
        if (!is_null($creationAgent) && !is_string($creationAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationAgent, true), gettype($creationAgent)), __LINE__);
        }
        $this->creationAgent = $creationAgent;
        
        return $this;
    }
    /**
     * Get creationBranch value
     * @return string|null
     */
    public function getCreationBranch(): ?string
    {
        return $this->creationBranch;
    }
    /**
     * Set creationBranch value
     * @param string $creationBranch
     * @return \Pggns\MidocoApi\Order\StructType\DebitorInfoDTO
     */
    public function setCreationBranch(?string $creationBranch = null): self
    {
        // validation for constraint: string
        if (!is_null($creationBranch) && !is_string($creationBranch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationBranch, true), gettype($creationBranch)), __LINE__);
        }
        $this->creationBranch = $creationBranch;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\DebitorInfoDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorInfoDTO
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
     * Get department value
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->department;
    }
    /**
     * Set department value
     * @param string $department
     * @return \Pggns\MidocoApi\Order\StructType\DebitorInfoDTO
     */
    public function setDepartment(?string $department = null): self
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($department, true), gettype($department)), __LINE__);
        }
        $this->department = $department;
        
        return $this;
    }
    /**
     * Get modifyAgent value
     * @return string|null
     */
    public function getModifyAgent(): ?string
    {
        return $this->modifyAgent;
    }
    /**
     * Set modifyAgent value
     * @param string $modifyAgent
     * @return \Pggns\MidocoApi\Order\StructType\DebitorInfoDTO
     */
    public function setModifyAgent(?string $modifyAgent = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyAgent) && !is_string($modifyAgent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyAgent, true), gettype($modifyAgent)), __LINE__);
        }
        $this->modifyAgent = $modifyAgent;
        
        return $this;
    }
    /**
     * Get modifyBranch value
     * @return string|null
     */
    public function getModifyBranch(): ?string
    {
        return $this->modifyBranch;
    }
    /**
     * Set modifyBranch value
     * @param string $modifyBranch
     * @return \Pggns\MidocoApi\Order\StructType\DebitorInfoDTO
     */
    public function setModifyBranch(?string $modifyBranch = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyBranch) && !is_string($modifyBranch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyBranch, true), gettype($modifyBranch)), __LINE__);
        }
        $this->modifyBranch = $modifyBranch;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\DebitorInfoDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorInfoDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorInfoDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorInfoDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorInfoDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\DebitorInfoDTO
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
