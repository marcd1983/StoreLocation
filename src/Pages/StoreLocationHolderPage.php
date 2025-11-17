<?php

namespace Antlion\StoreLocation\Pages;

use SilverStripe\ORM\ArrayList;
use SilverStripe\View\ArrayData;
use Page;
class StoreLocationHolderPage extends Page
{
    private static string $table_name = 'StoreLocationHolderPage';

    private static string $description = 'A holder page that lists all store locations.';

    private static array $allowed_children = [
        StoreLocationPage::class,
    ];

    private static string $icon_class = 'font-icon-map';

    /**
     * Returns all live StoreLocationPage children.
     */
    public function Locations()
    {
        return $this->AllChildren()->filter([
            'ClassName' => StoreLocationPage::class
        ])->sort('Title');
    }
}


