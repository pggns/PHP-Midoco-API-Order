<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdviceSettlementDescriptionsForSellItem StructType
 * @subpackage Structs
 */
class AdviceSettlementDescriptionsForSellItem extends AbstractStructBase
{
    /**
     * The advicesettlementdescription
     * @var string|null
     */
    protected ?string $advicesettlementdescription = null;
    /**
     * The itemid
     * @var int|null
     */
    protected ?int $itemid = null;
    /**
     * Constructor method for AdviceSettlementDescriptionsForSellItem
     * @uses AdviceSettlementDescriptionsForSellItem::setAdvicesettlementdescription()
     * @uses AdviceSettlementDescriptionsForSellItem::setItemid()
     * @param string $advicesettlementdescription
     * @param int $itemid
     */
    public function __construct(?string $advicesettlementdescription = null, ?int $itemid = null)
    {
        $this
            ->setAdvicesettlementdescription($advicesettlementdescription)
            ->setItemid($itemid);
    }
    /**
     * Get advicesettlementdescription value
     * @return string|null
     */
    public function getAdvicesettlementdescription(): ?string
    {
        return $this->advicesettlementdescription;
    }
    /**
     * Set advicesettlementdescription value
     * @param string $advicesettlementdescription
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDescriptionsForSellItem
     */
    public function setAdvicesettlementdescription(?string $advicesettlementdescription = null): self
    {
        // validation for constraint: string
        if (!is_null($advicesettlementdescription) && !is_string($advicesettlementdescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($advicesettlementdescription, true), gettype($advicesettlementdescription)), __LINE__);
        }
        $this->advicesettlementdescription = $advicesettlementdescription;
        
        return $this;
    }
    /**
     * Get itemid value
     * @return int|null
     */
    public function getItemid(): ?int
    {
        return $this->itemid;
    }
    /**
     * Set itemid value
     * @param int $itemid
     * @return \Pggns\MidocoApi\Order\StructType\AdviceSettlementDescriptionsForSellItem
     */
    public function setItemid(?int $itemid = null): self
    {
        // validation for constraint: int
        if (!is_null($itemid) && !(is_int($itemid) || ctype_digit($itemid))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemid, true), gettype($itemid)), __LINE__);
        }
        $this->itemid = $itemid;
        
        return $this;
    }
}
