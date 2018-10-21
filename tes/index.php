<html>
<head>
<title>Testing</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script type="text/javascript">
$(function() {
  $( "#nama_pelajar" ).autocomplete({
    source: 'konek.php'
  });
});
</script>
</head>
<body>
<form method="post">
<input type="teks" id="nama_pelajar"/>
</form>
</body>
</html>
