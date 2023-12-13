# DOCUMENTACION API

# token

POST 
```
 http://127.0.0.1:8000/api/login 
```
BODY
```
   {
    "email": "dev@bryanluyo.site",
    "password": "123456"
  }
```
RESPONSE

```
    
   {
    "ok": true,
    "token_Type": "Bearer",
    "accessToken": "4|ANQNsd4cpYtYoG6BXMaww8i8uswYXMaUUX68cCw6154deecf",
    "user": {
        "id": 1,
        "name": "Bryan Andy Luyo",
        "email": "dev@bryanluyo.site",
        "created_at": null,
        "updated_at": null
    }
}

```
CURL

```

curl --location 'http://127.0.0.1:8000/api/login' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6IkV5dXhVZ25lMnozZ2c3NENSNUFnV0E9PSIsInZhbHVlIjoiTU9jcWxyaHpraFRGdldjWTl3SVpWNk9Bb2lROFdHUU92UDRVL29NQ2VYNXN0SVd1WXhWSkxIKzRaNjVzNFd6UnUxRWc2OTRHZUFOTGd4QmR5NnhObzVDR0FjcmxWWThsU3VFTWVFN1RUN1dyOFhKTnZld283Sjd1eWZTYlZxNm4iLCJtYWMiOiJhNjQyOTA1Y2Q4YzRkYmQzNWZjN2JkOTk1ODhjZjc4MWY0YWY1ZjNkNjM1YTUyNmRkNGZiYWQxYTgxOGQ0ZDc3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InU3cjZOc3JIK2NobmFiZGNzZ1RnNUE9PSIsInZhbHVlIjoiK21PeWNKVXg4cXo1ODE3dXpYS3VSbllsN2lWRmNlSHNEVW90OGEzSEg1ZTlTS01jejQrRjIydE02OW5qN3lNUHJPK2ViQ3M3M0FFMjFicDNqLzk4ZCtxazN6VmsxNm5mV21oUGIyRE5YRTJCRHhGNWhoYkNVRFpCaTFPZU9sY1AiLCJtYWMiOiI3OTg5OWJiMTQ3MjUwYmI0MGFjOGViYTUwYzY2M2M3ODAyZmE5NTFkYzJhYmVlNDhmY2RmOTExY2FhMWM0MDgzIiwidGFnIjoiIn0%3D' \
--data-raw '{
    "email": "dev@bryanluyo.site",
    "password": "123456"
}'

```


# API REST TASKS

AUTHORIZATION - BEARER TOKEN - HEADERS

```
   kEY : Authorization
   VALUE : Bearer 4|ANQNsd4cpYtYoG6BXMaww8i8uswYXMaUUX68cCw6154deecf
``` 

GET

```
 http://127.0.0.1:8000/api/task
``` 

RESPONSE

```
{
    "response": [
        {
            "id": 2,
            "title": "Eliminar registro en el App Task",
            "description": "se debe eliminar los registros que no se utlizan",
            "dni": "78098846",
            "due_date": "2023-12-13",
            "estate": "1"
        },
        {
            "id": 3,
            "title": "prueba 10",
            "description": "prueba 9",
            "dni": "78098846",
            "due_date": "2023-07-10",
            "estate": "1"
        }
    ]
}
``` 
CURL

