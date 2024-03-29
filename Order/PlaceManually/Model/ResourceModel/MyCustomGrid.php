<?php
namespace Order\PlaceManually\Model\ResourceModel;


class MyCustomGrid extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        $resourcePrefix = null
    )
    {
        parent::__construct($context,$resourcePrefix);
    }
    
    protected function _construct()
    {
        $this->_init('sales_order', 'entity_id');
    }
    
}