<div class="col-md">
	<h1><b>Tabel Layanan Jasa</b></h1>
	<div class="mt-3">
		<table class="table table-bordered table-hover table-sm">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">ID</th>
					<th scope="col">Nama</th>
					<th scope="col">Biaya</th>
					<th scope="col">Pilihan</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<form class="form-inline" action="<?php echo site_url('process/insert_service') ?>" method="POST">
						<td></td>
						<td></td>
						<td>
							<input class="form-control form-control-sm mt-1" type="text" placeholder="Nama" name="nama">
						</td>
						<td>
							<input class="form-control form-control-sm mt-1" type="number" placeholder="Biaya" name="biaya">
						</td>
						<td>
							<input type="submit" class="btn btn-primary btn-sm mt-1" value="Tambah">
						</td>
					</form>
				</tr>
				<?php
				$i = 1;
				foreach($service as $row) { ?>
					<tr>
						<th scope="row"><?php echo $i++ ?></th>
						<td class="text-uppercase"><?php echo $row->id ?></td>
						<td><?php echo $row->nama ?></td>
						<td><?php echo $row->biaya ?></td>
						<td>
							<a class="btn btn-sm btn-primary" title="Ubah" href=""><i class="fas fa-edit"></i></a>
							<!-- <a class="btn btn-sm btn-danger" href=""><i class="fas fa-trash-alt"></i></a> -->
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>