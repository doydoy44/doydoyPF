<?php

/*
 * This file is part of the Cocorico package.
 *
 * (c) Cocolabs SAS <contact@cocolabs.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Cocorico\CoreBundle\Twig;

use Cocorico\UserBundle\Entity\User;

/**
 * CountryExtension will render the name of the country
 */
class ListingExtension extends \Twig_Extension
{

    /**
     * @inheritdoc
     *
     * @return array
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('hasListing', array($this, 'getHasListing')),
        );
    }

    /**
     * Get countries localized
     *
     * @param User $user
     * @return null|string
     */
    public function getHasListing(User $user)
    {
        return !$user->getListings()->isEmpty();
    }


    /** @inheritdoc */
    public function getName()
    {
        return 'listing_extension';
    }
}