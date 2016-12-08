<?php include 'main-header.php';?>
<div class="row">
  <div class="col s12">
    <h2 title="Edit your WebSite">Edit your WebSite</h2>
    <form action="/TP-CMS/action.php" method="POST">
      <div class="input-field">
        <label for="site_name">Nom d'onglet</label>
        <input name="site_name" type="text" class="validate">
      </div>
      <div class="input-field">
        <label for="title_article">Titre d'article</label>
        <input name="title_article" type="text" class="validate">
      </div>
      <div class="input-field">
        <label for="text_content">Content</label>
        <textarea id="textarea1" class="materialize-textarea" name="text_content"></textarea>
      </div>
      <button type="submit" name="button" class="btn">Validate</button>
    </form>
  </div>
</div>
<?php include 'templates/footer.php';?>
