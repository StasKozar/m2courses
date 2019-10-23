<?php
declare(strict_types=1);

namespace Training\Feedback\Controller\Index;

use Magento\Framework\App\Action\Action;

class Index extends Action
{
    private $pageResultFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageResultFactory
    ) {
        $this->pageResultFactory = $pageResultFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->pageResultFactory->create();
        return $result;
    }
}
