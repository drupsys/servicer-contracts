DEFAULT_GOAL: up

SETUP := $(shell ls ./env | grep -q docker || ./scripts/setup.sh)
include ./env/docker

.PHONY: build
build:
	docker-compose build
	$(MAKE) down up

.PHONY: up
up:
	docker-compose up -d --remove-orphans

.PHONY: down
down:
	docker-compose down

.PHONY: shell
shell:
	docker exec -it -u package servicer-contracts sh

.PHONY: test
test:
	docker exec -it servicer-contracts vendor/bin/codecept run tests/$(filter)

.PHONY: logs
logs:
	docker-compose logs -f --tail=100

.PHONY: setup
setup:
	$(MAKE) down
	-docker exec -it -u package servicer-contracts rm -fr vendor
	$(MAKE) build
	docker exec -it -u package servicer-contracts composer install
