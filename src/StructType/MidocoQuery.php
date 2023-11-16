<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoQuery StructType
 * @subpackage Structs
 */
class MidocoQuery extends AbstractStructBase
{
    /**
     * The MidocoQueryOutputField
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoQueryOutputField
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQueryOutputField[]
     */
    protected array $MidocoQueryOutputField = [];
    /**
     * The MidocoQueryCriteria
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoQueryCriteria
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria[]
     */
    protected array $MidocoQueryCriteria = [];
    /**
     * The MidocoQueryCriteriaList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoQueryCriteriaList
     * @var \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList[]
     */
    protected array $MidocoQueryCriteriaList = [];
    /**
     * The orgUnits
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $orgUnits = [];
    /**
     * The maxNoResults
     * @var int|null
     */
    protected ?int $maxNoResults = null;
    /**
     * The rowsPerPage
     * Meta information extracted from the WSDL
     * - default: 100
     * @var int|null
     */
    protected ?int $rowsPerPage = null;
    /**
     * The queryId
     * @var string|null
     */
    protected ?string $queryId = null;
    /**
     * The queryType
     * @var string|null
     */
    protected ?string $queryType = null;
    /**
     * The queryDescription
     * @var string|null
     */
    protected ?string $queryDescription = null;
    /**
     * The menuTemplate
     * @var bool|null
     */
    protected ?bool $menuTemplate = null;
    /**
     * The outputLocale
     * @var string|null
     */
    protected ?string $outputLocale = null;
    /**
     * The storeOnePageResults
     * Meta information extracted from the WSDL
     * - documentation: Optional flag for queries which are expected to return only a short result list. The results will not be stored but returned immediately in the response (unless more than one page is produced). In case of a short response, no queryId
     * will be returned in the response. Per default, results are stored and can be retrieved pagewise using GetQueryPage (first page is ALWAYS returned in the response)
     * - default: true
     * @var bool|null
     */
    protected ?bool $storeOnePageResults = null;
    /**
     * Constructor method for MidocoQuery
     * @uses MidocoQuery::setMidocoQueryOutputField()
     * @uses MidocoQuery::setMidocoQueryCriteria()
     * @uses MidocoQuery::setMidocoQueryCriteriaList()
     * @uses MidocoQuery::setOrgUnits()
     * @uses MidocoQuery::setMaxNoResults()
     * @uses MidocoQuery::setRowsPerPage()
     * @uses MidocoQuery::setQueryId()
     * @uses MidocoQuery::setQueryType()
     * @uses MidocoQuery::setQueryDescription()
     * @uses MidocoQuery::setMenuTemplate()
     * @uses MidocoQuery::setOutputLocale()
     * @uses MidocoQuery::setStoreOnePageResults()
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryOutputField[] $midocoQueryOutputField
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria[] $midocoQueryCriteria
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList[] $midocoQueryCriteriaList
     * @param string[] $orgUnits
     * @param int $maxNoResults
     * @param int $rowsPerPage
     * @param string $queryId
     * @param string $queryType
     * @param string $queryDescription
     * @param bool $menuTemplate
     * @param string $outputLocale
     * @param bool $storeOnePageResults
     */
    public function __construct(array $midocoQueryOutputField = [], array $midocoQueryCriteria = [], array $midocoQueryCriteriaList = [], array $orgUnits = [], ?int $maxNoResults = null, ?int $rowsPerPage = 100, ?string $queryId = null, ?string $queryType = null, ?string $queryDescription = null, ?bool $menuTemplate = null, ?string $outputLocale = null, ?bool $storeOnePageResults = true)
    {
        $this
            ->setMidocoQueryOutputField($midocoQueryOutputField)
            ->setMidocoQueryCriteria($midocoQueryCriteria)
            ->setMidocoQueryCriteriaList($midocoQueryCriteriaList)
            ->setOrgUnits($orgUnits)
            ->setMaxNoResults($maxNoResults)
            ->setRowsPerPage($rowsPerPage)
            ->setQueryId($queryId)
            ->setQueryType($queryType)
            ->setQueryDescription($queryDescription)
            ->setMenuTemplate($menuTemplate)
            ->setOutputLocale($outputLocale)
            ->setStoreOnePageResults($storeOnePageResults);
    }
    /**
     * Get MidocoQueryOutputField value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryOutputField[]
     */
    public function getMidocoQueryOutputField(): array
    {
        return $this->MidocoQueryOutputField;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoQueryOutputField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoQueryOutputField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoQueryOutputFieldForArrayConstraintsFromSetMidocoQueryOutputField(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoQueryMidocoQueryOutputFieldItem) {
            // validation for constraint: itemType
            if (!$midocoQueryMidocoQueryOutputFieldItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoQueryOutputField) {
                $invalidValues[] = is_object($midocoQueryMidocoQueryOutputFieldItem) ? get_class($midocoQueryMidocoQueryOutputFieldItem) : sprintf('%s(%s)', gettype($midocoQueryMidocoQueryOutputFieldItem), var_export($midocoQueryMidocoQueryOutputFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoQueryOutputField property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQueryOutputField, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoQueryOutputField value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryOutputField[] $midocoQueryOutputField
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function setMidocoQueryOutputField(array $midocoQueryOutputField = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoQueryOutputFieldArrayErrorMessage = self::validateMidocoQueryOutputFieldForArrayConstraintsFromSetMidocoQueryOutputField($midocoQueryOutputField))) {
            throw new InvalidArgumentException($midocoQueryOutputFieldArrayErrorMessage, __LINE__);
        }
        $this->MidocoQueryOutputField = $midocoQueryOutputField;
        
        return $this;
    }
    /**
     * Add item to MidocoQueryOutputField value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryOutputField $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function addToMidocoQueryOutputField(\Pggns\MidocoApi\Order\StructType\MidocoQueryOutputField $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoQueryOutputField) {
            throw new InvalidArgumentException(sprintf('The MidocoQueryOutputField property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQueryOutputField, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoQueryOutputField[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoQueryCriteria value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria[]
     */
    public function getMidocoQueryCriteria(): array
    {
        return $this->MidocoQueryCriteria;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoQueryCriteria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoQueryCriteria method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoQueryCriteriaForArrayConstraintsFromSetMidocoQueryCriteria(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoQueryMidocoQueryCriteriaItem) {
            // validation for constraint: itemType
            if (!$midocoQueryMidocoQueryCriteriaItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria) {
                $invalidValues[] = is_object($midocoQueryMidocoQueryCriteriaItem) ? get_class($midocoQueryMidocoQueryCriteriaItem) : sprintf('%s(%s)', gettype($midocoQueryMidocoQueryCriteriaItem), var_export($midocoQueryMidocoQueryCriteriaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoQueryCriteria property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoQueryCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria[] $midocoQueryCriteria
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function setMidocoQueryCriteria(array $midocoQueryCriteria = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoQueryCriteriaArrayErrorMessage = self::validateMidocoQueryCriteriaForArrayConstraintsFromSetMidocoQueryCriteria($midocoQueryCriteria))) {
            throw new InvalidArgumentException($midocoQueryCriteriaArrayErrorMessage, __LINE__);
        }
        $this->MidocoQueryCriteria = $midocoQueryCriteria;
        
        return $this;
    }
    /**
     * Add item to MidocoQueryCriteria value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function addToMidocoQueryCriteria(\Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria) {
            throw new InvalidArgumentException(sprintf('The MidocoQueryCriteria property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteria, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoQueryCriteria[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoQueryCriteriaList value
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList[]
     */
    public function getMidocoQueryCriteriaList(): array
    {
        return $this->MidocoQueryCriteriaList;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoQueryCriteriaList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoQueryCriteriaList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoQueryCriteriaListForArrayConstraintsFromSetMidocoQueryCriteriaList(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoQueryMidocoQueryCriteriaListItem) {
            // validation for constraint: itemType
            if (!$midocoQueryMidocoQueryCriteriaListItem instanceof \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList) {
                $invalidValues[] = is_object($midocoQueryMidocoQueryCriteriaListItem) ? get_class($midocoQueryMidocoQueryCriteriaListItem) : sprintf('%s(%s)', gettype($midocoQueryMidocoQueryCriteriaListItem), var_export($midocoQueryMidocoQueryCriteriaListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoQueryCriteriaList property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoQueryCriteriaList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList[] $midocoQueryCriteriaList
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function setMidocoQueryCriteriaList(array $midocoQueryCriteriaList = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoQueryCriteriaListArrayErrorMessage = self::validateMidocoQueryCriteriaListForArrayConstraintsFromSetMidocoQueryCriteriaList($midocoQueryCriteriaList))) {
            throw new InvalidArgumentException($midocoQueryCriteriaListArrayErrorMessage, __LINE__);
        }
        $this->MidocoQueryCriteriaList = $midocoQueryCriteriaList;
        
        return $this;
    }
    /**
     * Add item to MidocoQueryCriteriaList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function addToMidocoQueryCriteriaList(\Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList) {
            throw new InvalidArgumentException(sprintf('The MidocoQueryCriteriaList property can only contain items of type \Pggns\MidocoApi\Order\StructType\MidocoQueryCriteriaList, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoQueryCriteriaList[] = $item;
        
        return $this;
    }
    /**
     * Get orgUnits value
     * @return string[]
     */
    public function getOrgUnits(): array
    {
        return $this->orgUnits;
    }
    /**
     * This method is responsible for validating the values passed to the setOrgUnits method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOrgUnits method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOrgUnitsForArrayConstraintsFromSetOrgUnits(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoQueryOrgUnitsItem) {
            // validation for constraint: itemType
            if (!is_string($midocoQueryOrgUnitsItem)) {
                $invalidValues[] = is_object($midocoQueryOrgUnitsItem) ? get_class($midocoQueryOrgUnitsItem) : sprintf('%s(%s)', gettype($midocoQueryOrgUnitsItem), var_export($midocoQueryOrgUnitsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The orgUnits property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set orgUnits value
     * @throws InvalidArgumentException
     * @param string[] $orgUnits
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function setOrgUnits(array $orgUnits = []): self
    {
        // validation for constraint: array
        if ('' !== ($orgUnitsArrayErrorMessage = self::validateOrgUnitsForArrayConstraintsFromSetOrgUnits($orgUnits))) {
            throw new InvalidArgumentException($orgUnitsArrayErrorMessage, __LINE__);
        }
        $this->orgUnits = $orgUnits;
        
        return $this;
    }
    /**
     * Add item to orgUnits value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function addToOrgUnits(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The orgUnits property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->orgUnits[] = $item;
        
        return $this;
    }
    /**
     * Get maxNoResults value
     * @return int|null
     */
    public function getMaxNoResults(): ?int
    {
        return $this->maxNoResults;
    }
    /**
     * Set maxNoResults value
     * @param int $maxNoResults
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function setMaxNoResults(?int $maxNoResults = null): self
    {
        // validation for constraint: int
        if (!is_null($maxNoResults) && !(is_int($maxNoResults) || ctype_digit($maxNoResults))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxNoResults, true), gettype($maxNoResults)), __LINE__);
        }
        $this->maxNoResults = $maxNoResults;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function setRowsPerPage(?int $rowsPerPage = 100): self
    {
        // validation for constraint: int
        if (!is_null($rowsPerPage) && !(is_int($rowsPerPage) || ctype_digit($rowsPerPage))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rowsPerPage, true), gettype($rowsPerPage)), __LINE__);
        }
        $this->rowsPerPage = $rowsPerPage;
        
        return $this;
    }
    /**
     * Get queryId value
     * @return string|null
     */
    public function getQueryId(): ?string
    {
        return $this->queryId;
    }
    /**
     * Set queryId value
     * @param string $queryId
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function setQueryId(?string $queryId = null): self
    {
        // validation for constraint: string
        if (!is_null($queryId) && !is_string($queryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryId, true), gettype($queryId)), __LINE__);
        }
        $this->queryId = $queryId;
        
        return $this;
    }
    /**
     * Get queryType value
     * @return string|null
     */
    public function getQueryType(): ?string
    {
        return $this->queryType;
    }
    /**
     * Set queryType value
     * @param string $queryType
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function setQueryType(?string $queryType = null): self
    {
        // validation for constraint: string
        if (!is_null($queryType) && !is_string($queryType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryType, true), gettype($queryType)), __LINE__);
        }
        $this->queryType = $queryType;
        
        return $this;
    }
    /**
     * Get queryDescription value
     * @return string|null
     */
    public function getQueryDescription(): ?string
    {
        return $this->queryDescription;
    }
    /**
     * Set queryDescription value
     * @param string $queryDescription
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function setQueryDescription(?string $queryDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($queryDescription) && !is_string($queryDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($queryDescription, true), gettype($queryDescription)), __LINE__);
        }
        $this->queryDescription = $queryDescription;
        
        return $this;
    }
    /**
     * Get menuTemplate value
     * @return bool|null
     */
    public function getMenuTemplate(): ?bool
    {
        return $this->menuTemplate;
    }
    /**
     * Set menuTemplate value
     * @param bool $menuTemplate
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function setMenuTemplate(?bool $menuTemplate = null): self
    {
        // validation for constraint: boolean
        if (!is_null($menuTemplate) && !is_bool($menuTemplate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($menuTemplate, true), gettype($menuTemplate)), __LINE__);
        }
        $this->menuTemplate = $menuTemplate;
        
        return $this;
    }
    /**
     * Get outputLocale value
     * @return string|null
     */
    public function getOutputLocale(): ?string
    {
        return $this->outputLocale;
    }
    /**
     * Set outputLocale value
     * @param string $outputLocale
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function setOutputLocale(?string $outputLocale = null): self
    {
        // validation for constraint: string
        if (!is_null($outputLocale) && !is_string($outputLocale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($outputLocale, true), gettype($outputLocale)), __LINE__);
        }
        $this->outputLocale = $outputLocale;
        
        return $this;
    }
    /**
     * Get storeOnePageResults value
     * @return bool|null
     */
    public function getStoreOnePageResults(): ?bool
    {
        return $this->storeOnePageResults;
    }
    /**
     * Set storeOnePageResults value
     * @param bool $storeOnePageResults
     * @return \Pggns\MidocoApi\Order\StructType\MidocoQuery
     */
    public function setStoreOnePageResults(?bool $storeOnePageResults = true): self
    {
        // validation for constraint: boolean
        if (!is_null($storeOnePageResults) && !is_bool($storeOnePageResults)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($storeOnePageResults, true), gettype($storeOnePageResults)), __LINE__);
        }
        $this->storeOnePageResults = $storeOnePageResults;
        
        return $this;
    }
}
