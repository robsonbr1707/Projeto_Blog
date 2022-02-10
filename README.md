# Projeto_Blog
<div>
    <h2>Este Projeto tem alguns Padrões de sites comums, como um CRUD de registros, niveis de acesso para determinado usuario e comentários.<h2>
</div>
<div>
    <h2>Antes De Iniciar</h2>
    <h4>Está Aplicação foi feita com Laravel 8, verifique se você está na raiz do projeto para inserir os comandos composer</h4>
    <p>composer install</p>
    <p>composer update</p>
<hr>
    <h3>No arquivo .env.example renomeie para .env e verifque o nome do banco.</h3>
    <h3>insira o comando artisan para gerar uma chave</h3>
    <p>php artisan key:generate</p>
    <p>php artisan migrate</p>
</div>

<div>
    <h2>Iniciando o Projeto</h2>
    <p>php artisan serve</p>
</div>

<div>
    <h2>Niveis De Acesso</h2>
    <h3>Para Mudar o nivel de acesso vá o seu banco de dados na tabela users coluna autorize(enum) e mude quando quiser.</h3>
    <p><strong>Admin:</strong> Tem acesso para fazer tudo, Criar registros, Posts, Editar e Excluir. Também consegue exluir Comentários de outros Usuarios.</p>
<hr>
    <p><strong>Mod:</strong> Tem acesso para Editar Registros e exluir Comentários de outros Usuarios.</p>
<hr>
    <p><strong>User:</strong> Usuario Comum, Somente fazer comentarios e excluir o Próprio.</p>
</div>


