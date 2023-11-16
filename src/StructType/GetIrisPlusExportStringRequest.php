<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetIrisPlusExportStringRequest StructType
 * @subpackage Structs
 */
class GetIrisPlusExportStringRequest extends AbstractStructBase
{
    /**
     * The MidocoTravelItem
     * Meta information extracted from the WSDL
     * - ref: MidocoTravelItem
     * @var \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $MidocoTravelItem = null;
    /**
     * The MidocoPackageInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoPackageInfo
     * @var \Pggns\MidocoApi\Order\StructType\PackageitemDTO|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\PackageitemDTO $MidocoPackageInfo = null;
    /**
     * The itemId
     * @var int|null
     */
    protected ?int $itemId = null;
    /**
     * Constructor method for GetIrisPlusExportStringRequest
     * @uses GetIrisPlusExportStringRequest::setMidocoTravelItem()
     * @uses GetIrisPlusExportStringRequest::setMidocoPackageInfo()
     * @uses GetIrisPlusExportStringRequest::setItemId()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem
     * @param \Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo
     * @param int $itemId
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem = null, ?\Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo = null, ?int $itemId = null)
    {
        $this
            ->setMidocoTravelItem($midocoTravelItem)
            ->setMidocoPackageInfo($midocoPackageInfo)
            ->setItemId($itemId);
    }
    /**
     * Get MidocoTravelItem value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType|null
     */
    public function getMidocoTravelItem(): ?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType
    {
        return $this->MidocoTravelItem;
    }
    /**
     * Set MidocoTravelItem value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem
     * @return \Pggns\MidocoApi\Order\StructType\GetIrisPlusExportStringRequest
     */
    public function setMidocoTravelItem(?\Pggns\MidocoApi\Order\StructType\MidocoTravelItemType $midocoTravelItem = null): self
    {
        $this->MidocoTravelItem = $midocoTravelItem;
        
        return $this;
    }
    /**
     * Get MidocoPackageInfo value
     * @return \Pggns\MidocoApi\Order\StructType\PackageitemDTO|null
     */
    public function getMidocoPackageInfo(): ?\Pggns\MidocoApi\Order\StructType\PackageitemDTO
    {
        return $this->MidocoPackageInfo;
    }
    /**
     * Set MidocoPackageInfo value
     * @param \Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo
     * @return \Pggns\MidocoApi\Order\StructType\GetIrisPlusExportStringRequest
     */
    public function setMidocoPackageInfo(?\Pggns\MidocoApi\Order\StructType\PackageitemDTO $midocoPackageInfo = null): self
    {
        $this->MidocoPackageInfo = $midocoPackageInfo;
        
        return $this;
    }
    /**
     * Get itemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }
    /**
     * Set itemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\GetIrisPlusExportStringRequest
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->itemId = $itemId;
        
        return $this;
    }
}
