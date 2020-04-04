<?php include ("includes/header.php")?>

<!DOCTYPE html>
<html>
<head>
  <title>Responsive Table</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="responsivetable.css"/>
</head>

   <table class="table">
     <thead>
     	 <th>Okul Adı</th>
     	 <th>Baslangıc Yılı</th>
     	 <th>Bitis Yılı</th>
     	 <th>Not Ortalaması</th>
     </thead>
     <tbody>
     	  <tr>
     	  	  <td data-label="Okul Adı">Gungor Tekiner I.Ö</td>
     	  	  <td data-label="Baslangıc Yılı">2002</td>
     	  	  <td data-label="Bitis Yılı">2010</td>
     	  	  <td data-label="Not Ortalaması">97</td>
     	  </tr>

     	  <tr>
     	  	  <td data-label="Okul Adı">Florya Tevfik Ercan A.L</td>
     	  	  <td data-label="Baslangıc Yılı">2010</td>
     	  	  <td data-label="Bitis Yılı">2014</td>
     	  	  <td data-label="Not Ortalaması">81</td>
     	  </tr>

     	  <tr>
     	  	  <td data-label="Okul Adı">Sakarya Üniversitesi</td>
     	  	  <td data-label="Baslangıc Yılı">2014</td>
     	  	  <td data-label="Bitis Yılı">Henüz bitmedi</td>
     	  	  <td data-label="Not Ortalaması">1.7</td>
     	  </tr>
     </tbody>
   </table>

</body>
</html>


<?php include ("includes/footer.php")?>