# FizzBuzz

Prints the numbers from 1 to 100. But for multiples of three print Fizz instead of the number and for the multiples of five print Buzz. For numbers which are multiples of both three and five print FizzBuzz.


### Sample-Output
```
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
16
17
Fizz
19
Buzz
... etc up to 100
```


### Prerequisites
- PHP (version 8.2 or higher)
- Composer (for dependency management)
- docker 
- docker-compose

### Installation 
1. Clone the repo or download the source code
2. Navigate to directory
3. use docker-compose to install packages

```
docker-compose run --rm composer install
```

### Usage

To use the application run the console php file like

```
docker-compose run --rm php
```

you should get prompt like the following 

```
Enter the starting number: 
Enter the ending number:
```

### Run tests 

```
docker-compose run --rm php vendor/bin/phpunit
```
