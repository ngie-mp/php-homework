<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/TP-CMS/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <title>HOME CMS | Class Work</title>
  </head>
  <body>
  <main>
    <header class="blue-grey darken-4">
      <div class="row nomarg">
        <h1 title="Logo here" class="col s6">{{logo}}</h1>
        <nav class="col s6 blue-grey darken-4 noshadow">
          <ul>
            <li><a href="/TP-CMS">Home</a></li>
            {{menu}}
          </ul>
        </nav>
      </div>
    </header>
    <a href="/TP-CMS/edit.php" class="edit">Edit</a>
  </main>
