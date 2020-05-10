
    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>PRIVATEFUND REGISTER</title>

        <link rel="stylesheet" href="plugins/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">

        <link rel="stylesheet" href="css/fund_register.css">
        <link rel="stylesheet" href="css/jquery.datatable.min.css">
        <link rel="stylesheet" href="css/app_1.min.css">
        <link rel="stylesheet" href="css/app_2.min.css">
        <!-- <link rel="stylesheet" href="css/inlineedit.css"> -->

        <style>
          #tableReport{
            white-space: nowrap;
          }
        </style>

    <body>

    <?php
      include('register_func.php');

      $db = new MysqliDb('localhost', DB_USER, DB_PASSWORD, DB_NAME);
      $cols = $db->rawQueryValue("SHOW COLUMNS FROM #");
      $datas = $db->get('#');
      
  ?>

            <div class="container">
                <div class="row">
                    <div class="col-sm-12 m-t-30 m-b-30 content-get-a fund-register--container">
                      <div class="card">
                          <div class="card-body card-padding">

                              <div class="m-b-15">
                                <h3 class="m-0 pull-left">Report Private Fund</h3>
                                <a href="export_csv.php" class="btn btn-success pull-right">Export CSV</a>

                                <div class="clearfix"></div>
                              </div>
                              <div class="table-responsive">
                                <table id="tableReport" class="table table-striped">
                                  <thead>
                                    <tr class="info">
                                      <?php foreach(  $cols as $col ): ?>
                                        <td class="text-center"><?php echo  $col ?></td>
                                      <?php endforeach;?>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php foreach( $datas as $data ): ?>
                                      <tr>
                                        <?php foreach(  $cols as $col ): ?>

                                          <?php if($col == 'CustomFrontendFee'): ?>
                                              <td><span class="inline-edit" data-id="<?php echo $data['id'] ?>">
                                                <?php echo $data[ $col ] ?>
                                                </span>
                                              </td>
                                          <?php else : ?>
                                          <td><?php echo $data[ $col ] ?></td>
                                          <?php endif; ?>
                                          
                                        <?php endforeach;?>
                                      </tr>
                                    <?php endforeach; ?>
                                  </tbody>
                                </table>
                              </div>

                          </div>
                      </div>
                        

                    </div>
                </div>
            </div>



            <footer class="section">
              <div class="container">
                <div class="row text-center">
                  <div class="col-xs-12">
                    <ul class="cleargap inline list-social">
                      <li><a href="/contact"><i class="fa fa-phone" aria-hidden="true"></i></a></li>
                      <li><a href="http://line.me/ti/p/@vui2545c"><img src="images/i-line.png" alt=""></a></li>
                      <li><a href="https://www.facebook.com"><i class="zmdi zmdi-facebook" aria-hidden="true"></i></a></li>
                      <li><a href="https://twitter.com"><i class="zmdi zmdi-twitter" aria-hidden="true"></i></a></li>
                      <li><a href="https://www.linkedin.com/company"><i class="zmdi zmdi-linkedin" aria-hidden="true"></i></a></li>
                      <li><a href="/contact"><i class="zmdi zmdi-email" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
                  <div class="col-xs-12">
                    <img src="images/logo-footer.png" alt="" class="logo-footer">
                  </div>
                  <div class="col-xs-12">
                    <div class="copyright text-center">Copyright ©2017 Company. All rights reserved.</div>
                  </div>
                </div>
              </div>
            </footer>


    </body>




    <script src="scripts/jquery-1.10.2.min.js"></script>
    <script src="plugins/bootstrap3/js/bootstrap.min.js"></script>
    <script src="bower_components/jquery-table2excel/dist/jquery.table2excel.min.js"></script>
    <script src="scripts/jquery.dataTables.min.js"></script>
    <script src="scripts/inlineedit.js"></script>

    <script>

    $(document).ready(function() {
      
      var table = $('#tableReport').DataTable({
        "paging":   false,
        "ordering": false,
        "info":     false,
        "dom": 'rtip',
        "initComplete": function(settings, json) {
          $('.inline-edit').inlineEdit('click', function(text, originalText, element){
                var dataId = element.attr('data-id');
                $.ajax({
                  type: 'POST',
                  url: 'ajax.php?action=edit_fee',
                  data: {'id': dataId, 'value': text},
                  dataType: 'json',
                  success: function( res ){
                    if( res.result ){
                      alert('Update Success');
                    } else {
                      alert('Update Failed');
                    }
                  }
                });
          });
        }
      });

      
      
    });

    $(function() {

        jQuery('#btn-export').on('click', function(){
          jQuery("#tableReport").table2excel({
            exclude: ".noExl",
            name: "Private Fund",
            filename: "fundregister_report",
            exclude_img: true,
            exclude_links: true,
            exclude_inputs: true
          });
        });

      });
    </script>

    </html>