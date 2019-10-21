<?php

namespace FondOfSpryker\Zed\AllowedProductQuantity\Business;

use Codeception\Test\Unit;
use FondOfSpryker\Zed\AllowedProductQuantity\Business\Model\ProductAbstractAllowedQuantityReaderInterface;
use FondOfSpryker\Zed\AllowedProductQuantity\Business\Model\ProductAbstractAllowedQuantityWriterInterface;
use Generated\Shared\Transfer\AllowedProductQuantityResponseTransfer;
use Generated\Shared\Transfer\ProductAbstractTransfer;

class AllowedProductQuantityFacadeTest extends Unit
{
    /**
     * @var \FondOfSpryker\Zed\AllowedProductQuantity\Business\AllowedProductQuantityFacade
     */
    protected $allowedProductQuantityFacade;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\AllowedProductQuantity\Business\AllowedProductQuantityBusinessFactory
     */
    protected $allowedProductQuantityBusinessFactoryMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\ProductAbstractTransfer
     */
    protected $productAbstractTransferMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\AllowedProductQuantity\Business\Model\ProductAbstractAllowedQuantityWriterInterface
     */
    protected $productAbstractAllowedQuantityWriterInterfaceMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\FondOfSpryker\Zed\AllowedProductQuantity\Business\Model\ProductAbstractAllowedQuantityReaderInterface
     */
    protected $productAbstractAllowedQuantityReaderInterfaceMock;

    /**
     * @var \PHPUnit\Framework\MockObject\MockObject|\Generated\Shared\Transfer\AllowedProductQuantityResponseTransfer
     */
    protected $allowedProductQuantityResponseTransferMock;

    /**
     * @return void
     */
    protected function _before(): void
    {
        parent::_before();

        $this->allowedProductQuantityBusinessFactoryMock = $this->getMockBuilder(AllowedProductQuantityBusinessFactory::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productAbstractTransferMock = $this->getMockBuilder(ProductAbstractTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productAbstractAllowedQuantityWriterInterfaceMock = $this->getMockBuilder(ProductAbstractAllowedQuantityWriterInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->productAbstractAllowedQuantityReaderInterfaceMock = $this->getMockBuilder(ProductAbstractAllowedQuantityReaderInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->allowedProductQuantityResponseTransferMock = $this->getMockBuilder(AllowedProductQuantityResponseTransfer::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->allowedProductQuantityFacade = new AllowedProductQuantityFacade();
        $this->allowedProductQuantityFacade->setFactory($this->allowedProductQuantityBusinessFactoryMock);
    }

    /**
     * @return void
     */
    public function testPersistProductAbstractAllowedQuantity(): void
    {
        $this->allowedProductQuantityBusinessFactoryMock->expects($this->atLeastOnce())
            ->method('createProductAbstractAllowedQuantityWriter')
            ->willReturn($this->productAbstractAllowedQuantityWriterInterfaceMock);

        $this->productAbstractAllowedQuantityWriterInterfaceMock->expects($this->atLeastOnce())
            ->method('persist')
            ->willReturn($this->productAbstractTransferMock);

        $this->assertInstanceOf(ProductAbstractTransfer::class, $this->allowedProductQuantityFacade->persistProductAbstractAllowedQuantity($this->productAbstractTransferMock));
    }

    /**
     * @return void
     */
    public function testFindProductAbstractAllowedQuantity(): void
    {
        $this->allowedProductQuantityBusinessFactoryMock->expects($this->atLeastOnce())
            ->method('createProductAbstractAllowedQuantityReader')
            ->willReturn($this->productAbstractAllowedQuantityReaderInterfaceMock);

        $this->productAbstractAllowedQuantityReaderInterfaceMock->expects($this->atLeastOnce())
            ->method('findByIdProductAbstract')
            ->willReturn($this->allowedProductQuantityResponseTransferMock);

        $this->assertInstanceOf(AllowedProductQuantityResponseTransfer::class, $this->allowedProductQuantityFacade->findProductAbstractAllowedQuantity($this->productAbstractTransferMock));
    }
}
