<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #0099ff;
  padding: 50px;
  text-align: center;
}
</style>
</head>
<body>

<div class="header">
  <img src="<?= asset('img/2.jpg') ?>"  alt="Girl in a jacket" style="widows: 140px;height:130px;">
  <h1>অনলাইন করোনা ভাইরাস উপসর্গ মূল্যায়ন</h1><br>
  <h3>আমাদের সার্ভিস টি ব্যাবহার করার জন্য আপনাকে ধন্যবাদ</h3>
</div>
<h1 style="text-align:center; color: blue">"আপনার আপাতত টেস্ট করার প্রয়োজন নাই, তবে সব সময় সাবধান থাকা খুবি জরুরী"</h1>
<form action="\home" style="text-align:center">
  <h5>যদি আরেকবার করোনা ভাইরাসের উপসর্গ মূল্যায়ন করতে চান তাহলে নীচের বাটন টি চাপুন</h5>
  <a href='http://127.0.0.1:8000/home'><button style="background-color: rgb(24, 123, 161); font-size: 10px; padding: 12px 28px; text-align: center; font-weight: bold; font-size: medium; color:cornsilk" type="Submit" >পুনরায় শুরু করুন</button><br><br></a>
</form>
<div>
  <p style="text-align: center">Powered By: CMED Health Ltd</p>
</div>
</body>
</html>



