<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<style>


body {
  margin: 0;
}



/* Style the header */
.header {
  background-color: #0099ff;
  padding: 90px;
  text-align: center;
}



</style>
</head>
<body> 
  <script type="text/javascript">
    var citiesByState = {
    DHAKA: ["Dhaka","Faridpur","Gazipur","Gopalganj","Kishoreganj","Madaripur","Manikganj","Munshiganj","Narayanganj","Narsingdi","Rajbari","Shariatpur","Tangail"],
    CHATTAGRAM: ["Bandarban","Brahmanbaria","Chandpur","Chittagong","Comilla","Cox's Bazar","Feni","Khagrachhari","Lakshmipur","Noakhali","Rangamati"],
    KHULNA: ["Bagerhat","Chuadanga","Jessore","Jhenaidaha","Khulna","Kushtia","Magura","Meherpur","Narail"," Satkhira"],
    BARSIHAL: ["Barguna","Barisal","Bhola","Jhalokati","Patuakhali","Pirojpur"],
    SYLHET: ["Habiganj","Maulvi Bazar","Sunamganj","Sylhet"],
    RANGPUR: ["Dinajpur","Gaibandha","Kurigram","Lalmonirhat","Nilphamari","Panchagarh","Rangpur","Thakurgaon"],
    MYMENSING: ["Mymensingh","Jamalpur","Netrokona","Sherpur"],
    RAJSHAHI: ["Bogra","Joypurhat","Naogaon","Natore","Nawabganj","Pabna","Rajshahi","Sirajganj"]
    }
    function makeSubmenu(value) {
    if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
    else {
    var citiesOptions = "";
    for(cityId in citiesByState[value]) {
    citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
    }
    document.getElementById("citySelect").innerHTML = citiesOptions;
    }
    }
    function displaySelected() { var country = document.getElementById("countrySelect").value;
    var city = document.getElementById("citySelect").value;
    alert(country+"\n"+city);
    }
    function resetSelection() {
    document.getElementById("countrySelect").selectedIndex = 0;
    document.getElementById("citySelect").selectedIndex = 0;
    }
   
    function lock() {
     firebase.database().ref("User").set({
       name: document.getElementById("name").value,
       mobile: docuemt.getElementById("mobile").value
     });
     window.alert("okay");
    }



  function newwin() {
  response.redirect('first.html');
    }
  </script>



<div class="header">

  <img src="<?= asset('img/2.jpg') ?>" alt="Girl in a jacket" style="width: 560px;height:193px;">
  <h2>অনলাইন করোনা ভাইরাস উপসর্গ মূল্যায়ন</h2>
</div>
<h1 style="text-align:center" font->আপনি কি করোনা (COVID - 19) ভাইরাসে এর ঝুঁকি নিজে নিজে যাচাই করতে চান?</h1>
<diV>
  <form action="/first" style="text-align:center; padding-right: 10%; border-style: solid; padding: 30px;">
  <div style="text-align:left"><P>
 সিমেড হেল্থ লিমিটেড এবং বাংলাদেশের স্বাস্থ্য মন্ত্রনালয় এর সহযোগিতায় নির্মিত এই স্ব-মূল্যায়ন পরিসেবাটি আপনাকে  করোনা ভাইরাস (কোভিড -১৯) এর প্রাথমিক উপসর্গ নির্ধারণ করতে সহায়তা করবে, যাতে করে আপনি বুঝতে পারেন এর জন্য আপনার আরও মূল্যায়ন বা পরীক্ষার প্রয়োজন আছে কি না । আপনি এই মূল্যায়নটি নিজের জন্য বা অন্য কারো পক্ষ হয়ে করতে পারেন।<br><br>
যাদের জন্য করোনা ভাইরাস (কোভিড – ১৯) এর উপস্থিতি পরীক্ষাটি প্রযোজ্যঃ<br><br> 
<b>শ্বাস-প্রশ্বাস এর সমস্যাযুক্ত ব্যক্তিদের মধ্যে হতে যারা </b> <br><br>
•	হাসপাতলে ভর্তি আছেন বা যাদের হাসপাতালে ভর্তি হওয়ার সম্ভাবনা রয়েছে<br>
•	স্বাস্থ্যর্কমী যারা স্বাস্থ্য সেবা প্রদানে নিয়োজিত আছেন<br>
•	দীর্ঘমেয়াদী সুযোগ-সুবিধা প্রাপ্তদের<br>
•	রোগ তদন্ত কার্যক্রমের অংশ হিসেবে<br><br>
<b>যাদের জন্য করোনা ভাইরাস (কোভিড – ১৯) এর উপস্থিতি পরীক্ষাটি পরীক্ষা করার দরকার নেইঃ</b><br><br>
•	উপসর্গের লক্ষণবিহীন<br>
•	হালকা শ্বাস প্রশ্বাসের সমস্যার লক্ষণযুক্ত রোগী যাদের কিনা ঘরেই চিকিৎসা দেওয়া সম্ভব এবং যারা বিদেশ থেকে এসেছেন এবং ১৪ দিনের মধ্যে অসুস্থতার শিকার হয়েছেন<br><br>
যাদের জ্বর, কাশি, হাঁচি সহ গলা ব্যথা বা শ্বাস প্রশ্বাস জনিত অসুবধিা রয়েছে তাদেরকে ১৪ দিনের জন্য নিজেদের স্ব-বিচ্ছিন্ন করার ক্ষেত্রে বাংলাদশেরে স্বাস্থ্য মন্ত্রনালয় জোরালো ভাবে আহ্বান জানাচ্ছে। ঘরের বাহিরে থাকা অবস্থায় নিজেকে সুরক্ষিত রাখার জন্য ঘন ঘন হাত ধওয়ার অভ্যাস করুন ও সামাজিক দূরত্ব বজায় রাখুন (ন্যূনতম ২ মিটার)।<br>
 </P> <br>
 </div>
 <div style="text-align:center">-----------***-----------</div><br><br>
    <div class="block" Style="display: inline-block">
   <label for="fname" style="font-size:bold">আপনার নামঃ</label>            
   <input type="text" name="name" placeholder="Your Name">
   </div><br><br>
   <div Style="display: inline-block">
   <label for="lname" style="font-size:bold">মোবাইল নাম্বারঃ</label>       
   <input type="text" name="mobile" placeholder="Mobile Number" ><br>
  </div>
   <h4 for="lname" style="font-size:bold">আপনার ঠিকানা প্রদান করুনঃ</h4>
   <div>
  </head>
  <body onload="resetSelection()">
  <select id="countrySelect" name="countrySelect" size="1" onchange="makeSubmenu(this.value)">
  <option value="" disabled selected>Choose Division</option>
  <option>DHAKA</option>
  <option>CHATTAGRAM</option>
  <option>BARSIHAL</option>
  <option>KHULNA</option>
  <option>SYLHET</option>
  <option>RANGPUR</option>
  <option>RAJSHAHI</option>
  <option>MYMENSING</option>
  </select>
  <select id="citySelect" name="citySelect" size="1" >
  <option value="" disabled selected>Choose District</option>
  <option></option>
  </select><br><br>
</div>
<a href='http://127.0.0.1:8000/first'> <button style="background-color: rgb(24, 123, 161); font-size: 10px; padding: 12px 28px; text-align: center; font-weight: bold; font-size: medium; color:cornsilk" type="Submit" >শুরু করুন</button><br></a>

  </form>
  <div style="text-align:center">
    <p style="font-size:bold" >Powered By: CMED Health Ltd</p>
  </div> 
</body>
</html>
