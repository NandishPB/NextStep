PHP_PORT = 8080
HOST = localhost

test:
	@php -S $(HOST):$(PHP_PORT) test.html
