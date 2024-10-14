<?php

try{
	$obj = new SplFileObject('dummy');
	
	echo "例外が起きた後の処理。ここを通る? \n";
}catch(\Throwable $e){
	
	echo "例外が発生したらここを通る? \n";
	var_dump($e->getMessage());
}
