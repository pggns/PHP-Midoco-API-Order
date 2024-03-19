<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintTemplateResultResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintTemplateResultResponse extends AbstractStructBase
{
    /**
     * The printJobId
     * @var int|null
     */
    protected ?int $printJobId = null;
    /**
     * The data
     * @var string|null
     */
    protected ?string $data = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The fopMsg
     * @var string|null
     */
    protected ?string $fopMsg = null;
    /**
     * Constructor method for GetPrintTemplateResultResponse
     * @uses GetPrintTemplateResultResponse::setPrintJobId()
     * @uses GetPrintTemplateResultResponse::setData()
     * @uses GetPrintTemplateResultResponse::setName()
     * @uses GetPrintTemplateResultResponse::setFopMsg()
     * @param int $printJobId
     * @param string $data
     * @param string $name
     * @param string $fopMsg
     */
    public function __construct(?int $printJobId = null, ?string $data = null, ?string $name = null, ?string $fopMsg = null)
    {
        $this
            ->setPrintJobId($printJobId)
            ->setData($data)
            ->setName($name)
            ->setFopMsg($fopMsg);
    }
    /**
     * Get printJobId value
     * @return int|null
     */
    public function getPrintJobId(): ?int
    {
        return $this->printJobId;
    }
    /**
     * Set printJobId value
     * @param int $printJobId
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintTemplateResultResponse
     */
    public function setPrintJobId(?int $printJobId = null): self
    {
        // validation for constraint: int
        if (!is_null($printJobId) && !(is_int($printJobId) || ctype_digit($printJobId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($printJobId, true), gettype($printJobId)), __LINE__);
        }
        $this->printJobId = $printJobId;
        
        return $this;
    }
    /**
     * Get data value
     * @return string|null
     */
    public function getData(): ?string
    {
        return $this->data;
    }
    /**
     * Set data value
     * @param string $data
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintTemplateResultResponse
     */
    public function setData(?string $data = null): self
    {
        // validation for constraint: string
        if (!is_null($data) && !is_string($data)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($data, true), gettype($data)), __LINE__);
        }
        $this->data = $data;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintTemplateResultResponse
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get fopMsg value
     * @return string|null
     */
    public function getFopMsg(): ?string
    {
        return $this->fopMsg;
    }
    /**
     * Set fopMsg value
     * @param string $fopMsg
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintTemplateResultResponse
     */
    public function setFopMsg(?string $fopMsg = null): self
    {
        // validation for constraint: string
        if (!is_null($fopMsg) && !is_string($fopMsg)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fopMsg, true), gettype($fopMsg)), __LINE__);
        }
        $this->fopMsg = $fopMsg;
        
        return $this;
    }
}
