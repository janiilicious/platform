<?php declare(strict_types=1);

namespace Shopware\Api\Write\Flag;

class SearchRanking extends Flag
{
    /**
     * @var float
     */
    protected $ranking;

    public function __construct(float $ranking)
    {
        $this->ranking = $ranking;
    }

    public function getRanking(): float
    {
        return $this->ranking;
    }
}
