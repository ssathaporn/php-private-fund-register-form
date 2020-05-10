้<h4>การเปิดเผยข้อมูลตามมาตการป้องกันการฟอกเงิน (Disclosure of anti-money laundering measures)</h4>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group m-b-10 fg-line">
            <label>1. ท่านเคยเป็นนักการเมืองหรือเคยดำรงตำแหน่งทางการเมืองหรือไม่ (Have you ever been in a politician or political position?) <span class="text-danger">*</span></label>
            <ul class="list-unstyled list-inline">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" v-model="IsPolitician" name="formData[IsPolitician]" checked="checked" value="0">
                            <i class="input-helper"></i>
                            ไม่เคย (No) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" v-model="IsPolitician" name="formData[IsPolitician]" value="1">
                            <i class="input-helper"></i>
                            เคย (Yes) </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row" v-if="IsPolitician === '1'">
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>ตำแหน่งทางการเมือง (Political Position)</label>
            <input type="text" class="form-control fc-alt" name="formData[PoliticianPosition]" id="PoliticianPosition"> 
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>ระหว่างปี (Period of Time)</label>
            <div class="row">
                <div class="col-sm-5">
                    <input type="text" class="form-control fc-alt" name="formData[PoliticianStart]" id="PoliticianStart" placeholder="เริ่มต้น">
                </div>
                <span class="pull-left">-</span>
                <div class="col-sm-5">
                    <input type="text" class="form-control fc-alt" name="formData[PoliticianEnd]" id="PoliticianEnd" placeholder="สิ้นสุด">
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-sm-12">
        <div class="form-group m-b-10 fg-line">
            <label>2. ท่านมีความเกี่ยวข้องกับบุคคลที่เป็นนักการเมืองหรือดำรงตำแหน่งทางการเมืองหรือไม่ (Have you relevance with a politician?) <span class="text-danger">*</span></label>
            <ul class="list-unstyled list-inline">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" v-model="IsRelatedPolitician" name="formData[IsRelatedPolitician]" checked="checked" value="0">
                            <i class="input-helper"></i>
                            ไม่มี (No) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" v-model="IsRelatedPolitician" name="formData[IsRelatedPolitician]" value="1">
                            <i class="input-helper"></i>
                            มี (Yes) </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row" v-if="IsRelatedPolitician === '1'">
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>ชื่อ-นามสกุล (Name/LastName)</label>
            <div class="row">
                <div class="col-sm-5">
                    <input type="text" class="form-control fc-alt" name="formData[PoliticianFirstName]" id="PoliticianFirstName" placeholder="ชื่อ">
                </div>
                <span class="pull-left">-</span>
                <div class="col-sm-6">
                    <input type="text" class="form-control fc-alt" name="formData[PoliticianLastName]" id="PoliticianLastName" placeholder="นามสกุล">
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>ตำแหน่งทางการเมือง (Political Position)</label>
            <input type="text" class="form-control fc-alt" name="formData[PoliticianRelPosition]" id="PoliticianRelPosition"> 
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>ความสัมพันธ์ (Relationship)</label>
            <input type="text" class="form-control fc-alt" name="formData[PoliticianRel]" id="PoliticianRel"> 
        </div>
    </div>
</div>




<div class="row">
    <div class="col-sm-12">
        <div class="form-group m-b-10 fg-line">
            <label>3. ท่านเคยกระทำความผิดตามกฎหมายฟอกเงินในช่วง 3 ปี ที่ผ่านมาหรือไม่(Have you ever been committed of money laundering laws?) <span class="text-danger">*</span></label>
            <ul class="list-unstyled list-inline">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" v-model="IsLaunderingLaws" name="formData[IsLaunderingLaws]" checked="checked" value="0">
                            <i class="input-helper"></i>
                            ไม่เคย (No) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" v-model="IsLaunderingLaws" name="formData[IsLaunderingLaws]" value="1">
                            <i class="input-helper"></i>
                            เคย (Yes) </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row" v-if="IsLaunderingLaws === '1'">
    <div class="col-sm-8">
        <div class="form-group fg-line">
            <label>ความผิดมูลฐานเรื่อง (Offense Subject)</label>
            <input type="text" class="form-control fc-alt" name="formData[OffenseSubject]" id="OffenseSubject">
        </div>
    </div>
    <div class="col-sm-3">
        <div class="form-group fg-line">
            <label>ปี (Period of Time)</label>
            <input type="text" class="form-control fc-alt" name="formData[OffenseYear]" id="OffenseYear"> 
        </div>
    </div>
