<?php namespace PlanetaDelEste\ApiGoodNews\Classes\Resource\Category;

use PlanetaDelEste\ApiToolbox\Plugin;

/**
 * Class ShowResource
 *
 * @mixin \Lovata\GoodNews\Classes\Item\CategoryItem
 * @package PlanetaDelEste\BuilderPortal\Classes\Resource\Category
 */
class ShowResource extends ItemResource
{
    public function getDataKeys()
    {
        return [
            'id',
            'name',
            'slug',
            'code',
            'active',
            'preview_text',
            'description',
            'nest_depth',
            'parent_id',
            'parent',
            'preview_image',
            'images'
        ];
    }

    protected function getEvent()
    {
        return Plugin::EVENT_SHOWRESOURCE_DATA;
    }
}

