# Eager Loading Belongs To Field for Laravel Nova
A Laravel Nova Belongs To field that respects Eager Loading

In current version of Laravel Nova Eager Loading is not working with Default BelongsTo Field

For a temporary workaround that does not break updatability:

We made a new field that extends the existing BelongsTo Class

## Installation

Install the package into a Laravel app that uses [Nova](https://nova.laravel.com) with Composer:

```bash
composer require treestoneit/belongs-to-field
```

## To use

Change all uses of `BelongsTo` to this `BelongsToField`.

If a proper fix is available in the future, just change it back to the nova one.

So resulting code resource should look like this:

```php
...
use Treestoneit\BelongsToField\BelongsToField;
...
...
public function fields(Request $request)
    {
        return [
        ...
            BelongsToField::make('User')
        ...
        ];
    }
...
... 
```

