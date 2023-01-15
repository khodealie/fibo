# Sheypoor technical test
## description:
- Our sequence was this:
  - 0, 1, 1, 2, 3, 5, 8, 13, 12, 7, 10, 8, 9, ...
- If we continue the sequence, we will reach something like this:
  - 0, 1, 1, 
  - 2, 3, 5, 8, 13, 12, 7, 10, 8, 9, 17, 17, 16, 15, 13, 10, 5, 6, 11, 8, 10, 9, 10, 10,
  - 2, 3, 5, 8, 13, 12, 7, 10, 8, 9, 17, 17, 16, 15, 13, 10, 5, 6, 11, 8, 10, 9, 10, 10,
  - ...
- As it is known, we have a period of 24 numbers and the best way to get the value of the desired sentence is to calculate its remainder and find the sentence in the list.
- You can see the desired function in **app/Fibo.php**


# installation:
## via composer:
- To install and test the program, you must first have Composer (see [this](https://getcomposer.org/download/))
- After installing Composer, the project will be installed by typing the command below (**php >= 8 needed**):

```bash
composer install
```
- To test in the terminal
```bash
php index.php
```
- Also, according to the document, 3 test cases have been written, which you can execute with the following command
```bash
./vendor/bin/phpunit
```

## via docker:
- To use the project on Docker, first install Docker (see [this](https://docs.docker.com/get-docker/))
- After installation, first create an image:
```bash
docker image build -t fibo:latest .
```

- then run it :
```bash
docker run -it fibo
```