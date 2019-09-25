<?php
declare(strict_types=1);

namespace Training\Test\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\RawFactory;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var RawFactory
     */
    private $resultRawFactory;

    public function __construct(Context $context, RawFactory $resultRawFactory)
    {
        $this->resultRawFactory = $resultRawFactory;
        parent::__construct($context);
    }
    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        $resultRaw = $this->resultRawFactory->create();
        $resultRaw->setContents('simple text');

        return $resultRaw;
    }
}
