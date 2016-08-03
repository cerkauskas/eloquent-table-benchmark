# Eloquent table field presence benchmark

### Commands
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
