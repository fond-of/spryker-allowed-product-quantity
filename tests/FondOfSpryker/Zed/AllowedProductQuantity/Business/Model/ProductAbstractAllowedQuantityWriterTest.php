<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Business\Model;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityEntityManagerInterface;
use Generated\Shared\Transfer\AllowedProductQuantityTransfer;
use Generated\Shared\Transfer\ProductAbstractTransfer;

class ProductAbstractAllowedQuantityWriterTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\AllowedProductQuantity\Business\Model\ProductAbstractAllowedQuantityWriter
     */
    protected $productAbstractAllowedQuantityWriter;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\AllowedProductQuantity\Persistence\AllowedProductQuantityEntityManagerInterface
     */
    protected $allowedProductQuantityEntityManagerInterfaceMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\ProductAbstractTransfer
     */
    protected $productAbstractTransferMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\AllowedProductQuantityTransfer
     */
    protected $allowedProductQuantityTransferMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->allowedProductQuantityEntityManagerInterfaceMock = $this->getMockBuilder(AllowedProductQuantityEntityManagerInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productAbstractTransferMock = $this->getMockBuilder(ProductAbstractTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->allowedProductQuantityTransferMock = $this->getMockBuilder(AllowedProductQuantityTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productAbstractAllowedQuantityWriter = new ProductAbstractAllowedQuantityWriter($this->allowedProductQuantityEntityManagerInterfaceMock);
    }

    /**
     * @return void
     */
    public function testPersist(): void
    {
        $this->productAbstractTransferMock->expects($this->atLeastOnce())
            ->method('getAllowedQuantity')
            ->willReturn($this->allowedProductQuantityTransferMock);

        $this->allowedProductQuantityTransferMock->expects($this->atLeastOnce())
            ->method('getIdProductAbstract')
            ->willReturn(1);

        $this->allowedProductQuantityEntityManagerInterfaceMock->expects($this->atLeastOnce())
            ->method('persist')
            ->willReturn($this->allowedProductQuantityTransferMock);

        $this->productAbstractTransferMock->expects($this->atLeastOnce())
            ->method('setAllowedQuantity')
            ->willReturn($this->productAbstractTransferMock);

        $this->assertInstanceOf(ProductAbstractTransfer::class, $this->productAbstractAllowedQuantityWriter->persist($this->productAbstractTransferMock));
    }

    /**
     * @return void
     */
    public function testPersistIdProductAbstractNull(): void
    {
        $this->productAbstractTransferMock->expects($this->atLeastOnce())
            ->method('getAllowedQuantity')
            ->willReturn($this->allowedProductQuantityTransferMock);

        $this->allowedProductQuantityTransferMock->expects($this->atLeastOnce())
            ->method('getIdProductAbstract')
            ->willReturn(null);

        $this->productAbstractTransferMock->expects($this->atLeast(2))
            ->method('getIdProductAbstract')
            ->willReturn(1);

        $this->allowedProductQuantityTransferMock->expects($this->atLeastOnce())
            ->method('setIdProductAbstract')
            ->willReturn($this->allowedProductQuantityTransferMock);

        $this->allowedProductQuantityEntityManagerInterfaceMock->expects($this->atLeastOnce())
            ->method('persist')
            ->willReturn($this->allowedProductQuantityTransferMock);

        $this->productAbstractTransferMock->expects($this->atLeastOnce())
            ->method('setAllowedQuantity')
            ->willReturn($this->productAbstractTransferMock);

        $this->assertInstanceOf(ProductAbstractTransfer::class, $this->productAbstractAllowedQuantityWriter->persist($this->productAbstractTransferMock));
    }

    /**
     * @return void
     */
    public function testPersistProductAbstractTransferNull(): void
    {
        $this->productAbstractTransferMock->expects($this->atLeastOnce())
            ->method('getAllowedQuantity')
            ->willReturn(null);

        $this->assertInstanceOf(ProductAbstractTransfer::class, $this->productAbstractAllowedQuantityWriter->persist($this->productAbstractTransferMock));
    }
}
