<?php include('epariksa-transed-config.php'); 

if(isset($_POST["search_submit"])) {


    if(isset($_POST['category_id']) && $_POST['category_id'] != ''){
        $category    = $_POST['category_id'];
        $category_id     = trim($category);

      }


    if(isset($_POST['test_title']) && $_POST['test_title'] != ''){
        $test_title    = $_POST['test_title'];
        $testtitle     = trim($test_title);

      }


   $wherecondition = "SELECT * FROM epariksa_test_frame WHERE";
    

  if(!empty($category) && !is_null($category) && $category !== '')
    {
    
            if($category > 0){
                   $wherecondition .= " (category_id = $category_id";
                        }
            $wherecondition .= ")";
    } 




     if(!empty($test_title) && !is_null($test_title) && $test_title != '')

    {
      if((!empty($category)) && !empty($test_title)){

            $wherecondition .= " AND ";
        }
            if($test_title !=''){
                  $wherecondition .= "(test_title LIKE '$test_title'";
                        }
            $wherecondition .= ")";
    } 




   $select_test_frame = $mysqli->query($wherecondition .= "  AND test_active=1 order by test_created_date DESC");
  
   $count_test_frame = mysqli_num_rows($select_test_frame);



}

else{
    $select_test_frame = $mysqli->query("SELECT * FROM epariksa_test_frame WHERE test_active=1");
     $count_test_frame = mysqli_num_rows($select_test_frame);

}
  
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Transed</title>

    <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
    <meta name="robots" content="noindex">

    <!-- Perfect Scrollbar -->
    <link type="text/css" href="assets/vendor/perfect-scrollbar.css" rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css" href="assets/css/material-icons.css" rel="stylesheet">
    <link type="text/css" href="assets/css/material-icons.rtl.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link type="text/css" href="assets/css/fontawesome.css" rel="stylesheet">
    <link type="text/css" href="assets/css/fontawesome.rtl.css" rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css" href="assets/css/app.css" rel="stylesheet">
    <link type="text/css" href="assets/css/app.rtl.css" rel="stylesheet">

<link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
 <link type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.css" rel="stylesheet">

</head>

<body class=" layout-fluid">

    <div class="preloader">
        <div class="sk-double-bounce">
            <div class="sk-child sk-double-bounce1"></div>
            <div class="sk-child sk-double-bounce2"></div>
        </div>
    </div>

    <!-- Header Layout -->
    <div class="mdk-header-layout js-mdk-header-layout">

        <!-- Header -->
<?php include 'header.php';?>
        <!-- // END Header -->