</div>



<div class="row">
    <div class="col-sm-12">
        <div class="form-group m-b-10 fg-line">
            <label>4. บุคคลที่ได้รับประโยชน์จากการซื้อขายหลักทรัพย์ของท่าน เช่น เงินปันผล การใช้สิทธิต่างๆ (People who receive a benefit from
        your trading) <span class="text-danger">*</span></label>
            <ul class="list-unstyled list-inline">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" v-model="IsOtherBenefit" name="formData[IsOtherBenefit]" checked="checked" value="0">
                            <i class="input-helper"></i>
                            ตนเอง (Yourself) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" v-model="IsOtherBenefit" name="formData[IsOtherBenefit]" value="1">
                            <i class="input-helper"></i>
                            บุคคลอื่น (Other person) </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row" v-if="IsOtherBenefit === '1'">
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>ชื่อ-นามสกุล (Name/LastName)</label>
            <div class="row">
                <div class="col-sm-5">
                    <input type="text" class="form-control fc-alt" name="formData[BenefitFirstName]" id="BenefitFirstName" placeholder="ชื่อ">
                </div>
                <span class="pull-left">-</span>
                <div class="col-sm-6">
                    <input type="text" class="form-control fc-alt" name="formData[BenefitLastName]" id="BenefitLastName" placeholder="นามสกุล">
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>อาชีพ (Occupation)</label>
            <input type="text" class="form-control fc-alt" name="formData[BenefitOccupation]" id="BenefitOccupation"> 
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>ความสัมพันธ์ (Relationship)</label>
            <input type="text" class="form-control fc-alt" name="formData[BenefitRelation]" id="BenefitRelation"> 
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="form-group m-b-10 fg-line">
            <label>5.บุคคลที่มีอำนาจควบคุมการทำธุรกรรมในทอดสุดท้าย (Name of a person that has power to control your last trading) <span class="text-danger">*</span></label>
            <ul class="list-unstyled list-inline">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" v-model="IsOtherLastTrade" name="formData[IsOtherLastTrade]" checked="checked" value="0">
                            <i class="input-helper"></i>
                            ตนเอง (Yourself) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" v-model="IsOtherLastTrade" name="formData[IsOtherLastTrade]" value="1">
                            <i class="input-helper"></i>
                            บุคคลอื่น (Other person) </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row" v-if="IsOtherLastTrade === '1'">
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>ชื่อ-นามสกุล (Name/LastName)</label>
            <div class="row">
                <div class="col-sm-5">
                    <input type="text" class="form-control fc-alt" name="formData[LastTradeFirstName]" id="LastTradeFirstName" placeholder="ชื่อ">
                </div>
                <span class="pull-left">-</span>
                <div class="col-sm-6">
                    <input type="text" class="form-control fc-alt" name="formData[LastTradeLaststName]" id="LastTradeLaststName" placeholder="นามสกุล">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group m-b-10 fg-line">
            <label>6.ความสัมพันธ์ของผู้รับมอบอำนาจกับเจ้าของบัญชี (The relationship of authorized attorney to account owners) <span class="text-danger">*</span></label>
            <div class="row">
                <div class="col-sm-6"><input type="text" class="form-control fc-alt" name="formData[DelegateRelation]" id="DelegateRelation"></div>
            </div>
        </div>
    </div>
</div>


<div class="row m-t-20">
    <div class="col-sm-12">
        <a href="#" v-on:click="setActive('1')" class="btn btn-primary pull-left" data-slide="0" onclick="$('#carouselRegister').carousel(0)"><i class="zmdi zmdi-chevron-left"></i> ย้อนกลับ</a>
        <a href="#" v-on:click="setActive('3')" class="btn btn-primary pull-right" data-slide="2" onclick="$('#carouselRegister').carousel(2)">ถัดไป <i class="zmdi zmdi-chevron-right"></i></a>
    </div>
</div>