```
curl --location 'http://127.0.0.1:8000/api/task' \
--header 'Authorization: Bearer 4|ANQNsd4cpYtYoG6BXMaww8i8uswYXMaUUX68cCw6154deecf' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6IkV5dXhVZ25lMnozZ2c3NENSNUFnV0E9PSIsInZhbHVlIjoiTU9jcWxyaHpraFRGdldjWTl3SVpWNk9Bb2lROFdHUU92UDRVL29NQ2VYNXN0SVd1WXhWSkxIKzRaNjVzNFd6UnUxRWc2OTRHZUFOTGd4QmR5NnhObzVDR0FjcmxWWThsU3VFTWVFN1RUN1dyOFhKTnZld283Sjd1eWZTYlZxNm4iLCJtYWMiOiJhNjQyOTA1Y2Q4YzRkYmQzNWZjN2JkOTk1ODhjZjc4MWY0YWY1ZjNkNjM1YTUyNmRkNGZiYWQxYTgxOGQ0ZDc3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InU3cjZOc3JIK2NobmFiZGNzZ1RnNUE9PSIsInZhbHVlIjoiK21PeWNKVXg4cXo1ODE3dXpYS3VSbllsN2lWRmNlSHNEVW90OGEzSEg1ZTlTS01jejQrRjIydE02OW5qN3lNUHJPK2ViQ3M3M0FFMjFicDNqLzk4ZCtxazN6VmsxNm5mV21oUGIyRE5YRTJCRHhGNWhoYkNVRFpCaTFPZU9sY1AiLCJtYWMiOiI3OTg5OWJiMTQ3MjUwYmI0MGFjOGViYTUwYzY2M2M3ODAyZmE5NTFkYzJhYmVlNDhmY2RmOTExY2FhMWM0MDgzIiwidGFnIjoiIn0%3D'
```

POST - ADD

```
http://127.0.0.1:8000/api/task
```
BODY
```
   {
    "title" : "Esto es una prueba",
    "description" : "descripcion de la prueba",
    "dni" : "89849393",
    "due_date" : "2023-12-20"
}
```
RESPONSE

```
    
{
    "ok": true,
    "response": {
        "title": "Esto es una prueba",
        "description": "descripcion de la prueba",
        "dni": "89849393",
        "due_date": "2023-12-20",
        "id": 4
    }
}

```


CURL

```
curl --location 'http://127.0.0.1:8000/api/task' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer 4|ANQNsd4cpYtYoG6BXMaww8i8uswYXMaUUX68cCw6154deecf' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6IkV5dXhVZ25lMnozZ2c3NENSNUFnV0E9PSIsInZhbHVlIjoiTU9jcWxyaHpraFRGdldjWTl3SVpWNk9Bb2lROFdHUU92UDRVL29NQ2VYNXN0SVd1WXhWSkxIKzRaNjVzNFd6UnUxRWc2OTRHZUFOTGd4QmR5NnhObzVDR0FjcmxWWThsU3VFTWVFN1RUN1dyOFhKTnZld283Sjd1eWZTYlZxNm4iLCJtYWMiOiJhNjQyOTA1Y2Q4YzRkYmQzNWZjN2JkOTk1ODhjZjc4MWY0YWY1ZjNkNjM1YTUyNmRkNGZiYWQxYTgxOGQ0ZDc3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InU3cjZOc3JIK2NobmFiZGNzZ1RnNUE9PSIsInZhbHVlIjoiK21PeWNKVXg4cXo1ODE3dXpYS3VSbllsN2lWRmNlSHNEVW90OGEzSEg1ZTlTS01jejQrRjIydE02OW5qN3lNUHJPK2ViQ3M3M0FFMjFicDNqLzk4ZCtxazN6VmsxNm5mV21oUGIyRE5YRTJCRHhGNWhoYkNVRFpCaTFPZU9sY1AiLCJtYWMiOiI3OTg5OWJiMTQ3MjUwYmI0MGFjOGViYTUwYzY2M2M3ODAyZmE5NTFkYzJhYmVlNDhmY2RmOTExY2FhMWM0MDgzIiwidGFnIjoiIn0%3D' \
--data '{
    "title" : "Esto es una prueba",
    "description" : "descripcion de la prueba",
    "dni" : "89849393",
    "due_date" : "2023-12-20"
}'
```

PUT - UPDATE

```
http://127.0.0.1:8000/api/task/{id}
```
BODY
```
   {
    "title" : "Esto es una prueba",
    "description" : "descripcion de la prueba",
    "dni" : "89849393",
    "due_date" : "2023-12-20"
}
```
RESPONSE

```
    
{
    "ok": true,
    "response": {
        "title": "Esto es una prueba",
        "description": "descripcion de la prueba",
        "dni": "89849393",
        "due_date": "2023-12-20",
        "id": 4
    }
}

```
 CURL

