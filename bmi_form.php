<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>โปรแกรมคำนวณ BMI</title>
<style>
body{
    font-family: 'Segoe UI', Tahoma;
    background: linear-gradient(135deg,#b2f7ef,#cdb4db);
    padding:40px;
}
.container{
    max-width:500px;
    margin:auto;
    background:#fff;
    border-radius:20px;
    padding:30px;
    box-shadow:0 10px 30px rgba(0,0,0,0.15);
}
h2{
    text-align:center;
    color:#2a9d8f;
}
label{
    font-weight:bold;
}
input{
    width:100%;
    padding:10px;
    margin:8px 0 15px 0;
    border-radius:10px;
    border:1px solid #ccc;
}
.age-group{
    display:flex;
    gap:10px;
}
button{
    width:48%;
    padding:12px;
    border:none;
    border-radius:12px;
    font-size:16px;
    cursor:pointer;
}
.submit{
    background:#2a9d8f;
    color:white;
}
.clear{
    background:#e76f51;
    color:white;
}
.btn-group{
    display:flex;
    justify-content:space-between;
}
</style>
</head>

<body>
<div class="container">
<h2>โปรแกรมคำนวณดัชนีมวลกาย (BMI)</h2>

<form action="bmi_result.php" method="post">

<label>ชื่อ - สกุล</label>
<input type="text" name="fullname" required>

<label>วันเกิด</label>
<input type="date" name="birthdate" required>

<label>น้ำหนัก (กิโลกรัม)</label>
<input type="number" name="weight" step="0.1" required>

<label>ส่วนสูง (เซนติเมตร)</label>
<input type="number" name="height" required>

<div class="btn-group">
<button type="submit" class="submit">Submit</button>
<button type="reset" class="clear">Clear</button>
</div>

</form>
</div>
</body>
</html>
