<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\AllowedProductQuantityTransfer;
use Orm\Zed\AllowedProductQuantity\Persistence\FosAllowedProductQuantity;
use Propel\Runtime\Collection\ObjectCollection;

interface AllowedProductQuantityMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\AllowedProductQuantityTransfer $transfer
     *
     * @return \Orm\Zed\AllowedProductQuantity\Persistence\FosAllowedProductQuantity
     */
    public function mapTransferToEntity(AllowedProductQuantityTransfer $transfer): FosAllowedProductQuantity;

    /**
     * @param \Orm\Zed\AllowedProductQuantity\Persistence\FosAllowedProductQuantity $entity
     *
     * @return \Generated\Shared\Transfer\AllowedProductQuantityTransfer
     */
    public function mapEntityToTransfer(FosAllowedProductQuantity $entity): AllowedProductQuantityTransfer;

    /**
     * @param \Propel\Runtime\Collection\ObjectCollection $entityCollection
     *
     * @return array<string, \Generated\Shared\Transfer\AllowedProductQuantityTransfer>
     */
    public function mapEntityCollectionToGroupedTransfers(ObjectCollection $entityCollection): array;
}
