<?php namespace HomeBargain\LaravelRepo\Criteria;

use HomeBargain\LaravelRepo\Interfaces\CriteriaInterface;
use HomeBargain\LaravelRepo\Criteria\Criteria;

class OrderByCriteria extends Criteria implements CriteriaInterface {

    /**
	 * The filter is a date and must be formatted accordingly
	 *
	 * @return $this
	 */
    public function apply( $query, $repository )
    {
        $query->orderBy( $this->column, $this->direction );

        return $query;
    }

}