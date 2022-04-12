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
    public function persistAllowedProductQuantity(AllowedProductQuantityTransfer $allowedProductQuantityTransfer): AllowedProductQuantityTransfer
    {
        $query = $this->getFactory()
            ->createAllowedProductQuantityQuery()
            ->clear();

        $entity = $query
            ->filterByIdAllowedProductQuantity($allowedProductQuantityTransfer->getIdAllowedProductQuantity())
            ->findOneOrCreate()
            ->fromArray($allowedProductQuantityTransfer->modifiedToArray())
            ->setFkProductAbstract($allowedProductQuantityTransfer->getIdProductAbstract());

        $entity->save();

        return $this->getFactory()
            ->createAllowedProductQuantityMapper()
            ->mapEntityToTransfer($entity);
    }

    /**
     * {@inheritDoc}
     *
     * @param int $idAllowedProductQuantity
     *
     * @return void
     */
    public function deleteAllowedProductQuantityById(int $idAllowedProductQuantity): void
    {
        $entity = $this->getFactory()
            ->createAllowedProductQuantityQuery()
            ->clear()
            ->filterByIdAllowedProductQuantity($idAllowedProductQuantity)
            ->findOne();

        if ($entity !== null) {
            $entity->delete();
        }
    }
}
