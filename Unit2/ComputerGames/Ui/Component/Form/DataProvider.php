<?php
/**
 * Copyright © Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit2\ComputerGames\Ui\Component\Form;

use Magento\Ui\DataProvider\AbstractDataProvider;
use Magento\Framework\View\Element\UiComponent\DataProvider\FilterPool;
use Magento\Ui\DataProvider\Modifier\ModifierInterface;
use Unit2\ComputerGames\Model\ResourceModel\Game\CollectionFactory as GamesCollectionFactory;
use Magento\Ui\DataProvider\Modifier\PoolInterface;

/**
 * Class DataProvider
 * DataProvider extends AbstractDataProvider
 */
class DataProvider extends AbstractDataProvider
{
    /**
     * @var Collection
     */
    protected $collection;

    /**
     * @var Config
     */
    protected Config $eavConfig;

    /**
     * @var FilterPool
     */
    protected FilterPool $filterPool;

    /**
     * @var array
     */
    protected array $loadedData;

    /**
     * @var PoolInterface
     */
    protected PoolInterface $pool;

    /**
     * DataProvider constructor.
     *
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param GamesCollectionFactory $collectionFactory
     * @param FilterPool $filterPool
     * @param PoolInterface $pool
     * @param array $meta
     * @param array $data
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        GamesCollectionFactory $collectionFactory,
        FilterPool $filterPool,
        PoolInterface $pool,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection = $collectionFactory->create();
        $this->pool = $pool;
        $this->filterPool = $filterPool;
        $this->meta = $this->prepareMeta($this->meta);
    }

    /**
     * PrepareMeta
     *
     * @param mixed $meta
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function prepareMeta(array $meta)
    {
        $meta = parent::getMeta();
        /** @var ModifierInterface $modifier */
        foreach ($this->pool->getModifiersInstances() as $modifier) {
            $meta = $modifier->modifyMeta($meta);
        }
        return $meta;
    }

    /**
     * GetData
     *
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getData()
    {
        if (!$this->loadedData) {
            $items = $this->collection->getItems();

            foreach ($this->pool->getModifiersInstances() as $modifier) {
                $this->loadedData = $modifier->modifyData($items);
            }
        }
        return $this->loadedData;
    }
}
