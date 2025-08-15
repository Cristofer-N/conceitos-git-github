# Conceitos de git e Github
este arquivo tem como objetivo armazenar os comandos basicos para utilização de git e Github 

## configuração inicial
Rode os comando abaixo no terminal (cmd) do seu computador.
```bash
    git config --global user.name "Cristofer Nicolau Camargo"

    git config --global user.email cristofer.n.camargo@hotmail.com


```

## Comandos do git
Para iniciar o GIT em uma pasta do computador utilizamos do init.
```bash
    git init

```

Para vincular o projeto ao github utilizamos o comando **remote**, basta o repósitorio estar criado no github e seguir a segunda opção da lista de comandos que aparece no site 
**IMPORTANTE** Depois do remote deve ser executado outros 2 comandos da pagina.
```bash
    git remote add origin <  url_repositorio_do_Github >
```

Para verificar a situação do repositorio(pasta) usamos o **Status** a qualquer momento.
```bash

    git status

```

Para adicionar o arquivo utilizamos o **add**
```bash
    git add .
```

Para comentar o Arquivo salvo utiizamos o **Commit**
```bash
    git commit -m ""
```


Para baixar as alterações que estão apenas no github utilizamos o comando **Pull**<br>
**IMPORTANTE:** Sempre baixar a ultima versão da nuvem antes de enviar a atual do computador.
```bash
    git pull
```

Para enviar os commits do pc para o github utilizamos o comando **Push**<br>
```bash
    git push
```

Para baixar o repositorio do github para o computador utilizamos o comando **Clone**<br>
```bash
    git clone < url_link_do_repositorio >
```

