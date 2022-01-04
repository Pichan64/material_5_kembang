<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h4>Total Belanja Anda: Rp. " . number_format($grand_total);
                    ?>
            </div><br><br>

            <h3>Input Alamat Pengiriman dan Pembayaran</h3>

            <form action="<?php echo base_url('dashboard/proses_pemesanan');?>"  method="post">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telephone anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Metode Pengiriman</label>
                    <select class="form-control">
                        <option>GoSend (maximal 5kg)</option>
                        <option>COD (maximal radius 10km)</option>
                        <option>mobil bak (dari toko)</option>
                        <option>Ambil ke toko</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Metode Pembayaran</label>
                    <select class="form-control">
                        <option>Payment Gateway (shopee,gopay,dana,ovo)</option>
                        <option>BCA - 51320142</option>
                        <option>BNI - 78641376</option>
                        <option>BRI - 68239382</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>

            </form>

            <?php 
            } else
            {
                echo "<h4>Keranjang Belanja anda masih Kosong";
            }
            ?>
        </div>


        <div class="col-md-2"></div>
    </div>
</div>