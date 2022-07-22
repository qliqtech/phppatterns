<?php

interface SortingStrategy{

    function sort($data);

}

class MergSort implements SortingStrategy{


    function sort($data)
    {
        // TODO: Implement sort() method.
    }
}

class QuickSort implements SortingStrategy{


    function sort($data)
    {
        // TODO: Implement sort() method.
    }
}

function dothesort($data){

    if(count($data)>20){

        $temp = new QuickSort();


    }else{

        $temp = new MergSort();

    }

    $temp->sort($data);


}
