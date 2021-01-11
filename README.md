# Transaction Source Enum Library

This is an AllDigitalRewards Transaction Source Enum Library.  
This centralizes the Source of Transactions for our application services.

## Install

Via Composer

``` bash
composer config repositories.transaction-source-enum vcs git clone git@bitbucket.org:alldigitalrewards/transaction-source-enum.git
$ composer require alldigitalrewards/transaction-source-enum
```

## Current Levels
```bash
    const AUTO_REDEMPTION = 'AUTO_REDEMPTION';
    const MARKETPLACE = 'MARKETPLACE';
    const GAMES = 'GAMES';
    const REDEMPTION_CAMPAIGNS = 'REDEMPTION_CAMPAIGNS';
```

## Testing

``` bash
$ composer test
```
