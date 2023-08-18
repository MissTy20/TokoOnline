<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>

    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesanan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th colspan="7"><center>Detail dan Cetak</center></th>
        </tr>

        <?php foreach ($invoice as $inv): ?>
        <tr>
            <td><?php echo $inv->id ?></td>
            <td><?php echo $inv->nama ?></td>
            <td><?php echo $inv->alamat ?></td>
            <td><?php echo $inv->tgl_pesan ?></td>
            <td><?php echo $inv->batas_bayar ?></td>
            <td><?php echo anchor('admin/invoice/detail/' .$inv->id, '<div class="btn btn-sm btn-primary mt-1 ml-3"><i class="far fa-address-card" style="font-size:18px"></i></div>') ?></td>
            <td><?php echo anchor('admin/invoice/cetak/' .$inv->id, '<div class="btn btn-sm btn-dark mt-1 ml-3"><i class="fa fa-print" style="font-size:15px"></i></div>') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>