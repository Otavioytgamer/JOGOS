<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Site de Notícias</title>

<style>


*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, sans-serif;
}


body{
   background-color: #dfdfdf;
   font-family: 'Courier New', Courier, monospace;
   color: #333333;

   display: flex;
   flex-direction: column;
   min-height: 100vh;
}


header{
    background:#222;
    color:white;
    padding:20px;
    text-align:center;
}


nav ul{
  padding: 10px;

  display: flex;
  justify-content: center;
  gap: 30px
}

nav a{
    color:white;
    text-decoration:none;
    font-weight:bold;
}

nav a:hover{
    text-decoration:underline;
}


main{
    display:flex;
    flex-wrap:wrap;
    gap:20px;
    padding:20px;
}


article{
   flex: 1;
   min-width: 300px;
   background-color: white;
   padding: 15px;
   border-radius: 8px;
   box-shadow: 0 4px 8px rgba(0,0,0,0.1);

}

article:hover{
    transform:scale(1.03);
}


footer{
    background:#222;
    color:white;
    text-align:center;
    padding:15px;
}
main{
    diplay: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;

    flex: 1;
}

main{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    padding: 20px;

    align-content: flex-start;

}

</style>
</head>

<body>

<header>
<h1>Portal de Notícias</h1>
</header>

<nav>
<ul>
<li><a href="#">Início</a></li>
<li><a href="#">Esportes</a></li>
<li><a href="#">Tecnologia</a></li>
<li><a href="#">Contato</a></li>
</ul>
</nav>

<main>

<article>
<h2>Notícia 1</h2>
<p>Esta é uma notícia de exemplo. Aqui você pode colocar qualquer conteúdo.</p>
</article>

<article>
<h2>Notícia 2</h2>
<p>Outro exemplo de notícia exibida em formato de card.</p>
</article>

<article>
<h2>Notícia 3</h2>
<p>Os cards ficam lado a lado graças ao Flexbox.</p>
</article>

<article>
<h2>Notícia 4</h2>
<p>O layout também se adapta se tiver mais notícias.</p>
</article>

</main>

<footer>
<p>© 2026 - Meu Site de Notícias</p>
</footer>

</body>
</html>

