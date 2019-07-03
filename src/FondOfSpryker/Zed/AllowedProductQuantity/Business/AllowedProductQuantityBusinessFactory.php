<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Business;

use FondOfSpryker\Zed\AllowedProductQuantity\Business\Model\ProductAbstractAllowedQuantityReader;
use FondOfSpryker\Zed\AllowedProductQuantity\Business\Model\ProductAbstractAllowedQuantityReaderInterface;
use FondOfSpryker\Zed\AllowedProductQuantity\Business\Model\ProductAbstractAllowedQuantityWriter;
use FondOfSpryker\Zed\AllowedProductQuantity\Business\Model\ProductAbstractAllowedQuantityWriterInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \FondOfSpryker\Zed\AllowedProductQuantity\AllowedProductQuantityConfig getConfig()
 * @method \FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityEntityManagerInterface getEntityManager()
 * @method \FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityRepositoryInterface getRepository()
 */
class AllowedProductQuantityBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\AllowedProductQuantity\Business\Model\ProductAbstractAllowedQuantityWriterInterface
     */
    public function createProductAbstractAllowedQuantityWriter(): ProductAbstractAllowedQuantityWriterInterface
    {
        return new ProductAbstractAllowedQuantityWriter($this->getEntityManager());
    }

    /**
     * @return \FondOfSpryker\Zed\AllowedProductQuantity\Business\Model\ProductAbstractAllowedQuantityReaderInterface
     */
    public function createProductAbstractAllowedQuantityReader(): ProductAbstractAllowedQuantityReaderInterface
    {
        return new ProductAbstractAllowedQuantityReader($this->getRepository());
    }
}
