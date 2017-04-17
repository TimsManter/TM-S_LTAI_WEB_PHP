<!--
 * @Author: Krzysztof -TimsManter- Ferenc 
 * @Date: 2016-10-06 ‏‎16:33:57
 * @Last Modified by: Krzysztof -TimsManter- Ferenc
 * @Last Modified time: 2016-11-10 13:38:32
 -->
<?php
    function galeria($rows, $cols)
    {
        $imgNumber = $rows * $cols;
        $curRow = 0;
        $curCol = 0;
        print("<table>");
        for ($i = 0; $i < $imgNumber; $i++)
        {
            $curRow = $imgNumber / $cols;
            $curCol = $imgNumber % $rows;
            
            // TODO: Finish loop.
        }
        print("</table>");
    }

    galeria(3, 3);
?>