```

curl --location --request PUT 'http://127.0.0.1:8000/api/task/2' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer 4|ANQNsd4cpYtYoG6BXMaww8i8uswYXMaUUX68cCw6154deecf' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6IkV5dXhVZ25lMnozZ2c3NENSNUFnV0E9PSIsInZhbHVlIjoiTU9jcWxyaHpraFRGdldjWTl3SVpWNk9Bb2lROFdHUU92UDRVL29NQ2VYNXN0SVd1WXhWSkxIKzRaNjVzNFd6UnUxRWc2OTRHZUFOTGd4QmR5NnhObzVDR0FjcmxWWThsU3VFTWVFN1RUN1dyOFhKTnZld283Sjd1eWZTYlZxNm4iLCJtYWMiOiJhNjQyOTA1Y2Q4YzRkYmQzNWZjN2JkOTk1ODhjZjc4MWY0YWY1ZjNkNjM1YTUyNmRkNGZiYWQxYTgxOGQ0ZDc3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InU3cjZOc3JIK2NobmFiZGNzZ1RnNUE9PSIsInZhbHVlIjoiK21PeWNKVXg4cXo1ODE3dXpYS3VSbllsN2lWRmNlSHNEVW90OGEzSEg1ZTlTS01jejQrRjIydE02OW5qN3lNUHJPK2ViQ3M3M0FFMjFicDNqLzk4ZCtxazN6VmsxNm5mV21oUGIyRE5YRTJCRHhGNWhoYkNVRFpCaTFPZU9sY1AiLCJtYWMiOiI3OTg5OWJiMTQ3MjUwYmI0MGFjOGViYTUwYzY2M2M3ODAyZmE5NTFkYzJhYmVlNDhmY2RmOTExY2FhMWM0MDgzIiwidGFnIjoiIn0%3D' \
--data '{
    "title" : "Esto es una prueba 5",
    "description" : "descripcion de la prueba",
    "dni" : "89849393",
    "due_date" : "2023-12-20"
}'

```

DELETE - DESTROY

```
http://127.0.0.1:8000/api/task/{id}
```

RESPONSE

```
    
{
    "ok": true,
    "response": true
}

```
CURL

```
curl --location --request DELETE 'http://127.0.0.1:8000/api/task/2' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer 4|ANQNsd4cpYtYoG6BXMaww8i8uswYXMaUUX68cCw6154deecf' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6IkV5dXhVZ25lMnozZ2c3NENSNUFnV0E9PSIsInZhbHVlIjoiTU9jcWxyaHpraFRGdldjWTl3SVpWNk9Bb2lROFdHUU92UDRVL29NQ2VYNXN0SVd1WXhWSkxIKzRaNjVzNFd6UnUxRWc2OTRHZUFOTGd4QmR5NnhObzVDR0FjcmxWWThsU3VFTWVFN1RUN1dyOFhKTnZld283Sjd1eWZTYlZxNm4iLCJtYWMiOiJhNjQyOTA1Y2Q4YzRkYmQzNWZjN2JkOTk1ODhjZjc4MWY0YWY1ZjNkNjM1YTUyNmRkNGZiYWQxYTgxOGQ0ZDc3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InU3cjZOc3JIK2NobmFiZGNzZ1RnNUE9PSIsInZhbHVlIjoiK21PeWNKVXg4cXo1ODE3dXpYS3VSbllsN2lWRmNlSHNEVW90OGEzSEg1ZTlTS01jejQrRjIydE02OW5qN3lNUHJPK2ViQ3M3M0FFMjFicDNqLzk4ZCtxazN6VmsxNm5mV21oUGIyRE5YRTJCRHhGNWhoYkNVRFpCaTFPZU9sY1AiLCJtYWMiOiI3OTg5OWJiMTQ3MjUwYmI0MGFjOGViYTUwYzY2M2M3ODAyZmE5NTFkYzJhYmVlNDhmY2RmOTExY2FhMWM0MDgzIiwidGFnIjoiIn0%3D' \
--data ''
```

GET TASK - SHOW

```
http://127.0.0.1:8000/api/task/{id}
```

RESPONSE

