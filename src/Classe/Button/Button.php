<?php
namespace ImageSkeleton\Classe\Button;

use ImageSkeleton\Classe\Image\Image;

abstract class Button {
    /** @var Image  */
    protected $image;

    public function __construct(
        Image $image
    ) {
        $this->image = $image;
    }
}