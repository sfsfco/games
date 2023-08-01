<?php include './templates/header.php'; ?>
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
                <h3 class="page-title">Add Question</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-lg">
                <div class="card card-small mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                      <div class="row">
                        <div class="col">
                          <form action="add_question_submit.php" method="post">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="grade">Grade</label>
                                <select id="grade" name="grade" class="form-control" required>
                                  <option selected="" disabled="">Choose grade...</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                </select>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="skill">Skill</label>
                                <select id="skill" name="skill" class="form-control" required>
                                  <option selected="" disabled="">Choose skill...</option>
                                  <option value="addition">Addition</option>
                                  <option value="subtraction">Subtraction</option>
                                  <option value="multiplication">Multiplication</option>
                                  <option value="division">Division</option>
                                  <option value="equation">Mixed Equation</option>
                                  <option value="pattern">Number Pattern</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="question">Question</label>
                                <input type="text" class="form-control" id="question" name="question" placeholder="Enter question" required> 
                              </div>
                              <div class="form-group col-md-6">
                                <label for="answer">Answer</label>
                                <input type="text" class="form-control" id="answer" name="answer" placeholder="Enter answer" required> 
                              </div>
                            </div>
                            <button type="submit" class="btn btn-accent">Submit</button>
                          </form>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
<?php include './templates/footer.php'; ?>
