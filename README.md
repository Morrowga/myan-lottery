# myan-lottery
#SaveMyanmar &amp; Use it.
<p>Version</p>
<p><b>v1.0 Dev</b></p>
<p>Require </p>
<p><b>PHP-7.4 or Higher</b></p>
<h1>Myan Lottery Documentation</h1>
<br>
<p>There are two types of class in my package. <b>Two d </b> and <b>Three d</b></p>
<br>
<h3>Installation </> </h3>
<p>$ composer require myanlottery/lottery</p>
<br>
<h3><b>Declare Class </> </b></h3>
<br>
<p>use <b>MyanLottery\Lottery\Twod;</b></p>
<p>use <b>MyanLottery\Lottery\Threed;</b></p>
<br>
<h3>Two D Usage </> </h3>
<br>
<p>နှစ်လုံးထီ အတွက် <b>Twod Class</b> ကို <b>Declare</b> လုပ်ပြီးပါက အောက်ပါ <b>functions</b> များကို အသုံးပြုနိုင်ပါသည်။</p>
<br>
<p><b>Example </> </b></p>
<br>
<p><b>$example = new Twod();</b></p>
<p><b>return $example->function();</b></p>
<br>
<ul>
    <li><b>အာဂဏန်း function - reverse_array($number)</b> - <b>$number</b> နေရာတွင် <b>00</b> မှ <b>99</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(array)</b></li>
		<br>
    <li><b>အာဂဏန်း function - reverse_string($number)</b> - <b>$number</b> နေရာတွင် <b>00</b> မှ <b>99</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
		<br>
    <li><b>နက္ခတ် function - natkhat()</b></li>
		<br>
    <li><b>ပါ၀ါ function - power()</b></li>
		<br>
    <li><b>ညီအကို function - nyiko()</b></li>
		<br>
    <li> <b> ဆယ်ပြည့် function - salpyae()</b></li>
		<br>
    <li><b>အပူး function - salpyae()</b></li>
		<br>
    <li><b>ဆယ်ပြည့် function - salpyae()</b></li>
		<br>
    <li><b>ဘရိတ်( အာဂဏန်းပါ ) function - break_round($number)</b> - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>18</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
		<br>
    <li><b>ဘရိတ်( အာဂဏန်းမပါ ) function - break($number)</b> - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>18</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
		<br>
    <li><b>စုံ function - even()</b></li>
		<br>
    <li><b>မ function - odd()</b></li>
		<br>
    <li><b>စုံမ function - evenodd()</b></li>
		<br>
    <li><b>မစုံ function - oddeven()</b></li>
		<br>
    <li><b>စုံပူး function - sameeven()</b></li>
		<br>
    <li><b>မပူး function - sameodd()</b></li>
		<br>
    <li><b>ဂဏန်းကြီး function - bigNumber()</b></li>
		<br>
    <li><b>ဂဏန်းသေး function - smallNumber()</b></li>
		<br>
    <li><b>ထိပ်စီး function - htatesee($number)</b> - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>9</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
		<br>
    <li><b>နောက်ပိတ် function - naukpate($number)</b> - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>9</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
		<br>
    <li><b>တစ်လုံးပတ် function - oneround($number)</b> - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>9</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
		<br>
    <li><b>နံပါတ်နှစ်ခုအတွင်းအကွာအ၀ေး function - number_arrange($number1,$number2)</b> - <b>$number1,$number2</b> နေရာတွင် <b>00</b> မှ <b>99</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
</ul>
<br>
<h3>Three D Usage </> </h3>
<br>
<p>သုံးလုံးထီ အတွက် <b>Threed Class</b> ကို <b>Declare</b> လုပ်ပြီးပါက အောက်ပါ <b>functions</b> များကို အသုံးပြုနိုင်ပါသည်။</p>
<br>
<p><b>Example </> </b></p>
<br>
<p><b>$example = new Threed();</b></p>
<p><b>return $example->function();</b></p>
<br>
<ul>
    <li><b>အာဂဏန်း function - r_origin_array($number)</b> - <b>$number</b> နေရာတွင် <b>000</b> မှ <b>999</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(array)</b></li>
   	<br>
    <li><b>အာဂဏန်း function - r_origin_string($number)</b> - <b>$number</b> နေရာတွင် <b>000</b> မှ <b>999</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
	<br>
    <li><b>အာဂဏန်း( ထည့်ဂဏန်းမပါ ) function - r_no_origin_array($number)</b> - <b>$number</b> နေရာတွင် <b>000</b> မှ <b>999</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(array)</b></li>
	<br>
    <li><b>အာဂဏန်း( ထည့်ဂဏန်းမပါ ) function - r_no_origin_string($number)</b> - <b>$number</b> နေရာတွင် <b>000</b> မှ <b>999</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
	<br>
    <li><b>တွတ်ဂဏန်း</b> <b>function - took_string($number, $luckynumber)</b> - <b>$luckynumber</b> နေရာတွင် <b>000</b> မှ <b>999</b> အထိပေါက်ဂဏန်းထည့်၍ <b>$number</b> နေရာတွင် <b>000</b> မှ <b>999</b> ထိ မိမိရှာမည့် ဂဏန်းအားထည့်ပြီး အသုံးပြုနိုင်ပါသည်။ စာကြွင်း - <b>$number(string) , $luckynumber(string)</b></li>
	<br>
    <li><b>တွတ်ဂဏန်း</b> <b>function - took_array($number, $luckynumber)</b> - <b>$luckynumber</b> နေရာတွင် <b>000</b> မှ <b>999</b> အထိပေါက်ဂဏန်းထည့်၍ <b>$number</b> နေရာတွင် <b>000</b> မှ <b>999</b> ထိ မိမိရှာမည့် ဂဏန်းအားထည့်ပြီး အသုံးပြုနိုင်ပါသည်။ စာကြွင်း - <b>$number(array) , $luckynumber(string)</b></li>
	<br>
    <li><b>အပူး</b> <b>function - apuu()</b></li>
	<br>
    <li><b>ရှေ့ပူးဂဏန်းအားလုံး</b> <b>function - shaepuu_all()</b></li>
	<br>
    <li><b>ရှေ့ပူး( ရှာဂဏန်း )</b>function</b> - <b>shaepuu($number)</b> - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>9</b> အထိကြိုက်ရာထည့်၍ ရှာနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
	<br>
    <li><b>နောက်ပူးဂဏန်းအားလုံး</b> <b>function - naukpuu_all()</b></li>
	<br>
    <li><b>နောက်ပူး( ရှာဂဏန်း )<b/> <b>function - naukpuu($number)</b> - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>9</b> အထိကြိုက်ရာထည့်၍ ရှာနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
	<br>
    <li><b>ရှေ့အနောက်ဂဏန်းအားလုံး</b> <b>function - shaenaukpuu_all()</b></li>
	<br>
    <li><b>ရှေ့အနောက်အပူး( ရှာဂဏန်း )</b> <b>function - shaenaukpuu($number)</b> - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>9</b> အထိကြိုက်ရာထည့်၍ ရှာနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
</ul>

<h3>Function in Blade Views</h3>
<br>
<p>Example - {{ \MyanLottery\Lottery\Twod::function() }}</p>
<br>
<p><b>function() နေရာတွင် ဖော်ပြခဲ့သော function များအား အစားထိုးအသုံးပြုနိုင်ပါသည်။</b></p>
