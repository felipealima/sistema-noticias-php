<?php $this->load->view('common/header'); ?>


<table class="table  table-hover ">
  <thead>
    <tr class="info">
      <th>#</th>
      <th>Title</th>
      <th>Bloger </th>
      <th>View</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
if(count($blogs)>0)
{
$i=$this->uri->segment(3);
foreach($blogs as $blog)
{
  
echo '<tr>
      <td>'.++$i.'</td>
      <td>'.$blog['title'].'</td>
      <td>'.$blog['fname'].'</td>
      <td>
	  <a href="home/view/'.$blog['id'].'" class="btn btn-success">View</a>
	
	  </td>
    </tr>';
	$i++;
}
}else
{
echo '<tr>
      <td colspan="4" class="text-center">No Record Found</td>
      
    </tr>';
}
?>
  </tbody>
</table> 
<?= $this->pagination->create_links() ?>

<?php $this->load->view('common/footer');?>