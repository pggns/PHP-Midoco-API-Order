<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmailText4PrintTypeRequest StructType
 * @subpackage Structs
 */
class GetEmailText4PrintTypeRequest extends AbstractStructBase
{
    /**
     * The media
     * @var string|null
     */
    protected ?string $media = null;
    /**
     * The printType
     * @var string|null
     */
    protected ?string $printType = null;
    /**
     * The templateId
     * @var string|null
     */
    protected ?string $templateId = null;
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The repositoryId
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected array $repositoryId = [];
    /**
     * The fileName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var string[]
     */
    protected array $fileName = [];
    /**
     * Constructor method for GetEmailText4PrintTypeRequest
     * @uses GetEmailText4PrintTypeRequest::setMedia()
     * @uses GetEmailText4PrintTypeRequest::setPrintType()
     * @uses GetEmailText4PrintTypeRequest::setTemplateId()
     * @uses GetEmailText4PrintTypeRequest::setOrderId()
     * @uses GetEmailText4PrintTypeRequest::setRepositoryId()
     * @uses GetEmailText4PrintTypeRequest::setFileName()
     * @param string $media
     * @param string $printType
     * @param string $templateId
     * @param int $orderId
     * @param int[] $repositoryId
     * @param string[] $fileName
     */
    public function __construct(?string $media = null, ?string $printType = null, ?string $templateId = null, ?int $orderId = null, array $repositoryId = [], array $fileName = [])
    {
        $this
            ->setMedia($media)
            ->setPrintType($printType)
            ->setTemplateId($templateId)
            ->setOrderId($orderId)
            ->setRepositoryId($repositoryId)
            ->setFileName($fileName);
    }
    /**
     * Get media value
     * @return string|null
     */
    public function getMedia(): ?string
    {
        return $this->media;
    }
    /**
     * Set media value
     * @param string $media
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailText4PrintTypeRequest
     */
    public function setMedia(?string $media = null): self
    {
        // validation for constraint: string
        if (!is_null($media) && !is_string($media)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($media, true), gettype($media)), __LINE__);
        }
        $this->media = $media;
        
        return $this;
    }
    /**
     * Get printType value
     * @return string|null
     */
    public function getPrintType(): ?string
    {
        return $this->printType;
    }
    /**
     * Set printType value
     * @param string $printType
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailText4PrintTypeRequest
     */
    public function setPrintType(?string $printType = null): self
    {
        // validation for constraint: string
        if (!is_null($printType) && !is_string($printType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printType, true), gettype($printType)), __LINE__);
        }
        $this->printType = $printType;
        
        return $this;
    }
    /**
     * Get templateId value
     * @return string|null
     */
    public function getTemplateId(): ?string
    {
        return $this->templateId;
    }
    /**
     * Set templateId value
     * @param string $templateId
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailText4PrintTypeRequest
     */
    public function setTemplateId(?string $templateId = null): self
    {
        // validation for constraint: string
        if (!is_null($templateId) && !is_string($templateId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($templateId, true), gettype($templateId)), __LINE__);
        }
        $this->templateId = $templateId;
        
        return $this;
    }
    /**
     * Get orderId value
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }
    /**
     * Set orderId value
     * @param int $orderId
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailText4PrintTypeRequest
     */
    public function setOrderId(?int $orderId = null): self
    {
        // validation for constraint: int
        if (!is_null($orderId) && !(is_int($orderId) || ctype_digit($orderId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderId, true), gettype($orderId)), __LINE__);
        }
        $this->orderId = $orderId;
        
        return $this;
    }
    /**
     * Get repositoryId value
     * @return int[]
     */
    public function getRepositoryId(): array
    {
        return $this->repositoryId;
    }
    /**
     * This method is responsible for validating the values passed to the setRepositoryId method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRepositoryId method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRepositoryIdForArrayConstraintsFromSetRepositoryId(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEmailText4PrintTypeRequestRepositoryIdItem) {
            // validation for constraint: itemType
            if (!(is_int($getEmailText4PrintTypeRequestRepositoryIdItem) || ctype_digit($getEmailText4PrintTypeRequestRepositoryIdItem))) {
                $invalidValues[] = is_object($getEmailText4PrintTypeRequestRepositoryIdItem) ? get_class($getEmailText4PrintTypeRequestRepositoryIdItem) : sprintf('%s(%s)', gettype($getEmailText4PrintTypeRequestRepositoryIdItem), var_export($getEmailText4PrintTypeRequestRepositoryIdItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The repositoryId property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set repositoryId value
     * @throws InvalidArgumentException
     * @param int[] $repositoryId
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailText4PrintTypeRequest
     */
    public function setRepositoryId(array $repositoryId = []): self
    {
        // validation for constraint: array
        if ('' !== ($repositoryIdArrayErrorMessage = self::validateRepositoryIdForArrayConstraintsFromSetRepositoryId($repositoryId))) {
            throw new InvalidArgumentException($repositoryIdArrayErrorMessage, __LINE__);
        }
        $this->repositoryId = $repositoryId;
        
        return $this;
    }
    /**
     * Add item to repositoryId value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailText4PrintTypeRequest
     */
    public function addToRepositoryId(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The repositoryId property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->repositoryId[] = $item;
        
        return $this;
    }
    /**
     * Get fileName value
     * @return string[]
     */
    public function getFileName(): array
    {
        return $this->fileName;
    }
    /**
     * This method is responsible for validating the values passed to the setFileName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFileName method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFileNameForArrayConstraintsFromSetFileName(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEmailText4PrintTypeRequestFileNameItem) {
            // validation for constraint: itemType
            if (!is_string($getEmailText4PrintTypeRequestFileNameItem)) {
                $invalidValues[] = is_object($getEmailText4PrintTypeRequestFileNameItem) ? get_class($getEmailText4PrintTypeRequestFileNameItem) : sprintf('%s(%s)', gettype($getEmailText4PrintTypeRequestFileNameItem), var_export($getEmailText4PrintTypeRequestFileNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The fileName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set fileName value
     * @throws InvalidArgumentException
     * @param string[] $fileName
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailText4PrintTypeRequest
     */
    public function setFileName(array $fileName = []): self
    {
        // validation for constraint: array
        if ('' !== ($fileNameArrayErrorMessage = self::validateFileNameForArrayConstraintsFromSetFileName($fileName))) {
            throw new InvalidArgumentException($fileNameArrayErrorMessage, __LINE__);
        }
        $this->fileName = $fileName;
        
        return $this;
    }
    /**
     * Add item to fileName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\GetEmailText4PrintTypeRequest
     */
    public function addToFileName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The fileName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->fileName[] = $item;
        
        return $this;
    }
}
