<?php
include 'inc/header.php';
?>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include 'inc/Sidebar.php'; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php include 'inc/top_bar.php'; ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800"><?php $helper->getTitle(); ?></h1>
                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                </div>

                <hr/>
                <div class="row">
                    <div class="col-12">
                        <?php
                        if ($_REQUEST['id']) {
                        $id = $_REQUEST['id'];
                        $results = $con->getUserDataByid('users', $id);
                        foreach ($results

                        as $result) {
                        ?>
                        <div class="panel-body card">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Full Name</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Gender</th>
                                        <th>Status</th>
                                        <th>Address</th>
                                        <th>Photo</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr >
                                        <td><?php echo $result['id']?></td>
                                        <td><?php echo $result['full_name']?></td>
                                        <td><?php echo $result['username']?></td>
                                        <td><?php echo $result['email']?></td>
                                        <td><?php echo $result['phone']?></td>
                                        <td><?php echo ($result['gender'] == 1) ? 'Male' : 'Fe-male' ?></td>
                                        <td><?php echo ($result['status'] == 1) ? 'Active' : 'De-Active' ?></td>
                                        <td><?php echo $result['address']?></td>
                                        <td><a href="<?php echo $result['photo']?>"><img src="<?php echo $result['photo']?>" alt="No image" style="width:80px;height:80px"></a></td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                        <?php } } ?>
                    </div>
                    <a href="view_User.php" class="btn btn-primary mt-5" style="margin-left: 3cm">Go Back</a>
                </div>



            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php include 'inc/footer.php'; ?>
        <!-- End of Footer -->