<?php

namespace Phpatterns\Behavioral\Strategy;

class File
{
    /**
     * @var string
     */
    private $path;

    /**
     * @param $path
     */
    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * @param ExportInterface $exportStrategy
     * @return string
     */
    public function exportTo(ExportInterface $exportStrategy)
    {
        return $exportStrategy->export($this->path);
    }
}
