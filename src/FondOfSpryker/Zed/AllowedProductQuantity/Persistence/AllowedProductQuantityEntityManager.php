<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Persistence;

use Generated\Shared\Transfer\AllowedProductQuantityTransfer;
use Spryker\Zed\Kernel\Persistence\AbstractEntityManager;

/**
 * @method \FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityPersistenceFactory getFactory()
 */
class AllowedProductQuantityEntityManager extends AbstractEntityManager implements AllowedProductQuantityEntityManagerInterface
{
    /**
     * {@inheritDoc}
     *
     * @param \Generated\Shared\Transfer\AllowedProductQuantityTransfer $allowedProductQuantityTransfer
     *
     * @return \Generated\Shared\Transfer\AllowedProductQuantityTransfer
     */
    public function persist(AllowedProductQuantityTransfer $allowedProductQuantityTransfer): AllowedProductQuantityTransfer
    {
        $fosAllowedProductQuantityQuery = $this->getFactory()->createAllowedProductQuantityQuery();

        $fosAllowedProductQuantity = $fosAllowedProductQuantityQuery
            ->filterByIdAllowedProductQuantity($allowedProductQuantityTransfer->getIdAllowedProductQuantity())
            ->findOneOrCreate();

        $fosAllowedProductQuantity = $this->getFactory()
            ->createPropelAllowedProductQuantityMapper()
            ->mapTransferToEntity($allowedProductQuantityTransfer, $fosAllowedProductQuantity);

        $fosAllowedProductQuantity->save();

        $allowedProductQuantityTransfer->setIdAllowedProductQuantity(
            $fosAllowedProductQuantity->getIdAllowedProductQuantity()
        );

        return $allowedProductQuantityTransfer;
    }

    /**
     * {@inheritDoc}
     *
     * @param int $idAllowedProductQuantity
     *
     * @return void
     */
    public function deleteById(int $idAllowedProductQuantity): void
    {
        $this->getFactory()
            ->createAllowedProductQuantityQuery()
            ->filterByIdAllowedProductQuantity($idAllowedProductQuantity)
            ->delete();
    }
}
