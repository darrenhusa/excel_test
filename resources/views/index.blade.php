<!DOCTYPE html>
<html>
<head>
  <title>Export Data in Excel</title>
</head>
<body>

  <form method="POST" action="/export">
    @csrf

    <input type="submit" name="exportexcel" value="Excel Export">
    <input type="submit" name="exportcsv" value="CSV Export">

  </form>

</body>
</html>
