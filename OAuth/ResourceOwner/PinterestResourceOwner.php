<?php

/*
 * This file is part of the HWIOAuthBundle package.
 *
 * (c) Hardware.Info <opensource@hardware.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HWI\Bundle\OAuthBundle\OAuth\ResourceOwner;

use Buzz\Message\RequestInterface as HttpRequestInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * PinterestResourceOwner
 *
 */
class PinterestResourceOwner extends GenericOAuth2ResourceOwner
{
    /**
     * {@inheritDoc}
     */
    protected $paths = array(
        'identifier' => 'id',
        'nickname'   => 'username',
        'profilepicture' => 'image',
    );
    /**
     * {@inheritDoc}
     */
    public function getAuthorizationUrl($redirectUri, array $extraParameters = array())
    {
        //Pinterest supports only https redirect urls
        $redirectUri = str_replace('http','https',$redirectUri);
        return parent::getAuthorizationUrl($redirectUri, $extraParameters);
    }
    /**
     * {@inheritDoc}
     */
    protected function configureOptions(OptionsResolverInterface $resolver)
    {
        parent::configureOptions($resolver);

        $resolver->setDefaults(array(
            'authorization_url'   => 'https://api.pinterest.com/oauth/',
            'access_token_url'    => 'https://api.pinterest.com/v1/oauth/token',
            'revoke_token_url'    => 'https://api.pinterest.com/v1/oauth/token',
            'infos_url'           => 'https://api.pinterest.com/v1/me/',
            'use_commas_in_scope' => true,
            'display'             => null,
            'auth_type'           => null,
        ));
    }
}
