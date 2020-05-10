<!-- <p class="text-right">1/4</p> -->
<h3 class="c_midnight_green f-700">แบบข้อมูลลูกค้า (Customer Profile)</h3>

<div class="row">
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>คำนำหน้า <span class="text-danger">*</span></label>
            <select name="formData[Title]" id="formData_Title" class="form-control fc-alt">
                <option value="">-- เลือกคำนำหน้า</option>
                <option value="นาย">นาย (Mr.)</option>
                <option value="นาง">นาง (Mrs.)</option>
                <option value="นางสาว">นางสาว (Ms.)</option>
                <option value="นางสาว">นางสาว (Ms.)</option>
                <option value="อื่นๆ">อื่นๆ (Others)</option>
            </select>
            <input type="text" class="form-control fc-alt hidden" name="Title_etc" id="Title_etc">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>วันเกิด (พ.ศ.) <span class="text-danger">*</span></label>
            <input type="text" name="formData[BirthDate]"  v-mask="'99/99/9999'" placeholder="ตัวอย่าง 31/05/1990" class="form-control fc-alt">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>สัญชาติ <span class="text-danger">*</span></label>
            <?php echo render_dropdown_citizen('formData[Citizen]'); ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>ชื่อ (ภาษาไทย) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[FirstNameTH]" id="FirstNameTH">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>นามสกุล (ภาษาไทย) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[LastNameTH]" id="LastNameTH">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>ชื่อ (ภาษาอังกฤษ) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[FirstNameEN]" id="FirstNameEN">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>นามสกุล (ภาษาอังกฤษ) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[LastNameEN]" id="LastNameEN">
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>หลักฐานประจำตัว <span class="text-danger">*</span></label>
            <select name="formData[PersonalIdType]" v-model="PersonalIdType" id="formData_PersonalIdType" class="form-control fc-alt">
                <option value="">-- เลือกหลักฐานประจำตัว</option>
                <option value="Thai Citizen ID">บัตรประชาชน (ID card)</option>
                <option value="Passport">หนังสือเดินทาง (Passport)</option>
            </select>
        </div>
    </div>
    <div class="col-sm-3" v-if="PersonalIdType === 'Thai Citizen ID'">
        <div class="form-group fg-line">
            <label>เลขประจำตัวประชาชน <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" v-mask="'9-9999-99999-99-9'" placeholder="เลขประจำตัวประชาชน 13 หลัก" name="formData[PersonalId]" id="PersonalId">
        </div>
    </div>
    <div class="col-sm-3" v-if="PersonalIdType === 'Thai Citizen ID'">
        <div class="form-group fg-line">
            <label>ออกโดย (Issued by) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[IssueBy]" id="IssueBy">
        </div>
    </div>
    <div class="col-sm-3" v-if="PersonalIdType === 'Thai Citizen ID'">
        <div class="form-group fg-line">
            <label>วันหมดอายุ (พ.ศ.) (Expiry Date) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" v-mask="'99/99/9999'"  placeholder="ตัวอย่าง 31/05/2019" :readonly="chkExpiryDate" name="formData[ExpiryDate]" id="ExpiryDate">
            <div class="checkbox">
                <label>
                    <input type="checkbox" v-model="chkExpiryDate" name="chkExpiryDate"><i class="input-helper"></i> ตลอดชีวิต
                </label>
            </div>
        </div>
    </div>
    <div class="col-sm-3" v-if="PersonalIdType === 'Passport'">
        <div class="form-group fg-line">
            <label>หมายเลขพาสปอร์ต <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="Passport_number" id="Passport_number">
        </div>
    </div>
</div>


้<h4>ที่อยู่ตามทะเบียนบ้าน (Resident Registered Address)</h4>

