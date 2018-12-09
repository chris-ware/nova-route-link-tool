<?php

namespace ChrisWare\NovaRouteLinkTool;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaRouteLinkTool extends Tool
{
    protected $label;
    protected $route;
    protected $target;

    const VIEW_NAME = 'website-link::navigation';

    public function __construct(string $route = 'home', string $label = 'Website Home', string $target = 'self')
    {
        parent::__construct();

        $this->route = $route;
        $this->label = $label;
        $this->target = $target;
    }


    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view(self::VIEW_NAME, [
            'label' => $this->label,
            'route' => $this->route,
            'target' => $this->target,
        ]);
    }

    public function label(string $label)
    {
        $this->label = $label;

        return $this;
    }

    public function route(string $route)
    {
        $this->route = $route;

        return $this;
    }

    public function target(string $target)
    {
        $this->target = $target;

        return $this;
    }
}
