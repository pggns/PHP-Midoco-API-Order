<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for QuestionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class QuestionDTO extends AbstractStructBase
{
    /**
     * The activated
     * @var bool|null
     */
    protected ?bool $activated = null;
    /**
     * The activatedDate
     * @var string|null
     */
    protected ?string $activatedDate = null;
    /**
     * The activatedUser
     * @var int|null
     */
    protected ?int $activatedUser = null;
    /**
     * The answerPredefinedValues
     * @var bool|null
     */
    protected ?bool $answerPredefinedValues = null;
    /**
     * The answerRequired
     * @var bool|null
     */
    protected ?bool $answerRequired = null;
    /**
     * The answerType
     * @var string|null
     */
    protected ?string $answerType = null;
    /**
     * The commentEnabled
     * @var bool|null
     */
    protected ?bool $commentEnabled = null;
    /**
     * The creationDate
     * @var string|null
     */
    protected ?string $creationDate = null;
    /**
     * The creationUser
     * @var int|null
     */
    protected ?int $creationUser = null;
    /**
     * The customerType
     * @var string|null
     */
    protected ?string $customerType = null;
    /**
     * The displayPosition
     * @var int|null
     */
    protected ?int $displayPosition = null;
    /**
     * The modifyDate
     * @var string|null
     */
    protected ?string $modifyDate = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The multipleSelection
     * @var bool|null
     */
    protected ?bool $multipleSelection = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The questionId
     * @var int|null
     */
    protected ?int $questionId = null;
    /**
     * The questionText
     * @var string|null
     */
    protected ?string $questionText = null;
    /**
     * The required
     * @var bool|null
     */
    protected ?bool $required = null;
    /**
     * The roles
     * @var string|null
     */
    protected ?string $roles = null;
    /**
     * The status
     * @var string|null
     */
    protected ?string $status = null;
    /**
     * The suppliersId
     * @var string|null
     */
    protected ?string $suppliersId = null;
    /**
     * The validEndDate
     * @var string|null
     */
    protected ?string $validEndDate = null;
    /**
     * The validStartDate
     * @var string|null
     */
    protected ?string $validStartDate = null;
    /**
     * Constructor method for QuestionDTO
     * @uses QuestionDTO::setActivated()
     * @uses QuestionDTO::setActivatedDate()
     * @uses QuestionDTO::setActivatedUser()
     * @uses QuestionDTO::setAnswerPredefinedValues()
     * @uses QuestionDTO::setAnswerRequired()
     * @uses QuestionDTO::setAnswerType()
     * @uses QuestionDTO::setCommentEnabled()
     * @uses QuestionDTO::setCreationDate()
     * @uses QuestionDTO::setCreationUser()
     * @uses QuestionDTO::setCustomerType()
     * @uses QuestionDTO::setDisplayPosition()
     * @uses QuestionDTO::setModifyDate()
     * @uses QuestionDTO::setModifyUser()
     * @uses QuestionDTO::setMultipleSelection()
     * @uses QuestionDTO::setPrice()
     * @uses QuestionDTO::setQuestionId()
     * @uses QuestionDTO::setQuestionText()
     * @uses QuestionDTO::setRequired()
     * @uses QuestionDTO::setRoles()
     * @uses QuestionDTO::setStatus()
     * @uses QuestionDTO::setSuppliersId()
     * @uses QuestionDTO::setValidEndDate()
     * @uses QuestionDTO::setValidStartDate()
     * @param bool $activated
     * @param string $activatedDate
     * @param int $activatedUser
     * @param bool $answerPredefinedValues
     * @param bool $answerRequired
     * @param string $answerType
     * @param bool $commentEnabled
     * @param string $creationDate
     * @param int $creationUser
     * @param string $customerType
     * @param int $displayPosition
     * @param string $modifyDate
     * @param int $modifyUser
     * @param bool $multipleSelection
     * @param float $price
     * @param int $questionId
     * @param string $questionText
     * @param bool $required
     * @param string $roles
     * @param string $status
     * @param string $suppliersId
     * @param string $validEndDate
     * @param string $validStartDate
     */
    public function __construct(?bool $activated = null, ?string $activatedDate = null, ?int $activatedUser = null, ?bool $answerPredefinedValues = null, ?bool $answerRequired = null, ?string $answerType = null, ?bool $commentEnabled = null, ?string $creationDate = null, ?int $creationUser = null, ?string $customerType = null, ?int $displayPosition = null, ?string $modifyDate = null, ?int $modifyUser = null, ?bool $multipleSelection = null, ?float $price = null, ?int $questionId = null, ?string $questionText = null, ?bool $required = null, ?string $roles = null, ?string $status = null, ?string $suppliersId = null, ?string $validEndDate = null, ?string $validStartDate = null)
    {
        $this
            ->setActivated($activated)
            ->setActivatedDate($activatedDate)
            ->setActivatedUser($activatedUser)
            ->setAnswerPredefinedValues($answerPredefinedValues)
            ->setAnswerRequired($answerRequired)
            ->setAnswerType($answerType)
            ->setCommentEnabled($commentEnabled)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setCustomerType($customerType)
            ->setDisplayPosition($displayPosition)
            ->setModifyDate($modifyDate)
            ->setModifyUser($modifyUser)
            ->setMultipleSelection($multipleSelection)
            ->setPrice($price)
            ->setQuestionId($questionId)
            ->setQuestionText($questionText)
            ->setRequired($required)
            ->setRoles($roles)
            ->setStatus($status)
            ->setSuppliersId($suppliersId)
            ->setValidEndDate($validEndDate)
            ->setValidStartDate($validStartDate);
    }
    /**
     * Get activated value
     * @return bool|null
     */
    public function getActivated(): ?bool
    {
        return $this->activated;
    }
    /**
     * Set activated value
     * @param bool $activated
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setActivated(?bool $activated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($activated) && !is_bool($activated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($activated, true), gettype($activated)), __LINE__);
        }
        $this->activated = $activated;
        
        return $this;
    }
    /**
     * Get activatedDate value
     * @return string|null
     */
    public function getActivatedDate(): ?string
    {
        return $this->activatedDate;
    }
    /**
     * Set activatedDate value
     * @param string $activatedDate
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setActivatedDate(?string $activatedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($activatedDate) && !is_string($activatedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($activatedDate, true), gettype($activatedDate)), __LINE__);
        }
        $this->activatedDate = $activatedDate;
        
        return $this;
    }
    /**
     * Get activatedUser value
     * @return int|null
     */
    public function getActivatedUser(): ?int
    {
        return $this->activatedUser;
    }
    /**
     * Set activatedUser value
     * @param int $activatedUser
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setActivatedUser(?int $activatedUser = null): self
    {
        // validation for constraint: int
        if (!is_null($activatedUser) && !(is_int($activatedUser) || ctype_digit($activatedUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($activatedUser, true), gettype($activatedUser)), __LINE__);
        }
        $this->activatedUser = $activatedUser;
        
        return $this;
    }
    /**
     * Get answerPredefinedValues value
     * @return bool|null
     */
    public function getAnswerPredefinedValues(): ?bool
    {
        return $this->answerPredefinedValues;
    }
    /**
     * Set answerPredefinedValues value
     * @param bool $answerPredefinedValues
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setAnswerPredefinedValues(?bool $answerPredefinedValues = null): self
    {
        // validation for constraint: boolean
        if (!is_null($answerPredefinedValues) && !is_bool($answerPredefinedValues)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($answerPredefinedValues, true), gettype($answerPredefinedValues)), __LINE__);
        }
        $this->answerPredefinedValues = $answerPredefinedValues;
        
        return $this;
    }
    /**
     * Get answerRequired value
     * @return bool|null
     */
    public function getAnswerRequired(): ?bool
    {
        return $this->answerRequired;
    }
    /**
     * Set answerRequired value
     * @param bool $answerRequired
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setAnswerRequired(?bool $answerRequired = null): self
    {
        // validation for constraint: boolean
        if (!is_null($answerRequired) && !is_bool($answerRequired)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($answerRequired, true), gettype($answerRequired)), __LINE__);
        }
        $this->answerRequired = $answerRequired;
        
        return $this;
    }
    /**
     * Get answerType value
     * @return string|null
     */
    public function getAnswerType(): ?string
    {
        return $this->answerType;
    }
    /**
     * Set answerType value
     * @param string $answerType
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setAnswerType(?string $answerType = null): self
    {
        // validation for constraint: string
        if (!is_null($answerType) && !is_string($answerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($answerType, true), gettype($answerType)), __LINE__);
        }
        $this->answerType = $answerType;
        
        return $this;
    }
    /**
     * Get commentEnabled value
     * @return bool|null
     */
    public function getCommentEnabled(): ?bool
    {
        return $this->commentEnabled;
    }
    /**
     * Set commentEnabled value
     * @param bool $commentEnabled
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setCommentEnabled(?bool $commentEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($commentEnabled) && !is_bool($commentEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($commentEnabled, true), gettype($commentEnabled)), __LINE__);
        }
        $this->commentEnabled = $commentEnabled;
        
        return $this;
    }
    /**
     * Get creationDate value
     * @return string|null
     */
    public function getCreationDate(): ?string
    {
        return $this->creationDate;
    }
    /**
     * Set creationDate value
     * @param string $creationDate
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setCreationDate(?string $creationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDate) && !is_string($creationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDate, true), gettype($creationDate)), __LINE__);
        }
        $this->creationDate = $creationDate;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int|null
     */
    public function getCreationUser(): ?int
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param int $creationUser
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setCreationUser(?int $creationUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creationUser) && !(is_int($creationUser) || ctype_digit($creationUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Get customerType value
     * @return string|null
     */
    public function getCustomerType(): ?string
    {
        return $this->customerType;
    }
    /**
     * Set customerType value
     * @param string $customerType
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setCustomerType(?string $customerType = null): self
    {
        // validation for constraint: string
        if (!is_null($customerType) && !is_string($customerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerType, true), gettype($customerType)), __LINE__);
        }
        $this->customerType = $customerType;
        
        return $this;
    }
    /**
     * Get displayPosition value
     * @return int|null
     */
    public function getDisplayPosition(): ?int
    {
        return $this->displayPosition;
    }
    /**
     * Set displayPosition value
     * @param int $displayPosition
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setDisplayPosition(?int $displayPosition = null): self
    {
        // validation for constraint: int
        if (!is_null($displayPosition) && !(is_int($displayPosition) || ctype_digit($displayPosition))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($displayPosition, true), gettype($displayPosition)), __LINE__);
        }
        $this->displayPosition = $displayPosition;
        
        return $this;
    }
    /**
     * Get modifyDate value
     * @return string|null
     */
    public function getModifyDate(): ?string
    {
        return $this->modifyDate;
    }
    /**
     * Set modifyDate value
     * @param string $modifyDate
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setModifyDate(?string $modifyDate = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyDate) && !is_string($modifyDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyDate, true), gettype($modifyDate)), __LINE__);
        }
        $this->modifyDate = $modifyDate;
        
        return $this;
    }
    /**
     * Get modifyUser value
     * @return int|null
     */
    public function getModifyUser(): ?int
    {
        return $this->modifyUser;
    }
    /**
     * Set modifyUser value
     * @param int $modifyUser
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setModifyUser(?int $modifyUser = null): self
    {
        // validation for constraint: int
        if (!is_null($modifyUser) && !(is_int($modifyUser) || ctype_digit($modifyUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($modifyUser, true), gettype($modifyUser)), __LINE__);
        }
        $this->modifyUser = $modifyUser;
        
        return $this;
    }
    /**
     * Get multipleSelection value
     * @return bool|null
     */
    public function getMultipleSelection(): ?bool
    {
        return $this->multipleSelection;
    }
    /**
     * Set multipleSelection value
     * @param bool $multipleSelection
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setMultipleSelection(?bool $multipleSelection = null): self
    {
        // validation for constraint: boolean
        if (!is_null($multipleSelection) && !is_bool($multipleSelection)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($multipleSelection, true), gettype($multipleSelection)), __LINE__);
        }
        $this->multipleSelection = $multipleSelection;
        
        return $this;
    }
    /**
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get questionId value
     * @return int|null
     */
    public function getQuestionId(): ?int
    {
        return $this->questionId;
    }
    /**
     * Set questionId value
     * @param int $questionId
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setQuestionId(?int $questionId = null): self
    {
        // validation for constraint: int
        if (!is_null($questionId) && !(is_int($questionId) || ctype_digit($questionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($questionId, true), gettype($questionId)), __LINE__);
        }
        $this->questionId = $questionId;
        
        return $this;
    }
    /**
     * Get questionText value
     * @return string|null
     */
    public function getQuestionText(): ?string
    {
        return $this->questionText;
    }
    /**
     * Set questionText value
     * @param string $questionText
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setQuestionText(?string $questionText = null): self
    {
        // validation for constraint: string
        if (!is_null($questionText) && !is_string($questionText)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($questionText, true), gettype($questionText)), __LINE__);
        }
        $this->questionText = $questionText;
        
        return $this;
    }
    /**
     * Get required value
     * @return bool|null
     */
    public function getRequired(): ?bool
    {
        return $this->required;
    }
    /**
     * Set required value
     * @param bool $required
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setRequired(?bool $required = null): self
    {
        // validation for constraint: boolean
        if (!is_null($required) && !is_bool($required)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($required, true), gettype($required)), __LINE__);
        }
        $this->required = $required;
        
        return $this;
    }
    /**
     * Get roles value
     * @return string|null
     */
    public function getRoles(): ?string
    {
        return $this->roles;
    }
    /**
     * Set roles value
     * @param string $roles
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setRoles(?string $roles = null): self
    {
        // validation for constraint: string
        if (!is_null($roles) && !is_string($roles)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roles, true), gettype($roles)), __LINE__);
        }
        $this->roles = $roles;
        
        return $this;
    }
    /**
     * Get status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }
    /**
     * Set status value
     * @param string $status
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Get suppliersId value
     * @return string|null
     */
    public function getSuppliersId(): ?string
    {
        return $this->suppliersId;
    }
    /**
     * Set suppliersId value
     * @param string $suppliersId
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setSuppliersId(?string $suppliersId = null): self
    {
        // validation for constraint: string
        if (!is_null($suppliersId) && !is_string($suppliersId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($suppliersId, true), gettype($suppliersId)), __LINE__);
        }
        $this->suppliersId = $suppliersId;
        
        return $this;
    }
    /**
     * Get validEndDate value
     * @return string|null
     */
    public function getValidEndDate(): ?string
    {
        return $this->validEndDate;
    }
    /**
     * Set validEndDate value
     * @param string $validEndDate
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setValidEndDate(?string $validEndDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validEndDate) && !is_string($validEndDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validEndDate, true), gettype($validEndDate)), __LINE__);
        }
        $this->validEndDate = $validEndDate;
        
        return $this;
    }
    /**
     * Get validStartDate value
     * @return string|null
     */
    public function getValidStartDate(): ?string
    {
        return $this->validStartDate;
    }
    /**
     * Set validStartDate value
     * @param string $validStartDate
     * @return \Pggns\MidocoApi\Order\StructType\QuestionDTO
     */
    public function setValidStartDate(?string $validStartDate = null): self
    {
        // validation for constraint: string
        if (!is_null($validStartDate) && !is_string($validStartDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validStartDate, true), gettype($validStartDate)), __LINE__);
        }
        $this->validStartDate = $validStartDate;
        
        return $this;
    }
}
