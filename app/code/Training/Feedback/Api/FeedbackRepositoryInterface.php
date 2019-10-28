<?php
declare(strict_types=1);

namespace Training\Feedback\Api;

use Magento\Framework\Api\SearchCriteriaInterface;
use Training\Feedback\Api\Data\FeedbackInterface;
use Training\Feedback\Api\Data\FeedbackSearchResultsInterface;

interface FeedbackRepositoryInterface
{
    /**
     * Save feedback.
     *
     * @param FeedbackInterface $feedback
     * @return FeedbackInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(FeedbackInterface $feedback): FeedbackInterface;

    /**
     * Retrieve feedback.
     *
     * @param int $feedbackId
     * @return FeedbackInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById(int $feedbackId): FeedbackInterface;

    /**
     * Retrieve feedbacks matching the specified criteria.
     *
     * @param SearchCriteriaInterface $searchCriteria
     * @return FeedbackSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(SearchCriteriaInterface $searchCriteria);

    /**
     * Delete feedback.
     *
     * @param FeedbackInterface $feedback
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(FeedbackInterface $feedback): bool;
    /**
     * Delete feedback by ID.
     *
     * @param int $feedbackId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($feedbackId): bool;
}
