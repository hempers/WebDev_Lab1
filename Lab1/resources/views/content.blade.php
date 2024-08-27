<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Content</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
  <link rel="stylesheet" href="styles/style.css">
</head>
<body>

  <header>
    <div class="logo">
      <a href="{{ url('/') }}" style="text-decoration: none;">
        <h1 class="text">Laravel</h1>
      </a>
    </div>
    <nav>
        <ul>
            <li><a href="{{ url('/home')}}">Home</a></li>
            <li><a href="{{ url('/about')}}">About</a></li>
            <li><a href="{{ url('/content')}}">Content</a></li>
        </ul>
    </nav>
</header>
<section class="articles">
  <article>
    <div class="article-wrapper">
      <figure>
        <img src="assets/img/content/coverr.svg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Project 1</h2>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="assets/img/content/cover.svg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Project 2</h2>
      </div>
    </div>
  </article>
  <article>

    <div class="article-wrapper">
      <figure>
        <img src="assets/img/content/coverrr.svg" alt="" />
      </figure>
      <div class="article-body">
        <h2>Project 3</h2>
      </div>
    </div>
  </article>
</section>  
</body>
</html>
