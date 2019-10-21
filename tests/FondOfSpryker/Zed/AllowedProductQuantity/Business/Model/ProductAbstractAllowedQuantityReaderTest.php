<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Business\Model;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityRepositoryInterface;
use Generated\Shared\Transfer\AllowedProductQuantityResponseTransfer;
use Generated\Shared\Transfer\AllowedProductQuantityTransfer;
use Generated\Shared\Transfer\ProductAbstractTransfer;

class ProductAbstractAllowedQuantityReaderTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\AllowedProductQuantity\Business\Model\ProductAbstractAllowedQuantityReader
     */
    protected $productAbstractAllowedQuantityReader;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityRepositoryInterface
     */
    protected $allowedProductQuantityRepositoryInterface;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\ProductAbstractTransfer
     */
    protected $productAbstractTransferMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\AllowedProductQuantityTransfer
     */
    private $allowedProductQuantityTransferMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->allowedProductQuantityRepositoryInterface = $this->getMockBuilder(AllowedProductQuantityRepositoryInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productAbstractTransferMock = $this->getMockBuilder(ProductAbstractTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->allowedProductQuantityTransferMock = $this->getMockBuilder(AllowedProductQuantityTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productAbstractAllowedQuantityReader = new ProductAbstractAllowedQuantityReader($this->allowedProductQuantityRepositoryInterface);
    }

    /**
     * @return void
     */
    public function testFindByIdProductAbstract(): void
    {
        $this->productAbstractTransferMock->expects($this->atLeastOnce())
            ->method('requireIdProductAbstract')
            ->willReturn($this->productAbstractTransferMock);

        $this->productAbstractTransferMock->expects($this->atLeastOnce())
            ->method('getIdProductAbstract')
            ->willReturn(1);

        $this->allowedProductQuantityRepositoryInterface->expects($this->atLeastOnce())
            ->method('findByIdProductAbstract')
            ->willReturn($this->allowedProductQuantityTransferMock);

        $this->assertInstanceOf(AllowedProductQuantityResponseTransfer::class, $this->productAbstractAllowedQuantityReader->findByIdProductAbstract($this->productAbstractTransferMock));
    }

    /**
     * @return void
     */
    public function testFindByIdProductAbstractAllowedProductQuantityTransferNull(): void
    {
        $this->productAbstractTransferMock->expects($this->atLeastOnce())
            ->method('requireIdProductAbstract')
            ->willReturn($this->productAbstractTransferMock);

        $this->productAbstractTransferMock->expects($this->atLeastOnce())
            ->method('getIdProductAbstract')
            ->willReturn(2);

        $this->allowedProductQuantityRepositoryInterface->expects($this->atLeastOnce())
            ->method('findByIdProductAbstract')
            ->willReturn(null);

        $this->assertInstanceOf(AllowedProductQuantityResponseTransfer::class, $this->productAbstractAllowedQuantityReader->findByIdProductAbstract($this->productAbstractTransferMock));
    }
}
