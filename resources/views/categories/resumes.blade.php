@extends('layout')

@section('navbar')
        <!-- Categories -->
<section id="categories">
    <div class="container">
        <div class="logo">
        </div>
        <div class="catNav">
            <div class="vacancies">
                <a href="/">İş elanları</a>
            </div>
            <div class="resumes">
                <a class="active" href="/categories/resumes">İş axtaranlar</a>
            </div>
        </div>
        <div class="otherNav">
            <div class="about">
                <a href="/pages/about">Haqqımızda</a>
            </div>
            <div class="add">
                <button><a href="/vacancies/new">Elan yerləşdirin</a></button>
            </div>
        </div>
        <div class="lang-select">
            <ul>
                <li id="az"><a>AZ</a></li>
                <li id="ru"><a>RU</a></li>
                <li id="en"><a>EN</a></li>
            </ul>
        </div>
    </div>
</section>

<!-- # Categories End -->
@stop

@section('view')
        <!-- Vacancies -->

<!-- View Vacancies -->
<section id="viewVacancies">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <div class="row">
                    <div class="vacCount" >122</div>
                    <div class="vacName"><a href="#maliyye">Maliyyə</a></div>
                </div>
                <div class="row">
                    <div class="vacCount" >17</div>
                    <a href="#markettinq">Markettinq</a>
                </div>
                <div class="row">
                    <div class="vacCount" >14</div>
                    <a class="vacLink" href="#it">İnformasiya Texnologiyaları</a>
                </div>
                <div class="row">
                    <div class="vacCount" >18</div>
                    <a href="#inzibati">İnzibati</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="row">
                    <div class="vacCount" >36</div>
                    <a href="#maliyye">Satış</a>
                </div>
                <div class="row">
                    <div class="vacCount" >4</div>
                    <a href="#markettinq">Dizayn</a>
                </div>
                <div class="row">
                    <div class="vacCount" >3</div>
                    <a href="#it">Hüquqşunaslıq</a>
                </div>
                <div class="row">
                    <div class="vacCount" >10</div>
                    <a href="#inzibati">Təhsil və Elm</a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="row">
                    <div class="vacCount" >7</div>
                    <a href="#maliyye">Senaye və kənd təsərrüfatı</a>
                </div>
                <div class="row">
                    <div class="vacCount" >24</div>
                    <a href="#markettinq">Xidmət</a>
                </div>
                <div class="row">
                    <div class="vacCount" >2</div>
                    <a href="#it">Tibb və əczaçılıq</a>
                </div>
                <div class="row">
                    <div class="vacCount" >2</div>
                    <a href="#inzibati">Müxtəlif</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- # View Vacancies end -->

<!-- View CV -->
    <!-- Səhifəyə görə dəyişdi -->
<!-- # View CV end -->

<!-- # Vacancies End -->
@stop

@section('search')
        <!-- Search -->

<section id="searchBtn">
    <div class="container">
        <div id="icon"></div>
        <span class="searchBtn">Axtarış</span>
        <i id="upDown" class="fa fa-caret-down"></i>
    </div>
