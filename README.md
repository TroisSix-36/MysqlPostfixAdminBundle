TroisSix\MysqlPostfixBundle
========================================

Helps you manage Postfix Admin MySQL tables.

See [postfixadmin.sourceforge.net](http://postfixadmin.sourceforge.net/) for more information and documentation about Postfix Admin.

Installation / Usage
--------------------

Install with composer :

```sh
$ composer require trois-six/mysql-postfix-admin-bundle~1.0
```

Configuration
---------------

1. Register the bundle in your `app/AppKernel.php`:

```php
public function registerBundles()
{
    ...
    new TroisSix\MysqlPostfixBundle\TroisSixMysqlPostfixBundle(),
    ...
}
```

2. Add to your `app/config/config.yml` the postfix database configuration : (replace the values by the ones you need)

```yaml
trois_six_mysql_postfix:
   connection:
       host:     database_host
       user:     database_user
       dbname:   database_name
       password: database_password
```
