<?php $this->load->view('common/header'); ?>

<h3> <?= $blog->title ?></h3>
  <blockquote >
    <p><?= $blog->body ?></p>
    <footer >Escritor : <?= $blog->fname ?> <br/ > <?= date("d/M/Y H:m:s",strtotime($blog->created_datetime)) ?></footer>
  </blockquote>
<?php $this->load->view('common/footer');?>