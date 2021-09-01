<?php

namespace LidyaPos\Slug\Events;

use LidyaPos\Base\Events\Event;
use LidyaPos\Slug\Models\Slug;
use Eloquent;
use Illuminate\Queue\SerializesModels;

class UpdatedSlugEvent extends Event
{
    use SerializesModels;

    /**
     * @var Eloquent|false
     */
    public $data;

    /**
     * @var Slug
     */
    public $slug;

    /**
     * UpdatedSlugEvent constructor.
     * @param Eloquent $data
     * @param Slug $slug
     */
    public function __construct($data, Slug $slug)
    {
        $this->data = $data;
        $this->slug = $slug;
    }
}
