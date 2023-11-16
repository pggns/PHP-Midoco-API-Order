<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DoFlightTimeChangeEmailRequest StructType
 * @subpackage Structs
 */
class DoFlightTimeChangeEmailRequest extends AbstractStructBase
{
    /**
     * The orderId
     * @var int|null
     */
    protected ?int $orderId = null;
    /**
     * The emailSubject
     * @var string|null
     */
    protected ?string $emailSubject = null;
    /**
     * The emailContent
     * @var string|null
     */
    protected ?string $emailContent = null;
    /**
     * The templateId
     * @var string|null
     */
    protected ?string $templateId = null;
    /**
     * The cultureId
     * @var string|null
     */
    protected ?string $cultureId = null;
    /**
     * The printTemplateNameContent
     * Meta information extracted from the WSDL
     * - default:
     * @var string|null
     */
    protected ?string $printTemplateNameContent = null;
    /**
     * The printTemplateNameSubject
     * Meta information extracted from the WSDL
     * - default:
     * @var string|null
     */
    protected ?string $printTemplateNameSubject = null;
    /**
     * The orderPaymentId
     * Meta information extracted from the WSDL
     * - default: 0
     * @var int|null
     */
    protected ?int $orderPaymentId = null;
    /**
     * The AdditionalTemplateMapInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: AdditionalTemplateMapInfo
     * @var \Pggns\MidocoApi\Order\StructType\AdditionalTemplateMapInfo[]
     */
    protected array $AdditionalTemplateMapInfo = [];
    /**
     * The selectedMailAttachments
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $selectedMailAttachments = [];
    /**
     * Constructor method for DoFlightTimeChangeEmailRequest
     * @uses DoFlightTimeChangeEmailRequest::setOrderId()
     * @uses DoFlightTimeChangeEmailRequest::setEmailSubject()
     * @uses DoFlightTimeChangeEmailRequest::setEmailContent()
     * @uses DoFlightTimeChangeEmailRequest::setTemplateId()
     * @uses DoFlightTimeChangeEmailRequest::setCultureId()
     * @uses DoFlightTimeChangeEmailRequest::setPrintTemplateNameContent()
     * @uses DoFlightTimeChangeEmailRequest::setPrintTemplateNameSubject()
     * @uses DoFlightTimeChangeEmailRequest::setOrderPaymentId()
     * @uses DoFlightTimeChangeEmailRequest::setAdditionalTemplateMapInfo()
     * @uses DoFlightTimeChangeEmailRequest::setSelectedMailAttachments()
     * @param int $orderId
     * @param string $emailSubject
     * @param string $emailContent
     * @param string $templateId
     * @param string $cultureId
     * @param string $printTemplateNameContent
     * @param string $printTemplateNameSubject
     * @param int $orderPaymentId
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalTemplateMapInfo[] $additionalTemplateMapInfo
     * @param string[] $selectedMailAttachments
     */
    public function __construct(?int $orderId = null, ?string $emailSubject = null, ?string $emailContent = null, ?string $templateId = null, ?string $cultureId = null, ?string $printTemplateNameContent = '', ?string $printTemplateNameSubject = '', ?int $orderPaymentId = 0, array $additionalTemplateMapInfo = [], array $selectedMailAttachments = [])
    {
        $this
            ->setOrderId($orderId)
            ->setEmailSubject($emailSubject)
            ->setEmailContent($emailContent)
            ->setTemplateId($templateId)
            ->setCultureId($cultureId)
            ->setPrintTemplateNameContent($printTemplateNameContent)
            ->setPrintTemplateNameSubject($printTemplateNameSubject)
            ->setOrderPaymentId($orderPaymentId)
            ->setAdditionalTemplateMapInfo($additionalTemplateMapInfo)
            ->setSelectedMailAttachments($selectedMailAttachments);
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
     * @return \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailRequest
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
     * Get emailSubject value
     * @return string|null
     */
    public function getEmailSubject(): ?string
    {
        return $this->emailSubject;
    }
    /**
     * Set emailSubject value
     * @param string $emailSubject
     * @return \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailRequest
     */
    public function setEmailSubject(?string $emailSubject = null): self
    {
        // validation for constraint: string
        if (!is_null($emailSubject) && !is_string($emailSubject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailSubject, true), gettype($emailSubject)), __LINE__);
        }
        $this->emailSubject = $emailSubject;
        
