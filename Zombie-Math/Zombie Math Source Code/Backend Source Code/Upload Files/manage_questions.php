<?php include './templates/header.php';

$grade = '';
if(isset($_GET["grade"])){
  $grade = $_GET['grade'];
}

if($grade){
  $result = $connection->prepare("SELECT * FROM `questions` WHERE `grade` = ?;");
  $result->bind_param("s", $grade);
  $result->execute();
  $result_res = $result->get_result();
}else{
  $result_res = $connection->query("SELECT * FROM `questions`;");
}

$connection->close();

?>
  <body class="h-100">
    <div class="container-fluid">
      <div class="row">
        <!-- Main Sidebar -->
        <?php include './templates/sidebar.php';?>
        <!-- End Main Sidebar -->
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <?php include './templates/top_menu.php';?>
           <?php if(!empty($_GET["msg"]) && !empty($_GET["typ"])){ ?>
            <div class="alert alert-<?php echo trim(strip_tags($_GET["typ"])); ?> alert-dismissible fade show mb-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span></button> <i class="fa fa-info mx-2"></i>
            <?php echo trim(strip_tags($_GET['msg'])); ?> </div>
          <?php } ?>
          <!-- / .main-navbar -->
          <div class="main-content-container container-fluid px-4">
            <!-- Page Header -->
            <div class="page-header row no-gutters py-4">
              <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Questions</span>
                <h3 class="page-title">Manage Grade <?php echo $grade; ?> Questions</h3>
              </div>
            </div>
            <!-- End Page Header -->
            <!-- Small Stats Blocks -->
            <div class="row">
              <div class="col">
                <div class="card card-small mb-4">
                  <div class="card-body p-0 pb-2">
                    <?php
                      if ($result_res->num_rows > 0) { ?>
                        <table class="table mb-0 text-center">
                          <thead class="bg-light">
                            <tr>
                              <th scope="col" class="border-0">Grade</th>
                              <th scope="col" class="border-0">Skill</th>
                              <th scope="col" class="border-0">Question</th>
                              <th scope="col" class="border-0">Answer</th>
                              <th scope="col" class="border-0">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                        <?php while($row = $result_res->fetch_assoc()) { 
                          echo "<tr>";
                          echo "<td>".$row['grade']."</td>";
                          echo "<td><span class='card-post__category badge badge-pill badge-info'>".ucfirst($row['skill'])."</span></td>";
                          echo "<td>".$row['question']."</td>";
                          echo "<td>".$row['answer']."</td>";
                          echo '<td><form action="delete_question.php" method="post"><input type="hidden" id="id" name="id" value="'.$row['id'].'"><button type="submit" class="btn btn-sm btn-outline-secondary mr-1"><i class="material-icons">delete</i> Delete</button></form></td>';
                          echo "</tr>"; 
                        } ?>
                        </tbody>
                      </table>
                      <?php } else {
                        echo '<p style="padding: 5px 0px 0px 10px;">No questions yet, add a new one <a href="add_question.php">here</a>.</p>';
                      }
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Small Stats Blocks -->
          </div>
<?php include './templates/footer.php'; ?>
