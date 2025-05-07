<?php

namespace CL\Slack\Payload;

use CL\Slack\Model\UserLightweight;

class UsersLightweightListPayloadResponse extends UsersListPayloadResponse
{
    /**
     * @var UserLightweight[]
     */
    private array $members;

    /**
     * Returns 1 or more members of the team, in no particular order.
     *
     * For deactivated users, deleted will be true.
     *
     * @return UserLightweight[]
     */
    public function getUsers(): array
    {
        return $this->members;
    }
}
