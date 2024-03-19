<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MilesAndMoreEarnSelection StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MilesAndMoreEarnSelection extends AbstractStructBase
{
    /**
     * The ItemId
     * Meta information extracted from the WSDL
     * - documentation: A sell item id
     * @var int|null
     */
    protected ?int $ItemId = null;
    /**
     * The MilesWanted
     * Meta information extracted from the WSDL
     * - documentation: Whether the customer want's to earn miles for the linked sell item
     * @var bool|null
     */
    protected ?bool $MilesWanted = null;
    /**
     * Constructor method for MilesAndMoreEarnSelection
     * @uses MilesAndMoreEarnSelection::setItemId()
     * @uses MilesAndMoreEarnSelection::setMilesWanted()
     * @param int $itemId
     * @param bool $milesWanted
     */
    public function __construct(?int $itemId = null, ?bool $milesWanted = null)
    {
        $this
            ->setItemId($itemId)
            ->setMilesWanted($milesWanted);
    }
    /**
     * Get ItemId value
     * @return int|null
     */
    public function getItemId(): ?int
    {
        return $this->ItemId;
    }
    /**
     * Set ItemId value
     * @param int $itemId
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnSelection
     */
    public function setItemId(?int $itemId = null): self
    {
        // validation for constraint: int
        if (!is_null($itemId) && !(is_int($itemId) || ctype_digit($itemId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemId, true), gettype($itemId)), __LINE__);
        }
        $this->ItemId = $itemId;
        
        return $this;
    }
    /**
     * Get MilesWanted value
     * @return bool|null
     */
    public function getMilesWanted(): ?bool
    {
        return $this->MilesWanted;
    }
    /**
     * Set MilesWanted value
     * @param bool $milesWanted
     * @return \Pggns\MidocoApi\Order\StructType\MilesAndMoreEarnSelection
     */
    public function setMilesWanted(?bool $milesWanted = null): self
    {
        // validation for constraint: boolean
        if (!is_null($milesWanted) && !is_bool($milesWanted)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($milesWanted, true), gettype($milesWanted)), __LINE__);
        }
        $this->MilesWanted = $milesWanted;
        
        return $this;
    }
}