</section>
<section id="search">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span>Kategoriya</span>
                <select class="select" id="category" name="category">
                    <option value="">Bütün kateqoriyalar</option>
                    <option value="36">Maliyyə</option>
                    <option value="48">— Kredit mütəxəssisi</option>
                    <option value="49">— Sığorta</option>
                    <option value="51">— Audit</option>
                    <option value="52">— Mühasibat</option>
                    <option value="57">— Maliyyə analiz</option>
                    <option value="150">— Bank xidməti</option>
                    <option value="154">— Kassir</option>
                    <option value="155">— İqtisadçı</option>
                    <option value="129">— Digər</option>
                    <option value="37">Marketinq</option>
                    <option value="64">— Marketinq menecment</option>
                    <option value="61">— İctimayətlə əlaqələr</option>
                    <option value="62">— Reklam</option>
                    <option value="60">— Kopiraytinq</option>
                    <option value="38">İnformasiya texnologiyaları</option>
                    <option value="66">— Sistem idarəetməsi</option>
                    <option value="67">— Məlumat bazasının idarə edilməsi və inkişafı</option>
                    <option value="68">— İT mütəxəssisi / məsləhətçi</option>
                    <option value="69">— Proqramlaşdırma</option>
                    <option value="70">— İT layihələrin idarə edilməsi</option>
                    <option value="71">— Texniki avadanlıq mütəxəssisi</option>
                    <option value="72">— Digər</option>
                    <option value="44">İnzibati</option>
                    <option value="105">— İnzibati dəstək</option>
                    <option value="108">— Menecment</option>
                    <option value="110">— Ofis menecmenti</option>
                    <option value="112">— Katibə / Resepşn</option>
                    <option value="143">— Heyətin idarəolunması</option>
                    <option value="113">— Digər</option>
                    <option value="40">Satış</option>
                    <option value="83">— Daşınmaz əmlak agenti / makler</option>
                    <option value="86">— Satış üzrə mütəxəssis</option>
                    <option value="43">Dizayn</option>
                    <option value="159">— Veb-dizayn</option>
                    <option value="97">— Memar / İnteryer dizaynı</option>
                    <option value="99">— Geyim dizaynı</option>
                    <option value="101">— Rəssam</option>
                    <option value="104">— Digər</option>
                    <option value="39">Hüquqşünaslıq</option>
                    <option value="73">— Vəkil</option>
                    <option value="74">— Cinayət hüququ</option>
                    <option value="79">— Hüquqşünas</option>
                    <option value="151">— Digər</option>
                    <option value="46">Təhsil və elm</option>
                    <option value="119">— Məktəb tədrisi</option>
                    <option value="120">— Universitet tədrisi</option>
                    <option value="121">— Repetitor</option>
                    <option value="122">— Xüsusi təhsil/ Təlim</option>
                    <option value="145">— Digər</option>
                    <option value="42">Sənaye və kənd təsərrüfatı</option>
                    <option value="91">— Avtomatlaşdırılmış idarəetmə</option>
                    <option value="92">— Tikinti</option>
                    <option value="95">— Kənd təsərrüfatı</option>
                    <option value="93">— Mühəndis</option>
                    <option value="94">— Geologiya və ətraf mühit</option>
                    <option value="96">— Digər</option>
                    <option value="133">Xidmət</option>
                    <option value="156">— Kuryer</option>
                    <option value="193">— SPA və gözəllik</option>
                    <option value="157">— Xadimə</option>
                    <option value="158">— Anbardar</option>
                    <option value="134">— Restoran işi</option>
                    <option value="135">— Sürücü</option>
                    <option value="136">— Dayə</option>
                    <option value="137">— Fəhlə</option>
                    <option value="142">— Turizm və mehmanxana işi</option>
                    <option value="144">— Tərcüməçi</option>
                    <option value="153">— Mühafizə xidməti</option>
                    <option value="149">— Digər</option>
                    <option value="138">Tibb və əczaçılıq</option>
                    <option value="139">— Həkim</option>
                    <option value="140">— Tibbi personal</option>
                    <option value="141">— Tibb təmsilçisi</option>
                    <option value="146">Müxtəlif</option>
                    <option value="148">— Jurnalistika</option>
                    <option value="160">— Tələbələr üçün</option>
                </select>
                <span>Təhsil</span>
                <select class="select" id="education" name="education">
                    <option value="">Vacib deyil</option>
                    <option value="1">Elmi dərəcə</option>
                    <option value="2">Ali</option>
                    <option value="3">Natamam ali</option>
                    <option value="4">Orta texniki</option>
                    <option value="5">Orta xüsusi</option>
                    <option value="6">Orta</option>
                    <option value="7">-</option>
                </select>
            </div>
            <div class="col-md-4">
                <span>Şəhər</span>
                <select class="select" id="city" name="city">
                    <option value="">Bütun şəhərlər</option>
                    <option value="28">Ağcabədi</option>
                    <option value="12">Ağdam</option>
                    <option value="83">Ağdaş</option>
                    <option value="34">Ağsu</option>
                    <option value="1">Bakı</option>
                    <option value="73">Balakən</option>
                    <option value="30">Beyləqan</option>
                    <option value="26">Biləsuvar</option>
                    <option value="31">Bərdə</option>
                    <option value="72">Cəlilabad</option>
                    <option value="23">Füzuli </option>
                    <option value="81">Goranboy</option>
                    <option value="29">Göyçay</option>
                    <option value="4">Gəncə</option>
                    <option value="27">Kürdəmir</option>
                    <option value="82">Lerik</option>
                    <option value="11">Lənkaran</option>
                    <option value="16">Masallı</option>
                    <option value="6">Mingəçevir</option>
                    <option value="14">Naftalan</option>
                    <option value="8">Naxçıvan</option>
                    <option value="39">Qaradağ</option>
                    <option value="38">Qax</option>
                    <option value="15">Qazax</option>
                    <option value="18">Quba</option>
                    <option value="19">Qusar</option>
                    <option value="76">Qəbələ</option>
                    <option value="33">Saatlı</option>
                    <option value="24">Sabirabad</option>
                    <option value="22">Salyan</option>
                    <option value="35">Samux</option>
                    <option value="74">Siyəzən</option>
                    <option value="5">Sumqayıt</option>
                    <option value="17">Tovuz</option>
                    <option value="32">Tərtər</option>
                    <option value="20">Xaçmaz</option>
                    <option value="75">Xırdalan</option>
                    <option value="37">Xızı</option>
                    <option value="77">Yardımlı</option>
                    <option value="10">Yevlax</option>
                    <option value="2">Zaqatala</option>
                    <option value="25">İmişli</option>
                    <option value="3">İsmayıllı</option>
                    <option value="80">Şabran</option>
                    <option value="21">Şamaxı</option>
                    <option value="78">Şirvan</option>
                    <option value="9">Şəki</option>
                    <option value="13">Şəmkir</option>
                    <option value="79">Şərur</option>
                    <option value="7">Əli-Bayramlı</option>
                </select>
                <span>İş təcrübəsi</span>
                <select class="select" id="experience" name="experience">
                    <option value="">Vacib deyil</option>
                    <option value="1">1 ildən aşağı</option>
                    <option value="2">1 ildən 3 ilə qədər</option>
                    <option value="3">3 ildən 5 ilə qədər</option>
                    <option value="4">5 ildən artıq</option>
                </select>
            </div>
            <div class="col-md-4">
                <span>Əmək haqqı</span>
                <select class="select" id="salary" name="salary">
                    <option value="">Vacib deyil</option>
                    <option value="100">minimum 100 AZN</option>
                    <option value="200">minimum 200 AZN</option>
                    <option value="300">minimum 300 AZN</option>
                    <option value="400">minimum 400 AZN</option>
                    <option value="500">minimum 500 AZN</option>
                    <option value="600">minimum 600 AZN</option>
                    <option value="700">minimum 700 AZN</option>
                    <option value="800">minimum 800 AZN</option>
                    <option value="900">minimum 900 AZN</option>
                    <option value="1000">minimum 1000 AZN</option>
                    <option value="1100">minimum 1100 AZN</option>
                    <option value="1200">minimum 1200 AZN</option>
                    <option value="1300">minimum 1300 AZN</option>
                    <option value="1400">minimum 1400 AZN</option>
                    <option value="1500">minimum 1500 AZN</option>
                    <option value="1600">minimum 1600 AZN</option>
                    <option value="1700">minimum 1700 AZN</option>
                    <option value="1800">minimum 1800 AZN</option>
                    <option value="1900">minimum 1900 AZN</option>
                    <option value="2000">minimum 2000 AZN</option>
                    <option value="2100">minimum 2100 AZN</option>
                    <option value="2200">minimum 2200 AZN</option>
                    <option value="2300">minimum 2300 AZN</option>
                    <option value="2400">minimum 2400 AZN</option>
                    <option value="2500">minimum 2500 AZN</option>
                    <option value="2600">minimum 2600 AZN</option>
                    <option value="2700">minimum 2700 AZN</option>
                    <option value="2800">minimum 2800 AZN</option>
                    <option value="2900">minimum 2900 AZN</option>
                    <option value="3000">minimum 3000 AZN</option>
                    <option value="3100">minimum 3100 AZN</option>
                    <option value="3200">minimum 3200 AZN</option>
                    <option value="3300">minimum 3300 AZN</option>
                    <option value="3400">minimum 3400 AZN</option>
                    <option value="3500">minimum 3500 AZN</option>
                    <option value="3600">minimum 3600 AZN</option>
                    <option value="3700">minimum 3700 AZN</option>
                    <option value="3800">minimum 3800 AZN</option>
                    <option value="3900">minimum 3900 AZN</option>
                    <option value="4000">minimum 4000 AZN</option>
                    <option value="5000">minimum 5000 AZN</option>
                    <option value="6000">minimum 6000 AZN</option>
                    <option value="7000">minimum 7000 AZN</option>
                    <option value="8000">minimum 8000 AZN</option>
                    <option value="9000">minimum 9000 AZN</option>
                    <option value="10000">minimum 10000 AZN</option>
                    <option value="11000">minimum 11000 AZN</option>
                    <option value="12000">minimum 12000 AZN</option>
                </select>
                <span>Açar sözləri</span>
                <input class="select" id="keyword" name="keyword" type="text">
            </div>
        </div>
        <div class="btnSearch">
            <input class="btn btn btn_load-more" name="commit" type="submit" value="Axtar">
        </div>
    </div>
