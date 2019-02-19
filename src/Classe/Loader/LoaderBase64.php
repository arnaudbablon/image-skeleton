<?php
namespace ImageSkeleton\Classe\Loader;

class LoaderBase64 implements LoaderInterface
{
    public function load(string $mixed)
    {
        return imagecreatefromstring($mixed);
    }
}