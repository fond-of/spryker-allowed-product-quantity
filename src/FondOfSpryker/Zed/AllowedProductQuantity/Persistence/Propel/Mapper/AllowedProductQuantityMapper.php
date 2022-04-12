<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Persistence\Propel\Mapper;

use FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityRepository;
use Generated\Shared\Transfer\AllowedProductQuantityTransfer;
use Orm\Zed\AllowedProductQuantity\Persistence\FosAllowedProductQuantity;
use Propel\Runtime\Collection\ObjectCollection;

class AllowedProductQuantityMapper implements AllowedProductQuantityMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\AllowedProductQuantityTransfer $transfer
     *
     * @return \Orm\Zed\AllowedProductQuantity\Persistence\FosAllowedProductQuantity
     */
    public function mapTransferToEntity(AllowedProductQuantityTransfer $transfer): FosAllowedProductQuantity
    {
        return (new FosAllowedProductQuantity())
            ->fromArray($transfer->toArray(false))
            ->setFkProductAbstract($transfer->getIdProductAbstract());
    }

    /**
     * @param \Orm\Zed\AllowedProductQuantity\Persistence\FosAllowedProductQuantity $entity
     *
     * @return \Generated\Shared\Transfer\AllowedProductQuantityTransfer
     */
    public function mapEntityToTransfer(FosAllowedProductQuantity $entity): AllowedProductQuantityTransfer
    {
        return (new AllowedProductQuantityTransfer())
            ->fromArray($entity->toArray(), true)
            ->setIdProductAbstract($entity->getFkProductAbstract());
    }

    /**
     * @param \Propel\Runtime\Collection\ObjectCollection $entityCollection
     *
     * @return array<string, \Generated\Shared\Transfer\AllowedProductQuantityTransfer>
     */
    public function mapEntityCollectionToGroupedTransfers(ObjectCollection $entityCollection): array
    {
        $groupedTransfers = [];

        foreach ($entityCollection as $entity) {
            $sku = $entity->getVirtualColumn(AllowedProductQuantityRepository::VIRTUAL_COLUMN_SKU);

            if (isset($groupedTransfers[$sku])) {
                continue;
            }

            $groupedTransfers[$sku] = $this->mapEntityToTransfer($entity);
        }

        return $groupedTransfers;
    }
}
