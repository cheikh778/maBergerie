<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('storage/css/styles.css')}}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Liste moutons</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>Khar_bi</h1>
        </div>
        <ul>
            <li> <span><a href="">Dashboard</a></span> </li>
            <li><span><a href="">Add Sheep</a></span> </li>
            <li><span><a href="">Sheep List</a></span> </li>

        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <span></span>
                </div>
                <div class="user">
                    <div class="img-case">
                        <span></span>
                    </div>
                    <ul class="nav-item dropdown">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->nom }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <br>
        <div class="content">
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Ajouter Un Mouton</h2>
                    </div>
                    <form method="POST" action="{{route('moutons.store')}}" enctype="multipart/form-data" class="mt-4">
                        @csrf

                        <div class="form-group">
                            <label for="nom">Nom du mouton</label>
                            <input type="text" id="nom" name="nom" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="race">Race du mouton</label>
                            <select id="race" name="race" class="form-control" required>
                                <option value="ladoum">Ladoum</option>
                                <option value="bali-bali">Bali-bali</option>
                                <option value="kharou-yar">Kharou yaar</option>
                                <option value="merinos">Mérinos</option>
                                <option value="romney">Romney</option>
                                <option value="suffolk">Suffolk</option>
                                <option value="dorset">Dorset</option>
                                <option value="shropshire">Shropshire</option>
                                <option value="cheviot">Cheviot</option>
                                <option value="border-leicester">Border Leicester</option>
                                <option value="corriedale">Corriedale</option>
                                <option value="lincoln">Lincoln</option>
                                <option value="clun-forest">Clun Forest</option>
                                <option value="columbia">Columbia</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="genealogie">Généalogie du mouton</label>
                            <textarea type="text" id="genealogie" name="genealogie" class="form-control" required cols="5" rows="5">

                            </textarea>

                        </div>

                        <div class="form-group">
                            <label for="photo">Photo du mouton</label>
                            <input type="file" id="photo" name="photo" class="form-control-file">
                        </div>

                        <div class="form-group">
                            <label for="taille">Taille du mouton (en cm)</label>
                            <input type="number" id="taille" name="taille" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="poids">Poids du mouton (en kg)</label>
                            <input type="number" id="poids" name="poids" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="prix">Prix du mouton (en francs)</label>
                            <input type="number" id="prix" name="prix" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="date_de_naissance">Date de naissance du mouton</label>
                            <input type="date" id="date_de_naissance" name="date_de_naissance" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <input type="number" id="proprietaire_id" name="proprietaire_id" value="{{ Auth::user()->id }}" hidden class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Ajouter le mouton</button>
                    </form>
                    <br>
                </div>
            </div>
            <br>
        </div>


    </div>
</body>

</html>
