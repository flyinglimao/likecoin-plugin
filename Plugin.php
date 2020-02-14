<?php
namespace Flyinglimao\LikeCoin;

class Plugin extends \System\Classes\PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'LikeCoin Plugin',
            'description' => 'Provide a component for add LikeCoin button on pages.',
            'author' => 'Flyinglimao',
            'icon' => 'icon-money'
        ];
    }

    public function registerComponents()
    {
        return [
            'Flyinglimao\LikeCoin\Components\Button' => 'likeCoinButton'
        ];
    }
}