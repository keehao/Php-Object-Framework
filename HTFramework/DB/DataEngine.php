<?php
/**
 * Created by PhpStorm.
 * User: saligia
 * Date: 14-9-30
 * Time: 上午11:51
 */

namespace HTFramework\DB;

use HTFramework\Library\HTException;
use PDO;
use PDOException;
use ArrayObject;

class DataEngine
{
    private $pdo;
    private $pdo_stmt;
    private $pdo_param;

    public function __construct(array $database)
    {
        if (is_null($database)) {
            throw new HTException(__CLASS__);
        }
        $dns = sprintf(
            "%s:host=%s;port=%d;dbname=%s;charset=%s;unix_socket=%s",
            $database['engine'],
            $database['host'],
            intval($database['port']),
            $database['database'],
            $database['charset'],
            empty($database['unix_socket']) ? '/path/to/socket' : $database['unix_socket']
        );
        try {
            $this->pdo = new PDO(
                $dns,
                $database['user'],
                $database['password'],
                $database['options']
            );
            $this->pdo_param = array(
                'bool' => PDO::PARAM_BOOL,
                'int' => PDO::PARAM_INT,
                'string' => PDO::PARAM_STR,
                'null' => PDO::PARAM_NULL
            );
        } catch (PDOException $e) {
            throw new HTException(__CLASS__, $e);
        }
    }

    public function execute(HTSql $sql, ArrayObject $parameter)
    {
        $result = 0;
        $this->pdo->beginTransaction();
        try {
            $this->pdo_stmt = $this->pdo->prepare($sql);
            for ($iterator = $parameter->getIterator(); $iterator->valid(); $iterator->next()) {
                $this->pdo_stmt->bindParam(
                    $iterator->current()->variable,
                    $iterator->current()->valie,
                    empty($this->pdo_param[$iterator->current()->type]) ?
                        $this->pdo_param['string'] :
                        $this->pdo_param[$iterator->current()->type]
                );
            }
            if ($this->pdo_stmt->execute()) {
                if ($sql->type() == 'insert') {
                    $result = $this->pdo->lastInsertId($sql->primary_key());
                } else {
                    $result = $this->pdo_stmt->rowCount();
                }
            }
            $this->pdo->commit();
        } catch (PDOException $e) {
            $this->pdo->rollBack();
            throw new HTException(__CLASS__, $e);
        } finally {
            $this->pdo_stmt->closeCursor();
            $this->pdo_stmt = null;
        }
        return $result;
    }

    public function execute_reader(HTSql $sql, ArrayObject $parameter)
    {

    }
}