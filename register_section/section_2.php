<!-- <p class="text-right">2/4</p> -->
<h3 class="c_midnight_green f-700">ข้อมูลการลงทุน</h3>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>วัตถุประสงค์ในการลงทุน (The Purpose of Investment) <span class="text-danger">*</span></label>
            <ul class="list-unstyled">
                <li>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="ObjectiveFor[]" value="1">
                            <i class="input-helper"></i>
                            ผลตอบแทนการลงทุน (Return on Investment)
                        </label>
                    </div>
                </li>
                <li>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="ObjectiveFor[]" value="2">
                            <i class="input-helper"></i>
                            ลดหย่อนภาษี (Tax Reduction)
                        </label>
                    </div>
                </li>
                <li>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="ObjectiveFor[]" value="3">
                            <i class="input-helper"></i>
                            กระจายความเสี่ยง (Diversification)
                        </label>
                    </div>
                </li>
                <li>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="ObjectiveFor[]" value="4">
                            <i class="input-helper"></i>
                            เงินออมระยะยาว (Long-Term Saving)
                        </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-8">
        <div class="form-group fg-line">
            <label>ประเภททรัพย์สินของท่านที่ปลอดภาระ (Free charged asset) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[FreeAsset]" id="FreeAsset">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>มูลค่า (Value) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[FreeAssetValue]" id="FreeAssetValue">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-8">
        <div class="form-group fg-line">
            <label>ประเภททรัพย์สินของท่านที่ติดภาระ (Charged asset) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[ChargedAsset]" id="ChargedAsset">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group fg-line">
            <label>มูลค่า (Value) <span class="text-danger">*</span></label>
            <input type="text" class="form-control fc-alt" name="formData[ChargedAssetValue]" id="ChargedAssetValue">
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>ท่านเคยมีประสบการณ์การลงทุนในหลักทรัพย์หรือไม่ (Have you ever invested within capital market before?) <span class="text-danger">*</span></label>
            <ul class="list-inline list-unstyled">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[IsInvCapital]" value="1">
                            <i class="input-helper"></i>
                            เคย (Yes)
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[IsInvCapital]" value="0">
                            <i class="input-helper"></i>
                            ไม่เคย (No)
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
            <label>ท่านเคยมีการกู้ยืมเงินเพื่อซื้อขายหลักทรัพย์/กองทุน/กองทุนส่วนบุคคลหรือไม่ (Have you ever borrowed to invest in Stock/Private
        Fund/Mutual Fund?) <span class="text-danger">*</span></label>
            <ul class="list-inline list-unstyled">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[IsBorrowedInv]" value="1">
                            <i class="input-helper"></i>
                            เคย (Yes)
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[IsBorrowedInv]" value="0">
                            <i class="input-helper"></i>
                            ไม่เคย (No)
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
            <label>มูลค่าเงินลงทุนที่ท่านคาดว่าจะนำมาลงทุนในกองทุนรวมหรือกองทุนส่วนบุคคล (Expected Investment Amount) <span class="text-danger">*</span></label>
            <ul class="list-inline list-unstyled">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[ExpectedInvAmt]" value="1">
                            <i class="input-helper"></i>
                            น้อยกว่า 1 ล้านบาท
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[ExpectedInvAmt]" value="2">
                            <i class="input-helper"></i>
                            1-5 ล้านบาท
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[ExpectedInvAmt]" value="3">
                            <i class="input-helper"></i>
                            5-10 ล้านบาท
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[ExpectedInvAmt]" value="4">
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
            <label>มูลค่าการลงทุนในสินทรัพย์ทางการเงินในปัจจุบัน (Current investment amount) <span class="text-danger">*</span></label>
            <ul class="list-inline list-unstyled">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[CurrentInvAmt]" value="1">
                            <i class="input-helper"></i>
                            น้อยกว่า 1 ล้านบาท
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[CurrentInvAmt]" value="2">
                            <i class="input-helper"></i>
                            1-5 ล้านบาท
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[CurrentInvAmt]" value="3">
                            <i class="input-helper"></i>
                            5-10 ล้านบาท
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[CurrentInvAmt]" value="4">
                            <i class="input-helper"></i>
                            10 ล้านบาทขึ้นไป
                        </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


้<h4>เฉพาะกองทุนส่วนบุคคล (Private Fund Only)</h4>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group fg-line">
            <label>1. ระยะเวลาในการลงทุน (Investment Period) <span class="text-danger">*</span></label>
            <ul class="list-unstyled">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[InvPeriod]" value="1">
                            <i class="input-helper"></i>
                            ระยะสั้นไม่เกิน 1 ปี (Less than 1year)
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[InvPeriod]" value="2">
                            <i class="input-helper"></i>
                            ระยะกลางระหว่าง (1-3 years)
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[InvPeriod]" value="3">
                            <i class="input-helper"></i>
                            ระยะยาวมากกว่า 3 ปี (More than 3 years)
                        </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group fg-line">
            <label>2. ความต้องการสภาพคลอ่งจากการลงทุน (Need for liquidity) <span class="text-danger">*</span></label>
            <ul class="list-unstyled">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[NeedLiquidity]" value="1">
                            <i class="input-helper"></i>
                            ไม่ต้องการสภาพคล่องจากการลงทุน เนื่องจากได้มีการจัดสรรเงินลงทุนในระยะยาว (No need for liquidity due to long-term asset allocation)
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[NeedLiquidity]" value="2">
                            <i class="input-helper"></i>
                            ต้องการสภาพคล่องบ้างเล็กน้อยอาจมีความต้องการใช้เงินในช่วง6 เดือนถึง1ปีข้างหน้า (Need some liquidity due to a need to use
                            money within 6 months to 1 year)
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[NeedLiquidity]" value="3">
                            <i class="input-helper"></i>
                            ต้องการสภาพคลอ่งมากพอสมควรอาจมีความต้องการใช้เงินได้ในบางช่วงเวลา(Moderate liquidity need due to a need to use money some
                            period of time)
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[NeedLiquidity]" value="4">
                            <i class="input-helper"></i>
                            ต้องการสภาพคล่องสูง เนื่องจากมีความต้องการใช้เงินได้ทุกเวลา (High liquidity need due to a need to use money at any time)
                        </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>  


<div class="row">
    <div class="col-sm-6">
        <div class="form-group fg-line">
            <label>3. ข้อจำกัดทางกฎหมาย (Legal Restrictions) <span class="text-danger">*</span></label>
            <ul class="list-inline list-unstyled">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[LegalRestriction]" value="0">
                            <i class="input-helper"></i>
                            ไม่มี (No) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[LegalRestriction]" value="1">
                            <i class="input-helper"></i>
                            มี (Yes) </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group fg-line">
            <label>4. ข้อจำกัดเฉพาะการลงทุน (Unique Circumstances) <span class="text-danger">*</span></label>
            <ul class="list-inline list-unstyled">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[UniqueCircumstances]" value="0">
                            <i class="input-helper"></i>
                            ไม่มี (No) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[UniqueCircumstances]" value="1">
                            <i class="input-helper"></i>
                            มี (Yes) </label>
                    </div>
                </li>
            </ul>
            <input type="text" class="form-control fc-alt" name="formData[UniqueCircumstancesDetail]" id="UniqueCircumstancesDetail" placeholder="ถ้ามี โปรดระบุ">
        </div>
    </div>
</div>