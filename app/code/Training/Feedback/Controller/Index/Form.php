<?php
declare(strict_types=1);

namespace Training\Feedback\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Form extends Action
{
    private $pageResultFactory;

    public function __construct(Context $context, PageFactory $pageFactory)
    {
        parent::__construct($context);
        $this->pageResultFactory = $pageFactory;
    }

    public function execute()
    {
        $resultPage = $this->pageResultFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('Feedback'));

        return $resultPage;
    }
}
