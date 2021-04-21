.PHONY: build coverage fix help sniff test

ifndef PHP_VERSION
    PHP_VERSION = '8.0'
endif

help:
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}'

build: fix test ## Runs fix and test targets

coverage: vendor/autoload.php ## Collects coverage with phpunit
	vendor/bin/phpunit --coverage-text --coverage-clover=.build/logs/clover.xml

fix: vendor/autoload.php ## Fixes code style issues with phpcbf
	vendor/bin/phpcbf --standard=PSR2 src

sniff: vendor/autoload.php ## Detects code style issues with phpcs
	vendor/bin/phpcs --standard=PSR2 src -n

test: vendor/autoload.php ## Runs tests with phpunit
	vendor/bin/phpunit

vendor/autoload.php:
	composer install --no-interaction --prefer-dist

up:
	@echo "php version $(PHP_VERSION)"
	export PHP_VERSION=$(PHP_VERSION) && docker-compose up -d --build --force-recreate
down:
	echo "php version $(PHP_VERSION)"
	export PHP_VERSION=$(PHP_VERSION) && docker-compose down

testing:
	@echo "php version $(PHP_VERSION)"
	export PHP_VERSION=$(PHP_VERSION) && docker-compose up -d --build --force-recreate
	docker-compose exec -T php composer update
	docker-compose exec -T php vendor/bin/phpunit --dont-report-useless-tests
	docker-compose down
