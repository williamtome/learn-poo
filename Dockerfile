FROM php:latest
COPY . /usr/src/poo
WORKDIR /usr/src/poo
CMD [ "php", "./src/Conta.php" ]