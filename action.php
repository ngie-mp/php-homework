<?php
session_start();

$title = $_POST["title_article"];
$content = $_POST["text_content"];



if (!empty($_POST["site_name"])) {
  $header = "templates/header.php";
  $footer = "templates/footer.php";
  $getFooter = file_get_contents($footer);
  $getHeader = file_get_contents($header);
  $scan = scandir("pages/");
  foreach($scan as $site){
    $menu .= '<li><a href="/TP-CMS/pages/'.$site.'">'.substr($site, 0, -5).'</a></li>';
  }
  $getHeader = str_replace(array('{{menu}}', '{{logo}}'), arr ,$getHeader);
  $old = array('{{menu}}', '{{logo}}');
  $new = array($menu, $site);
  str_replace($menu, $site);
  $site = $_POST["site_name"];
  $replace = str_replace($site, $_POST["site_name"]);
  checkNwrite('pages/'.$site.'.html', $replace);
  checkNwrite('pages/'.$site.'.html', $getHeader);
  checkNwrite('pages/'.$site.'.html', $content);
  checkNwrite('pages/'.$site.'.html', $getFooter);
  header('Location:/TP-CMS/index.php');

}


function checkNwrite($name, $content, $clear = false) {
  if($clear){
    file_put_contents($name, $content);
  }
  else{
    if (file_exists($name) && is_readable($name) && is_writeable($name)) {
      if (is_dir($name)) {
        return "file is a directory, aborting!";
      }else{
        file_put_contents($name, $content, FILE_APPEND);
      }
    }else {
        file_put_contents($name, $content);
    }
  }
   return file_get_contents($name);
}

//$result = checkNwrite('data.txt', "Ceci est un contenu<br>");

?>
