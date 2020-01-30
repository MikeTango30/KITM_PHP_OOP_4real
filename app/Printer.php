<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 14:41
 */

namespace OOP;


class Printer
{
    public static function printArray(array $data): void {
        echo '<div class="card">';
        echo '<div class="card-body">';
        echo '<ul>';
        foreach ($data as $item) {
            echo '<li>'.$item.'</li>';
        }
        echo '</ul>';
        echo '</div>';
        echo '</div>';
    }
}
?>
