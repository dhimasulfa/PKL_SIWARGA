<?php
$this->load->view('fe/header');
?>
<style type="text/css">
form {
    width:500px;
    margin:10px auto;
    margin-left: 500px;
}
.search {
    padding:8px 15px;
    background:rgba(50, 50, 50, 0.2);
    border:0px solid #dbdbdb;
}
.button {
    position:relative;
    padding:6px 15px;
    left:-8px;
    border:2px solid #53bd84;
    background-color:#53bd84;
    color:#fafafa;
}
.button:hover  {
    background-color:#fafafa;
    color:#207cca;
}
</style>
<section class="service_area" id="service">
                    <div class="main_title">
                        <h2>WARGA</h2>
                    </div>
                    <form method="get" action="<?php echo base_url().'Siwarga_fe/search' ?>">
                        <input class="search" type="text" name="cari" placeholder="Masukkan NIK">
                        <input class="button" type="submit" name="search_submit" value="Cari">
                    </form>
                    <table border="1" align="center">
                        <thead>
                        <tr>
                            <th>NO</th>
                            <th>NIK</th>
                            <th>NAMA</th>
                            <th>NO KARTU KELUARGA</th>
                            <th>TEMPAT LAHIR</th>
                            <th>TANGGAL LAHIR</th>
                            <th>NO TELEPON</th>
                            <th>STATUS</th>
                            <th>RT</th>
                            <th>RW</th>
                        </tr>
                    </thead>
                        <?php
                        $no = 1;
                        foreach ($data as $row): ?>
                        <tbody>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $row->nik;?></td>
                            <td><?php echo $row->nama;?></td>
                            <td><?php echo $row->no_kk;?></td>
                            <td><?php echo $row->tmp_lahir;?></td>
                            <td><?php echo $row->tgl_lahir;?></td>
                            <td><?php echo $row->telp;?></td>
                            <td><?php echo $row->status;?></td>
                            <td><?php echo $row->id_rt;?></td>
                            <td><?php echo $row->rw;?></td>
                        </tr>
                        </tbody>
                        <?php $no++;
                        endforeach;?>
                    </table>

                </section>

<?php
$this->load->view('fe/footer');
?>