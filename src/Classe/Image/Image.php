<?php
namespace ImageSkeleton\Classe\Image;

use ImageSkeleton\Classe\Loader\LoaderInterface;

abstract class Image {
    /** @var string
      * path or base64 of image
     */
    private $mixed;

    /** @var LoaderInterface  */
    private $loader;

    /** @var resource */
    private $resource;

    /**
     * Image constructor.
     * @param LoaderInterface $loader
     * @param string $mixed
     */
    public function __construct(
        LoaderInterface $loader,
        string $mixed
    ) {
        $this->loader = $loader;
        $this->mixed = $mixed;
    }

    public function load()
    {
        $this->resource = $this->loader->load($this->mixed);
    }

    /**
     * @return resource
     */
    public function getResource()
    {
        return $this->resource;
    }
}