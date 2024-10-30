# Тестовое задание

### Использование REST методов и примеры url'ов
- GET: /catalog/ — получить каталог товаров;
```
  Query Params
- page - страница каталога;
- min - минисальная ценна для фильтрации по ценне;
- max - максимальная ценна для фильтрации по ценне;
- characteristic - массив id карактеристик для фильтрации;
```

- GET: /product/{id}/feedback — получить отзыв топара по его id;

- POST: /product/{id}/add-feedback — создать отзыв топару с id;

```
    Body Params
    {
        "feedback": "test text"
    }
```

### Инструкции по установке c помощью Docker

* Для запуска контейнера необходимо вексти **docker-compose up -d --build**. Далее нужно зайти в контейнер с помошью **sudo docker exec -t -i backend /bin/bash**
и выполнить команды **php composer.phar install** и **php artisan migrate:fresh --seed** после чего проэкт будет доступен по адрессу **http://127.0.0.1:8001**


