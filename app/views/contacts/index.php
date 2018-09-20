<?php
if (isset($records)) {
    foreach ($records as $row) {
        echo $row->Name.'<br>';
    }
}
