<?php

namespace khalwat\twigprops;

use Attribute;
use khalwat\attributes\ArtistsAttributes;

#[Attribute]
class AlbumsProps extends DbConnectionProps
{
    /** @var ArtistsAttributes The artist array */
    public ArtistsAttributes $artist;
}
