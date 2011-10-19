<div class="post">
    <h2 class="title"><a href="#">Kelompok Study Web Open House</a></h2>

    <div class="entry">
        <table border="1">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>Motivation</th>
                    <th>Nope</th>
                    <th>Bayar</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($pendaftar)) {
                ?>
                <?php foreach ($pendaftar as $daftar) {
 ?>
                <tr style="<?php if($daftar['status']==0){echo 'background : #E77471;';}?>">
                            <td><?php echo $daftar['nim']?></td>
                            <td><?php echo $daftar['name']?></td>
                            <td><?php echo $daftar['gender']?></td>
                            <td><?php echo $daftar['motivation']?></td>
                            <td><?php echo $daftar['nope']?></td>
                            <td><?php  if ($daftar['status']==0){//echo anchor('admin/aktif/'.$daftar['nim'],'Bayar');
                             ?>
                                <a href="#" onclick="window.open('<?php echo site_url('admin/kwitansi/'.$daftar['nim']);?>','print','left=20,top=20,width=600,height=400,toolbar=1,resizable=0')">Bayar</a>
                                <?php
                                
                                }else{echo 'lunas';}?></td>
                        
                            <td></td>
                        </tr>
<?php }
                } ?>
            </tbody>
        </table>

    </div>
</div>