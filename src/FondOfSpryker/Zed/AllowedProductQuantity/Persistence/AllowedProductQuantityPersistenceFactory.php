<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Persistence;

use FondOfSpryker\Zed\AllowedProductQuantity\Persistence\Propel\Mapper\AllowedProductQuantityMapper;
use FondOfSpryker\Zed\AllowedProductQuantity\Persistence\Propel\Mapper\AllowedProductQuantityMapperInterface;
use Orm\Zed\AllowedProductQuantity\Persistence\FosAllowedProductQuantityQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityEntityManagerInterface getEntityManager()
 * @method \FondOfSpryker\Zed\AllowedProductQuantity\AllowedProductQuantityConfig getConfig()
 * @method \FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityRepositoryInterface getRepository()
 */
class AllowedProductQuantityPersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\AllowedProductQuantity\Persistence\FosAllowedProductQuantityQuery
     */
    public function createAllowedProductQuantityQuery(): FosAllowedProductQuantityQuery
    {
        return FosAllowedProductQuantityQuery::create();
    }

    /**
     * @return \FondOfSpryker\Zed\AllowedProductQuantity\Persistence\Propel\Mapper\AllowedProductQuantityMapperInterface
     */
    public function createAllowedProductQuantityMapper(): AllowedProductQuantityMapperInterface
    {
        return new AllowedProductQuantityMapper();
    }
}
