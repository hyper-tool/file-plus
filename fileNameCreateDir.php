<?php
/**
 * User: BenHuang
 * Email: benhuang1024@gmail.com
 * Date: 2020/5/11
 * Time: 09:22
 */


$list = scandir('/Users/amy/Documents/untitled folder/untitled folder');

$file = glob('立项报告');
foreach ($list as $value) {
    echo strstr('立项报告', $value);
    if (false !== strstr('立项报告', $value)) {
        if (! mkdir($value) && ! is_dir($value)) {
        }
    }
}