<div class="row">
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>เลขที่ <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[CitizenHouseNo]">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>หมู่ที่</label>
            <input type="text" class="form-control fc-alt" name="formData[CitizenVillageNo]">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>หมู่บ้าน <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[CitizenVillage]">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>อาคาร</label>
            <input type="text" class="form-control fc-alt" name="formData[CitizenBuilding]">
        </div>
    </div>
    <div class="col-sm-1">
        <div class="form-group fg-line">
            <label>ชั้น</label>
            <input type="text" class="form-control fc-alt" name="formData[CitizenFloor]">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>ซอย</label>
            <input type="text" class="form-control fc-alt" name="formData[CitizenLane]">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>ถนน</label>
            <input type="text" class="form-control fc-alt" name="formData[CitizenRoad]">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>แขวง/ตำบล</label>
            <input type="text" class="form-control fc-alt" name="formData[CitizenSubDistrict]">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>เขต/อำเภอ</label>
            <input type="text" class="form-control fc-alt" name="formData[CitizenDistrict]">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>จังหวัด <span class="text-danger">*</span></label>
            <select name="formData[CitizenProvince]" class="form-control fc-alt">
                <option value="">-- เลือกจังหวัด</option>
                <?php foreach( $provinces as $prov ): ?>
                    <option value="<?php echo $prov['id'] ?>"><?php echo $prov['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>รหัสไปรษณีย์</label>
            <input type="text" class="form-control fc-alt" v-mask="'99999'" name="formData[CitizenPostalCode]">
        </div>
    </div>
    
</div>


้<h4>ข้อมูลการติดต่อ (Contact Information)</h4>

<div class="row">
    <div class="col-sm-12">
        <ul class="list-unstyled list-inline">
            <li>
                <div class="radio">
                    <label>
                        <input type="radio" v-model="ContactAddressDup" name="formData[ContactAddressDup]" checked="checked" value="citizen"><i class="input-helper"></i> ใช้ที่อยู่เดียวกับที่อยู่ตามทะเบียนบ้าน
                    </label>
                </div>
            </li>
            <li>
                <div class="radio">
                    <label>
                        <input type="radio" v-model="ContactAddressDup" name="formData[ContactAddressDup]" value="none"><i class="input-helper"></i> อื่นๆ
                    </label>
                </div>
            </li>
        </ul>
    </div>
</div>

<div id="form-contact_address" v-if="ContactAddressDup === 'none'">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group fg-line">
                <label>เลขที่ <span class="text-danger">*</span></label>
                <input type="text" class="form-control fc-alt" name="formData[ContactHouseNo]">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group fg-line">
                <label>หมู่ที่</label>
                <input type="text" class="form-control fc-alt" name="formData[ContactVillageNo]">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group fg-line">
                <label>หมู่บ้าน <span class="text-danger">*</span></label>
                <input type="text" class="form-control fc-alt" name="formData[ContactVillage]">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group fg-line">
                <label>อาคาร</label>
                <input type="text" class="form-control fc-alt" name="formData[ContactBuilding]">
            </div>
        </div>
        <div class="col-sm-1">
            <div class="form-group fg-line">
                <label>ชั้น</label>
                <input type="text" class="form-control fc-alt" name="formData[ContactFloor]">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group fg-line">
                <label>ซอย</label>
                <input type="text" class="form-control fc-alt" name="formData[ContactLane]">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group fg-line">
                <label>ถนน</label>
                <input type="text" class="form-control fc-alt" name="formData[ContactRoad]">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group fg-line">
                <label>แขวง/ตำบล</label>
                <input type="text" class="form-control fc-alt" name="formData[ContactSubDistrict]">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group fg-line">
                <label>เขต/อำเภอ</label>
                <input type="text" class="form-control fc-alt" name="formData[ContactDistrict]">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group fg-line">
                <label>จังหวัด <span class="text-danger">*</span></label>
                <select name="formData[ContactProvince]" class="form-control fc-alt">
                    <option value="">-- เลือกจังหวัด</option>
                    <?php foreach( $provinces as $prov ): ?>
                        <option value="<?php echo $prov['id'] ?>"><?php echo $prov['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group fg-line">
                <label>รหัสไปรษณีย์ <span class="text-danger">*</span></label>
                <input type="text" class="form-control fc-alt" v-mask="'99999'" name="formData[ContactPostalCode]">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <span>โทรศัพท์บ้าน (Telephone)</span>
            <input type="text" class="form-control fc-alt" name="formData[Telephone]" id="Telephone">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <span>มือถือ (Mobile) <span class="text-danger">*</span></span>
            <input type="text" class="form-control fc-alt" name="formData[Mobile]" id="Mobile">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <span>โทรสาร (Fax)</span>
            <input type="text" class="form-control fc-alt" name="formData[Fax]" id="Fax">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <span>อีเมล์ (E-mail) <span class="text-danger">*</span></span>
            <input type="text" class="form-control fc-alt" name="formData[Email]" id="Email">
        </div>
    </div>
</div>


<h4>ระดับการศึกษาสูงสุด (Highest Education)</h4>

<div class="row m-b-25">  
    <div class="col-sm-12">
        <ul class="list-unstyled list-inline">
            <li>
                <div class="radio">
                    <label>
                        <input type="radio" name="formData[EduLevel]" value="1"><i class="input-helper"></i> ต่ำกว่าปริญญาตรี
                    </label>
                </div>
            </li>
            <li>
                <div class="radio">
                    <label>
                        <input type="radio" name="formData[EduLevel]" value="2"><i class="input-helper"></i> ปริญญาตรี
                    </label>
                </div>
            </li>
            <li>
                <div class="radio">
                    <label>
                        <input type="radio" name="formData[EduLevel]" value="3"><i class="input-helper"></i> ปริญญาตรีขึ้นไป
                    </label>
                </div>
            </li>
        </ul>
    </div>
</div>


<h4>ข้อมูลอาชีพ (Occupation Information)</h4>

<div class="row">
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <span>อาชีพ (Occupation) <span class="text-danger">*</span></span>
            <input type="text" class="form-control fc-alt" name="formData[Occupation]" id="Occupation">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <span>ชื่อที่ทำงาน (Name of Company)</span>
            <input type="text" class="form-control fc-alt" name="formData[WorkPlace]" id="WorkPlace">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <span>ประเภทธุรกิจ (Type of Business) <span class="text-danger">*</span></span>
            <select name="formData[BusinessType]" class="form-control fc-alt">
                <option value="">-- เลือกประเภทธุรกิจ</option>
                <?php foreach( $businessTypes as $businessType): ?>
                    <option value="<?php echo $businessType['id'] ?>" data-risklevel="<?php echo $businessType['risk_level'] ?>"><?php echo $businessType['description'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <span>ตำแหน่ง (Position) <span class="text-danger">*</span></span>
            <input type="text" class="form-control fc-alt" name="formData[Position]" id="Position">
        </div>
    </div>
</div>


<h4>ที่อยู่ที่ทำงาน (Company’s Address)</h4>


<div class="row">
    <div class="col-sm-12">
        <ul class="list-unstyled list-inline">
            <li>
                <div class="radio">
                    <label>
                        <input type="radio" v-model="WorkAddressDup" name="formData[WorkAddressDup]" value="citizen"><i class="input-helper"></i> ใช้ที่อยู่เดียวกับที่อยู่ตามทะเบียนบ้าน
                    </label>
                </div>
            </li>
            <li>
                <div class="radio">
                    <label>
                        <input type="radio" v-model="WorkAddressDup" name="formData[WorkAddressDup]" value="contact"><i class="input-helper"></i> ใช้ที่อยู่ที่เดียวกับที่ติดต่อได้
                    </label>
                </div>
            </li>
            <li>
                <div class="radio">
                    <label>
                        <input type="radio" v-model="WorkAddressDup" name="formData[WorkAddressDup]" checked="checked"  value="none"><i class="input-helper"></i> อื่นๆ
                    </label>
                </div>
            </li>
        </ul>
    </div>
</div>

<div id="form-company_address" v-if="WorkAddressDup === 'none'">
    <div class="row">
        <div class="col-sm-4">
            <div class="form-group fg-line">
                <label>เลขที่ <span class="text-danger">*</span></label>
                <input type="text" class="form-control fc-alt" name="formData[WorkHouseNo]">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group fg-line">
                <label>หมู่ที่</label>
                <input type="text" class="form-control fc-alt" name="formData[WorkVillageNo]">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group fg-line">
                <label>หมู่บ้าน <span class="text-danger">*</span></label>
                <input type="text" class="form-control fc-alt" name="formData[WorkVillage]">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group fg-line">
                <label>อาคาร</label>
                <input type="text" class="form-control fc-alt" name="formData[WorkBuilding]">
            </div>
        </div>
        <div class="col-sm-1">
            <div class="form-group fg-line">
                <label>ชั้น</label>
                <input type="text" class="form-control fc-alt" name="formData[WorkFloor]">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group fg-line">
                <label>ซอย</label>
                <input type="text" class="form-control fc-alt" name="formData[WorkLane]">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group fg-line">
                <label>ถนน</label>
                <input type="text" class="form-control fc-alt" name="formData[WorkRoad]">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-3">
            <div class="form-group fg-line">
                <label>แขวง/ตำบล</label>
                <input type="text" class="form-control fc-alt" name="formData[WorkSubDistrict]">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group fg-line">
                <label>เขต/อำเภอ</label>
                <input type="text" class="form-control fc-alt" name="formData[WorkDistrict]">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group fg-line">
                <label>จังหวัด <span class="text-danger">*</span></label>
                <select name="formData[WorkProvince]" class="form-control fc-alt">
                    <option value="">-- เลือกจังหวัด</option>
                    <?php foreach( $provinces as $prov ): ?>
                        <option value="<?php echo $prov['id'] ?>"><?php echo $prov['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group fg-line">
                <label>รหัสไปรษณีย์ <span class="text-danger">*</span></label>
                <input type="text" class="form-control fc-alt" v-mask="'99999'" name="formData[WorkPostalCode]">
            </div>
        </div>
    </div>
</div>

้<h4>รายได้ (Income)</h4>

<div class="row">
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>รายได้ต่อเดือน (Monthly Income) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[MonthlyIncome]" id="MonthlyIncome">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>ที่มาของรายได้ (Other source of income)</label>
            <select name="formData[SourceOfIncome]" class="form-control fc-alt">
                <?php foreach( $sourceIncomes as $sourceIncome ): ?>
                    <option value="<?php echo $sourceIncome['key'] ?>"><?php echo $sourceIncome['description'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>รายได้ครอบครัวต่อปี (Family Income) <span class="text-danger">*</span></label>
            <ul class="list-inline list-unstyled">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[YearlyIncome]" value="1">
                            <i class="input-helper"></i>
                            น้อยกว่า 1 ล้านบาท
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[YearlyIncome]" value="2">
                            <i class="input-helper"></i>
                            1-5 ล้านบาท
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[YearlyIncome]" value="3">
                            <i class="input-helper"></i>
                            5-10 ล้านบาท
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[YearlyIncome]" value="4">
                            <i class="input-helper"></i>
                            10 ล้านบาทขึ้นไป
                        </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>รายจ่ายครอบครัวต่อปี (Family Expenses) <span class="text-danger">*</span></label>
            <ul class="list-inline list-unstyled">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[YearlySpent]" value="1">
                            <i class="input-helper"></i>
                            น้อยกว่า 1 ล้านบาท
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[YearlySpent]" value="2">
                            <i class="input-helper"></i>
                            1-5 ล้านบาท
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[YearlySpent]" value="3">
                            <i class="input-helper"></i>
                            5-10 ล้านบาท
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[YearlySpent]" value="4">
                            <i class="input-helper"></i>
                            10 ล้านบาทขึ้นไป
                        </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

้<h4>สถานภาพสมรส (Status)</h4>


<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <ul class="list-inline list-unstyled">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" v-model="MarriedStatus" name="formData[MarriedStatus]" value="1">
                            <i class="input-helper"></i>
                            โสด (Single)
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" v-model="MarriedStatus" name="formData[MarriedStatus]" value="2">
                            <i class="input-helper"></i>
                            สมรส (Married)
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" v-model="MarriedStatus" name="formData[MarriedStatus]" value="3">
                            <i class="input-helper"></i>
                            หย่า (Divorce)
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" v-model="MarriedStatus" name="formData[MarriedStatus]" value="4">
                            <i class="input-helper"></i>
                            หม้าย (Widowed)
                        </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>จำนวนผู้อยู่ในอุปการะ (No. of dependant) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[NumberOfChild]" id="NumberOfChild" value="0">
        </div>
    </div>
</div>

<div class="row" v-if="MarriedStatus === '2'">
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>ชื่อคู่สมรส (Spouse’s Name) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[SpouseFirstName]" id="SpouseFirstName">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>นามสกุล (Spouse’s LastName) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[SpouseLastName]" id="SpouseLastName">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>อาชีพคู่สมรส (Occupation) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[SpouseOccupation]" id="SpouseOccupation">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>โทรศัพท์(Telephone) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[SpousePhone]" id="SpousePhone">
        </div>
    </div>
</div>

<div class="row m-t-20">
    <div class="col-sm-12">
        <!-- <button type="button" class="btn btn-primary" v-on:click="validateForm()">test</button> -->
        <a href="#" v-on:click="setActive('2')" class="btn btn-primary pull-right" data-slide="1" onclick="$('#carouselRegister').carousel(1)">ถัดไป <i class="zmdi zmdi-chevron-right"></i></a>
    </div>
</div>