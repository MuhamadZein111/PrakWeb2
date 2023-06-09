<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container px-5">
        <h1 class="text-center">FORM HTML pada php</h1>
        <form method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Nama</label>
                <div class="col-8">
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-4 col-form-label">Email</label>
                <div class="col-8">
                    <input id="email" name="email" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="lokasi" class="col-4 col-form-label">Lokasi</label>
                <div class="col-8">
                    <select id="lokasi" name="lokasi" class="form-control">
                        <option value="Surakarta">Surakarta</option>
                        <option value="Jakarta">Jakarta</option>
                        <option value="Bandung">Bandung</option>
                        <option value="Bogor">Bogor</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="gender" class="col-4 col-form-label">Jenis Kelamin</label>
                <div class="col-8">
                    <input id="gender_pria" name="gender" type="radio" value="Pria">
                    <label for="gender_pria">Pria</label><br>
                    <input id="gender_wanita" name="gender" type="radio" value="Wanita">
                    <label for="gender_wanita">Wanita</label>
                </div>
            </div>
            <div class="form-group row">
                <label for="skill" class="col-4 col-form-label">Skill</label>
                <div class="col-8">
                    <input id="skill_PHP" name="skill[]" type="checkbox" value="PHP">
                    <label for="skill_PHP">PHP</label><br>
                    <input id="skill_MySQL" name="skill[]" type="checkbox" value="MySQL">
                    <label for="skill_MySQL">MySQL</label><br>
                    <input id="skill_Javascript" name="skill[]" type="checkbox" value="Javascript">
                    <label for="skill_Javascript">Javascript</label><br>
                    <input id="skill_HTML" name="skill[]" type="checkbox" value="HTML">
                    <label for="skill_HTML">HTML</label><br>
                    <input id="skill_CSS" name="skill[]" type="checkbox" value="CSS">
                    <label for="skill_CSS">CSS</label>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
        <hr>
        @isset($data)
            <h1 class="text-center">Hasil Form</h1>
            <ul>
                <li>Nama : {{$data['nama']}}</li>
                <li>Email : {{$data['email']}}</li>
                <li>Lokasi : {{$data['lokasi']}}</li>
                <li>Jenis Kelamin : {{$data['gender']}}</li>
                <li>
                    Skill : 
                    @foreach ($data['skill'] as $skill)
                        {{$skill}},
                    @endforeach
                </li>
            </ul>
        @endisset
    </div>
</body>

</html>
