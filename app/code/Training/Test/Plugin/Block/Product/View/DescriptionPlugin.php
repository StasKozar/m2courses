<?php


namespace Training\Test\Plugin\Block\Product\View;


use Magento\Catalog\Block\Product\View\Description;

class DescriptionPlugin
{
    public function beforeToHtml(Description $subject)
    {
        return $subject->setTemplate('Training_Test::description.phtml');
    }
}