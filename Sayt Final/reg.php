<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <link href="/css/Style2.css" rel="stylesheet"  type="text/css">
    <title>AvtoServus В&Ш_Reg</title>
</head>
<body style="
    background-image: url(../Img/Fon.png);">
<div id="Header"> 
      

<form action="BD/Form.php" method="post" name="forma">
  
<div id="logo"> 
          <a href="AvtoServis.php" id="Home"> <nk  id="tt">Автосервис</nk> «Винтик&Шпунтик»   </a>
      </div>

    <div id="OoUs"> 
       <a href="/about.php">
        <div  id="Home2">О нас</div>
      </a> 

      <a href="/feed.php" id="Home2">
     <div >Обратная связь</div>
    </div>
      </a>

      <a href="/prais.php">
        <div  id="Home2"> Прайс-лист </div>
      </a> 
     

    <div id="Reg">
      <a href="/reg.php" id="r1"> Регистрация </a> | <a href="/avt.php"> Новости</a>
    </div>
    </div>

 </div>
        

 <fieldset>
<div id ="Osnova">
<div id="Forma">
   <label >Имя:</label><br/>
     <input type="text" name="first_name" size="30" for="first_name"><br/>
   <label >Фамилия:</label><br/>
     <input type="text" name="last_name" size="30" for="last_name"><br/>
   <label >Email:</label><br/>
     <input type="text" name="email" size="30" for="email"><br/>
     <label >Телефон:</label><br/>
     <input type="text" name="Tel" size="30" for="Tel"><br/>
</div>

<div id="Forma3">
   
   <label >Марка автомобиля:</label><br/>
     <select  size="1"type="text" name="Marka" size="30" for="Marka">
			<option value = "1">----</option>
			<option value = "2">Shkoda</option>
			<option value = "3">Opel</option>
      <option value = "4">ВАз</option>
			<option value = "5">Reno</option>
			<option value = "6">Other</option>
		</select>
     
     
     <br/>
   <label >Модель автомобиля:</label><br/>
     <select  size="1"type="text" name="Model" size="30" for="Model">
			<option value = "1">----</option>
			<option value = "2">B001</option>
			<option value = "3">G055</option>
      <option value = "4">IIk7</option>
			<option value = "5">HG34</option>
			<option value = "6">Other</option>
		</select>
     
     
     
     <br/>
   
</div>

<div id="Forma4">
   <label >Выберете дату для записи:</label><br/>
     <select  size="1" type="text" name="Date1" size="30" for="Date1">
			<option value = "A">-----</option>
			<option value = "B">30.04.2021</option>
			<option value = "C">1.05.2021</option>
      <option value = "D">2.05.2021</option>
			<option value = "E">3.05.2021</option>
			<option value = "F">4.05.2021</option>
		</select>
     
     <br/>
    <label >Выберете время для записи:</label><br/>
     <select  size="1" type="text" name="Time1" size="30" for="Time1">
			<option value = "G">----</option>
			<option value = "H">9:00</option>
			<option value = "I">12:00</option>
      <option value = "J">15:00</option>
			<option value = "K">18:00</option>
			<option value = "L">21:00</option>
		</select>
     <br/>
</div>


<div id="Forma5">
   
   <label >Выберете адрес:</label><br/>
     <select Ip="map" onselect="changeURL" size="1" type="text" name="Adress" size="30" for="Adress">
     <option value = "M">-----</option>
			<option value = "Oo">Автосервис ул. Нансена, 97Б, Ростов-на-Дону, Ростовская обл., 344079</option>
			<option value = "Pp">Автосервис ул. Немировича-Данченко, 38А, Ростов-на-Дону, Ростовская обл., 344064</option>
		</select>
     <br/>
</div>
</div>
<div id="map">
<iframe id="address" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d173294.91504000983!2d39.487915542855966!3d47.26092314215662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3c777c3b4b6ef%3A0x8248b451e48b4d04!2z0KDQvtGB0YLQvtCyLdC90LAt0JTQvtC90YMsINCg0L7RgdGC0L7QstGB0LrQsNGPINC-0LHQuy4!5e0!3m2!1sru!2sru!4v1619676222713!5m2!1sru!2sru" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
<script type="text/javascript">
      var seladdress = document.getElementById("map").value
      var GM = document.getElementById('address')
      if ( seladdress === Oo) {
  GM.src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6441.76510727271!2d39.6948018627328!3d47.247321870177096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3c0c827492ee80db!2z0JDQstGC0L7RgdC10YDQstC40YE!5e0!3m2!1sru!2sru!4v1619610549632!5m2!1sru!2sru" ;
  	address.src = GM.src; }
 			else if ( seladdress === Pp) {
 	GM.src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6440.9435250963725!2d39.69804260000996!3d47.25407711797802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x790c71a435338945!2z0JDQstGC0L7RgdC10YDQstC40YE!5e0!3m2!1sru!2sru!4v1619610606398!5m2!1sru!2sru" ;
 	address.src = GM.src
 			}
    </script>
    
</fieldset>
<div id="submit1">
<input id="submit" type="submit" value="Осуществить запись"><br/>
    </div>
</div>

</body>
</html>