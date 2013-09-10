<html>

<head>
<meta http-equiv="Content-Language" content="de">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>Robert Kraska</title>
<base target="Inhalt">
</head>

<body bgcolor="#000000" background="hig.jpg">

<p><span style="position: absolute; left: 0; top: 0">
<img border="0" src="oben3.jpg" width="1280" height="160"></span></p>
 <script language="php">
$dateiname="count/zaehl.txt";
   if (file_exists ($dateiname)) {
   $fp=fopen($dateiname, "r");
   $zaehler=fread ($fp, 100);
   fclose ($fp);
   $zaehler=$zaehler+1;
   $fp=fopen ($dateiname,"w");
   fwrite ($fp, $zaehler);
   fclose ($fp);
    }

$dateiname="count_s/zaehl.txt";
   if (file_exists ($dateiname)) {
   $fp=fopen($dateiname, "r");
   $zaehler=fread ($fp, 100);
   fclose ($fp);
   $zaehler=$zaehler+1;
   $fp=fopen ($dateiname,"w");
   fwrite ($fp, $zaehler);
   fclose ($fp);

  }
 </script>
</body>

</html>