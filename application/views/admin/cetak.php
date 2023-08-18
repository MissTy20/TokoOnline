<div class="container-fluid">
    <br>
    <center><h1>Ancis Katalog</h1></center>
    <center><h5>Jalan Condronegoro, Samofa, Kab.Biak Numfor - Papua</h5></center>
    <center><h5>Telp: 082190351075</h5></center>


    <h4>No. Invoice: <?php echo $invoice->id ?></h4>
    <hr>

    <table class="table table-bordered table-hover table-striped">

    <tr>
        <th>NAMA PRODUK</th>
        <th>JUMLAH PESANAN</th>
        <th>HARGA SATUAN</th>
        <th>SUB-TOTAL</th>
    </tr>

    <?php
    $total = 0;
    foreach ($pesanan as $psn) :
        $subtotal = $psn->jumlah * $psn->harga;
        $total += $subtotal;
    ?>

    <tr>
        <td><?php echo $psn->nama_brg ?></td>
        <td><?php echo $psn->jumlah ?></td>
        <td>Rp. <?php echo number_format($psn->harga,0,',','.') ?></td>
        <td>Rp. <?php echo number_format($subtotal,0,',','.') ?></td>
    </tr>

    <?php endforeach; ?>

    <tr>
        <td colspan="3" align="right">Jumal Total</td>
        <td align="left">Rp. <?php echo number_format($total,0,',','.')?></td>
    </tr>
    </table>

    <div class="col-12 text-center mt-5">
            <h2>* Terima Kasih Telah Berbelanja Di TokoAncis *</h2>
        </div>
<button> <a href="https://api.whatsapp.com/send?phone=&text=Hi">Whattsaopp</button>
    <script type="text/javascript">
    window.print();
</script>