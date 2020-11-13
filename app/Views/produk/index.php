<h1>READ DATA</h1>

<table border="1">
	<thead>
		<th>Nama Produk</th>
		<th>Deskripsi Produk</th>
	</thead>
	<tbody>
		<?php
			foreach($produk as $key => $a){
		?>
		<tr>
			<td><?php echo $a['nama_produk'] ?></td>
			<td><?php echo $a['deskripsi_produk'] ?></td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>