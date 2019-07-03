<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Persistence;

use Generated\Shared\Transfer\AllowedProductQuantityTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractRepository;

/**
 * @method \FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityPersistenceFactory getFactory()
 */
class AllowedProductQuantityRepository extends AbstractRepository implements AllowedProductQuantityRepositoryInterface
{
    /**
     * @param int $idProductAbstract
     *
     * @throws
     *
     * @return \Generated\Shared\Transfer\AllowedProductQuantityTransfer|null
     */
    public function findByIdProductAbstract(int $idProductAbstract): ?AllowedProductQuantityTransfer
    {
        $fosAllowedProductQuantityQuery = $this->getFactory()->createAllowedProductQuantityQuery();

        $fosAllowedProductQuantity = $fosAllowedProductQuantityQuery->filterByFkProductAbstract($idProductAbstract)
            ->findOne();

        if ($fosAllowedProductQuantity === null) {
            return null;
        }

        return $this->getFactory()->createPropelAllowedProductQuantityMapper()
            ->mapEntityToTransfer($fosAllowedProductQuantity, new AllowedProductQuantityTransfer());
    }
}
