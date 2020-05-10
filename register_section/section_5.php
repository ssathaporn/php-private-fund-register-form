<!-- <p class="text-right">3/4</p> -->
<h3 class="c_midnight_green f-700">แบบประเมินความเสี่ยงสำหรับผู้ลงทุน (Risk Profile)</h3>


<h4>I. สำหรับการลงทุนทั่วไป</h4>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>1. ปัจจุบันท่านอายเท่าไหร่</label>
            <ul class="list-unstyled list-inline">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[AgeRange]" value="1">
                            <i class="input-helper"></i>
                            เกิน 60 ปี (1) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[AgeRange]" value="2">
                            <i class="input-helper"></i>
                            0 – 60 ปี (2) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[AgeRange]" value="3">
                            <i class="input-helper"></i>
                            35 – 49 ปี (3) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[AgeRange]" value="4">
                            <i class="input-helper"></i>
                            ตำกว่า 35 ปี (4) </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>2. ระดับการศึกษาของท่าน</label>
            <ul class="list-unstyled list-inline">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[Graduated]" value="1">
                            <i class="input-helper"></i>
                            ต่ำกว่าปริญญาตรี (1) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[Graduated]" value="2">
                            <i class="input-helper"></i>
                            ตั้งแต่ปริญญาตรีขึ้นไป (2) </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>3. ประสบการณ์การลงทุนในหลกัทรัพย์ของท่าน (หลกัทรัพย์ หมายถึง หน่วยลงทุน หรือหุ้นกู้ หรือหุ้น หรือพันธบัตรรัฐบาล หรือ derivatives)</label>
            <ul class="list-unstyled list-inline">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio"  @change="sumRiskProfile" name="formRisk[InvExp]" value="1">
                            <i class="input-helper"></i>
                            ไม่มี (1) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio"  @change="sumRiskProfile" name="formRisk[InvExp]" value="2">
                            <i class="input-helper"></i>
                            น้อยกว่า1 ปี (2) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio"  @change="sumRiskProfile" name="formRisk[InvExp]" value="3">
                            <i class="input-helper"></i>
                            1-5 ปี (3) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio"  @change="sumRiskProfile" name="formRisk[InvExp]" value="4">
                            <i class="input-helper"></i>
                            มากกว่า 5 ปี (4) </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>4. ระยะเวลาที่ท่านคาดว่าจะไม่จำเป็นต้องใช้เงินลงทุนก้อนนี้</label>
            <ul class="list-unstyled list-inline">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio"  @change="sumRiskProfile" name="formRisk[InvDuration]" value="1">
                            <i class="input-helper"></i>
                            น้อยกว่า1 ปี (1) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio"  @change="sumRiskProfile" name="formRisk[InvDuration]" value="2">
                            <i class="input-helper"></i>
                            1-3 ปี (2) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio"  @change="sumRiskProfile" name="formRisk[InvDuration]" value="3">
                            <i class="input-helper"></i>
                            3-7 ปี (3) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio"  @change="sumRiskProfile" name="formRisk[InvDuration]" value="4">
                            <i class="input-helper"></i>
                            มากกว่า 7 ปี (4) </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>5. ท่านต้องการรายได้จากเงินลงทุนส่วนนี้เพื่อเป็นค่าใช้จ่ายประจำหรือไม่</label>
            <ul class="list-unstyled list-inline">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio"  @change="sumRiskProfile" name="formRisk[InvIncome]" value="1">
                            <i class="input-helper"></i>
                            ต้องการมากที่สุด(1) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio"  @change="sumRiskProfile" name="formRisk[InvIncome]" value="2">
                            <i class="input-helper"></i>
                            ต้องการบ้าง (2) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile"  name="formRisk[InvIncome]" value="3">
                            <i class="input-helper"></i>
                            ต้องการเพียงเล็กน้อย (3) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio"  @change="sumRiskProfile" name="formRisk[InvIncome]" value="4">
                            <i class="input-helper"></i>
                            ไม่มีความต้องการ (4)</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>6. สัดส่วนเงินลงทุนในหลักทรัพย์ทั้งหมดเทียบกับทรัพย์สินของท่าน</label>
            <ul class="list-unstyled list-inline">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[InvPart]" value="1">
                            <i class="input-helper"></i>
                            มากกว่าร้อยละ 60 (1) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[InvPart]" value="2">
                            <i class="input-helper"></i>
                            ร้อยละ 30-60 (2) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[InvPart]" value="3">
                            <i class="input-helper"></i>
                            ร้อยละ 10 – 30 (3) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[InvPart]" value="4">
                            <i class="input-helper"></i>
                            น้อยกว่าร้อยละ 10 (4)</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>7. ทัศคติเกี่ยวกับการลงทุน</label>
            <ul class="list-unstyled">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[InvPassion]" value="1">
                            <i class="input-helper"></i>
                            ไม่สามารถทนต่อการขาดทุนเงินต้นได้เลย แม้ว่าจะมีโอกาสได้รับผลตอบแทนที่สูงขึ้นบ้าง (1) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[InvPassion]" value="2">
                            <i class="input-helper"></i>
                            สามารถทนต่อการขาดทุนเงินต้นได้เล็กน้อย เพื่อมีโอกาสได้รับผลตอบแทนที่สูงขึ้นบ้าง (2) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[InvPassion]" value="3">
                            <i class="input-helper"></i>
                            สามารถทนต่อการขาดทุนเงินต้นได้ เพื่อมีโอกาสได้รับผลตอบแทนที่สูงขึ้น(3) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[InvPassion]" value="4">
                            <i class="input-helper"></i>
                            อยากได้ผลตอบแทนที่สูง โดยไม่มีข้อจำกัดในการลงทุน (4)</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>8. การลงทุนในหลักทรัพย์ที่มีความผันผวนสูง มักให้ผลตอบแทนที่สูงในระยะยาว แต่มีความเสี่ยงที่จะทำให้ขาดทุนได้มากขึ้นได้เช่นกันท่านสามารถรับ ความเสี่ยงจากการลงทุนได้ในระดับใด</label>
            <ul class="list-unstyled">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[RiskLoss]" value="1">
                            <i class="input-helper"></i>
                            น้อยที่สุดโดยต้องการเน้นการลงทุนที่สร้างกระแสรายได้ประจำและให้ความปลอดภัยในการลงทุนสูงสุดแม้ว่าจะได้รับผลตอบแทนในระดับที่ต่ำสุด(1)
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[RiskLoss]" value="2">
                            <i class="input-helper"></i>
                            รับได้ในระดับหนึ่ง โดยสามารถรับความเสี่ยงในการขาดทุนจากการลงทุนได้บ้าง เพื่อเพิ่มโอกาสที่จะได้รับผลตอบแทนที่สูงขึ้นในระยะยาว(2)
                        </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[RiskLoss]" value="3">
                            <i class="input-helper"></i>
                            ปานกลาง โดยสามารถรับความเสี่ยงได้พอสมควร เพื่อสร้างโอกาสในการได้รับผลตอบแทนที่สูงกว่าในระยะยาว (3) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[RiskLoss]" value="4">
                            <i class="input-helper"></i>
                            มาก โดยสามารถรับความเสี่ยงไดสูงสุดเพื่อสร้างโอกาสในการได้รับผลตอบแทนที่สูงสุดในระยะยาว (4)</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>9. ในบางช่วงเวลา การลงทุนโดยเน้นความปลอดภัยของเงินลงทุนจะให้ผลตอบแทนในระดับที่ต่ำกว่าเงินเฟ้อ ซึ่งอาจจะทำให้อำนาจในการซื้อลดลงได้เมื่อ พิจารณาถึงเป้าหมายในการลงทุนของท่าน ข้อใดต่อไปนี้ตรงกับท่านมากที่สุด</label>
            <ul class="list-unstyled">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[PrincipleLoss]" value="1">
                            <i class="input-helper"></i>
                            เงินต้นสำหรับการลงทุนต้องปลอดภัยแม้ว่าจะได้รับผลตอบแทนต่ำกว่าอัตราเงินเฟ้อ (1) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[PrincipleLoss]" value="2">
                            <i class="input-helper"></i>
                            รับความเสี่ยงในการสญูเสียเงินต้นได้บ้าง เพื่อคงระดบัอตัราผลตอบแทนจากการลงทุนให้สูงกว่าอัตราเงินเฟ้อ (2) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[PrincipleLoss]" value="3">
                            <i class="input-helper"></i>
                            เน้นสร้างผลตอบแทนให้สงูกว่าระดับเงินเฟ้อในระดับหนึ่ง โดยสามารถรับความเสี่ยงได้ (3) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[PrincipleLoss]" value="4">
                            <i class="input-helper"></i>
                            ต้องการให้ผลตอบแทนสูงกว่าระดบัเงินเฟ้อมากที่สดุ โดยสามารถรับความเสี่ยงได้เต็มที่ (4)</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>



