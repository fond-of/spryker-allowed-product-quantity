<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Persistence\Propel\Mapper;

use Generated\Shared\Transfer\AllowedProductQuantityTransfer;
use Orm\Zed\AllowedProductQuantity\Persistence\FosAllowedProductQuantity;

interface AllowedProductQuantityMapperInterface
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
    ): FosAllowedProductQuantity;

    /**
     * @param \Orm\Zed\AllowedProductQuantity\Persistence\FosAllowedProductQuantity $fosAllowedProductQuantity
     * @param \Generated\Shared\Transfer\AllowedProductQuantityTransfer $allowedProductQuantityTransfer
     *
     * @return \Generated\Shared\Transfer\AllowedProductQuantityTransfer
     */
    public function mapEntityToTransfer(
        FosAllowedProductQuantity $fosAllowedProductQuantity,
        AllowedProductQuantityTransfer $allowedProductQuantityTransfer
    ): AllowedProductQuantityTransfer;
}
