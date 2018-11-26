<?php


function picArray($file,$url_path)
{
    $rule = ['jpg', 'png', 'gif'];
    foreach ($file as $value) {
        if ($value->isValid()) {
            $clientName = $value->getClientOriginalName();
            $tmpName = $value->getFileName();
            $realPath = $value->getRealPath();
            $entension = $value->getClientOriginalExtension();
            if (!in_array($entension, $rule)) {
                return '图片格式为jpg,png,gif';
            }
            $newName = md5(date("Y-m-d H:i:s") . $clientName) . "." . $entension;
            $path = $value->move($url_path, $newName);
//            dd($path);
            $data[] = $url_path . '/' . $newName;
        }
    }
    return $data;
}