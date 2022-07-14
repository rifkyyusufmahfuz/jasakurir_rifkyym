<section>
    <h1>Input Data Pengiriman Di Bawah Ini</h1>
    <form action="<?php echo site_url('web/insert') ?>" method="POST">
        <table id="ftable2">
            <tr>
                <td>Nomor Resi</td>
                <td><input type="text" name="noresi" placeholder="Input No Resi"></td>
                <td>Tanggal Masuk </td>
                <td><input type="date" name="tanggalmasuk" id="tanggalmasuk" min="<?= date('Y-m-d'); ?>"></td>
            </tr>

            <tr>
                <td>Jenis Pengiriman</td>
                <td>
                    <label class="tradio">Reguler
                        <input type="radio" checked="checked" name="jenispengiriman" value="Reguler">
                        <span class="radioklik"></span>
                    </label>

                    <label class="tradio">Xpress
                        <input type="radio" name="jenispengiriman" value="Xpress">
                        <span class="radioklik"></span>
                    </label>

                    <label class="tradio">Xpress Sameday
                        <input type="radio" name="jenispengiriman" value="Xpress Sameday">
                        <span class="radioklik"></span>
                    </label>
                </td>

                <td>Jenis Barang</td>
                <td>
                    <select name="jenisbarang" id="jenisbarang">

                        <option value=''>--Pilih Jenis Barang--</option>
                        <option value='Dokumen Penting'>Dokumen Penting</option>
                        <option value='Elektronik'>Elektronik</option>
                        <option value='Pakaian'>Pakaian</option>
                        <option value='Makanan'>Makanan</option>
                        <option value='Kosmetik'>Kosmetik</option>
                        <option value='Lainnya'>Lainnya</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Nama Penerima</td>
                <td><input type="text" name="namapenerima" id="namapenerima"></td>
                <td>Nama Pengirim</td>
                <td><input type="text" name="namapengirim" id="namapengirim"></td>
            </tr>

            <tr>
                <td>Telepon Penerima</td>
                <td><input type="text" name="teleponpenerima" id="teleponpenerima"></td>
                <td>Telepon Pengirim</td>
                <td> <input type="text" name="teleponpengirim" id="teleponpengirim"></td>

            </tr>

            <tr>
                <td>Alamat Penerima</td>
                <td> <textarea name="alamatpenerima" id="alamatpenerima" cols="30" rows="5"></textarea></td>
                <td>Status Pengiriman</td>
                <td> <select name="statuspengiriman" id="statuspengiriman">
                        <option value=''>--Status Pengiriman--</option>
                        <option value='Diterima Di Cabang C29'>Diterima Di Cabang C29</option>
                        <option value='Proses Sortir'>Proses Sortir</option>
                        <option value='Proses Kirim Ke Hub Pusat Kota Bekasi'>Proses Kirim Ke Hub Pusat Kota Bekasi</option>
                        <option value='Sedang Diantar Ke Alamat Tujuan'>Sedang Diantar Ke Alamat Tujuan</option>
                        <option value='Selesai'>Selesai</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td colspan="4">
                    <input type="submit" name="simpan" value="SIMPAN">
                    <input type="reset" name="reset" value="BATAL">
                </td>
            </tr>
    </form>
    </table>
</section>