<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UserDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UserDTO extends AbstractStructBase
{
    /**
     * The allowedIps
     * @var string|null
     */
    protected ?string $allowedIps = null;
    /**
     * The allowedWsIps
     * @var string|null
     */
    protected ?string $allowedWsIps = null;
    /**
     * The attemptsLeft
     * @var int|null
     */
    protected ?int $attemptsLeft = null;
    /**
     * The bonusCalculation
     * @var bool|null
     */
    protected ?bool $bonusCalculation = null;
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
     * The isManualLocked
     * @var bool|null
     */
    protected ?bool $isManualLocked = null;
    /**
     * The isStrictValidation
     * @var bool|null
     */
    protected ?bool $isStrictValidation = null;
    /**
     * The isTemporaryPassword
     * @var bool|null
     */
    protected ?bool $isTemporaryPassword = null;
    /**
     * The lastLoginTime
     * @var string|null
     */
    protected ?string $lastLoginTime = null;
    /**
     * The lockReason
     * @var string|null
     */
    protected ?string $lockReason = null;
    /**
     * The locked
     * @var bool|null
     */
    protected ?bool $locked = null;
    /**
     * The lockedByUser
     * @var int|null
     */
    protected ?int $lockedByUser = null;
    /**
     * The lockedTime
     * @var string|null
     */
    protected ?string $lockedTime = null;
    /**
     * The loginInteractive
     * @var bool|null
     */
    protected ?bool $loginInteractive = null;
    /**
     * The modifyTime
     * @var string|null
     */
    protected ?string $modifyTime = null;
    /**
     * The modifyUser
     * @var int|null
     */
    protected ?int $modifyUser = null;
    /**
     * The notVisible
     * @var bool|null
     */
    protected ?bool $notVisible = null;
    /**
     * The password
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The passwordDate
     * @var string|null
     */
    protected ?string $passwordDate = null;
    /**
     * The passwordLevel
     * @var int|null
     */
    protected ?int $passwordLevel = null;
    /**
     * The queueId
     * @var int|null
     */
    protected ?int $queueId = null;
    /**
     * The recoveryAnswer
     * @var string|null
     */
    protected ?string $recoveryAnswer = null;
    /**
     * The recoveryQuestion
     * @var int|null
     */
    protected ?int $recoveryQuestion = null;
    /**
     * The userEmail
     * @var string|null
     */
    protected ?string $userEmail = null;
    /**
     * The userForename
     * @var string|null
     */
    protected ?string $userForename = null;
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The userLogin
     * @var string|null
     */
    protected ?string $userLogin = null;
    /**
     * The userName
     * @var string|null
     */
    protected ?string $userName = null;
    /**
     * The wsAllowed
     * @var bool|null
     */
    protected ?bool $wsAllowed = null;
    /**
     * Constructor method for UserDTO
     * @uses UserDTO::setAllowedIps()
     * @uses UserDTO::setAllowedWsIps()
     * @uses UserDTO::setAttemptsLeft()
     * @uses UserDTO::setBonusCalculation()
     * @uses UserDTO::setCreationDate()
     * @uses UserDTO::setCreationUser()
     * @uses UserDTO::setIsManualLocked()
     * @uses UserDTO::setIsStrictValidation()
     * @uses UserDTO::setIsTemporaryPassword()
     * @uses UserDTO::setLastLoginTime()
     * @uses UserDTO::setLockReason()
     * @uses UserDTO::setLocked()
     * @uses UserDTO::setLockedByUser()
     * @uses UserDTO::setLockedTime()
     * @uses UserDTO::setLoginInteractive()
     * @uses UserDTO::setModifyTime()
     * @uses UserDTO::setModifyUser()
     * @uses UserDTO::setNotVisible()
     * @uses UserDTO::setPassword()
     * @uses UserDTO::setPasswordDate()
     * @uses UserDTO::setPasswordLevel()
     * @uses UserDTO::setQueueId()
     * @uses UserDTO::setRecoveryAnswer()
     * @uses UserDTO::setRecoveryQuestion()
     * @uses UserDTO::setUserEmail()
     * @uses UserDTO::setUserForename()
     * @uses UserDTO::setUserId()
     * @uses UserDTO::setUserLogin()
     * @uses UserDTO::setUserName()
     * @uses UserDTO::setWsAllowed()
     * @param string $allowedIps
     * @param string $allowedWsIps
     * @param int $attemptsLeft
     * @param bool $bonusCalculation
     * @param string $creationDate
     * @param int $creationUser
     * @param bool $isManualLocked
     * @param bool $isStrictValidation
     * @param bool $isTemporaryPassword
     * @param string $lastLoginTime
     * @param string $lockReason
     * @param bool $locked
     * @param int $lockedByUser
     * @param string $lockedTime
     * @param bool $loginInteractive
     * @param string $modifyTime
     * @param int $modifyUser
     * @param bool $notVisible
     * @param string $password
     * @param string $passwordDate
     * @param int $passwordLevel
     * @param int $queueId
     * @param string $recoveryAnswer
     * @param int $recoveryQuestion
     * @param string $userEmail
     * @param string $userForename
     * @param int $userId
     * @param string $userLogin
     * @param string $userName
     * @param bool $wsAllowed
     */
    public function __construct(?string $allowedIps = null, ?string $allowedWsIps = null, ?int $attemptsLeft = null, ?bool $bonusCalculation = null, ?string $creationDate = null, ?int $creationUser = null, ?bool $isManualLocked = null, ?bool $isStrictValidation = null, ?bool $isTemporaryPassword = null, ?string $lastLoginTime = null, ?string $lockReason = null, ?bool $locked = null, ?int $lockedByUser = null, ?string $lockedTime = null, ?bool $loginInteractive = null, ?string $modifyTime = null, ?int $modifyUser = null, ?bool $notVisible = null, ?string $password = null, ?string $passwordDate = null, ?int $passwordLevel = null, ?int $queueId = null, ?string $recoveryAnswer = null, ?int $recoveryQuestion = null, ?string $userEmail = null, ?string $userForename = null, ?int $userId = null, ?string $userLogin = null, ?string $userName = null, ?bool $wsAllowed = null)
    {
        $this
            ->setAllowedIps($allowedIps)
            ->setAllowedWsIps($allowedWsIps)
            ->setAttemptsLeft($attemptsLeft)
            ->setBonusCalculation($bonusCalculation)
            ->setCreationDate($creationDate)
            ->setCreationUser($creationUser)
            ->setIsManualLocked($isManualLocked)
            ->setIsStrictValidation($isStrictValidation)
            ->setIsTemporaryPassword($isTemporaryPassword)
            ->setLastLoginTime($lastLoginTime)
            ->setLockReason($lockReason)
            ->setLocked($locked)
            ->setLockedByUser($lockedByUser)
            ->setLockedTime($lockedTime)
            ->setLoginInteractive($loginInteractive)
            ->setModifyTime($modifyTime)
            ->setModifyUser($modifyUser)
            ->setNotVisible($notVisible)
            ->setPassword($password)
            ->setPasswordDate($passwordDate)
            ->setPasswordLevel($passwordLevel)
            ->setQueueId($queueId)
            ->setRecoveryAnswer($recoveryAnswer)
            ->setRecoveryQuestion($recoveryQuestion)
            ->setUserEmail($userEmail)
            ->setUserForename($userForename)
            ->setUserId($userId)
            ->setUserLogin($userLogin)
            ->setUserName($userName)
            ->setWsAllowed($wsAllowed);
    }
    /**
     * Get allowedIps value
     * @return string|null
     */
    public function getAllowedIps(): ?string
    {
        return $this->allowedIps;
    }
    /**
     * Set allowedIps value
     * @param string $allowedIps
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setAllowedIps(?string $allowedIps = null): self
    {
        // validation for constraint: string
        if (!is_null($allowedIps) && !is_string($allowedIps)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($allowedIps, true), gettype($allowedIps)), __LINE__);
        }
        $this->allowedIps = $allowedIps;
        
        return $this;
    }
    /**
     * Get allowedWsIps value
     * @return string|null
     */
    public function getAllowedWsIps(): ?string
    {
        return $this->allowedWsIps;
    }
    /**
     * Set allowedWsIps value
     * @param string $allowedWsIps
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setAllowedWsIps(?string $allowedWsIps = null): self
    {
        // validation for constraint: string
        if (!is_null($allowedWsIps) && !is_string($allowedWsIps)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($allowedWsIps, true), gettype($allowedWsIps)), __LINE__);
        }
        $this->allowedWsIps = $allowedWsIps;
        
        return $this;
    }
    /**
     * Get attemptsLeft value
     * @return int|null
     */
    public function getAttemptsLeft(): ?int
    {
        return $this->attemptsLeft;
    }
    /**
     * Set attemptsLeft value
     * @param int $attemptsLeft
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setAttemptsLeft(?int $attemptsLeft = null): self
    {
        // validation for constraint: int
        if (!is_null($attemptsLeft) && !(is_int($attemptsLeft) || ctype_digit($attemptsLeft))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attemptsLeft, true), gettype($attemptsLeft)), __LINE__);
        }
        $this->attemptsLeft = $attemptsLeft;
        
        return $this;
    }
    /**
     * Get bonusCalculation value
     * @return bool|null
     */
    public function getBonusCalculation(): ?bool
    {
        return $this->bonusCalculation;
    }
    /**
     * Set bonusCalculation value
     * @param bool $bonusCalculation
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setBonusCalculation(?bool $bonusCalculation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($bonusCalculation) && !is_bool($bonusCalculation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bonusCalculation, true), gettype($bonusCalculation)), __LINE__);
        }
        $this->bonusCalculation = $bonusCalculation;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
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
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
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
     * Get isManualLocked value
     * @return bool|null
     */
    public function getIsManualLocked(): ?bool
    {
        return $this->isManualLocked;
    }
    /**
     * Set isManualLocked value
     * @param bool $isManualLocked
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setIsManualLocked(?bool $isManualLocked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isManualLocked) && !is_bool($isManualLocked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isManualLocked, true), gettype($isManualLocked)), __LINE__);
        }
        $this->isManualLocked = $isManualLocked;
        
        return $this;
    }
    /**
     * Get isStrictValidation value
     * @return bool|null
     */
    public function getIsStrictValidation(): ?bool
    {
        return $this->isStrictValidation;
    }
    /**
     * Set isStrictValidation value
     * @param bool $isStrictValidation
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setIsStrictValidation(?bool $isStrictValidation = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isStrictValidation) && !is_bool($isStrictValidation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isStrictValidation, true), gettype($isStrictValidation)), __LINE__);
        }
        $this->isStrictValidation = $isStrictValidation;
        
        return $this;
    }
    /**
     * Get isTemporaryPassword value
     * @return bool|null
     */
    public function getIsTemporaryPassword(): ?bool
    {
        return $this->isTemporaryPassword;
    }
    /**
     * Set isTemporaryPassword value
     * @param bool $isTemporaryPassword
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setIsTemporaryPassword(?bool $isTemporaryPassword = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTemporaryPassword) && !is_bool($isTemporaryPassword)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTemporaryPassword, true), gettype($isTemporaryPassword)), __LINE__);
        }
        $this->isTemporaryPassword = $isTemporaryPassword;
        
        return $this;
    }
    /**
     * Get lastLoginTime value
     * @return string|null
     */
    public function getLastLoginTime(): ?string
    {
        return $this->lastLoginTime;
    }
    /**
     * Set lastLoginTime value
     * @param string $lastLoginTime
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setLastLoginTime(?string $lastLoginTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lastLoginTime) && !is_string($lastLoginTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastLoginTime, true), gettype($lastLoginTime)), __LINE__);
        }
        $this->lastLoginTime = $lastLoginTime;
        
        return $this;
    }
    /**
     * Get lockReason value
     * @return string|null
     */
    public function getLockReason(): ?string
    {
        return $this->lockReason;
    }
    /**
     * Set lockReason value
     * @param string $lockReason
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setLockReason(?string $lockReason = null): self
    {
        // validation for constraint: string
        if (!is_null($lockReason) && !is_string($lockReason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockReason, true), gettype($lockReason)), __LINE__);
        }
        $this->lockReason = $lockReason;
        
        return $this;
    }
    /**
     * Get locked value
     * @return bool|null
     */
    public function getLocked(): ?bool
    {
        return $this->locked;
    }
    /**
     * Set locked value
     * @param bool $locked
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setLocked(?bool $locked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($locked) && !is_bool($locked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($locked, true), gettype($locked)), __LINE__);
        }
        $this->locked = $locked;
        
        return $this;
    }
    /**
     * Get lockedByUser value
     * @return int|null
     */
    public function getLockedByUser(): ?int
    {
        return $this->lockedByUser;
    }
    /**
     * Set lockedByUser value
     * @param int $lockedByUser
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setLockedByUser(?int $lockedByUser = null): self
    {
        // validation for constraint: int
        if (!is_null($lockedByUser) && !(is_int($lockedByUser) || ctype_digit($lockedByUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lockedByUser, true), gettype($lockedByUser)), __LINE__);
        }
        $this->lockedByUser = $lockedByUser;
        
        return $this;
    }
    /**
     * Get lockedTime value
     * @return string|null
     */
    public function getLockedTime(): ?string
    {
        return $this->lockedTime;
    }
    /**
     * Set lockedTime value
     * @param string $lockedTime
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setLockedTime(?string $lockedTime = null): self
    {
        // validation for constraint: string
        if (!is_null($lockedTime) && !is_string($lockedTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockedTime, true), gettype($lockedTime)), __LINE__);
        }
        $this->lockedTime = $lockedTime;
        
        return $this;
    }
    /**
     * Get loginInteractive value
     * @return bool|null
     */
    public function getLoginInteractive(): ?bool
    {
        return $this->loginInteractive;
    }
    /**
     * Set loginInteractive value
     * @param bool $loginInteractive
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setLoginInteractive(?bool $loginInteractive = null): self
    {
        // validation for constraint: boolean
        if (!is_null($loginInteractive) && !is_bool($loginInteractive)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($loginInteractive, true), gettype($loginInteractive)), __LINE__);
        }
        $this->loginInteractive = $loginInteractive;
        
        return $this;
    }
    /**
     * Get modifyTime value
     * @return string|null
     */
    public function getModifyTime(): ?string
    {
        return $this->modifyTime;
    }
    /**
     * Set modifyTime value
     * @param string $modifyTime
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setModifyTime(?string $modifyTime = null): self
    {
        // validation for constraint: string
        if (!is_null($modifyTime) && !is_string($modifyTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifyTime, true), gettype($modifyTime)), __LINE__);
        }
        $this->modifyTime = $modifyTime;
        
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
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
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
     * Get notVisible value
     * @return bool|null
     */
    public function getNotVisible(): ?bool
    {
        return $this->notVisible;
    }
    /**
     * Set notVisible value
     * @param bool $notVisible
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setNotVisible(?bool $notVisible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($notVisible) && !is_bool($notVisible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($notVisible, true), gettype($notVisible)), __LINE__);
        }
        $this->notVisible = $notVisible;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get passwordDate value
     * @return string|null
     */
    public function getPasswordDate(): ?string
    {
        return $this->passwordDate;
    }
    /**
     * Set passwordDate value
     * @param string $passwordDate
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setPasswordDate(?string $passwordDate = null): self
    {
        // validation for constraint: string
        if (!is_null($passwordDate) && !is_string($passwordDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passwordDate, true), gettype($passwordDate)), __LINE__);
        }
        $this->passwordDate = $passwordDate;
        
        return $this;
    }
    /**
     * Get passwordLevel value
     * @return int|null
     */
    public function getPasswordLevel(): ?int
    {
        return $this->passwordLevel;
    }
    /**
     * Set passwordLevel value
     * @param int $passwordLevel
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setPasswordLevel(?int $passwordLevel = null): self
    {
        // validation for constraint: int
        if (!is_null($passwordLevel) && !(is_int($passwordLevel) || ctype_digit($passwordLevel))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($passwordLevel, true), gettype($passwordLevel)), __LINE__);
        }
        $this->passwordLevel = $passwordLevel;
        
        return $this;
    }
    /**
     * Get queueId value
     * @return int|null
     */
    public function getQueueId(): ?int
    {
        return $this->queueId;
    }
    /**
     * Set queueId value
     * @param int $queueId
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setQueueId(?int $queueId = null): self
    {
        // validation for constraint: int
        if (!is_null($queueId) && !(is_int($queueId) || ctype_digit($queueId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($queueId, true), gettype($queueId)), __LINE__);
        }
        $this->queueId = $queueId;
        
        return $this;
    }
    /**
     * Get recoveryAnswer value
     * @return string|null
     */
    public function getRecoveryAnswer(): ?string
    {
        return $this->recoveryAnswer;
    }
    /**
     * Set recoveryAnswer value
     * @param string $recoveryAnswer
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setRecoveryAnswer(?string $recoveryAnswer = null): self
    {
        // validation for constraint: string
        if (!is_null($recoveryAnswer) && !is_string($recoveryAnswer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recoveryAnswer, true), gettype($recoveryAnswer)), __LINE__);
        }
        $this->recoveryAnswer = $recoveryAnswer;
        
        return $this;
    }
    /**
     * Get recoveryQuestion value
     * @return int|null
     */
    public function getRecoveryQuestion(): ?int
    {
        return $this->recoveryQuestion;
    }
    /**
     * Set recoveryQuestion value
     * @param int $recoveryQuestion
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setRecoveryQuestion(?int $recoveryQuestion = null): self
    {
        // validation for constraint: int
        if (!is_null($recoveryQuestion) && !(is_int($recoveryQuestion) || ctype_digit($recoveryQuestion))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($recoveryQuestion, true), gettype($recoveryQuestion)), __LINE__);
        }
        $this->recoveryQuestion = $recoveryQuestion;
        
        return $this;
    }
    /**
     * Get userEmail value
     * @return string|null
     */
    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }
    /**
     * Set userEmail value
     * @param string $userEmail
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setUserEmail(?string $userEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($userEmail) && !is_string($userEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userEmail, true), gettype($userEmail)), __LINE__);
        }
        $this->userEmail = $userEmail;
        
        return $this;
    }
    /**
     * Get userForename value
     * @return string|null
     */
    public function getUserForename(): ?string
    {
        return $this->userForename;
    }
    /**
     * Set userForename value
     * @param string $userForename
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setUserForename(?string $userForename = null): self
    {
        // validation for constraint: string
        if (!is_null($userForename) && !is_string($userForename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userForename, true), gettype($userForename)), __LINE__);
        }
        $this->userForename = $userForename;
        
        return $this;
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get userLogin value
     * @return string|null
     */
    public function getUserLogin(): ?string
    {
        return $this->userLogin;
    }
    /**
     * Set userLogin value
     * @param string $userLogin
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setUserLogin(?string $userLogin = null): self
    {
        // validation for constraint: string
        if (!is_null($userLogin) && !is_string($userLogin)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userLogin, true), gettype($userLogin)), __LINE__);
        }
        $this->userLogin = $userLogin;
        
        return $this;
    }
    /**
     * Get userName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }
    /**
     * Set userName value
     * @param string $userName
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->userName = $userName;
        
        return $this;
    }
    /**
     * Get wsAllowed value
     * @return bool|null
     */
    public function getWsAllowed(): ?bool
    {
        return $this->wsAllowed;
    }
    /**
     * Set wsAllowed value
     * @param bool $wsAllowed
     * @return \Pggns\MidocoApi\Order\StructType\UserDTO
     */
    public function setWsAllowed(?bool $wsAllowed = null): self
    {
        // validation for constraint: boolean
        if (!is_null($wsAllowed) && !is_bool($wsAllowed)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($wsAllowed, true), gettype($wsAllowed)), __LINE__);
        }
        $this->wsAllowed = $wsAllowed;
        
        return $this;
    }
}
