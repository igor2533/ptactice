<?php
$a = 2;
$operation = match($a)
{
    1 => "сложение",
    2 => "вычитание",
    default => "действие по умолчанию",
};
echo $operation;