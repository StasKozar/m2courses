<?php
/**
 * Created by PhpStorm.
 * User: bucya
 * Date: 10/24/19
 * Time: 7:27 PM
 */

namespace Training\Feedback\Api\Data;

use \Magento\Framework\Api\SearchResultsInterface;

interface FeedbackSearchResultsInterface extends SearchResultsInterface
{
    /**
     * Get Feedback list.
     *
     * @return \Training\Feedback\Api\Data\FeedbackInterface[]
     */
    public function getItems(): array;

    /**
     * Set Feedback list.
     *
     * @param \Training\Feedback\Api\Data\FeedbackInterface[] $items
     * @return $this
     */
    public function setItems(array $items): FeedbackSearchResultsInterface;
}
