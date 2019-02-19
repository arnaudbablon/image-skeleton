<?php
namespace ImageSkeleton\Classe\Loader;

class LoaderPng implements LoaderInterface
{
    public function load(string $mixed)
    {
        return imagecreatefrompng($mixed);
    }
}