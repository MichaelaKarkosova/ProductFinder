start:
	docker compose up -d
	@echo "visit http://localhost:7777"

stop:
	docker compose stop

down:
	docker compose down

init:
	make stop
	make start
	docker exec -it productfinder composer install --no-interaction --no-ansi --prefer-dist --no-progress --optimize-autoloader