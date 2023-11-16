<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoTemplateRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoTemplateRequest extends AbstractStructBase
{
    /**
     * The templateId
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $templateId;
    /**
     * Constructor method for DeleteMidocoTemplateRequest
     * @uses DeleteMidocoTemplateRequest::setTemplateId()
     * @param int $templateId
     */
    public function __construct(int $templateId)
    {
        $this
            ->setTemplateId($templateId);
    }
    /**
     * Get templateId value
     * @return int
     */
    public function getTemplateId(): int
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param int $templateId
     * @return \Pggns\MidocoApi\Order\StructType\DeleteMidocoTemplateRequest
     */
    public function setTemplateId(int $templateId): self
    {
        // validation for constraint: int
        if (!is_null($templateId) && !(is_int($templateId) || ctype_digit($templateId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        $this->templateId = $templateId;
        
        return $this;
    }
}
