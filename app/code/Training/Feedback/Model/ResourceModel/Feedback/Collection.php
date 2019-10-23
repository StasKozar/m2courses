<?php
declare(strict_types=1);

namespace Training\Feedback\Model\ResourceModel\Feedback;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Training\Feedback\Model\Feedback;
use Training\Feedback\Model\ResourceModel\Feedback as FeedbackResource;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(
            Feedback::class,
            FeedbackResource::class
        );
    }
}
