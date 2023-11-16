<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoQueryResult StructType
 * @subpackage Structs
 */
class MidocoQueryResult extends AbstractStructBase
{
    /**
     * The MidocoQueryMetadata
     * Meta information extracted from the WSDL
     * - ref: MidocoQueryMetadata
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQueryMetadata|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoQueryMetadata $MidocoQueryMetadata = null;
    /**
     * The MidocoQueryPage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoQueryPage
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQueryPage|null
     */
    protected ?\Pggns\MidocoApi\Order\StructType\MidocoQueryPage $MidocoQueryPage = null;
    /**
     * The queryId
     * @var int|null
     */
    protected ?int $queryId = null;
    /**
     * The totalNoOfPages
     * @var int|null
     */
    protected ?int $totalNoOfPages = null;
    /**
     * The totalNoOfRecords
     * @var int|null
     */
    protected ?int $totalNoOfRecords = null;
    /**
     * The rowsPerPage
     * @var int|null
     */
    protected ?int $rowsPerPage = null;
    /**
     * Constructor method for MidocoQueryResult
     * @uses MidocoQueryResult::setMidocoQueryMetadata()
     * @uses MidocoQueryResult::setMidocoQueryPage()
     * @uses MidocoQueryResult::setQueryId()
     * @uses MidocoQueryResult::setTotalNoOfPages()
     * @uses MidocoQueryResult::setTotalNoOfRecords()
     * @uses MidocoQueryResult::setRowsPerPage()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryMetadata $midocoQueryMetadata
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryPage $midocoQueryPage
     * @param int $queryId
     * @param int $totalNoOfPages
     * @param int $totalNoOfRecords
     * @param int $rowsPerPage
     */
    public function __construct(?\Pggns\MidocoApi\Order\StructType\MidocoQueryMetadata $midocoQueryMetadata = null, ?\Pggns\MidocoApi\Order\StructType\MidocoQueryPage $midocoQueryPage = null, ?int $queryId = null, ?int $totalNoOfPages = null, ?int $totalNoOfRecords = null, ?int $rowsPerPage = null)
    {
        $this
            ->setMidocoQueryMetadata($midocoQueryMetadata)
            ->setMidocoQueryPage($midocoQueryPage)
            ->setQueryId($queryId)
            ->setTotalNoOfPages($totalNoOfPages)
            ->setTotalNoOfRecords($totalNoOfRecords)
            ->setRowsPerPage($rowsPerPage);
    }
    /**
     * Get MidocoQueryMetadata value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryMetadata|null
     */
    public function getMidocoQueryMetadata(): ?\Pggns\MidocoApi\Order\StructType\MidocoQueryMetadata
    {
        return $this->MidocoQueryMetadata;
    }
    /**
     * Set MidocoQueryMetadata value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryMetadata $midocoQueryMetadata
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryResult
     */
    public function setMidocoQueryMetadata(?\Pggns\MidocoApi\Order\StructType\MidocoQueryMetadata $midocoQueryMetadata = null): self
    {
        $this->MidocoQueryMetadata = $midocoQueryMetadata;
        
        return $this;
    }
    /**
     * Get MidocoQueryPage value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryPage|null
     */
    public function getMidocoQueryPage(): ?\Pggns\MidocoApi\Order\StructType\MidocoQueryPage
    {
        return $this->MidocoQueryPage;
    }
    /**
     * Set MidocoQueryPage value
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryPage $midocoQueryPage
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryResult
     */
    public function setMidocoQueryPage(?\Pggns\MidocoApi\Order\StructType\MidocoQueryPage $midocoQueryPage = null): self
    {
        $this->MidocoQueryPage = $midocoQueryPage;
        
        return $this;
    }
    /**
     * Get queryId value
     * @return int|null
     */
    public function getQueryId(): ?int
    {
        return $this->queryId;
    }
    /**
     * Set queryId value
     * @param int $queryId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryResult
     */
    public function setQueryId(?int $queryId = null): self
    {
        // validation for constraint: int
        if (!is_null($queryId) && !(is_int($queryId) || ctype_digit($queryId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queryId, true), gettype($queryId)), __LINE__);
        }
        $this->queryId = $queryId;
        
        return $this;
    }
    /**
     * Get totalNoOfPages value
     * @return int|null
     */
    public function getTotalNoOfPages(): ?int
    {
        return $this->totalNoOfPages;
    }
    /**
     * Set totalNoOfPages value
     * @param int $totalNoOfPages
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryResult
     */
    public function setTotalNoOfPages(?int $totalNoOfPages = null): self
    {
        // validation for constraint: int
        if (!is_null($totalNoOfPages) && !(is_int($totalNoOfPages) || ctype_digit($totalNoOfPages))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNoOfPages, true), gettype($totalNoOfPages)), __LINE__);
        }
        $this->totalNoOfPages = $totalNoOfPages;
        
        return $this;
    }
    /**
     * Get totalNoOfRecords value
     * @return int|null
     */
    public function getTotalNoOfRecords(): ?int
    {
        return $this->totalNoOfRecords;
    }
    /**
     * Set totalNoOfRecords value
     * @param int $totalNoOfRecords
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryResult
     */
    public function setTotalNoOfRecords(?int $totalNoOfRecords = null): self
    {
        // validation for constraint: int
        if (!is_null($totalNoOfRecords) && !(is_int($totalNoOfRecords) || ctype_digit($totalNoOfRecords))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($totalNoOfRecords, true), gettype($totalNoOfRecords)), __LINE__);
        }
        $this->totalNoOfRecords = $totalNoOfRecords;
        
        return $this;
    }
    /**
     * Get rowsPerPage value
     * @return int|null
     */
    public function getRowsPerPage(): ?int
    {
        return $this->rowsPerPage;
    }
    /**
     * Set rowsPerPage value
     * @param int $rowsPerPage
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryResult
     */
    public function setRowsPerPage(?int $rowsPerPage = null): self
    {
        // validation for constraint: int
        if (!is_null($rowsPerPage) && !(is_int($rowsPerPage) || ctype_digit($rowsPerPage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rowsPerPage, true), gettype($rowsPerPage)), __LINE__);
        }
        $this->rowsPerPage = $rowsPerPage;
        
        return $this;
    }
}
