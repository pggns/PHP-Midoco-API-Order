<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintjobListRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetPrintjobListRequest extends AbstractStructBase
{
    /**
     * The list_type
     * @var string|null
     */
    protected ?string $list_type = null;
    /**
     * Constructor method for GetPrintjobListRequest
     * @uses GetPrintjobListRequest::setList_type()
     * @param string $list_type
     */
    public function __construct(?string $list_type = null)
    {
        $this
            ->setList_type($list_type);
    }
    /**
     * Get list_type value
     * @return string|null
     */
    public function getList_type(): ?string
    {
        return $this->list_type;
    }
    /**
     * Set list_type value
     * @uses \Pggns\MidocoApi\Order\EnumType\List_type::valueIsValid()
     * @uses \Pggns\MidocoApi\Order\EnumType\List_type::getValidValues()
     * @throws InvalidArgumentException
     * @param string $list_type
     * @return \Pggns\MidocoApi\Order\StructType\GetPrintjobListRequest
     */
    public function setList_type(?string $list_type = null): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Order\EnumType\List_type::valueIsValid($list_type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Order\EnumType\List_type', is_array($list_type) ? implode(', ', $list_type) : var_export($list_type, true), implode(', ', \Pggns\MidocoApi\Order\EnumType\List_type::getValidValues())), __LINE__);
        }
        $this->list_type = $list_type;
        
        return $this;
    }
}
