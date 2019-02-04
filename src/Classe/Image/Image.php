<?php
namespace ImageSkeleton\Classe\Image;

use ImageSkeleton\Classe\Loader\LoaderInterface;

abstract class Image {
    /** @var string  */
    private $path;

    /** @var LoaderInterface  */
    private $loader;

    /** @var resource */
    private $resource;

    public function __construct(
        LoaderInterface $loader,
        string $path
    ) {
        $this->loader = $loader;
        $this->path = $path;
    }

    public function load()
    {
        $this->resource = $this->loader->load($this->path);
    }

    /**
     * @return resource
     */
    public function getResource()
    {
        return $this->resource;
    }
}