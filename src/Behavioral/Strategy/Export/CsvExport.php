<?php

namespace Phpatterns\Behavioral\Strategy\Export;

use Phpatterns\Behavioral\Strategy;

class CsvExport implements Strategy\ExportInterface
{
    /**
     * @param string $filePath
     * @return string - path of the exported file
     */
    public function export($filePath)
    {
        // ...
        // Do the necessary to export the file to CSV format
        // ..

        return 'newFile.csv';
    }
}
