<?php
declare(strict_types=1);

namespace Training\Test\Controller\Block;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\LayoutFactory;
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

        return $this->resultFactory->create(ResultFactory::TYPE_RAW)->setContents($block->toHtml());
    }
}