# installation

## Composer 
```
composer i
```

## Env :

```
cp .env.sample .env
```

then change to :

```
DB_CONNECTION=sqlite
```

## Storage :
```
php artisan storage:link
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
npm run dev
```

## Lunch

```
php artisan serve
```
