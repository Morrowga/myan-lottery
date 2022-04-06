# myan-lottery
#SaveMyanmar &amp; Use it.
<p>Version</p>
<p><b>v1.0</b></p>
<p>Require </p>
<p><b>PHP-7.4 or Higher</b></p>
<span href="" style="color: blue;">Donation - 09795864194 ( K Pay )</span>
<span href="" style="color: red;">Contact me - thihaeung@gmail.com</span>
<h1>Myan Lottery Documentation</h1>
<br>
<p>There are two types of class in my package.Two d and Three d.</p>
<br>
<hr>
<h3>Installation </> </h3>
<p>$ composer require myanlottery/lottery</p>
<br>
<hr>
<h3><b>Declare Class </> </b></h3>
<br>
<p>use <b>MyanLottery\Lottery\Twod;</b></p>
<p>use <b>MyanLottery\Lottery\Threed;</b></p>
<br>
<hr>
<h3>Two D Usage </> </h3>
<br>
<p>နှစ်လုံးထီ အတွက် <b>Twod Class</b> ကို <b>Declare</b> လုပ်ပြီးပါက အောက်ပါ <b>functions</b> များကို အသုံးပြုနိုင်ပါသည်။</p>
<br>
<p><b>Example </> </b></p>
<br>
<p>use MyanLottery\Lottery\Twod;</p>
<p>public function() { </p>
<p>$example = new Twod();</p>
<p>return $example->function();</p>
<p>}</p>
<br>
<ul>
    <li><b>အာဂဏန်း function</b> - reverse_array($number) - <b>$number</b> နေရာတွင် <b>00</b> မှ <b>99</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(array)</b></li>
		<br>
    <li><b>အာဂဏန်း function</b> - reverse_string($number) - <b>$number</b> နေရာတွင် <b>00</b> မှ <b>99</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
		<br>
    <li><b>နက္ခတ် function</b> - natkhat()</li>
		<br>
    <li><b>ပါ၀ါ function</b> - power()</li>
		<br>
    <li><b>ညီအကို function</b> - nyiko()</li>
		<br>
    <li> <b> ဆယ်ပြည့် function</b> - salpyae()</li>
		<br>
    <li><b>အပူး function</b> - salpyae()</li>
		<br>
    <li><b>ဆယ်ပြည့် function</b> - salpyae()</li>
		<br>
    <li><b>ဘရိတ်( အာဂဏန်းပါ ) function</b> - break_round($number) - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>18</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
		<br>
    <li><b>ဘရိတ်( အာဂဏန်းမပါ ) function</b> - break($number) - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>18</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
		<br>
    <li><b>စုံ function</b> - even()</li>
		<br>
    <li><b>မ function</b> - odd()</li>
		<br>
    <li><b>စုံမ function</b> - evenodd()</li>
		<br>
    <li><b>မစုံ function</b> - oddeven()</li>
		<br>
    <li><b>စုံပူး function</b> - sameeven()</li>
		<br>
    <li><b>မပူး function</b> - sameodd()</li>
		<br>
    <li><b>ဂဏန်းကြီး function</b> - bigNumber()</li>
		<br>
    <li><b>ဂဏန်းသေး function</b> - smallNumber()</li>
		<br>
    <li><b>ထိပ်စီး function</b> - htatesee($number) - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>9</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
		<br>
    <li><b>နောက်ပိတ် function</b> - naukpate($number) - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>9</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
		<br>
    <li><b>တစ်လုံးပတ် function</b> - oneround($number) - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>9</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
		<br>
    <li><b>နံပါတ်နှစ်ခုအတွင်းအကွာအ၀ေး function</b> - number_arrange($number1,$number2) - <b>$number1,$number2</b> နေရာတွင် <b>00</b> မှ <b>99</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
</ul>
<br>
<hr>
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
    <li><b>အာဂဏန်း function</b> - r_origin_array($number) - <b>$number</b> နေရာတွင် <b>000</b> မှ <b>999</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(array)</b></li>
   	<br>
    <li><b>အာဂဏန်း function</b> - r_origin_string($number) - <b>$number</b> နေရာတွင် <b>000</b> မှ <b>999</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
	<br>
    <li><b>အာဂဏန်း( ထည့်ဂဏန်းမပါ ) function</b> - r_no_origin_array($number) - <b>$number</b> နေရာတွင် <b>000</b> မှ <b>999</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(array)</b></li>
	<br>
    <li><b>အာဂဏန်း( ထည့်ဂဏန်းမပါ ) function</b> - r_no_origin_string($number) - <b>$number</b> နေရာတွင် <b>000</b> မှ <b>999</b> အထိကြိုက်ရာထည့်၍ သုံးနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
	<br>
    <li><b>တွတ်ဂဏန်း</b> <b>function</b> - took_string($number, $luckynumber) - <b>$luckynumber</b> နေရာတွင် <b>000</b> မှ <b>999</b> အထိပေါက်ဂဏန်းထည့်၍ <b>$number</b> နေရာတွင် <b>000</b> မှ <b>999</b> ထိ မိမိရှာမည့် ဂဏန်းအားထည့်ပြီး အသုံးပြုနိုင်ပါသည်။ စာကြွင်း - <b>$number(string) , $luckynumber(string)</b></li>
	<br>
    <li><b>တွတ်ဂဏန်း</b> <b>function</b> - took_array($number, $luckynumber) - <b>$luckynumber</b> နေရာတွင် <b>000</b> မှ <b>999</b> အထိပေါက်ဂဏန်းထည့်၍ <b>$number</b> နေရာတွင် <b>000</b> မှ <b>999</b> ထိ မိမိရှာမည့် ဂဏန်းအားထည့်ပြီး အသုံးပြုနိုင်ပါသည်။ စာကြွင်း - <b>$number(array) , $luckynumber(string)</b></li>
	<br>
    <li><b>အပူး</b> <b>function</b> - apuu()</li>
	<br>
    <li><b>ရှေ့ပူးဂဏန်းအားလုံး</b> <b>function</b> - shaepuu_all()</li>
	<br>
    <li><b>ရှေ့ပူး( ရှာဂဏန်း )</b>function -shaepuu($number) - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>9</b> အထိကြိုက်ရာထည့်၍ ရှာနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
	<br>
    <li><b>နောက်ပူးဂဏန်းအားလုံး</b>function - naukpuu_all()</li>
	<br>
    <li><b>နောက်ပူး( ရှာဂဏန်း )<b/>function - naukpuu($number) - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>9</b> အထိကြိုက်ရာထည့်၍ ရှာနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
	<br>
    <li><b>ရှေ့အနောက်ဂဏန်းအားလုံး</b>function - shaenaukpuu_all()</li>
	<br>
    <li><b>ရှေ့အနောက်အပူး( ရှာဂဏန်း )</b>function - shaenaukpuu($number) - <b>$number</b> နေရာတွင် <b>0</b> မှ <b>9</b> အထိကြိုက်ရာထည့်၍ ရှာနိုင်ပါသည်။ စာကြွင်း - <b>$number(string)</b></li>
</ul>

<h3>Function in Blade Views</h3>
<br>
<p>Example - {{ \MyanLottery\Lottery\Twod::function() }}</p>
<br>
<p><b>function() နေရာတွင် ဖော်ပြခဲ့သော function များအား အစားထိုးအသုံးပြုနိုင်ပါသည်။</b></p>
