<?php
/**
 * Created by PhpStorm.
 * User: kebros
 * Date: 8/23/2017
 * Time: 3:14 AM
 */
interface IDao {

    public  function create($obj);

    public  function update($obj);

    public  function delete($obj);

    public  function getById($obj);

    public  function getAll();
}
