## Jobs app

I decided to use Laravel 6 and MySql.

I used a built-in server, start it with

`php artisan serve`

I also created needed migrations, run them with
 
`php artisan migrate`

---

In `.env` file besides `APP_NAME` and `APP_URL` and parameters for the database, I changed some mail and queue sections as well, cause I decided to use queues for sending emails.

```
QUEUE_CONNECTION=database
```
and

```
MAIL_DRIVER=smtp
MAIL_HOST=smtp.googlemail.com
MAIL_PORT=465
MAIL_ENCRYPTION=ssl
```

plus `MAIL_USERNAME` and `MAIL_PASSWORD`

---

class `JobOfferMailService` has a moderator email property (at the moment my email is set).


