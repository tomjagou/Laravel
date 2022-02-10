<?php
    while($iterateur->hasNext()){
        echo get_class($iterateur->next());
        echo '<br>';
    }
?>