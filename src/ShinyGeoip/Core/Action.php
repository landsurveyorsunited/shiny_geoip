<?php namespace ShinyGeoip\Core;

use Slim\Slim;

class Action
{
    /**
     * @var Slim $app
     */
    protected $app;

    /**
     * Injects slim object into actions.
     *
     * @param Slim $app
     */
    public function __construct(Slim $app)
    {
        $this->app = $app;
    }
}
