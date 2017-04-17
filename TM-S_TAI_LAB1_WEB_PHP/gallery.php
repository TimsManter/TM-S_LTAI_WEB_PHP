<?php
    function galeria($rows, $cols)
    {
        $imgNumber = 1;
        print("<table>");
        for ($i = 0; $i < $rows; $i++)
        {
            print("<tr>");
            for ($j = 0; $j < $cols; $j++)
            {
                if ($imgNumber > 10) break;
                print('<td><img src="obrazki/obraz'.$imgNumber.'.JPG"</td>');
                $imgNumber++;
            }
            print("</tr>");
            if ($imgNumber > 10) break;
        }
        print("</table>");
    }

    galeria(4, 4);
?>

