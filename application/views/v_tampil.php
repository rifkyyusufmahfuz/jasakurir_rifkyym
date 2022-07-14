<section>
    <center>
        <h1><?php echo $judul ?></h1>
    </center>
    <center>
        <h5><?php echo $judul2 ?></h5>
    </center>
    <center><?php echo anchor('web/tambah/','<button class="btntambah">Tambah Data</button>'); ?></center>

    <table id="ftable">
        <tr>
            <th>No Resi</th>
            <th>Tanggal Masuk</th>
            <th>Jenis Barang</th>
            <th>Jenis Pengiriman</th>
            <th>Pengirim</th>
            <th>Telepon Pengirim</th>
            <th>Penerima</th>
            <th>Telepon Penerima</th>
            <th>Alamat Penerima</th>
            <th>Status Pengiriman</th>
            <th>Aksi</th>
        </tr>
        <?php
        foreach ($datapaket as $dt) {
        ?>
            <tr>
                <td><?php echo $dt->noresi ?></td>
                <td><?php echo $dt->tanggalmasuk ?></td>
                <td><?php echo $dt->jenisbarang ?></td>
                <td><?php echo $dt->jenispengiriman ?></td>
                <td><?php echo $dt->namapengirim ?></td>
                <td><?php echo $dt->teleponpengirim ?></td>
                <td><?php echo $dt->namapenerima ?></td>
                <td><?php echo $dt->teleponpenerima ?></td>
                <td><?php echo $dt->alamatpenerima ?></td>
                <td><?php echo $dt->statuspengiriman ?></td>
                <td>
                    <?php echo anchor('web/edit/' . $dt->noresi, '<button class="btnedit">EDIT</button>'); ?>
                    <?php echo anchor('web/hapus/' . $dt->noresi, '<button class="btnhapus">HAPUS</button>', array('onclick' => "return confirm('Hapus Data Ini ?')")); ?>
                </td>
            </tr>
        <?php } ?>
    </table>

</section>