<?php
/**
 * Created by PhpStorm.
 * User: Gytis
 * Date: 2017-12-13
 * Time: 19:49
 */

namespace app\model;

use app\model\interfaces\Destroyable;
use app\model\interfaces\Manageable;

class ProductHistory extends CoreModel implements Manageable, Destroyable
{
    protected $table = 'bakery_products_history';

    public function create(array $data)
    {
        $query = $this->generateInsertQuery($data, true);
        $this->db_query($query);
    }

    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function destroy()
    {
        // TODO: Implement destroy() method.
    }

}
