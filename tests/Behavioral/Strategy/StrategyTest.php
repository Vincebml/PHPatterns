<?php

namespace Test\Phpatterns\Behavioral\Strategy;

use Phpatterns\Behavioral\Strategy;
use Phpatterns\Behavioral\Strategy\Export;

class StrategyTest extends \PHPUnit_Framework_TestCase
{
    /** @var Export\CsvExport */
    private $csvStrategy;

    /** @var Export\PdfExport */
    private $pdfStrategy;

    /** @var Strategy\File */
    private $file;

    protected function setUp()
    {
        $this->csvStrategy = new Export\CsvExport();
        $this->pdfStrategy = new Export\PdfExport();

        $this->file = new Strategy\File('test.txt');
    }

    public function testStrategyInstances()
    {
        $this->assertInstanceOf(Strategy\ExportInterface::class, $this->csvStrategy);
        $this->assertInstanceOf(Strategy\ExportInterface::class, $this->pdfStrategy);
    }

    public function testCsvStrategy()
    {
        $this->assertSame(
            'newFile.csv',
            $this->file->exportTo($this->csvStrategy)
        );
    }

    public function testPdfStrategy()
    {
        $this->assertSame(
            'newFile.pdf',
            $this->file->exportTo($this->pdfStrategy)
        );
    }
}
