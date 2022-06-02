<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-head container-fluid" style="margin-top: 10px;">
						<a href="<?php echo e(route('produk.create')); ?>" class="btn btn-primary">Tambah Produk</a>
						<div class="pull-right">
							<p>Data produk</p>
						</div>
					</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama</th>
							<th>Kategori</th>
							<th>Qty</th>
							<th>Harga Beli</th>
							<th>Harga Jual</th>
							<th>Dibuat Pada</th>
							<th>Diedit Pada</th>
							<th colspan="3" style="text-align: center;">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($i+1); ?></td>
							<td><?php echo e($p->nama); ?></td>
							<td><?php echo e($p->Kategori->nama); ?></td>
							<td><?php echo e($p->qty); ?></td>
							<td><?php echo e($p->harga_beli); ?></td>
							<td><?php echo e($p->harga_jual); ?></td>
							<td><?php echo e($p->created_at); ?></td>
							<td><?php echo e($p->updated_at); ?></td>
							<td><a href= "<?php echo e(route('produk.show',$p->id)); ?>" class="btn btn-warning"> Detail</a></td>
							<td><a class="btn ntn-success "href="<?php echo e(route('produk.edit',$p->id)); ?>"> Edit</a></td>
							<td>
								<form method="post" action="<?php echo e(route('produk.destroy',$p->id)); ?>">
										<?php echo e(csrf_field()); ?>

								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger" type="submit">Hapus</button>
								</form>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
				</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>