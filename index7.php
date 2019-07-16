<?php 

/**
 * пример использования интерфейса , как контейнера, в котором хранятся константы нашего приложения
 */

interface HttpResponseCode {
	const OK = 200;
	const NOT_FOUND = 404;
	const CONFLICT = 409;
}

class HTTP implements HttpResponseCode {
	public function getResponse() {
		return self::CONFLICT;
	}
}

echo HttpResponseCode::NOT_FOUND;




 ?>