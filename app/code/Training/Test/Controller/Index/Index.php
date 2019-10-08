<?php
declare(strict_types=1);

namespace Training\Test\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\LayoutFactory;
use Magento\Framework\App\Action\Context;
use Training\Test\Block\Test;

class Index extends Action
{
    /**
     * @var LayoutFactory
     */
    private $layoutFactory;

    public function __construct(Context $context, LayoutFactory $layoutFactory)
    {
        parent::__construct($context);
        $this->layoutFactory = $layoutFactory;
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
        $layout = $this->layoutFactory->create();
        $block = $layout->createBlock(Test::class);
        $block->setTemplate('Training_Test::test.phtml');

        return $this->resultFactory->create(ResultFactory::TYPE_RAW)->setContents($block->toHtml());
    }
}