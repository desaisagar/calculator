<?php

namespace App\Library;

/**
 * Class Example
 * @package App\Library
 */
class DirectoryCreator
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $directory;

    /**
     * Example constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @param $directory
     */
    public function setDirectory($directory)
    {
        $this->directory = $directory . DIRECTORY_SEPARATOR . $this->id;

        if (!file_exists($this->directory)) {
            mkdir($this->directory, 0700, true);
        }
    }
}