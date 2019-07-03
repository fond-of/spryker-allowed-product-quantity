<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Persistence;

use Generated\Shared\Transfer\AllowedProductQuantityTransfer;

interface AllowedProductQuantityRepositoryInterface
{
    /**
     * @param int $idProductAbstract
     *
     * @return \Generated\Shared\Transfer\AllowedProductQuantityTransfer|null
     */
    public function findByIdProductAbstract(int $idProductAbstract): ?AllowedProductQuantityTransfer;
}
