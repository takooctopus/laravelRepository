<?php
/**
 * Created by PhpStorm.
 * User: Tako
 * Date: 2018/1/30
 * Time: 16:35
 */
namespace Takooctopus\Repositories\Criteria;

use Takooctopus\Repositories\Contracts\RepositoryInterface as Repository;
use Takooctopus\Repositories\Contracts\RepositoryInterface;

abstract class Criteria {

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public abstract function apply($model, Repository $repository);
}