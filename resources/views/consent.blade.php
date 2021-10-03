@extends('layouts.theme')
@section('menu-active-register','active-nav')
@section('menu-active',' color-gray1-dark')
@section('header_script')
{{-- header --}}
@endsection

@section('content')

<div class="page-content header-clear-small">

        <!--<div class="card mb-0 preload-img" data-src="images/pictures/0l.jpg" data-card-height="20vh">-->
        <!--    <div class="card-top">-->
        <!--        <h6 class="text-center mt-3 opacity-50 font-400">Header will appear when Scrolling</h6>-->
        <!--    </div>-->
        <!--    <div class="card-bottom ml-3">-->
        <!--        <h1 class="font-40 line-height-xl">Karla<br>Black</h1>-->
        <!--        <p class="pb-0 mb-0 font-12"><i class="fa fa-map-marker mr-2"></i>San Francisco, California</p>-->
        <!--        <p>-->
        <!--            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ex mi, porttitor id nisi vel neque.-->
        <!--        </p>-->
        <!--    </div>-->
        <!--    <div class="card-overlay bg-gradient-fade-small"></div>-->
        <!--</div>-->

        <!--<div class="content">-->
        <!--    <div class="alert mb-4 rounded-s bg-green1-dark" role="alert">-->
        <!--        <span class="alert-icon"><i class="fa fa-check font-18"></i></span>-->
        <!--        <h4 class="text-uppercase color-white">เงื่อนไขการใช้บริการ</h4>-->
        <!--        <strong class="alert-icon-text">(โปรดอ่านเงื่อนไขการใช้บริการ)</strong>-->
        <!--    </div>   -->
        <!--</div>-->

    <div class="card card-style">
        <img data-src="images/pictures/consent_lineoa4.jpg" class="preload-img img-fluid bottom-20">
        <div class="content">
            <h4 class="mb-0">
                ข้อกำหนดและเงื่อนไขการใช้บริการ Line Application “รพร.ตะพานหิน”  สำหรับการใช้งานแอปพลิเคชัน ในฐานะบุคคลทั่วไป
            </h4>
            <!--<p class="mb-0 color-highlight font-12 bottom-10">(โปรดอ่านและยอมรับเงื่อนไขการใช้บริการ)</p>-->
            <p>
                ข้าพเจ้า ซึ่งเป็นบุคคลทั่วไป ตกลงใช้บริการ Line Application ”รพร.ตะพานหิน” และบริการอื่นที่เกี่ยวเนื่องกัน ตามรายละเอียดการให้บริการที่โรงพยาบาลกำหนด โดย รับทราบ ยอมรับ และตกลงที่จะผูกพันและปฏิบัติตามข้อกำหนดและเงื่อนไขการใช้บริการ ดังต่อไปนี้
            </p>
        </div>
    </div>

    <div class="card card-style">
        <div class="content">
            <h4 class="">1.	นิยามศัพท์</h4>
                <ol>
                <li>
	“แอปพลิเคชัน” หรือ “Application” หมายความว่า Line Application “รพร.ตะพานหิน”  ตลอดจนโปรแกรมคอมพิวเตอร์ ชุดคำสั่ง หรือแอปพลิเคชันอื่น ๆ ที่ต้องใช้หรืออาจใช้ร่วมกันหรือเกี่ยวเนื่องกันกับ Line Application ดังกล่าว เพื่อการใช้บริการ ”รพร.ตะพานหิน” ไม่ว่าจะใช้งานผ่านโทรศัพท์มือถือ แท็บเล็ต เว็บ หรือผ่านอุปกรณ์อื่นใดก็ตาม ทั้งนี้ ในกรณีที่ Line application ดังกล่าวเปลี่ยนชื่อเป็นอย่างอื่นหรือมีแอปพลิเคชันอื่นรวมอยู่ด้วย ให้หมายความรวมถึงแอปพลิเคชันนั้นด้วย
                </li>
                <li>
	“บริการ รพร.ตะพานหิน” หมายความว่า บริการและคุณสมบัติต่าง ๆ ที่มีให้ใช้งานผ่านแอปพลิเคชันในข้อกำหนดและเงื่อนไขฉบับนี้ ตลอดจนโปรแกรมหรือแอปพลิเคชันอื่น ๆ ของหน่วยบริการที่ต้องใช้หรืออาจใช้ร่วมกันหรือเกี่ยวเนื่องกันกับแอปพลิเคชันดังกล่าว ซึ่งอาจเกี่ยวข้องกับการให้บริการดูแลสุขภาพ หรือไม่เกี่ยวข้องกันก็ได้ ทั้งนี้ ให้หมายความรวมถึงบริการอื่นที่เกี่ยวเนื่องกันกับบริการ “รพร.ตะพานหิน” โดยตรง แม้จะดำเนินการโดยบุคคลหรือหน่วยงานอื่น เช่น การออกคิว หรือการชำระเงินผ่านระบบอิเล็กทรอนิกส์ ด้วย
                </li>
                <li>
	“หน่วยบริการ” หมายความว่า โรงพยาบาล สถานีอนามัย หรือที่เรียกชื่อเป็นอย่างอื่นแต่ปฏิบัติงานในลักษณะเดียวกัน และให้หมายความรวมถึงการให้บริการภายนอกสถานที่โดยหน่วยบริการ หรือการให้บริการโดยบุคคลหรือหน่วยงานอื่น ที่ทำการแทนหรือภายใต้อาณัติของหน่วยบริการแห่งนั้นด้วย
                </li>
                <li>
	“ผู้ขอใช้บริการ” หมายความว่า ผู้ใช้งาน Line Application “รพร.ตะพานหิน”  หรือผู้ป่วยหรือผู้รับบริการของโรงพยาบาลที่ใช้บริการ “รพร.ตะพานหิน”  และให้หมายความรวมถึงกรณีที่บิดามารดา ผู้ปกครอง คู่สมรส บุตร ผู้พิทักษ์ ผู้อนุบาล หรือบุคคลอื่นกระทำการแทน ในนาม หรือภายใต้อาณัติของผู้นั้นด้วย
                </li>
                <li>
	“ธุรกรรม” หมายความว่า คำสั่งหรือการกระทำใด ๆ ที่ประสงค์จะให้เกิดผลอย่างใดอย่างหนึ่งเกี่ยวกับการใช้บริการ Line Application “รพร.ตะพานหิน” หรือการรับบริการของโรงพยาบาล เช่น การจองคิวโรงพยาบาล การนัดหมาย การเลื่อนนัดหมาย การยกเลิกนัดหมาย การชำระค่าใช้จ่าย ตลอดจนการให้ข้อมูล การเรียกดูข้อมูล การเปลี่ยนแปลงแก้ไขข้อมูล และการลบข้อมูลใด ๆ ที่กระทำผ่านแอปพลิเคชันหรือบริการ Line Application “รพร.ตะพานหิน”
                </li>
                <li>
	“ข้อมูลส่วนบุคคล” หมายความว่า ข้อมูลเกี่ยวกับผู้ขอใช้บริการซึ่งทำให้สามารถระบุตัวตนของผู้ขอใช้บริการได้ไม่ว่าทางตรงหรือทางอ้อม ซึ่งรวมถึงข้อมูลทั่วไปของผู้ขอใช้บริการ ข้อมูลที่ใช้ยืนยันตัวตน ข้อมูล ชีวมาตรหรือ biometrics (เช่น ลายนิ้วมือ ใบหน้า เป็นต้น) ข้อมูลการนัดหมาย ข้อมูลการจองคิว ข้อมูลสิทธิการรักษาพยาบาลหรือประกันสุขภาพ ข้อมูลที่จำเป็นสำหรับการชำระเงิน ข้อมูลการทำธุรกรรม ข้อมูลสุขภาพ ความพิการ ข้อมูลพันธุกรรม ข้อมูลการได้ฉีดวัคซีน และข้อมูลส่วนบุคคลอื่นใดเกี่ยวกับผู้ขอใช้บริการ ตามกฎหมายว่าด้วยการคุ้มครองข้อมูลส่วนบุคคล ทั้งนี้ ไม่รวมถึงข้อมูลเกี่ยวกับผู้ขอใช้บริการในกรณีที่ผู้ขอใช้บริการถึงแก่กรรม และไม่รวมถึงข้อมูลทางสถิติหรือข้อมูลที่ไม่สามารถระบุตัวบุคคลที่เป็นเจ้าของข้อมูลส่วนบุคคลได้ ซึ่งไม่ถือเป็นข้อมูลส่วนบุคคลตามกฎหมายว่าด้วยการคุ้มครองข้อมูลส่วนบุคคล
                </li>
                <li>
	“ข้อมูลที่ใช้ยืนยันตัวตน” หมายความว่า รหัสผ่าน (password), Personal Identification Number (PIN) หรือรหัสหรือข้อมูลอื่นใดที่ใช้สำหรับการตรวจสอบและยืนยันตัวตนในการเข้าถึงและใช้งานบริการ Line Application “รพร.ตะพานหิน” ซึ่งเป็นมาตรการป้องกันการเข้าถึงโดยมิชอบโดยบุคคลอื่น ไม่ว่าจะถูกกำหนดโดยหน่วยบริการ หรือผู้ขอใช้บริการเป็นผู้กำหนดเองก็ตาม ตลอดจนข้อมูลที่ใช้ในการกู้คืนรหัสหรือข้อมูลดังกล่าว (ถ้ามี)
                </li>
                <li>
	“อุปกรณ์การใช้งาน” หมายความว่า โทรศัพท์มือถือ แท็บเล็ต เครื่องคอมพิวเตอร์ หรือเครื่องมือหรืออุปกรณ์อิเล็กทรอนิกส์อื่นใดที่ผู้ขอใช้บริการใช้เพื่อเข้าถึงและใช้งานบริการ Line Application “รพร.ตะพานหิน”
                </li>
            </ol>


            <h4 class="">2. การใช้งานแอปพลิเคชันและบริการ Line Application “รพร.ตะพานหิน” </h4>
            <ol>
                <li>
	ผู้ขอใช้บริการยอมรับว่า ผู้ขอใช้บริการสามารถดาวน์โหลดและติดตั้ง Line Application “รพร.ตะพานหิน” บนอุปกรณ์การใช้งานเพื่อใช้บริการ “รพร.ตะพานหิน” ณ ขณะใดขณะหนึ่งได้เพียง 1 อุปกรณ์ (หรือตามที่หน่วยบริการกำหนดเป็นอย่างอื่น) เท่านั้น และหากมีการเข้าใช้บริการโดยอุปกรณ์จำนวนมากกว่าจำนวนที่กำหนดดังกล่าวในเวลาใกล้เคียงกัน ระบบของหน่วยบริการจะให้อุปกรณ์การใช้งานที่เข้ามาใช้บริการหลังสุด เป็นอุปกรณ์ที่ใช้บริการได้เพียงอุปกรณ์เดียวเท่านั้น เว้นแต่หน่วยบริการจะกำหนดเป็นอย่างอื่น
                </li>
                <li>
	ในการเข้าใช้งานแอปพลิเคชันหรือบริการ Line Application “รพร.ตะพานหิน” แบ่งคุณสมบัติที่ให้บริการเป็น 2 ส่วนหลัก คือ 1) บริการสำหรับบุคคลทั่วไป และ 2) บริการสำหรับผู้ป่วยหรือผู้รับบริการของหน่วยบริการ โดยบริการสำหรับบุคคลทั่วไป เป็นบริการที่เปิดให้บุคคลทั่วไปเข้าถึงและใช้งานคุณสมบัติทั่วไปไม่ว่าจะเป็นผู้ป่วยหรือผู้รับบริการของหน่วยบริการหรือไม่ก็ตาม โดยไม่ต้องเข้าสู่ระบบ (log in) ส่วนบริการสำหรับผู้ป่วยหรือผู้รับบริการของหน่วยบริการ จะเข้าถึงและใช้งานได้เมื่อผู้ขอใช้บริการได้สมัครเข้าใช้งานแอปพลิเคชัน จากในแอปพลิเคชัน “รพร.ตะพานหิน” โดยตกลงยอมรับข้อกำหนดและเงื่อนไขการใช้บริการ “รพร.ตะพานหิน” สำหรับการใช้งานในฐานะผู้รับบริการของหน่วยบริการ เป็นการเพิ่มเติมเรียบร้อยแล้ว และหน่วยบริการได้อนุญาตให้ใช้บริการ “รพร.ตะพานหิน” โดยผู้ขอใช้บริการต้องเข้าสู่ระบบ (log in) โดยใส่รหัสผ่านหรือข้อมูลที่ใช้ยืนยันตัวตนให้ถูกต้อง พร้อมทั้งปฏิบัติตามวิธีการและเงื่อนไขการใช้บริการที่หน่วยบริการกำหนดอย่างถูกต้องครบถ้วน
                </li>
                <li>
	ผู้ขอใช้บริการยอมรับว่า ทางหน่วยบริการจะถือว่า การใช้บริการ Line Application “รพร.ตะพานหิน” ที่กระทำโดยบุคคลอื่น โดยใช้รหัสผ่าน และ/หรือข้อมูลที่ใช้ยืนยันตัวตนของผู้ขอใช้บริการ เพื่อเข้าถึงบริการของผู้ขอใช้บริการ หรือการใช้บริการ “รพร.ตะพานหิน” ผ่านอุปกรณ์การใช้งานที่ได้ตั้งค่าให้บัญชีผู้ใช้ (user account) ของผู้ขอใช้บริการเข้าสู่ระบบ (log in) โดยอัตโนมัติและยังไม่ได้ออกจากระบบ (log out) เป็นการใช้บริการในนามและโดยความยินยอมของผู้ขอใช้บริการ และมีผลเสมือนหนึ่งผู้ขอใช้บริการกระทำด้วยตัวเอง โดยผู้ขอใช้บริการตกลงที่จะให้การกระทำดังกล่าวมีผลผูกพันผู้ขอใช้บริการในการใช้บริการกับหน่วยบริการ และหากเป็นกรณีที่มีค่าใช้จ่ายหรือความรับผิดทางแพ่งจากการกระทำดังกล่าวเกิดขึ้น ผู้ขอใช้บริการตกลงรับผิดชอบค่าใช้จ่ายหรือความรับผิดนั้นเต็มจำนวน ทั้งนี้ เว้นแต่จะมีหลักฐานที่สามารถพิสูจน์ได้ว่าเกิดขึ้นโดยผู้ขอใช้บริการไม่รับรู้และไม่ยินยอม หรือเกิดจากความผิดพลาดของหน่วยบริการหรือเหตุสุดวิสัย
                </li>
                <li>
	คุณสมบัติการใช้งาน Line Application “รพร.ตะพานหิน” ที่เป็นส่วนหนึ่งของบริการ “รพร.ตะพานหิน” ของหน่วยบริการ ในส่วนของบริการสำหรับบุคคลทั่วไป ประกอบด้วยบริการซึ่งผู้ขอใช้บริการสามารถใช้งานได้ตลอด 24 ชั่วโมง (ยกเว้นกรณีที่ผู้พัฒนา Line Application หรือหน่วยบริการ หยุดให้บริการเป็นการชั่วคราวเพื่อบำรุงรักษาระบบหรือกรณีเกิดเหตุขัดข้อง หรือกรณีอื่นๆ) ตามวิธีการและเงื่อนไขที่กำหนดเพิ่มเติมภายในแอปพลิเคชันหรือในการรับบริการของหน่วยบริการ (ถ้ามี) ทั้งนี้ หน่วยบริการอาจเพิ่มเติมคุณสมบัติอื่น หรือเปลี่ยนแปลงหรือยกเลิกคุณสมบัติเหล่านี้ได้ในอนาคต ประกอบด้วยรายการดังนี้
