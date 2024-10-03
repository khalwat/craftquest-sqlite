<?php

namespace khalwat\twigprops;

use Attribute;
use khalwat\attributes\AlbumsAttributes;

#[Attribute]
class TracksProps extends DbConnectionProps
{
    /** @var AlbumsAttributes The album array */
    public AlbumsAttributes $album;
}