```

{
    "ok": true,
    "response": {
        "id": 3,
        "title": "prueba 10",
        "description": "prueba 9",
        "dni": "78098846",
        "due_date": "2023-07-10",
        "estate": "1"
    }
}

```

CURL

```
curl --location 'http://127.0.0.1:8000/api/task/3' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer 4|ANQNsd4cpYtYoG6BXMaww8i8uswYXMaUUX68cCw6154deecf' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6IkV5dXhVZ25lMnozZ2c3NENSNUFnV0E9PSIsInZhbHVlIjoiTU9jcWxyaHpraFRGdldjWTl3SVpWNk9Bb2lROFdHUU92UDRVL29NQ2VYNXN0SVd1WXhWSkxIKzRaNjVzNFd6UnUxRWc2OTRHZUFOTGd4QmR5NnhObzVDR0FjcmxWWThsU3VFTWVFN1RUN1dyOFhKTnZld283Sjd1eWZTYlZxNm4iLCJtYWMiOiJhNjQyOTA1Y2Q4YzRkYmQzNWZjN2JkOTk1ODhjZjc4MWY0YWY1ZjNkNjM1YTUyNmRkNGZiYWQxYTgxOGQ0ZDc3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InU3cjZOc3JIK2NobmFiZGNzZ1RnNUE9PSIsInZhbHVlIjoiK21PeWNKVXg4cXo1ODE3dXpYS3VSbllsN2lWRmNlSHNEVW90OGEzSEg1ZTlTS01jejQrRjIydE02OW5qN3lNUHJPK2ViQ3M3M0FFMjFicDNqLzk4ZCtxazN6VmsxNm5mV21oUGIyRE5YRTJCRHhGNWhoYkNVRFpCaTFPZU9sY1AiLCJtYWMiOiI3OTg5OWJiMTQ3MjUwYmI0MGFjOGViYTUwYzY2M2M3ODAyZmE5NTFkYzJhYmVlNDhmY2RmOTExY2FhMWM0MDgzIiwidGFnIjoiIn0%3D' \
--data ''
```
# DOCUMENTACION API

# token

POST 
```
 http://127.0.0.1:8000/api/login 
```
BODY
```
   {
    "email": "dev@bryanluyo.site",
    "password": "123456"
  }
```
RESPONSE

```
    
   {
    "ok": true,
    "token_Type": "Bearer",
    "accessToken": "4|ANQNsd4cpYtYoG6BXMaww8i8uswYXMaUUX68cCw6154deecf",
    "user": {
        "id": 1,
        "name": "Bryan Andy Luyo",
        "email": "dev@bryanluyo.site",
        "created_at": null,
        "updated_at": null
    }
}

```
CURL

```

curl --location 'http://127.0.0.1:8000/api/login' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6IkV5dXhVZ25lMnozZ2c3NENSNUFnV0E9PSIsInZhbHVlIjoiTU9jcWxyaHpraFRGdldjWTl3SVpWNk9Bb2lROFdHUU92UDRVL29NQ2VYNXN0SVd1WXhWSkxIKzRaNjVzNFd6UnUxRWc2OTRHZUFOTGd4QmR5NnhObzVDR0FjcmxWWThsU3VFTWVFN1RUN1dyOFhKTnZld283Sjd1eWZTYlZxNm4iLCJtYWMiOiJhNjQyOTA1Y2Q4YzRkYmQzNWZjN2JkOTk1ODhjZjc4MWY0YWY1ZjNkNjM1YTUyNmRkNGZiYWQxYTgxOGQ0ZDc3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InU3cjZOc3JIK2NobmFiZGNzZ1RnNUE9PSIsInZhbHVlIjoiK21PeWNKVXg4cXo1ODE3dXpYS3VSbllsN2lWRmNlSHNEVW90OGEzSEg1ZTlTS01jejQrRjIydE02OW5qN3lNUHJPK2ViQ3M3M0FFMjFicDNqLzk4ZCtxazN6VmsxNm5mV21oUGIyRE5YRTJCRHhGNWhoYkNVRFpCaTFPZU9sY1AiLCJtYWMiOiI3OTg5OWJiMTQ3MjUwYmI0MGFjOGViYTUwYzY2M2M3ODAyZmE5NTFkYzJhYmVlNDhmY2RmOTExY2FhMWM0MDgzIiwidGFnIjoiIn0%3D' \
--data-raw '{
    "email": "dev@bryanluyo.site",
    "password": "123456"
}'

```


