<?php
namespace Order\PlaceManually\Model\ResourceModel\MyCustomGrid\Grid;

use Magento\Framework\Api\Search\SearchResultInterface;
use Magento\Framework\Search\AggregationInterface;
// your main table collection
use Order\PlaceManually\Model\ResourceModel\MyCustomGrid\Collection as MyCustomGridCollection;
use Magento\Framework\Data\Collection\EntityFactoryInterface;
use Psr\Log\LoggerInterface;
use Magento\Framework\Data\Collection\Db\FetchStrategyInterface;
use Magento\Framework\Event\ManagerInterface;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Collection
 * Collection for displaying grid
 */
class Collection extends MyCustomGridCollection implements SearchResultInterface
{
    public function __construct(
        EntityFactoryInterface $entityFactory,
        LoggerInterface $logger,
        FetchStrategyInterface $fetchStrategy,
        ManagerInterface $eventManager,
        StoreManagerInterface $storeManager,
        $mainTable,
        $eventPrefix,
        $eventObject,
        $resourceModel,
        $model = 'Magento\Framework\View\Element\UiComponent\DataProvider\Document',
        $connection = null,
        AbstractDb $resource = null
    ) {
        parent::__construct(
            $entityFactory,
            $logger,
            $fetchStrategy,
            $eventManager,
            $storeManager,
            $connection,
            $resource
        );
        $this->_eventPrefix = $eventPrefix;
        $this->_eventObject = $eventObject;
        $this->_init($model, $resourceModel);
        $this->setMainTable($mainTable);
    }


    public function getAggregations()
    {
        return $this->aggregations;
    }


    public function setAggregations($aggregations)
    {
        $this->aggregations = $aggregations;
    }

   
    public function getSearchCriteria()
    {
        return null;
    }

    
    public function setSearchCriteria(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null
    ) {
        return $this;
    }

   
    public function getTotalCount()
    {
        return $this->getSize();
    }

    
    public function setTotalCount($totalCount)
    {
        return $this;
    }

   
    public function setItems(array $items = null)
    {
        return $this;
    }
}