<ul>
<li>(1) การแสดงข้อมูลและประวัติส่วนบุคคลของผู้ใช้บริการ ทั้งข้อมูลการตรวจรักษา การวินิจฉัยโรค ผลการตรวจรักษา ประวัติการนัดหมายและรายละเอียดต่างๆในระบบเวชระเบียนคนไข้ของหน่วยบริการ
</li><li>(2) การใช้แชทบอต (chatbot) ลิงก์นำทางเพื่อติดต่อสื่อสาร และเข้าถึงข้อมูลภายนอกอื่น ๆ ได้
</li><li>(3) การเสนอข้อมูล ความรู้และข่าวสารประชาสัมพันธ์ต่าง ๆ โดยผู้ขอใช้บริการสามารถเข้าถึงแหล่งข้อมูลความรู้และข่าวสารประชาสัมพันธ์ต่าง ๆ ที่ “รพร.ตะพานหิน” จัดทำขึ้นได้
</ul>
                </li>
                <li>
	ผู้ขอใช้บริการยอมรับว่า การทำธุรกรรม หรือการกระทำใด ๆ ผ่าน Line Application “รพร.ตะพานหิน” ไม่ว่าจะเป็นการใช้งานคุณสมบัติใดก็ตาม ตามวิธีการและเงื่อนไขที่หน่วยบริการกำหนด ให้ถือว่าถูกต้องสมบูรณ์และมีผลผูกพันผู้ขอใช้บริการโดยถูกต้องตามกฎหมายทุกประการ
                </li>
                <li>
	ผู้ขอใช้บริการยอมรับว่า สำหรับบริการบางอย่างที่เป็นส่วนหนึ่งของบริการ “รพร.ตะพานหิน” หน่วยบริการอาจนำข้อความหรือข้อมูลมาจากบุคคลหรือหน่วยงานภายนอก หรือหน่วยบริการได้เชื่อมต่อระบบสารสนเทศของหน่วยบริการกับระบบสารสนเทศของบุคคลหรือหน่วยงานภายนอก หน่วยบริการจึงไม่สามารถรับรองความถูกต้องสมบูรณ์ของข้อความหรือข้อมูลดังกล่าวได้ นอกจากนี้ หน่วยบริการไม่มีส่วนเกี่ยวข้องและไม่ได้ให้การรับรองหรือรับประกันใด ๆ เกี่ยวกับสินค้า บริการ ข้อเสนอ รายการส่งเสริมการขาย และ/หรือสิทธิประโยชน์ใด ๆ ที่ผลิตและ/หรือให้บริการโดยบุคคลหรือหน่วยงานภายนอก และหน่วยบริการ ไม่มีความรับผิดต่อผู้ขอใช้บริการหรือบุคคลใด ๆ ในความเสียหายใด ๆ จากการนำข้อความหรือข้อมูลดังกล่าวไปใช้ และ/หรือเหตุอื่นใดอันเกิดขึ้นจากสินค้าหรือบริการใด ๆ ของบุคคลหรือหน่วยงานอื่นทั้งสิ้น
                </li>
                <li>
	ผู้ขอใช้บริการตกลงและยอมรับว่า การใช้งานแอปพลิเคชันนี้และบริการ “รพร.ตะพานหิน” เป็นบริการเสริมของทางหน่วยบริการ ไม่สามารถใช้ทดแทนการให้บริการดูแลสุขภาพที่หน่วยบริการโดยตรงได้ และไม่ใช่ช่องทางการขอรับบริการในกรณีฉุกเฉินหรือเร่งด่วน หน่วยบริการไม่มีความรับผิดในความเสียหายหรือเหตุขัดข้องใด ๆ อันเนื่องมาจากการใช้งานแอปพลิเคชันนี้ และ/หรือบริการ “รพร.ตะพานหิน” ไม่ว่าด้วยเหตุสุดวิสัย เหตุที่อยู่นอกเหนือความควบคุมของหน่วยบริการ ข้อขัดข้องหรือบกพร่องของระบบ ข้อผิดพลาดในการดำเนินงานของบุคลากรหรือผู้รับจ้างของหน่วยบริการหรือบุคคลอื่น หรือเหตุอื่นใด ทั้งนี้ ในกรณีที่มีเหตุฉุกเฉินหรือเร่งด่วนทางการแพทย์ กรุณาโทร. 1669
                </li>
                <li>
	หน่วยบริการมีสิทธิที่จะไม่ให้บริการ หรือเปลี่ยนแปลง ระงับ หรือยกเลิกการให้บริการ “รพร.ตะพานหิน” หรือคุณสมบัติการใช้งานแอปพลิเคชันบางส่วนหรือทั้งหมดเมื่อใดก็ได้ โดยในกรณีการระงับหรือยกเลิกการให้บริการ “รพร.ตะพานหิน” ทั้งหมด จะแจ้งให้ผู้ขอใช้บริการทราบล่วงหน้าไม่น้อยกว่า 30 วัน เว้นแต่จะเป็นเหตุสุดวิสัยหรือมีความจำเป็นเร่งด่วน จะแจ้งล่วงหน้าโดยเร็วที่สุด
                </li>
                <li>
	ผู้ขอใช้บริการยอมรับว่า เท่าที่กฎหมายที่เกี่ยวข้องจะอนุญาต การใช้งานแอปพลิเคชันและการให้บริการ “รพร.ตะพานหิน” ของหน่วยบริการ เป็นความเสี่ยงของผู้ขอใช้บริการแต่เพียงฝ่ายเดียว แอปพลิเคชันและการให้บริการ “รพร.ตะพานหิน” ถูกจัดทำขึ้น “ตามสภาพ” (as-is) และ “ตามที่มี” (as available) โดยอาจมีข้อบกพร่องทั้งหมดรวมอยู่ด้วย ทางหน่วยบริการไม่มีการรับประกันใด ๆ ในส่วนที่เกี่ยวกับแอปพลิเคชันและบริการ”รพร.ตะพานหิน” ไม่ว่าโดยชัดแจ้ง โดยปริยาย หรือตามกฎหมาย ซึ่งรวมถึงโดยไม่จำกัดเฉพาะการรับประกันโดยปริยาย และ/หรือสภาพที่เหมาะสมแก่การวางตลาด คุณภาพที่น่าพึงพอใจ ความเหมาะกับวัตถุประสงค์เฉพาะอย่าง ความถูกต้องเที่ยงตรงหรือแม่นยำ และการไม่ละเมิดสิทธิของบุคคลอื่น
                </li>
                <li>
	ผู้ขอใช้บริการรับทราบและยอมรับว่า คุณสมบัติบางอย่างของแอปพลิเคชันและการให้บริการ “รพร.ตะพานหิน” ของหน่วยบริการ อาจไม่ถูกต้องครบถ้วนโดยสมบูรณ์ หรืออาจไม่เที่ยงตรงหรือแม่นยำ ตามข้อจำกัดต่างๆ เช่น ความแรงของสัญญาณ สัญญาณรบกวน คุณสมบัติของอุปกรณ์ที่ใช้ ข้อจำกัดทางเทคนิค หรือข้อจำกัดอื่นที่ส่งผลต่อความถูกต้อง เที่ยงตรง แม่นยำ หรือคงเส้นคงวาของการระบุตำแหน่งได้ จึงเป็นการใช้งานที่หน่วยบริการไม่สามารถรับประกันความเสียหายหรือปัญหาที่เกิดขึ้นได้

            </li>
            </ol>

            <h4 class="">3.	ข้อมูลส่วนบุคคลและความเป็นส่วนตัว</h4>
            <ol><li>
	ในการใช้บริการ “รพร.ตะพานหิน” ของผู้ขอใช้บริการ ในส่วนของบริการสำหรับบุคคลทั่วไป ผู้ขอใช้บริการรับทราบว่า อาจมีบางบริการที่หน่วยบริการจำเป็นต้องเก็บ รวบรวม ใช้ และเปิดเผยข้อมูลส่วนบุคคลของผู้ขอใช้บริการ เท่าที่จำเป็น (เช่น บริการจองคิวและนัดโรงพยาบาล) ซึ่งข้อมูลส่วนบุคคลดังกล่าวอาจรวมถึงข้อมูลทั่วไปของผู้ขอใช้บริการ ข้อมูลที่ใช้ยืนยันตัวตน ข้อมูลการนัดหมาย ข้อมูลสิทธิการรักษาพยาบาล เป็นต้น ในระบบของ “รพร.ตะพานหิน” และระบบสารสนเทศอื่นที่เกี่ยวข้องของหน่วยบริการ รวมทั้งไปยังระบบของผู้ให้บริการอื่นที่เกี่ยวเนื่องกัน นอกจากนี้ ผู้ขอใช้บริการยอมรับให้หน่วยบริการติดต่อสื่อสารกับผู้ขอใช้บริการหรือเปิดเผยข้อมูลส่วนบุคคลของผู้ขอใช้บริการเท่าที่จำเป็น เพื่อการตรวจสอบยืนยันตัวตน สอบถามข้อมูล ให้ข้อมูลเกี่ยวกับการบริการ หรือสนับสนุนการรับบริการของผู้ขอใช้บริการผ่านทางโทรศัพท์, ข้อความสั้น (SMS), จดหมายอิเล็กทรอนิกส์ (E-mail) หรือวิธีการอื่นใดที่หน่วยบริการกำหนดและผู้ขอใช้บริการได้ให้ไว้กับหน่วยบริการก่อนหน้านี้ หรือผ่านบริการ “รพร.ตะพานหิน” ทั้งนี้ เพื่อให้หน่วยบริการ สามารถให้บริการ “รพร.ตะพานหิน” แก่ผู้ขอใช้บริการได้ตามข้อกำหนดและเงื่อนไขการใช้บริการฉบับนี้และข้อกำหนดและเงื่อนไขการใช้บริการอื่น ๆ สำหรับบริการ “รพร.ตะพานหิน” โดยถือเป็นการดำเนินการเพื่อปฏิบัติตามสัญญาซึ่งผู้ขอใช้บริการเป็นคู่สัญญาหรือเพื่อดำเนินการตามคำขอของผู้ขอใช้บริการก่อนเข้าทำสัญญา ตามมาตรา 24 (3) แห่งพระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล พ.ศ. 2562
                </li>
                <li>
	นอกจากข้อ 3.1 หน่วยบริการ อาจจำเป็นจะต้องเก็บรวบรวม ใช้ และเปิดเผยข้อมูลส่วนบุคคลในระบบของ “รพร.ตะพานหิน” ในความควบคุมดูแลของหน่วยบริการ โดยมีวัตถุประสงค์เพื่อให้สามารถให้บริการ “รพร.ตะพานหิน” ในส่วนของบริการสำหรับบุคคลทั่วไป และบริการอื่นที่เกี่ยวเนื่องกัน แก่ผู้ขอใช้บริการ สำหรับการให้บริการดูแลสุขภาพของหน่วยบริการได้อย่างเต็มที่ ซึ่งข้อมูลดังกล่าวอาจรวมถึงข้อมูลสุขภาพของผู้ขอใช้บริการ เช่น หมู่เลือด ประวัติการแพ้ยา/อาหาร/อื่น ๆ เป็นต้น และในบางกรณีอาจรวมถึงข้อมูลส่วนบุคคลเกี่ยวกับเชื้อชาติ เผ่าพันธุ์ ความเชื่อในลัทธิ ศาสนาหรือปรัชญา หรือข้อมูลอื่นใดซึ่งกระทบต่อผู้ขอใช้บริการในทำนองเดียวกันตามที่คณะกรรมการคุ้มครองข้อมูลส่วนบุคคลประกาศกำหนดด้วย หากหน่วยบริการเห็นว่าข้อมูลดังกล่าวเกี่ยวข้องกับสุขภาพ หรือมีความสำคัญและจำเป็นกับการรับบริการดูแลสุขภาพของผู้ขอใช้บริการ และจำเป็นต้องเก็บรวบรวม ใช้ หรือเปิดเผยข้อมูลดังกล่าวผ่านบริการ “รพร.ตะพานหิน” เพื่อประโยชน์ในการให้บริการดูแลสุขภาพแก่ผู้ขอรับบริการเอง เช่น เพื่อเป็นข้อมูลประกอบในการรับบริการสุขภาพตามมาตรฐานคุณภาพและความปลอดภัยของหน่วยบริการ หรือเพื่อตรวจสอบยืนยันตัวตนของผู้ขอใช้บริการ เป็นต้น เพื่อให้การให้บริการ “รพร.ตะพานหิน” ของหน่วยบริการ แก่ผู้ขอใช้บริการสามารถดำเนินการได้ ถือเป็นการดำเนินการเพื่อปฏิบัติตามสัญญา ซึ่งผู้ขอใช้บริการเป็นคู่สัญญา ตามมาตรา 24 (3) หรือเป็นการจำเป็นในการปฏิบัติตามกฎหมายเพื่อให้บรรลุวัตถุประสงค์เกี่ยวกับเวชศาสตร์ป้องกันหรืออาชีวเวชศาสตร์ การประเมินความสามารถในการทำงานของลูกจ้าง การวินิจฉัยโรคทางการแพทย์ การให้บริการด้านสุขภาพหรือด้านสังคม การรักษาทางการแพทย์ การจัดการด้านสุขภาพ หรือระบบและการให้บริการด้านสังคมสงเคราะห์ หรือเป็นการปฏิบัติตามสัญญาระหว่างเจ้าของข้อมูลส่วนบุคคลกับผู้ประกอบวิชาชีพทางการแพทย์ ตามมาตรา 26 (5) (ก) หรือเป็นการจำเป็นในการปฏิบัติตามกฎหมายเพื่อให้บรรลุวัตถุประสงค์เกี่ยวกับการคุ้มครองแรงงาน การประกันสังคม หลักประกันสุขภาพแห่งชาติ สวัสดิการเกี่ยวกับการรักษาพยาบาลของผู้มีสิทธิตามกฎหมาย การคุ้มครองผู้ประสบภัยจากรถ หรือการคุ้มครองทางสังคม ซึ่งการเก็บรวบรวมข้อมูลส่วนบุคคลเป็นสิ่งจำเป็นในการปฏิบัติตามสิทธิหรือหน้าที่ของผู้ควบคุมข้อมูลส่วนบุคคลหรือเจ้าของข้อมูลส่วนบุคคล ตามมาตรา 26 (5) (ค) แห่งพระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล พ.ศ. 2562 แล้วแต่กรณี
                </li>
                <li>
	ผู้ขอใช้บริการรับทราบและตกลงให้ความยอมรับให้โรงพยาบาลติดต่อสื่อสารกับผู้ขอใช้บริการหรือเปิดเผยข้อมูลส่วนบุคคลของผู้ขอใช้บริการผ่านทางโทรศัพท์, ข้อความสั้น (SMS), จดหมายอิเล็กทรอนิกส์ (E-mail) หรือวิธีการอื่นใดที่หน่วยบริการกำหนดและผู้ขอใช้บริการได้ให้ไว้กับหน่วยบริการก่อนหน้านี้หรือในการใช้บริการ “รพร.ตะพานหิน” เพื่อประโยชน์ในการใช้งานหรือการแก้ไขปัญหาเกี่ยวกับบริการ “รพร.ตะพานหิน” รวมทั้ง ตกลงยอมรับให้หน่วยบริการแสดงข้อความแจ้งเตือน สื่อสาร หรือประชาสัมพันธ์ข่าวสารต่าง ๆ เกี่ยวกับบริการ “รพร.ตะพานหิน” หรือบริการ หรือข่าวสารอื่นๆภายในแอปพลิเคชัน และโดยการส่ง Notification หรือ Alert หรือข้อความในทำนองเดียวกันผ่านอุปกรณ์การใช้งาน
                </li>
                <li>
	ในกรณีที่ผู้ขอใช้บริการประสงค์จะใช้บริการสำหรับผู้ป่วยหรือผู้รับบริการของโรงพยาบาล (ซึ่งต้องสมัครเข้าใช้งานแอปพลิเคชันจากใน Line Application “รพร.ตะพานหิน” นอกเหนือจากบริการสำหรับบุคคลทั่วไป ผู้ขอใช้บริการจะต้องตกลงยอมรับข้อกำหนดและเงื่อนไขการใช้บริการ “รพร.ตะพานหิน” สำหรับการใช้งานในฐานะผู้รับบริการของหน่วยบริการ โดยกระทำผ่านแอปพลิเคชันด้วยวิธีการทางอิเล็กทรอนิกส์ และอาจต้องลงนามตกลงยอมรับข้อกำหนดและเงื่อนไขการใช้บริการเป็นลายลักษณ์อักษรกับหน่วยบริการเป็นการเพิ่มเติม (เว้นแต่จะได้ตกลงยอมรับข้อกำหนดและเงื่อนไขการใช้บริการดังกล่าวไปก่อนแล้ว) ทั้งนี้ ตามวิธีการและเงื่อนไขที่หน่วยบริการกำหนด ซึ่งอาจมีเงื่อนไขการเก็บรวบรวม ใช้ และเปิดเผยข้อมูลส่วนบุคคล และการแจ้งรายละเอียดในการเก็บรวบรวมข้อมูลส่วนบุคคลให้เจ้าของข้อมูลส่วนบุคคลทราบ เพิ่มเติมหรือแตกต่างจากในข้อกำหนดและเงื่อนไขฉบับนี้ โดยเฉพาะรายละเอียดเกี่ยวกับการเก็บรวบรวม ใช้ และเปิดเผยข้อมูลส่วนบุคคลที่เป็นข้อมูลสุขภาพของผู้ขอใช้บริการ
                </li>
                <li>
	ผู้ขอใช้บริการรับทราบและยอมรับว่า หากผู้ขอใช้บริการประสงค์จะขอยกเลิกการใช้บริการ “รพร.ตะพานหิน” ผู้ขอใช้บริการสามารถแจ้งความประสงค์กับหน่วยบริการได้ตามวิธีการและเงื่อนไขที่หน่วยบริการกำหนด โดยถือเป็นการระงับและยกเลิกการให้บริการ “รพร.ตะพานหิน” ตามข้อกำหนดและเงื่อนไขฉบับนี้ และมีผลหลังจากหน่วยบริการดำเนินการตามความประสงค์เสร็จสิ้น แต่การขอยกเลิกการใช้บริการ “รพร.ตะพานหิน” ดังกล่าว ไม่ส่งผลกระทบต่อการเก็บรวบรวม ใช้ หรือเปิดเผยข้อมูลส่วนบุคคลที่ดำเนินการไปแล้วโดยชอบ และหน้าที่ความรับผิดชอบ ตลอดจนค่าใช้จ่ายคงค้างที่ผู้ขอใช้บริการยังคงมีต่อหน่วยบริการยังคงมีผลผูกพันต่อไป ทั้งนี้ การขอยกเลิกการใช้บริการ “รพร.ตะพานหิน” อาจส่งผลต่อการอำนวยความสะดวก ความรวดเร็วในการรับบริการ และการรับรู้ข้อมูลเกี่ยวกับการเข้ารับบริการ แต่ไม่มีผลต่อการเข้าถึงและมาตรฐานการให้บริการดูแลสุขภาพของหน่วยบริการ หรือความสัมพันธ์อื่นระหว่างหน่วยบริการในฐานะผู้ให้บริการกับผู้ขอใช้บริการในฐานะผู้ป่วยหรือผู้รับบริการของหน่วยบริการแต่อย่างใด
                </li>
                <li>
	ข้อมูลส่วนบุคคลที่เก็บรวบรวมในการใช้บริการ “รพร.ตะพานหิน” นี้ อาจถูกเปิดเผยแก่บุคคลหรือหน่วยงานดังนี้
<ul>
<li>(1) ผู้ให้บริการคลาวด์ ผู้ดูแลระบบสารสนเทศ และผู้พัฒนาแอปพลิเคชันและระบบสารสนเทศที่เกี่ยวข้อง ในฐานะผู้ประมวลผลข้อมูลส่วนบุคคล ทั้งนี้ ภายใต้การกำกับและเงื่อนไขการคุ้มครองข้อมูลส่วนบุคคลที่หน่วยบริการในฐานะผู้ควบคุมข้อมูลส่วนบุคคลกำหนด โดยไม่มีการเก็บรวบรวม ใช้ หรือเปิดเผยข้อมูลส่วนบุคคลของผู้ขอใช้บริการเพื่อประโยชน์ทางธุรกิจของผู้ประมวลผลข้อมูลส่วนบุคคลโดยไม่ได้รับความยินยอมโดยชัดแจ้งจากผู้ขอใช้บริการในฐานะเจ้าของข้อมูลส่วนบุคคล
</li><li>(2) ศาล พนักงานสอบสวน กรมสอบสวนคดีพิเศษ และหน่วยงานที่มีหน้าที่และอำนาจตามกฎหมายในการตรวจสอบ เรียกข้อมูล เข้าถึงข้อมูล หรือสั่งให้หน่วยบริการเปิดเผยข้อมูล
</li><li>(3) หน่วยงานของรัฐที่มีหน้าที่ดำเนินภารกิจเพื่อประโยชน์สาธารณะ เช่น สำนักงานปลัดกระทรวงสาธารณสุข กรมสนับสนุนบริการสุขภาพ และกรมควบคุมโรค เฉพาะกรณีที่มีความจำเป็นและเป็นไปตามกฎหมาย
</li><li>(4) กระทรวงสาธารณสุข เฉพาะกรณีที่มีเหตุจำเป็น เช่น การสอบข้อเท็จจริง การสอบสวนทางวินัย และการรายงานข้อมูลเกี่ยวกับการดำเนินงานให้ผู้มีหน้าที่และอำนาจ
</li></ul>
	ผู้ขอใช้บริการมีสิทธิต่อไปนี้ตามพระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล พ.ศ. 2562
<ul><li>(1) สิทธิขอเข้าถึงและขอรับสำเนาข้อมูลส่วนบุคคลที่เกี่ยวกับตนซึ่งอยู่ในความรับผิดชอบของหน่วยบริการ หรือขอให้เปิดเผยถึงการได้มาซึ่งข้อมูลส่วนบุคคลที่ตนไม่ได้ให้ความยินยอม ตามมาตรา 30
</li><li>(2) สิทธิขอรับข้อมูลส่วนบุคคลที่เกี่ยวกับตนจากหน่วยบริการได้ ในกรณีที่หน่วยบริการได้ทำให้ข้อมูลส่วนบุคคลนั้นอยู่ในรูปแบบที่สามารถอ่านหรือใช้งานโดยทั่วไปได้ด้วยเครื่องมือหรืออุปกรณ์ที่ทำงานได้โดยอัตโนมัติและสามารถใช้หรือเปิดเผยข้อมูลส่วนบุคคลได้ด้วยวิธีการอัตโนมัติ รวมทั้งขอให้ผู้ควบคุมข้อมูลส่วนบุคคลส่งหรือโอนข้อมูลส่วนบุคคลในรูปแบบดังกล่าวไปยังผู้ควบคุมข้อมูลส่วนบุคคลอื่นเมื่อสามารถทำได้ด้วยวิธีการอัตโนมัติ และสิทธิขอรับข้อมูลส่วนบุคคลที่หน่วยบริการ ส่งหรือโอนข้อมูลส่วนบุคคลในรูปแบบดังกล่าวไปยังผู้ควบคุมข้อมูลส่วนบุคคลอื่นโดยตรง เว้นแต่โดยสภาพทางเทคนิคไม่สามารถทำได้ ตามมาตรา 31
</li><li>(3) สิทธิคัดค้านการเก็บรวบรวม ใช้ หรือเปิดเผยข้อมูลส่วนบุคคลที่เกี่ยวกับตนเมื่อใดก็ได้ ตามมาตรา 32
</li><li>(4) สิทธิขอให้หน่วยบริการดำเนินการลบหรือทำลาย หรือทำให้ข้อมูลส่วนบุคคลเป็นข้อมูลที่ไม่สามารถระบุตัวบุคคลที่เป็นเจ้าของข้อมูลส่วนบุคคลได้ ตามมาตรา 33
</li><li>(5) สิทธิขอให้ผู้ควบคุมข้อมูลส่วนบุคคลระงับการใช้ข้อมูลส่วนบุคคลได้ ตามมาตรา 34
</li><li>(6) สิทธิในการร้องขอให้หน่วยบริการดำเนินการให้ข้อมูลส่วนบุคคลถูกต้อง เป็นปัจจุบัน สมบูรณ์ และไม่ก่อให้เกิดความเข้าใจผิด ตามมาตรา 36
</li><li>(7) สิทธิร้องเรียนในกรณีที่หน่วยบริการ รวมทั้งบุคลากร/ลูกจ้างหรือผู้รับจ้างของหน่วยบริการ ฝ่าฝืนหรือไม่ปฏิบัติตามพระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล พ.ศ. 2562
</li></ul>
</li></ol>
            <h4 class="">4.	ข้อกำหนดและเงื่อนไขอื่น ๆ</h4>
            <ol><li>
	ในการตกลงหรือยอมรับข้อกำหนดและเงื่อนไขการใช้บริการฉบับนี้ ท่านยืนยันว่า ท่านคือผู้ขอใช้บริการแอปพลิเคชันนี้เอง หรือเป็นผู้มีอำนาจกระทำการแทนบุคคลดังกล่าวที่ถูกต้องตามกฎหมาย ซึ่งได้กระทำการแทนเพื่อประโยชน์และวัตถุประสงค์ของการใช้งานของผู้ที่ท่านกระทำการแทน ทั้งนี้ ในกรณีที่กระทำการแทน หากผู้นั้นอยู่ในวิสัยที่สามารถรับรู้ ทำความเข้าใจ และตัดสินใจเกี่ยวกับข้อกำหนดและเงื่อนไขการใช้บริการ “รพร.ตะพานหิน” ฉบับนี้ได้ ท่านยืนยันว่าท่านได้ให้ข้อมูลและอธิบายให้ผู้นั้นเข้าใจตลอดจนตกลงและให้ความยินยอมในการกระทำการแทนผู้นั้นแล้ว เท่าที่จะสามารถกระทำได้
</li><li>	นอกเหนือจากการตกลงหรือยอมรับข้อกำหนดและเงื่อนไขฉบับนี้ หากผู้ขอใช้บริการประสงค์จะใช้บริการสำหรับผู้ป่วยหรือผู้รับบริการของหน่วยบริการ (ซึ่งต้องสมัครเข้าใช้งานแอปพลิเคชันจากในแอปพลิเคชัน “รพร.ตะพานหิน” ) ผู้ขอใช้บริการอาจต้องลงนามตกลงยอมรับข้อกำหนดและเงื่อนไขการใช้บริการเป็นลายลักษณ์อักษรกับหน่วยบริการเป็นการเพิ่มเติมด้วย (เว้นแต่จะได้ลงนามตกลงยอมรับข้อกำหนดและเงื่อนไขการใช้บริการดังกล่าวเป็นลายลักษณ์อักษรไปก่อนแล้ว) ทั้งนี้ ตามวิธีการและเงื่อนไขที่หน่วยบริการกำหนด อนึ่ง ในกรณีที่ผู้ขอใช้บริการยังไม่ได้สมัครเข้าใช้งานแอปพลิเคชัน หรือยังไม่ได้ลงนามตกลงยอมรับข้อกำหนดและเงื่อนไขการใช้บริการเป็นลายลักษณ์อักษรกับหน่วยบริการ หรือได้รับยกเว้นการตกลงยอมรับข้อกำหนดและเงื่อนไขการใช้บริการเป็นลายลักษณ์อักษรดังกล่าวจากหน่วยบริการ ผู้ขอใช้บริการยอมรับว่า เหตุดังกล่าวไม่ได้ทำให้การตกลงหรือการยอมรับข้อกำหนดและเงื่อนไขการใช้บริการฉบับนี้ และข้อกำหนดและเงื่อนไขอื่นในแอปพลิเคชันหรือในการใช้บริการ “รพร.ตะพานหิน” (ถ้ามี) ที่กระทำผ่านวิธีการทางอิเล็กทรอนิกส์ ไม่มีผลผูกพันทางกฎหมาย เป็นโมฆะ หรือสิ้นผลไปแต่อย่างใด การตกลงหรือการยอมรับข้อกำหนดและเงื่อนไขดังกล่าวที่กระทำผ่านวิธีการทางอิเล็กทรอนิกส์ มีผลถูกต้องตามกฎหมายทุกประการ ทั้งนี้ จนกว่าจะถูกยกเลิกหรือแก้ไขเพิ่มเติมในภายหลัง
</li><li>	ผู้ขอใช้บริการยินยอมให้การตกลงหรือการยอมรับข้อกำหนดและเงื่อนไขการใช้บริการฉบับนี้ และข้อกำหนดและเงื่อนไขอื่นในแอปพลิเคชันหรือในการใช้บริการ”รพร.ตะพานหิน”(ถ้ามี) เป็นการแสดงเจตนาโดยผู้ขอใช้บริการ และมีผลผูกพันผู้ขอใช้บริการเสมือนหนึ่งผู้ขอใช้บริการลงนามในเอกสารเป็นลายลักษณ์อักษรด้วยตัวเอง ทั้งนี้ ผู้ขอใช้บริการยอมรับว่า หน่วยบริการอาจแก้ไข เพิ่มเติม หรือยกเลิกข้อกำหนดและเงื่อนไขการใช้บริการได้ตามแต่จะเห็นสมควร โดยจะแจ้งให้ผู้ขอใช้บริการทราบผ่านแอปพลิเคชัน และ/หรือโดยวิธีการอื่นใดที่เหมาะสม ซึ่งหากผู้ขอใช้บริการไม่ตกลงหรือยอมรับข้อกำหนดและเงื่อนไขดังกล่าว ไม่ว่าทั้งหมดหรือบางส่วน ผู้ขอใช้บริการอาจไม่สามารถใช้บริการ “รพร.ตะพานหิน” บางส่วนหรือทั้งหมดต่อไปได้ หรืออาจถูกระงับการให้บริการ “รพร.ตะพานหิน” และหน่วยบริการจะไม่รับผิดชอบต่อความเสียหายที่เกิดขึ้น
</li><li>	ในกรณีที่ผู้ขอใช้บริการ “รพร.ตะพานหิน” ได้เคยตกลงหรือยอมรับในข้อกำหนดและเงื่อนไขการใช้บริการออนไลน์อื่นๆกับ “รพร.ตะพานหิน” สำหรับการใช้งานในฐานะผู้รับบริการของหน่วยบริการที่กระทำผ่านวิธีการทางอิเล็กทรอนิกส์ ให้ความตกลงหรือการยอมรับนั้นยังมีผลใช้บังคับต่อไป เท่าที่ไม่ขัดหรือแย้งกับข้อกำหนดและเงื่อนไขการใช้บริการ “รพร.ตะพานหิน” ฉบับนี้ จนกว่าจะถูกยกเลิกหรือแก้ไขเพิ่มเติม
</li><li>	ในกรณีที่ข้อกำหนดและเงื่อนไขฉบับนี้ ขัดหรือแย้งกับข้อกำหนดและเงื่อนไขการใช้บริการ “รพร.ตะพานหิน” ที่ผู้ขอใช้บริการทำกับหน่วยบริการเป็นลายลักษณ์อักษร หรือขัดหรือแย้งกับข้อกำหนดและเงื่อนไขการใช้บริการอื่นในแอปพลิเคชันหรือในการใช้บริการ “รพร.ตะพานหิน” ผู้ขอใช้บริการยอมรับให้ใช้ตามข้อกำหนดและเงื่อนไขที่มีการตกลงหรือยอมรับล่าสุดเฉพาะในส่วนที่ขัดหรือแย้งกัน ส่วนข้อกำหนดและเงื่อนไขอื่น ๆ ให้ยังมีผลผูกพันอยู่ต่อไป เว้นแต่จะกำหนดไว้เป็นอย่างอื่น นอกจากนี้ ในกรณีที่ข้อกำหนดและเงื่อนไขการใช้บริการในส่วนใดที่สิ้นผลหรือไม่สามารถบังคับใช้ได้ไม่ว่าด้วยเหตุผลใดก็ตาม ผู้ขอใช้บริการยอมรับว่าเหตุดังกล่าวไม่มีผลกระทบต่อการมีผลผูกพันของข้อกำหนดและเงื่อนไขการใช้บริการในส่วนอื่น
</li><li>	ผู้ขอใช้บริการยอมรับว่า เท่าที่กฎหมายที่เกี่ยวข้องจะอนุญาต หน่วยบริการไม่รับรองว่าการให้บริการ “รพร.ตะพานหิน” และบริการอื่นที่เกี่ยวเนื่องกัน จะครอบคลุมและสามารถทำงานเชื่อมโยงกับผู้ให้บริการต่าง ๆ (เช่น ผู้ให้บริการชำระเงินผ่านระบบอิเล็กทรอนิกส์) อย่างครบถ้วนและโดยสมบูรณ์ หรือจะแสดง/ประมวลผลข้อมูลอย่างถูกต้องครบถ้วนหรือปราศจากข้อผิดพลาดอย่างสิ้นเชิง การให้บริการอาจมีข้อจำกัดในส่วนหนึ่งส่วนใดหรือรูปแบบหนึ่งรูปแบบใดก็ได้ นอกจากนี้ หน่วยบริการไม่รับรองว่าการใช้งานแอปพลิเคชันนี้และการใช้บริการ “รพร.ตะพานหิน” จะไม่รบกวนการทำงานและไม่ทำให้เกิดความเสียหายต่อแอปพลิเคชันหรือซอฟต์แวร์อื่น หรือข้อมูลหรือฮาร์ดแวร์ของอุปกรณ์การใช้งานหรือระบบอื่นใด
</li><li>	ผู้ขอใช้บริการยอมรับว่า เว้นแต่จะกำหนดไว้เป็นอย่างอื่นโดยชัดแจ้ง หน่วยบริการ และ/หรือบุคคลอื่น เป็นเจ้าของลิขสิทธิ์และสิทธิในทรัพย์สินทางปัญญาที่เกี่ยวข้องกับแอปพลิเคชันและบริการ “รพร.ตะพานหิน” และหน่วยบริการขอสงวนสิทธิ์นั้นในส่วนที่หน่วยบริการเป็นเจ้าของหรือได้รับอนุญาตให้นำมาใช้ โดยผู้ขอใช้บริการตกลงที่จะไม่ทำซ้ำ ดัดแปลง เผยแพร่ต่อสาธารณชน (ซึ่งรวมถึงการเผยแพร่ผ่านเว็บไซต์หรือโดยวิธีการทางอิเล็กทรอนิกส์) ให้เช่า จำหน่าย จ่ายแจก ลบหรือเปลี่ยนแปลงข้อมูลการบริหารสิทธิ (เช่น ลายน้ำ ข้อความ สัญลักษณ์ ภาพ หรือเสียงที่บ่งชี้ถึงผู้สร้างสรรค์ เจ้าของลิขสิทธิ์ หรือระยะเวลาและเงื่อนไขการใช้งานอันมีลิขสิทธิ์ ที่ติดอยู่หรือปรากฏเกี่ยวข้องกับงานอันมีลิขสิทธิ์) หรืออนุญาตให้ผู้อื่นดำเนินการดังกล่าว ต่อต้นฉบับหรือสำเนางานอันมีลิขสิทธิ์และทรัพย์สินทางปัญญาของโรงพยาบาลและ/หรือบุคคลอื่นที่เกี่ยวข้องกับแอปพลิเคชันและบริการ”รพร.ตะพานหิน”โดยไม่ได้รับอนุญาตจากหน่วยบริการหรือเจ้าของลิขสิทธิ์หรือเจ้าของทรัพย์สินทางปัญญานั้น เว้นแต่จะเป็นการทำซ้ำที่จำเป็นต้องมีสำหรับการนำสำเนามาใช้ เพื่อให้อุปกรณ์ที่ใช้ในระบบคอมพิวเตอร์หรือกระบวนการส่งงานอันมีลิขสิทธิ์ทางระบบคอมพิวเตอร์ทำงานได้ตามปกติ หรือกรณีอื่นที่ได้รับยกเว้นหรืออนุญาตตามกฎหมาย นอกจากนี้ ผู้ขอใช้บริการตกลงว่าจะไม่แปลกลับ (decompile) ทำวิศวกรรมย้อนกลับ (reverse engineer) แยกส่วนประกอบ หรือพยายามที่จะได้มาซึ่ง source code หรือถอดรหัส (decrypt) ของแอปพลิเคชัน ซอฟต์แวร์ หรือโปรแกรมคอมพิวเตอร์ที่ใช้ในบริการ “รพร.ตะพานหิน” เว้นแต่จะได้รับอนุญาตจากหน่วยบริการหรือเจ้าของงานดังกล่าว หรือเป็นข้อมูลสาธารณะที่เกิดจากการเปิดเผยโดยชอบอยู่แล้ว
</li><li>	ผู้ขอใช้บริการตกลงที่จะไม่ใช้แอปพลิเคชันหรือบริการ “รพร.ตะพานหิน” ในลักษณะต่อไปนี้ ซึ่งหากปรากฏหรือมีเหตุอันควรเชื่อว่ามีกรณีดังกล่าวเกิดขึ้น หน่วยบริการอาจระงับหรือยกเลิกการใช้บริการ “รพร.ตะพานหิน” ของผู้ขอใช้บริการที่เกี่ยวข้องทั้งหมดหรือบางส่วนก็ได้
</li>
<ul><li>(1) เพื่อให้ผู้ใดสำคัญผิดในตัวตน คุณสมบัติ หรือข้อเท็จจริงเกี่ยวกับผู้ขอใช้บริการหรือผู้รับบริการของหน่วยบริการ
</li><li>(2) ในลักษณะที่ผิดวัตถุประสงค์ ขัดต่อกฎหมายหรือศีลธรรมอันดี หรือสร้างความเสียหายแก่หน่วยบริการ
</li><li>(3) เป็นการโจมตี เจาะระบบ แทรกแซง รบกวน หรือทำให้ระบบที่เกี่ยวกับแอปพลิเคชันนี้หรือบริการ “รพร.ตะพานหิน” ถูกระงับ ชะลอ ขัดขวาง หรือรบกวนจนไม่สามารถทำงานตามปกติได้ หรือทำงานผิดพลาด ขัดข้อง ทำงานช้า หยุดชะงัก หรือผิดจากที่คาดหมาย หรือเป็นความพยายามที่จะเข้าถึง ส่งต่อ หรือเผยแพร่ข้อมูลส่วนบุคคลของผู้อื่นหรือข้อมูลความลับอย่างอื่น หรือลักลอบแก้ไขข้อมูลในระบบโดยมิชอบ ซึ่งเป็นการกระทำที่มุ่งโจมตีต่อความมั่นคงปลอดภัยไซเบอร์หรือการคุ้มครองข้อมูลส่วนบุคคล หรือเป็นการกระทำความผิดตามกฎหมายว่าด้วยการกระทำความผิดเกี่ยวกับคอมพิวเตอร์
</li><li>(4) เป็นการนำเข้าสู่ระบบคอมพิวเตอร์ซึ่งข้อมูลคอมพิวเตอร์ที่บิดเบือนหรือปลอม หรือข้อมูลคอมพิวเตอร์อันเป็นเท็จ หรือข้อมูลคอมพิวเตอร์อันเป็นความผิดเกี่ยวกับความมั่นคงแห่งราชอาณาจักร
</li><li>(5) เป็นการนำเข้าสู่ระบบคอมพิวเตอร์ซึ่งข้อมูลที่หยาบคาย ขัดต่อศีลธรรมอันดี ไม่เหมาะสม หรืออาจทำให้หน่วยบริการเกิดความเสียหายหรือต้องรับผิดทางกฎหมายหรือรับผิดชอบต่อบุคคลหนึ่งบุคคลใด
</li><li>(6) ในลักษณะอื่นที่ผิดเงื่อนไขในการใช้งานหรือการให้บริการที่กำหนดภายในแอปพลิเคชันหรือในการให้บริการ “รพร.ตะพานหิน” หรือตามที่โรงพยาบาลกำหนด
</li></ul>

</li><li>	ในกรณีที่ก่อนหน้านี้ ผู้ขอใช้บริการ “รพร.ตะพานหิน” ได้เคยตกลงหรือยอมรับในข้อกำหนดและเงื่อนไขการใช้บริการ “รพร.ตะพานหิน”  ของแอปพลิเคชัน “รพร.ตะพานหิน” หรือข้อกำหนดและเงื่อนไขการใช้บริการ “รพร.ตะพานหิน” สำหรับการใช้งานในฐานะผู้รับบริการของโรงพยาบาล ที่กระทำผ่านวิธีการทางอิเล็กทรอนิกส์ ให้ความตกลงหรือการยอมรับนั้นเป็นอันยกเลิก และให้ใช้ข้อกำหนดและเงื่อนไขการใช้บริการตามเอกสารฉบับนี้แทน ยกเว้นข้อกำหนดและเงื่อนไขการใช้บริการที่ได้ทำไว้กับหน่วยบริการเป็นลายลักษณ์อักษร (ถ้ามี) ให้ยังมีผลใช้บังคับต่อไปจนกว่าจะถูกยกเลิกหรือแก้ไขเพิ่มเติม และข้อกำหนดและเงื่อนไขการใช้บริการ “รพร.ตะพานหิน” สำหรับการใช้งานในฐานะผู้รับบริการของหน่วยบริการ (ถ้ามี) ให้เป็นไปตามข้อ 4.4

</li></ol>


            <form method="get" action="{{ url("/") }}/homeregister" name=login id="loginform">
                <input type="hidden" name="userId" value="{{ $_GET['userId'] }}">
                <input type="hidden" name="decodedIDToken2" value="{{ $_GET['decodedIDToken2'] }}">
                <input type="hidden" name="consent" value="Y">

                <button type="submit" class="btn scale-box btn-m mt-3 btn-center-l rounded-l shadow-xl bg-highlight font-800 text-uppercase">ยอมรับและลงทะเบียนใช้งาน</button>
            </form>
        </div>
    </div>

</div>

@endsection

@section('footer_script')


@endsection