# API REST TASKS

AUTHORIZATION - BEARER TOKEN - HEADERS

```
   kEY : Authorization
   VALUE : Bearer 4|ANQNsd4cpYtYoG6BXMaww8i8uswYXMaUUX68cCw6154deecf
``` 

GET

```
 http://127.0.0.1:8000/api/task
``` 

RESPONSE

```
{
    "response": [
        {
            "id": 2,
            "title": "Eliminar registro en el App Task",
            "description": "se debe eliminar los registros que no se utlizan",
            "dni": "78098846",
            "due_date": "2023-12-13",
            "estate": "1"
        },
        {
            "id": 3,
            "title": "prueba 10",
            "description": "prueba 9",
            "dni": "78098846",
            "due_date": "2023-07-10",
            "estate": "1"
        }
    ]
}
``` 
CURL

```
curl --location 'http://127.0.0.1:8000/api/task' \
--header 'Authorization: Bearer 4|ANQNsd4cpYtYoG6BXMaww8i8uswYXMaUUX68cCw6154deecf' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6IkV5dXhVZ25lMnozZ2c3NENSNUFnV0E9PSIsInZhbHVlIjoiTU9jcWxyaHpraFRGdldjWTl3SVpWNk9Bb2lROFdHUU92UDRVL29NQ2VYNXN0SVd1WXhWSkxIKzRaNjVzNFd6UnUxRWc2OTRHZUFOTGd4QmR5NnhObzVDR0FjcmxWWThsU3VFTWVFN1RUN1dyOFhKTnZld283Sjd1eWZTYlZxNm4iLCJtYWMiOiJhNjQyOTA1Y2Q4YzRkYmQzNWZjN2JkOTk1ODhjZjc4MWY0YWY1ZjNkNjM1YTUyNmRkNGZiYWQxYTgxOGQ0ZDc3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InU3cjZOc3JIK2NobmFiZGNzZ1RnNUE9PSIsInZhbHVlIjoiK21PeWNKVXg4cXo1ODE3dXpYS3VSbllsN2lWRmNlSHNEVW90OGEzSEg1ZTlTS01jejQrRjIydE02OW5qN3lNUHJPK2ViQ3M3M0FFMjFicDNqLzk4ZCtxazN6VmsxNm5mV21oUGIyRE5YRTJCRHhGNWhoYkNVRFpCaTFPZU9sY1AiLCJtYWMiOiI3OTg5OWJiMTQ3MjUwYmI0MGFjOGViYTUwYzY2M2M3ODAyZmE5NTFkYzJhYmVlNDhmY2RmOTExY2FhMWM0MDgzIiwidGFnIjoiIn0%3D'
```

POST - ADD

```
http://127.0.0.1:8000/api/task
```
BODY
```
   {
    "title" : "Esto es una prueba",
    "description" : "descripcion de la prueba",
    "dni" : "89849393",
    "due_date" : "2023-12-20"
}
```
RESPONSE

```
    
{
    "ok": true,
    "response": {
        "title": "Esto es una prueba",
        "description": "descripcion de la prueba",
        "dni": "89849393",
        "due_date": "2023-12-20",
        "id": 4
    }
}

```


CURL

