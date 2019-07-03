<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\AllowedProductQuantityTransfer;
use Orm\Zed\AllowedProductQuantity\Persistence\FosAllowedProductQuantity;

class AllowedProductQuantityMapper implements AllowedProductQuantityMapperInterface
{
    /**
     * @param \Generated\Shared\Transfer\AllowedProductQuantityTransfer $allowedProductQuantityTransfer
     * @param \Orm\Zed\AllowedProductQuantity\Persistence\FosAllowedProductQuantity $fosAllowedProductQuantity
     *
     * @return \Orm\Zed\AllowedProductQuantity\Persistence\FosAllowedProductQuantity
     */
    public function mapTransferToEntity(
        AllowedProductQuantityTransfer $allowedProductQuantityTransfer,
        FosAllowedProductQuantity $fosAllowedProductQuantity
    ): FosAllowedProductQuantity {
        $fosAllowedProductQuantity->fromArray($allowedProductQuantityTransfer->toArray(false));

        return $fosAllowedProductQuantity->setFkProductAbstract(
            $allowedProductQuantityTransfer->getIdProductAbstract()
        );
    }

    /**
     * @param \Orm\Zed\AllowedProductQuantity\Persistence\FosAllowedProductQuantity $fosAllowedProductQuantity
     * @param \Generated\Shared\Transfer\AllowedProductQuantityTransfer $allowedProductQuantityTransfer
     *
     * @return \Generated\Shared\Transfer\AllowedProductQuantityTransfer
     */
    public function mapEntityToTransfer(
        FosAllowedProductQuantity $fosAllowedProductQuantity,
        AllowedProductQuantityTransfer $allowedProductQuantityTransfer
    ): AllowedProductQuantityTransfer {
        $allowedProductQuantityTransfer->fromArray($fosAllowedProductQuantity->toArray(), true);

        $allowedProductQuantityTransfer->setIdProductAbstract(
            $fosAllowedProductQuantity->getFkProductAbstract()
        );

        return $allowedProductQuantityTransfer;
    }
}
