<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

<form action="<?php echo base_url() ?>index.php/controller/cari" method="get">
<input type="text" name="cari">
<button type="submit">Search</button>
<a href="<?php echo base_url(); ?>index.php/controller/tampil">Back</a>

</form>
<table border="1px solid">
    <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
        <th>Alamat</th>
        <th>Edit</th>
    </tr>

<?php if(count($data)>0)
{ ?>
<tr>
<?php foreach ($data as $a) { ?>
    <td><?php echo $a->Nama  ?></td>
    <td><?php echo $a->Email  ?></td>
    <td><?php echo $a->Password  ?></td>
    <td><?php echo $a->Alamat  ?></td>
<td><a href="<?php echo base_url(); ?>goni/tampilanEdit">edit</a></td>
</tr>

<?php  }?>

<?php  }
else
{
echo "Data tidak ditemukan";
}
?>
<?php  ?>
</table>
</body>
</html>
