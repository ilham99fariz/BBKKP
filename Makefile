run:
	@docker compose up -d --build
	@make set-storage-permission
	@echo "Server is started"

update-repo:
	echo  "Updating git repo..."
	@git pull origin master

start:
	@docker compose up -d --build

restart:
	@docker compose restart

stop:
	@docker compose down --remove-orphans

enter-php:
	@echo "Entering php container"
	@docker exec -w /var/www -it $(shell docker compose ps -q bbkkp_web) bash

install-composer:
	@echo "Installing composer in host via docker"
	@docker run --rm -u "$(shell id -u):$(shell id -g)" -v "$(shell pwd):/var/www" -w /var/www laravelsail/php83-composer:latest composer install --ignore-platform-reqs