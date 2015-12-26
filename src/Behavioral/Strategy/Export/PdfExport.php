<?php

namespace Phpatterns\Behavioral\Strategy\Export;

use Phpatterns\Behavioral\Strategy;

class PdfExport implements Strategy\ExportInterface
{
    /**
     * @param string $filePath
     * @return string - path of the exported file
     */
    public function export($filePath)
    {
        // ...
        // Do the necessary to export the file to PDF format
        // ..

        return 'newFile.pdf';
    }
}
