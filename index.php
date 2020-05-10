<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
?>

    <!doctype html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>PRIVATEFUND REGISTER</title>

        <link rel="stylesheet" href="plugins/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">

        <link rel="stylesheet" href="css/app_1.min.css?ver=<?php echo time(); ?>">
        <link rel="stylesheet" href="css/fund_register.css?ver=<?php echo time(); ?>">

    <body>

    <?php
      include('register_func.php');

      $db = new MysqliDb([
        'host' => 'localhost',
        'username' => DB_USER, 
        'password' => DB_PASSWORD,
        'db'=> DB_NAME,
        'charset' => 'utf8'
    ]);     
      $provinces = $db->get('fund_provinces');
      $countries = $db->get('fund_countries');

      $businessTypes = $db->get('fund_business_types');
      $sourceIncomes = $db->get('fund_source_income');

      
  ?>

  <div class="container">
      <div class="row">
          <div class="col-sm-10 col-sm-offset-1 m-t-30 m-b-30 content-get-a fund-register--container">
                <div class="p-20 bgm-midnight-blue">
                    <img src="images/logo.png?ver=<?php echo time(); ?>" alt="" style="width: 145px;">
                </div>
              <div class="info">
                  <div class="msg-box-icon pngfix">
                      <div class="card">
                          <div class="card-body card-padding">

                              <form action="?action=save" @submit="checkForm" id="formRegister" method="post">

                                  <?php
                                      if( isset($_GET['action']) ){
                                        // pr( $_POST);
                                        // exit();
                                        $datas = $_POST['formData'];

                                        // BirthDate
                                        if( !empty( $datas['BirthDate'] ) && $datas['BirthDate'] != '' ){
                                            $datas['BirthDate'] = mysql_date_format($datas['BirthDate']);
                                        }

                                        if( !empty( $datas['PersonalId'] ) && $datas['PersonalId'] != '' ){
                                            $datas['PersonalId'] = str_replace("-", '', $datas['PersonalId']);
                                        }

                                        // ExpiryDate
                                        if( isset($_POST['chkExpiryDate']) ){
                                            $datas['ExpiryDate'] = '9999-12-31';
                                        } else {
                                            $datas['ExpiryDate'] = mysql_date_format($datas['ExpiryDate']);
                                        }
                                        
                                        // ObjectiveFor
                                        if( isset($_POST['ObjectiveFor']) ){
                                            $datas['ObjectiveFor'] = checkbox_value_to_array( $_POST['ObjectiveFor'] );
                                        }

                                        // ForeignInvObj
                                        if( isset($_POST['ForeignInvObj']) ){
                                            $datas['ForeignInvObj'] = checkbox_value_to_array( $_POST['ForeignInvObj'] );
                                        }

                                        // TypeOfInv
                                        if( isset($_POST['TypeOfInv']) ){
                                            $datas['TypeOfInv'] = checkbox_value_to_array( $_POST['TypeOfInv'] );
                                        }

                                        // ForeignInvSource
                                        if( isset($_POST['ForeignInvSource']) ){
                                            $datas['ForeignInvSource'] = checkbox_value_to_array( $_POST['ForeignInvSource'] );
                                        }

                                        //  Risk Profile
                                        if( isset($_POST['formRisk']) ){
                                            $datas['RiskProfile'] = checkbox_value_to_array( $_POST['formRisk'] );
                                        }

                                        // Fatca
                                        if( isset($_POST['formFatca']) ){
                                            $datas['Fatca'] = checkbox_value_to_array( $_POST['formFatca'] );
                                        }

                                        $datas['CustomFrontendFee'] = '1';

                                        // pr($datas);
                                        $save = $db->insert('#', $datas);

                                        if( $save ){
                                            header('Location: /success.php');
                                        } else {
                                            echo "<div class='alert alert-danger'>". $db->getLastError() ."</div>";
                                        }
                                    }
                                  ?>
                                    <ul class="nav nav-wizard m-b-10">
                                        <li v-on:click="setActive('1')" :class="{ active: isActive == '1' }"><a href="javascript: void(0);" data-slide="0" onclick="$('#carouselRegister').carousel(0)">ข้อมูลส่วนตัว</a></li>
                                        <li v-on:click="setActive('2')" :class="{ active: isActive == '2' }"><a href="javascript: void(0);" data-slide="1" onclick="$('#carouselRegister').carousel(1)">ข้อมูลการลงทุน</a></li>
                                        <li v-on:click="setActive('3')" :class="{ active: isActive == '3' }"><a href="javascript: void(0);" data-slide="2" onclick="$('#carouselRegister').carousel(2)">Risk Profile</a></li>
                                        <li v-on:click="setActive('4')" :class="{ active: isActive == '4' }"><a href="javascript: void(0);" data-slide="3" onclick="$('#carouselRegister').carousel(3)">FATCA</a></li>
                                        <li v-on:click="setActive('5')" :class="{ active: isActive == '5' }"><a href="javascript: void(0);" data-slide="3" onclick="$('#carouselRegister').carousel(4)">อัพโหลดเอกสาร</a></li>
                                    </ul>

                                      <div id="carouselRegister" class="carousel" data-interval="false">

                                          <!-- Wrapper for slides -->
                                          <div class="carousel-inner" role="listbox">

                                                <div class="item active">
                                                    <!-- section 1 -->
                                                    <?php require 'register_section/section_1.php'; ?>
                                                </div>
                                                
                                                <div class="item">
                                                    <!-- section 2 -->
                                                    <?php require 'register_section/section_2.php'; ?>
                                                    <!-- section 3 -->
                                                    <?php require 'register_section/section_3.php'; ?>
                                                    <!-- section 4 -->
                                                    <?php require 'register_section/section_4.php'; ?>
                                                </div>
                                                
                                                <div class="item">
                                                    <!-- section 5 -->
                                                    <?php require 'register_section/section_5.php'; ?>
                                                </div>

                                                <div class="item">
                                                    <!-- form FATCA -->
                                                    <?php require 'register_section/section_fatca.php'; ?>
                                                </div>

                                                <div class="item">
                                                    <!-- form FATCA -->
                                                    <?php require 'register_section/section_upload.php'; ?>
                                                </div>
                                            </div>

                                      </div>


                              </form>
                          </div>
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
                      <li>
                          <a href="/contact">
                              <i class="fa fa-phone" aria-hidden="true"></i>
                          </a>
                      </li>
                      <li>
                          <a href="http://line.me/ti/p/@vui2545c">
                              <img src="images/i-line.png" alt="">
                          </a>
                      </li>
                      <li>
                          <a href="https://www.facebook.com">
                              <i class="zmdi zmdi-facebook" aria-hidden="true"></i>
                          </a>
                      </li>
                      <li>
                          <a href="https://twitter.com">
                              <i class="zmdi zmdi-twitter" aria-hidden="true"></i>
                          </a>
                      </li>
                      <li>
                          <a href="https://www.linkedin.com/company">
                              <i class="zmdi zmdi-linkedin" aria-hidden="true"></i>
                          </a>
                      </li>
                      <li>
                          <a href="/contact">
                              <i class="zmdi zmdi-email" aria-hidden="true"></i>
                          </a>
                      </li>
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

        <script src="plugins/jquery/dist/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

        <script src="node_modules/inputmask/dist/inputmask/dependencyLibs/inputmask.dependencyLib.js"></script>
        <script src="node_modules/inputmask/dist/inputmask/inputmask.js"></script>
        <script src="node_modules/vee-validate/dist/vee-validate.js"></script>
        <script src="node_modules/vee-validate/dist/locale/th.js"></script>
        <script src="scripts/vue-inputmask-browser.js"></script>

        <script src="plugins/bootstrap3/js/bootstrap.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/5.0.3/firebase.js"></script>
        <!-- <script src="plugins/jquery-plugin-mask/dist/jquery.mask.js"></script> -->
        <script>
            window.onload = function(e){ 
               
            }

            
            Vue.use(VueInputmask);
            Vue.use(VeeValidate, {
                locale: 'th',
            });
            var app = new Vue({
                el: '#formRegister',
                data: {
                    isActive: 1,
                    inputExpiryDate: '',
                    chkExpiryDate: false,

                    PersonalIdType: 'Thai Citizen ID',
                    ContactAddressDup: 'citizen',
                    WorkAddressDup: '',
                    MarriedStatus: '',

                    IsPolitician: '0',
                    IsRelatedPolitician: '0',
                    IsLaunderingLaws: '0',
                    IsOtherBenefit: '0',
                    IsRelatedPolitician: '0',
                    IsOtherLastTrade: '0',

                    checkedRiskProfile: [],
                    riskProfileSum: 0,

                    imageIdCard: '',
                    imageHouseHold: '',
                    imageBookBank: '',
                    upload_idcard: '',
                    upload_household: '',
                    upload_bookbank: '',
                    
                    submitDisabled: false
                },
                methods:{
                    validateForm: function(){
                        this.$validator.validateAll().then(result => {
                            console.log(result);
                        });
                    },
                    checkForm:function(event){
                         // Initialize Firebase
                        var config = {
                            apiKey: "#",
                            authDomain: "#",
                            databaseURL: "#",
                            projectId: "#",
                            storageBucket: "#",
                            messagingSenderId: "#"
                        };
                        let d = new Date();
                        let haveUpload = 0;

                        firebase.initializeApp(config);

                        // Get a reference to the storage service, which is used to create references in your storage bucket
                        var storageRef = firebase.storage().ref();

                        var fileIdCard = document.querySelector('input[id="upload_idcard"]').files;
                        var fileIdHouseHold = document.querySelector('input[id="upload_household"]').files;
                        var fileIdBookBank = document.querySelector('input[id="upload_bookbank"]').files;
                        
                        if( fileIdCard.length > 0 ){
                            haveUpload++;
                            storageRef.child('document/' + d.getTime() +'_id_card_'+ fileIdCard[0].name).put(fileIdCard[0]).then(function(snapshot) {
                                snapshot.ref.getDownloadURL().then(function(url) {
                                    this.upload_idcard = url;
                                    haveUpload--;
                                    app.submitTheForm(haveUpload);
                                });
                            }).catch(function(error) {
                                alert('Upload failed:', error);
                            });
                        }
                        if( fileIdHouseHold.length > 0 ){
                            haveUpload++;
                            storageRef.child('document/' + d.getTime() +'_house_hold_'+ fileIdHouseHold[0].name).put(fileIdHouseHold[0]).then(function(snapshot) {
                                snapshot.ref.getDownloadURL().then(function(url) {
                                    this.upload_household = url;
                                    haveUpload--;
                                    app.submitTheForm(haveUpload);
                                });
                            }).catch(function(error) {
                                alert('Upload failed:', error);
                            });
                        }
                        if( fileIdBookBank.length > 0 ){
                            haveUpload++;
                            storageRef.child('document/' + d.getTime() +'_book_bank_'+ fileIdBookBank[0].name).put(fileIdBookBank[0]).then(function(snapshot) {
                                snapshot.ref.getDownloadURL().then(function(url) {
                                    this.upload_bookbank = url;
                                    haveUpload--;
                                    app.submitTheForm(haveUpload);
                                });
                            }).catch(function(error) {
                                alert('Upload failed:', error);
                            });
                        }
                        

                    },
                    submitTheForm:function(num){
                        if( num == 0 ){
                            alert('submit');
                        }
                    },
                    setActive:function(el){
                        this.isActive = el;
                    },
                    sumRiskProfile(event) {
                        
                        var rdoRiskItem = []
                        this.riskProfileSum = 0;
                        rdoRiskItem[0]  = document.querySelector('input[name="formRisk[AgeRange]"]:checked');
                        rdoRiskItem[1]  = document.querySelector('input[name="formRisk[Graduated]"]:checked');
                        rdoRiskItem[2]  = document.querySelector('input[name="formRisk[InvExp]"]:checked');
                        rdoRiskItem[3]  = document.querySelector('input[name="formRisk[InvDuration]"]:checked');
                        rdoRiskItem[4]  = document.querySelector('input[name="formRisk[InvIncome]"]:checked');
                        rdoRiskItem[5]  = document.querySelector('input[name="formRisk[InvPart]"]:checked');
                        rdoRiskItem[6]  = document.querySelector('input[name="formRisk[InvPassion]"]:checked');
                        rdoRiskItem[7]  = document.querySelector('input[name="formRisk[RiskLoss]"]:checked');
                        rdoRiskItem[8]  = document.querySelector('input[name="formRisk[PrincipleLoss]"]:checked');
                        rdoRiskItem[9]  = document.querySelector('input[name="formRisk[YieldLoss]"]:checked');
                        
                        rdoRiskItem.forEach((rdoItem) => {
                            if( rdoItem !== null ){
                                this.riskProfileSum = parseInt(this.riskProfileSum)  + parseInt(rdoItem.value);
                            }
                        });

                        // console.log(this.riskProfileSum);
                    },
                    previewImageIdCard: function(event) {
                        // Reference to the DOM input element
                        var input = event.target;
                        if (input.files && input.files[0]) {

                            if( input.files[0].size > 1500000 ){
                                alert('ไฟล์ภาพทีขนาดใหญ่เกินไป');
                                return false;
                            }
                            var reader = new FileReader();
                            reader.onload = (e) => {
                                this.imageIdCard = e.target.result;
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    },
                    previewImageHouseHold: function(event) {
                        // Reference to the DOM input element
                        var input = event.target;
                        if (input.files && input.files[0]) {
                            if( input.files[0].size > 1500000 ){
                                alert('ไฟล์ภาพทีขนาดใหญ่เกินไป');
                                return false;
                            }
                            var reader = new FileReader();
                            reader.onload = (e) => {
                                this.imageHouseHold = e.target.result;
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    },
                    previewImageBookBank: function(event) {
                        // Reference to the DOM input element
                        var input = event.target;
                        if (input.files && input.files[0]) {
                            if( input.files[0].size > 1500000 ){
                                alert('ไฟล์ภาพทีขนาดใหญ่เกินไป');
                                return false;
                            }
                            var reader = new FileReader();
                            reader.onload = (e) => {
                                this.imageBookBank = e.target.result;
                            }
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                }
            });

            
            

        </script>
</html>