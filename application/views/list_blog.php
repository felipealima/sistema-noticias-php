<?php $this->load->view('common/admin/header'); ?>


<table class="table  table-hover ">
  <thead>
    <tr class="info">
      <th>#</th>
      <th>Title</th>
      <th>Content </th>
      <th>View</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
if(count($blogs)>0)
{
$i=1;
foreach($blogs as $blog)
{
  
echo '<tr>
      <td>'.$i.'</td>
      <td>'.$blog['title'].'</td>
      <td>'.$blog['body'].'</td>
      <td>
	  <a href="home/view/'.$blog['id'].'" class="btn btn-success">Visualiza</a>
	
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

<?php $this->load->view('common/admin/footer');?>