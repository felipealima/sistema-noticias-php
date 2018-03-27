<?php $this->load->view('admin/header'); ?>

<div class="row">
<div class="col-md-3">
<div class="list-group">
  <a href="<?= URL_ROOT_ACTION.'blog' ?>"  class="list-group-item active">
    Principal
  </a>
  <a href="<?= URL_ROOT_ACTION.'blog/addblog' ?>" class="list-group-item">Adicionar Notícia
  </a>
  <a href="<?= URL_ROOT_ACTION.'blog/listblog' ?>" class="list-group-item">Listar Minhas Notícias
  </a>
</div>
</div>

<div class="col-md-9">
<?php
if($error = $this->session->flashdata('blogerror'))
echo $error;

?>

<table class="table  table-hover ">
  <thead>
    <tr class="info">
      <th>#</th>
      <th>Código</th>
      <th>Título</th>
      <th>Notícia </th>
      <th width="5%">Ação</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
if(count($blogs)>0)
{

$counter=$this->uri->segment(4)*$this->pagination->per_page - $this->pagination->per_page ;
if($counter<0)
$counter = 0;
foreach($blogs as $blog)
{
  
echo '<tr>
      <td>'.++$counter.'</td>
      <td>'.$blog['id'].'</td>
      <td>'.$blog['title'].'</td>
      <td>'.$blog['body'].'</td>
      <td class="text-center">
	  	  <a onclick="return confirm(\'Você quer realmente excluir a Notícia?\');" href="'.URL_ROOT_ACTION.'blog/deleteblog/'.$blog['id'].'" class="btn btn-danger btn-block">Excluir</a>
	
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
</div>
</div>

<?php $this->load->view('admin/footer');?>