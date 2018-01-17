<?php

namespace AppBundle\Entity;

use FOS\OAuthServerBundle\Entity\RefreshToken as BaseRefreshToken;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class RefreshToken
 * @package AppBundle\Entity
 */
class RefreshToken extends BaseRefreshToken
{
    /**
     * @var $id integer
     */
    protected $id;

    /**
     * @var $client Client
     */
    protected $client;

    /**
     * @var $user User
     */
    protected $user;
}