```
curl --location 'http://127.0.0.1:8000/api/task' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer 4|ANQNsd4cpYtYoG6BXMaww8i8uswYXMaUUX68cCw6154deecf' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6IkV5dXhVZ25lMnozZ2c3NENSNUFnV0E9PSIsInZhbHVlIjoiTU9jcWxyaHpraFRGdldjWTl3SVpWNk9Bb2lROFdHUU92UDRVL29NQ2VYNXN0SVd1WXhWSkxIKzRaNjVzNFd6UnUxRWc2OTRHZUFOTGd4QmR5NnhObzVDR0FjcmxWWThsU3VFTWVFN1RUN1dyOFhKTnZld283Sjd1eWZTYlZxNm4iLCJtYWMiOiJhNjQyOTA1Y2Q4YzRkYmQzNWZjN2JkOTk1ODhjZjc4MWY0YWY1ZjNkNjM1YTUyNmRkNGZiYWQxYTgxOGQ0ZDc3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InU3cjZOc3JIK2NobmFiZGNzZ1RnNUE9PSIsInZhbHVlIjoiK21PeWNKVXg4cXo1ODE3dXpYS3VSbllsN2lWRmNlSHNEVW90OGEzSEg1ZTlTS01jejQrRjIydE02OW5qN3lNUHJPK2ViQ3M3M0FFMjFicDNqLzk4ZCtxazN6VmsxNm5mV21oUGIyRE5YRTJCRHhGNWhoYkNVRFpCaTFPZU9sY1AiLCJtYWMiOiI3OTg5OWJiMTQ3MjUwYmI0MGFjOGViYTUwYzY2M2M3ODAyZmE5NTFkYzJhYmVlNDhmY2RmOTExY2FhMWM0MDgzIiwidGFnIjoiIn0%3D' \
--data '{
    "title" : "Esto es una prueba",
    "description" : "descripcion de la prueba",
    "dni" : "89849393",
    "due_date" : "2023-12-20"
}'
```

PUT - UPDATE

```
http://127.0.0.1:8000/api/task/{id}
```
BODY
```
   {
    "title" : "Esto es una prueba",
    "description" : "descripcion de la prueba",
    "dni" : "89849393",
    "due_date" : "2023-12-20"
}
```
RESPONSE

```
    
{
    "ok": true,
    "response": {
        "title": "Esto es una prueba",
        "description": "descripcion de la prueba",
        "dni": "89849393",
        "due_date": "2023-12-20",
        "id": 4
    }
}

```
 CURL

```

curl --location --request PUT 'http://127.0.0.1:8000/api/task/2' \
--header 'Accept: application/json' \
--header 'Content-Type: application/json' \
--header 'Authorization: Bearer 4|ANQNsd4cpYtYoG6BXMaww8i8uswYXMaUUX68cCw6154deecf' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6IkV5dXhVZ25lMnozZ2c3NENSNUFnV0E9PSIsInZhbHVlIjoiTU9jcWxyaHpraFRGdldjWTl3SVpWNk9Bb2lROFdHUU92UDRVL29NQ2VYNXN0SVd1WXhWSkxIKzRaNjVzNFd6UnUxRWc2OTRHZUFOTGd4QmR5NnhObzVDR0FjcmxWWThsU3VFTWVFN1RUN1dyOFhKTnZld283Sjd1eWZTYlZxNm4iLCJtYWMiOiJhNjQyOTA1Y2Q4YzRkYmQzNWZjN2JkOTk1ODhjZjc4MWY0YWY1ZjNkNjM1YTUyNmRkNGZiYWQxYTgxOGQ0ZDc3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InU3cjZOc3JIK2NobmFiZGNzZ1RnNUE9PSIsInZhbHVlIjoiK21PeWNKVXg4cXo1ODE3dXpYS3VSbllsN2lWRmNlSHNEVW90OGEzSEg1ZTlTS01jejQrRjIydE02OW5qN3lNUHJPK2ViQ3M3M0FFMjFicDNqLzk4ZCtxazN6VmsxNm5mV21oUGIyRE5YRTJCRHhGNWhoYkNVRFpCaTFPZU9sY1AiLCJtYWMiOiI3OTg5OWJiMTQ3MjUwYmI0MGFjOGViYTUwYzY2M2M3ODAyZmE5NTFkYzJhYmVlNDhmY2RmOTExY2FhMWM0MDgzIiwidGFnIjoiIn0%3D' \
--data '{
    "title" : "Esto es una prueba 5",
    "description" : "descripcion de la prueba",
    "dni" : "89849393",
    "due_date" : "2023-12-20"
}'

```

DELETE - DESTROY

```
http://127.0.0.1:8000/api/task/{id}
```

RESPONSE

```
    
{
    "ok": true,
    "response": true
}

```
CURL

