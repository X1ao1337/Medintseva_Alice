<?php
$gym=array(2,7,3,5);
$fin=array(5,4,7,7);

$h1=$gym[4]-$gym[2];
$w1=$gim[3]-$gym[1];
$h2=$fin[4]-$fin[2];
$w2=$fin[3]-$fin[1];

if($fin[4]<$gym[4]&&$fin[4]>$gym[1])
{
	if($fin[1]>gym[1]&&$fin[1]<$gym[3])
	{
	$k=1;
	}
}
elseif($fin[1]>gym[1]&&$fin[1]<$gym[3])
{
	if($gym[2]<$fin[4]&&$gym[4]>$fin[4])
	{
	$k=1;
	}
}

else
{
	$k=0;
}

if($k==1)
echo "Так точно";
else
echo "Ноуп";
>