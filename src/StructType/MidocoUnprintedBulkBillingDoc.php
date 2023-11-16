<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoUnprintedBulkBillingDoc StructType
 * @subpackage Structs
 */
class MidocoUnprintedBulkBillingDoc extends MidocoBillingDocumentType
{
    /**
     * The numberOfPositions
     * @var int|null
     */
    protected ?int $numberOfPositions = null;
    /**
     * Constructor method for MidocoUnprintedBulkBillingDoc
     * @uses MidocoUnprintedBulkBillingDoc::setNumberOfPositions()
     * @param int $numberOfPositions
     */
    public function __construct(?int $numberOfPositions = null)
    {
        $this
            ->setNumberOfPositions($numberOfPositions);
    }
    /**
     * Get numberOfPositions value
     * @return int|null
     */
    public function getNumberOfPositions(): ?int
    {
        return $this->numberOfPositions;
    }
    /**
     * Set numberOfPositions value
     * @param int $numberOfPositions
     * @return \Pggns\MidocoApi\Order\StructType\MidocoUnprintedBulkBillingDoc
     */
    public function setNumberOfPositions(?int $numberOfPositions = null): self
    {
        // validation for constraint: int
        if (!is_null($numberOfPositions) && !(is_int($numberOfPositions) || ctype_digit($numberOfPositions))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numberOfPositions, true), gettype($numberOfPositions)), __LINE__);
        }
        $this->numberOfPositions = $numberOfPositions;
        
        return $this;
    }
}
