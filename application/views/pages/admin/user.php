<!-- จัดการผู้พักอาศัย -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl col-lg">
        <div class="container-fluid">

            <!-- Page Heading -->


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">จัดการข้อมูลผู้พักอาศัย</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>ชื่อผู้พักอาศัย</th>
                                    <th>คณะ</th>
                                    <th>สาขา</th>
                                    <th>เบอร์โทร</th>
                                    <th>ข้อมูลที่อยู่</th>
                                    <th>จัดการข้อมูล</th>

                                </tr>
                            </thead>
                            <!-- <tfoot>
								<tr>
									<th>หัวเรื่อง</th>
									<th>รายละเอียด</th>
									<th>รูปภาพ</th>

								</tr>
							</tfoot> -->
                            <tbody>
                                <?php 
								foreach ($table as $object) {
    ?>
                                <tr>
                                    <th scope="row"><?php echo $object->fname;echo " "; echo $object->lname; ?>
                                    </th>

                                    <td><?php echo $object->tel; ?></td>
                                    <td><?php echo $object->fname1; ?></td>
                                    <td><?php echo $object->lname1; ?></td>
                                    <td><?php echo $object->tel1;
						
								?></td>
                                    <td align="left">

                                        <a href=""><i class="far fa-edit"></i></a>
                                        <a href=""><i class="fas fa-trash-alt"></i></a>
                                    </td>

                                    <?php
}
?>
                                </tr>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Pie Chart -->

</div>