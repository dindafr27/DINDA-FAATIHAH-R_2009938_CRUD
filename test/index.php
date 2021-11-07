<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="styles.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<nav class="navbar fixed-top navbar-expand-md navbar-dark" style="background-color:rgb(86, 161, 163)">
    <div class="container mt-3">
    <ul class="navbar-nav ml-auto">
    <a class="navbar-brand" href="#">
        <style>

            .color {
              background-color: transparent;
            }
          </style>
        <a href=""><div class="color text-white"></a>
            Hugging Reefs
        </ul>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDropdown" aria-controls="navbarDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
    </div>
            <div class="container">
      <div class="collapse navbar-collapse" id="navbarDropdown">
             <li class="nav-item">
             <ul class="navbar-nav mr-auto">
                <a class="nav-link active" aria-current="page" href="test.html">  Home</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="curriculum.html">Learn</a>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Profile
            </a>
               <style>
                     .dropdown {
                        position: relative;
                        display: inline-block;
                    }

                    .dropdown-content {
                        display: none;
                        position: absolute;
                        background-color: #f9f9f9;
                        min-width: 160px;
                        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                        padding: 12px 16px;
                        z-index: 1;
                    }

                    .dropdown:hover .dropdown-content {
                    display: block;
                    }
               </style>
               <div class="dropdown-content">
                   <a class="dropdown-item" href="page1.html">History</a>
                   <a class="dropdown-item" href="page2.html">Vision & Mission </a>
                   <a class="dropdown-item" href="page3.html">Meet the Team</a>
           </div>
           </li>

           <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                   News
               </a>
                    <style>
                     .dropdown {
                      position: relative;
                      display: inline-block;
                   }

                     .dropdown-content {
                     display: none;
                     position: absolute;
                     background-color: #f9f9f9;
                     min-width: 160px;
                    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                    padding: 12px 16px;
                    z-index: 1;
                    }

                     .dropdown:hover .dropdown-content {
               display: block;
               }
          </style>
               <div class="dropdown-content">
                <a class="dropdown-item" href="">Reefs</a>
                <a class="dropdown-item" href="">Their Habitats </a>
                <a class="dropdown-item" href="">Ocean</a>
                </div>
                <li class="nav-item">
              <a class="nav-link" href="FAQ.html">Internship</a>
         </li>
         <li class="nav-item">
              <a class="nav-link" href="FAQ.html">Project</a>
         </li>
         <li class="nav-item">
              <a class="nav-link" href="FAQ.html">Gallery</a>
         </li>
           <li class="nav-item">
               <a class="nav-link" href="curriculum.html">FAQ</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="curriculum.html">Donate</a>
          </li>
        </ul>
        </div>
        </nav>
        </body>

<style>

    .header {
      background-image: url("turtle.jpeg");
      background-color: #f1f1f1;
      background-repeat:no-repeat;
      background-position:center;
      background-size: cover;
      height: auto;
      padding: 30px;

  
    }
    .font {
        text-align: left;
        font-family: 'abhaye';
        src: url("AbhayaLibre-Regular.ttf");
        font-size:5vw;

    }
    @media screen and (min-width: 601px) {
    .font {
    font-size: 40px;
    }
}
    @media screen and (min-width: 567px) {
    .font {
    font-size: 40px;
    }
}
    @media screen and (max-width: 600px) {
    .font {
    font-size: 26px;
  }
}
    .test {
        text-align: left;
        font-family: 'Times New Roman', Times, serif;
        font-size: 3vw;
    }
    @media screen and (min-width: 601px) {
    .test {
    font-size: 20px;
    }
}
    @media screen and (max-width: 600px) {
    .test {
    font-size: 17px;
  }
}
    </style>
    </head>
    <body>
    
    <div class="header text-white">
   <br>
   <br>
   <br>
   <br>
   <div class="container">
    <div class="font col-sm-9">CORAL REEFS<br> COMMUNITY</div>
    <p class="test p-2">Your support can help and save the coral reefs in the ocean</p>
</div>
</div>
<br>
<br>
<body>
<?php
    include ("koneksi.php");

    $query = "select * from identity";
    $hasil = mysqli_query($koneksi, $query);
?>
<div class="container">
    <div class="row">
        <br>
        <div class="col image-fluid video-fluid"><iframe width="590" height="315" src="https://www.youtube.com/embed/i4ZSMDWNXTg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col p-2 text-left text-fluid"><h3><mark style="color: rgb(43, 98, 201);">Together We Can Save Reefs</mark></h3>

    <p>There are currently miles of dying coral reefs caused widespread physical destruction and left toxic debris and pollution in the ocean. The pressures from climate change, when combined with these additional pressures, are resulting in dramatic, system-wide declines in the Reef’s condition.
        Climate change impacts on coral reefs are predicted to worsen and critically affect the survival of coral reefs globally without the strongest possible climate change mitigation. It will take 100's of years for these reefs to naturally re-grow without our help. Your support can help save endangered marine species, 
        Watch the youtube video to see how beatiful coral reefs is. </p>
    </div>
        </div>
        </div>
        <div><hr></div>
<div class="container pt-3">
<div class="colspan">
<div class="row mb-2">
<div class="col">
<h3 align="center"><font color="steelblue"> Form Register </font> </h3>
<br>
<form action="proses_insert.php" method="POST" align="center">
        ID  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : <input type="text" name="id_identity" value=""><br/><br/>
        Nama   &nbsp; &nbsp; &nbsp; : <input type="text" name="nama" value=""><br/><br/>
        Alamat  &nbsp; &nbsp; : <textarea name="alamat" value=""></textarea><br/><br/>
        Email    &nbsp; &nbsp; &nbsp; : <input type="text" name="email" value=""><br/><br/>
        Birthdate : <input type="text" name="birthdate" value=""><br/><br/>
        ID User  &nbsp; : <input type="text" name="id_user" value=""><br/><br/>
        <input type="submit" value="save" >
</form>
</div>
</div>
<br>
<div><hr></div>
<br>
<br>
<h3 align="center"> Your Identity </h3>
<br>
<br>

    <table class="table table-bordered" align="center" border="2">
        <tr>
            <th> ID </th>
            <th> Nama </th>
            <th> Alamat </th>
            <th> Email </th>
            <th> Birthdate </th>
            <th> User </th>
            <th colspan="2"> Action </th>
        </tr>

        <?php
        while($row = mysqli_fetch_array($hasil)){
            echo "<tr>";
            echo "<td>".$row['id_identity']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['birthdate']."</td>";
            echo "<td>".$row['id_user']."</td>";
            echo "<td><a href= 'edit.php?id_identity=".$row['id_identity']."'>edit</a></td>";
            echo "<td><a href= 'delete.php?id_identity=".$row['id_identity']."'>delete</a></td";
            echo "</tr>";
        }

        ?>
    </table>
    <br>
    <br>
    <br>
</body>
</html>