        return $this;
    }
    /**
     * Get emailContent value
     * @return string|null
     */
    public function getEmailContent(): ?string
    {
        return $this->emailContent;
    }
    /**
     * Set emailContent value
     * @param string $emailContent
     * @return \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailRequest
     */
    public function setEmailContent(?string $emailContent = null): self
    {
        // validation for constraint: string
        if (!is_null($emailContent) && !is_string($emailContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($emailContent, true), gettype($emailContent)), __LINE__);
        }
        $this->emailContent = $emailContent;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailRequest
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
     * Get cultureId value
     * @return string|null
     */
    public function getCultureId(): ?string
    {
        return $this->cultureId;
    }
    /**
     * Set cultureId value
     * @param string $cultureId
     * @return \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailRequest
     */
    public function setCultureId(?string $cultureId = null): self
    {
        // validation for constraint: string
        if (!is_null($cultureId) && !is_string($cultureId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cultureId, true), gettype($cultureId)), __LINE__);
        }
        $this->cultureId = $cultureId;
        
        return $this;
    }
    /**
     * Get printTemplateNameContent value
     * @return string|null
     */
    public function getPrintTemplateNameContent(): ?string
    {
        return $this->printTemplateNameContent;
    }
    /**
     * Set printTemplateNameContent value
     * @param string $printTemplateNameContent
     * @return \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailRequest
     */
    public function setPrintTemplateNameContent(?string $printTemplateNameContent = ''): self
    {
        // validation for constraint: string
        if (!is_null($printTemplateNameContent) && !is_string($printTemplateNameContent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printTemplateNameContent, true), gettype($printTemplateNameContent)), __LINE__);
        }
        $this->printTemplateNameContent = $printTemplateNameContent;
        
        return $this;
    }
    /**
     * Get printTemplateNameSubject value
     * @return string|null
     */
    public function getPrintTemplateNameSubject(): ?string
    {
        return $this->printTemplateNameSubject;
    }
    /**
     * Set printTemplateNameSubject value
     * @param string $printTemplateNameSubject
     * @return \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailRequest
     */
    public function setPrintTemplateNameSubject(?string $printTemplateNameSubject = ''): self
    {
        // validation for constraint: string
        if (!is_null($printTemplateNameSubject) && !is_string($printTemplateNameSubject)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($printTemplateNameSubject, true), gettype($printTemplateNameSubject)), __LINE__);
        }
        $this->printTemplateNameSubject = $printTemplateNameSubject;
        
        return $this;
    }
    /**
     * Get orderPaymentId value
     * @return int|null
     */
    public function getOrderPaymentId(): ?int
    {
        return $this->orderPaymentId;
    }
    /**
     * Set orderPaymentId value
     * @param int $orderPaymentId
     * @return \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailRequest
     */
    public function setOrderPaymentId(?int $orderPaymentId = 0): self
    {
        // validation for constraint: int
        if (!is_null($orderPaymentId) && !(is_int($orderPaymentId) || ctype_digit($orderPaymentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderPaymentId, true), gettype($orderPaymentId)), __LINE__);
        }
        $this->orderPaymentId = $orderPaymentId;
        
        return $this;
    }
    /**
     * Get AdditionalTemplateMapInfo value
     * @return \Pggns\MidocoApi\Order\StructType\AdditionalTemplateMapInfo[]
     */
    public function getAdditionalTemplateMapInfo(): array
    {
        return $this->AdditionalTemplateMapInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditionalTemplateMapInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalTemplateMapInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalTemplateMapInfoForArrayConstraintsFromSetAdditionalTemplateMapInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $doFlightTimeChangeEmailRequestAdditionalTemplateMapInfoItem) {
            // validation for constraint: itemType
            if (!$doFlightTimeChangeEmailRequestAdditionalTemplateMapInfoItem instanceof \Pggns\MidocoApi\Order\StructType\AdditionalTemplateMapInfo) {
                $invalidValues[] = is_object($doFlightTimeChangeEmailRequestAdditionalTemplateMapInfoItem) ? get_class($doFlightTimeChangeEmailRequestAdditionalTemplateMapInfoItem) : sprintf('%s(%s)', gettype($doFlightTimeChangeEmailRequestAdditionalTemplateMapInfoItem), var_export($doFlightTimeChangeEmailRequestAdditionalTemplateMapInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalTemplateMapInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdditionalTemplateMapInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalTemplateMapInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalTemplateMapInfo[] $additionalTemplateMapInfo
     * @return \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailRequest
     */
    public function setAdditionalTemplateMapInfo(array $additionalTemplateMapInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($additionalTemplateMapInfoArrayErrorMessage = self::validateAdditionalTemplateMapInfoForArrayConstraintsFromSetAdditionalTemplateMapInfo($additionalTemplateMapInfo))) {
            throw new InvalidArgumentException($additionalTemplateMapInfoArrayErrorMessage, __LINE__);
        }
        $this->AdditionalTemplateMapInfo = $additionalTemplateMapInfo;
        
        return $this;
    }
    /**
     * Add item to AdditionalTemplateMapInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Order\StructType\AdditionalTemplateMapInfo $item
     * @return \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailRequest
     */
    public function addToAdditionalTemplateMapInfo(\Pggns\MidocoApi\Order\StructType\AdditionalTemplateMapInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Order\StructType\AdditionalTemplateMapInfo) {
            throw new InvalidArgumentException(sprintf('The AdditionalTemplateMapInfo property can only contain items of type \Pggns\MidocoApi\Order\StructType\AdditionalTemplateMapInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AdditionalTemplateMapInfo[] = $item;
        
        return $this;
    }
    /**
     * Get selectedMailAttachments value
     * @return string[]
     */
    public function getSelectedMailAttachments(): array
    {
        return $this->selectedMailAttachments;
    }
    /**
     * This method is responsible for validating the values passed to the setSelectedMailAttachments method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSelectedMailAttachments method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSelectedMailAttachmentsForArrayConstraintsFromSetSelectedMailAttachments(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $doFlightTimeChangeEmailRequestSelectedMailAttachmentsItem) {
            // validation for constraint: itemType
            if (!is_string($doFlightTimeChangeEmailRequestSelectedMailAttachmentsItem)) {
                $invalidValues[] = is_object($doFlightTimeChangeEmailRequestSelectedMailAttachmentsItem) ? get_class($doFlightTimeChangeEmailRequestSelectedMailAttachmentsItem) : sprintf('%s(%s)', gettype($doFlightTimeChangeEmailRequestSelectedMailAttachmentsItem), var_export($doFlightTimeChangeEmailRequestSelectedMailAttachmentsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The selectedMailAttachments property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set selectedMailAttachments value
     * @throws InvalidArgumentException
     * @param string[] $selectedMailAttachments
     * @return \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailRequest
     */
    public function setSelectedMailAttachments(array $selectedMailAttachments = []): self
    {
        // validation for constraint: array
        if ('' !== ($selectedMailAttachmentsArrayErrorMessage = self::validateSelectedMailAttachmentsForArrayConstraintsFromSetSelectedMailAttachments($selectedMailAttachments))) {
            throw new InvalidArgumentException($selectedMailAttachmentsArrayErrorMessage, __LINE__);
        }
        $this->selectedMailAttachments = $selectedMailAttachments;
        
        return $this;
    }
    /**
     * Add item to selectedMailAttachments value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Order\StructType\DoFlightTimeChangeEmailRequest
     */
    public function addToSelectedMailAttachments(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The selectedMailAttachments property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->selectedMailAttachments[] = $item;
        
        return $this;
    }
}
