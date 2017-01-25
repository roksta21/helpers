<?php

function dd($data1, $data2 = null, $data3 = null, $data4 = null, $data5 = null)
{
	dump($data1);

	if ($data2 != null) {
	    dump($data2);
	}

	if ($data3 != null) {
	    dump($data3);
	}

	if ($data4 != null) {
	    dump($data4);
	}

	if ($data5 != null) {
	    dump($data5);
	}

	die();
}