<?php
function checkType($type)
{
    $dataType = ["jpg",'png','jpeg'];
    foreach($dataType as $tp)
    {
        if($tp == $type)
        {
            return true;
            break;
        }
    }
    return false;
}

function descStatus($param)
{
    if($param == 'N')
    {
        $result = 'Pendaftaran Baru';
    }
    elseif($param == 'O')
    {
        $result = 'Telah dibaca';
    }
    elseif($param == 'P')
    {
        $result = 'Proses Tindak Lanjut';
    }
    elseif($param == 'R')
    {
        $result = 'Dibatalkan';
    }
    elseif($param == 'D')
    {
        $result = 'Selesai ';
    }
    return $result;
}
function descColor($param)
{
    if($param == 'N')
    {
        $result = 'warning';
    }
    elseif($param == 'O')
    {
        $result = 'primary';
    }
    elseif($param == 'P')
    {
        $result = 'info';
    }
    elseif($param == 'R')
    {
        $result = 'danger';
    }
    elseif($param == 'D')
    {
        $result = 'success ';
    }
    return $result;
}