<?php
declare(strict_types=1);

namespace Training\Test\Controller\Product;

use Magento\Framework\App\Action\Context;
use Magento\Customer\Model\Session;
use Magento\Framework\View\Result\PageFactory;

class View extends \Magento\Catalog\Controller\Product\View
{
    private $session;

    public function __construct(
        Context $context,
        \Magento\Catalog\Helper\Product\View $viewHelper,
        \Magento\Framework\Controller\Result\ForwardFactory $resultForwardFactory,
        PageFactory $resultPageFactory,
        Session $session
    ) {
        $this->session = $session;
        parent::__construct($context, $viewHelper, $resultForwardFactory, $resultPageFactory);
    }

    public function execute()
    {
        if (!$this->session->isLoggedIn()) {
            return $this->resultRedirectFactory->create()->setPath('customer/account/login');
        }
        return parent::execute();
    }
}
