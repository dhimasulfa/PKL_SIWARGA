<?php
$this->load->view('fe/header');
?>
<section class="about_person_area pad" id="about">
                    <div class="about_person_area pad">
                        <div class="row person_details" style="margin-bottom: 30px">
                            <h3 align="center"> DATA RT</h3>
                        <table border="1" align="center">
                        <thead>
                        <tr>
                            <th>RT</th>
                            <th>NAMA KETUA</th>
                            <th>ALAMAT</th>
                            <th>TELP</th>
                            
                        </tr>
                    </thead>
                        <?php
                        $no = 1;
                        foreach ($data as $row): ?>
                        <tbody>
                        <tr>
                            <td><?php echo $row->rt;?></td>
                            <td><?php echo $row->nama_ketua;?></td>
                            <td><?php echo $row->alamat;?></td>
                            <td><?php echo $row->telp;?></td>
                            
                        </tr>
                        </tbody>
                        <?php $no++;
                        endforeach;?>
                    </table>
                        </div>
                        
                    </div>
                </section>
<?php
$this->load->view('fe/footer');
?>