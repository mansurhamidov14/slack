<?php

namespace CL\Slack\Model;

/**
 * A lightweight representation of a Slack user containing only
 * a few fields for the quick deserialization process.
 */
class UserLightweight extends AbstractModel
{
    private string $id;
    private string $name;
    private ?bool $deleted;

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isDeleted(): ?bool
    {
        return $this->deleted;
    }
}
