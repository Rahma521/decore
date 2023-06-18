<?php 

namespace App\Repository;


interface BaseInterface {
    public function getAllData();

    public function storeData(array $data);

}