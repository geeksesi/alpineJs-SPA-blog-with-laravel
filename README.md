# installation

## Env :

```
cp .env.sample .env
```

then change to :

```
DB_CONNECTION=sqlite
```

## Database :

```
touch database/database.sqlite
```

### Migration :

```
php artisan migrate
```

### Do you need default data ?!

```
php artisan db:seed
```

## View

```
npm run build
```

## Lunch

```
php artisan serve
```
