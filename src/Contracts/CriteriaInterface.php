<?php
/**
 * Created by PhpStorm.
 * User: Tako
 * Date: 2018/1/30
 * Time: 16:36
 */
namespace Takooctopus\Repositories\Contracts;

use Takooctopus\Repositories\Criteria\Criteria;

/**
 * Interface CriteriaInterface
 * @package Takooctopus\Repositories\Contracts
 */
interface CriteriaInterface {

    /**
     * @param bool $status
     * @return $this
     */
    public function skipCriteria($status = true);

    /**
     * @return mixed
     */
    public function getCriteria();

    /**
     * @param Criteria $criteria
     * @return $this
     */
    public function getByCriteria(Criteria $criteria);

    /**
     * @param Criteria $criteria
     * @return $this
     */
    public function pushCriteria(Criteria $criteria);

    /**
     * @return $this
     */
    public function applyCriteria();
}