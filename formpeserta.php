<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  
  <!-- Design by foolishdeveloper.com -->
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tambah Peserta</title>
  <style media="screen">
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  font-family: 'Montserrat', sans-serif;
}

body{
  background: linear-gradient(
     105deg,
     #88beee ,
     #0a2e73
 );
}

.wrapper{
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
}

.registration_form{
  background: white;
  padding: 25px;
  border-radius: 5px;
  width: 500px;
}

.registration_form .title{
  text-align: center;
  font-size: 25px;
  text-transform: uppercase;
  color: white;
  background:rgb(13, 98, 215);
  letter-spacing: 2px;
  font-weight: 700;
  margin-top: -25px;
  margin-left:-25px;
  margin-right:-25px;
}

.form_wrap{
  margin-top: 35px;
}

.form_wrap .input_wrap{
  margin-bottom: 15px;
}

.form_wrap .input_wrap:last-child{
  margin-bottom: 0;
}

.form_wrap .input_wrap label{
  display: block;
  margin-bottom: 3px;
  color: #1a1a1f;
}

.form_wrap .input_grp{
  display: flex;
  justify-content: space-between;
}

.form_wrap .input_grp  input[type="text"]{
  width: 165px;
}

.form_wrap  input[type="text"]{
  width: 100%;
  border-radius: 3px;
  border: 1.3px solid #9597a6;
  padding: 10px;
  outline: none;
}

.form_wrap  input[type="text"]:focus{
  border-color: #063abd;
}

.form_wrap ul{
 border:1px solid rgb(115, 185, 235);
  width:98%;
  background: rgb(206, 238, 242);
  margin-left: 1%;
  padding: 8px 10px;
  border-radius: 20px;
  display: flex;
  justify-content: center;
}

.form_wrap ul li:first-child{
  margin-right: 15px;
}

.form_wrap ul .radio_wrap{
  position: relative;
  margin-bottom: 0;
}

.form_wrap ul .radio_wrap .input_radio{
  position: absolute;
  top: 0;
  right: 0;
  opacity: 0;
}

.form_wrap ul .radio_wrap span{
  display: inline-block;
  font-size: 17px;
  padding: 3px 15px;
  border-radius: 15px;
  color: #101749;
}

.form_wrap .input_radio:checked ~ span{
  background: #105ce2;
  color:white;
}

.form_wrap .submit_btn{
  width: 100%;
  background: #0d6ad7;
  padding: 10px;
  border: 0;
  color:white;
  font-size:17px;
  border-radius: 3px;
  text-transform: uppercase;
  letter-spacing: 2px;
  cursor: pointer;
}

.form_wrap .submit_btn:hover{
  background: #051c94;
}
  </style>
</head>
<body>
    <div class="wrapper">
        <div class="registration_form">
            <div class="title">Form Peserta</div>
            <form method="POST" action="peserta.php">
                <div class="form_wrap">
                    <div class="input_wrap">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama">
                    </div>
                    <div class="input_wrap">
                        <label for="nim">NIM</label>
                        <input type="text" name="nim" id="nim">
                    </div>
                    <div class="input_wrap">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email">
                    </div>
                    <div class="input_wrap">
                        <label>Program Studi</label>
                        <ul>
                            <li>
                                <label class="radio_wrap">
                                    <input type="radio" name="prodi" value="TE" class="input_radio">
                                    <span>TE</span>
                                </label>
                            </li>
                            <li>
                                <label class="radio_wrap">
                                    <input type="radio" name="prodi" value="PTE" class="input_radio">
                                    <span>PTE</span>
                                </label>
                            </li>
                            <li>
                                <label class="radio_wrap">
                                    <input type="radio" name="prodi" value="PTIK" class="input_radio">
                                    <span>PTIK</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="input_wrap">
                        <label>Bidang</label>
                        <ul>
                            <li>
                                <label class="radio_wrap">
                                    <input type="radio" name="bidang" value="hardware" class="input_radio">
                                    <span>Hardware</span>
                                </label>
                            </li>
                            <li>
                                <label class="radio_wrap">
                                    <input type="radio" name="bidang" value="software" class="input_radio">
                                    <span>Software</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="input_wrap">
                        <label>Concern</label>
                        <ul>
                            <li>
                                <label class="radio_wrap">
                                    <input type="radio" name="concern" value="sensor" class="input_radio">
                                    <span>Sensor</span>
                                </label>
                            </li>
                            <li>
                                <label class="radio_wrap">
                                    <input type="radio" name="concern" value="panel" class="input_radio">
                                    <span>Panel Surya</span>
                                </label>
                            </li>
                            <li>
                                <label class="radio_wrap">
                                    <input type="radio" name="concern" value="tpms" class="input_radio">
                                    <span>TPMS</span>
                                </label>
                            </li>
                            <li>
                                <label class="radio_wrap">
                                    <input type="radio" name="concern" value="web" class="input_radio">
                                    <span>Web Programming</span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="input_wrap">
                        <input type="submit" value="Tambah Peserta" class="submit_btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>