<?php
namespace Craft;

/**
 * @link      https://dukt.net/craft/github/
 * @copyright Copyright (c) 2015, Dukt
 * @license   https://dukt.net/craft/github/docs/license
 */



class GithubPlugin extends BasePlugin
{
    /**
     * Get OAuth Providers
     */
    public function getOAuthProviders()
    {
        require_once(CRAFT_PLUGINS_PATH.'github/providers/oauth/Github.php');

        return [
            'Dukt\OAuth\Providers\Github'
        ];
    }


    /**
     * Get Name
     */
    function getName()
    {
        return Craft::t('GitHub');
    }

    /**
     * Get Version
     */
    function getVersion()
    {
        return '1.0.0';
    }

    /**
     * Get Developer
     */
    function getDeveloper()
    {
        return 'Dukt';
    }

    /**
     * Get Developer URL
     */
    function getDeveloperUrl()
    {
        return 'https://dukt.net/';
    }
}
