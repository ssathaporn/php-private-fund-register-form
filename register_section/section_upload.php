
<h3 class="c_midnight_green f-700">อัพโหลดเอกสาร</h3>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>บัตรประจำตัวประชาชน หรือ พาสปอร์ต (ID Card / Passport) <span class="text-danger">jpg, jpeg, png</span></label>

            <div>
                <div class="image-preview" v-if="imageIdCard.length > 0">
                    <img class="preview" :src="imageIdCard" width="200">
                </div>
            </div>
            <div>
                <div class="fileinput fileinput-exists" data-provides="fileinput">
                    <span class="btn btn-primary btn-file m-r-10 waves-effect">
                        <span class="fileinput-new">Select file</span>
                        <input type="file" @change="previewImageIdCard" id="upload_idcard" accept="image/*">
                    </span>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>สำเนาทะเบียนบ้าน (Household registration) <span class="text-danger">jpg, jpeg, png</span></label>

            <div>
                <div class="image-preview" v-if="imageHouseHold.length > 0">
                    <img class="preview" :src="imageHouseHold" width="200">
                </div>
            </div>
            <div>
                <div class="fileinput fileinput-exists" data-provides="fileinput">
                    <span class="btn btn-primary btn-file m-r-10 waves-effect">
                        <span class="fileinput-new">Select file</span>
                        <input type="file" @change="previewImageHouseHold" id="upload_household" accept="image/*">
                    </span>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>สมุดบัญชีธนาคาร (Book bank) <span class="text-danger">jpg, jpeg, png</span></label>

            <div>
                <div class="image-preview" v-if="imageBookBank.length > 0">
                    <img class="preview" :src="imageBookBank" width="200">
                </div>
            </div>
            <div>
                <div class="fileinput fileinput-exists" data-provides="fileinput">
                    <span class="btn btn-primary btn-file m-r-10 waves-effect">
                        <span class="fileinput-new">Select file</span>
                        <input type="file" @change="previewImageBookBank" id="upload_bookbank" accept="image/*">
                    </span>
                </div>
            </div>

        </div>
    </div>
</div>

<input type="hidden" name="upload_idcard">
<input type="hidden" name="upload_household">
<input type="hidden" name="upload_bookbank">

<div class="row m-t-20">
    <div class="col-sm-12">
        <a href="#" v-on:click="setActive('4')" class="btn btn-primary pull-left" data-slide="3" onclick="$('#carouselRegister').carousel(3)"><i class="zmdi zmdi-chevron-left"></i> ย้อนกลับ</a>
        <button type="button" v-on:click="checkForm" :disabled="submitDisabled == true" class="btn btn-success pull-right">ส่งข้อมูล</button>
        <!-- <button type="submit" class="btn btn-success pull-right">ส่งข้อมูล</button> -->
    </div>
</div>