<?php

namespace Tasks\Task99;

/**
 * Class Task 99
 */
class Task
{
    /**
     * Массив данных
     *
     * @var array
     */
    private $arr;

    /**
     * Конструктор
     *
     * @param array $arr Входящий массив данных
     */
    public function __construct($arr)
    {
        usort($arr, [$this, 'sorting']);
        $this->arr = implode($arr);
    }

    /**
     * Ф-я сортировки
     *
     * @param string $a
     * @param string $b
     *
     * @return int
     */
    private function sorting($a, $b)
    {
        if ($a === $b) {
            return 0;
        }

        return $a[0] < $b[0] ? 1 : -1;
    }

    /**
     * Возвращает конкатенацию строк
     *
     * @return string
     */
    public function getArr()
    {
        return $this->arr;
    }
}

