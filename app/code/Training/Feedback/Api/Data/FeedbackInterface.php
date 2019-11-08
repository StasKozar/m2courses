<?php
declare(strict_types=1);

namespace Training\Feedback\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;
use Training\Feedback\Api\Data\FeedbackExtensionInterface;

interface FeedbackInterface extends ExtensibleDataInterface
{
    /**#@+*/
    const FEEDBACK_ID = 'feedback_id';
    const AUTHOR_NAME = 'author_name';
    const AUTHOR_EMAIL = 'author_email';
    const MESSAGE = 'message';
    const CREATION_TIME = 'creation_time';
    const UPDATE_TIME = 'update_time';
    const IS_ACTIVE = 'is_active';
    /**#@-*/

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Get author name
     *
     * @return string
     */
    public function getAuthorName(): string;

    /**
     * Get author email
     *
     * @return string|null
     */
    public function getAuthorEmail(): ?string;

    /**
     * Get message
     *
     * @return string|null
     */
    public function getMessage(): ?string;

    /**
     * Get creation time
     *
     * @return string|null
     */
    public function getCreationTime(): ?string;

    /**
     * Get update time
     *
     * @return string|null
     */
    public function getUpdateTime(): ?string;

    /**
     * Is active
     *
     * @return bool
     */
    public function isActive(): bool;

    /**
     * Set ID
     *
     * @param int $id
     * @return FeedbackInterface
     */
    public function setId($id): FeedbackInterface;

    /**
     * Set author name
     *
     * @param string $authorName
     * @return FeedbackInterface
     */
    public function setAuthorName(string $authorName): FeedbackInterface;

    /**
     * Set author email
     *
     * @param string $authorEmail
     * @return FeedbackInterface
     */
    public function setAuthorEmail(string $authorEmail): FeedbackInterface;

    /**
     * Set message
     *
     * @param string $message
     * @return FeedbackInterface
     */
    public function setMessage(string $message): FeedbackInterface;

    /**
     * Set creation time
     *
     * @param string $creationTime
     * @return FeedbackInterface
     */
    public function setCreationTime(string $creationTime): FeedbackInterface;

    /**
     * Set update time
     *
     * @param string $updateTime
     * @return FeedbackInterface
     */
    public function setUpdateTime(string  $updateTime): FeedbackInterface;

    /**
     * Set is active
     *
     * @param bool|int $isActive
     * @return FeedbackInterface
     */
    public function setIsActive($isActive): FeedbackInterface;

    /**
     * Retrieve existing extension attributes object.
     *
     * @return FeedbackExtensionInterface|null
     */
    public function getExtensionAttributes();
    /**
     * Set an extension attributes object.
     *
     * @param FeedbackExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(FeedbackExtensionInterface $extensionAttributes);
}
