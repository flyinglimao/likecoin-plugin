<?php
namespace Flyinglimao\LikeCoin\Components;

class Button extends \Cms\Classes\ComponentBase
{
    public $creator;
    public $url;

    public function componentDetails()
    {
        return [
            'name' => 'LikeCoin Button',
            'description' => 'Displays LikeCoin button.'
        ];
    }

    public function defineProperties()
    {
        return [
            'creator' => [
                'title'             => 'Creator',
                'description'       => 'Creator\'s LikeCoin id',
                'default'           => '',
                'type'              => 'string',
            ],
            'url' => [
                'title'             => 'Url',
                'description'       => 'Referrer url',
                'default'           => '',
                'type'              => 'string',
            ],
        ];
    }

    public function onRender ()
    {
        $this->creator = $this->property('creator');
        $this->url = $this->property('url');
        if (strlen($this->url) === 0) {
            $this->url = $this->controller->currentPageUrl();
        }
    }
}