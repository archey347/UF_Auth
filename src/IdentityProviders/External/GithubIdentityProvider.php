<?php
/*
 * UserFrosting (http://www.userfrosting.com)
 *
 * @link      https://github.com/userfrosting/UserFrosting
 * @copyright Copyright (c) 2019 Alexander Weissman
 * @license   https://github.com/userfrosting/UserFrosting/blob/master/LICENSE.md (MIT License)
 */

namespace UserFrosting\Sprinkle\Auth\IdentityProviders\External;

use UserFrosting\Sprinkle\Account\Database\Models\Interfaces\ExternalIdpInterface;
use UserFrosting\Sprinkle\Account\Authenticate\RawUser;
use UserFrosting\Sprinkle\Account\Database\Models\Interfaces\UserInterface;

/**
 * Github External Identity Provider
 *
 * @author Archey Barrell
 * @author Amos Folz
 */
class GitHubIdentityProvider implements ExternalIdpInterface
{
    /**
     * Redirect the user to the external site
     */
    public function redirect()
    {

    }

    /**
     *  Verify the data sent from the third party through the user with the third party directly
     * 
     * @param mixed $data The data sent from the third party via the user
     * 
     * @return RawUser The user which has been authenticated
     */
    public function verify($data)
    {

    }

    /**
     * Get the Twig template path of the login button to be displayed on the login page
     * 
     * @return string The Twig template path
     */
    public function getLoginBtnTemplatePath()
    {
        return "partials/buttons/github.html.twig";
    }

    /**
     * The API object used to make platform specific calls (e.g. Github -> View Repositories)
     * 
     * @return mixed The API object
     */
    public function getApi()
    {

    }

    /**
     * updateUser - Returns an edited user with details from an external user
     * 
     * This will also include associating the user (if not already) with this identity provider so that the same user can login again
     *
     * @param  UserInterface $user    The user to ammend the data to
     * @param  RawUser       $rawUser The raw user to get the data from
     *
     * @return UserInterface
     */
    public function updateUser(UserInterface $user, RawUser $rawUser)
    {

    }
 }
