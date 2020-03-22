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
  padding: 70px;
  text-align: center;
}
</style>
</head>
<body>

<div class="header">

  <img src="<?= asset('img/2.jpg') ?>"  alt="Girl in a jacket" style="widows: 140px;height:130px;">
  <h1>অনলাইন করোনা ভাইরাস উপসর্গ মূল্যায়ন</h1><br>

  <h3>নিচের প্রশ্নগুলোর যথাযথ উত্তর দিন</h3>
</div>
<h1 style="text-align:center">আপনার জ্বর, হাঁচি, কফ, কাশি অথবা গলা ব্যথা আছে ?</h1>
<div style="text-align:center">
<a href='http://127.0.0.1:8000/sec'><button style="background-color: rgb(24, 123, 161); font-size: 10px; padding: 12px 28px; text-align: center; font-weight: bold; font-size: medium; color:cornsilk" type="Submit" >হ্যাঁ</button><br><br></a>
<a href='http://127.0.0.1:8000/homenew'><button style="background-color: rgb(24, 123, 161); font-size: 10px; padding: 12px 28px; text-align: center; font-weight: bold; font-size: medium; color:cornsilk" type="Submit" >না</button></a>
</div><br><br>
<div>
  <p style="text-align: center">Powered By: CMED Health Ltd</p>
</div>
</body>
</html>

