## Descrição
Projeto desenvolvido para o processo seletivo da loldesign, de acordo com o problema passado desenvolvi um site simples e sem CRUD para que o usuario consiga simular suas cobranças com ligações entre qualquer cidade brasileira.

## Requerimentos
- [PHP 8](https://www.php.net/releases/8.0/en.php)
- [Node](https://nodejs.org/en/)
- [npm](https://www.npmjs.com/)
- [Composer](https://getcomposer.org/)
- (Opcional) [Docker](https://www.docker.com/)

## Instalação
- Clonando o repositório<br/>
`git clone https://github.com/L0ngsh/telzir.git`
- Entre na pasta<br>
- Copie o `example.env` para `.env` e coloque as informações necessarias no ambiente local para rodar
- Utilize `composer update` e `composer install`, para baixar as bibliotecas do laravel

## Iniciando com docker
<strong>Aviso:</strong> Para esta situação é importante saber que se caso esteja utilizando windows e quiser rodar por docker será necessário instalar o [WSL 2](https://docs.microsoft.com/pt-br/windows/wsl/install) pois o windows não tem suporte padrão para o sail<br>

- Após modificar o `.env` é necessário buildar o sail para que suba os containers corretamente<br>
`sail build --no-cache`
- Criando os containers e iniciando<br>
`sail up -d`
- Criando e populando as tabelas<br>
`sail migrate --seed`
- Compilando javascript e css<br>
    - `npm install`
    - `npm run dev`, caso queira compilar para desenvolvimento
    - `npm run prod`, caso quera compilar para produção
- Acesse a aplicação pelo navegador utilizando esta url:`http://localhost`

## Iniciando web server local
- Compilando javascript e css<br>
    - `npm install`
    - `npm run dev`, caso queira compilar para desenvolvimento
    - `npm run prod`, caso quera compilar para produção
- Para carrregar as mudanças do .env e limpar possivel cache do laravel<br>
`php artisan optimize`
- Para criar o banco e popular<br>
`php artisan migrate --seed`
- Para iniciar a apluicação<br>
`php artisan serve`
