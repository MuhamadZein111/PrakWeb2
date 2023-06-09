<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <div class="container-fluid">
      </br>
      <h1><center>Surat Kesehatan</center></h1>
      <div class="row">
        <div class="col-md-12">
        <hr><br>
          <form>
            <div class="form-group row">
              <label for="text" class="col-4 col-form-label">Nama</label> 
              <div class="col-8">
                <input id="text" name="text" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="text1" class="col-4 col-form-label">Tanggal Pemeriksaan</label> 
              <div class="col-8">
                <input id="text1" name="text1" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="text2" class="col-4 col-form-label">Tanggal lahir/usia</label> 
              <div class="col-8">
                <input id="text2" name="text2" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="text3" class="col-4 col-form-label">Jenis Kelamin</label> 
              <div class="col-8">
                <input id="text3" name="text3" type="text" class="form-control">
              </div>
            </div> 
          </form>
          <br><hr>
          <table class="table table-bordered">
            <thead>
              <th>Jenis Tes</th>
              <th>Hasil Pemeriksaan</th>
              <th>Normal</th>
            </thead>
            <tbody>
              <tr>
                <td>Tekanan Darah</td>
                <td></td>
                <td>120/80mmhg</td>
              </tr>
              <tr>
                <td>Asam Urat</td>
                <td></td>
                <td>Pria : < 7 mg/dl | < 6 mg/dl</td>
              </tr>
              <tr>
                <td>Kolesterol total</td>
                <td></td>
                <td>< 200 mg/dl</td>
              </tr>
              <tr>
                <td rowspan="3">Gula darah</td>
                <td></td>
                <td rowspan="3">
                  Puasa: 70-110 mg/dl
                  <hr>
                  2 jam setelah makan: 100-150 mg/dl
                  <hr>
                  Sewaktu/acak : 70-125 mg/dl
                </td>
                
                
              </tr>
            </tbody>
          </table>
		    </div>
	    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>