# Что посмотреть

Бэкенд API для онлайн-кинотеатра.

## Требования

- Docker + Docker Compose
- Composer

## Установка и запуск

**1. Клонировать репозиторий**

**2. Создать `.env` файл**

**3. Установить зависимости и запустить контейнеры**

```bash
composer install
./vendor/bin/sail up -d
```

**4. Сгенерировать ключ приложения**

```bash
./vendor/bin/sail artisan key:generate
```

**5. Запустить миграции**

```bash
./vendor/bin/sail artisan migrate
```

## Основные команды

```bash
# Запустить контейнеры
./vendor/bin/sail up -d

# Остановить контейнеры
./vendor/bin/sail down

# Запустить миграции заново
./vendor/bin/sail artisan migrate:fresh
```
