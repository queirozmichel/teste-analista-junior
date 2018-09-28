Informações importantes:

O arquivo ".env" não foi enviado, portanto deve ser criado ou movido de algum outro projeto para a pasta raiz.
A pasta "vendor" também deve ser criada usando o comando "composer install".
Após isso é só criar o BD e executar o comando migrate para que sejam criadas as tabelas necessárias.


Itens faltantes:

Senti um pouco de dificuldade ao implementar o login via oAuth2, sendo assim implementei o login do
próprio framework Laravel.
Deixei de criar também o campo para adição de registros de endereços, no qual seria uma tabela 1:N, e como demandaria um pouco mais tempo tanto para projetar no backend quanto as telas do front devido as alterações possíveis de se fazer em qualquer endereço como propôs, eu não implementei.
Sobre a opção de apagar registros parte essencial de um CRUD, comecei a implementar no backend mas também não consegui terminar a tempo.


Comentário sobre o que foi feito:

O projeto se inicia com uma tela no qual mostra um carrossel de imagens, exemplificando uma tela inicial
de um site qualquer.
Nesta tela é possivel logar(caso já tenha um cadastro criado) ou registrar um novo cadastro.
Após fazer o login ou se registrar como novo, a próxima tela já mostra as informações de cadastro pertinente ao usuário logado e de todos os outros que já existam.
Em cada registro é possível clicar no ícone do "lápis" para ser enviado para outra tela e assim editar as informações pessoais.
É possível também adicionar filmes no qual o usuário já viu clicando no botão "Adicionar Filme" disposto na tela em que lista os registros. Assim é possível adicionar todas as informações referentes ao filmes.(neste caso é possivel adicionar quantos filmes quiser porém, um por vez).
É importante salientar que cada filme salvo é referenciado na tabela do banco de dados para o usuário que está logado no momento, usando assim uma chave estrangeira na tabela "filme".
Ao adicionar cada filme o usuário é direcionado de forma automática para a tela que lista todas as informações de registros incluindo agora informações sobre os filmes de cada usuário.
Foi implementado também uma barra no qual o usuário pode visualizar em qual página se encontra e caso queira é possível clicar em algum dos hiperlinks para voltar em alguma das páginas anteriores.
Em todas as telas existe a possibilidade do usuário voltar a página inicial e também realizar o seu logout.

Melhorias que podem ser feitas:

Primeiramente com relação ao design das páginas, deixar mais agradável aos olhos do usuário.
No campo onde é mostrado as informaçõs dos registros, separar melhor os registros para fácil visualização das informações, como por exemplo mostrar as informações de filmes em uma outra tela deixando assim mais organizada, principalmente devido ao campo de sinopse que tende a receber mais caracteres.

Considerações finais:

Tentei desenvolver da melhor forma possível considerando o tempo disposto e o conhecimento sobre o Lavarel, tive alguns contratempos e infelizmente não consegui completar o mesmo em 100%.
Gostei muito do desafio, inclusive já comprei um curso de Laravel para se aprofundar mais no framework, e também vou continuar para satisfação própria o desenvolvimento dele para completar tudo que foi pedido da maneira ideal.

Foi usado:

Framework Bootstrap, Sublime e o gerenciador de mysql phpMyAdmin além do sistema operacional Linux(Ubuntu).
