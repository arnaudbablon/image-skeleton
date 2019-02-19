<?php
namespace ImageSkeleton\Classe\Loader;

interface LoaderInterface
{
    /**
     * @param string $mixed can be base64 / path
     * @return mixed
     */
    public function load(string $mixed);
}