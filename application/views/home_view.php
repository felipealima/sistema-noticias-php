<?php $this->load->view('common/header'); ?>


<table class="table  table-hover ">
  <thead>
    <tr class="info">
      <th>#</th>
      <th>Título</th>
      <th>Escritor </th>
      <th>Notícia</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
if(count($blogs)>0)
{
$i=$this->uri->segment(3)*$this->pagination->per_page - $this->pagination->per_page ;
if($i<0)
$i = 0;

foreach($blogs as $blog)
{
  
echo '<tr>
      <td>'.++$i.'</td>
      <td>'.$blog['title'].'</td>
      <td>'.$blog['fname'].'</td>
      <td>
    <a href="'.URL_ROOT.'/home/view/'.$blog['id'].'" class="btn btn-success">Visualizar</a>
  
    </td>
    </tr>';
  
}
}else
{
echo '<tr>
      <td colspan="4" class="text-center">Não foram encontrados registros</td>
      
    </tr>';
}
?>
  </tbody>
</table> 
<div class="text-center">
<?= $this->pagination->create_links() ?>
</div>
<?php $this->load->view('common/footer');?>