</section>

<!-- # Search end -->

@stop

@section('lastVacancies')
        <!-- Last Vakancies -->

<section id="lastVac">
    <div class="container">

        <!-- List Last Vacancies -->

        <div class="headListLastVac">
            <div class="leftHead">
                <h1>SON CV-LER</h1>
                <a href="/resumes">Hamısını göstər</a>
            </div>
            <div class="rightHead pull-right">
                <span>7 gün - <a href="">14</a>, ay - <a href="">132</a> yeni elan</span>
            </div>
        </div>
        <div class="listLastVac clearFix">
            <div class="row">
                @foreach($resumes as $cv)
                    <div class="col-md-4">
                        <a href="#vac" class="nameVac">{{$cv->cv_position_name}}</a>
                        <div class="priceVac">
                            <span class="minPrice">{{$cv->cv_min_salary}}</span>
                        </div>
                        <span class="cvName">{{$cv->cv_name}}</a>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Premium List Vac-->

        <div class="mobile headListLastVac">
            <div class="leftHead">
                <h1>PREMİUM CV-LER</h1>
            </div>
        </div>
        <div class="mobile listLastVac clearFix">
            <div class="row">
                <div class="col-md-4 first">
                    <a href="#vac" class="nameVac">Satış Təmsilçisi</a>
                    <div class="priceVac">
                        <span class="minPrice">300</span>
                        <span> - </span>
                        <span class="maxPrice">500 AZN</span>
                    </div>
                    <a href="#company" class="companyName">Caspian Telecom MMC</a>
                </div>
                <div class="col-md-4">
                    <a href="#vac" class="nameVac">Satış Təmsilçisi</a>
                    <div class="priceVac">
                        <span class="minPrice">300</span>
                        <span> - </span>
                        <span class="maxPrice">500 AZN</span>
                    </div>
                    <a href="#company" class="companyName">Caspian Telecom MMC</a>
                </div>
                <div class="col-md-4">
                    <a href="#vac" class="nameVac">Satış Təmsilçisi</a>
                    <div class="priceVac">
                        <span class="minPrice">300</span>
                        <span> - </span>
                        <span class="maxPrice">500 AZN</span>
                    </div>
                    <a href="#company" class="companyName">Caspian Telecom MMC</a>
                </div>
                <div class="col-md-4">
                    <a href="#vac" class="nameVac">Satış Təmsilçisi</a>
                    <div class="priceVac">
                        <span class="minPrice">300</span>
                        <span> - </span>
                        <span class="maxPrice">500 AZN</span>
                    </div>
                    <a href="#company" class="companyName">Caspian Telecom MMC</a>
                </div>
            </div>
        </div>
        @stop

        @section('facebookVidget')
                <!-- Facebook Vidget  -->

        <div class="widgets">
            <div class="fb-like-box fb_iframe_widget" data-colorscheme="light" data-header="false" data-href="https://www.facebook.com/www.boss.az" data-show-border="false" data-show-faces="true" data-stream="false" data-width="940" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=168601233177656&amp;color_scheme=light&amp;container_width=520&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fwww.boss.az&amp;locale=az_AZ&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=940">
					<span style="vertical-align: bottom; width: 500px; height: 214px;">
						<iframe name="f4f117a67f6574" width="940px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like_box Facebook Social Plugin" src="http://www.facebook.com/v2.2/plugins/like_box.php?app_id=168601233177656&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D42%23cb%3Df2af5bb5e3b54bc%26domain%3Dboss.az%26origin%3Dhttp%253A%252F%252Fboss.az%252Ff3b93fec56b80dc%26relation%3Dparent.parent&amp;color_scheme=light&amp;container_width=520&amp;header=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fwww.boss.az&amp;locale=az_AZ&amp;sdk=joey&amp;show_border=false&amp;show_faces=true&amp;stream=false&amp;width=940" style="border: none; visibility: visible; width: 500px; height: 214px;" class=""></iframe>
					</span>
            </div>
        </div>
        <div class="quote">
            <div class="quote-text">It does not matter how slowly you go as long as you do not stop.</div>
            <div class="quote-by">Confucius</div>
        </div>


        <!-- Facebook vidget end -->
        @stop

        @section('listCompanies')
                <!-- List All categories and All company -->


        <div class="tabCategoriesCompanies clearFix">
            <div class="row">
                <ul id="tabNav">
                    <li><a class="tab-aktiv" href="#tab-categories">BÖLMƏLƏR</a></li>
                    <li><a href="#tab-companies">ŞİRKƏTLƏR</a></li>
                </ul>
            </div>
            <div id="tab-categories" class="show">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="catList">
                            <li class="catListItem"><a href="">Maliyyə</a></li>
                            <li class="catListItem"><a href="">Kredit Mütəxəssisi</a></li>
                            <li class="catListItem"><a href="">Maliyyə</a></li>
                            <li class="catListItem"><a href="">Maliyyə</a></li>
                            <li class="catListItem"><a href="">Maliyyə</a></li>
                            <li class="catListItem"><a href="">Maliyyə</a></li>
                            <li class="catListItem"><a href="">Maliyyə</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="catList">
                            <li class="catListItem"><a href="">Maliyyə</a></li>
                            <li class="catListItem"><a href="">Kredit Mütəxəssisi</a></li>
                            <li class="catListItem"><a href="">Maliyyə</a></li>
                            <li class="catListItem"><a href="">Maliyyə</a></li>
                            <li class="catListItem"><a href="">Maliyyə</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="catList last">
                            <li class="catListItem"><a href="">Maliyyə</a></li>
                            <li class="catListItem"><a href="">Kredit Mütəxəssisi</a></li>
                            <li class="catListItem"><a href="">Maliyyə</a></li>
                            <li class="catListItem"><a href="">Maliyyə</a></li>
                            <li class="catListItem"><a href="">Maliyyə</a></li>
                        </ul>
                    </div>
                </div><!-- Row -->
            </div>
            <!-- tab companies-->
            <div id="tab-companies">
                <div class="row">
                    <div class="col-md-4">
                        <a href="#company">CompanyName</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#company">CompanyName</a>
                    </div>
                    <div class="col-md-4 last">
                        <a href="#company">CompanyName</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#company">CompanyName</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#company">CompanyName</a>
                    </div>
                    <div class="col-md-4 last">
                        <a href="#company">CompanyName</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#company">CompanyName</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#company">CompanyName</a>
                    </div>
                    <div class="col-md-4 last">
                        <a href="#company">CompanyName</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#company">CompanyName</a>
                    </div>
                    <div class="col-md-4">
                        <a href="#company">CompanyName</a>
                    </div>
                    <div class="col-md-4 last">
                        <a href="#company">CompanyName</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- List All categories and All company End -->
    </div>
</section>
@stop

@section('footer')
<script type="text/javascript">
        // Tab menu (Vakansiyalar və CV-lər)
            // Səhifəyə göre oldu

        // Yuxarıdan aşağı açılan Axtarış sistemi
        var height;
        $(document).ready(function() {
            height = $("#search > .container").height();
            $("#search").hide();

            $("#searchBtn").on('click', function(event){
                $('#search').slideToggle(100);
            });
            $("#searchBtn").click(function(){
                $("#upDown").toggleClass("fa-caret-up");
            });

        });

        // tab menu all vacancies
        var catlistAttr;

        $(document).ready(function() {

            $("ul#tabNav li a").click(function(){
                $(".tab-aktiv").removeClass("tab-aktiv");
                $(this).addClass("tab-aktiv");
                catlistAttr = $(this).attr("href");
                $(".show").removeClass("show");
                $(catlistAttr).addClass("show");
                return false;
            });
        });
    </script>
@stop

