# Eloquent table field presence benchmark
This is code, that I used to perform benchmark test.
More on it [on my blog](http://tomas.cerkauskas.lt/is-it-worth-to-set-eloquent-fields-explicitly/)

## Commands
> php artisan benchmark:table-names {amount}

If no amount is specified, then it will become 1000.

## Installation
**Step 1**: Clone repository
> git clone https://github.com/cerkauskas/eloquent-table-benchmark.git && cd eloquent-table-benchmark

**Step 2**: Launch VirtualBox
> vagrant up

**Step 3**: Get inside VirtualBox
> vagrant ssh

**Step 4**: install dependencies
> composer install

**Step 5**: make .env
> cp .env.example .env

**Step 6**: generate key
> php artisan key:generate

**Step 7**: perform benchmark test with million entries
> php artisan benchmark:table-names 1000000
