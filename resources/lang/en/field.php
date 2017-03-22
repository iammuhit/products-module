<?php

return [
    'str_id'           => [
        'name' => 'String ID',
    ],
    'name'             => [
        'name'         => 'Name',
        'instructions' => [
            'brands'     => 'Specify a short descriptive name.',
            'products'   => 'Specify a short descriptive name.',
            'categories' => 'Specify a short descriptive name.',
        ],
    ],
    'slug'             => [
        'name'         => 'Slug',
        'instructions' => [
            'brands'     => 'The slug is used to build URLs and access the brand via API.',
            'products'   => 'The slug is used to build URLs and access the product via API.',
            'categories' => 'The slug is used to build URLs and access the category via API.',
        ],
    ],
    'description'      => [
        'name'         => 'Description',
        'instructions' => [
            'brands'     => 'Briefly describe this brand.',
            'products'   => 'Briefly describe this product.',
            'categories' => 'Briefly describe this category.',
        ],
    ],
    'tags'             => [
        'name'         => 'Tags',
        'instructions' => 'Tags help you and your customers find products faster.',
    ],
    'related'          => [
        'name'         => 'Related Products',
        'instructions' => 'Select related products to help your customers with their purchase.',
    ],
    'brand'            => [
        'name'         => 'Brand',
        'instructions' => 'Specifying the brand will display branding information for this product.',
    ],
    'categories'       => [
        'name'         => 'Categories',
        'instructions' => 'Select the categories this product displays in.',
        'warning'      => 'The first category is considered it\'s <strong>default</strong> category.',
    ],
    'featured'         => [
        'name'         => 'Featured',
        'instructions' => 'Is this product featured?',
    ],
    'enabled'          => [
        'name'         => 'Enabled',
        'instructions' => 'Is this product enabled?',
    ],
    'images'           => [
        'name'         => 'Images',
        'instructions' => [
            'brands'     => 'Specify some media to display for this brand.',
            'products'   => 'Let your customers see what your product looks like.',
            'categories' => 'Give your customers a look at what\'s in this category.',
        ],
    ],
    'regular_price'    => [
        'name'         => 'Regular Price',
        'instructions' => 'Specify the price of the product before taxes and discounts.',
        'warning'      => 'If your store is tax-inclusive, then enter the base price with the tax applied.',
    ],
    'on_sale'          => [
        'name'         => 'On Sale',
        'instructions' => 'Is this product on sale?',
    ],
    'sale_price'       => [
        'name' => 'Sale Price',
    ],
    'sale_amount'      => [
        'name'         => 'Sale Price or Discount',
        'instructions' => 'Enter the sale price as a fixed sale price (e.g. 5.00), the discount amount (e.g. -5.00) or discount percentage (e.g. 5.00%).',
        'warning'      => 'Product must be "On Sale" to use sale price / discount.',
    ],
    'cost'             => [
        'name'         => 'Cost',
        'instructions' => 'Specify your cost for this product.',
        'warning'      => 'This is for internal use only.',
    ],
    'sku'              => [
        'name'         => 'SKU',
        'instructions' => 'Specify the product\'s stock keeping unit.',
    ],
    'barcode'          => [
        'name'         => 'Barcode',
        'instructions' => 'Specify the product ISBN, UPC, etc.',
    ],
    'weight'           => [
        'name'         => 'Weight',
        'instructions' => 'Specify the product weight.',
    ],
    'length'           => [
        'name'         => 'Length',
        'instructions' => 'Specify the product length.',
    ],
    'width'            => [
        'name'         => 'Width',
        'instructions' => 'Specify the product width.',
    ],
    'height'           => [
        'name'         => 'Height',
        'instructions' => 'Specify the product height.',
    ],
    'meta_title'       => [
        'name'         => 'Meta Title',
        'instructions' => 'Specify the SEO title.',
        'warning'      => [
            'products' => 'The product name will be used by default.',
        ],
    ],
    'meta_description' => [
        'name'         => 'Meta Description',
        'instructions' => 'Specify the SEO description.',
        'warning'      => [
            'products' => 'The product description will be used by default.',
        ],
    ],
    'meta_keywords'    => [
        'name'         => 'Meta Keywords',
        'instructions' => 'Specify the SEO keywords.',
    ],
    'downloads'        => [
        'name'         => 'Downloads',
        'instructions' => 'Specify any downloadable files.',
    ],
    'variants'         => [
        'name'         => 'Variants',
        'instructions' => 'Specify the product variants.',
    ],
    'properties'       => [
        'name'         => 'Properties',
        'instructions' => 'List the product\'s properties.',
    ],
    'product'          => [
        'name' => 'Product',
    ],
    'price'            => [
        'name' => 'Price',
    ],
    'website'          => [
        'name' => 'Website',
    ],
    'phone'            => [
        'name' => 'Phone',
    ],
    'fax'              => [
        'name' => 'Fax',
    ],
    'address'          => [
        'name' => 'Address',
    ],
    'city'             => [
        'name' => 'City',
    ],
    'state'            => [
        'name' => 'State',
    ],
    'country'          => [
        'name' => 'Country',
    ],
    'postal_code'      => [
        'name' => 'Postal Code',
    ],
    'file'             => [
        'name'         => 'File',
        'instructions' => 'Specify the downloadable file.',
        'warning'      => 'Make sure you are uploading to a protected folder.',
    ],
];
