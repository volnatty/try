<?php
function inverse($i){
    if (!$i){
        throw new Exception('Don\'t devide by 0');//генерация исключения
    }
    return 1/$i;
}

try{
    inverse(5);
//    inverse(0);
    } catch (Exception $e)
    {
    die ($e->getMessage());
//        '<br>';
//    echo $e->getMessage().'<br>';
    }
    finally {
        echo 'Finally 1'.'<br>';
    }
try{
//    inverse(5);
    inverse(0);
} catch (Exception $e)
{
//    die ($e->getMessage());
//        '<br>';
    echo $e->getMessage().'<br>';
}
finally {
    echo 'Finally 2'.'<br>';
}