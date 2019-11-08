<?php
declare(strict_types=1);

namespace Training\Feedback\Model;

use Magento\Framework\Model\AbstractExtensibleModel;
use Training\Feedback\Api\Data\FeedbackExtensionInterface;
use Training\Feedback\Api\Data\FeedbackInterface;

class Feedback extends AbstractExtensibleModel implements FeedbackInterface
{
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;

    protected $_eventPrefix = 'training_feedback';
    protected $_eventObject = 'feedback';

    protected function _construct()
    {
        $this->_init(\Training\Feedback\Model\ResourceModel\Feedback::class);
    }

    /**
     * Retrieve post id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->getData(self::FEEDBACK_ID);
    }
    /**
     * Get author name
     *
     * @return string
     */
    public function getAuthorName(): string
    {
        return (string)$this->getData(self::AUTHOR_NAME);
    }
    /**
     * Get author email
     *
     * @return string|null
     */
    public function getAuthorEmail(): ?string
    {
        return $this->getData(self::AUTHOR_EMAIL);
    }
    /**
     * Get message
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->getData(self::MESSAGE);
    }
    /**
     * Retrieve post creation time
     *
     * @return string|null
     */
    public function getCreationTime(): ?string
    {
        return $this->getData(self::CREATION_TIME);
    }

    /**
     * Retrieve post update time
     *
     * @return string|null
     */
    public function getUpdateTime(): ?string
    {
        return $this->getData(self::UPDATE_TIME);
    }
    /**
     * Is active
     *
     * @return bool
     */
    public function isActive(): bool
    {
        return (bool)$this->getData(self::IS_ACTIVE);
    }
    /**
     * Set ID
     *
     * @param int $id
     * @return FeedbackInterface
     */
    public function setId($id): FeedbackInterface
    {
        return $this->setData(self::FEEDBACK_ID, $id);
    }
    /**
     * Set author name
     *
     * @param string $authorName
     * @return \Training\Feedback\Api\Data\FeedbackInterface
     */
    public function setAuthorName(string $authorName): FeedbackInterface
    {
        return $this->setData(self::AUTHOR_NAME, $authorName);
    }
    /**
     * Set author email
     *
     * @param string $authorEmail
     * @return \Training\Feedback\Api\Data\FeedbackInterface
     */
    public function setAuthorEmail(string $authorEmail): FeedbackInterface
    {
        return $this->setData(self::AUTHOR_EMAIL, $authorEmail);
    }
    /**
     * Set message
     *
     * @param string $message
     * @return \Training\Feedback\Api\Data\FeedbackInterface
     */
    public function setMessage(string $message): FeedbackInterface
    {
        return $this->setData(self::MESSAGE, $message);
    }
    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return \Training\Feedback\Api\Data\FeedbackInterface
     */
    public function setCreationTime(string $creationTime): FeedbackInterface
    {
        return $this->setData(self::CREATION_TIME, $creationTime);
    }
    /**
     * Set update time
     *
     * @param string $updateTime
     * @return \Training\Feedback\Api\Data\FeedbackInterface
     */
    public function setUpdateTime(string $updateTime): FeedbackInterface
    {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }
    /**
     * Set is active
     *
     * @param bool|int $isActive
     * @return \Training\Feedback\Api\Data\FeedbackInterface
     */
    public function setIsActive($isActive): FeedbackInterface
    {
        return $this->setData(self::IS_ACTIVE, $isActive);
    }

    /**
     * Retrieve existing extension attributes object.
     *
     * @return FeedbackExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     *
     * @param FeedbackExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(FeedbackExtensionInterface $extensionAttributes)
    {
        return $this->_setExtensionAttributes($extensionAttributes);
    }
}
