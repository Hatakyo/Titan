<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
body {
  font-family: Arial, Helvetica, sans-serif;
}
/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}
/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 15%;
  height: 300px; /* only for demonstration, should be removed */
  padding: 20px;
}
/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}
article {
  float: left;
  padding: 20px;
  width: 85%;
  height: 300px; /* only for demonstration, should be removed */
  /* text-align: center; */
}
.luu{
     margin-top: 10px;
     height: 40px;
     width: 90px;
     border: 1px solid black;
     border-radius: 8px;
    
}
.luu:hover{
    background-color: #EEB422
}
/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}
.up_contract {
            width: 250px;
            height: 200px;
            background-color: #FFFFFF;
            box-shadow: 0px 2px 10px 0px #D3D3D3;
            border-radius: 10px;
            position: relative;

        }
        
        .klot {
                position: relative;
                text-align: center;
                width: 55%;
                height: 100%;
          
            }
            .klot img {
                    position: relative;
                    z-index: 0;
                    width: 100%;
                    height: 100%;
                    border-radius: 10px;
                    left: 0;
                }

                .clickUp_img {
                    z-index: 5;
                    position: absolute;
                    top: 50%;
                    left: 35%;
                    border : 1px solid;
                    cursor: pointer;
                }
                .clickUp_img:hover{
                  background: #33333354;
                 
                }
                .input-up {
                        display: none;
                        position: relative;
                        border: 1px
                    }

                    .input-up  label {
                        position: relative;
                        width: 200px;
                        height: 40px;
                        background-color: #F3EFEF;
                        top: 12px;
                        border-radius: 5px;
                        padding: 8px 12px;
                        cursor: pointer;
                        border: 1px solid;
                        
                    }
                    .input-up  label  span {
                            position: relative;
                            font-size: 18px;
                            font-style: normal;
                            font-weight: 500;
                            line-height: 23px;
                            color: #333333;

                        }
/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 100%) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
body{
  background: #3333330d;
}
form{
    padding: 11px;
    border: 1px solid;
    border-radius: 10px;
    background: #fff;
}
nav{
    border: 1px solid;
    border-radius: 10px;
    background: #fff;
    margin: 22px 0;
}
</style>
</head>
<body>
<header>


  <h2>Admin</h2>
</header>

<section>

<?php require_once 'navadmin.php'; ?>
  <article>
  <form action="getupadd.php" method="post" enctype="multipart/form-data">
  
       <table width="60%" >
       <tr>
    <td width="25%" height="50">Type</td>
    <td width="45"><input type="number" name="type" style="height: 25px;width: 327px; padding: 5px 10px" required></td>
  </tr>
  <tr>
    <td width="25%" height="50">Tên sản phẩm</td>
    <td width="45"><input type="text" name="ten" style="height: 25px;width: 327px; padding: 5px 10px" required></td>
  </tr>
  <tr>
    <td height="50">Hình ảnh</td>
 <td> <div class="klot" id="klot">
            <img id="output" alt="" />
            <div class="clickUp_img">
                <input type="file" name="pdf" id="file" class="input-up" onchange="loadFile(event)">
                <label for="file">
                <span class="file-button">
                    Upload hình ảnh
                  </span>
                </label>
            </div></td>
  </tr>
  <tr>
    <td height="50">Giá</td>
    <td><input type="number" name="gia" required></td>
  </tr>
  <tr>
    <td height="50">Mô tả</td>
    <td><textarea type="text"  name="mota"  style="height: 100px;width: 327px; padding: 5px 10px" required> </textarea></td>
  </tr>
  </table>
   
  <a href=""> <input type="submit" value="Lưu" class="luu" ></a>
  </form>
  </article>

 
</section>
</body>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
</html>