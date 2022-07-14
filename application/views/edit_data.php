<section>
    <center><h1><?php echo $judul ?></h1></center>
    <center><h5><?php echo $judul2 ?></h5></center>
    
    <?php foreach ($datapaket as $dt) { ?>
        
        <form action="<?php echo site_url('web/update') ?>" method="POST">
            <table id="ftable2">
                <tr>
                    <td>Nomor Resi </td>
                    <td><input type="text" name="noresi" value="<?php echo $dt->noresi ?>"></td>
                    <td>Tanggal Masuk </td>
                    <td><input type="date" name="tanggalmasuk" min="<?= date('Y-m-d'); ?>" value="<?php echo $dt->tanggalmasuk ?>"></td>
                </tr>

                <tr>
                    <td>Jenis Pengiriman </td>
                    <td>
                        <label class="tradio">Reguler
                            <input type="radio" name="jenispengiriman" value="Reguler"
                            <?php echo ($dt->jenispengiriman == 'Reguler' ? ' checked' : ''); ?>>
                            <span class="radioklik"></span></label>

                        <label class="tradio">Xpress
                            <input type="radio" name="jenispengiriman" value="Xpress"
                            <?php echo ($dt->jenispengiriman == 'Xpress' ? ' checked' : ''); ?>>
                            <span class="radioklik"></span></label>

                        <label class="tradio">Xpress Sameday
                            <input type="radio" name="jenispengiriman" value="Xpress Sameday"
                            <?php echo ($dt->jenispengiriman == 'Xpress Sameday' ? ' checked' : ''); ?>>
                            <span class="radioklik"></span></label>
                    </td>

                    <td>Jenis Barang </td>
                    <td>
                        <select name="jenisbarang" id="jenisbarang">
                            <option <?php echo ($dt->jenisbarang == 'Dokumen Penting' ? 'selected' : '');  ?> value='Dokumen Penting'>Dokumen Penting</option>
                            <option <?php echo ($dt->jenisbarang == 'Elektronik' ? 'selected' : ''); ?> value='Elektronik'>Elektronik</option>
                            <option <?php echo ($dt->jenisbarang == 'Pakaian' ? 'selected' : ''); ?> value='Pakaian'>Pakaian</option>
                            <option <?php echo ($dt->jenisbarang == 'Makanan' ? 'selected' : ''); ?> value='Makanan'>Makanan</option>
                            <option <?php echo ($dt->jenisbarang == 'Kosmetik' ? 'selected' : ''); ?> value='Kosmetik'>Kosmetik</option>
                            <option <?php echo ($dt->jenisbarang == 'Lainnya' ? 'selected' : ''); ?> value='Lainnya'>Lainnya</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>Nama Penerima </td>
                    <td><input type="text" name="namapenerima" value="<?php echo $dt->namapenerima ?>"></td>
                    
                    <td>Nama Pengirim </td>
                    <td><input type="text" name="namapengirim" value="<?php echo $dt->namapengirim ?>"></td>
                </tr>

                <tr>
                    <td>Telepon Penerima </td>
                    <td><input type="text" name="teleponpenerima" value="<?php echo $dt->teleponpenerima ?>"></td>
                    
                    <td>Telepon Pengirim</td>
                    <td> <input type="text" name="teleponpengirim" value="<?php echo $dt->teleponpengirim ?>"></td>
                </tr>

                <tr>
                    <td>Alamat Penerima </td>
                    <td><textarea name="alamatpenerima" cols="30" rows="5"><?php echo $dt->alamatpenerima ?></textarea></td>
                    <td>Status Pengiriman </td>
                    <td> <select name="statuspengiriman" id="statuspengiriman">
                            <option <?php echo ($dt->statuspengiriman == 'Diterima Di Cabang C29' ? 'selected' : ''); ?> value='Diterima Di Cabang C29'>Diterima Di Cabang C29</option>
                            <option <?php echo ($dt->statuspengiriman == 'Proses Sortir' ? 'selected' : ''); ?> value='Proses Sortir'>Proses Sortir</option>
                            <option <?php echo ($dt->statuspengiriman == 'Proses Kirim Ke Hub Pusat Kota Bekasi' ? 'selected' : ''); ?> value='Proses Kirim Ke Hub Pusat Kota Bekasi'>Proses Kirim Ke Hub Pusat Kota Bekasi</option>
                            <option <?php echo ($dt->statuspengiriman == 'Sedang Diantar Ke Alamat Tujuan' ? 'selected' : ''); ?> value='Sedang Diantar Ke Alamat Tujuan'>Sedang Diantar Ke Alamat Tujuan</option>
                            <option <?php echo ($dt->statuspengiriman == 'Selesai' ? 'selected' : ''); ?> value='Selesai'>Selesai</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="4">
                        <input type="submit" name="edit" value="UPDATE">
                        <input type="reset" name="reset" value="BATAL">
                    </td>
                </tr>
        </form>
        </table>
    <?php } ?>
</section>