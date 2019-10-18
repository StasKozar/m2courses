<?php
declare(strict_types=1);

namespace Training\Test\Block\Product;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Framework\View\Element\Template;

class Stock extends Template
{
    /**
     * @var \Magento\Framework\Registry
     */
    private $coreRegistry;

    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ) {
        $this->coreRegistry = $registry;
        parent::__construct($context, $data);
    }

    /**
     * Retrieve product id.
     *
     * @return int
     */
    public function getProductId(): int
    {
        if (!$this->hasData('product')) {
            $this->setData('product', $this->coreRegistry->registry('product'));
        }
        /** @var ProductInterface $product */
        $product = $this->getData('product');

        return (int)$product->getId();
    }
}
