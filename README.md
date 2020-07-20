# with()

[![Latest Stable Version](https://poser.pugx.org/adrianschubek/with/v)](//packagist.org/packages/adrianschubek/with)
[![License](https://poser.pugx.org/adrianschubek/with/license)](//packagist.org/packages/adrianschubek/with)

```php
function with($val, callable $callback = null) : $val | WithProxy
```
Passes `$val` through `$callback` and returns `$val`.    
Returns a `WithProxy` instead if `$callback` = null.

## Installation
```
composer require adrianschubek/with
```
## Example
#### Using Arrow function/Closure
```php
$user = with(UserRepository::findById(123), function (User $us) {
    $us->setBalance(10);
    $us->sendConfirmation();
});
```
```php
$deletedUser = with(UserRepository::findById(123), fn(User $user) => $user->deleteAccount());
```
#### Using Proxy
```php
// sendWelcomeMail() is a method of User.
$randomUser = with(UserRepository::createRandomUser())->sendWelcomeMail();
```
