<?php


namespace Training\Test\Plugin\Block\Product\View;


use Magento\Catalog\Block\Product\View\Description;

class DescriptionPlugin
{
    public function beforeToHtml(Description $subject)
    {
        if ($subject->getNameInLayout() === 'product.info.sku') {
            $subject->setTemplate('Training_Test::description.phtml');
        }

        return $subject;
    }
}