```
curl --location --request DELETE 'http://127.0.0.1:8000/api/task/2' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer 4|ANQNsd4cpYtYoG6BXMaww8i8uswYXMaUUX68cCw6154deecf' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6IkV5dXhVZ25lMnozZ2c3NENSNUFnV0E9PSIsInZhbHVlIjoiTU9jcWxyaHpraFRGdldjWTl3SVpWNk9Bb2lROFdHUU92UDRVL29NQ2VYNXN0SVd1WXhWSkxIKzRaNjVzNFd6UnUxRWc2OTRHZUFOTGd4QmR5NnhObzVDR0FjcmxWWThsU3VFTWVFN1RUN1dyOFhKTnZld283Sjd1eWZTYlZxNm4iLCJtYWMiOiJhNjQyOTA1Y2Q4YzRkYmQzNWZjN2JkOTk1ODhjZjc4MWY0YWY1ZjNkNjM1YTUyNmRkNGZiYWQxYTgxOGQ0ZDc3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InU3cjZOc3JIK2NobmFiZGNzZ1RnNUE9PSIsInZhbHVlIjoiK21PeWNKVXg4cXo1ODE3dXpYS3VSbllsN2lWRmNlSHNEVW90OGEzSEg1ZTlTS01jejQrRjIydE02OW5qN3lNUHJPK2ViQ3M3M0FFMjFicDNqLzk4ZCtxazN6VmsxNm5mV21oUGIyRE5YRTJCRHhGNWhoYkNVRFpCaTFPZU9sY1AiLCJtYWMiOiI3OTg5OWJiMTQ3MjUwYmI0MGFjOGViYTUwYzY2M2M3ODAyZmE5NTFkYzJhYmVlNDhmY2RmOTExY2FhMWM0MDgzIiwidGFnIjoiIn0%3D' \
--data ''
```

GET TASK - SHOW

```
http://127.0.0.1:8000/api/task/{id}
```

RESPONSE

```

{
    "ok": true,
    "response": {
        "id": 3,
        "title": "prueba 10",
        "description": "prueba 9",
        "dni": "78098846",
        "due_date": "2023-07-10",
        "estate": "1"
    }
}

```

CURL

```
curl --location 'http://127.0.0.1:8000/api/task/3' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer 4|ANQNsd4cpYtYoG6BXMaww8i8uswYXMaUUX68cCw6154deecf' \
--header 'Cookie: XSRF-TOKEN=eyJpdiI6IkV5dXhVZ25lMnozZ2c3NENSNUFnV0E9PSIsInZhbHVlIjoiTU9jcWxyaHpraFRGdldjWTl3SVpWNk9Bb2lROFdHUU92UDRVL29NQ2VYNXN0SVd1WXhWSkxIKzRaNjVzNFd6UnUxRWc2OTRHZUFOTGd4QmR5NnhObzVDR0FjcmxWWThsU3VFTWVFN1RUN1dyOFhKTnZld283Sjd1eWZTYlZxNm4iLCJtYWMiOiJhNjQyOTA1Y2Q4YzRkYmQzNWZjN2JkOTk1ODhjZjc4MWY0YWY1ZjNkNjM1YTUyNmRkNGZiYWQxYTgxOGQ0ZDc3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InU3cjZOc3JIK2NobmFiZGNzZ1RnNUE9PSIsInZhbHVlIjoiK21PeWNKVXg4cXo1ODE3dXpYS3VSbllsN2lWRmNlSHNEVW90OGEzSEg1ZTlTS01jejQrRjIydE02OW5qN3lNUHJPK2ViQ3M3M0FFMjFicDNqLzk4ZCtxazN6VmsxNm5mV21oUGIyRE5YRTJCRHhGNWhoYkNVRFpCaTFPZU9sY1AiLCJtYWMiOiI3OTg5OWJiMTQ3MjUwYmI0MGFjOGViYTUwYzY2M2M3ODAyZmE5NTFkYzJhYmVlNDhmY2RmOTExY2FhMWM0MDgzIiwidGFnIjoiIn0%3D' \
--data ''
```
