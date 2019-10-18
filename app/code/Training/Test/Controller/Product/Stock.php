<?php
declare(strict_types=1);

namespace Training\Test\Controller\Product;

use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\JsonFactory;

class Stock extends Action
{
    /**
     * @var ProductRepositoryInterface
     */
    private $productRepository;

    /**
     * @var JsonFactory
     */
    private $resultJsonFactory;

    /**
     * @param Context $context
     * @param ProductRepositoryInterface $productRepository
     * @param JsonFactory $jsonFactory
     */
    public function __construct(
        Context $context,
        ProductRepositoryInterface $productRepository,
        JsonFactory $jsonFactory
    ) {
        parent::__construct($context);
        $this->productRepository = $productRepository;
        $this->resultJsonFactory = $jsonFactory;
    }

    /**
     * @inheritdoc
     */
    public function execute()
    {
        if (!$this->getRequest()->getPostValue()) {
            return;
        }
        $productId = $this->getRequest()->getPost('id');
        $product = $this->productRepository->getById($productId);
        $productQty = $product->getQuantityAndStockStatus()['qty'];

        $resultJson = $this->resultJsonFactory->create();

        return $resultJson->setData(['qty' => $productQty]);
    }
}
