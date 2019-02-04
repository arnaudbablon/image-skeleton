<?php
namespace ImageSkeleton\Classe\Loader;

class LoaderPng implements LoaderInterface
{
    public function load(string $path)
    {
        return imagecreatefrompng($path);
    }
}