<!-- Header Layout Content -->
<div class="mdk-header-layout__content">
    <div data-push data-responsive-width="992px" class="mdk-drawer-layout js-mdk-drawer-layout">
        <div class="mdk-drawer-layout__content page">
            <div class="container-fluid page__container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <!-- <li class="breadcrumb-item">Student</li> -->
                    <li class="breadcrumb-item active">View Tests</li>
                </ol>
                    <div class="d-flex flex-column flex-sm-row flex-wrap mb-headings align-items-start align-items-sm-center">
                        <div class="flex mb-2 mb-sm-0">
                            <h1 class="h2">Search Test</h1>
                           
                        </div>
                      
                    </div>
                    <?php if($_SESSION['role_id'] != '3') {?>

                    <div class="card card-body border-left-3 border-left-primary navbar-shadow mb-4">
                        <form action="view-test-frame.php" name="test" method="POST" enctype="multipart/form-data">
                         <div class="form-group row">
                                <div class="col-sm-9 col-md-4">
                                  <select id="category" name= "category_id" class="form-control">
                                    <option value="">Search by Category</option>
                                    <?php 
                                      $select_maincategory = $mysqli->query("SELECT * FROM epariksa_category WHERE category_active=1");
                                      while($maincategoryRow = mysqli_fetch_array($select_maincategory)) {
                                      $category_id       = $maincategoryRow['category_id'];
                                      $category_name      = $maincategoryRow['category_name']; ?>
                                    <option value="<?php echo $category_id; ?>"><?php echo $category_name; ?></option>
                                    <?php } ?>
                                  </select>
                                  </div>
                                      <?php
                                        $j=0;
                                        $test_frame =  $mysqli->query("SELECT * FROM epariksa_test_frame WHERE test_active=1");
                                        while($selecttest = mysqli_fetch_array($test_frame)){
                                          $test_titles[$j] = '"'.$selecttest['test_title'].'"';
                                          $j++;
                                        }
                                        $arraytitle = implode(',',$test_titles);
                                        ?>
                                            <div class="col-sm-9 col-md-6">
                                              <input type="text" id="test_title" name="test_title" class="form-control" placeholder="Search by Test Title">
                                                      </div>
                                          <div class="col-sm-9 col-md-2">
                                            <input type="submit" class="btn btn-success" id="search_submit" name="search_submit">
                                          </div>
                                      </div>
                                    </form>
                  </div><?php } ?>
                                    <p style="text-align: center;">Search Results :  <?php if($count_test_frame > 0)  {
                                      if($category != '')  { 
                                        $selectcategory = $mysqli->query("SELECT * FROM epariksa_category WHERE category_active=1 AND category_id=$category");
                                        $mainRow = mysqli_fetch_array($selectcategory);
                                        echo $category_name      = $mainRow['category_name'].','; }
                                        if($test_title != '')  { echo $test_title; } 
                                      }
                                      else {
                                        echo "No Test Available";
                                      } ?>
                                        
                                      </p>
                                       <div class="row">
                                        <?php                                 
                                            $test_frame_query = $mysqli->query("SELECT * FROM epariksa_test_frame WHERE test_active=1");
                                             // $count = mysqli_num_rows($test_frame_query);
                                            while($row = mysqli_fetch_array($select_test_frame)) {
                                            
                                                 $test_id       = $row['test_id']; 
                                                 
                                                  $test_image        = $row['test_image']; 
                                                   $test_title        = $row['test_title']; 
                                                    $no_of_questions        = $row['no_of_questions']; 
                                                     $total_marks        = $row['total_marks']; 
                                                      $test_time        = $row['test_time']; $question_id_arr_1     = explode(',', $row['question_id']); 
                                                $question_created_date  =getdate_formated ($row['test_created_date']);
                                                $category_id_arr_1     = $row['category_id'];
                                                $category_query = $mysqli->query("SELECT category_name FROM epariksa_category WHERE category_active = 1 AND category_id IN ($category_id_arr_1)");
                                                $category_arr = mysqli_fetch_array($category_query);
                                                $category_name = $category_arr['category_name'];
                                                $question_query =  $mysqli->query("SELECT question FROM epariksa_questions WHERE question_active = 1 AND question_id = $question_id "); 
                                                $question_arr = mysqli_fetch_array($question_query);

                                        ?>


                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="d-flex flex-column flex-sm-row">
                                        <a href="fixed-instructor-course-edit.html" class="avatar avatar-lg avatar-4by3 mb-3 w-xs-plus-down-100 mr-sm-3">
                                            <img src="test/<?php echo $test_image; ?>" alt="Card image cap" class="avatar-img rounded">
                                        </a>
                                        <div class="flex" style="min-width: 200px;">
                                            <!-- <h5 class="card-title text-base m-0"><a href="fixed-instructor-course-edit.html"><strong>Learn Vue.js</strong></a></h5> -->
                                            <h4 class="card-title mb-1"><a href="fixed-instructor-course-edit.html"><?php echo $test_title; ?></a></h4>
                                            <p> <?php echo $category_name; ?></p>
                                            <p class="text-black-70">  <?php 
                                $subject_id_arr_1      = $row['subject_id'];
                                $subject_query = $mysqli->query("SELECT subject_name FROM epariksa_subjects WHERE subject_active = 1 AND subject_id IN ($subject_id_arr_1)");

                                      while($subject_arr = mysqli_fetch_array($subject_query)) {
                                  $subject_name = $subject_arr['subject_name'];
                                   echo $subject_name.', '; ?>
                             <?php } ?></p>
                                            <div class="d-flex align-items-end">
                                                <div class="d-flex flex flex-column mr-3">
                                                    <div class="d-flex align-items-center py-1 border-bottom">
                                                        <small class="text-black-70 mr-2">No of Questions: <?php echo $no_of_questions; ?></small>
                                                         <small class="text-black-50">Time: <?php echo $test_time; ?></small>
                                                      


                                                    </div>
                                                    <div class="d-flex align-items-center py-1">
                                                       <!--  <small class="text-muted mr-2">GULP</small> -->
                                                        <small class="text-muted">Total Marks:  <?php echo $total_marks; ?></small>
                                                    </div>
                                                </div>
                                                <div class="text-center">
                                                  <?php if($_SESSION['role_id'] != 3){?>
                                                    <a href="view-questions.php?test_id=<?php echo $test_id; ?>" class="btn btn-sm btn-white">View</a>
                                                  <?php } else { ?><a data-toggle="modal" data-target="#editQuiz" data-start-id = "<?php echo $test_id; ?>" href="view-questions.php?test_id=<?php echo $test_id; ?>" class="btn btn-sm btn-white start_test">Start Test</a><?php } 
                                                  ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card__options dropdown right-0 pr-2">
                                    <!-- <a href="#" class="dropdown-toggle text-muted" data-caret="false" data-toggle="dropdown">
                                        <i class="material-icons">more_vert</i>
                                    </a> -->
                                    
                                    <?php if($_SESSION['role_id'] != '3') { ?>
                                    <input type="checkbox" name="checked_box" class="checked_frame" value="<?php echo $test_id; ?>"><?php } ?>

                                   <!--  <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="fixed-instructor-course-edit.html">Edit course</a>
                                        <a class="dropdown-item" href="#">Course Insights</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#">Delete course</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                      <?php } ?>

                    </div>





              
                
            </div>

        </div>




    <?php include 'sidebar.php';?>

    </div>

    
</div>
</div>


<!-- Model View -->


<div class="modal fade" id="editQuiz">
        <div class="modal-dialog modal-dialog-centered width-increase">
            <div class="modal-content bg-clr">
                <div class="modal-header bg-primary margin-0">
                    <h4 class="modal-title text-white text-center">Test Exam</h4>
                    <button type="button" class="close text-white close-design" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body " id = "start_test">
                   
                    
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/dom-factory.js"></script>
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- App JS -->
    <script src="assets/js/app.js"></script>

    <!-- Highlight.js -->
    <script src="assets/js/hljs.js"></script>

    <!-- App Settings (safe to remove) -->
    <script src="assets/js/app-settings.js"></script>






    <!-- List.js -->
    <script src="assets/vendor/list.min.js"></script>
    <script src="assets/js/list.js"></script>

    <!-- Tables -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>



  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="https://loopj.com/jquery-tokeninput/src/jquery.tokeninput.js"></script>


<script>


 
  function Full_W_P(url) {
    var test_id = $(url).data("id");
   
 params  = 'width='+screen.width;
params += ', height='+screen.height;
 params += ', top=0, left=0'
params += ', fullscreen=yes';
 params += ', directories=no';
params += ', location=no';
 params += ', menubar=no';
 params += ', resizable=no';
params += ', scrollbars=no';
params += ', status=no';
 params += ', toolbar=no';
 var link = 'test-panel.php?test_id='+test_id;
  
 newwin=window.open(link,'FullWindowAll', params);
 if (window.focus) {newwin.focus()}
 return false;
} 





  $( function() {
    var availableTags = [<?php echo $arraytitle; ?>];
    
    $("#test_title").autocomplete({
      source: availableTags
    });
  } );


</script>
<script type="text/javascript">
  $('.checked_frame').click(function(){
var favorite = [];
            $.each($("input[name='checked_box']:checked"), function(){            
                favorite.push($(this).val());
            });
             var num =  favorite.join(", ");
              var numcount = favorite.join(",");
               var numbersArray = numcount.split(',');
               $('.checked_count').text('No of Checked Questions ' + numbersArray.length);
             
});

  $('.start_test').click(function(){
    var start_test_id = $(this).data("start-id");
    //console.log(start_test_id);
    //alert(start_test_id);

     $.ajax({
        type:'POST',
        url:'ajax-file.php',
        data:'start_test_id='+start_test_id,
        success:function(html){
          //console.log(html);
            $("#start_test").html(html);

        }
    })


  })
</script>


</body>

</html>