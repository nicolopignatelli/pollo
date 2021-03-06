<?php

namespace Pollo\Core\Domain\Command\Poll;

use Pollo\Core\Domain\Model\Poll\PollId;

final class VoteOption
{
    /** @var PollId */
    private $pollId;

    /** @var int */
    private $optionNumber;

    /**
     * @param PollId $poll_id Voted poll id
     * @param int $option_number Option number
     */
    public function __construct(PollId $poll_id, $option_number)
    {
        $this->pollId = $poll_id;
        $this->optionNumber = (int) $option_number;
    }

    /**
     * Get poll id
     *
     * @return PollId
     */
    public function getPollId()
    {
        return $this->pollId;
    }

    /**
     * Get voted option number
     *
     * @return int
     */
    public function getOptionNumber()
    {
        return $this->optionNumber;
    }
}
