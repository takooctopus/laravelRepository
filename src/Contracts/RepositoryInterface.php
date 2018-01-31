<?php
/**
 * Created by PhpStorm.
 * User: Tako
 * Date: 2018/1/30
 * Time: 12:41
 */
namespace Takooctopus\Repositories\Contracts;

interface RepositoryInterface
{
    public function all($columns = array('*'));
    public function paginate($perPage = 15, $columns = array('*'));
    public function create(array $data);
    public function update(array $data, $id);
    public function delete($id);
    public function softDelete($id,$attribute="id");
    public function restore($id,$attribute="id");
    public function find($id, $columns = array('*'));
    public function findBy($field, $value, $columns = array('*'));
}