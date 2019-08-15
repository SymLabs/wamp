<?php
namespace Symlabs\WAMP\Message;

/**
 * Class Hello
 */
class Hello implements MessageInterface
{
    /**
     * This is the message code of Hello Message Type
     */
    const MESSAGE_TYPE = 1;

    /**
     * @var string $realm
     */
    private $realm;

    /**
     * @var array $roles
     */
    private $roles;

    /**
     * @var array $authMethods
     */
    private $authMethods;

    /**
     * @var string $authId
     */
    private $authId;

    /**
     * @var array $authExtra
     */
    private $authExtra;

    /**
     * Hello constructor.
     * @param $realm
     * @param array $roles
     * @param array|null $authMethods
     * @param $authId
     * @param array|null $authExtra
     */
    public function __construct(
        $realm,
        array $roles,
        array $authMethods = null,
        $authId = null,
        array $authExtra = null
    ) {
        $this->realm = $realm;
        $this->roles = $roles;
        $this->authMethods = $authMethods;
        $this->authId = $authId;
        $this->authExtra = $authExtra;
    }

    /**
     * @return array
     */
    public function serialize()
    {
        $serializable = [];
        $serializable['realm'] = $this->realm;
        $serializable['details'] = [];
        $serializable['details']['roles'] = $this->roles;
        if ($this->authMethods) {
            $serializable['details']['authmethods'] = $this->authMethods;
        }
        if ($this->authId) {
            $serializable['details']['authid'] = $this->authId;
        }
        if ($this->authExtra) {
            $serializable['details']['authextra'] = $this->authExtra;
        }

        return $serializable;
    }

    /**
     * @param array $serialized
     * @return MessageInterface
     */
    public function deserialize(array $serialized)
    {
        $realm = $serialized['realm'];
        $roles = $serialized['details']['roles'];
        $authMethods = isset($serialized['details']['authmethods']) ?  $serialized['details']['authmethods'] : null;
        $authId = isset($serialized['details']['authid']) ? $serialized['details']['authid']  : null;
        $authExtra = isset($serialized['details']['authextra']) ? $serialized['details']['authextra'] : null;

        return new Hello($realm, $roles, $authMethods, $authId, $authExtra);
    }
}