<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>10. ท่านคิดว่าท่านจะยอมรับผลขาดทุนจากการลงทุนในการจัดการกองทุนส่วนบุคคล ได้มากเพียงใด</label>
            <ul class="list-unstyled list-inline">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[YieldLoss]" value="1">
                            <i class="input-helper"></i>
                            ต่ำากว่า 10% (1) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[YieldLoss]" value="2">
                            <i class="input-helper"></i>
                            ร้อยละ 10 ถึง 20 (2) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[YieldLoss]" value="3">
                            <i class="input-helper"></i>
                            ร้อยละ 20 ถึง 50 (3) </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" @change="sumRiskProfile" name="formRisk[YieldLoss]" value="4">
                            <i class="input-helper"></i>
                            มากกว่า 50 (4)</label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<h4>II. สำหรับการลงทุนในการจัดการกองทุนส่วนบุคคล ที่มีนโยบายลงทุนในต่างประเทศ</h4>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>ท่านสามารถรับความเสี่ยงด้านอัตราแลกเปลี่ยนได้หรือไม่</label>
            <ul class="list-unstyled list-inline">
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[IsAcceptRiskExchange]" value="1">
                            <i class="input-helper"></i>
                            ได้ </label>
                    </div>
                </li>
                <li>
                    <div class="radio">
                        <label>
                            <input type="radio" name="formData[IsAcceptRiskExchange]" value="0">
                            <i class="input-helper"></i>
                            ไม่ได้ </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>สรุปผลคะแนน (โดยนำตัวเลขตามคำถามข้อ 1-10 ที่เลือกมารวมกัน)</label>
            <div class="row">
                <div class="col-sm-2">
                    <input type="text" class="form-control fc-alt" readonly="readonly" name="formData[SuitScore]" id="formRisk_result" v-model="riskProfileSum">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-condensed m-b-25">
                <tbody>
                    <tr v-bind:class="{'text-success' : (riskProfileSum <= 14)}" class="info">
                        <td>ระดับคะแนนความเสี่ยง 1</td>
                        <td>&lt;= 14</td>
                        <td>นักลงทุนที่รับความเสี่ยงได้ต่ำ</td>
                    </tr>
                    <tr v-bind:class="{'text-success' : ( (riskProfileSum >= 15) && (riskProfileSum <= 21) )}" class="info">
                        <td>ระดับคะแนนความเสี่ยง 1-4</td>
                        <td>15-21</td>
                        <td>นักลงทุนที่รับความเสี่ยงได้ปานกลางถึงค่อนข้างต่ำ</td>
                    </tr>
                    <tr v-bind:class="{'text-success' : ( (riskProfileSum >= 22) && (riskProfileSum <= 29) )}" class="info">
                        <td>ระดับคะแนนความเสี่ยง 1-5</td>
                        <td>22-29</td>
                        <td>นักลงทุนที่รับความเสี่ยงได้ปานกลางถึงค่อนข้างสูง</td>
                    </tr>
                    <tr v-bind:class="{'text-success' : ( (riskProfileSum >= 30) && (riskProfileSum <= 36) )}" class="info">
                        <td>ระดับคะแนนความเสี่ยง 1-7</td>
                        <td>30-36</td>
                        <td>นักลงทุนที่รับความเสี่ยงได้สูง ท่านสามารถรับความผันผวนของตลาดได้</td>
                    </tr>
                    <tr v-bind:class="{'text-success' : (riskProfileSum >= 37)}" class="info">
                        <td>ระดับคะแนนความเสี่ยง 1-8</td>
                        <td>&gt;=37</td>
                        <td>นักลงทุนที่รับความเสี่ยงได้สูงมาก</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="form-group fg-line">
            <label>1. ในกรณีที่กองทุนส่วนบุคคลนี้มีระดับความเสี่ยงกองทุนสูงกว่าระดับความเสี่ยงในการลงทุนที่เหมาะสมของผู้ลงทุนจากการประมวลผลข้อมูลตามแบบประเมินความเสี่ยงล่าสุดที่ผู้ลงทุนเคยให้ไว้</label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="formData[IsAcceptRiskHigher]" value="1">
                    <i class="input-helper"></i>
                    ข้าพเจ้า (ผู้ลงทุน) ตกลงยอมรับความเสี่ยงเพิ่มขึ้น โดยได้รับคำแนะนำการลงทุนถึงลักษณะของกองทุนส่วนบุคคล ตลอดจนคำเตือนและความเสี่ยง
                    ทั้งหมดที่เกี่ยวข้องกับกองทุนส่วนบุคคลดังกล่าวจากผู้ขายแล้วและยืนยันจะเข้าลงทุนในกองทุนส่วนบุคคลนี้
                </label>
            </div>
        </div>
        <div class="form-group fg-line">
            <label>2. ในกรณีที่กองทุนนี้มีการลงทุนในตราสารในรูปแบบสกุลเงินต่างประเทศและไม่มีนโยบายการป้องกันความเสี่ยงในอัตราแลกเปลี่ยนทั้ง
                จำนวนหรือมีนโยบายป้องกันความเสี่ยงต่ำกว่าร้อยละ 90 ของเงินลงทุนในสกุลเงินต่างประเทศผู้ลงทุนอาจขาดทุนหรือได้รับกำไรจาก
                อัตราแลกเปลี่ยน/หรือได้รับเงินลงทุนต่ำกว่าเงินลงทุนเริ่มแรกได้ (นอกเหนือจากความเสี่ยงการลงทุนปกติ)</label>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="formData[IsAcceptRiskForeign]" value="1">
                    <i class="input-helper"></i>
                    ข้าพเจ้า (ผู้ลงทุน) ตกลงรับทราบความเสี่ยงอัตราแลกเปลี่ยนและแนวทางบริหารความเสี่ยงอัตราแลกเปลี่ยนของกองทุนส่วนบุคคลนี้ </label>
            </div>
        </div>
    </div>
</div>

<div class="row m-t-20">
    <div class="col-sm-12">
        <a href="#" v-on:click="setActive('2')" class="btn btn-primary pull-left" data-slide="1" onclick="$('#carouselRegister').carousel(1)"><i class="zmdi zmdi-chevron-left"></i> ย้อนกลับ</a>
        <a href="#" v-on:click="setActive('4')" class="btn btn-primary pull-right" data-slide="3" onclick="$('#carouselRegister').carousel(3)">ถัดไป <i class="zmdi zmdi-chevron-right"></i></a>
    </div>
</div>