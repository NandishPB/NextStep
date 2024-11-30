ARCH = $(shell uname -m)

ifeq ($(ARCH),x86_64)
  HOST = localhost
else
  HOST = 127.0.0.1
endif

PHP_PORT = 8080

test:
	@php -S $(HOST):$(PHP_PORT)
