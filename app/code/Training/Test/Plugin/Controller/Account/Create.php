<?php
declare(strict_types=1);

namespace Training\Test\Plugin\Controller\Account;

use Magento\Customer\Controller\Account\Create as CustomerCreate;

class Create
{
    /**
     * @var \Magento\Framework\App\Response\RedirectInterface
     */
    private $redirect;

    /**
     * @param \Magento\Framework\App\Response\RedirectInterface $redirect
     */
    public function __construct(
        \Magento\Framework\App\Response\RedirectInterface $redirect
    ) {
        $this->redirect = $redirect;
    }

    public function beforeExecute(CustomerCreate $subject)
    {
        $this->redirect->redirect($subject->getResponse(), 'customer/account/login');
    }
}
