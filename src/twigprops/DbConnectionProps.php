<?php

namespace khalwat\twigprops;

use Attribute;
use craft\db\Connection;

#[Attribute]
class DbConnectionProps
{
    /** @var Connection|null The database Connection */
    public ?Connection $dbConnection = null;
}
