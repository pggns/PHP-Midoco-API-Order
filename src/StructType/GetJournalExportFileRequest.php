<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetJournalExportFileRequest StructType
 * @subpackage Structs
 */
class GetJournalExportFileRequest extends AbstractStructBase
{
    /**
     * The repository_id
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    protected int $repository_id;
    /**
     * Constructor method for GetJournalExportFileRequest
     * @uses GetJournalExportFileRequest::setRepository_id()
     * @param int $repository_id
     */
    public function __construct(int $repository_id)
    {
        $this
            ->setRepository_id($repository_id);
    }
    /**
     * Get repository_id value
     * @return int
     */
    public function getRepository_id(): int
    {
        return $this->repository_id;
    }
    /**
     * Set repository_id value
     * @param int $repository_id
     * @return \Pggns\MidocoApi\Order\StructType\GetJournalExportFileRequest
     */
    public function setRepository_id(int $repository_id): self
    {
        // validation for constraint: int
        if (!is_null($repository_id) && !(is_int($repository_id) || ctype_digit($repository_id))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($repository_id, true), gettype($repository_id)), __LINE__);
        }
        $this->repository_id = $repository_id;
        
        return $this;
    }
}
