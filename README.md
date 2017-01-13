# symfony-benchmark
Projeto de estudo, benchmark de algumas versões de symfony para api em ambiente de prod.
Foi usado uma versão com microkernel, uma versão standard e a versão api-platform, sem nenhum aditivo, apenas bate e retorna a resposta do default controller.

#Rodando
* Para rodar instale primeiro o docker-compose
* instale composer em seu /usr/bin
* Execute docker-compose up -d
* Execute ./prepare-tests para que instale as dependencias de cada web
* Execute ./run-tests para rodar os testes de stress usando a alpine-bench

#Observaçes
* web1 = symfony 3 standard
* web2 = Diego Nobre symfony microkernel
* web3 = Api Platform
* Usa uma imagem de docker customizada, que contem pacotes de opcache e versão de apache escolhida
